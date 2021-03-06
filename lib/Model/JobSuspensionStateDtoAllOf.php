<?php
/**
 * JobSuspensionStateDtoAllOf
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
 * JobSuspensionStateDtoAllOf Class Doc Comment
 *
 * @category Class
 * @description Defines by which selection criterion to activate or suspend jobs. This selection criterion are mutually exclusive and can only be on of: * &#x60;jobDefinitionId&#x60; * &#x60;processDefinitionId&#x60; * &#x60;processInstanceId&#x60; * &#x60;processDefinitionKey&#x60;
 * @package  NookeST\Camunda
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class JobSuspensionStateDtoAllOf implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'JobSuspensionStateDto_allOf';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'job_definition_id' => 'string',
        'process_definition_id' => 'string',
        'process_instance_id' => 'string',
        'process_definition_key' => 'string',
        'process_definition_tenant_id' => 'string',
        'process_definition_without_tenant_id' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'job_definition_id' => null,
        'process_definition_id' => null,
        'process_instance_id' => null,
        'process_definition_key' => null,
        'process_definition_tenant_id' => null,
        'process_definition_without_tenant_id' => null
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
        'job_definition_id' => 'jobDefinitionId	',
        'process_definition_id' => 'processDefinitionId',
        'process_instance_id' => 'processInstanceId',
        'process_definition_key' => 'processDefinitionKey',
        'process_definition_tenant_id' => 'processDefinitionTenantId',
        'process_definition_without_tenant_id' => 'processDefinitionWithoutTenantId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'job_definition_id' => 'setJobDefinitionId',
        'process_definition_id' => 'setProcessDefinitionId',
        'process_instance_id' => 'setProcessInstanceId',
        'process_definition_key' => 'setProcessDefinitionKey',
        'process_definition_tenant_id' => 'setProcessDefinitionTenantId',
        'process_definition_without_tenant_id' => 'setProcessDefinitionWithoutTenantId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'job_definition_id' => 'getJobDefinitionId',
        'process_definition_id' => 'getProcessDefinitionId',
        'process_instance_id' => 'getProcessInstanceId',
        'process_definition_key' => 'getProcessDefinitionKey',
        'process_definition_tenant_id' => 'getProcessDefinitionTenantId',
        'process_definition_without_tenant_id' => 'getProcessDefinitionWithoutTenantId'
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
        $this->container['job_definition_id'] = $data['job_definition_id'] ?? null;
        $this->container['process_definition_id'] = $data['process_definition_id'] ?? null;
        $this->container['process_instance_id'] = $data['process_instance_id'] ?? null;
        $this->container['process_definition_key'] = $data['process_definition_key'] ?? null;
        $this->container['process_definition_tenant_id'] = $data['process_definition_tenant_id'] ?? null;
        $this->container['process_definition_without_tenant_id'] = $data['process_definition_without_tenant_id'] ?? null;
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
     * Gets job_definition_id
     *
     * @return string|null
     */
    public function getJobDefinitionId()
    {
        return $this->container['job_definition_id'];
    }

    /**
     * Sets job_definition_id
     *
     * @param string|null $job_definition_id The job definition id of the jobs to activate or suspend.
     *
     * @return self
     */
    public function setJobDefinitionId($job_definition_id)
    {
        $this->container['job_definition_id'] = $job_definition_id;

        return $this;
    }

    /**
     * Gets process_definition_id
     *
     * @return string|null
     */
    public function getProcessDefinitionId()
    {
        return $this->container['process_definition_id'];
    }

    /**
     * Sets process_definition_id
     *
     * @param string|null $process_definition_id The process definition id of the jobs to activate or suspend.
     *
     * @return self
     */
    public function setProcessDefinitionId($process_definition_id)
    {
        $this->container['process_definition_id'] = $process_definition_id;

        return $this;
    }

    /**
     * Gets process_instance_id
     *
     * @return string|null
     */
    public function getProcessInstanceId()
    {
        return $this->container['process_instance_id'];
    }

    /**
     * Sets process_instance_id
     *
     * @param string|null $process_instance_id The process instance id of the jobs to activate or suspend.
     *
     * @return self
     */
    public function setProcessInstanceId($process_instance_id)
    {
        $this->container['process_instance_id'] = $process_instance_id;

        return $this;
    }

    /**
     * Gets process_definition_key
     *
     * @return string|null
     */
    public function getProcessDefinitionKey()
    {
        return $this->container['process_definition_key'];
    }

    /**
     * Sets process_definition_key
     *
     * @param string|null $process_definition_key The process definition key of the jobs to activate or suspend.
     *
     * @return self
     */
    public function setProcessDefinitionKey($process_definition_key)
    {
        $this->container['process_definition_key'] = $process_definition_key;

        return $this;
    }

    /**
     * Gets process_definition_tenant_id
     *
     * @return string|null
     */
    public function getProcessDefinitionTenantId()
    {
        return $this->container['process_definition_tenant_id'];
    }

    /**
     * Sets process_definition_tenant_id
     *
     * @param string|null $process_definition_tenant_id Only activate or suspend jobs of a process definition which belongs to a tenant with the given id. Works only when selecting with `processDefinitionKey`.
     *
     * @return self
     */
    public function setProcessDefinitionTenantId($process_definition_tenant_id)
    {
        $this->container['process_definition_tenant_id'] = $process_definition_tenant_id;

        return $this;
    }

    /**
     * Gets process_definition_without_tenant_id
     *
     * @return bool|null
     */
    public function getProcessDefinitionWithoutTenantId()
    {
        return $this->container['process_definition_without_tenant_id'];
    }

    /**
     * Sets process_definition_without_tenant_id
     *
     * @param bool|null $process_definition_without_tenant_id Only activate or suspend jobs of a process definition which belongs to no tenant. Value may only be `true`, as `false` is the default behavior. Works only when selecting with `processDefinitionKey`.
     *
     * @return self
     */
    public function setProcessDefinitionWithoutTenantId($process_definition_without_tenant_id)
    {
        $this->container['process_definition_without_tenant_id'] = $process_definition_without_tenant_id;

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


