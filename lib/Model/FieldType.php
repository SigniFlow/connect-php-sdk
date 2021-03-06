<?php
/**
 * FieldType
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
 * FieldType Class Doc Comment
 *
 * @category Class
 * @description #### Document Prepper Field Types  &#x60; 0  &#x3D; Signature 1  &#x3D; NameText 2  &#x3D; DateText 3  &#x3D; EmailAddressText 4  &#x3D; ContactNumberText 5  &#x3D; PlainText 6  &#x3D; PlainTextOptional 7  &#x3D; FaceToface 8  &#x3D; Initial 9  &#x3D; CheckBox 10 &#x3D; F2FInitial 11 &#x3D; AddressText 12 &#x3D; CompanyNameText 13 &#x3D; OptionalCurrencyText 14 &#x3D; MandatoryCurrencyText 15 &#x3D; ReadOnlyText 16 &#x3D; NumericFieldOpt 17 &#x3D; NumericFieldMand 18 &#x3D; EmailInputOptional 19 &#x3D; EmailInput &#x60;
 * @package  SigniFlowConnect
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FieldType
{
    /**
     * Possible values of this enum
     */
    const Signature = 0;
    const NameText = 1;
    const DateText = 2;
    const EmailAddressText = 3;
    const ContactNumberText = 4;
    const PlainText = 5;
    const PlainTextOptional = 6;
    const FaceToface = 7;
    const Initial = 8;
    const CheckBox = 9;
    const F2FInitial = 10;
    const AddressText = 11;
    const CompanyNameText = 12;
    const OptionalCurrencyText = 13;
    const ReadOnlyText = 14;
    const NumericFieldOpt = 15;
    const NumericFieldMand = 16;
    const EmailInputOptional = 17;
    const EmailInput = 18;
    const 19 = 19;
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::Signature,
            self::NameText,
            self::DateText,
            self::EmailAddressText,
            self::ContactNumberText,
            self::PlainText,
            self::PlainTextOptional,
            self::FaceToface,
            self::Initial,
            self::CheckBox,
            self::F2FInitial,
            self::AddressText,
            self::CompanyNameText,
            self::OptionalCurrencyText,
            self::ReadOnlyText,
            self::NumericFieldOpt,
            self::NumericFieldMand,
            self::EmailInputOptional,
            self::EmailInput,
            self::19,
        ];
    }
}


