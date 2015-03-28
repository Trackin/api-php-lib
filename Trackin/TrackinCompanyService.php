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

class TrackinCompanyService
{

    function __construct($apiClient)
    {
        $this->apiClient = $apiClient;
    }


    /**
     * getAllCompanies
     *
     * Get all companies
     * @param $for, string: address (optional)
     * @param $mode, string: delivery (optional)
     *
     * @return array[CompanyVM]
     */

    public function getAllCompanies($for = null, $mode = null)
    {

        // parse inputs
        $resourcePath = "/service/api/json/1.1/companies";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "GET";
        $queryParams = array();

        // query params
        if ($for !== null) {
            $queryParams['for'] = $this->apiClient->toQueryValue($for);
        }// query params
        if ($mode !== null) {
            $queryParams['mode'] = $this->apiClient->toQueryValue($mode);
        }

        // make the API Call
        $response = $this->apiClient->callAPI($resourcePath, $method,
            $queryParams);

        if (!$response) {
            return null;
        }

        $responseObject = $this->apiClient->deserialize($response,
            'array[CompanyVM]');
        return $responseObject;
    }

    /**
     * createCompany
     *
     * Create a company
     * @param $CompanyFormVM, CompanyFormVM: companyFormVM (required)
     *
     * @return CompanyVM
     */

    public function createCompany($CompanyFormVM)
    {

        // parse inputs
        $resourcePath = "/service/api/json/1.1/companies";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "POST";
        $queryParams = array();

        // make the API Call
        $response = $this->apiClient->callAPI($resourcePath, $method,
            $queryParams, $CompanyFormVM);

        if (!$response) {
            return null;
        }

        $responseObject = $this->apiClient->deserialize($response,
            'CompanyVM');
        return $responseObject;
    }

    /**
     * getOneCompany
     *
     * Get company
     * @param $companyId, int: companyId (required)
     *
     * @return CompanyVM
     */

    public function getOneCompany($companyId)
    {

        // parse inputs
        $resourcePath = "/service/api/json/1.1/companies/{companyId}";
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
            'CompanyVM');
        return $responseObject;
    }

    /**
     * updateCompany
     *
     * Update a company
     * @param $CompanyFormUpdateVM, CompanyFormUpdateVM: companyVM (required)
     * @param $companyId, int: companyId (required)
     *
     * @return CompanyVM
     */

    public function updateCompany($companyId, $CompanyFormUpdateVM)
    {

        // parse inputs
        $resourcePath = "/service/api/json/1.1/companies/{companyId}";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "PUT";
        $queryParams = array();

        // path params
        if ($companyId !== null) {
            $resourcePath = str_replace("{" . "companyId" . "}",
                $this->apiClient->toPathValue($companyId), $resourcePath);
        }


        // make the API Call
        $response = $this->apiClient->callAPI($resourcePath, $method,
            $queryParams, $CompanyFormUpdateVM);

        if (!$response) {
            return null;
        }

        $responseObject = $this->apiClient->deserialize($response,
            'CompanyVM');
        return $responseObject;
    }

    /**
     * updateCompanyAccounts
     *
     * Link an account to a company
     * @param $companyId, int: companyId (required)
     * @param $accountId, int: accountId (required)
     *
     * @return void
     */

    public function updateCompanyAccounts($companyId, $accountId)
    {

        // parse inputs
        $resourcePath = "/service/api/json/1.1/companies/{companyId}/account/{accountId}";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "PUT";
        $queryParams = array();

        // path params
        if ($companyId !== null) {
            $resourcePath = str_replace("{" . "companyId" . "}",
                $this->apiClient->toPathValue($companyId), $resourcePath);
        }// path params
        if ($accountId !== null) {
            $resourcePath = str_replace("{" . "accountId" . "}",
                $this->apiClient->toPathValue($accountId), $resourcePath);
        }

        // make the API Call
        $response = $this->apiClient->callAPI($resourcePath, $method,
            $queryParams);

        if (!$response) {
            return null;
        }
    }


}
