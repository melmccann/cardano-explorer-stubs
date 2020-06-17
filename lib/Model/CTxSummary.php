<?php
/**
 * CTxSummary
 *
 * PHP version 5
 *
 * @category Class
 * @package  melmccann\cardanoexplorer
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

namespace melmccann\cardanoexplorer\Model;

use \ArrayAccess;
use \melmccann\cardanoexplorer\ObjectSerializer;

/**
 * CTxSummary Class Doc Comment
 *
 * @category Class
 * @package  melmccann\cardanoexplorer
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CTxSummary implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CTxSummary';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'cts_id' => 'object',
        'cts_tx_time_issued' => 'int',
        'cts_block_time_issued' => 'int',
        'cts_block_height' => 'int',
        'cts_block_epoch' => 'int',
        'cts_block_slot' => 'int',
        'cts_block_hash' => 'string',
        'cts_relayed_by' => 'string',
        'cts_total_input' => '\melmccann\cardanoexplorer\Model\InlineResponse200RightCoin',
        'cts_total_output' => '\melmccann\cardanoexplorer\Model\InlineResponse200RightCoin',
        'cts_fees' => '\melmccann\cardanoexplorer\Model\InlineResponse200RightCoin',
        'cts_inputs' => '\melmccann\cardanoexplorer\Model\InlineResponse2004CtbInputs[]',
        'cts_outputs' => '\melmccann\cardanoexplorer\Model\InlineResponse2004CtbInputs[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'cts_id' => null,
        'cts_tx_time_issued' => 'POSIX',
        'cts_block_time_issued' => 'POSIX',
        'cts_block_height' => null,
        'cts_block_epoch' => null,
        'cts_block_slot' => null,
        'cts_block_hash' => 'base16',
        'cts_relayed_by' => null,
        'cts_total_input' => null,
        'cts_total_output' => null,
        'cts_fees' => null,
        'cts_inputs' => null,
        'cts_outputs' => null
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
        'cts_id' => 'ctsId',
        'cts_tx_time_issued' => 'ctsTxTimeIssued',
        'cts_block_time_issued' => 'ctsBlockTimeIssued',
        'cts_block_height' => 'ctsBlockHeight',
        'cts_block_epoch' => 'ctsBlockEpoch',
        'cts_block_slot' => 'ctsBlockSlot',
        'cts_block_hash' => 'ctsBlockHash',
        'cts_relayed_by' => 'ctsRelayedBy',
        'cts_total_input' => 'ctsTotalInput',
        'cts_total_output' => 'ctsTotalOutput',
        'cts_fees' => 'ctsFees',
        'cts_inputs' => 'ctsInputs',
        'cts_outputs' => 'ctsOutputs'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cts_id' => 'setCtsId',
        'cts_tx_time_issued' => 'setCtsTxTimeIssued',
        'cts_block_time_issued' => 'setCtsBlockTimeIssued',
        'cts_block_height' => 'setCtsBlockHeight',
        'cts_block_epoch' => 'setCtsBlockEpoch',
        'cts_block_slot' => 'setCtsBlockSlot',
        'cts_block_hash' => 'setCtsBlockHash',
        'cts_relayed_by' => 'setCtsRelayedBy',
        'cts_total_input' => 'setCtsTotalInput',
        'cts_total_output' => 'setCtsTotalOutput',
        'cts_fees' => 'setCtsFees',
        'cts_inputs' => 'setCtsInputs',
        'cts_outputs' => 'setCtsOutputs'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cts_id' => 'getCtsId',
        'cts_tx_time_issued' => 'getCtsTxTimeIssued',
        'cts_block_time_issued' => 'getCtsBlockTimeIssued',
        'cts_block_height' => 'getCtsBlockHeight',
        'cts_block_epoch' => 'getCtsBlockEpoch',
        'cts_block_slot' => 'getCtsBlockSlot',
        'cts_block_hash' => 'getCtsBlockHash',
        'cts_relayed_by' => 'getCtsRelayedBy',
        'cts_total_input' => 'getCtsTotalInput',
        'cts_total_output' => 'getCtsTotalOutput',
        'cts_fees' => 'getCtsFees',
        'cts_inputs' => 'getCtsInputs',
        'cts_outputs' => 'getCtsOutputs'
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
        $this->container['cts_id'] = isset($data['cts_id']) ? $data['cts_id'] : null;
        $this->container['cts_tx_time_issued'] = isset($data['cts_tx_time_issued']) ? $data['cts_tx_time_issued'] : null;
        $this->container['cts_block_time_issued'] = isset($data['cts_block_time_issued']) ? $data['cts_block_time_issued'] : null;
        $this->container['cts_block_height'] = isset($data['cts_block_height']) ? $data['cts_block_height'] : null;
        $this->container['cts_block_epoch'] = isset($data['cts_block_epoch']) ? $data['cts_block_epoch'] : null;
        $this->container['cts_block_slot'] = isset($data['cts_block_slot']) ? $data['cts_block_slot'] : null;
        $this->container['cts_block_hash'] = isset($data['cts_block_hash']) ? $data['cts_block_hash'] : null;
        $this->container['cts_relayed_by'] = isset($data['cts_relayed_by']) ? $data['cts_relayed_by'] : null;
        $this->container['cts_total_input'] = isset($data['cts_total_input']) ? $data['cts_total_input'] : null;
        $this->container['cts_total_output'] = isset($data['cts_total_output']) ? $data['cts_total_output'] : null;
        $this->container['cts_fees'] = isset($data['cts_fees']) ? $data['cts_fees'] : null;
        $this->container['cts_inputs'] = isset($data['cts_inputs']) ? $data['cts_inputs'] : null;
        $this->container['cts_outputs'] = isset($data['cts_outputs']) ? $data['cts_outputs'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['cts_id'] === null) {
            $invalidProperties[] = "'cts_id' can't be null";
        }
        if (!is_null($this->container['cts_block_height']) && ($this->container['cts_block_height'] < 0)) {
            $invalidProperties[] = "invalid value for 'cts_block_height', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['cts_block_epoch']) && ($this->container['cts_block_epoch'] < 0)) {
            $invalidProperties[] = "invalid value for 'cts_block_epoch', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['cts_block_slot']) && ($this->container['cts_block_slot'] > 65535)) {
            $invalidProperties[] = "invalid value for 'cts_block_slot', must be smaller than or equal to 65535.";
        }

        if (!is_null($this->container['cts_block_slot']) && ($this->container['cts_block_slot'] < 0)) {
            $invalidProperties[] = "invalid value for 'cts_block_slot', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['cts_block_hash']) && (mb_strlen($this->container['cts_block_hash']) > 64)) {
            $invalidProperties[] = "invalid value for 'cts_block_hash', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['cts_block_hash']) && (mb_strlen($this->container['cts_block_hash']) < 64)) {
            $invalidProperties[] = "invalid value for 'cts_block_hash', the character length must be bigger than or equal to 64.";
        }

        if (!is_null($this->container['cts_block_hash']) && !preg_match("/^[0-9a-f]{64}$/", $this->container['cts_block_hash'])) {
            $invalidProperties[] = "invalid value for 'cts_block_hash', must be conform to the pattern /^[0-9a-f]{64}$/.";
        }

        if ($this->container['cts_total_input'] === null) {
            $invalidProperties[] = "'cts_total_input' can't be null";
        }
        if ($this->container['cts_total_output'] === null) {
            $invalidProperties[] = "'cts_total_output' can't be null";
        }
        if ($this->container['cts_fees'] === null) {
            $invalidProperties[] = "'cts_fees' can't be null";
        }
        if ($this->container['cts_inputs'] === null) {
            $invalidProperties[] = "'cts_inputs' can't be null";
        }
        if ($this->container['cts_outputs'] === null) {
            $invalidProperties[] = "'cts_outputs' can't be null";
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
     * Gets cts_id
     *
     * @return object
     */
    public function getCtsId()
    {
        return $this->container['cts_id'];
    }

    /**
     * Sets cts_id
     *
     * @param object $cts_id cts_id
     *
     * @return $this
     */
    public function setCtsId($cts_id)
    {
        $this->container['cts_id'] = $cts_id;

        return $this;
    }

    /**
     * Gets cts_tx_time_issued
     *
     * @return int|null
     */
    public function getCtsTxTimeIssued()
    {
        return $this->container['cts_tx_time_issued'];
    }

    /**
     * Sets cts_tx_time_issued
     *
     * @param int|null $cts_tx_time_issued cts_tx_time_issued
     *
     * @return $this
     */
    public function setCtsTxTimeIssued($cts_tx_time_issued)
    {
        $this->container['cts_tx_time_issued'] = $cts_tx_time_issued;

        return $this;
    }

    /**
     * Gets cts_block_time_issued
     *
     * @return int|null
     */
    public function getCtsBlockTimeIssued()
    {
        return $this->container['cts_block_time_issued'];
    }

    /**
     * Sets cts_block_time_issued
     *
     * @param int|null $cts_block_time_issued cts_block_time_issued
     *
     * @return $this
     */
    public function setCtsBlockTimeIssued($cts_block_time_issued)
    {
        $this->container['cts_block_time_issued'] = $cts_block_time_issued;

        return $this;
    }

    /**
     * Gets cts_block_height
     *
     * @return int|null
     */
    public function getCtsBlockHeight()
    {
        return $this->container['cts_block_height'];
    }

    /**
     * Sets cts_block_height
     *
     * @param int|null $cts_block_height cts_block_height
     *
     * @return $this
     */
    public function setCtsBlockHeight($cts_block_height)
    {

        if (!is_null($cts_block_height) && ($cts_block_height < 0)) {
            throw new \InvalidArgumentException('invalid value for $cts_block_height when calling CTxSummary., must be bigger than or equal to 0.');
        }

        $this->container['cts_block_height'] = $cts_block_height;

        return $this;
    }

    /**
     * Gets cts_block_epoch
     *
     * @return int|null
     */
    public function getCtsBlockEpoch()
    {
        return $this->container['cts_block_epoch'];
    }

    /**
     * Sets cts_block_epoch
     *
     * @param int|null $cts_block_epoch cts_block_epoch
     *
     * @return $this
     */
    public function setCtsBlockEpoch($cts_block_epoch)
    {

        if (!is_null($cts_block_epoch) && ($cts_block_epoch < 0)) {
            throw new \InvalidArgumentException('invalid value for $cts_block_epoch when calling CTxSummary., must be bigger than or equal to 0.');
        }

        $this->container['cts_block_epoch'] = $cts_block_epoch;

        return $this;
    }

    /**
     * Gets cts_block_slot
     *
     * @return int|null
     */
    public function getCtsBlockSlot()
    {
        return $this->container['cts_block_slot'];
    }

    /**
     * Sets cts_block_slot
     *
     * @param int|null $cts_block_slot cts_block_slot
     *
     * @return $this
     */
    public function setCtsBlockSlot($cts_block_slot)
    {

        if (!is_null($cts_block_slot) && ($cts_block_slot > 65535)) {
            throw new \InvalidArgumentException('invalid value for $cts_block_slot when calling CTxSummary., must be smaller than or equal to 65535.');
        }
        if (!is_null($cts_block_slot) && ($cts_block_slot < 0)) {
            throw new \InvalidArgumentException('invalid value for $cts_block_slot when calling CTxSummary., must be bigger than or equal to 0.');
        }

        $this->container['cts_block_slot'] = $cts_block_slot;

        return $this;
    }

    /**
     * Gets cts_block_hash
     *
     * @return string|null
     */
    public function getCtsBlockHash()
    {
        return $this->container['cts_block_hash'];
    }

    /**
     * Sets cts_block_hash
     *
     * @param string|null $cts_block_hash cts_block_hash
     *
     * @return $this
     */
    public function setCtsBlockHash($cts_block_hash)
    {
        if (!is_null($cts_block_hash) && (mb_strlen($cts_block_hash) > 64)) {
            throw new \InvalidArgumentException('invalid length for $cts_block_hash when calling CTxSummary., must be smaller than or equal to 64.');
        }
        if (!is_null($cts_block_hash) && (mb_strlen($cts_block_hash) < 64)) {
            throw new \InvalidArgumentException('invalid length for $cts_block_hash when calling CTxSummary., must be bigger than or equal to 64.');
        }
        if (!is_null($cts_block_hash) && (!preg_match("/^[0-9a-f]{64}$/", $cts_block_hash))) {
            throw new \InvalidArgumentException("invalid value for $cts_block_hash when calling CTxSummary., must conform to the pattern /^[0-9a-f]{64}$/.");
        }

        $this->container['cts_block_hash'] = $cts_block_hash;

        return $this;
    }

    /**
     * Gets cts_relayed_by
     *
     * @return string|null
     */
    public function getCtsRelayedBy()
    {
        return $this->container['cts_relayed_by'];
    }

    /**
     * Sets cts_relayed_by
     *
     * @param string|null $cts_relayed_by cts_relayed_by
     *
     * @return $this
     */
    public function setCtsRelayedBy($cts_relayed_by)
    {
        $this->container['cts_relayed_by'] = $cts_relayed_by;

        return $this;
    }

    /**
     * Gets cts_total_input
     *
     * @return \melmccann\cardanoexplorer\Model\InlineResponse200RightCoin
     */
    public function getCtsTotalInput()
    {
        return $this->container['cts_total_input'];
    }

    /**
     * Sets cts_total_input
     *
     * @param \melmccann\cardanoexplorer\Model\InlineResponse200RightCoin $cts_total_input cts_total_input
     *
     * @return $this
     */
    public function setCtsTotalInput($cts_total_input)
    {
        $this->container['cts_total_input'] = $cts_total_input;

        return $this;
    }

    /**
     * Gets cts_total_output
     *
     * @return \melmccann\cardanoexplorer\Model\InlineResponse200RightCoin
     */
    public function getCtsTotalOutput()
    {
        return $this->container['cts_total_output'];
    }

    /**
     * Sets cts_total_output
     *
     * @param \melmccann\cardanoexplorer\Model\InlineResponse200RightCoin $cts_total_output cts_total_output
     *
     * @return $this
     */
    public function setCtsTotalOutput($cts_total_output)
    {
        $this->container['cts_total_output'] = $cts_total_output;

        return $this;
    }

    /**
     * Gets cts_fees
     *
     * @return \melmccann\cardanoexplorer\Model\InlineResponse200RightCoin
     */
    public function getCtsFees()
    {
        return $this->container['cts_fees'];
    }

    /**
     * Sets cts_fees
     *
     * @param \melmccann\cardanoexplorer\Model\InlineResponse200RightCoin $cts_fees cts_fees
     *
     * @return $this
     */
    public function setCtsFees($cts_fees)
    {
        $this->container['cts_fees'] = $cts_fees;

        return $this;
    }

    /**
     * Gets cts_inputs
     *
     * @return \melmccann\cardanoexplorer\Model\InlineResponse2004CtbInputs[]
     */
    public function getCtsInputs()
    {
        return $this->container['cts_inputs'];
    }

    /**
     * Sets cts_inputs
     *
     * @param \melmccann\cardanoexplorer\Model\InlineResponse2004CtbInputs[] $cts_inputs cts_inputs
     *
     * @return $this
     */
    public function setCtsInputs($cts_inputs)
    {
        $this->container['cts_inputs'] = $cts_inputs;

        return $this;
    }

    /**
     * Gets cts_outputs
     *
     * @return \melmccann\cardanoexplorer\Model\InlineResponse2004CtbInputs[]
     */
    public function getCtsOutputs()
    {
        return $this->container['cts_outputs'];
    }

    /**
     * Sets cts_outputs
     *
     * @param \melmccann\cardanoexplorer\Model\InlineResponse2004CtbInputs[] $cts_outputs cts_outputs
     *
     * @return $this
     */
    public function setCtsOutputs($cts_outputs)
    {
        $this->container['cts_outputs'] = $cts_outputs;

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


