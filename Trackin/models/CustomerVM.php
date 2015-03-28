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
class CustomerVM
{
    static $fieldTypes = array(
        'id' => 'int',
        'contacts' => 'array[ContactVM]',
        'name' => 'string',
        'notifyByEmail' => 'boolean',
        'notifyBySms' => 'boolean'
    );

    public $id;
    public $contacts; /* int */
    public $name; /* array[ContactVM] */
    /**
     * Notify customer by email?
     */
    public $notifyByEmail; /* string */
    /**
     * Notify customer by sms?
     */
    public $notifyBySms; /* boolean */

    function __construct()
    {
        $this->contacts = array();
    } /* boolean */
}
