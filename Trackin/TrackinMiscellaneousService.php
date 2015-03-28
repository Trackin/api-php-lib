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


class TrackinMiscellaneousService {

    function __construct($apiClient)
    {
        $this->apiClient = $apiClient;
    }


    /**
     * getAllCountries
     *
     * Get countries
     *
     * @return array[CountryVM]
     */

    public function getAllCountries()
    {

        // parse inputs
        $resourcePath = "/service/api/json/1.1/countries";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "GET";
        $queryParams = array();

        // make the API Call
        $response = $this->apiClient->callAPI($resourcePath, $method,
            $queryParams);

        if (!$response) {
            return null;
        }

        $responseObject = $this->apiClient->deserialize($response,
            'array[CountryVM]');
        return $responseObject;
    }


    /**
     * getOneSubscription
     *
     * Get subscription
     *
     * @return SubscriptionVM
     */

    public function getOneSubscription()
    {

        // parse inputs
        $resourcePath = "/service/api/json/1.1/subscriptions";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "GET";
        $queryParams = array();

        // make the API Call
        $response = $this->apiClient->callAPI($resourcePath, $method,
            $queryParams);

        if (!$response) {
            return null;
        }

        $responseObject = $this->apiClient->deserialize($response,
            'SubscriptionVM');
        return $responseObject;
    }

}