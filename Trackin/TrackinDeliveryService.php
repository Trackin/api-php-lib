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

class TrackinDeliveryService
{

    function __construct($apiClient)
    {
        $this->apiClient = $apiClient;
    }


    /**
     * getAllDeliveries
     *
     * Get all deliveries
     * Search params can be specified individually.
     * You can add a status but no date filter for example
     *
     * @param $companyId , int: companyId (required)
     * @param $after , int: after (optional)
     * @param $before , int: before (optional)
     * @param $status , string: status (optional)
     *
     * @return array[DeliveryVM]
     */
    public function getAllDeliveries($companyId, $after = null, $before = null, $status = null)
    {

        // parse inputs
        $resourcePath = "/service/api/json/1.1/companies/{companyId}/orders";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "GET";
        $queryParams = array();

        // query params
        if ($after !== null) {
            $queryParams['after'] = $this->apiClient->toQueryValue($after);
        }// query params
        if ($before !== null) {
            $queryParams['before'] = $this->apiClient->toQueryValue($before);
        }// query params
        if ($status !== null) {
            $queryParams['status'] = $this->apiClient->toQueryValue($status);
        }
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
            'array[DeliveryVM]');
        return $responseObject;
    }

    /**
     * createDelivery
     *
     * Create a new delivery
     * @param $companyId , int: companyId (required)
     * @param $deliveryFormVM , DeliveryFormVM: delivery (required)
     *
     * @return DeliveryVM
     */
    public function createDelivery($companyId, $deliveryFormVM)
    {

        // parse inputs
        $resourcePath = "/service/api/json/1.1/companies/{companyId}/orders";
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
            $queryParams, $deliveryFormVM);

        if (!$response) {
            return null;
        }

        $responseObject = $this->apiClient->deserialize($response,
            'DeliveryVM');
        return $responseObject;
    }

    /**
     * updateDelivery
     *
     * Update delivery
     * @param $companyId , int: companyId (required)
     * @param $idOrder , int: deliveryId (required)
     * @param $deliveryFormUpdateVM , DeliveryFormUpdateVM: delivery (required)
     *
     * @return DeliveryVM
     */
    public function updateDelivery($companyId, $idOrder, $deliveryFormUpdateVM)
    {

        // parse inputs
        $resourcePath = "/service/api/json/1.1/companies/{companyId}/orders/{deliveryId}";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "PUT";
        $queryParams = array();

        // path params
        if ($idOrder !== null) {
            $resourcePath = str_replace("{" . "deliveryId" . "}",
                $this->apiClient->toPathValue($idOrder), $resourcePath);
        }// path params
        if ($companyId !== null) {
            $resourcePath = str_replace("{" . "companyId" . "}",
                $this->apiClient->toPathValue($companyId), $resourcePath);
        }

        // make the API Call
        $response = $this->apiClient->callAPI($resourcePath, $method,
            $queryParams, $deliveryFormUpdateVM);

        if (!$response) {
            return null;
        }

        $responseObject = $this->apiClient->deserialize($response,
            'DeliveryVM');
        return $responseObject;
    }

    /**
     * cancelDelivery
     *
     * Cancel a delivery
     * @param $companyId , int: companyId (required)
     * @param $idOrder , int: idOrder (required)
     *
     * @return DeliveryVM
     */
    public function cancelDelivery($companyId, $idOrder)
    {

        // parse inputs
        $resourcePath = "/service/api/json/1.1/companies/{companyId}/orders/{idOrder}/cancel";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "PUT";
        $queryParams = array();

        // path params
        if ($companyId !== null) {
            $resourcePath = str_replace("{" . "companyId" . "}",
                $this->apiClient->toPathValue($companyId), $resourcePath);
        }// path params
        if ($idOrder !== null) {
            $resourcePath = str_replace("{" . "idOrder" . "}",
                $this->apiClient->toPathValue($idOrder), $resourcePath);
        }


        // make the API Call
        $response = $this->apiClient->callAPI($resourcePath, $method,
            $queryParams);

        if (!$response) {
            return null;
        }

        $responseObject = $this->apiClient->deserialize($response,
            'DeliveryVM');
        return $responseObject;
    }

    /**
     * dispatch
     *
     * Dispatch a delivery. The device needs to have either an id or an msisdn
     * @param $companyId , int: companyId (required)
     * @param $idOrder , int: idOrder (required)
     * @param $device , DeviceVM: device (required)
     *
     * @return DeliveryVM
     */
    public function dispatch($companyId, $idOrder, $device)
    {

        // parse inputs
        $resourcePath = "/service/api/json/1.1/companies/{companyId}/orders/{idOrder}/dispatch";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "PUT";
        $queryParams = array();

        // path params
        if ($idOrder !== null) {
            $resourcePath = str_replace("{" . "idOrder" . "}",
                $this->apiClient->toPathValue($idOrder), $resourcePath);
        }// path params
        if ($companyId !== null) {
            $resourcePath = str_replace("{" . "companyId" . "}",
                $this->apiClient->toPathValue($companyId), $resourcePath);
        }


        // make the API Call
        $response = $this->apiClient->callAPI($resourcePath, $method,
            $queryParams, $device);

        if (!$response) {
            return null;
        }

        $responseObject = $this->apiClient->deserialize($response,
            'DeliveryVM');
        return $responseObject;
    }

    /**
     * endDelivery
     *
     * End a delivery
     * @param $companyId , int: companyId (required)
     * @param $idOrder , int: idOrder (required)
     *
     * @return DeliveryVM
     */
    public function endDelivery($companyId, $idOrder)
    {

        // parse inputs
        $resourcePath = "/service/api/json/1.1/companies/{companyId}/orders/{idOrder}/end";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "PUT";
        $queryParams = array();

        // path params
        if ($companyId !== null) {
            $resourcePath = str_replace("{" . "companyId" . "}",
                $this->apiClient->toPathValue($companyId), $resourcePath);
        }// path params
        if ($idOrder !== null) {
            $resourcePath = str_replace("{" . "idOrder" . "}",
                $this->apiClient->toPathValue($idOrder), $resourcePath);
        }


        // make the API Call
        $response = $this->apiClient->callAPI($resourcePath, $method,
            $queryParams);

        if (!$response) {
            return null;
        }

        $responseObject = $this->apiClient->deserialize($response,
            'DeliveryVM');
        return $responseObject;
    }

    /**
     * getOneDelivery
     *
     * Get a delivery
     * @param $companyId , int: companyId (required)
     * @param $idOrder , int: orderId (required)
     *
     * @return DeliveryVM
     */
    public function getOneDelivery($companyId, $idOrder)
    {

        // parse inputs
        $resourcePath = "/service/api/json/1.1/companies/{companyId}/orders/{orderId}";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "GET";
        $queryParams = array();

        // path params
        if ($companyId !== null) {
            $resourcePath = str_replace("{" . "companyId" . "}",
                $this->apiClient->toPathValue($companyId), $resourcePath);
        }// path params
        if ($idOrder !== null) {
            $resourcePath = str_replace("{" . "orderId" . "}",
                $this->apiClient->toPathValue($idOrder), $resourcePath);
        }


        // make the API Call
        $response = $this->apiClient->callAPI($resourcePath, $method,
            $queryParams);

        if (!$response) {
            return null;
        }

        $responseObject = $this->apiClient->deserialize($response,
            'DeliveryVM');
        return $responseObject;
    }


}
