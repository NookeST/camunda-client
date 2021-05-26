<?php
/**
 * ProcessInstanceSuspensionStateAsyncDto
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  NookeST\Camunda
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Camunda Platform REST API
 *
 * OpenApi Spec for Camunda Platform REST API.
 *
 * The version of the OpenAPI document: 7.15.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace NookeST\Camunda\Model;

use \ArrayAccess;
use \NookeST\Camunda\ObjectSerializer;

/**
 * ProcessInstanceSuspensionStateAsyncDto Class Doc Comment
 *
 * @category Class
 * @package  NookeST\Camunda
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ProcessInstanceSuspensionStateAsyncDto implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ProcessInstanceSuspensionStateAsyncDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'process_instance_ids' => 'string[]',
        'process_instance_query' => '\NookeST\Camunda\Model\ProcessInstanceQueryDto',
        'historic_process_instance_query' => '\NookeST\Camunda\Model\HistoricProcessInstanceQueryDto',
        'suspended' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'process_instance_ids' => null,
        'process_instance_query' => null,
        'historic_process_instance_query' => null,
        'suspended' => null
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
        'process_instance_ids' => 'processInstanceIds',
        'process_instance_query' => 'processInstanceQuery',
        'historic_process_instance_query' => 'historicProcessInstanceQuery',
        'suspended' => 'suspended'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'process_instance_ids' => 'setProcessInstanceIds',
        'process_instance_query' => 'setProcessInstanceQuery',
        'historic_process_instance_query' => 'setHistoricProcessInstanceQuery',
        'suspended' => 'setSuspended'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'process_instance_ids' => 'getProcessInstanceIds',
        'process_instance_query' => 'getProcessInstanceQuery',
        'historic_process_instance_query' => 'getHistoricProcessInstanceQuery',
        'suspended' => 'getSuspended'
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
        $this->container['process_instance_ids'] = $data['process_instance_ids'] ?? null;
        $this->container['process_instance_query'] = $data['process_instance_query'] ?? null;
        $this->container['historic_process_instance_query'] = $data['historic_process_instance_query'] ?? null;
        $this->container['suspended'] = $data['suspended'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets process_instance_ids
     *
     * @return string[]|null
     */
    public function getProcessInstanceIds()
    {
        return $this->container['process_instance_ids'];
    }

    /**
     * Sets process_instance_ids
     *
     * @param string[]|null $process_instance_ids A list of process instance ids which defines a group of process instances which will be activated or suspended by the operation.
     *
     * @return self
     */
    public function setProcessInstanceIds($process_instance_ids)
    {
        $this->container['process_instance_ids'] = $process_instance_ids;

        return $this;
    }

    /**
     * Gets process_instance_query
     *
     * @return \NookeST\Camunda\Model\ProcessInstanceQueryDto|null
     */
    public function getProcessInstanceQuery()
    {
        return $this->container['process_instance_query'];
    }

    /**
     * Sets process_instance_query
     *
     * @param \NookeST\Camunda\Model\ProcessInstanceQueryDto|null $process_instance_query process_instance_query
     *
     * @return self
     */
    public function setProcessInstanceQuery($process_instance_query)
    {
        $this->container['process_instance_query'] = $process_instance_query;

        return $this;
    }

    /**
     * Gets historic_process_instance_query
     *
     * @return \NookeST\Camunda\Model\HistoricProcessInstanceQueryDto|null
     */
    public function getHistoricProcessInstanceQuery()
    {
        return $this->container['historic_process_instance_query'];
    }

    /**
     * Sets historic_process_instance_query
     *
     * @param \NookeST\Camunda\Model\HistoricProcessInstanceQueryDto|null $historic_process_instance_query historic_process_instance_query
     *
     * @return self
     */
    public function setHistoricProcessInstanceQuery($historic_process_instance_query)
    {
        $this->container['historic_process_instance_query'] = $historic_process_instance_query;

        return $this;
    }

    /**
     * Gets suspended
     *
     * @return bool|null
     */
    public function getSuspended()
    {
        return $this->container['suspended'];
    }

    /**
     * Sets suspended
     *
     * @param bool|null $suspended A Boolean value which indicates whether to activate or suspend a given instance (e.g. process instance, job, or batch). When the value is set to true, the given instance will be suspended and when the value is set to false, the given instance will be activated.
     *
     * @return self
     */
    public function setSuspended($suspended)
    {
        $this->container['suspended'] = $suspended;

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


