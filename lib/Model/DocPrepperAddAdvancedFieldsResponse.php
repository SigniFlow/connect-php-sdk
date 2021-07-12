<?php
/**
 * DocPrepperAddAdvancedFieldsResponse
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

use \ArrayAccess;
use \SigniFlowConnect\ObjectSerializer;

/**
 * DocPrepperAddAdvancedFieldsResponse Class Doc Comment
 *
 * @category Class
 * @description #### This is the response when adding advanced fields to a document.
 * @package  SigniFlowConnect
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class DocPrepperAddAdvancedFieldsResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DocPrepperAddAdvancedFieldsResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'advanced_field_response_list_field' => '\SigniFlowConnect\Model\DocPrepperAddAdvancedFieldsResponseAdvancedFieldResponseListField[]',
        'result_field' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'advanced_field_response_list_field' => null,
        'result_field' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'advanced_field_response_list_field' => 'AdvancedFieldResponseListField',
        'result_field' => 'ResultField'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'advanced_field_response_list_field' => 'setAdvancedFieldResponseListField',
        'result_field' => 'setResultField'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'advanced_field_response_list_field' => 'getAdvancedFieldResponseListField',
        'result_field' => 'getResultField'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['advanced_field_response_list_field'] = $data['advanced_field_response_list_field'] ?? null;
        $this->container['result_field'] = $data['result_field'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['advanced_field_response_list_field'] === null) {
            $invalidProperties[] = "'advanced_field_response_list_field' can't be null";
        }
        if ((count($this->container['advanced_field_response_list_field']) < 1)) {
            $invalidProperties[] = "invalid value for 'advanced_field_response_list_field', number of items must be greater than or equal to 1.";
        }

        if ($this->container['result_field'] === null) {
            $invalidProperties[] = "'result_field' can't be null";
        }
        if ((mb_strlen($this->container['result_field']) < 1)) {
            $invalidProperties[] = "invalid value for 'result_field', the character length must be bigger than or equal to 1.";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets advanced_field_response_list_field
     *
     * @return \SigniFlowConnect\Model\DocPrepperAddAdvancedFieldsResponseAdvancedFieldResponseListField[]
     */
    public function getAdvancedFieldResponseListField()
    {
        return $this->container['advanced_field_response_list_field'];
    }

    /**
     * Sets advanced_field_response_list_field
     *
     * @param \SigniFlowConnect\Model\DocPrepperAddAdvancedFieldsResponseAdvancedFieldResponseListField[] $advanced_field_response_list_field advanced_field_response_list_field
     *
     * @return self
     */
    public function setAdvancedFieldResponseListField($advanced_field_response_list_field)
    {


        if ((count($advanced_field_response_list_field) < 1)) {
            throw new \InvalidArgumentException('invalid length for $advanced_field_response_list_field when calling DocPrepperAddAdvancedFieldsResponse., number of items must be greater than or equal to 1.');
        }
        $this->container['advanced_field_response_list_field'] = $advanced_field_response_list_field;

        return $this;
    }

    /**
     * Gets result_field
     *
     * @return string
     */
    public function getResultField()
    {
        return $this->container['result_field'];
    }

    /**
     * Sets result_field
     *
     * @param string $result_field Displays the result of the call.
     *
     * @return self
     */
    public function setResultField($result_field)
    {

        if ((mb_strlen($result_field) < 1)) {
            throw new \InvalidArgumentException('invalid length for $result_field when calling DocPrepperAddAdvancedFieldsResponse., must be bigger than or equal to 1.');
        }

        $this->container['result_field'] = $result_field;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


