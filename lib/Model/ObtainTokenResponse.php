<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SquareConnect\Model;

use \ArrayAccess;
/**
 * ObtainTokenResponse Class Doc Comment
 *
 * @category Class
 * @package  SquareConnect
 * @author   Square Inc.
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://squareup.com/developers
 */
class ObtainTokenResponse implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'access_token' => 'string',
        'token_type' => 'string',
        'expires_at' => 'string',
        'merchant_id' => 'string',
        'subscription_id' => 'string',
        'plan_id' => 'string',
        'id_token' => 'string',
        'refresh_token' => 'string'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'access_token' => 'access_token',
        'token_type' => 'token_type',
        'expires_at' => 'expires_at',
        'merchant_id' => 'merchant_id',
        'subscription_id' => 'subscription_id',
        'plan_id' => 'plan_id',
        'id_token' => 'id_token',
        'refresh_token' => 'refresh_token'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'access_token' => 'setAccessToken',
        'token_type' => 'setTokenType',
        'expires_at' => 'setExpiresAt',
        'merchant_id' => 'setMerchantId',
        'subscription_id' => 'setSubscriptionId',
        'plan_id' => 'setPlanId',
        'id_token' => 'setIdToken',
        'refresh_token' => 'setRefreshToken'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'access_token' => 'getAccessToken',
        'token_type' => 'getTokenType',
        'expires_at' => 'getExpiresAt',
        'merchant_id' => 'getMerchantId',
        'subscription_id' => 'getSubscriptionId',
        'plan_id' => 'getPlanId',
        'id_token' => 'getIdToken',
        'refresh_token' => 'getRefreshToken'
    );
  
    /**
      * $access_token A valid OAuth access token. Provide the access token in a header with every request to Connect API endpoints. See the [Build with OAuth](/authz/oauth/build-with-the-api) guide for more information.
      * @var string
      */
    protected $access_token;
    /**
      * $token_type This value is always _bearer_.
      * @var string
      */
    protected $token_type;
    /**
      * $expires_at The date when access_token expires, in [ISO 8601](http://www.iso.org/iso/home/standards/iso8601.htm) format.
      * @var string
      */
    protected $expires_at;
    /**
      * $merchant_id The ID of the authorizing merchant's business.
      * @var string
      */
    protected $merchant_id;
    /**
      * $subscription_id __Legacy field__. The ID of a subscription plan the merchant signed up for. Only present if the merchant signed up for a subscription during authorization.
      * @var string
      */
    protected $subscription_id;
    /**
      * $plan_id The ID of the [subscription](https://docs.connect.squareup.com/api/connect/v1/#navsection-subscriptionmanagement) plan the merchant signed up for. Only present if the merchant signed up for a subscription during authorization.
      * @var string
      */
    protected $plan_id;
    /**
      * $id_token Then OpenID token belonging to this this person. Only present if the OPENID scope is included in the authorize request.
      * @var string
      */
    protected $id_token;
    /**
      * $refresh_token A refresh token. For more information, see [OAuth access token management](/authz/oauth/how-it-works#oauth-access-token-management).
      * @var string
      */
    protected $refresh_token;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initializing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            if (isset($data["access_token"])) {
              $this->access_token = $data["access_token"];
            } else {
              $this->access_token = null;
            }
            if (isset($data["token_type"])) {
              $this->token_type = $data["token_type"];
            } else {
              $this->token_type = null;
            }
            if (isset($data["expires_at"])) {
              $this->expires_at = $data["expires_at"];
            } else {
              $this->expires_at = null;
            }
            if (isset($data["merchant_id"])) {
              $this->merchant_id = $data["merchant_id"];
            } else {
              $this->merchant_id = null;
            }
            if (isset($data["subscription_id"])) {
              $this->subscription_id = $data["subscription_id"];
            } else {
              $this->subscription_id = null;
            }
            if (isset($data["plan_id"])) {
              $this->plan_id = $data["plan_id"];
            } else {
              $this->plan_id = null;
            }
            if (isset($data["id_token"])) {
              $this->id_token = $data["id_token"];
            } else {
              $this->id_token = null;
            }
            if (isset($data["refresh_token"])) {
              $this->refresh_token = $data["refresh_token"];
            } else {
              $this->refresh_token = null;
            }
        }
    }
    /**
     * Gets access_token
     * @return string
     */
    public function getAccessToken()
    {
        return $this->access_token;
    }
  
    /**
     * Sets access_token
     * @param string $access_token A valid OAuth access token. Provide the access token in a header with every request to Connect API endpoints. See the [Build with OAuth](/authz/oauth/build-with-the-api) guide for more information.
     * @return $this
     */
    public function setAccessToken($access_token)
    {
        $this->access_token = $access_token;
        return $this;
    }
    /**
     * Gets token_type
     * @return string
     */
    public function getTokenType()
    {
        return $this->token_type;
    }
  
    /**
     * Sets token_type
     * @param string $token_type This value is always _bearer_.
     * @return $this
     */
    public function setTokenType($token_type)
    {
        $this->token_type = $token_type;
        return $this;
    }
    /**
     * Gets expires_at
     * @return string
     */
    public function getExpiresAt()
    {
        return $this->expires_at;
    }
  
    /**
     * Sets expires_at
     * @param string $expires_at The date when access_token expires, in [ISO 8601](http://www.iso.org/iso/home/standards/iso8601.htm) format.
     * @return $this
     */
    public function setExpiresAt($expires_at)
    {
        $this->expires_at = $expires_at;
        return $this;
    }
    /**
     * Gets merchant_id
     * @return string
     */
    public function getMerchantId()
    {
        return $this->merchant_id;
    }
  
    /**
     * Sets merchant_id
     * @param string $merchant_id The ID of the authorizing merchant's business.
     * @return $this
     */
    public function setMerchantId($merchant_id)
    {
        $this->merchant_id = $merchant_id;
        return $this;
    }
    /**
     * Gets subscription_id
     * @return string
     */
    public function getSubscriptionId()
    {
        return $this->subscription_id;
    }
  
    /**
     * Sets subscription_id
     * @param string $subscription_id __Legacy field__. The ID of a subscription plan the merchant signed up for. Only present if the merchant signed up for a subscription during authorization.
     * @return $this
     */
    public function setSubscriptionId($subscription_id)
    {
        $this->subscription_id = $subscription_id;
        return $this;
    }
    /**
     * Gets plan_id
     * @return string
     */
    public function getPlanId()
    {
        return $this->plan_id;
    }
  
    /**
     * Sets plan_id
     * @param string $plan_id The ID of the [subscription](https://docs.connect.squareup.com/api/connect/v1/#navsection-subscriptionmanagement) plan the merchant signed up for. Only present if the merchant signed up for a subscription during authorization.
     * @return $this
     */
    public function setPlanId($plan_id)
    {
        $this->plan_id = $plan_id;
        return $this;
    }
    /**
     * Gets id_token
     * @return string
     */
    public function getIdToken()
    {
        return $this->id_token;
    }
  
    /**
     * Sets id_token
     * @param string $id_token Then OpenID token belonging to this this person. Only present if the OPENID scope is included in the authorize request.
     * @return $this
     */
    public function setIdToken($id_token)
    {
        $this->id_token = $id_token;
        return $this;
    }
    /**
     * Gets refresh_token
     * @return string
     */
    public function getRefreshToken()
    {
        return $this->refresh_token;
    }
  
    /**
     * Sets refresh_token
     * @param string $refresh_token A refresh token. For more information, see [OAuth access token management](/authz/oauth/how-it-works#oauth-access-token-management).
     * @return $this
     */
    public function setRefreshToken($refresh_token)
    {
        $this->refresh_token = $refresh_token;
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
