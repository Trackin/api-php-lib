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

class DeliveryZone {
  static $fieldTypes = array(
      'id' => 'int',
      'maxDeliveryTime' => 'int',
      'maxDeliveryCost' => 'int',
      'miniDeliveryAmount' => 'double',
      'fee' => 'double',
      'eta' => 'int'
    );

  
  public $id; /* int */
  public $maxDeliveryTime; /* int */
  public $maxDeliveryCost; /* int */
  public $miniDeliveryAmount; /* double */
  public $fee; /* double */
  public $eta; /* int */
}
