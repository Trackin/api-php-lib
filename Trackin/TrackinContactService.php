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


class TrackinContactService
{

    function __construct($apiClient)
    {
        $this->apiClient = $apiClient;
    }


    /**
     * addContactToCompany
     *
     * Add a new contact to company
     * @param $companyId , int: companyId (required)
     * @param $contactVM , ContactVM: newContact (required)
     *
     * @return ContactVM
     */

    public function addContactToCompany($companyId, $contactVM)
    {

        // parse inputs
        $resourcePath = "/service/api/json/1.1/companies/{companyId}/contacts";
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
            $queryParams, $contactVM);

        if (!$response) {
            return null;
        }

        $responseObject = $this->apiClient->deserialize($response,
            'ContactVM');
        return $responseObject;
    }

    /**
     * updateContactOnCompany
     *
     * Update a Company contact
     * @param $companyId , int: companyId (required)
     * @param $contactId , int: contactId (required)
     * @param $contactVM , ContactVM: updatedContact (required)
     *
     * @return ContactVM
     */

    public function updateContactOnCompany($companyId, $contactId, $contactVM)
    {

        // parse inputs
        $resourcePath = "/service/api/json/1.1/companies/{companyId}/contacts/{contactId}";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "PUT";
        $queryParams = array();


        // path params
        if ($companyId !== null) {
            $resourcePath = str_replace("{" . "companyId" . "}",
                $this->apiClient->toPathValue($companyId), $resourcePath);
        }// path params
        if ($contactId !== null) {
            $resourcePath = str_replace("{" . "contactId" . "}",
                $this->apiClient->toPathValue($contactId), $resourcePath);
        }

        // make the API Call
        $response = $this->apiClient->callAPI($resourcePath, $method,
            $queryParams, $contactVM);

        if (!$response) {
            return null;
        }

        $responseObject = $this->apiClient->deserialize($response,
            'ContactVM');
        return $responseObject;
    }

    /**
     * deleteContactFromCompany
     *
     * Delete a company contact
     * @param $companyId , int: companyId (required)
     * @param $contactId , int: contactId (required)
     *
     * @return void
     */

    public function deleteContactFromCompany($companyId, $contactId)
    {

        // parse inputs
        $resourcePath = "/service/api/json/1.1/companies/{companyId}/contacts/{contactId}";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "DELETE";
        $queryParams = array();

        // path params
        if ($companyId !== null) {
            $resourcePath = str_replace("{" . "companyId" . "}",
                $this->apiClient->toPathValue($companyId), $resourcePath);
        }// path params
        if ($contactId !== null) {
            $resourcePath = str_replace("{" . "contactId" . "}",
                $this->apiClient->toPathValue($contactId), $resourcePath);
        }


        // make the API Call
        $response = $this->apiClient->callAPI($resourcePath, $method,
            $queryParams);

        if (!$response) {
            return null;
        }
    }

    /**
     * getOneContact
     *
     * Get a contact
     * @param $contactId , int: contactId (required)
     *
     * @return ContactVM
     */

    public function getOneContact($contactId)
    {

        // parse inputs
        $resourcePath = "/service/api/json/1.1/contacts/{contactId}";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "GET";
        $queryParams = array();

        // path params
        if ($contactId !== null) {
            $resourcePath = str_replace("{" . "contactId" . "}",
                $this->apiClient->toPathValue($contactId), $resourcePath);
        }

        // make the API Call
        $response = $this->apiClient->callAPI($resourcePath, $method,
            $queryParams);

        if (!$response) {
            return null;
        }

        $responseObject = $this->apiClient->deserialize($response,
            'ContactVM');
        return $responseObject;
    }

    /**
     * updateContact
     *
     * update a contact
     * @param $contactId , int: contactId (required)
     * @param $contactVM , ContactVM: updatedContact (required)
     *
     * @return ContactVM
     */

    public function updateContact($contactId, $contactVM)
    {

        // parse inputs
        $resourcePath = "/service/api/json/1.1/contacts/{contactId}";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "PUT";
        $queryParams = array();

        // path params
        if ($contactId !== null) {
            $resourcePath = str_replace("{" . "contactId" . "}",
                $this->apiClient->toPathValue($contactId), $resourcePath);
        }

        // make the API Call
        $response = $this->apiClient->callAPI($resourcePath, $method,
            $queryParams, $contactVM);

        if (!$response) {
            return null;
        }

        $responseObject = $this->apiClient->deserialize($response,
            'ContactVM');
        return $responseObject;
    }

    /**
     * deleteContact
     *
     * delete a contact
     * @param $contactId , int: contactId (required)
     *
     * @return void
     */

    public function deleteContact($contactId)
    {

        // parse inputs
        $resourcePath = "/service/api/json/1.1/contacts/{contactId}";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "DELETE";
        $queryParams = array();

        // path params
        if ($contactId !== null) {
            $resourcePath = str_replace("{" . "contactId" . "}",
                $this->apiClient->toPathValue($contactId), $resourcePath);
        }


        // make the API Call
        $response = $this->apiClient->callAPI($resourcePath, $method,
            $queryParams);

        if (!$response) {
            return null;
        }
    }


    /**
     * addContactToCustomer
     *
     * Add a new contact to customer
     * @param $customerId , int: customerId (required)
     * @param $contactVM , ContactVM: newContact (required)
     *
     * @return ContactVM
     */

    public function addContactToCustomer($customerId, $contactVM)
    {

        // parse inputs
        $resourcePath = "/service/api/json/1.1/customers/{customerId}/contacts";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "POST";
        $queryParams = array();


        // path params
        if ($customerId !== null) {
            $resourcePath = str_replace("{" . "customerId" . "}",
                $this->apiClient->toPathValue($customerId), $resourcePath);
        }

        // make the API Call
        $response = $this->apiClient->callAPI($resourcePath, $method,
            $queryParams, $contactVM);

        if (!$response) {
            return null;
        }

        $responseObject = $this->apiClient->deserialize($response,
            'ContactVM');
        return $responseObject;
    }

    /**
     * updateContactOnCustomer
     *
     * Update a customer's contact
     * @param $customerId , int: customerId (required)
     * @param $contactId , int: contactId (required)
     * @param $contactVM , ContactVM: updatedContact (required)
     *
     * @return ContactVM
     */

    public function updateContactOnCustomer($customerId, $contactId, $contactVM)
    {

        // parse inputs
        $resourcePath = "/service/api/json/1.1/customers/{customerId}/contacts/{contactId}";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "PUT";
        $queryParams = array();

        // path params
        if ($customerId !== null) {
            $resourcePath = str_replace("{" . "customerId" . "}",
                $this->apiClient->toPathValue($customerId), $resourcePath);
        }// path params
        if ($contactId !== null) {
            $resourcePath = str_replace("{" . "contactId" . "}",
                $this->apiClient->toPathValue($contactId), $resourcePath);
        }

        // make the API Call
        $response = $this->apiClient->callAPI($resourcePath, $method,
            $queryParams, $contactVM);

        if (!$response) {
            return null;
        }

        $responseObject = $this->apiClient->deserialize($response,
            'ContactVM');
        return $responseObject;
    }

    /**
     * deleteContactFromCustomer
     *
     * Delete a customers' contact
     * @param $customerId , int: customerId (required)
     * @param $contactId , int: contactId (required)
     *
     * @return void
     */

    public function deleteContactFromCustomer($customerId, $contactId)
    {

        // parse inputs
        $resourcePath = "/service/api/json/1.1/customers/{customerId}/contacts/{contactId}";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "DELETE";
        $queryParams = array();

        // path params
        if ($customerId !== null) {
            $resourcePath = str_replace("{" . "customerId" . "}",
                $this->apiClient->toPathValue($customerId), $resourcePath);
        }// path params
        if ($contactId !== null) {
            $resourcePath = str_replace("{" . "contactId" . "}",
                $this->apiClient->toPathValue($contactId), $resourcePath);
        }

        // make the API Call
        $response = $this->apiClient->callAPI($resourcePath, $method,
            $queryParams);

        if (!$response) {
            return null;
        }
    }


}
