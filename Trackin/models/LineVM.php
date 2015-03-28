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

class LineVM {
  static $fieldTypes = array(
      'comments' => 'string',
      'description' => 'string',
      'label' => 'string',
      'picks' => 'array[PickVM]',
      'price' => 'double',
      'quantity' => 'int',
      'vat' => 'double',
      'idPartner' => 'string',
      'total' => 'double'
    );

    function __construct(){
        $this->picks = array();
    }


    public $comments; /* string */
  public $description; /* string */
  /**
  * Line name (ex: 'Hamburger', 'Orange juice' or '1L of rocket fuel')
  */
  public $label; /* string */
  public $picks; /* array[PickVM] */
  /**
  * 
  */
  public $price; /* double */
  /**
  * Minimum value is 1
  */
  public $quantity; /* int */
  /**
  * Taxes rate (0 if not applicable)
  */
  public $vat; /* double */
  /**
  * Id in your database, or in the client's P.O.S (depends on the usage you make of it)
  */
  public $idPartner; /* string */
  public $total; /* double */
}
