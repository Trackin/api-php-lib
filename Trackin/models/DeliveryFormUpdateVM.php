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

class DeliveryFormUpdateVM {
  static $fieldTypes = array(
      'confirmationStatus' => 'boolean',
      'content' => 'array[LineVM]',
      'instructions' => 'string',
      'paid' => 'boolean',
      'paymentMethod' => 'string',
      'request' => 'string',
      'taxes' => 'double',
      'tip' => 'double',
      'total' => 'double'
    );

    function __construct(){
        $this->content = array();
    }


    /**
  * Tell if the order was confirmed or not. Can be confirmed via an update or using the Trackin dashboard
  */
  public $confirmationStatus; /* boolean */
  /**
  * Order content
  */
  public $content; /* array[LineVM] */
  public $instructions; /* string */
  /**
  * Has the order been paid?
  */
  public $paid; /* boolean */
  public $paymentMethod; /* string */
  /**
  * Customer request about the order
  */
  public $request; /* string */
  /**
  * this is the total amount of taxes included in the total price
  */
  public $taxes; /* double */
  /**
  * this is the  amount of tip included in the total price
  */
  public $tip; /* double */
  /**
  * 
  */
  public $total; /* double */
}
