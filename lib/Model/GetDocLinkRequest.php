<?php
/**
 * GetDocLinkRequest
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
 * GetDocLinkRequest Class Doc Comment
 *
 * @category Class
 * @description #### This is a request to get the document url.
 * @package  SigniFlowConnect
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class GetDocLinkRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetDocLinkRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'doc_id_field' => 'string',
        'email_field' => 'string',
        'return_url_field' => 'string',
        'token_field' => '\SigniFlowConnect\Model\TokenField'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'doc_id_field' => null,
        'email_field' => null,
        'return_url_field' => null,
        'token_field' => null
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
        'doc_id_field' => 'DocIDField',
        'email_field' => 'EmailField',
        'return_url_field' => 'ReturnURLField',
        'token_field' => 'TokenField'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'doc_id_field' => 'setDocIdField',
        'email_field' => 'setEmailField',
        'return_url_field' => 'setReturnUrlField',
        'token_field' => 'setTokenField'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'doc_id_field' => 'getDocIdField',
        'email_field' => 'getEmailField',
        'return_url_field' => 'getReturnUrlField',
        'token_field' => 'getTokenField'
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
        $this->container['doc_id_field'] = $data['doc_id_field'] ?? null;
        $this->container['email_field'] = $data['email_field'] ?? null;
        $this->container['return_url_field'] = $data['return_url_field'] ?? null;
        $this->container['token_field'] = $data['token_field'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['doc_id_field'] === null) {
            $invalidProperties[] = "'doc_id_field' can't be null";
        }
        if ((mb_strlen($this->container['doc_id_field']) < 1)) {
            $invalidProperties[] = "invalid value for 'doc_id_field', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['email_field'] === null) {
            $invalidProperties[] = "'email_field' can't be null";
        }
        if ((mb_strlen($this->container['email_field']) < 1)) {
            $invalidProperties[] = "invalid value for 'email_field', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['return_url_field'] === null) {
            $invalidProperties[] = "'return_url_field' can't be null";
        }
        if ((mb_strlen($this->container['return_url_field']) < 1)) {
            $invalidProperties[] = "invalid value for 'return_url_field', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['token_field'] === null) {
            $invalidProperties[] = "'token_field' can't be null";
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
     * Gets doc_id_field
     *
     * @return string
     */
    public function getDocIdField()
    {
        return $this->container['doc_id_field'];
    }

    /**
     * Sets doc_id_field
     *
     * @param string $doc_id_field doc_id_field
     *
     * @return self
     */
    public function setDocIdField($doc_id_field)
    {

        if ((mb_strlen($doc_id_field) < 1)) {
            throw new \InvalidArgumentException('invalid length for $doc_id_field when calling GetDocLinkRequest., must be bigger than or equal to 1.');
        }

        $this->container['doc_id_field'] = $doc_id_field;

        return $this;
    }

    /**
     * Gets email_field
     *
     * @return string
     */
    public function getEmailField()
    {
        return $this->container['email_field'];
    }

    /**
     * Sets email_field
     *
     * @param string $email_field email_field
     *
     * @return self
     */
    public function setEmailField($email_field)
    {

        if ((mb_strlen($email_field) < 1)) {
            throw new \InvalidArgumentException('invalid length for $email_field when calling GetDocLinkRequest., must be bigger than or equal to 1.');
        }

        $this->container['email_field'] = $email_field;

        return $this;
    }

    /**
     * Gets return_url_field
     *
     * @return string
     */
    public function getReturnUrlField()
    {
        return $this->container['return_url_field'];
    }

    /**
     * Sets return_url_field
     *
     * @param string $return_url_field return_url_field
     *
     * @return self
     */
    public function setReturnUrlField($return_url_field)
    {

        if ((mb_strlen($return_url_field) < 1)) {
            throw new \InvalidArgumentException('invalid length for $return_url_field when calling GetDocLinkRequest., must be bigger than or equal to 1.');
        }

        $this->container['return_url_field'] = $return_url_field;

        return $this;
    }

    /**
     * Gets token_field
     *
     * @return \SigniFlowConnect\Model\TokenField
     */
    public function getTokenField()
    {
        return $this->container['token_field'];
    }

    /**
     * Sets token_field
     *
     * @param \SigniFlowConnect\Model\TokenField $token_field token_field
     *
     * @return self
     */
    public function setTokenField($token_field)
    {
        $this->container['token_field'] = $token_field;

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

