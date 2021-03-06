<?php
/**
 * AddWorkflowStepV2Request
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
 * AddWorkflowStepV2Request Class Doc Comment
 *
 * @category Class
 * @description #### Add a step to the Workflow request.
 * @package  SigniFlowConnect
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class AddWorkflowStepV2Request implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AddWorkflowStepV2Request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'action_field' => '\SigniFlowConnect\Model\ActionField',
        'cell_field' => 'string',
        'doc_id_field' => 'string',
        'email_field' => 'string',
        'first_name_field' => 'string',
        'language_code_field' => 'string',
        'last_name_field' => 'string',
        'proxy_allowed_field' => '\SigniFlowConnect\Model\ProxyAllowedField',
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
        'action_field' => null,
        'cell_field' => null,
        'doc_id_field' => null,
        'email_field' => 'email',
        'first_name_field' => null,
        'language_code_field' => null,
        'last_name_field' => null,
        'proxy_allowed_field' => null,
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
        'action_field' => 'ActionField',
        'cell_field' => 'CellField',
        'doc_id_field' => 'DocIDField',
        'email_field' => 'EmailField',
        'first_name_field' => 'FirstNameField',
        'language_code_field' => 'LanguageCodeField',
        'last_name_field' => 'LastNameField',
        'proxy_allowed_field' => 'ProxyAllowedField',
        'token_field' => 'TokenField'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'action_field' => 'setActionField',
        'cell_field' => 'setCellField',
        'doc_id_field' => 'setDocIdField',
        'email_field' => 'setEmailField',
        'first_name_field' => 'setFirstNameField',
        'language_code_field' => 'setLanguageCodeField',
        'last_name_field' => 'setLastNameField',
        'proxy_allowed_field' => 'setProxyAllowedField',
        'token_field' => 'setTokenField'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'action_field' => 'getActionField',
        'cell_field' => 'getCellField',
        'doc_id_field' => 'getDocIdField',
        'email_field' => 'getEmailField',
        'first_name_field' => 'getFirstNameField',
        'language_code_field' => 'getLanguageCodeField',
        'last_name_field' => 'getLastNameField',
        'proxy_allowed_field' => 'getProxyAllowedField',
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
        $this->container['action_field'] = $data['action_field'] ?? null;
        $this->container['cell_field'] = $data['cell_field'] ?? null;
        $this->container['doc_id_field'] = $data['doc_id_field'] ?? null;
        $this->container['email_field'] = $data['email_field'] ?? null;
        $this->container['first_name_field'] = $data['first_name_field'] ?? null;
        $this->container['language_code_field'] = $data['language_code_field'] ?? null;
        $this->container['last_name_field'] = $data['last_name_field'] ?? null;
        $this->container['proxy_allowed_field'] = $data['proxy_allowed_field'] ?? null;
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

        if ($this->container['action_field'] === null) {
            $invalidProperties[] = "'action_field' can't be null";
        }
        if ($this->container['cell_field'] === null) {
            $invalidProperties[] = "'cell_field' can't be null";
        }
        if ((mb_strlen($this->container['cell_field']) < 1)) {
            $invalidProperties[] = "invalid value for 'cell_field', the character length must be bigger than or equal to 1.";
        }

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

        if ($this->container['first_name_field'] === null) {
            $invalidProperties[] = "'first_name_field' can't be null";
        }
        if ((mb_strlen($this->container['first_name_field']) < 1)) {
            $invalidProperties[] = "invalid value for 'first_name_field', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['language_code_field'] === null) {
            $invalidProperties[] = "'language_code_field' can't be null";
        }
        if ((mb_strlen($this->container['language_code_field']) < 1)) {
            $invalidProperties[] = "invalid value for 'language_code_field', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['last_name_field'] === null) {
            $invalidProperties[] = "'last_name_field' can't be null";
        }
        if ((mb_strlen($this->container['last_name_field']) < 1)) {
            $invalidProperties[] = "invalid value for 'last_name_field', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['proxy_allowed_field'] === null) {
            $invalidProperties[] = "'proxy_allowed_field' can't be null";
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
     * Gets action_field
     *
     * @return \SigniFlowConnect\Model\ActionField
     */
    public function getActionField()
    {
        return $this->container['action_field'];
    }

    /**
     * Sets action_field
     *
     * @param \SigniFlowConnect\Model\ActionField $action_field action_field
     *
     * @return self
     */
    public function setActionField($action_field)
    {
        $this->container['action_field'] = $action_field;

        return $this;
    }

    /**
     * Gets cell_field
     *
     * @return string
     */
    public function getCellField()
    {
        return $this->container['cell_field'];
    }

    /**
     * Sets cell_field
     *
     * @param string $cell_field Mobile number of participant
     *
     * @return self
     */
    public function setCellField($cell_field)
    {

        if ((mb_strlen($cell_field) < 1)) {
            throw new \InvalidArgumentException('invalid length for $cell_field when calling AddWorkflowStepV2Request., must be bigger than or equal to 1.');
        }

        $this->container['cell_field'] = $cell_field;

        return $this;
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
     * @param string $doc_id_field Document ID field.
     *
     * @return self
     */
    public function setDocIdField($doc_id_field)
    {

        if ((mb_strlen($doc_id_field) < 1)) {
            throw new \InvalidArgumentException('invalid length for $doc_id_field when calling AddWorkflowStepV2Request., must be bigger than or equal to 1.');
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
     * @param string $email_field Participant email address.
     *
     * @return self
     */
    public function setEmailField($email_field)
    {

        if ((mb_strlen($email_field) < 1)) {
            throw new \InvalidArgumentException('invalid length for $email_field when calling AddWorkflowStepV2Request., must be bigger than or equal to 1.');
        }

        $this->container['email_field'] = $email_field;

        return $this;
    }

    /**
     * Gets first_name_field
     *
     * @return string
     */
    public function getFirstNameField()
    {
        return $this->container['first_name_field'];
    }

    /**
     * Sets first_name_field
     *
     * @param string $first_name_field Participant firstname.
     *
     * @return self
     */
    public function setFirstNameField($first_name_field)
    {

        if ((mb_strlen($first_name_field) < 1)) {
            throw new \InvalidArgumentException('invalid length for $first_name_field when calling AddWorkflowStepV2Request., must be bigger than or equal to 1.');
        }

        $this->container['first_name_field'] = $first_name_field;

        return $this;
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
     * @param string $language_code_field Participant 2 Digit ISO Language Code `en = English es = Spanish fr = French ect`
     *
     * @return self
     */
    public function setLanguageCodeField($language_code_field)
    {

        if ((mb_strlen($language_code_field) < 1)) {
            throw new \InvalidArgumentException('invalid length for $language_code_field when calling AddWorkflowStepV2Request., must be bigger than or equal to 1.');
        }

        $this->container['language_code_field'] = $language_code_field;

        return $this;
    }

    /**
     * Gets last_name_field
     *
     * @return string
     */
    public function getLastNameField()
    {
        return $this->container['last_name_field'];
    }

    /**
     * Sets last_name_field
     *
     * @param string $last_name_field Participant last name.
     *
     * @return self
     */
    public function setLastNameField($last_name_field)
    {

        if ((mb_strlen($last_name_field) < 1)) {
            throw new \InvalidArgumentException('invalid length for $last_name_field when calling AddWorkflowStepV2Request., must be bigger than or equal to 1.');
        }

        $this->container['last_name_field'] = $last_name_field;

        return $this;
    }

    /**
     * Gets proxy_allowed_field
     *
     * @return \SigniFlowConnect\Model\ProxyAllowedField
     */
    public function getProxyAllowedField()
    {
        return $this->container['proxy_allowed_field'];
    }

    /**
     * Sets proxy_allowed_field
     *
     * @param \SigniFlowConnect\Model\ProxyAllowedField $proxy_allowed_field proxy_allowed_field
     *
     * @return self
     */
    public function setProxyAllowedField($proxy_allowed_field)
    {
        $this->container['proxy_allowed_field'] = $proxy_allowed_field;

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


