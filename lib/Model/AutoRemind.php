<?php
/**
 * AutoRemind
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  SigniFlowConnect
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * SigniFlow OpenAPI Spec v1
 *
 * ## SigniFlow API used to automate esignature workflow creation and management.
 *
 * The version of the OpenAPI document: 1.0
 * Contact: support@signiflow.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.1.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SigniFlowConnect\Model;
use \SigniFlowConnect\ObjectSerializer;

/**
 * AutoRemind Class Doc Comment
 *
 * @category Class
 * @description #### Sets an Auto Reminder email to go out daily to workflow participants that have not signed the document.  &#x60;0 &#x3D; No 1 &#x3D; Yes&#x60;
 * @package  SigniFlowConnect
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AutoRemind
{
    /**
     * Possible values of this enum
     */
    const No = 0;
    const Yes = 1;
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::No,
            self::Yes,
        ];
    }
}


