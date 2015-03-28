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
 * $model.description$
 *
 *
 *
 */

class DeliveryForDeviceVM {
  static $fieldTypes = array(
      'zip' => 'string',
      'lastName' => 'string',
      'address' => 'string',
      'address2' => 'string',
      'city' => 'string',
      'firstName' => 'string',
      'thirdPartyId' => 'string',
      'companyId' => 'int',
      'total' => 'double',
      'due' => 'DateTime',
      'name' => 'string',
      'end' => 'DateTime',
      'id' => 'int',
      'state' => 'string',
      'begin' => 'DateTime',
      'status' => 'string'
    );

  
  public $zip; /* string */
  public $lastName; /* string */
  public $address; /* string */
  public $address2; /* string */
  public $city; /* string */
  public $firstName; /* string */
  public $thirdPartyId; /* string */
  public $companyId; /* int */
  public $total; /* double */
  public $due; /* DateTime */
  public $name; /* string */
  public $end; /* DateTime */
  public $id; /* int */
  public $state; /* string */
  public $begin; /* DateTime */
  public $status; /* string */
}
