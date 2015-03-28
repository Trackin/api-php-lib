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

class PickVM {
  static $fieldTypes = array(
      'idPartner' => 'string',
      'quantity' => 'int',
      'preference' => 'string',
      'label' => 'string',
      'price' => 'double'
    );

  
  /**
  * Id in your database, or in the client's P.O.S (depends on the usage you make of it)
  */
  public $idPartner; /* string */
  /**
  * 
  */
  public $quantity; /* int */
  public $preference; /* string */
  /**
  * 
  */
  public $label; /* string */
  /**
  * 
  */
  public $price; /* double */
}
