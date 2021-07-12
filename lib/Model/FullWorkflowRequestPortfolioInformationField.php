<?php
/**
 * FullWorkflowRequestPortfolioInformationField
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
 * FullWorkflowRequestPortfolioInformationField Class Doc Comment
 *
 * @category Class
 * @description Portfolio information.
 * @package  SigniFlowConnect
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class FullWorkflowRequestPortfolioInformationField implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FullWorkflowRequest_PortfolioInformationField';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'create_portfolio_field' => 'bool',
        'link_to_portfolio_field' => 'bool',
        'portfolio_id_field' => 'float',
        'portfolio_name_field' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'create_portfolio_field' => null,
        'link_to_portfolio_field' => null,
        'portfolio_id_field' => null,
        'portfolio_name_field' => null
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
        'create_portfolio_field' => 'CreatePortfolioField',
        'link_to_portfolio_field' => 'LinkToPortfolioField',
        'portfolio_id_field' => 'PortfolioIDField',
        'portfolio_name_field' => 'PortfolioNameField'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'create_portfolio_field' => 'setCreatePortfolioField',
        'link_to_portfolio_field' => 'setLinkToPortfolioField',
        'portfolio_id_field' => 'setPortfolioIdField',
        'portfolio_name_field' => 'setPortfolioNameField'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'create_portfolio_field' => 'getCreatePortfolioField',
        'link_to_portfolio_field' => 'getLinkToPortfolioField',
        'portfolio_id_field' => 'getPortfolioIdField',
        'portfolio_name_field' => 'getPortfolioNameField'
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
        $this->container['create_portfolio_field'] = $data['create_portfolio_field'] ?? null;
        $this->container['link_to_portfolio_field'] = $data['link_to_portfolio_field'] ?? null;
        $this->container['portfolio_id_field'] = $data['portfolio_id_field'] ?? null;
        $this->container['portfolio_name_field'] = $data['portfolio_name_field'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['create_portfolio_field'] === null) {
            $invalidProperties[] = "'create_portfolio_field' can't be null";
        }
        if ($this->container['link_to_portfolio_field'] === null) {
            $invalidProperties[] = "'link_to_portfolio_field' can't be null";
        }
        if ($this->container['portfolio_id_field'] === null) {
            $invalidProperties[] = "'portfolio_id_field' can't be null";
        }
        if ($this->container['portfolio_name_field'] === null) {
            $invalidProperties[] = "'portfolio_name_field' can't be null";
        }
        if ((mb_strlen($this->container['portfolio_name_field']) < 1)) {
            $invalidProperties[] = "invalid value for 'portfolio_name_field', the character length must be bigger than or equal to 1.";
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
     * Gets create_portfolio_field
     *
     * @return bool
     */
    public function getCreatePortfolioField()
    {
        return $this->container['create_portfolio_field'];
    }

    /**
     * Sets create_portfolio_field
     *
     * @param bool $create_portfolio_field Create portfolio.
     *
     * @return self
     */
    public function setCreatePortfolioField($create_portfolio_field)
    {
        $this->container['create_portfolio_field'] = $create_portfolio_field;

        return $this;
    }

    /**
     * Gets link_to_portfolio_field
     *
     * @return bool
     */
    public function getLinkToPortfolioField()
    {
        return $this->container['link_to_portfolio_field'];
    }

    /**
     * Sets link_to_portfolio_field
     *
     * @param bool $link_to_portfolio_field Portfolio link.
     *
     * @return self
     */
    public function setLinkToPortfolioField($link_to_portfolio_field)
    {
        $this->container['link_to_portfolio_field'] = $link_to_portfolio_field;

        return $this;
    }

    /**
     * Gets portfolio_id_field
     *
     * @return float
     */
    public function getPortfolioIdField()
    {
        return $this->container['portfolio_id_field'];
    }

    /**
     * Sets portfolio_id_field
     *
     * @param float $portfolio_id_field Portfolio ID.
     *
     * @return self
     */
    public function setPortfolioIdField($portfolio_id_field)
    {
        $this->container['portfolio_id_field'] = $portfolio_id_field;

        return $this;
    }

    /**
     * Gets portfolio_name_field
     *
     * @return string
     */
    public function getPortfolioNameField()
    {
        return $this->container['portfolio_name_field'];
    }

    /**
     * Sets portfolio_name_field
     *
     * @param string $portfolio_name_field Portfolio name.
     *
     * @return self
     */
    public function setPortfolioNameField($portfolio_name_field)
    {

        if ((mb_strlen($portfolio_name_field) < 1)) {
            throw new \InvalidArgumentException('invalid length for $portfolio_name_field when calling FullWorkflowRequestPortfolioInformationField., must be bigger than or equal to 1.');
        }

        $this->container['portfolio_name_field'] = $portfolio_name_field;

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


