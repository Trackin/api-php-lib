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

class DeliveryVM {
  static $fieldTypes = array(
      'id' => 'int',
      'begin' => 'DateTime',
      'catering' => 'boolean',
      'companyId' => 'int',
      'confirmationStatus' => 'boolean',
      'content' => 'array[LineVM]',
      'cost' => 'double',
      'created' => 'DateTime',
      'courierDelivery' => 'boolean',
      'deliveryFee' => 'double',
      'deviceId' => 'int',
      'distance' => 'int',
      'due' => 'DateTime',
      'end' => 'DateTime',
      'thirdPartyId' => 'string',
      'instructions' => 'string',
      'name' => 'string',
      'needCourier' => 'boolean',
      'origin' => 'string',
      'paid' => 'boolean',
      'paymentMethod' => 'string',
      'rating' => 'double',
      'request' => 'string',
      'status' => 'string',
      'takeAway' => 'boolean',
      'taxes' => 'double',
      'tip' => 'double',
      'total' => 'double',
      'time' => 'int',
      'userReview' => 'string',
      'recipient' => 'ContactVM'
    );

    function __construct(){
        $this->content = array();
    }
  
  public $id; /* int */
  /**
  * Time the delivery began (read-only)
  */
  public $begin; /* DateTime */
  /**
  * True if this is a catering order
  */
  public $catering; /* boolean */
  public $companyId; /* int */
  /**
  * Tell if the order was confirmed or not. Can be confirmed via an update or using the Trackin dashboard
  */
  public $confirmationStatus; /* boolean */
  /**
  * Order content
  */
  public $content; /* array[LineVM] */
  public $cost; /* double */
  /**
  * Date of creation of the order, set to now by default. When set, it will be used to compute the due date
  */
  public $created; /* DateTime */
  /**
  * This is only available for courier enabled subscription. Tell you if this is a courier pick-up delivery
  */
  public $courierDelivery; /* boolean */
  /**
  * Fee paid by the customer for the delivery
  */
  public $deliveryFee; /* double */
  /**
  * Id of the device to assign if needed
  */
  public $deviceId; /* int */
  /**
  * This is the transport distance computed by google directions in meters
  */
  public $distance; /* int */
  /**
  * Order due date. If not set, we will use the company's delivery zones to determine it
  */
  public $due; /* DateTime */
  /**
  * Time the delivery ended (read-only)
  */
  public $end; /* DateTime */
  /**
  * Id of the order/delivery in your system
  */
  public $thirdPartyId; /* string */
  public $instructions; /* string */
  /**
  * Delivery name, can be used to set delivery # or anything. Default is 'New order'
  */
  public $name; /* string */
  /**
  * This is only available for courier enabled subscription. Set to true if this delivery is going to be picked up by a courier
  */
  public $needCourier; /* boolean */
  /**
  * Set the origin name of the order. Default value is 'API'
  */
  public $origin; /* string */
  /**
  * Has the order been paid?
  */
  public $paid; /* boolean */
  public $paymentMethod; /* string */
  /**
  * Customer rating /5. (read-only)
  */
  public $rating; /* double */
  /**
  * Customer request about the order
  */
  public $request; /* string */
  /**
  * Will be set to 'New' when creating a delivery.
  */
  public $status; /* string */
  /**
  * true if it's a TakeAway order instead of classic delivery
  */
  public $takeAway; /* boolean */
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
  /**
  * This is transport duration computed by google directions in seconds
  */
  public $time; /* int */
  /**
  * Read-Only, this is the review a user left you after the delivery was made
  */
  public $userReview; /* string */
  /**
  * Information about the customer
  */
  public $recipient; /* ContactVM */
}
