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


class TrackinCustomerService
{

    function __construct($apiClient)
    {
        $this->apiClient = $apiClient;
    }


    /**
     * getAll
     *
     * Get all customers from a company
     * @param $companyId , int: companyId (required)
     * @param $query , string: query (optional)
     * @param $page , int: page (optional)
     * @param $per_page , int: perPage (optional)
     *
     * @return array[CustomerVM]
     */

    public function getAll($companyId, $query = null, $page = null, $per_page = null)
    {

        // parse inputs
        $resourcePath = "/service/api/json/1.1/companies/{companyId}/customers";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "GET";
        $queryParams = array();

        // query params
        if ($query !== null) {
            $queryParams['query'] = $this->apiClient->toQueryValue($query);
        }// query params
        if ($page !== null) {
            $queryParams['page'] = $this->apiClient->toQueryValue($page);
        }// query params
        if ($per_page !== null) {
            $queryParams['per_page'] = $this->apiClient->toQueryValue($per_page);
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
            'array[CustomerVM]');
        return $responseObject;
    }

    /**
     * createCustomer
     *
     * Add a new customer to the company
     * @param $companyId , int: companyId (required)
     * @param $CustomerVM , CustomerVM: newCustomer (required)
     *
     * @return CustomerVM
     */

    public function createCustomer($companyId, $CustomerVM)
    {

        // parse inputs
        $resourcePath = "/service/api/json/1.1/companies/{companyId}/customers";
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
            $queryParams, $CustomerVM);

        if (!$response) {
            return null;
        }

        $responseObject = $this->apiClient->deserialize($response,
            'CustomerVM');
        return $responseObject;
    }

    /**
     * getOneCustomer
     *
     * Get a customer from a company
     * @param $companyId , int: companyId (required)
     * @param $customerId , int: customerId (required)
     *
     * @return CustomerVM
     */

    public function getOneCustomer($companyId, $customerId)
    {

        // parse inputs
        $resourcePath = "/service/api/json/1.1/companies/{companyId}/customers/{customerId}";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "GET";
        $queryParams = array();

        // path params
        if ($companyId !== null) {
            $resourcePath = str_replace("{" . "companyId" . "}",
                $this->apiClient->toPathValue($companyId), $resourcePath);
        }// path params
        if ($customerId !== null) {
            $resourcePath = str_replace("{" . "customerId" . "}",
                $this->apiClient->toPathValue($customerId), $resourcePath);
        }


        // make the API Call
        $response = $this->apiClient->callAPI($resourcePath, $method,
            $queryParams);

        if (!$response) {
            return null;
        }

        $responseObject = $this->apiClient->deserialize($response,
            'CustomerVM');
        return $responseObject;
    }

    /**
     * updateCustomer
     *
     * Update a company's customer
     * @param $companyId , int: companyId (required)
     * @param $customerId , int: customerId (required)
     * @param $customerFormVM , CustomerFormVM: updated (required)
     *
     * @return CustomerVM
     */

    public function updateCustomer($companyId, $customerId, $customerFormVM)
    {

        // parse inputs
        $resourcePath = "/service/api/json/1.1/companies/{companyId}/customers/{customerId}";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "PUT";
        $queryParams = array();

        // path params
        if ($companyId !== null) {
            $resourcePath = str_replace("{" . "companyId" . "}",
                $this->apiClient->toPathValue($companyId), $resourcePath);
        }// path params
        if ($customerId !== null) {
            $resourcePath = str_replace("{" . "customerId" . "}",
                $this->apiClient->toPathValue($customerId), $resourcePath);
        }


        // make the API Call
        $response = $this->apiClient->callAPI($resourcePath, $method,
            $queryParams, $customerFormVM);

        if (!$response) {
            return null;
        }

        $responseObject = $this->apiClient->deserialize($response,
            'CustomerVM');
        return $responseObject;
    }

    /**
     * deleteCustomer
     *
     * Delete a customer
     * @param $companyId , int: companyId (required)
     * @param $customerId , int: customerId (required)
     *
     * @return void
     */

    public function deleteCustomer($companyId, $customerId)
    {

        // parse inputs
        $resourcePath = "/service/api/json/1.1/companies/{companyId}/customers/{customerId}";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "DELETE";
        $queryParams = array();

        // path params
        if ($customerId !== null) {
            $resourcePath = str_replace("{" . "customerId" . "}",
                $this->apiClient->toPathValue($customerId), $resourcePath);
        }// path params
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
    }


}
