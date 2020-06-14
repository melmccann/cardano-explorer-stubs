<?php
/**
 * CTxBrief
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
 * CTxBrief Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CTxBrief implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CTxBrief';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'ctb_id' => 'string',
        'ctb_time_issued' => 'int',
        'ctb_inputs' => '\OpenAPI\Client\Model\InlineResponse2004CtbInputs[]',
        'ctb_outputs' => '\OpenAPI\Client\Model\InlineResponse2004CtbInputs[]',
        'ctb_input_sum' => '\OpenAPI\Client\Model\InlineResponse200RightCoin',
        'ctb_output_sum' => '\OpenAPI\Client\Model\InlineResponse200RightCoin',
        'ctb_fees' => '\OpenAPI\Client\Model\InlineResponse200RightCoin'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'ctb_id' => 'base16',
        'ctb_time_issued' => 'POSIX',
        'ctb_inputs' => null,
        'ctb_outputs' => null,
        'ctb_input_sum' => null,
        'ctb_output_sum' => null,
        'ctb_fees' => null
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
        'ctb_id' => 'ctbId',
        'ctb_time_issued' => 'ctbTimeIssued',
        'ctb_inputs' => 'ctbInputs',
        'ctb_outputs' => 'ctbOutputs',
        'ctb_input_sum' => 'ctbInputSum',
        'ctb_output_sum' => 'ctbOutputSum',
        'ctb_fees' => 'ctbFees'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ctb_id' => 'setCtbId',
        'ctb_time_issued' => 'setCtbTimeIssued',
        'ctb_inputs' => 'setCtbInputs',
        'ctb_outputs' => 'setCtbOutputs',
        'ctb_input_sum' => 'setCtbInputSum',
        'ctb_output_sum' => 'setCtbOutputSum',
        'ctb_fees' => 'setCtbFees'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ctb_id' => 'getCtbId',
        'ctb_time_issued' => 'getCtbTimeIssued',
        'ctb_inputs' => 'getCtbInputs',
        'ctb_outputs' => 'getCtbOutputs',
        'ctb_input_sum' => 'getCtbInputSum',
        'ctb_output_sum' => 'getCtbOutputSum',
        'ctb_fees' => 'getCtbFees'
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
        $this->container['ctb_id'] = isset($data['ctb_id']) ? $data['ctb_id'] : null;
        $this->container['ctb_time_issued'] = isset($data['ctb_time_issued']) ? $data['ctb_time_issued'] : null;
        $this->container['ctb_inputs'] = isset($data['ctb_inputs']) ? $data['ctb_inputs'] : null;
        $this->container['ctb_outputs'] = isset($data['ctb_outputs']) ? $data['ctb_outputs'] : null;
        $this->container['ctb_input_sum'] = isset($data['ctb_input_sum']) ? $data['ctb_input_sum'] : null;
        $this->container['ctb_output_sum'] = isset($data['ctb_output_sum']) ? $data['ctb_output_sum'] : null;
        $this->container['ctb_fees'] = isset($data['ctb_fees']) ? $data['ctb_fees'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['ctb_id'] === null) {
            $invalidProperties[] = "'ctb_id' can't be null";
        }
        if ((mb_strlen($this->container['ctb_id']) > 64)) {
            $invalidProperties[] = "invalid value for 'ctb_id', the character length must be smaller than or equal to 64.";
        }

        if ((mb_strlen($this->container['ctb_id']) < 64)) {
            $invalidProperties[] = "invalid value for 'ctb_id', the character length must be bigger than or equal to 64.";
        }

        if (!preg_match("/^[0-9a-f]{64}$/", $this->container['ctb_id'])) {
            $invalidProperties[] = "invalid value for 'ctb_id', must be conform to the pattern /^[0-9a-f]{64}$/.";
        }

        if ($this->container['ctb_inputs'] === null) {
            $invalidProperties[] = "'ctb_inputs' can't be null";
        }
        if ($this->container['ctb_outputs'] === null) {
            $invalidProperties[] = "'ctb_outputs' can't be null";
        }
        if ($this->container['ctb_input_sum'] === null) {
            $invalidProperties[] = "'ctb_input_sum' can't be null";
        }
        if ($this->container['ctb_output_sum'] === null) {
            $invalidProperties[] = "'ctb_output_sum' can't be null";
        }
        if ($this->container['ctb_fees'] === null) {
            $invalidProperties[] = "'ctb_fees' can't be null";
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
     * Gets ctb_id
     *
     * @return string
     */
    public function getCtbId()
    {
        return $this->container['ctb_id'];
    }

    /**
     * Sets ctb_id
     *
     * @param string $ctb_id ctb_id
     *
     * @return $this
     */
    public function setCtbId($ctb_id)
    {
        if ((mb_strlen($ctb_id) > 64)) {
            throw new \InvalidArgumentException('invalid length for $ctb_id when calling CTxBrief., must be smaller than or equal to 64.');
        }
        if ((mb_strlen($ctb_id) < 64)) {
            throw new \InvalidArgumentException('invalid length for $ctb_id when calling CTxBrief., must be bigger than or equal to 64.');
        }
        if ((!preg_match("/^[0-9a-f]{64}$/", $ctb_id))) {
            throw new \InvalidArgumentException("invalid value for $ctb_id when calling CTxBrief., must conform to the pattern /^[0-9a-f]{64}$/.");
        }

        $this->container['ctb_id'] = $ctb_id;

        return $this;
    }

    /**
     * Gets ctb_time_issued
     *
     * @return int|null
     */
    public function getCtbTimeIssued()
    {
        return $this->container['ctb_time_issued'];
    }

    /**
     * Sets ctb_time_issued
     *
     * @param int|null $ctb_time_issued ctb_time_issued
     *
     * @return $this
     */
    public function setCtbTimeIssued($ctb_time_issued)
    {
        $this->container['ctb_time_issued'] = $ctb_time_issued;

        return $this;
    }

    /**
     * Gets ctb_inputs
     *
     * @return \OpenAPI\Client\Model\InlineResponse2004CtbInputs[]
     */
    public function getCtbInputs()
    {
        return $this->container['ctb_inputs'];
    }

    /**
     * Sets ctb_inputs
     *
     * @param \OpenAPI\Client\Model\InlineResponse2004CtbInputs[] $ctb_inputs ctb_inputs
     *
     * @return $this
     */
    public function setCtbInputs($ctb_inputs)
    {
        $this->container['ctb_inputs'] = $ctb_inputs;

        return $this;
    }

    /**
     * Gets ctb_outputs
     *
     * @return \OpenAPI\Client\Model\InlineResponse2004CtbInputs[]
     */
    public function getCtbOutputs()
    {
        return $this->container['ctb_outputs'];
    }

    /**
     * Sets ctb_outputs
     *
     * @param \OpenAPI\Client\Model\InlineResponse2004CtbInputs[] $ctb_outputs ctb_outputs
     *
     * @return $this
     */
    public function setCtbOutputs($ctb_outputs)
    {
        $this->container['ctb_outputs'] = $ctb_outputs;

        return $this;
    }

    /**
     * Gets ctb_input_sum
     *
     * @return \OpenAPI\Client\Model\InlineResponse200RightCoin
     */
    public function getCtbInputSum()
    {
        return $this->container['ctb_input_sum'];
    }

    /**
     * Sets ctb_input_sum
     *
     * @param \OpenAPI\Client\Model\InlineResponse200RightCoin $ctb_input_sum ctb_input_sum
     *
     * @return $this
     */
    public function setCtbInputSum($ctb_input_sum)
    {
        $this->container['ctb_input_sum'] = $ctb_input_sum;

        return $this;
    }

    /**
     * Gets ctb_output_sum
     *
     * @return \OpenAPI\Client\Model\InlineResponse200RightCoin
     */
    public function getCtbOutputSum()
    {
        return $this->container['ctb_output_sum'];
    }

    /**
     * Sets ctb_output_sum
     *
     * @param \OpenAPI\Client\Model\InlineResponse200RightCoin $ctb_output_sum ctb_output_sum
     *
     * @return $this
     */
    public function setCtbOutputSum($ctb_output_sum)
    {
        $this->container['ctb_output_sum'] = $ctb_output_sum;

        return $this;
    }

    /**
     * Gets ctb_fees
     *
     * @return \OpenAPI\Client\Model\InlineResponse200RightCoin
     */
    public function getCtbFees()
    {
        return $this->container['ctb_fees'];
    }

    /**
     * Sets ctb_fees
     *
     * @param \OpenAPI\Client\Model\InlineResponse200RightCoin $ctb_fees ctb_fees
     *
     * @return $this
     */
    public function setCtbFees($ctb_fees)
    {
        $this->container['ctb_fees'] = $ctb_fees;

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


