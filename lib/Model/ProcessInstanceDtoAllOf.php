<?php
/**
 * ProcessInstanceDtoAllOf
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
 * ProcessInstanceDtoAllOf Class Doc Comment
 *
 * @category Class
 * @package  NookeST\Camunda
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ProcessInstanceDtoAllOf implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ProcessInstanceDto_allOf';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'definition_id' => 'string',
        'business_key' => 'string',
        'case_instance_id' => 'string',
        'ended' => 'bool',
        'suspended' => 'bool',
        'tenant_id' => 'string'
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
        'definition_id' => null,
        'business_key' => null,
        'case_instance_id' => null,
        'ended' => null,
        'suspended' => null,
        'tenant_id' => null
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
        'definition_id' => 'definitionId',
        'business_key' => 'businessKey',
        'case_instance_id' => 'caseInstanceId',
        'ended' => 'ended',
        'suspended' => 'suspended',
        'tenant_id' => 'tenantId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'definition_id' => 'setDefinitionId',
        'business_key' => 'setBusinessKey',
        'case_instance_id' => 'setCaseInstanceId',
        'ended' => 'setEnded',
        'suspended' => 'setSuspended',
        'tenant_id' => 'setTenantId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'definition_id' => 'getDefinitionId',
        'business_key' => 'getBusinessKey',
        'case_instance_id' => 'getCaseInstanceId',
        'ended' => 'getEnded',
        'suspended' => 'getSuspended',
        'tenant_id' => 'getTenantId'
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
        $this->container['definition_id'] = $data['definition_id'] ?? null;
        $this->container['business_key'] = $data['business_key'] ?? null;
        $this->container['case_instance_id'] = $data['case_instance_id'] ?? null;
        $this->container['ended'] = $data['ended'] ?? null;
        $this->container['suspended'] = $data['suspended'] ?? null;
        $this->container['tenant_id'] = $data['tenant_id'] ?? null;
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
     * @param string|null $id The id of the process instance.
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets definition_id
     *
     * @return string|null
     */
    public function getDefinitionId()
    {
        return $this->container['definition_id'];
    }

    /**
     * Sets definition_id
     *
     * @param string|null $definition_id The id of the process definition that this process instance belongs to.
     *
     * @return self
     */
    public function setDefinitionId($definition_id)
    {
        $this->container['definition_id'] = $definition_id;

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
     * @param string|null $business_key The business key of the process instance.
     *
     * @return self
     */
    public function setBusinessKey($business_key)
    {
        $this->container['business_key'] = $business_key;

        return $this;
    }

    /**
     * Gets case_instance_id
     *
     * @return string|null
     */
    public function getCaseInstanceId()
    {
        return $this->container['case_instance_id'];
    }

    /**
     * Sets case_instance_id
     *
     * @param string|null $case_instance_id The id of the case instance associated with the process instance.
     *
     * @return self
     */
    public function setCaseInstanceId($case_instance_id)
    {
        $this->container['case_instance_id'] = $case_instance_id;

        return $this;
    }

    /**
     * Gets ended
     *
     * @return bool|null
     */
    public function getEnded()
    {
        return $this->container['ended'];
    }

    /**
     * Sets ended
     *
     * @param bool|null $ended A flag indicating whether the process instance has ended or not. Deprecated: will always be false!
     *
     * @return self
     */
    public function setEnded($ended)
    {
        $this->container['ended'] = $ended;

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
     * @param bool|null $suspended A flag indicating whether the process instance is suspended or not.
     *
     * @return self
     */
    public function setSuspended($suspended)
    {
        $this->container['suspended'] = $suspended;

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
     * @param string|null $tenant_id The tenant id of the process instance.
     *
     * @return self
     */
    public function setTenantId($tenant_id)
    {
        $this->container['tenant_id'] = $tenant_id;

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


