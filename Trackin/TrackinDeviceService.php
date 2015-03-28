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

class TrackinDeviceService
{

    function __construct($apiClient)
    {
        $this->apiClient = $apiClient;
    }


    /**
     * getAllDevices
     *
     * Get all devices
     * @param $companyId , int: companyId (required)
     *
     * @return array[DeviceVM]
     */

    public function getAllDevices($companyId)
    {

        // parse inputs
        $resourcePath = "/service/api/json/1.1/companies/{companyId}/devices";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "GET";
        $queryParams = array();

        // path params
        if ($companyId !== null) {
            $resourcePath = str_replace("{" . "companyId" . "}",
                $this->apiClient->toPathValue($companyId), $resourcePath);
        }

        // make the API Call
        $response = $this->apiClient->callAPI($resourcePath, $method,
            $queryParams);

        if (!$response) {
            return null;
        }

        $responseObject = $this->apiClient->deserialize($response,
            'array[DeviceVM]');
        return $responseObject;
    }

    /**
     * createDevice
     *
     * Create device
     * @param $companyId , int: companyId (required)
     * @param $deviceVM , DeviceVM: msisdn must be using international format (+1 for US, +33 for France...) (required)
     *
     * @return DeviceVM
     */

    public function createDevice($companyId, $deviceVM)
    {

        // parse inputs
        $resourcePath = "/service/api/json/1.1/companies/{companyId}/devices";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "POST";
        $queryParams = array();

        // path params
        if ($companyId !== null) {
            $resourcePath = str_replace("{" . "companyId" . "}",
                $this->apiClient->toPathValue($companyId), $resourcePath);
        }

        // make the API Call
        $response = $this->apiClient->callAPI($resourcePath, $method,
            $queryParams, $deviceVM);

        if (!$response) {
            return null;
        }

        $responseObject = $this->apiClient->deserialize($response,
            'DeviceVM');
        return $responseObject;
    }

    /**
     * getOneDevice
     *
     * Get device
     * @param $companyId , int: companyId (required)
     * @param $deviceId , int: deviceId (required)
     *
     * @return DeviceVM
     */

    public function getOneDevice($companyId, $deviceId)
    {

        // parse inputs
        $resourcePath = "/service/api/json/1.1/companies/{companyId}/devices/{deviceId}";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "GET";
        $queryParams = array();

        // path params
        if ($companyId !== null) {
            $resourcePath = str_replace("{" . "companyId" . "}",
                $this->apiClient->toPathValue($companyId), $resourcePath);
        }// path params
        if ($deviceId !== null) {
            $resourcePath = str_replace("{" . "deviceId" . "}",
                $this->apiClient->toPathValue($deviceId), $resourcePath);
        }

        // make the API Call
        $response = $this->apiClient->callAPI($resourcePath, $method,
            $queryParams);

        if (!$response) {
            return null;
        }

        $responseObject = $this->apiClient->deserialize($response,
            'DeviceVM');
        return $responseObject;
    }


}
