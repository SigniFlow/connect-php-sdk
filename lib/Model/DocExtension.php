<?php
/**
 * DocExtension
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
 * DocExtension Class Doc Comment
 *
 * @category Class
 * @description #### Document Extension   &#x60; 0 &#x3D; pdf 1 &#x3D; xls 2 &#x3D; txt 3 &#x3D; xlsx 4 &#x3D; docx 5 &#x3D; doc 6 &#x3D; xml 7 &#x3D; png 8 &#x3D; jpg 9 &#x3D; gif &#x60;
 * @package  SigniFlowConnect
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DocExtension
{
    /**
     * Possible values of this enum
     */
    const pdf = 0;
    const xls = 1;
    const txt = 2;
    const xlsx = 3;
    const docx = 4;
    const doc = 5;
    const xml = 6;
    const png = 7;
    const jpg = 8;
    const gif = 9;
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::pdf,
            self::xls,
            self::txt,
            self::xlsx,
            self::docx,
            self::doc,
            self::xml,
            self::png,
            self::jpg,
            self::gif,
        ];
    }
}

