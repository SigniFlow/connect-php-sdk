<?php
/**
 * DocPrepperAddAdvancedFieldsRequestFieldInfoListField
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
 * DocPrepperAddAdvancedFieldsRequestFieldInfoListField Class Doc Comment
 *
 * @category Class
 * @package  SigniFlowConnect
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class DocPrepperAddAdvancedFieldsRequestFieldInfoListField implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DocPrepperAddAdvancedFieldsRequest_FieldInfoListField';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'advanced_field_type_field' => '\SigniFlowConnect\Model\AdvancedFieldType',
        'doc_id_field' => 'float',
        'field_options_list_field' => '\SigniFlowConnect\Model\DocPrepperAddAdvancedFieldsRequestFieldOptionsListField[]',
        'flow_id_field' => 'float',
        'font_family_field' => 'string',
        'font_size_field' => 'float',
        'height_field' => 'string',
        'width_field' => 'string',
        'link_to_field' => 'string',
        'name_field' => 'string',
        'page_number_field' => 'float',
        'searchable_field' => 'bool',
        'user_email_field' => 'string',
        'value_field' => 'string',
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
        'advanced_field_type_field' => null,
        'doc_id_field' => null,
        'field_options_list_field' => null,
        'flow_id_field' => null,
        'font_family_field' => null,
        'font_size_field' => null,
        'height_field' => null,
        'width_field' => null,
        'link_to_field' => null,
        'name_field' => null,
        'page_number_field' => null,
        'searchable_field' => null,
        'user_email_field' => null,
        'value_field' => null,
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
        'advanced_field_type_field' => 'AdvancedFieldTypeField',
        'doc_id_field' => 'DocIDField',
        'field_options_list_field' => 'FieldOptionsListField',
        'flow_id_field' => 'FlowIDField',
        'font_family_field' => 'FontFamilyField',
        'font_size_field' => 'FontSizeField',
        'height_field' => 'HeightField',
        'width_field' => 'WidthField',
        'link_to_field' => 'LinkToField',
        'name_field' => 'NameField',
        'page_number_field' => 'PageNumberField',
        'searchable_field' => 'SearchableField',
        'user_email_field' => 'UserEmailField',
        'value_field' => 'ValueField',
        'x_coordinate_field' => 'XCoordinateField',
        'y_coordinate_field' => 'YCoordinateField'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'advanced_field_type_field' => 'setAdvancedFieldTypeField',
        'doc_id_field' => 'setDocIdField',
        'field_options_list_field' => 'setFieldOptionsListField',
        'flow_id_field' => 'setFlowIdField',
        'font_family_field' => 'setFontFamilyField',
        'font_size_field' => 'setFontSizeField',
        'height_field' => 'setHeightField',
        'width_field' => 'setWidthField',
        'link_to_field' => 'setLinkToField',
        'name_field' => 'setNameField',
        'page_number_field' => 'setPageNumberField',
        'searchable_field' => 'setSearchableField',
        'user_email_field' => 'setUserEmailField',
        'value_field' => 'setValueField',
        'x_coordinate_field' => 'setXCoordinateField',
        'y_coordinate_field' => 'setYCoordinateField'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'advanced_field_type_field' => 'getAdvancedFieldTypeField',
        'doc_id_field' => 'getDocIdField',
        'field_options_list_field' => 'getFieldOptionsListField',
        'flow_id_field' => 'getFlowIdField',
        'font_family_field' => 'getFontFamilyField',
        'font_size_field' => 'getFontSizeField',
        'height_field' => 'getHeightField',
        'width_field' => 'getWidthField',
        'link_to_field' => 'getLinkToField',
        'name_field' => 'getNameField',
        'page_number_field' => 'getPageNumberField',
        'searchable_field' => 'getSearchableField',
        'user_email_field' => 'getUserEmailField',
        'value_field' => 'getValueField',
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
        $this->container['advanced_field_type_field'] = $data['advanced_field_type_field'] ?? null;
        $this->container['doc_id_field'] = $data['doc_id_field'] ?? null;
        $this->container['field_options_list_field'] = $data['field_options_list_field'] ?? null;
        $this->container['flow_id_field'] = $data['flow_id_field'] ?? null;
        $this->container['font_family_field'] = $data['font_family_field'] ?? null;
        $this->container['font_size_field'] = $data['font_size_field'] ?? null;
        $this->container['height_field'] = $data['height_field'] ?? null;
        $this->container['width_field'] = $data['width_field'] ?? null;
        $this->container['link_to_field'] = $data['link_to_field'] ?? null;
        $this->container['name_field'] = $data['name_field'] ?? null;
        $this->container['page_number_field'] = $data['page_number_field'] ?? null;
        $this->container['searchable_field'] = $data['searchable_field'] ?? null;
        $this->container['user_email_field'] = $data['user_email_field'] ?? null;
        $this->container['value_field'] = $data['value_field'] ?? null;
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

        if ($this->container['advanced_field_type_field'] === null) {
            $invalidProperties[] = "'advanced_field_type_field' can't be null";
        }
        if ($this->container['doc_id_field'] === null) {
            $invalidProperties[] = "'doc_id_field' can't be null";
        }
        if (!is_null($this->container['field_options_list_field']) && (count($this->container['field_options_list_field']) < 1)) {
            $invalidProperties[] = "invalid value for 'field_options_list_field', number of items must be greater than or equal to 1.";
        }

        if ($this->container['flow_id_field'] === null) {
            $invalidProperties[] = "'flow_id_field' can't be null";
        }
        if ($this->container['font_family_field'] === null) {
            $invalidProperties[] = "'font_family_field' can't be null";
        }
        if ((mb_strlen($this->container['font_family_field']) < 1)) {
            $invalidProperties[] = "invalid value for 'font_family_field', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['font_size_field'] === null) {
            $invalidProperties[] = "'font_size_field' can't be null";
        }
        if ($this->container['height_field'] === null) {
            $invalidProperties[] = "'height_field' can't be null";
        }
        if ((mb_strlen($this->container['height_field']) < 1)) {
            $invalidProperties[] = "invalid value for 'height_field', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['width_field'] === null) {
            $invalidProperties[] = "'width_field' can't be null";
        }
        if ((mb_strlen($this->container['width_field']) < 1)) {
            $invalidProperties[] = "invalid value for 'width_field', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['link_to_field'] === null) {
            $invalidProperties[] = "'link_to_field' can't be null";
        }
        if ((mb_strlen($this->container['link_to_field']) < 1)) {
            $invalidProperties[] = "invalid value for 'link_to_field', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['name_field'] === null) {
            $invalidProperties[] = "'name_field' can't be null";
        }
        if ((mb_strlen($this->container['name_field']) < 1)) {
            $invalidProperties[] = "invalid value for 'name_field', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['page_number_field'] === null) {
            $invalidProperties[] = "'page_number_field' can't be null";
        }
        if ($this->container['searchable_field'] === null) {
            $invalidProperties[] = "'searchable_field' can't be null";
        }
        if ($this->container['user_email_field'] === null) {
            $invalidProperties[] = "'user_email_field' can't be null";
        }
        if ((mb_strlen($this->container['user_email_field']) < 1)) {
            $invalidProperties[] = "invalid value for 'user_email_field', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['value_field'] === null) {
            $invalidProperties[] = "'value_field' can't be null";
        }
        if ((mb_strlen($this->container['value_field']) < 1)) {
            $invalidProperties[] = "invalid value for 'value_field', the character length must be bigger than or equal to 1.";
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
     * Gets advanced_field_type_field
     *
     * @return \SigniFlowConnect\Model\AdvancedFieldType
     */
    public function getAdvancedFieldTypeField()
    {
        return $this->container['advanced_field_type_field'];
    }

    /**
     * Sets advanced_field_type_field
     *
     * @param \SigniFlowConnect\Model\AdvancedFieldType $advanced_field_type_field advanced_field_type_field
     *
     * @return self
     */
    public function setAdvancedFieldTypeField($advanced_field_type_field)
    {
        $this->container['advanced_field_type_field'] = $advanced_field_type_field;

        return $this;
    }

    /**
     * Gets doc_id_field
     *
     * @return float
     */
    public function getDocIdField()
    {
        return $this->container['doc_id_field'];
    }

    /**
     * Sets doc_id_field
     *
     * @param float $doc_id_field Document ID field.
     *
     * @return self
     */
    public function setDocIdField($doc_id_field)
    {
        $this->container['doc_id_field'] = $doc_id_field;

        return $this;
    }

    /**
     * Gets field_options_list_field
     *
     * @return \SigniFlowConnect\Model\DocPrepperAddAdvancedFieldsRequestFieldOptionsListField[]|null
     */
    public function getFieldOptionsListField()
    {
        return $this->container['field_options_list_field'];
    }

    /**
     * Sets field_options_list_field
     *
     * @param \SigniFlowConnect\Model\DocPrepperAddAdvancedFieldsRequestFieldOptionsListField[]|null $field_options_list_field field_options_list_field
     *
     * @return self
     */
    public function setFieldOptionsListField($field_options_list_field)
    {


        if (!is_null($field_options_list_field) && (count($field_options_list_field) < 1)) {
            throw new \InvalidArgumentException('invalid length for $field_options_list_field when calling DocPrepperAddAdvancedFieldsRequestFieldInfoListField., number of items must be greater than or equal to 1.');
        }
        $this->container['field_options_list_field'] = $field_options_list_field;

        return $this;
    }

    /**
     * Gets flow_id_field
     *
     * @return float
     */
    public function getFlowIdField()
    {
        return $this->container['flow_id_field'];
    }

    /**
     * Sets flow_id_field
     *
     * @param float $flow_id_field Document Flow ID field.
     *
     * @return self
     */
    public function setFlowIdField($flow_id_field)
    {
        $this->container['flow_id_field'] = $flow_id_field;

        return $this;
    }

    /**
     * Gets font_family_field
     *
     * @return string
     */
    public function getFontFamilyField()
    {
        return $this->container['font_family_field'];
    }

    /**
     * Sets font_family_field
     *
     * @param string $font_family_field Font family of the text in the field
     *
     * @return self
     */
    public function setFontFamilyField($font_family_field)
    {

        if ((mb_strlen($font_family_field) < 1)) {
            throw new \InvalidArgumentException('invalid length for $font_family_field when calling DocPrepperAddAdvancedFieldsRequestFieldInfoListField., must be bigger than or equal to 1.');
        }

        $this->container['font_family_field'] = $font_family_field;

        return $this;
    }

    /**
     * Gets font_size_field
     *
     * @return float
     */
    public function getFontSizeField()
    {
        return $this->container['font_size_field'];
    }

    /**
     * Sets font_size_field
     *
     * @param float $font_size_field Font size of the text in the field
     *
     * @return self
     */
    public function setFontSizeField($font_size_field)
    {
        $this->container['font_size_field'] = $font_size_field;

        return $this;
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
     * @param string $height_field Field height
     *
     * @return self
     */
    public function setHeightField($height_field)
    {

        if ((mb_strlen($height_field) < 1)) {
            throw new \InvalidArgumentException('invalid length for $height_field when calling DocPrepperAddAdvancedFieldsRequestFieldInfoListField., must be bigger than or equal to 1.');
        }

        $this->container['height_field'] = $height_field;

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
     * @param string $width_field Field Width
     *
     * @return self
     */
    public function setWidthField($width_field)
    {

        if ((mb_strlen($width_field) < 1)) {
            throw new \InvalidArgumentException('invalid length for $width_field when calling DocPrepperAddAdvancedFieldsRequestFieldInfoListField., must be bigger than or equal to 1.');
        }

        $this->container['width_field'] = $width_field;

        return $this;
    }

    /**
     * Gets link_to_field
     *
     * @return string
     */
    public function getLinkToField()
    {
        return $this->container['link_to_field'];
    }

    /**
     * Sets link_to_field
     *
     * @param string $link_to_field link_to_field
     *
     * @return self
     */
    public function setLinkToField($link_to_field)
    {

        if ((mb_strlen($link_to_field) < 1)) {
            throw new \InvalidArgumentException('invalid length for $link_to_field when calling DocPrepperAddAdvancedFieldsRequestFieldInfoListField., must be bigger than or equal to 1.');
        }

        $this->container['link_to_field'] = $link_to_field;

        return $this;
    }

    /**
     * Gets name_field
     *
     * @return string
     */
    public function getNameField()
    {
        return $this->container['name_field'];
    }

    /**
     * Sets name_field
     *
     * @param string $name_field name_field
     *
     * @return self
     */
    public function setNameField($name_field)
    {

        if ((mb_strlen($name_field) < 1)) {
            throw new \InvalidArgumentException('invalid length for $name_field when calling DocPrepperAddAdvancedFieldsRequestFieldInfoListField., must be bigger than or equal to 1.');
        }

        $this->container['name_field'] = $name_field;

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
     * @param float $page_number_field Field page number.
     *
     * @return self
     */
    public function setPageNumberField($page_number_field)
    {
        $this->container['page_number_field'] = $page_number_field;

        return $this;
    }

    /**
     * Gets searchable_field
     *
     * @return bool
     */
    public function getSearchableField()
    {
        return $this->container['searchable_field'];
    }

    /**
     * Sets searchable_field
     *
     * @param bool $searchable_field searchable_field
     *
     * @return self
     */
    public function setSearchableField($searchable_field)
    {
        $this->container['searchable_field'] = $searchable_field;

        return $this;
    }

    /**
     * Gets user_email_field
     *
     * @return string
     */
    public function getUserEmailField()
    {
        return $this->container['user_email_field'];
    }

    /**
     * Sets user_email_field
     *
     * @param string $user_email_field User email address.
     *
     * @return self
     */
    public function setUserEmailField($user_email_field)
    {

        if ((mb_strlen($user_email_field) < 1)) {
            throw new \InvalidArgumentException('invalid length for $user_email_field when calling DocPrepperAddAdvancedFieldsRequestFieldInfoListField., must be bigger than or equal to 1.');
        }

        $this->container['user_email_field'] = $user_email_field;

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
            throw new \InvalidArgumentException('invalid length for $value_field when calling DocPrepperAddAdvancedFieldsRequestFieldInfoListField., must be bigger than or equal to 1.');
        }

        $this->container['value_field'] = $value_field;

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
     * @param string $x_coordinate_field X-coordinates of field on the page
     *
     * @return self
     */
    public function setXCoordinateField($x_coordinate_field)
    {

        if ((mb_strlen($x_coordinate_field) < 1)) {
            throw new \InvalidArgumentException('invalid length for $x_coordinate_field when calling DocPrepperAddAdvancedFieldsRequestFieldInfoListField., must be bigger than or equal to 1.');
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
     * @param string $y_coordinate_field Y-coordinates of field on the page
     *
     * @return self
     */
    public function setYCoordinateField($y_coordinate_field)
    {

        if ((mb_strlen($y_coordinate_field) < 1)) {
            throw new \InvalidArgumentException('invalid length for $y_coordinate_field when calling DocPrepperAddAdvancedFieldsRequestFieldInfoListField., must be bigger than or equal to 1.');
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


