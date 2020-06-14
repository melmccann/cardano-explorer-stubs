<?php
/**
 * InlineResponse20010Right
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
 * InlineResponse20010Right Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class InlineResponse20010Right implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_response_200_10_Right';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'cgs_num_total' => 'int',
        'cgs_num_redeemed' => 'int',
        'cgs_num_not_redeemed' => 'int',
        'cgs_redeemed_amount_total' => '\OpenAPI\Client\Model\InlineResponse200RightCoin',
        'cgs_non_redeemed_amount_total' => '\OpenAPI\Client\Model\InlineResponse200RightCoin'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'cgs_num_total' => null,
        'cgs_num_redeemed' => null,
        'cgs_num_not_redeemed' => null,
        'cgs_redeemed_amount_total' => null,
        'cgs_non_redeemed_amount_total' => null
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
        'cgs_num_total' => 'cgsNumTotal',
        'cgs_num_redeemed' => 'cgsNumRedeemed',
        'cgs_num_not_redeemed' => 'cgsNumNotRedeemed',
        'cgs_redeemed_amount_total' => 'cgsRedeemedAmountTotal',
        'cgs_non_redeemed_amount_total' => 'cgsNonRedeemedAmountTotal'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cgs_num_total' => 'setCgsNumTotal',
        'cgs_num_redeemed' => 'setCgsNumRedeemed',
        'cgs_num_not_redeemed' => 'setCgsNumNotRedeemed',
        'cgs_redeemed_amount_total' => 'setCgsRedeemedAmountTotal',
        'cgs_non_redeemed_amount_total' => 'setCgsNonRedeemedAmountTotal'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cgs_num_total' => 'getCgsNumTotal',
        'cgs_num_redeemed' => 'getCgsNumRedeemed',
        'cgs_num_not_redeemed' => 'getCgsNumNotRedeemed',
        'cgs_redeemed_amount_total' => 'getCgsRedeemedAmountTotal',
        'cgs_non_redeemed_amount_total' => 'getCgsNonRedeemedAmountTotal'
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
        $this->container['cgs_num_total'] = isset($data['cgs_num_total']) ? $data['cgs_num_total'] : null;
        $this->container['cgs_num_redeemed'] = isset($data['cgs_num_redeemed']) ? $data['cgs_num_redeemed'] : null;
        $this->container['cgs_num_not_redeemed'] = isset($data['cgs_num_not_redeemed']) ? $data['cgs_num_not_redeemed'] : null;
        $this->container['cgs_redeemed_amount_total'] = isset($data['cgs_redeemed_amount_total']) ? $data['cgs_redeemed_amount_total'] : null;
        $this->container['cgs_non_redeemed_amount_total'] = isset($data['cgs_non_redeemed_amount_total']) ? $data['cgs_non_redeemed_amount_total'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['cgs_num_total'] === null) {
            $invalidProperties[] = "'cgs_num_total' can't be null";
        }
        if (($this->container['cgs_num_total'] < 0)) {
            $invalidProperties[] = "invalid value for 'cgs_num_total', must be bigger than or equal to 0.";
        }

        if ($this->container['cgs_num_redeemed'] === null) {
            $invalidProperties[] = "'cgs_num_redeemed' can't be null";
        }
        if (($this->container['cgs_num_redeemed'] < 0)) {
            $invalidProperties[] = "invalid value for 'cgs_num_redeemed', must be bigger than or equal to 0.";
        }

        if ($this->container['cgs_num_not_redeemed'] === null) {
            $invalidProperties[] = "'cgs_num_not_redeemed' can't be null";
        }
        if (($this->container['cgs_num_not_redeemed'] < 0)) {
            $invalidProperties[] = "invalid value for 'cgs_num_not_redeemed', must be bigger than or equal to 0.";
        }

        if ($this->container['cgs_redeemed_amount_total'] === null) {
            $invalidProperties[] = "'cgs_redeemed_amount_total' can't be null";
        }
        if ($this->container['cgs_non_redeemed_amount_total'] === null) {
            $invalidProperties[] = "'cgs_non_redeemed_amount_total' can't be null";
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
     * Gets cgs_num_total
     *
     * @return int
     */
    public function getCgsNumTotal()
    {
        return $this->container['cgs_num_total'];
    }

    /**
     * Sets cgs_num_total
     *
     * @param int $cgs_num_total cgs_num_total
     *
     * @return $this
     */
    public function setCgsNumTotal($cgs_num_total)
    {

        if (($cgs_num_total < 0)) {
            throw new \InvalidArgumentException('invalid value for $cgs_num_total when calling InlineResponse20010Right., must be bigger than or equal to 0.');
        }

        $this->container['cgs_num_total'] = $cgs_num_total;

        return $this;
    }

    /**
     * Gets cgs_num_redeemed
     *
     * @return int
     */
    public function getCgsNumRedeemed()
    {
        return $this->container['cgs_num_redeemed'];
    }

    /**
     * Sets cgs_num_redeemed
     *
     * @param int $cgs_num_redeemed cgs_num_redeemed
     *
     * @return $this
     */
    public function setCgsNumRedeemed($cgs_num_redeemed)
    {

        if (($cgs_num_redeemed < 0)) {
            throw new \InvalidArgumentException('invalid value for $cgs_num_redeemed when calling InlineResponse20010Right., must be bigger than or equal to 0.');
        }

        $this->container['cgs_num_redeemed'] = $cgs_num_redeemed;

        return $this;
    }

    /**
     * Gets cgs_num_not_redeemed
     *
     * @return int
     */
    public function getCgsNumNotRedeemed()
    {
        return $this->container['cgs_num_not_redeemed'];
    }

    /**
     * Sets cgs_num_not_redeemed
     *
     * @param int $cgs_num_not_redeemed cgs_num_not_redeemed
     *
     * @return $this
     */
    public function setCgsNumNotRedeemed($cgs_num_not_redeemed)
    {

        if (($cgs_num_not_redeemed < 0)) {
            throw new \InvalidArgumentException('invalid value for $cgs_num_not_redeemed when calling InlineResponse20010Right., must be bigger than or equal to 0.');
        }

        $this->container['cgs_num_not_redeemed'] = $cgs_num_not_redeemed;

        return $this;
    }

    /**
     * Gets cgs_redeemed_amount_total
     *
     * @return \OpenAPI\Client\Model\InlineResponse200RightCoin
     */
    public function getCgsRedeemedAmountTotal()
    {
        return $this->container['cgs_redeemed_amount_total'];
    }

    /**
     * Sets cgs_redeemed_amount_total
     *
     * @param \OpenAPI\Client\Model\InlineResponse200RightCoin $cgs_redeemed_amount_total cgs_redeemed_amount_total
     *
     * @return $this
     */
    public function setCgsRedeemedAmountTotal($cgs_redeemed_amount_total)
    {
        $this->container['cgs_redeemed_amount_total'] = $cgs_redeemed_amount_total;

        return $this;
    }

    /**
     * Gets cgs_non_redeemed_amount_total
     *
     * @return \OpenAPI\Client\Model\InlineResponse200RightCoin
     */
    public function getCgsNonRedeemedAmountTotal()
    {
        return $this->container['cgs_non_redeemed_amount_total'];
    }

    /**
     * Sets cgs_non_redeemed_amount_total
     *
     * @param \OpenAPI\Client\Model\InlineResponse200RightCoin $cgs_non_redeemed_amount_total cgs_non_redeemed_amount_total
     *
     * @return $this
     */
    public function setCgsNonRedeemedAmountTotal($cgs_non_redeemed_amount_total)
    {
        $this->container['cgs_non_redeemed_amount_total'] = $cgs_non_redeemed_amount_total;

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


