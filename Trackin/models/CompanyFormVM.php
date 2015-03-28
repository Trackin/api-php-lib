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

class CompanyFormVM {
  static $fieldTypes = array(
      'contacts' => 'array[ContactVM]',
      'countryId' => 'int',
      'countryIsoCode' => 'string',
      'languageCode' => 'string',
      'name' => 'string',
      'timezone' => 'string'
    );

    function __construct(){
        $this->contacts = array();
    }

    /**
  * Company's contact information
  */
  public $contacts; /* array[ContactVM] */
  /**
  * Required if no countryIsoCode
  */
  public $countryId; /* int */
  /**
  * Required if no countryId
  */
  public $countryIsoCode; /* string */
  /**
  * en
  */
  public $languageCode; /* string */
  /**
  * The name of the company
  */
  public $name; /* string */
  /**
  * Timezone for the company(Europe/Paris, America/Los_Angeles...)
  */
  public $timezone; /* string */
}
