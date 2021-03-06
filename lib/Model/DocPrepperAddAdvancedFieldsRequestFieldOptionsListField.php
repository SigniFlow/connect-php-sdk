<?php
/**
 * DocPrepperAddAdvancedFieldsRequestFieldOptionsListField
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
 * DocPrepperAddAdvancedFieldsRequestFieldOptionsListField Class Doc Comment
 *
 * @category Class
 * @package  SigniFlowConnect
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class DocPrepperAddAdvancedFieldsRequestFieldOptionsListField implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DocPrepperAddAdvancedFieldsRequest_FieldOptionsListField';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'linked_value_field' => 'string',
        'max_field' => 'float',
        'min_field' => 'float',
        'value_field' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'linked_value_field' => null,
        'max_field' => null,
        'min_field' => null,
        'value_field' => null
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
        'linked_value_field' => 'LinkedValueField',
        'max_field' => 'MaxField',
        'min_field' => 'MinField',
        'value_field' => 'ValueField'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'linked_value_field' => 'setLinkedValueField',
        'max_field' => 'setMaxField',
        'min_field' => 'setMinField',
        'value_field' => 'setValueField'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'linked_value_field' => 'getLinkedValueField',
        'max_field' => 'getMaxField',
        'min_field' => 'getMinField',
        'value_field' => 'getValueField'
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
        $this->container['linked_value_field'] = $data['linked_value_field'] ?? null;
        $this->container['max_field'] = $data['max_field'] ?? null;
        $this->container['min_field'] = $data['min_field'] ?? null;
        $this->container['value_field'] = $data['value_field'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['linked_value_field'] === null) {
            $invalidProperties[] = "'linked_value_field' can't be null";
        }
        if ((mb_strlen($this->container['linked_value_field']) < 1)) {
            $invalidProperties[] = "invalid value for 'linked_value_field', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['max_field'] === null) {
            $invalidProperties[] = "'max_field' can't be null";
        }
        if ($this->container['min_field'] === null) {
            $invalidProperties[] = "'min_field' can't be null";
        }
        if ($this->container['value_field'] === null) {
            $invalidProperties[] = "'value_field' can't be null";
        }
        if ((mb_strlen($this->container['value_field']) < 1)) {
            $invalidProperties[] = "invalid value for 'value_field', the character length must be bigger than or equal to 1.";
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
     * Gets linked_value_field
     *
     * @return string
     */
    public function getLinkedValueField()
    {
        return $this->container['linked_value_field'];
    }

    /**
     * Sets linked_value_field
     *
     * @param string $linked_value_field linked_value_field
     *
     * @return self
     */
    public function setLinkedValueField($linked_value_field)
    {

        if ((mb_strlen($linked_value_field) < 1)) {
            throw new \InvalidArgumentException('invalid length for $linked_value_field when calling DocPrepperAddAdvancedFieldsRequestFieldOptionsListField., must be bigger than or equal to 1.');
        }

        $this->container['linked_value_field'] = $linked_value_field;

        return $this;
    }

    /**
     * Gets max_field
     *
     * @return float
     */
    public function getMaxField()
    {
        return $this->container['max_field'];
    }

    /**
     * Sets max_field
     *
     * @param float $max_field Max amount field.
     *
     * @return self
     */
    public function setMaxField($max_field)
    {
        $this->container['max_field'] = $max_field;

        return $this;
    }

    /**
     * Gets min_field
     *
     * @return float
     */
    public function getMinField()
    {
        return $this->container['min_field'];
    }

    /**
     * Sets min_field
     *
     * @param float $min_field Min amount field
     *
     * @return self
     */
    public function setMinField($min_field)
    {
        $this->container['min_field'] = $min_field;

        return $this;
    }

    /**
     * Gets value_field
     *
     * @return string
     */
    public function getValueField()
    {
        return $this->container['value_field'];
    }

    /**
     * Sets value_field
     *
     * @param string $value_field value_field
     *
     * @return self
     */
    public function setValueField($value_field)
    {

        if ((mb_strlen($value_field) < 1)) {
            throw new \InvalidArgumentException('invalid length for $value_field when calling DocPrepperAddAdvancedFieldsRequestFieldOptionsListField., must be bigger than or equal to 1.');
        }

        $this->container['value_field'] = $value_field;

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


