<?php
/**
 * ExternalTaskDto
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
 * ExternalTaskDto Class Doc Comment
 *
 * @category Class
 * @description An External Task object with the following properties
 * @package  NookeST\Camunda
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ExternalTaskDto implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ExternalTaskDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'activity_id' => 'string',
        'activity_instance_id' => 'string',
        'error_message' => 'string',
        'execution_id' => 'string',
        'id' => 'string',
        'lock_expiration_time' => '\DateTime',
        'process_definition_id' => 'string',
        'process_definition_key' => 'string',
        'process_definition_version_tag' => 'string',
        'process_instance_id' => 'string',
        'tenant_id' => 'string',
        'retries' => 'int',
        'suspended' => 'bool',
        'worker_id' => 'string',
        'topic_name' => 'string',
        'priority' => 'int',
        'business_key' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'activity_id' => null,
        'activity_instance_id' => null,
        'error_message' => null,
        'execution_id' => null,
        'id' => null,
        'lock_expiration_time' => 'date-time',
        'process_definition_id' => null,
        'process_definition_key' => null,
        'process_definition_version_tag' => null,
        'process_instance_id' => null,
        'tenant_id' => null,
        'retries' => 'int32',
        'suspended' => null,
        'worker_id' => null,
        'topic_name' => null,
        'priority' => 'int64',
        'business_key' => null
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
        'activity_id' => 'activityId',
        'activity_instance_id' => 'activityInstanceId',
        'error_message' => 'errorMessage',
        'execution_id' => 'executionId',
        'id' => 'id',
        'lock_expiration_time' => 'lockExpirationTime',
        'process_definition_id' => 'processDefinitionId',
        'process_definition_key' => 'processDefinitionKey',
        'process_definition_version_tag' => 'processDefinitionVersionTag',
        'process_instance_id' => 'processInstanceId',
        'tenant_id' => 'tenantId',
        'retries' => 'retries',
        'suspended' => 'suspended',
        'worker_id' => 'workerId',
        'topic_name' => 'topicName',
        'priority' => 'priority',
        'business_key' => 'businessKey'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'activity_id' => 'setActivityId',
        'activity_instance_id' => 'setActivityInstanceId',
        'error_message' => 'setErrorMessage',
        'execution_id' => 'setExecutionId',
        'id' => 'setId',
        'lock_expiration_time' => 'setLockExpirationTime',
        'process_definition_id' => 'setProcessDefinitionId',
        'process_definition_key' => 'setProcessDefinitionKey',
        'process_definition_version_tag' => 'setProcessDefinitionVersionTag',
        'process_instance_id' => 'setProcessInstanceId',
        'tenant_id' => 'setTenantId',
        'retries' => 'setRetries',
        'suspended' => 'setSuspended',
        'worker_id' => 'setWorkerId',
        'topic_name' => 'setTopicName',
        'priority' => 'setPriority',
        'business_key' => 'setBusinessKey'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'activity_id' => 'getActivityId',
        'activity_instance_id' => 'getActivityInstanceId',
        'error_message' => 'getErrorMessage',
        'execution_id' => 'getExecutionId',
        'id' => 'getId',
        'lock_expiration_time' => 'getLockExpirationTime',
        'process_definition_id' => 'getProcessDefinitionId',
        'process_definition_key' => 'getProcessDefinitionKey',
        'process_definition_version_tag' => 'getProcessDefinitionVersionTag',
        'process_instance_id' => 'getProcessInstanceId',
        'tenant_id' => 'getTenantId',
        'retries' => 'getRetries',
        'suspended' => 'getSuspended',
        'worker_id' => 'getWorkerId',
        'topic_name' => 'getTopicName',
        'priority' => 'getPriority',
        'business_key' => 'getBusinessKey'
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
        $this->container['activity_id'] = $data['activity_id'] ?? null;
        $this->container['activity_instance_id'] = $data['activity_instance_id'] ?? null;
        $this->container['error_message'] = $data['error_message'] ?? null;
        $this->container['execution_id'] = $data['execution_id'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['lock_expiration_time'] = $data['lock_expiration_time'] ?? null;
        $this->container['process_definition_id'] = $data['process_definition_id'] ?? null;
        $this->container['process_definition_key'] = $data['process_definition_key'] ?? null;
        $this->container['process_definition_version_tag'] = $data['process_definition_version_tag'] ?? null;
        $this->container['process_instance_id'] = $data['process_instance_id'] ?? null;
        $this->container['tenant_id'] = $data['tenant_id'] ?? null;
        $this->container['retries'] = $data['retries'] ?? null;
        $this->container['suspended'] = $data['suspended'] ?? null;
        $this->container['worker_id'] = $data['worker_id'] ?? null;
        $this->container['topic_name'] = $data['topic_name'] ?? null;
        $this->container['priority'] = $data['priority'] ?? null;
        $this->container['business_key'] = $data['business_key'] ?? null;
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
     * Gets activity_id
     *
     * @return string|null
     */
    public function getActivityId()
    {
        return $this->container['activity_id'];
    }

    /**
     * Sets activity_id
     *
     * @param string|null $activity_id The id of the activity that this external task belongs to.
     *
     * @return self
     */
    public function setActivityId($activity_id)
    {
        $this->container['activity_id'] = $activity_id;

        return $this;
    }

    /**
     * Gets activity_instance_id
     *
     * @return string|null
     */
    public function getActivityInstanceId()
    {
        return $this->container['activity_instance_id'];
    }

    /**
     * Sets activity_instance_id
     *
     * @param string|null $activity_instance_id The id of the activity instance that the external task belongs to.
     *
     * @return self
     */
    public function setActivityInstanceId($activity_instance_id)
    {
        $this->container['activity_instance_id'] = $activity_instance_id;

        return $this;
    }

    /**
     * Gets error_message
     *
     * @return string|null
     */
    public function getErrorMessage()
    {
        return $this->container['error_message'];
    }

    /**
     * Sets error_message
     *
     * @param string|null $error_message The full error message submitted with the latest reported failure executing this task; `null` if no failure was reported previously or if no error message was submitted
     *
     * @return self
     */
    public function setErrorMessage($error_message)
    {
        $this->container['error_message'] = $error_message;

        return $this;
    }

    /**
     * Gets execution_id
     *
     * @return string|null
     */
    public function getExecutionId()
    {
        return $this->container['execution_id'];
    }

    /**
     * Sets execution_id
     *
     * @param string|null $execution_id The id of the execution that the external task belongs to.
     *
     * @return self
     */
    public function setExecutionId($execution_id)
    {
        $this->container['execution_id'] = $execution_id;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id The id of the external task.
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets lock_expiration_time
     *
     * @return \DateTime|null
     */
    public function getLockExpirationTime()
    {
        return $this->container['lock_expiration_time'];
    }

    /**
     * Sets lock_expiration_time
     *
     * @param \DateTime|null $lock_expiration_time The date that the task's most recent lock expires or has expired.
     *
     * @return self
     */
    public function setLockExpirationTime($lock_expiration_time)
    {
        $this->container['lock_expiration_time'] = $lock_expiration_time;

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
     * @param string|null $process_definition_id The id of the process definition the external task is defined in.
     *
     * @return self
     */
    public function setProcessDefinitionId($process_definition_id)
    {
        $this->container['process_definition_id'] = $process_definition_id;

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
     * @param string|null $process_definition_key The key of the process definition the external task is defined in.
     *
     * @return self
     */
    public function setProcessDefinitionKey($process_definition_key)
    {
        $this->container['process_definition_key'] = $process_definition_key;

        return $this;
    }

    /**
     * Gets process_definition_version_tag
     *
     * @return string|null
     */
    public function getProcessDefinitionVersionTag()
    {
        return $this->container['process_definition_version_tag'];
    }

    /**
     * Sets process_definition_version_tag
     *
     * @param string|null $process_definition_version_tag The version tag of the process definition the external task is defined in.
     *
     * @return self
     */
    public function setProcessDefinitionVersionTag($process_definition_version_tag)
    {
        $this->container['process_definition_version_tag'] = $process_definition_version_tag;

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
     * @param string|null $process_instance_id The id of the process instance the external task belongs to.
     *
     * @return self
     */
    public function setProcessInstanceId($process_instance_id)
    {
        $this->container['process_instance_id'] = $process_instance_id;

        return $this;
    }

    /**
     * Gets tenant_id
     *
     * @return string|null
     */
    public function getTenantId()
    {
        return $this->container['tenant_id'];
    }

    /**
     * Sets tenant_id
     *
     * @param string|null $tenant_id The id of the tenant the external task belongs to.
     *
     * @return self
     */
    public function setTenantId($tenant_id)
    {
        $this->container['tenant_id'] = $tenant_id;

        return $this;
    }

    /**
     * Gets retries
     *
     * @return int|null
     */
    public function getRetries()
    {
        return $this->container['retries'];
    }

    /**
     * Sets retries
     *
     * @param int|null $retries The number of retries the task currently has left.
     *
     * @return self
     */
    public function setRetries($retries)
    {
        $this->container['retries'] = $retries;

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
     * @param bool|null $suspended A flag indicating whether the external task is suspended or not.
     *
     * @return self
     */
    public function setSuspended($suspended)
    {
        $this->container['suspended'] = $suspended;

        return $this;
    }

    /**
     * Gets worker_id
     *
     * @return string|null
     */
    public function getWorkerId()
    {
        return $this->container['worker_id'];
    }

    /**
     * Sets worker_id
     *
     * @param string|null $worker_id The id of the worker that posesses or posessed the most recent lock.
     *
     * @return self
     */
    public function setWorkerId($worker_id)
    {
        $this->container['worker_id'] = $worker_id;

        return $this;
    }

    /**
     * Gets topic_name
     *
     * @return string|null
     */
    public function getTopicName()
    {
        return $this->container['topic_name'];
    }

    /**
     * Sets topic_name
     *
     * @param string|null $topic_name The topic name of the external task.
     *
     * @return self
     */
    public function setTopicName($topic_name)
    {
        $this->container['topic_name'] = $topic_name;

        return $this;
    }

    /**
     * Gets priority
     *
     * @return int|null
     */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
     * Sets priority
     *
     * @param int|null $priority The priority of the external task.
     *
     * @return self
     */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;

        return $this;
    }

    /**
     * Gets business_key
     *
     * @return string|null
     */
    public function getBusinessKey()
    {
        return $this->container['business_key'];
    }

    /**
     * Sets business_key
     *
     * @param string|null $business_key The business key of the process instance the external task belongs to.
     *
     * @return self
     */
    public function setBusinessKey($business_key)
    {
        $this->container['business_key'] = $business_key;

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


