<?php
/**
 * GetDocumentTagFieldBoxPositionResponseDocumentTagFieldsBoxPositionField
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
 * GetDocumentTagFieldBoxPositionResponseDocumentTagFieldsBoxPositionField Class Doc Comment
 *
 * @category Class
 * @package  SigniFlowConnect
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class GetDocumentTagFieldBoxPositionResponseDocumentTagFieldsBoxPositionField implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetDocumentTagFieldBoxPositionResponse_DocumentTagFieldsBoxPositionField';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'height_field' => 'string',
        'page_number_field' => 'float',
        'width_field' => 'string',
        'x_coordinate_field' => 'string',
        'y_coordinate_field' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'height_field' => null,
        'page_number_field' => null,
        'width_field' => null,
        'x_coordinate_field' => null,
        'y_coordinate_field' => null
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
        'height_field' => 'HeightField',
        'page_number_field' => 'PageNumberField',
        'width_field' => 'WidthField',
        'x_coordinate_field' => 'XCoordinateField',
        'y_coordinate_field' => 'YCoordinateField'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'height_field' => 'setHeightField',
        'page_number_field' => 'setPageNumberField',
        'width_field' => 'setWidthField',
        'x_coordinate_field' => 'setXCoordinateField',
        'y_coordinate_field' => 'setYCoordinateField'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'height_field' => 'getHeightField',
        'page_number_field' => 'getPageNumberField',
        'width_field' => 'getWidthField',
        'x_coordinate_field' => 'getXCoordinateField',
        'y_coordinate_field' => 'getYCoordinateField'
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
        $this->container['height_field'] = $data['height_field'] ?? null;
        $this->container['page_number_field'] = $data['page_number_field'] ?? null;
        $this->container['width_field'] = $data['width_field'] ?? null;
        $this->container['x_coordinate_field'] = $data['x_coordinate_field'] ?? null;
        $this->container['y_coordinate_field'] = $data['y_coordinate_field'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['height_field'] === null) {
            $invalidProperties[] = "'height_field' can't be null";
        }
        if ((mb_strlen($this->container['height_field']) < 1)) {
            $invalidProperties[] = "invalid value for 'height_field', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['page_number_field'] === null) {
            $invalidProperties[] = "'page_number_field' can't be null";
        }
        if ($this->container['width_field'] === null) {
            $invalidProperties[] = "'width_field' can't be null";
        }
        if ((mb_strlen($this->container['width_field']) < 1)) {
            $invalidProperties[] = "invalid value for 'width_field', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['x_coordinate_field'] === null) {
            $invalidProperties[] = "'x_coordinate_field' can't be null";
        }
        if ((mb_strlen($this->container['x_coordinate_field']) < 1)) {
            $invalidProperties[] = "invalid value for 'x_coordinate_field', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['y_coordinate_field'] === null) {
            $invalidProperties[] = "'y_coordinate_field' can't be null";
        }
        if ((mb_strlen($this->container['y_coordinate_field']) < 1)) {
            $invalidProperties[] = "invalid value for 'y_coordinate_field', the character length must be bigger than or equal to 1.";
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
     * Gets height_field
     *
     * @return string
     */
    public function getHeightField()
    {
        return $this->container['height_field'];
    }

    /**
     * Sets height_field
     *
     * @param string $height_field The height of the field.
     *
     * @return self
     */
    public function setHeightField($height_field)
    {

        if ((mb_strlen($height_field) < 1)) {
            throw new \InvalidArgumentException('invalid length for $height_field when calling GetDocumentTagFieldBoxPositionResponseDocumentTagFieldsBoxPositionField., must be bigger than or equal to 1.');
        }

        $this->container['height_field'] = $height_field;

        return $this;
    }

    /**
     * Gets page_number_field
     *
     * @return float
     */
    public function getPageNumberField()
    {
        return $this->container['page_number_field'];
    }

    /**
     * Sets page_number_field
     *
     * @param float $page_number_field The page number where the field is.
     *
     * @return self
     */
    public function setPageNumberField($page_number_field)
    {
        $this->container['page_number_field'] = $page_number_field;

        return $this;
    }

    /**
     * Gets width_field
     *
     * @return string
     */
    public function getWidthField()
    {
        return $this->container['width_field'];
    }

    /**
     * Sets width_field
     *
     * @param string $width_field width_field
     *
     * @return self
     */
    public function setWidthField($width_field)
    {

        if ((mb_strlen($width_field) < 1)) {
            throw new \InvalidArgumentException('invalid length for $width_field when calling GetDocumentTagFieldBoxPositionResponseDocumentTagFieldsBoxPositionField., must be bigger than or equal to 1.');
        }

        $this->container['width_field'] = $width_field;

        return $this;
    }

    /**
     * Gets x_coordinate_field
     *
     * @return string
     */
    public function getXCoordinateField()
    {
        return $this->container['x_coordinate_field'];
    }

    /**
     * Sets x_coordinate_field
     *
     * @param string $x_coordinate_field The x coordinates of the field.
     *
     * @return self
     */
    public function setXCoordinateField($x_coordinate_field)
    {

        if ((mb_strlen($x_coordinate_field) < 1)) {
            throw new \InvalidArgumentException('invalid length for $x_coordinate_field when calling GetDocumentTagFieldBoxPositionResponseDocumentTagFieldsBoxPositionField., must be bigger than or equal to 1.');
        }

        $this->container['x_coordinate_field'] = $x_coordinate_field;

        return $this;
    }

    /**
     * Gets y_coordinate_field
     *
     * @return string
     */
    public function getYCoordinateField()
    {
        return $this->container['y_coordinate_field'];
    }

    /**
     * Sets y_coordinate_field
     *
     * @param string $y_coordinate_field The y coordinates of the field
     *
     * @return self
     */
    public function setYCoordinateField($y_coordinate_field)
    {

        if ((mb_strlen($y_coordinate_field) < 1)) {
            throw new \InvalidArgumentException('invalid length for $y_coordinate_field when calling GetDocumentTagFieldBoxPositionResponseDocumentTagFieldsBoxPositionField., must be bigger than or equal to 1.');
        }

        $this->container['y_coordinate_field'] = $y_coordinate_field;

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

