<?php
/**
 * ActivityInstanceDto
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
 * ActivityInstanceDto Class Doc Comment
 *
 * @category Class
 * @description A JSON object corresponding to the Activity Instance tree of the given process instance.
 * @package  NookeST\Camunda
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ActivityInstanceDto implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ActivityInstanceDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'parent_activity_instance_id' => 'string',
        'activity_id' => 'string',
        'activity_name' => 'string',
        'activity_type' => 'string',
        'process_instance_id' => 'string',
        'process_definition_id' => 'string',
        'child_activity_instances' => '\NookeST\Camunda\Model\ActivityInstanceDto[]',
        'child_transition_instances' => '\NookeST\Camunda\Model\TransitionInstanceDto[]',
        'execution_ids' => 'string[]',
        'incident_ids' => 'string[]',
        'incidents' => '\NookeST\Camunda\Model\ActivityInstanceIncidentDto[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'parent_activity_instance_id' => null,
        'activity_id' => null,
        'activity_name' => null,
        'activity_type' => null,
        'process_instance_id' => null,
        'process_definition_id' => null,
        'child_activity_instances' => null,
        'child_transition_instances' => null,
        'execution_ids' => null,
        'incident_ids' => null,
        'incidents' => null
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
        'id' => 'id',
        'parent_activity_instance_id' => 'parentActivityInstanceId',
        'activity_id' => 'activityId',
        'activity_name' => 'activityName',
        'activity_type' => 'activityType',
        'process_instance_id' => 'processInstanceId',
        'process_definition_id' => 'processDefinitionId',
        'child_activity_instances' => 'childActivityInstances',
        'child_transition_instances' => 'childTransitionInstances',
        'execution_ids' => 'executionIds',
        'incident_ids' => 'incidentIds',
        'incidents' => 'incidents'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'parent_activity_instance_id' => 'setParentActivityInstanceId',
        'activity_id' => 'setActivityId',
        'activity_name' => 'setActivityName',
        'activity_type' => 'setActivityType',
        'process_instance_id' => 'setProcessInstanceId',
        'process_definition_id' => 'setProcessDefinitionId',
        'child_activity_instances' => 'setChildActivityInstances',
        'child_transition_instances' => 'setChildTransitionInstances',
        'execution_ids' => 'setExecutionIds',
        'incident_ids' => 'setIncidentIds',
        'incidents' => 'setIncidents'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'parent_activity_instance_id' => 'getParentActivityInstanceId',
        'activity_id' => 'getActivityId',
        'activity_name' => 'getActivityName',
        'activity_type' => 'getActivityType',
        'process_instance_id' => 'getProcessInstanceId',
        'process_definition_id' => 'getProcessDefinitionId',
        'child_activity_instances' => 'getChildActivityInstances',
        'child_transition_instances' => 'getChildTransitionInstances',
        'execution_ids' => 'getExecutionIds',
        'incident_ids' => 'getIncidentIds',
        'incidents' => 'getIncidents'
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['parent_activity_instance_id'] = $data['parent_activity_instance_id'] ?? null;
        $this->container['activity_id'] = $data['activity_id'] ?? null;
        $this->container['activity_name'] = $data['activity_name'] ?? null;
        $this->container['activity_type'] = $data['activity_type'] ?? null;
        $this->container['process_instance_id'] = $data['process_instance_id'] ?? null;
        $this->container['process_definition_id'] = $data['process_definition_id'] ?? null;
        $this->container['child_activity_instances'] = $data['child_activity_instances'] ?? null;
        $this->container['child_transition_instances'] = $data['child_transition_instances'] ?? null;
        $this->container['execution_ids'] = $data['execution_ids'] ?? null;
        $this->container['incident_ids'] = $data['incident_ids'] ?? null;
        $this->container['incidents'] = $data['incidents'] ?? null;
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
     * @param string|null $id The id of the activity instance.
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets parent_activity_instance_id
     *
     * @return string|null
     */
    public function getParentActivityInstanceId()
    {
        return $this->container['parent_activity_instance_id'];
    }

    /**
     * Sets parent_activity_instance_id
     *
     * @param string|null $parent_activity_instance_id The id of the parent activity instance, for example a sub process instance.
     *
     * @return self
     */
    public function setParentActivityInstanceId($parent_activity_instance_id)
    {
        $this->container['parent_activity_instance_id'] = $parent_activity_instance_id;

        return $this;
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
     * @param string|null $activity_id The id of the activity.
     *
     * @return self
     */
    public function setActivityId($activity_id)
    {
        $this->container['activity_id'] = $activity_id;

        return $this;
    }

    /**
     * Gets activity_name
     *
     * @return string|null
     */
    public function getActivityName()
    {
        return $this->container['activity_name'];
    }

    /**
     * Sets activity_name
     *
     * @param string|null $activity_name The name of the activity
     *
     * @return self
     */
    public function setActivityName($activity_name)
    {
        $this->container['activity_name'] = $activity_name;

        return $this;
    }

    /**
     * Gets activity_type
     *
     * @return string|null
     */
    public function getActivityType()
    {
        return $this->container['activity_type'];
    }

    /**
     * Sets activity_type
     *
     * @param string|null $activity_type The type of activity (corresponds to the XML element name in the BPMN 2.0, e.g., 'userTask')
     *
     * @return self
     */
    public function setActivityType($activity_type)
    {
        $this->container['activity_type'] = $activity_type;

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
     * @param string|null $process_instance_id The id of the process instance this activity instance is part of.
     *
     * @return self
     */
    public function setProcessInstanceId($process_instance_id)
    {
        $this->container['process_instance_id'] = $process_instance_id;

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
     * @param string|null $process_definition_id The id of the process definition.
     *
     * @return self
     */
    public function setProcessDefinitionId($process_definition_id)
    {
        $this->container['process_definition_id'] = $process_definition_id;

        return $this;
    }

    /**
     * Gets child_activity_instances
     *
     * @return \NookeST\Camunda\Model\ActivityInstanceDto[]|null
     */
    public function getChildActivityInstances()
    {
        return $this->container['child_activity_instances'];
    }

    /**
     * Sets child_activity_instances
     *
     * @param \NookeST\Camunda\Model\ActivityInstanceDto[]|null $child_activity_instances A list of child activity instances.
     *
     * @return self
     */
    public function setChildActivityInstances($child_activity_instances)
    {
        $this->container['child_activity_instances'] = $child_activity_instances;

        return $this;
    }

    /**
     * Gets child_transition_instances
     *
     * @return \NookeST\Camunda\Model\TransitionInstanceDto[]|null
     */
    public function getChildTransitionInstances()
    {
        return $this->container['child_transition_instances'];
    }

    /**
     * Sets child_transition_instances
     *
     * @param \NookeST\Camunda\Model\TransitionInstanceDto[]|null $child_transition_instances A list of child transition instances. A transition instance represents an execution waiting in an asynchronous continuation.
     *
     * @return self
     */
    public function setChildTransitionInstances($child_transition_instances)
    {
        $this->container['child_transition_instances'] = $child_transition_instances;

        return $this;
    }

    /**
     * Gets execution_ids
     *
     * @return string[]|null
     */
    public function getExecutionIds()
    {
        return $this->container['execution_ids'];
    }

    /**
     * Sets execution_ids
     *
     * @param string[]|null $execution_ids A list of execution ids.
     *
     * @return self
     */
    public function setExecutionIds($execution_ids)
    {
        $this->container['execution_ids'] = $execution_ids;

        return $this;
    }

    /**
     * Gets incident_ids
     *
     * @return string[]|null
     */
    public function getIncidentIds()
    {
        return $this->container['incident_ids'];
    }

    /**
     * Sets incident_ids
     *
     * @param string[]|null $incident_ids A list of incident ids.
     *
     * @return self
     */
    public function setIncidentIds($incident_ids)
    {
        $this->container['incident_ids'] = $incident_ids;

        return $this;
    }

    /**
     * Gets incidents
     *
     * @return \NookeST\Camunda\Model\ActivityInstanceIncidentDto[]|null
     */
    public function getIncidents()
    {
        return $this->container['incidents'];
    }

    /**
     * Sets incidents
     *
     * @param \NookeST\Camunda\Model\ActivityInstanceIncidentDto[]|null $incidents A list of JSON objects containing incident specific properties: * `id`: the id of the incident * `activityId`: the activity id in which the incident occurred
     *
     * @return self
     */
    public function setIncidents($incidents)
    {
        $this->container['incidents'] = $incidents;

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


