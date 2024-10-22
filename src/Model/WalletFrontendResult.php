<?php
/**
 * WalletFrontendResult
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OotbTeam\MulPay
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * PGマルチペイメントサービス OpenAPIタイプ
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.5.0
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.9.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OotbTeam\MulPay\Model;

use \ArrayAccess;
use \OotbTeam\MulPay\ObjectSerializer;

/**
 * WalletFrontendResult Class Doc Comment
 *
 * @category Class
 * @description Pay払い 都度支払い（フロントエンド方式）結果情報
 * @package  OotbTeam\MulPay
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class WalletFrontendResult implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'WalletFrontendResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'wallet_type' => '\OotbTeam\MulPay\Model\WalletFrontendType',
        'settlement_code' => 'string',
        'capture_expiry_date_time' => '\DateTime',
        'frontend_payment_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'wallet_type' => null,
        'settlement_code' => null,
        'capture_expiry_date_time' => 'date-time',
        'frontend_payment_id' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'wallet_type' => false,
        'settlement_code' => false,
        'capture_expiry_date_time' => false,
        'frontend_payment_id' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'wallet_type' => 'walletType',
        'settlement_code' => 'settlementCode',
        'capture_expiry_date_time' => 'captureExpiryDateTime',
        'frontend_payment_id' => 'frontendPaymentId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'wallet_type' => 'setWalletType',
        'settlement_code' => 'setSettlementCode',
        'capture_expiry_date_time' => 'setCaptureExpiryDateTime',
        'frontend_payment_id' => 'setFrontendPaymentId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'wallet_type' => 'getWalletType',
        'settlement_code' => 'getSettlementCode',
        'capture_expiry_date_time' => 'getCaptureExpiryDateTime',
        'frontend_payment_id' => 'getFrontendPaymentId'
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
        $this->setIfExists('wallet_type', $data ?? [], null);
        $this->setIfExists('settlement_code', $data ?? [], null);
        $this->setIfExists('capture_expiry_date_time', $data ?? [], null);
        $this->setIfExists('frontend_payment_id', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
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
     * Gets wallet_type
     *
     * @return \OotbTeam\MulPay\Model\WalletFrontendType|null
     */
    public function getWalletType()
    {
        return $this->container['wallet_type'];
    }

    /**
     * Sets wallet_type
     *
     * @param \OotbTeam\MulPay\Model\WalletFrontendType|null $wallet_type wallet_type
     *
     * @return self
     */
    public function setWalletType($wallet_type)
    {
        if (is_null($wallet_type)) {
            throw new \InvalidArgumentException('non-nullable wallet_type cannot be null');
        }
        $this->container['wallet_type'] = $wallet_type;

        return $this;
    }

    /**
     * Gets settlement_code
     *
     * @return string|null
     */
    public function getSettlementCode()
    {
        return $this->container['settlement_code'];
    }

    /**
     * Sets settlement_code
     *
     * @param string|null $settlement_code 決済番号 <br/> [/wallet/front-end/charge](#tag/wallet/operation/walletFrontendCharge)では返却されません。<br/>
     *
     * @return self
     */
    public function setSettlementCode($settlement_code)
    {
        if (is_null($settlement_code)) {
            throw new \InvalidArgumentException('non-nullable settlement_code cannot be null');
        }
        $this->container['settlement_code'] = $settlement_code;

        return $this;
    }

    /**
     * Gets capture_expiry_date_time
     *
     * @return \DateTime|null
     */
    public function getCaptureExpiryDateTime()
    {
        return $this->container['capture_expiry_date_time'];
    }

    /**
     * Sets capture_expiry_date_time
     *
     * @param \DateTime|null $capture_expiry_date_time 仮売上有効日時   [/wallet/front-end/charge](#tag/wallet/operation/walletFrontendCharge)では返却されません。<br/> [RFC 3339, section 5.6](https://tools.ietf.org/html/rfc3339#section-5.6)で定義された表記です。   例) 2023-06-30T12:34:56+09:00
     *
     * @return self
     */
    public function setCaptureExpiryDateTime($capture_expiry_date_time)
    {
        if (is_null($capture_expiry_date_time)) {
            throw new \InvalidArgumentException('non-nullable capture_expiry_date_time cannot be null');
        }
        $this->container['capture_expiry_date_time'] = $capture_expiry_date_time;

        return $this;
    }

    /**
     * Gets frontend_payment_id
     *
     * @return string|null
     */
    public function getFrontendPaymentId()
    {
        return $this->container['frontend_payment_id'];
    }

    /**
     * Sets frontend_payment_id
     *
     * @param string|null $frontend_payment_id 決済番号（フロントエンド利用）<br/> [/wallet/front-end/verifyCharge](#tag/wallet/operation/walletFrontendVerifyCharge)では返却されません。
     *
     * @return self
     */
    public function setFrontendPaymentId($frontend_payment_id)
    {
        if (is_null($frontend_payment_id)) {
            throw new \InvalidArgumentException('non-nullable frontend_payment_id cannot be null');
        }
        $this->container['frontend_payment_id'] = $frontend_payment_id;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
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
    #[\ReturnTypeWillChange]
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
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
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
    #[\ReturnTypeWillChange]
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

