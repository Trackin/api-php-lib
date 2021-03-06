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

class CompanyVM {
  static $fieldTypes = array(
      'id' => 'int',
      'allowAutostart' => 'boolean',
      'allowAutostop' => 'boolean',
      'balance' => 'double',
      'contacts' => 'array[ContactVM]',
      'country' => 'CountryVM',
      'customEmailField1' => 'string',
      'customEmailField2' => 'string',
      'customEmailField3' => 'string',
      'customEmailField4' => 'string',
      'customEmailTitle1' => 'string',
      'customEmailTitle2' => 'string',
      'customEmailTitle3' => 'string',
      'customEmailTitle4' => 'string',
      'customFtFollowText' => 'string',
      'deliveryZones' => 'array[DeliveryZone]',
      'directionsAvoidHighways' => 'boolean',
      'directionsAvoidTolls' => 'boolean',
      'directionsMode' => 'string',
      'enableGeolocationWarning' => 'boolean',
      'facebook' => 'string',
      'google' => 'string',
      'image' => 'string',
      'languageCode' => 'string',
      'name' => 'string',
      'notifyByEmail' => 'boolean',
      'notifyBySms' => 'boolean',
      'rating' => 'double',
      'sendApologyEmail' => 'boolean',
      'sendThankYouEmail' => 'boolean',
      'skipLoadBalancing' => 'boolean',
      'timezone' => 'string',
      'twitter' => 'string',
      'website' => 'string',
      'yelp' => 'string'
    );

    function __construct(){
        $this->contacts = array();
        $this->deliveryZones = array();
    }
  
  public $id; /* int */
  /**
  * Do the drivers' app assigned to this company start assigned delivery automatically?
  */
  public $allowAutostart; /* boolean */
  /**
  * true
  */
  public $allowAutostop; /* boolean */
  /**
  * The company's pending balance
  */
  public $balance; /* double */
  /**
  * Company's contact information
  */
  public $contacts; /* array[ContactVM] */
  /**
  * 
  */
  public $country; /* CountryVM */
  /**
  * Custom field for the email sent to the customer when a delivery starts
  */
  public $customEmailField1; /* string */
  /**
  * See customEmailField1
  */
  public $customEmailField2; /* string */
  /**
  * See customEmailField1
  */
  public $customEmailField3; /* string */
  /**
  * See customEmailField1
  */
  public $customEmailField4; /* string */
  /**
  * See Custom title for the email sent to the customer when a delivery starts
  */
  public $customEmailTitle1; /* string */
  /**
  * See customEmailTitle1
  */
  public $customEmailTitle2; /* string */
  /**
  * See customEmailTitle1
  */
  public $customEmailTitle3; /* string */
  /**
  * See customEmailTitle1
  */
  public $customEmailTitle4; /* string */
  /**
  * See Custom text displayed when the customer tracks its delivery
  */
  public $customFtFollowText; /* string */
  /**
  * Delivery zone associated with this company, used for address filtering
  */
  public $deliveryZones; /* array[DeliveryZone] */
  /**
  * Should we use highways when computing directions
  */
  public $directionsAvoidHighways; /* boolean */
  /**
  * Should we use toll roads when computing directions
  */
  public $directionsAvoidTolls; /* boolean */
  /**
  * What transport mode should we use to compute directions?
  */
  public $directionsMode; /* string */
  /**
  * false
  */
  public $enableGeolocationWarning; /* boolean */
  /**
  * company's Facebook page
  */
  public $facebook; /* string */
  /**
  * company's G+ page
  */
  public $google; /* string */
  /**
  * link to restaurant's logo
  */
  public $image; /* string */
  /**
  * en
  */
  public $languageCode; /* string */
  /**
  * The name of the company
  */
  public $name; /* string */
  /**
  * Do you want to notify your clients by email?
  */
  public $notifyByEmail; /* boolean */
  /**
  * Do you want to notify your clients by SMS?
  */
  public $notifyBySms; /* boolean */
  /**
  * Company's average rating
  */
  public $rating; /* double */
  /**
  * true
  */
  public $sendApologyEmail; /* boolean */
  /**
  * true
  */
  public $sendThankYouEmail; /* boolean */
  /**
  * false
  */
  public $skipLoadBalancing; /* boolean */
  /**
  * Timezone for the company(Europe/Paris, America/Los_Angeles...)
  */
  public $timezone; /* string */
  /**
  * company's twitter page
  */
  public $twitter; /* string */
  /**
  * company's website
  */
  public $website; /* string */
  /**
  * company's Yelp page
  */
  public $yelp; /* string */
}
