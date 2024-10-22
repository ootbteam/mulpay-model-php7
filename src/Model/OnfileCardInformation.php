<?php
/**
 * OnfileCardInformation
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
 * OnfileCardInformation Class Doc Comment
 *
 * @category Class
 * @description 登録されたカード情報
 * @package  OotbTeam\MulPay
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class OnfileCardInformation implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OnfileCardInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'type' => '\OotbTeam\MulPay\Model\OnfileCardType',
        'card_id' => 'string',
        'index' => 'string',
        'card_number' => 'string',
        'cardholder_name' => 'string',
        'expiry_month' => 'string',
        'expiry_year' => 'string',
        'issuer_code' => 'string',
        'brand' => 'string',
        'is_default' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'type' => null,
        'card_id' => null,
        'index' => null,
        'card_number' => null,
        'cardholder_name' => null,
        'expiry_month' => null,
        'expiry_year' => null,
        'issuer_code' => null,
        'brand' => null,
        'is_default' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'type' => false,
        'card_id' => false,
        'index' => false,
        'card_number' => false,
        'cardholder_name' => false,
        'expiry_month' => false,
        'expiry_year' => false,
        'issuer_code' => false,
        'brand' => false,
        'is_default' => false
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
        'type' => 'type',
        'card_id' => 'cardId',
        'index' => 'index',
        'card_number' => 'cardNumber',
        'cardholder_name' => 'cardholderName',
        'expiry_month' => 'expiryMonth',
        'expiry_year' => 'expiryYear',
        'issuer_code' => 'issuerCode',
        'brand' => 'brand',
        'is_default' => 'isDefault'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'card_id' => 'setCardId',
        'index' => 'setIndex',
        'card_number' => 'setCardNumber',
        'cardholder_name' => 'setCardholderName',
        'expiry_month' => 'setExpiryMonth',
        'expiry_year' => 'setExpiryYear',
        'issuer_code' => 'setIssuerCode',
        'brand' => 'setBrand',
        'is_default' => 'setIsDefault'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'card_id' => 'getCardId',
        'index' => 'getIndex',
        'card_number' => 'getCardNumber',
        'cardholder_name' => 'getCardholderName',
        'expiry_month' => 'getExpiryMonth',
        'expiry_year' => 'getExpiryYear',
        'issuer_code' => 'getIssuerCode',
        'brand' => 'getBrand',
        'is_default' => 'getIsDefault'
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

    public const BRAND_VISA = 'VISA';
    public const BRAND_MASTERCARD = 'MASTERCARD';
    public const BRAND_JCB = 'JCB';
    public const BRAND_DINERS = 'DINERS';
    public const BRAND_AMEX = 'AMEX';
    public const BRAND_UNKNOWN = 'UNKNOWN';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getBrandAllowableValues()
    {
        return [
            self::BRAND_VISA,
            self::BRAND_MASTERCARD,
            self::BRAND_JCB,
            self::BRAND_DINERS,
            self::BRAND_AMEX,
            self::BRAND_UNKNOWN,
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
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('card_id', $data ?? [], null);
        $this->setIfExists('index', $data ?? [], null);
        $this->setIfExists('card_number', $data ?? [], null);
        $this->setIfExists('cardholder_name', $data ?? [], null);
        $this->setIfExists('expiry_month', $data ?? [], null);
        $this->setIfExists('expiry_year', $data ?? [], null);
        $this->setIfExists('issuer_code', $data ?? [], null);
        $this->setIfExists('brand', $data ?? [], null);
        $this->setIfExists('is_default', $data ?? [], null);
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

        if (!is_null($this->container['card_id']) && !preg_match("/^[0-9]{1,4}$/", $this->container['card_id'])) {
            $invalidProperties[] = "invalid value for 'card_id', must be conform to the pattern /^[0-9]{1,4}$/.";
        }

        if (!is_null($this->container['index']) && !preg_match("/^[0-4]$/", $this->container['index'])) {
            $invalidProperties[] = "invalid value for 'index', must be conform to the pattern /^[0-4]$/.";
        }

        $allowedValues = $this->getBrandAllowableValues();
        if (!is_null($this->container['brand']) && !in_array($this->container['brand'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'brand', must be one of '%s'",
                $this->container['brand'],
                implode("', '", $allowedValues)
            );
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
     * Gets type
     *
     * @return \OotbTeam\MulPay\Model\OnfileCardType|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \OotbTeam\MulPay\Model\OnfileCardType|null $type type
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets card_id
     *
     * @return string|null
     */
    public function getCardId()
    {
        return $this->container['card_id'];
    }

    /**
     * Sets card_id
     *
     * @param string|null $card_id カードのID   登録されているカードのID(物理連番)です。
     *
     * @return self
     */
    public function setCardId($card_id)
    {
        if (is_null($card_id)) {
            throw new \InvalidArgumentException('non-nullable card_id cannot be null');
        }

        if ((!preg_match("/^[0-9]{1,4}$/", ObjectSerializer::toString($card_id)))) {
            throw new \InvalidArgumentException("invalid value for \$card_id when calling OnfileCardInformation., must conform to the pattern /^[0-9]{1,4}$/.");
        }

        $this->container['card_id'] = $card_id;

        return $this;
    }

    /**
     * Gets index
     *
     * @return string|null
     */
    public function getIndex()
    {
        return $this->container['index'];
    }

    /**
     * Sets index
     *
     * @param string|null $index カードのインデックス   登録されているカードの0から4までのインデックス番号(論理連番)です。   有効な(削除されていない)カードのIDを昇順に並べた順番です。   必ず1枚しか登録しない加盟店様がカードIDを保持することなく利用することを想定しています。
     *
     * @return self
     */
    public function setIndex($index)
    {
        if (is_null($index)) {
            throw new \InvalidArgumentException('non-nullable index cannot be null');
        }

        if ((!preg_match("/^[0-4]$/", ObjectSerializer::toString($index)))) {
            throw new \InvalidArgumentException("invalid value for \$index when calling OnfileCardInformation., must conform to the pattern /^[0-4]$/.");
        }

        $this->container['index'] = $index;

        return $this;
    }

    /**
     * Gets card_number
     *
     * @return string|null
     */
    public function getCardNumber()
    {
        return $this->container['card_number'];
    }

    /**
     * Sets card_number
     *
     * @param string|null $card_number カード番号   下4桁(**********9999)固定でマスクされます。
     *
     * @return self
     */
    public function setCardNumber($card_number)
    {
        if (is_null($card_number)) {
            throw new \InvalidArgumentException('non-nullable card_number cannot be null');
        }
        $this->container['card_number'] = $card_number;

        return $this;
    }

    /**
     * Gets cardholder_name
     *
     * @return string|null
     */
    public function getCardholderName()
    {
        return $this->container['cardholder_name'];
    }

    /**
     * Sets cardholder_name
     *
     * @param string|null $cardholder_name カードの名義人
     *
     * @return self
     */
    public function setCardholderName($cardholder_name)
    {
        if (is_null($cardholder_name)) {
            throw new \InvalidArgumentException('non-nullable cardholder_name cannot be null');
        }
        $this->container['cardholder_name'] = $cardholder_name;

        return $this;
    }

    /**
     * Gets expiry_month
     *
     * @return string|null
     */
    public function getExpiryMonth()
    {
        return $this->container['expiry_month'];
    }

    /**
     * Sets expiry_month
     *
     * @param string|null $expiry_month カードの有効期限(月)
     *
     * @return self
     */
    public function setExpiryMonth($expiry_month)
    {
        if (is_null($expiry_month)) {
            throw new \InvalidArgumentException('non-nullable expiry_month cannot be null');
        }
        $this->container['expiry_month'] = $expiry_month;

        return $this;
    }

    /**
     * Gets expiry_year
     *
     * @return string|null
     */
    public function getExpiryYear()
    {
        return $this->container['expiry_year'];
    }

    /**
     * Sets expiry_year
     *
     * @param string|null $expiry_year カードの有効期限(年)
     *
     * @return self
     */
    public function setExpiryYear($expiry_year)
    {
        if (is_null($expiry_year)) {
            throw new \InvalidArgumentException('non-nullable expiry_year cannot be null');
        }
        $this->container['expiry_year'] = $expiry_year;

        return $this;
    }

    /**
     * Gets issuer_code
     *
     * @return string|null
     */
    public function getIssuerCode()
    {
        return $this->container['issuer_code'];
    }

    /**
     * Sets issuer_code
     *
     * @param string|null $issuer_code カードの発行カード会社コード
     *
     * @return self
     */
    public function setIssuerCode($issuer_code)
    {
        if (is_null($issuer_code)) {
            throw new \InvalidArgumentException('non-nullable issuer_code cannot be null');
        }
        $this->container['issuer_code'] = $issuer_code;

        return $this;
    }

    /**
     * Gets brand
     *
     * @return string|null
     */
    public function getBrand()
    {
        return $this->container['brand'];
    }

    /**
     * Sets brand
     *
     * @param string|null $brand カードのブランド
     *
     * @return self
     */
    public function setBrand($brand)
    {
        if (is_null($brand)) {
            throw new \InvalidArgumentException('non-nullable brand cannot be null');
        }
        $allowedValues = $this->getBrandAllowableValues();
        if (!in_array($brand, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'brand', must be one of '%s'",
                    $brand,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['brand'] = $brand;

        return $this;
    }

    /**
     * Gets is_default
     *
     * @return bool|null
     */
    public function getIsDefault()
    {
        return $this->container['is_default'];
    }

    /**
     * Sets is_default
     *
     * @param bool|null $is_default デフォルトカード判定   デフォルトカードの場合`true`、そうでない場合`false`です。
     *
     * @return self
     */
    public function setIsDefault($is_default)
    {
        if (is_null($is_default)) {
            throw new \InvalidArgumentException('non-nullable is_default cannot be null');
        }
        $this->container['is_default'] = $is_default;

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

