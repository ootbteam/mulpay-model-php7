<?php
/**
 * OrderInquiryResponse
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
 * OrderInquiryResponse Class Doc Comment
 *
 * @category Class
 * @package  OotbTeam\MulPay
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class OrderInquiryResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OrderInquiryResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'order_reference' => '\OotbTeam\MulPay\Model\OrderReferenceCash',
        'credit_result' => '\OotbTeam\MulPay\Model\CreditResult',
        'tds2_result' => '\OotbTeam\MulPay\Model\Tds2Result',
        'fraud_detection_result' => '\OotbTeam\MulPay\Model\FraudDetectionResult',
        'error_information' => '\OotbTeam\MulPay\Model\ErrorInformation',
        'wallet_result' => '\OotbTeam\MulPay\Model\WalletResult',
        'cash_result' => '\OotbTeam\MulPay\Model\CashResult'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'order_reference' => null,
        'credit_result' => null,
        'tds2_result' => null,
        'fraud_detection_result' => null,
        'error_information' => null,
        'wallet_result' => null,
        'cash_result' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'order_reference' => false,
        'credit_result' => false,
        'tds2_result' => false,
        'fraud_detection_result' => false,
        'error_information' => false,
        'wallet_result' => false,
        'cash_result' => false
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
        'order_reference' => 'orderReference',
        'credit_result' => 'creditResult',
        'tds2_result' => 'tds2Result',
        'fraud_detection_result' => 'fraudDetectionResult',
        'error_information' => 'errorInformation',
        'wallet_result' => 'walletResult',
        'cash_result' => 'cashResult'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'order_reference' => 'setOrderReference',
        'credit_result' => 'setCreditResult',
        'tds2_result' => 'setTds2Result',
        'fraud_detection_result' => 'setFraudDetectionResult',
        'error_information' => 'setErrorInformation',
        'wallet_result' => 'setWalletResult',
        'cash_result' => 'setCashResult'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'order_reference' => 'getOrderReference',
        'credit_result' => 'getCreditResult',
        'tds2_result' => 'getTds2Result',
        'fraud_detection_result' => 'getFraudDetectionResult',
        'error_information' => 'getErrorInformation',
        'wallet_result' => 'getWalletResult',
        'cash_result' => 'getCashResult'
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
        $this->setIfExists('order_reference', $data ?? [], null);
        $this->setIfExists('credit_result', $data ?? [], null);
        $this->setIfExists('tds2_result', $data ?? [], null);
        $this->setIfExists('fraud_detection_result', $data ?? [], null);
        $this->setIfExists('error_information', $data ?? [], null);
        $this->setIfExists('wallet_result', $data ?? [], null);
        $this->setIfExists('cash_result', $data ?? [], null);
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
     * Gets order_reference
     *
     * @return \OotbTeam\MulPay\Model\OrderReferenceCash|null
     */
    public function getOrderReference()
    {
        return $this->container['order_reference'];
    }

    /**
     * Sets order_reference
     *
     * @param \OotbTeam\MulPay\Model\OrderReferenceCash|null $order_reference 取引参照情報
     *
     * @return self
     */
    public function setOrderReference($order_reference)
    {
        if (is_null($order_reference)) {
            throw new \InvalidArgumentException('non-nullable order_reference cannot be null');
        }
        $this->container['order_reference'] = $order_reference;

        return $this;
    }

    /**
     * Gets credit_result
     *
     * @return \OotbTeam\MulPay\Model\CreditResult|null
     */
    public function getCreditResult()
    {
        return $this->container['credit_result'];
    }

    /**
     * Sets credit_result
     *
     * @param \OotbTeam\MulPay\Model\CreditResult|null $credit_result credit_result
     *
     * @return self
     */
    public function setCreditResult($credit_result)
    {
        if (is_null($credit_result)) {
            throw new \InvalidArgumentException('non-nullable credit_result cannot be null');
        }
        $this->container['credit_result'] = $credit_result;

        return $this;
    }

    /**
     * Gets tds2_result
     *
     * @return \OotbTeam\MulPay\Model\Tds2Result|null
     */
    public function getTds2Result()
    {
        return $this->container['tds2_result'];
    }

    /**
     * Sets tds2_result
     *
     * @param \OotbTeam\MulPay\Model\Tds2Result|null $tds2_result tds2_result
     *
     * @return self
     */
    public function setTds2Result($tds2_result)
    {
        if (is_null($tds2_result)) {
            throw new \InvalidArgumentException('non-nullable tds2_result cannot be null');
        }
        $this->container['tds2_result'] = $tds2_result;

        return $this;
    }

    /**
     * Gets fraud_detection_result
     *
     * @return \OotbTeam\MulPay\Model\FraudDetectionResult|null
     */
    public function getFraudDetectionResult()
    {
        return $this->container['fraud_detection_result'];
    }

    /**
     * Sets fraud_detection_result
     *
     * @param \OotbTeam\MulPay\Model\FraudDetectionResult|null $fraud_detection_result 不正検知の結果情報
     *
     * @return self
     */
    public function setFraudDetectionResult($fraud_detection_result)
    {
        if (is_null($fraud_detection_result)) {
            throw new \InvalidArgumentException('non-nullable fraud_detection_result cannot be null');
        }
        $this->container['fraud_detection_result'] = $fraud_detection_result;

        return $this;
    }

    /**
     * Gets error_information
     *
     * @return \OotbTeam\MulPay\Model\ErrorInformation|null
     */
    public function getErrorInformation()
    {
        return $this->container['error_information'];
    }

    /**
     * Sets error_information
     *
     * @param \OotbTeam\MulPay\Model\ErrorInformation|null $error_information error_information
     *
     * @return self
     */
    public function setErrorInformation($error_information)
    {
        if (is_null($error_information)) {
            throw new \InvalidArgumentException('non-nullable error_information cannot be null');
        }
        $this->container['error_information'] = $error_information;

        return $this;
    }

    /**
     * Gets wallet_result
     *
     * @return \OotbTeam\MulPay\Model\WalletResult|null
     */
    public function getWalletResult()
    {
        return $this->container['wallet_result'];
    }

    /**
     * Sets wallet_result
     *
     * @param \OotbTeam\MulPay\Model\WalletResult|null $wallet_result wallet_result
     *
     * @return self
     */
    public function setWalletResult($wallet_result)
    {
        if (is_null($wallet_result)) {
            throw new \InvalidArgumentException('non-nullable wallet_result cannot be null');
        }
        $this->container['wallet_result'] = $wallet_result;

        return $this;
    }

    /**
     * Gets cash_result
     *
     * @return \OotbTeam\MulPay\Model\CashResult|null
     */
    public function getCashResult()
    {
        return $this->container['cash_result'];
    }

    /**
     * Sets cash_result
     *
     * @param \OotbTeam\MulPay\Model\CashResult|null $cash_result cash_result
     *
     * @return self
     */
    public function setCashResult($cash_result)
    {
        if (is_null($cash_result)) {
            throw new \InvalidArgumentException('non-nullable cash_result cannot be null');
        }
        $this->container['cash_result'] = $cash_result;

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


