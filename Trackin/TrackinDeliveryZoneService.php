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
class TrackinDeliveryZoneService
{

    function __construct($apiClient)
    {
        $this->apiClient = $apiClient;
    }


    /**
     * createDeliveryZone
     *
     * Create a delivery zone
     * @param $companyId , int: companyId (required)
     * @param $deliveryZoneVM , DeliveryZoneVM: zone (required)
     *
     * @return DeliveryZoneVM
     */

    public function createDeliveryZone($companyId, $deliveryZoneVM)
    {

        // parse inputs
        $resourcePath = "/service/api/json/1.1/companies/{companyId}/zones";
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
            $queryParams, $deliveryZoneVM);

        if (!$response) {
            return null;
        }

        $responseObject = $this->apiClient->deserialize($response,
            'DeliveryZoneVM');
        return $responseObject;
    }

    /**
     * getOneDeliveryZone
     *
     * Get a delivery zone
     * @param $companyId , int: companyId (required)
     * @param $zoneId , int: zoneId (required)
     *
     * @return DeliveryZoneVM
     */

    public function getOneDeliveryZone($companyId, $zoneId)
    {

        // parse inputs
        $resourcePath = "/service/api/json/1.1/companies/{companyId}/zones/{zoneId}";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "GET";
        $queryParams = array();

        // path params
        if ($companyId !== null) {
            $resourcePath = str_replace("{" . "companyId" . "}",
                $this->apiClient->toPathValue($companyId), $resourcePath);
        }// path params
        if ($zoneId !== null) {
            $resourcePath = str_replace("{" . "zoneId" . "}",
                $this->apiClient->toPathValue($zoneId), $resourcePath);
        }


        // make the API Call
        $response = $this->apiClient->callAPI($resourcePath, $method,
            $queryParams);

        if (!$response) {
            return null;
        }

        $responseObject = $this->apiClient->deserialize($response,
            'DeliveryZoneVM');
        return $responseObject;
    }

    /**
     * updateDeliveryZone
     *
     * Update a delivery zone
     * @param $companyId , int: companyId (required)
     * @param $zoneId , int: zoneId (required)
     * @param $deliveryZoneVM , DeliveryZoneVM: updated (required)
     *
     * @return DeliveryZoneVM
     */

    public function updateDeliveryZone($companyId, $zoneId, $deliveryZoneVM)
    {

        // parse inputs
        $resourcePath = "/service/api/json/1.1/companies/{companyId}/zones/{zoneId}";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "PUT";
        $queryParams = array();

        // path params
        if ($companyId !== null) {
            $resourcePath = str_replace("{" . "companyId" . "}",
                $this->apiClient->toPathValue($companyId), $resourcePath);
        }// path params
        if ($zoneId !== null) {
            $resourcePath = str_replace("{" . "zoneId" . "}",
                $this->apiClient->toPathValue($zoneId), $resourcePath);
        }


        // make the API Call
        $response = $this->apiClient->callAPI($resourcePath, $method,
            $queryParams, $deliveryZoneVM);

        if (!$response) {
            return null;
        }

        $responseObject = $this->apiClient->deserialize($response,
            'DeliveryZoneVM');
        return $responseObject;
    }

    /**
     * deleteDeliveryZone
     *
     * Delete a delivery zone
     * @param $companyId , int: companyId (required)
     * @param $zoneId , int: zoneId (required)
     *
     * @return void
     */

    public function deleteDeliveryZone($companyId, $zoneId)
    {

        // parse inputs
        $resourcePath = "/service/api/json/1.1/companies/{companyId}/zones/{zoneId}";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "DELETE";
        $queryParams = array();

        // path params
        if ($companyId !== null) {
            $resourcePath = str_replace("{" . "companyId" . "}",
                $this->apiClient->toPathValue($companyId), $resourcePath);
        }// path params
        if ($zoneId !== null) {
            $resourcePath = str_replace("{" . "zoneId" . "}",
                $this->apiClient->toPathValue($zoneId), $resourcePath);
        }


        // make the API Call
        $response = $this->apiClient->callAPI($resourcePath, $method,
            $queryParams);

        if (!$response) {
            return null;
        }
    }


}
