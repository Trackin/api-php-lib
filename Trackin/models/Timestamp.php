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

class Timestamp {
  static $fieldTypes = array(
      'nanos' => 'int',
      'time' => 'int',
      'year' => 'int',
      'month' => 'int',
      'date' => 'int',
      'hours' => 'int',
      'minutes' => 'int',
      'seconds' => 'int',
      'day' => 'int',
      'timezoneOffset' => 'int'
    );

  
  public $nanos; /* int */
  public $time; /* int */
  public $year; /* int */
  public $month; /* int */
  public $date; /* int */
  public $hours; /* int */
  public $minutes; /* int */
  public $seconds; /* int */
  public $day; /* int */
  public $timezoneOffset; /* int */
}
