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

class CountryVM {
  static $fieldTypes = array(
      'id' => 'int',
      'isoCode' => 'string',
      'label' => 'string',
      'phoneCode' => 'string',
      'taxIncluded' => 'boolean',
      'currency' => 'string'
    );

  
  public $id; /* int */
  public $isoCode; /* string */
  public $label; /* string */
  public $phoneCode; /* string */
  public $taxIncluded; /* boolean */
  public $currency; /* string */
}
