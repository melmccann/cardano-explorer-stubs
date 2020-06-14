<?php
/**
 * InlineResponse2005Right
 *
 * PHP version 5
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * cardano-explorer-api
 *
 * <p align=\"right\"><img style=\"position: relative; top: -10em; margin-bottom: -12em;\" width=\"20%\" src=\"https://cardanodocs.com/img/cardano.png\"></img></p>
 *
 * The version of the OpenAPI document: 2.0.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * InlineResponse2005Right Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class InlineResponse2005Right implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_response_200_5_Right';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'cte_id' => 'object',
        'cte_time_issued' => 'int',
        'cte_amount' => '\OpenAPI\Client\Model\InlineResponse200RightCoin'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'cte_id' => null,
        'cte_time_issued' => 'POSIX',
        'cte_amount' => null
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
        'cte_id' => 'cteId',
        'cte_time_issued' => 'cteTimeIssued',
        'cte_amount' => 'cteAmount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cte_id' => 'setCteId',
        'cte_time_issued' => 'setCteTimeIssued',
        'cte_amount' => 'setCteAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cte_id' => 'getCteId',
        'cte_time_issued' => 'getCteTimeIssued',
        'cte_amount' => 'getCteAmount'
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
        $this->container['cte_id'] = isset($data['cte_id']) ? $data['cte_id'] : null;
        $this->container['cte_time_issued'] = isset($data['cte_time_issued']) ? $data['cte_time_issued'] : null;
        $this->container['cte_amount'] = isset($data['cte_amount']) ? $data['cte_amount'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['cte_id'] === null) {
            $invalidProperties[] = "'cte_id' can't be null";
        }
        if ($this->container['cte_amount'] === null) {
            $invalidProperties[] = "'cte_amount' can't be null";
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
     * Gets cte_id
     *
     * @return object
     */
    public function getCteId()
    {
        return $this->container['cte_id'];
    }

    /**
     * Sets cte_id
     *
     * @param object $cte_id cte_id
     *
     * @return $this
     */
    public function setCteId($cte_id)
    {
        $this->container['cte_id'] = $cte_id;

        return $this;
    }

    /**
     * Gets cte_time_issued
     *
     * @return int|null
     */
    public function getCteTimeIssued()
    {
        return $this->container['cte_time_issued'];
    }

    /**
     * Sets cte_time_issued
     *
     * @param int|null $cte_time_issued cte_time_issued
     *
     * @return $this
     */
    public function setCteTimeIssued($cte_time_issued)
    {
        $this->container['cte_time_issued'] = $cte_time_issued;

        return $this;
    }

    /**
     * Gets cte_amount
     *
     * @return \OpenAPI\Client\Model\InlineResponse200RightCoin
     */
    public function getCteAmount()
    {
        return $this->container['cte_amount'];
    }

    /**
     * Sets cte_amount
     *
     * @param \OpenAPI\Client\Model\InlineResponse200RightCoin $cte_amount cte_amount
     *
     * @return $this
     */
    public function setCteAmount($cte_amount)
    {
        $this->container['cte_amount'] = $cte_amount;

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
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
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


