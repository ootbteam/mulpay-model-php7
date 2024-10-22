<?php
/**
 * FraudDetectionOptions
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
 * FraudDetectionOptions Class Doc Comment
 *
 * @category Class
 * @description 不正検知オプション情報
 * @package  OotbTeam\MulPay
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class FraudDetectionOptions implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FraudDetectionOptions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'screening_type' => 'string',
        'stop_authorization_threshold' => 'string',
        'async_mode' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'screening_type' => null,
        'stop_authorization_threshold' => null,
        'async_mode' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'screening_type' => false,
        'stop_authorization_threshold' => false,
        'async_mode' => false
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
        'screening_type' => 'screeningType',
        'stop_authorization_threshold' => 'stopAuthorizationThreshold',
        'async_mode' => 'asyncMode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'screening_type' => 'setScreeningType',
        'stop_authorization_threshold' => 'setStopAuthorizationThreshold',
        'async_mode' => 'setAsyncMode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'screening_type' => 'getScreeningType',
        'stop_authorization_threshold' => 'getStopAuthorizationThreshold',
        'async_mode' => 'getAsyncMode'
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

    public const SCREENING_TYPE_RED_SHIELD = 'RED_SHIELD';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getScreeningTypeAllowableValues()
    {
        return [
            self::SCREENING_TYPE_RED_SHIELD,
        ];
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
        $this->setIfExists('screening_type', $data ?? [], null);
        $this->setIfExists('stop_authorization_threshold', $data ?? [], null);
        $this->setIfExists('async_mode', $data ?? [], false);
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

        if ($this->container['screening_type'] === null) {
            $invalidProperties[] = "'screening_type' can't be null";
        }
        $allowedValues = $this->getScreeningTypeAllowableValues();
        if (!is_null($this->container['screening_type']) && !in_array($this->container['screening_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'screening_type', must be one of '%s'",
                $this->container['screening_type'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['stop_authorization_threshold']) && !preg_match("/^DENY|CHALLENGE$/", $this->container['stop_authorization_threshold'])) {
            $invalidProperties[] = "invalid value for 'stop_authorization_threshold', must be conform to the pattern /^DENY|CHALLENGE$/.";
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
     * Gets screening_type
     *
     * @return string
     */
    public function getScreeningType()
    {
        return $this->container['screening_type'];
    }

    /**
     * Sets screening_type
     *
     * @param string $screening_type 審査タイプ
     *
     * @return self
     */
    public function setScreeningType($screening_type)
    {
        if (is_null($screening_type)) {
            throw new \InvalidArgumentException('non-nullable screening_type cannot be null');
        }
        $allowedValues = $this->getScreeningTypeAllowableValues();
        if (!in_array($screening_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'screening_type', must be one of '%s'",
                    $screening_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['screening_type'] = $screening_type;

        return $this;
    }

    /**
     * Gets stop_authorization_threshold
     *
     * @return string|null
     */
    public function getStopAuthorizationThreshold()
    {
        return $this->container['stop_authorization_threshold'];
    }

    /**
     * Sets stop_authorization_threshold
     *
     * @param string|null $stop_authorization_threshold オーソリ中断閾値   当パラメーターを設定した場合はオーソリ(信用照会)前に不正審査を実施し、審査結果が設定した閾値以上である場合はオーソリ(信用照会)を中断します。   例) `CHALLENGE`を設定した場合、審査結果が`CHALLENGE`または`DENY`の際はオーソリを中断します。
     *
     * @return self
     */
    public function setStopAuthorizationThreshold($stop_authorization_threshold)
    {
        if (is_null($stop_authorization_threshold)) {
            throw new \InvalidArgumentException('non-nullable stop_authorization_threshold cannot be null');
        }

        if ((!preg_match("/^DENY|CHALLENGE$/", ObjectSerializer::toString($stop_authorization_threshold)))) {
            throw new \InvalidArgumentException("invalid value for \$stop_authorization_threshold when calling FraudDetectionOptions., must conform to the pattern /^DENY|CHALLENGE$/.");
        }

        $this->container['stop_authorization_threshold'] = $stop_authorization_threshold;

        return $this;
    }

    /**
     * Gets async_mode
     *
     * @return bool|null
     */
    public function getAsyncMode()
    {
        return $this->container['async_mode'];
    }

    /**
     * Sets async_mode
     *
     * @param bool|null $async_mode 非同期モード   `true`を設定した場合は不正審査を非同期で実行します。 この際レスポンスに審査結果は含まれませんので、任意のタイミングで[取引照会API(/order/inquiry)](#tag/order/operation/orderInquiry)を実行し取得してください。
     *
     * @return self
     */
    public function setAsyncMode($async_mode)
    {
        if (is_null($async_mode)) {
            throw new \InvalidArgumentException('non-nullable async_mode cannot be null');
        }
        $this->container['async_mode'] = $async_mode;

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


