<?php
/**
 * ActivityLog
 *
 * PHP version 5
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Cloud Storage
 *
 * Cloud Storage
 *
 * The version of the OpenAPI document: 1.0.0
 * Contact: apiteam@example.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.1
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
 * ActivityLog Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ActivityLog implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ActivityLog';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'activity_log_id' => 'string',
        'author' => 'string',
        'created_at_system' => '\DateTime',
        'created_at_user' => '\DateTime',
        'level' => 'int',
        'message' => 'string',
        'object' => 'string',
        'subject' => 'string',
        'action' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'activity_log_id' => 'uuid',
        'author' => null,
        'created_at_system' => 'date-time',
        'created_at_user' => 'date-time',
        'level' => null,
        'message' => null,
        'object' => null,
        'subject' => null,
        'action' => null
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
        'activity_log_id' => 'activity_log_id',
        'author' => 'author',
        'created_at_system' => 'created_at_system',
        'created_at_user' => 'created_at_user',
        'level' => 'level',
        'message' => 'message',
        'object' => 'object',
        'subject' => 'subject',
        'action' => 'action'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'activity_log_id' => 'setActivityLogId',
        'author' => 'setAuthor',
        'created_at_system' => 'setCreatedAtSystem',
        'created_at_user' => 'setCreatedAtUser',
        'level' => 'setLevel',
        'message' => 'setMessage',
        'object' => 'setObject',
        'subject' => 'setSubject',
        'action' => 'setAction'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'activity_log_id' => 'getActivityLogId',
        'author' => 'getAuthor',
        'created_at_system' => 'getCreatedAtSystem',
        'created_at_user' => 'getCreatedAtUser',
        'level' => 'getLevel',
        'message' => 'getMessage',
        'object' => 'getObject',
        'subject' => 'getSubject',
        'action' => 'getAction'
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
        $this->container['activity_log_id'] = isset($data['activity_log_id']) ? $data['activity_log_id'] : null;
        $this->container['author'] = isset($data['author']) ? $data['author'] : null;
        $this->container['created_at_system'] = isset($data['created_at_system']) ? $data['created_at_system'] : null;
        $this->container['created_at_user'] = isset($data['created_at_user']) ? $data['created_at_user'] : null;
        $this->container['level'] = isset($data['level']) ? $data['level'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['object'] = isset($data['object']) ? $data['object'] : null;
        $this->container['subject'] = isset($data['subject']) ? $data['subject'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['author']) && (mb_strlen($this->container['author']) > 512)) {
            $invalidProperties[] = "invalid value for 'author', the character length must be smaller than or equal to 512.";
        }

        if ($this->container['created_at_user'] === null) {
            $invalidProperties[] = "'created_at_user' can't be null";
        }
        if ($this->container['level'] === null) {
            $invalidProperties[] = "'level' can't be null";
        }
        if (($this->container['level'] > 23)) {
            $invalidProperties[] = "invalid value for 'level', must be smaller than or equal to 23.";
        }

        if (($this->container['level'] < 0)) {
            $invalidProperties[] = "invalid value for 'level', must be bigger than or equal to 0.";
        }

        if ($this->container['message'] === null) {
            $invalidProperties[] = "'message' can't be null";
        }
        if ((mb_strlen($this->container['message']) > 10000)) {
            $invalidProperties[] = "invalid value for 'message', the character length must be smaller than or equal to 10000.";
        }

        if ((mb_strlen($this->container['message']) < 1)) {
            $invalidProperties[] = "invalid value for 'message', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['object'] === null) {
            $invalidProperties[] = "'object' can't be null";
        }
        if ((mb_strlen($this->container['object']) > 512)) {
            $invalidProperties[] = "invalid value for 'object', the character length must be smaller than or equal to 512.";
        }

        if ((mb_strlen($this->container['object']) < 1)) {
            $invalidProperties[] = "invalid value for 'object', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['subject'] === null) {
            $invalidProperties[] = "'subject' can't be null";
        }
        if ((mb_strlen($this->container['subject']) > 512)) {
            $invalidProperties[] = "invalid value for 'subject', the character length must be smaller than or equal to 512.";
        }

        if ((mb_strlen($this->container['subject']) < 1)) {
            $invalidProperties[] = "invalid value for 'subject', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['action'] === null) {
            $invalidProperties[] = "'action' can't be null";
        }
        if ((mb_strlen($this->container['action']) > 512)) {
            $invalidProperties[] = "invalid value for 'action', the character length must be smaller than or equal to 512.";
        }

        if ((mb_strlen($this->container['action']) < 1)) {
            $invalidProperties[] = "invalid value for 'action', the character length must be bigger than or equal to 1.";
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
     * Gets activity_log_id
     *
     * @return string|null
     */
    public function getActivityLogId()
    {
        return $this->container['activity_log_id'];
    }

    /**
     * Sets activity_log_id
     *
     * @param string|null $activity_log_id activity_log_id
     *
     * @return $this
     */
    public function setActivityLogId($activity_log_id)
    {
        $this->container['activity_log_id'] = $activity_log_id;

        return $this;
    }

    /**
     * Gets author
     *
     * @return string|null
     */
    public function getAuthor()
    {
        return $this->container['author'];
    }

    /**
     * Sets author
     *
     * @param string|null $author author
     *
     * @return $this
     */
    public function setAuthor($author)
    {
        if (!is_null($author) && (mb_strlen($author) > 512)) {
            throw new \InvalidArgumentException('invalid length for $author when calling ActivityLog., must be smaller than or equal to 512.');
        }

        $this->container['author'] = $author;

        return $this;
    }

    /**
     * Gets created_at_system
     *
     * @return \DateTime|null
     */
    public function getCreatedAtSystem()
    {
        return $this->container['created_at_system'];
    }

    /**
     * Sets created_at_system
     *
     * @param \DateTime|null $created_at_system created_at_system
     *
     * @return $this
     */
    public function setCreatedAtSystem($created_at_system)
    {
        $this->container['created_at_system'] = $created_at_system;

        return $this;
    }

    /**
     * Gets created_at_user
     *
     * @return \DateTime
     */
    public function getCreatedAtUser()
    {
        return $this->container['created_at_user'];
    }

    /**
     * Sets created_at_user
     *
     * @param \DateTime $created_at_user created_at_user
     *
     * @return $this
     */
    public function setCreatedAtUser($created_at_user)
    {
        $this->container['created_at_user'] = $created_at_user;

        return $this;
    }

    /**
     * Gets level
     *
     * @return int
     */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
     * Sets level
     *
     * @param int $level level
     *
     * @return $this
     */
    public function setLevel($level)
    {

        if (($level > 23)) {
            throw new \InvalidArgumentException('invalid value for $level when calling ActivityLog., must be smaller than or equal to 23.');
        }
        if (($level < 0)) {
            throw new \InvalidArgumentException('invalid value for $level when calling ActivityLog., must be bigger than or equal to 0.');
        }

        $this->container['level'] = $level;

        return $this;
    }

    /**
     * Gets message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string $message message
     *
     * @return $this
     */
    public function setMessage($message)
    {
        if ((mb_strlen($message) > 10000)) {
            throw new \InvalidArgumentException('invalid length for $message when calling ActivityLog., must be smaller than or equal to 10000.');
        }
        if ((mb_strlen($message) < 1)) {
            throw new \InvalidArgumentException('invalid length for $message when calling ActivityLog., must be bigger than or equal to 1.');
        }

        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets object
     *
     * @return string
     */
    public function getObject()
    {
        return $this->container['object'];
    }

    /**
     * Sets object
     *
     * @param string $object object
     *
     * @return $this
     */
    public function setObject($object)
    {
        if ((mb_strlen($object) > 512)) {
            throw new \InvalidArgumentException('invalid length for $object when calling ActivityLog., must be smaller than or equal to 512.');
        }
        if ((mb_strlen($object) < 1)) {
            throw new \InvalidArgumentException('invalid length for $object when calling ActivityLog., must be bigger than or equal to 1.');
        }

        $this->container['object'] = $object;

        return $this;
    }

    /**
     * Gets subject
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
     * Sets subject
     *
     * @param string $subject subject
     *
     * @return $this
     */
    public function setSubject($subject)
    {
        if ((mb_strlen($subject) > 512)) {
            throw new \InvalidArgumentException('invalid length for $subject when calling ActivityLog., must be smaller than or equal to 512.');
        }
        if ((mb_strlen($subject) < 1)) {
            throw new \InvalidArgumentException('invalid length for $subject when calling ActivityLog., must be bigger than or equal to 1.');
        }

        $this->container['subject'] = $subject;

        return $this;
    }

    /**
     * Gets action
     *
     * @return string
     */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
     * Sets action
     *
     * @param string $action action
     *
     * @return $this
     */
    public function setAction($action)
    {
        if ((mb_strlen($action) > 512)) {
            throw new \InvalidArgumentException('invalid length for $action when calling ActivityLog., must be smaller than or equal to 512.');
        }
        if ((mb_strlen($action) < 1)) {
            throw new \InvalidArgumentException('invalid length for $action when calling ActivityLog., must be bigger than or equal to 1.');
        }

        $this->container['action'] = $action;

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

