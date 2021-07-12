<?php
/**
 * FullWorkflowRequestGroupStepFieldGroupMembersField
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
 * FullWorkflowRequestGroupStepFieldGroupMembersField Class Doc Comment
 *
 * @category Class
 * @package  SigniFlowConnect
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class FullWorkflowRequestGroupStepFieldGroupMembersField implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FullWorkflowRequest_GroupStepField_GroupMembersField';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'language_code_field' => 'string',
        'user_email_field' => 'string',
        'user_full_name_field' => 'string',
        'user_mobile_number_field' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'language_code_field' => null,
        'user_email_field' => null,
        'user_full_name_field' => null,
        'user_mobile_number_field' => null
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
        'language_code_field' => 'LanguageCodeField',
        'user_email_field' => 'UserEmailField',
        'user_full_name_field' => 'UserFullNameField',
        'user_mobile_number_field' => 'UserMobileNumberField'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'language_code_field' => 'setLanguageCodeField',
        'user_email_field' => 'setUserEmailField',
        'user_full_name_field' => 'setUserFullNameField',
        'user_mobile_number_field' => 'setUserMobileNumberField'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'language_code_field' => 'getLanguageCodeField',
        'user_email_field' => 'getUserEmailField',
        'user_full_name_field' => 'getUserFullNameField',
        'user_mobile_number_field' => 'getUserMobileNumberField'
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
        $this->container['language_code_field'] = $data['language_code_field'] ?? null;
        $this->container['user_email_field'] = $data['user_email_field'] ?? null;
        $this->container['user_full_name_field'] = $data['user_full_name_field'] ?? null;
        $this->container['user_mobile_number_field'] = $data['user_mobile_number_field'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['language_code_field'] === null) {
            $invalidProperties[] = "'language_code_field' can't be null";
        }
        if ((mb_strlen($this->container['language_code_field']) < 1)) {
            $invalidProperties[] = "invalid value for 'language_code_field', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['user_email_field'] === null) {
            $invalidProperties[] = "'user_email_field' can't be null";
        }
        if ((mb_strlen($this->container['user_email_field']) < 1)) {
            $invalidProperties[] = "invalid value for 'user_email_field', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['user_full_name_field'] === null) {
            $invalidProperties[] = "'user_full_name_field' can't be null";
        }
        if ((mb_strlen($this->container['user_full_name_field']) < 1)) {
            $invalidProperties[] = "invalid value for 'user_full_name_field', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['user_mobile_number_field'] === null) {
            $invalidProperties[] = "'user_mobile_number_field' can't be null";
        }
        if ((mb_strlen($this->container['user_mobile_number_field']) < 1)) {
            $invalidProperties[] = "invalid value for 'user_mobile_number_field', the character length must be bigger than or equal to 1.";
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
     * Gets language_code_field
     *
     * @return string
     */
    public function getLanguageCodeField()
    {
        return $this->container['language_code_field'];
    }

    /**
     * Sets language_code_field
     *
     * @param string $language_code_field language_code_field
     *
     * @return self
     */
    public function setLanguageCodeField($language_code_field)
    {

        if ((mb_strlen($language_code_field) < 1)) {
            throw new \InvalidArgumentException('invalid length for $language_code_field when calling FullWorkflowRequestGroupStepFieldGroupMembersField., must be bigger than or equal to 1.');
        }

        $this->container['language_code_field'] = $language_code_field;

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
     * @param string $user_email_field user_email_field
     *
     * @return self
     */
    public function setUserEmailField($user_email_field)
    {

        if ((mb_strlen($user_email_field) < 1)) {
            throw new \InvalidArgumentException('invalid length for $user_email_field when calling FullWorkflowRequestGroupStepFieldGroupMembersField., must be bigger than or equal to 1.');
        }

        $this->container['user_email_field'] = $user_email_field;

        return $this;
    }

    /**
     * Gets user_full_name_field
     *
     * @return string
     */
    public function getUserFullNameField()
    {
        return $this->container['user_full_name_field'];
    }

    /**
     * Sets user_full_name_field
     *
     * @param string $user_full_name_field user_full_name_field
     *
     * @return self
     */
    public function setUserFullNameField($user_full_name_field)
    {

        if ((mb_strlen($user_full_name_field) < 1)) {
            throw new \InvalidArgumentException('invalid length for $user_full_name_field when calling FullWorkflowRequestGroupStepFieldGroupMembersField., must be bigger than or equal to 1.');
        }

        $this->container['user_full_name_field'] = $user_full_name_field;

        return $this;
    }

    /**
     * Gets user_mobile_number_field
     *
     * @return string
     */
    public function getUserMobileNumberField()
    {
        return $this->container['user_mobile_number_field'];
    }

    /**
     * Sets user_mobile_number_field
     *
     * @param string $user_mobile_number_field user_mobile_number_field
     *
     * @return self
     */
    public function setUserMobileNumberField($user_mobile_number_field)
    {

        if ((mb_strlen($user_mobile_number_field) < 1)) {
            throw new \InvalidArgumentException('invalid length for $user_mobile_number_field when calling FullWorkflowRequestGroupStepFieldGroupMembersField., must be bigger than or equal to 1.');
        }

        $this->container['user_mobile_number_field'] = $user_mobile_number_field;

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

