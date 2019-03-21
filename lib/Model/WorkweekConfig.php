<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SquareConnect\Model;

use \ArrayAccess;
/**
 * WorkweekConfig Class Doc Comment
 *
 * @category Class
 * @package  SquareConnect
 * @author   Square Inc.
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://squareup.com/developers
 */
class WorkweekConfig implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'id' => 'string',
        'start_of_week' => 'string',
        'start_of_day_local_time' => 'string',
        'version' => 'int',
        'created_at' => 'string',
        'updated_at' => 'string'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'id' => 'id',
        'start_of_week' => 'start_of_week',
        'start_of_day_local_time' => 'start_of_day_local_time',
        'version' => 'version',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'id' => 'setId',
        'start_of_week' => 'setStartOfWeek',
        'start_of_day_local_time' => 'setStartOfDayLocalTime',
        'version' => 'setVersion',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'id' => 'getId',
        'start_of_week' => 'getStartOfWeek',
        'start_of_day_local_time' => 'getStartOfDayLocalTime',
        'version' => 'getVersion',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt'
    );
  
    /**
      * $id UUID for this object
      * @var string
      */
    protected $id;
    /**
      * $start_of_week The day of the week on which a business week cuts over for compensation purposes.
      * @var string
      */
    protected $start_of_week;
    /**
      * $start_of_day_local_time The local time at which a business week cuts over. Represented as a string in `HH:MM` format (`HH:MM:SS` is also accepted, but seconds are truncated).
      * @var string
      */
    protected $start_of_day_local_time;
    /**
      * $version Used for resolving concurrency issues; request will fail if version provided does not match server version at time of request. If not provided, Square executes a blind write; potentially overwriting data from another write.
      * @var int
      */
    protected $version;
    /**
      * $created_at A read-only timestamp in RFC 3339 format; presented in UTC
      * @var string
      */
    protected $created_at;
    /**
      * $updated_at A read-only timestamp in RFC 3339 format; presented in UTC
      * @var string
      */
    protected $updated_at;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initializing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            if (isset($data["id"])) {
              $this->id = $data["id"];
            } else {
              $this->id = null;
            }
            if (isset($data["start_of_week"])) {
              $this->start_of_week = $data["start_of_week"];
            } else {
              $this->start_of_week = null;
            }
            if (isset($data["start_of_day_local_time"])) {
              $this->start_of_day_local_time = $data["start_of_day_local_time"];
            } else {
              $this->start_of_day_local_time = null;
            }
            if (isset($data["version"])) {
              $this->version = $data["version"];
            } else {
              $this->version = null;
            }
            if (isset($data["created_at"])) {
              $this->created_at = $data["created_at"];
            } else {
              $this->created_at = null;
            }
            if (isset($data["updated_at"])) {
              $this->updated_at = $data["updated_at"];
            } else {
              $this->updated_at = null;
            }
        }
    }
    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }
  
    /**
     * Sets id
     * @param string $id UUID for this object
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
    /**
     * Gets start_of_week
     * @return string
     */
    public function getStartOfWeek()
    {
        return $this->start_of_week;
    }
  
    /**
     * Sets start_of_week
     * @param string $start_of_week The day of the week on which a business week cuts over for compensation purposes.
     * @return $this
     */
    public function setStartOfWeek($start_of_week)
    {
        $this->start_of_week = $start_of_week;
        return $this;
    }
    /**
     * Gets start_of_day_local_time
     * @return string
     */
    public function getStartOfDayLocalTime()
    {
        return $this->start_of_day_local_time;
    }
  
    /**
     * Sets start_of_day_local_time
     * @param string $start_of_day_local_time The local time at which a business week cuts over. Represented as a string in `HH:MM` format (`HH:MM:SS` is also accepted, but seconds are truncated).
     * @return $this
     */
    public function setStartOfDayLocalTime($start_of_day_local_time)
    {
        $this->start_of_day_local_time = $start_of_day_local_time;
        return $this;
    }
    /**
     * Gets version
     * @return int
     */
    public function getVersion()
    {
        return $this->version;
    }
  
    /**
     * Sets version
     * @param int $version Used for resolving concurrency issues; request will fail if version provided does not match server version at time of request. If not provided, Square executes a blind write; potentially overwriting data from another write.
     * @return $this
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }
    /**
     * Gets created_at
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }
  
    /**
     * Sets created_at
     * @param string $created_at A read-only timestamp in RFC 3339 format; presented in UTC
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
        return $this;
    }
    /**
     * Gets updated_at
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }
  
    /**
     * Sets updated_at
     * @param string $updated_at A read-only timestamp in RFC 3339 format; presented in UTC
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->updated_at = $updated_at;
        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset 
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }
  
    /**
     * Gets offset.
     * @param  integer $offset Offset 
     * @return mixed 
     */
    public function offsetGet($offset)
    {
        return $this->$offset;
    }
  
    /**
     * Sets value based on offset.
     * @param  integer $offset Offset 
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }
  
    /**
     * Unsets offset.
     * @param  integer $offset Offset 
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->$offset);
    }
  
    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(\SquareConnect\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        } else {
            return json_encode(\SquareConnect\ObjectSerializer::sanitizeForSerialization($this));
        }
    }
}