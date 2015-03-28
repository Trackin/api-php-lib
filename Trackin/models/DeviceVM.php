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

class DeviceVM {
  static $fieldTypes = array(
      'currentDeliveries' => 'array[DeliveryForDeviceVM]',
      'firstName' => 'string',
      'lastName' => 'string',
      'os' => 'string',
      'pending' => 'int',
      'processing' => 'int',
      'model' => 'string',
      'id' => 'int',
      'msisdn' => 'string',
      'brand' => 'string',
      'tracks' => 'array[Track]'
    );

    function __construct(){
        $this->tracks = array();
    }


    public $currentDeliveries; /* array[DeliveryForDeviceVM] */
  /**
  * 
  */
  public $firstName; /* string */
  /**
  * 
  */
  public $lastName; /* string */
  public $os; /* string */
  public $pending; /* int */
  public $processing; /* int */
  public $model; /* string */
  public $id; /* int */
  /**
  * International phone number, ex: +33612345678, +1800555333...
  */
  public $msisdn; /* string */
  public $brand; /* string */
  public $tracks; /* array[Track] */
}
