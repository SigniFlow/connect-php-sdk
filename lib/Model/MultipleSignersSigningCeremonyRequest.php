<?php
/**
 * MultipleSignersSigningCeremonyRequest
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
 * MultipleSignersSigningCeremonyRequest Class Doc Comment
 *
 * @category Class
 * @description #### This is the request sent when there are multiple signers on a document.
 * @package  SigniFlowConnect
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class MultipleSignersSigningCeremonyRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'MultipleSignersSigningCeremonyRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'doc_field' => 'string',
        'doc_name_field' => 'string',
        'login_password_field' => 'string',
        'login_user_name_field' => 'string',
        'signer_list_field' => '\SigniFlowConnect\Model\MultipleSignersSigningCeremonyRequestSignerListField[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'doc_field' => null,
        'doc_name_field' => null,
        'login_password_field' => 'password',
        'login_user_name_field' => null,
        'signer_list_field' => null
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
        'doc_field' => 'DocField',
        'doc_name_field' => 'DocNameField',
        'login_password_field' => 'LoginPasswordField',
        'login_user_name_field' => 'LoginUserNameField',
        'signer_list_field' => 'SignerListField'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'doc_field' => 'setDocField',
        'doc_name_field' => 'setDocNameField',
        'login_password_field' => 'setLoginPasswordField',
        'login_user_name_field' => 'setLoginUserNameField',
        'signer_list_field' => 'setSignerListField'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'doc_field' => 'getDocField',
        'doc_name_field' => 'getDocNameField',
        'login_password_field' => 'getLoginPasswordField',
        'login_user_name_field' => 'getLoginUserNameField',
        'signer_list_field' => 'getSignerListField'
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
        $this->container['doc_field'] = $data['doc_field'] ?? null;
        $this->container['doc_name_field'] = $data['doc_name_field'] ?? null;
        $this->container['login_password_field'] = $data['login_password_field'] ?? null;
        $this->container['login_user_name_field'] = $data['login_user_name_field'] ?? null;
        $this->container['signer_list_field'] = $data['signer_list_field'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['doc_field'] === null) {
            $invalidProperties[] = "'doc_field' can't be null";
        }
        if ((mb_strlen($this->container['doc_field']) < 1)) {
            $invalidProperties[] = "invalid value for 'doc_field', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['doc_name_field'] === null) {
            $invalidProperties[] = "'doc_name_field' can't be null";
        }
        if ((mb_strlen($this->container['doc_name_field']) < 1)) {
            $invalidProperties[] = "invalid value for 'doc_name_field', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['login_password_field'] === null) {
            $invalidProperties[] = "'login_password_field' can't be null";
        }
        if ((mb_strlen($this->container['login_password_field']) < 1)) {
            $invalidProperties[] = "invalid value for 'login_password_field', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['login_user_name_field'] === null) {
            $invalidProperties[] = "'login_user_name_field' can't be null";
        }
        if ((mb_strlen($this->container['login_user_name_field']) < 1)) {
            $invalidProperties[] = "invalid value for 'login_user_name_field', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['signer_list_field'] === null) {
            $invalidProperties[] = "'signer_list_field' can't be null";
        }
        if ((count($this->container['signer_list_field']) < 1)) {
            $invalidProperties[] = "invalid value for 'signer_list_field', number of items must be greater than or equal to 1.";
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
     * Gets doc_field
     *
     * @return string
     */
    public function getDocField()
    {
        return $this->container['doc_field'];
    }

    /**
     * Sets doc_field
     *
     * @param string $doc_field doc_field
     *
     * @return self
     */
    public function setDocField($doc_field)
    {

        if ((mb_strlen($doc_field) < 1)) {
            throw new \InvalidArgumentException('invalid length for $doc_field when calling MultipleSignersSigningCeremonyRequest., must be bigger than or equal to 1.');
        }

        $this->container['doc_field'] = $doc_field;

        return $this;
    }

    /**
     * Gets doc_name_field
     *
     * @return string
     */
    public function getDocNameField()
    {
        return $this->container['doc_name_field'];
    }

    /**
     * Sets doc_name_field
     *
     * @param string $doc_name_field doc_name_field
     *
     * @return self
     */
    public function setDocNameField($doc_name_field)
    {

        if ((mb_strlen($doc_name_field) < 1)) {
            throw new \InvalidArgumentException('invalid length for $doc_name_field when calling MultipleSignersSigningCeremonyRequest., must be bigger than or equal to 1.');
        }

        $this->container['doc_name_field'] = $doc_name_field;

        return $this;
    }

    /**
     * Gets login_password_field
     *
     * @return string
     */
    public function getLoginPasswordField()
    {
        return $this->container['login_password_field'];
    }

    /**
     * Sets login_password_field
     *
     * @param string $login_password_field User's password.
     *
     * @return self
     */
    public function setLoginPasswordField($login_password_field)
    {

        if ((mb_strlen($login_password_field) < 1)) {
            throw new \InvalidArgumentException('invalid length for $login_password_field when calling MultipleSignersSigningCeremonyRequest., must be bigger than or equal to 1.');
        }

        $this->container['login_password_field'] = $login_password_field;

        return $this;
    }

    /**
     * Gets login_user_name_field
     *
     * @return string
     */
    public function getLoginUserNameField()
    {
        return $this->container['login_user_name_field'];
    }

    /**
     * Sets login_user_name_field
     *
     * @param string $login_user_name_field User's username.
     *
     * @return self
     */
    public function setLoginUserNameField($login_user_name_field)
    {

        if ((mb_strlen($login_user_name_field) < 1)) {
            throw new \InvalidArgumentException('invalid length for $login_user_name_field when calling MultipleSignersSigningCeremonyRequest., must be bigger than or equal to 1.');
        }

        $this->container['login_user_name_field'] = $login_user_name_field;

        return $this;
    }

    /**
     * Gets signer_list_field
     *
     * @return \SigniFlowConnect\Model\MultipleSignersSigningCeremonyRequestSignerListField[]
     */
    public function getSignerListField()
    {
        return $this->container['signer_list_field'];
    }

    /**
     * Sets signer_list_field
     *
     * @param \SigniFlowConnect\Model\MultipleSignersSigningCeremonyRequestSignerListField[] $signer_list_field signer_list_field
     *
     * @return self
     */
    public function setSignerListField($signer_list_field)
    {


        if ((count($signer_list_field) < 1)) {
            throw new \InvalidArgumentException('invalid length for $signer_list_field when calling MultipleSignersSigningCeremonyRequest., number of items must be greater than or equal to 1.');
        }
        $this->container['signer_list_field'] = $signer_list_field;

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


