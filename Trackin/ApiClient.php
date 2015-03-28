<?php
/**
 *  Copyright 2015 Trackin.co, Inc.
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */

/**
 *
 * @param string $className the class to attempt to load
 */

function php_class_autoloader($className)
{
    $currentDir = dirname(__FILE__);

    $className = end(explode("\\", $className));


    if (file_exists($currentDir . '/' . $className . '.php')) {
        include_once $currentDir . '/' . $className . '.php';
    } else if (file_exists($currentDir . '/models/' . $className . '.php')) {
        include_once $currentDir . '/models/' . $className . '.php';

    } else if (file_exists($currentDir . '/exceptions/' . $className . '.php')) {
        include_once $currentDir . '/exceptions/' . $className . '.php';
    }
}

spl_autoload_register('php_class_autoloader');


class APIClient
{

    public static $POST = "POST";
    public static $GET = "GET";
    public static $PUT = "PUT";
    public static $DELETE = "DELETE";

    /**
     * @var string $host Host URL
     */
    public $host = "https://backend.app.trackin.co";

    /**
     * @var array $defaultHeaders Array of Headers you would like applied to all requests with this client
     */
    public $defaultHeaders;

    /**
     * @param $apikey , string:  your Trackin api key
     * @param $subId , double: your Trackin sub id
     */
    function __construct($apikey, $subId)
    {
        $this->setApiKey($apikey);
        $this->setSubscriptionId($subId);
        $this->defaultHeaders['Accept'] = 'application/json;charset=UTF-8';
        $this->defaultHeaders['Content-Type'] = 'application/json;charset=UTF-8';
    }

    /**
     * @param string $apikey your trackin api key
     */
    public function setApiKey($apikey)
    {
        $this->defaultHeaders["api_key"] = $apikey;
    }

    /**
     * @param string $subId your trackin sub_id
     */
    public function setSubscriptionId($subId)
    {
        $this->defaultHeaders["sub_id"] = $subId;
    }

    /**
     * Take value and turn it into a string suitable for inclusion in
     * the path, by url-encoding.
     * @param string $value a string which will be part of the path
     * @return string the serialized object
     */
    public static function toPathValue($value)
    {
        return rawurlencode($value);
    }

    /**
     * Take value and turn it into a string suitable for inclusion in
     * the query, by imploding comma-separated if it's an object.
     * If it's a string, pass through unchanged. It will be url-encoded
     * later.
     * @param object $object an object to be serialized to a string
     * @return string the serialized object
     */
    public static function toQueryValue($object)
    {
        if (is_array($object)) {
            return implode(',', $object);
        } else {
            return $object;
        }
    }

    /**
     * Just pass through the header value for now. Placeholder in case we
     * find out we need to do something with header values.
     * @param string $value a string which will be part of the header
     * @return string the header string
     */
    public static function toHeaderValue($value)
    {
        return $value;
    }

    /**
     * Deserialize a JSON string into an object
     *
     * @param object $data object or primitive to be deserialized
     * @param string $class class name is passed as a string
     * @return object an instance of $class
     */

    public static function deserialize($data, $class)
    {

        if ($data === null) {
            $deserialized = null;
        } else if (substr($class, 0, 4) == 'map[') {
            $inner = substr($class, 4, -1);
            $values = array();
            if (strrpos($inner, ",") !== false) {
                $subClass = explode(',', $inner, 2)[1];
                foreach ($data as $key => $value) {
                    $values[] = array($key => self::deserialize($value, $subClass));
                }
            }
            $deserialized = $values;
        } else if (substr($class, 0, 6) == 'array[') {
            $subClass = substr($class, 6, -1);
            $values = array();
            foreach ($data as $key => $value) {
                $values[] = self::deserialize($value, $subClass);
            }
            $deserialized = $values;
        } else if ($class == 'DateTime') {
            $ts = intval($data / 1000);
            $deserialized = new \DateTime("@$ts");
        } else if (in_array($class, array('string', 'int', 'float', 'bool', 'boolean', 'double'))) {
            $data = (is_object($data) || is_array($data)) ? json_encode($data) : $data;
            settype($data, $class);
            $deserialized = $data;
        } else {
            $instance = new $class();
            foreach ($instance::$fieldTypes as $property => $type) {
                if (isset($data->$property)) {
                    $instance->$property = self::deserialize($data->$property, $type);
                }
            }
            $deserialized = $instance;
        }

        return $deserialized;
    }

    /**
     * @param integer $seconds Number of seconds before timing out [set to 0 for no timeout]
     * @throws Exception
     */
    public function setTimeout($seconds)
    {
        if (!is_numeric($seconds)) {
            throw new Exception('Timeout variable must be numeric.');
        }
        $this->curl_timeout = $seconds;
    }

    /**
     * @param string $resourcePath path to method endpoint
     * @param string $method method to call
     * @param array $queryParams parameters to be place in query URL
     * @param array $postData parameters to be placed in POST body
     * @return mixed
     * @throws Exception
     * @internal param array $headerParams parameters to be place in request header
     */
    public function callAPI($resourcePath, $method, $queryParams, $postData = null)
    {

        $headers = array();

        # Allow headers passed in through $headerParams to take precedent over $this->defaultHeaders
        if ($this->defaultHeaders != null) {
            foreach ($this->defaultHeaders as $key => $val) {
                $headers[] = "$key: $val";
            }
        }

        $url = $this->host . $resourcePath;

        $curl = curl_init();
        if (isset($this->curl_timeout)) {
            curl_setopt($curl, CURLOPT_TIMEOUT, $this->curl_timeout);
        }

        if (!empty($queryParams)) {
            $url = ($url . '?' . http_build_query($queryParams));
        }
        $postData = json_encode(self::sanitizeForSerialization($postData));

        if ($method == self::$POST) {
            curl_setopt($curl, CURLOPT_POST, true);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $postData);
        } else if ($method == self::$PUT) {
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
            curl_setopt($curl, CURLOPT_POSTFIELDS, $postData);
        } else if ($method == self::$DELETE) {
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "DELETE");
            curl_setopt($curl, CURLOPT_POSTFIELDS, $postData);
        } else if ($method != self::$GET) {
            throw new Exception('Method ' . $method . ' is not recognized.');
        }
        curl_setopt($curl, CURLOPT_URL, $url);
        // return the result on success, rather than just TRUE
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        // Make the request
        $response = curl_exec($curl);
        $response_info = curl_getinfo($curl);

        // Handle the response
        if ($response_info['http_code'] == 0) {
            throw new Exception("TIMEOUT: api call to " . $url .
                " took more than 5s to return");
        } else if ($response_info['http_code'] >= 200 && $response_info['http_code'] <= 204) {
            $data = json_decode($response);
        } else if ($response_info['http_code'] == 401 || $response_info['http_code'] == 403) {
            throw new Exception("Unauthorized API request to " . $url . ": " . json_decode($response)->message, $response_info['http_code']);
        } else if ($response_info['http_code'] == 404) {
            throw new Exception("Not found", $response_info['http_code']);
        } else {
            throw new Exception(json_decode($response)->message . " http response code: " . $response_info['http_code'],
                $response_info['http_code']);
        }
        return $data;
    }

    /**
     * Build a JSON POST object
     */
    protected function sanitizeForSerialization($data, $depth = 0)
    {
        if (is_scalar($data) || ($data === null && $depth === 0)) {
            $sanitized = $data;
        } else if ($data === null && $depth > 0) {
            throw new SerializationException("Null value");
        } else if ($data instanceof \DateTime) {
            $sanitized = $data->format(\DateTime::ISO8601);
        } else if (is_array($data)) {
            foreach ($data as $property => $value) {
                try {
                    $data[$property] = $this->sanitizeForSerialization($value, $depth + 1);
                } catch (SerializationException $e) {
                    unset($data[$property]);
                }
            }
            $sanitized = $data;
        } else if (is_object($data)) {
            $values = array();
            foreach (array_keys($data::$fieldTypes) as $property) {
                try {
                    $values[$property] = $this->sanitizeForSerialization($data->$property, $depth + 1);
                } catch (SerializationException $e) {
                    unset($values[$property]);
                }
            }
            $sanitized = $values;
        } else {
            $sanitized = (string)$data;
        }

        return $sanitized;
    }

}

