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

class ContactVM {
  static $fieldTypes = array(
      'id' => 'int',
      'address' => 'string',
      'address2' => 'string',
      'city' => 'string',
      'country' => 'string',
      'email' => 'string',
      'fax' => 'string',
      'firstName' => 'string',
      'job' => 'string',
      'lastName' => 'string',
      'latitude' => 'double',
      'longitude' => 'double',
      'main' => 'boolean',
      'phone' => 'string',
      'state' => 'string',
      'zip' => 'string'
    );

  
  public $id; /* int */
  /**
  * 
  */
  public $address; /* string */
  public $address2; /* string */
  /**
  * 
  */
  public $city; /* string */
  /**
  * 
  */
  public $country; /* string */
  public $email; /* string */
  public $fax; /* string */
  /**
  * 
  */
  public $firstName; /* string */
  public $job; /* string */
  /**
  * 
  */
  public $lastName; /* string */
  public $latitude; /* double */
  public $longitude; /* double */
  /**
  * Is this the main contact for the collection, if any?
  */
  public $main; /* boolean */
  /**
  * Use international formatting ex: +33612345678 or +14158781254
  */
  public $phone; /* string */
  public $state; /* string */
  /**
  * 
  */
  public $zip; /* string */
}
