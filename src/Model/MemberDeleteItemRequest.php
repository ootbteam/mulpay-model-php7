<?php
/**
 * MemberDeleteItemRequest
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
 * MemberDeleteItemRequest Class Doc Comment
 *
 * @category Class
 * @package  OotbTeam\MulPay
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class MemberDeleteItemRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'memberDeleteItem_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'member_id' => 'string',
        'onfile_type' => '\OotbTeam\MulPay\Model\OnfileType',
        'onfile_card_type' => '\OotbTeam\MulPay\Model\OnfileCardType',
        'card_id' => 'string',
        'additional_options' => 'array<string,mixed>',
        'onfile_wallet_type' => '\OotbTeam\MulPay\Model\OnfileWalletType'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'member_id' => null,
        'onfile_type' => null,
        'onfile_card_type' => null,
        'card_id' => null,
        'additional_options' => null,
        'onfile_wallet_type' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'member_id' => false,
        'onfile_type' => false,
        'onfile_card_type' => false,
        'card_id' => false,
        'additional_options' => false,
        'onfile_wallet_type' => false
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
        'member_id' => 'memberId',
        'onfile_type' => 'onfileType',
        'onfile_card_type' => 'onfileCardType',
        'card_id' => 'cardId',
        'additional_options' => 'additionalOptions',
        'onfile_wallet_type' => 'onfileWalletType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'member_id' => 'setMemberId',
        'onfile_type' => 'setOnfileType',
        'onfile_card_type' => 'setOnfileCardType',
        'card_id' => 'setCardId',
        'additional_options' => 'setAdditionalOptions',
        'onfile_wallet_type' => 'setOnfileWalletType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'member_id' => 'getMemberId',
        'onfile_type' => 'getOnfileType',
        'onfile_card_type' => 'getOnfileCardType',
        'card_id' => 'getCardId',
        'additional_options' => 'getAdditionalOptions',
        'onfile_wallet_type' => 'getOnfileWalletType'
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
        $this->setIfExists('member_id', $data ?? [], null);
        $this->setIfExists('onfile_type', $data ?? [], null);
        $this->setIfExists('onfile_card_type', $data ?? [], null);
        $this->setIfExists('card_id', $data ?? [], null);
        $this->setIfExists('additional_options', $data ?? [], null);
        $this->setIfExists('onfile_wallet_type', $data ?? [], null);
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

        if ($this->container['member_id'] === null) {
            $invalidProperties[] = "'member_id' can't be null";
        }
        if (!preg_match("/^[a-zA-Z0-9-@_ . ]{1,60}$/", $this->container['member_id'])) {
            $invalidProperties[] = "invalid value for 'member_id', must be conform to the pattern /^[a-zA-Z0-9-@_ . ]{1,60}$/.";
        }

        if ($this->container['onfile_type'] === null) {
            $invalidProperties[] = "'onfile_type' can't be null";
        }
        if ($this->container['onfile_card_type'] === null) {
            $invalidProperties[] = "'onfile_card_type' can't be null";
        }
        if ($this->container['card_id'] === null) {
            $invalidProperties[] = "'card_id' can't be null";
        }
        if (!preg_match("/^[0-9]{1,4}$/", $this->container['card_id'])) {
            $invalidProperties[] = "invalid value for 'card_id', must be conform to the pattern /^[0-9]{1,4}$/.";
        }

        if ($this->container['onfile_wallet_type'] === null) {
            $invalidProperties[] = "'onfile_wallet_type' can't be null";
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
     * Gets member_id
     *
     * @return string
     */
    public function getMemberId()
    {
        return $this->container['member_id'];
    }

    /**
     * Sets member_id
     *
     * @param string $member_id 会員ID
     *
     * @return self
     */
    public function setMemberId($member_id)
    {
        if (is_null($member_id)) {
            throw new \InvalidArgumentException('non-nullable member_id cannot be null');
        }

        if ((!preg_match("/^[a-zA-Z0-9-@_ . ]{1,60}$/", ObjectSerializer::toString($member_id)))) {
            throw new \InvalidArgumentException("invalid value for \$member_id when calling MemberDeleteItemRequest., must conform to the pattern /^[a-zA-Z0-9-@_ . ]{1,60}$/.");
        }

        $this->container['member_id'] = $member_id;

        return $this;
    }

    /**
     * Gets onfile_type
     *
     * @return \OotbTeam\MulPay\Model\OnfileType
     */
    public function getOnfileType()
    {
        return $this->container['onfile_type'];
    }

    /**
     * Sets onfile_type
     *
     * @param \OotbTeam\MulPay\Model\OnfileType $onfile_type 認証情報タイプ   削除する認証情報タイプとしてPay払い利用承諾`WALLET`を設定してください。
     *
     * @return self
     */
    public function setOnfileType($onfile_type)
    {
        if (is_null($onfile_type)) {
            throw new \InvalidArgumentException('non-nullable onfile_type cannot be null');
        }
        $this->container['onfile_type'] = $onfile_type;

        return $this;
    }

    /**
     * Gets onfile_card_type
     *
     * @return \OotbTeam\MulPay\Model\OnfileCardType
     */
    public function getOnfileCardType()
    {
        return $this->container['onfile_card_type'];
    }

    /**
     * Sets onfile_card_type
     *
     * @param \OotbTeam\MulPay\Model\OnfileCardType $onfile_card_type 削除するカードのタイプ   - `CREDIT_CARD`：クレジットカード - `APPLE_PAY`：Apple Pay
     *
     * @return self
     */
    public function setOnfileCardType($onfile_card_type)
    {
        if (is_null($onfile_card_type)) {
            throw new \InvalidArgumentException('non-nullable onfile_card_type cannot be null');
        }
        $this->container['onfile_card_type'] = $onfile_card_type;

        return $this;
    }

    /**
     * Gets card_id
     *
     * @return string
     */
    public function getCardId()
    {
        return $this->container['card_id'];
    }

    /**
     * Sets card_id
     *
     * @param string $card_id カードのID   登録されているカードのID(物理連番)です。
     *
     * @return self
     */
    public function setCardId($card_id)
    {
        if (is_null($card_id)) {
            throw new \InvalidArgumentException('non-nullable card_id cannot be null');
        }

        if ((!preg_match("/^[0-9]{1,4}$/", ObjectSerializer::toString($card_id)))) {
            throw new \InvalidArgumentException("invalid value for \$card_id when calling MemberDeleteItemRequest., must conform to the pattern /^[0-9]{1,4}$/.");
        }

        $this->container['card_id'] = $card_id;

        return $this;
    }

    /**
     * Gets additional_options
     *
     * @return array<string,mixed>|null
     */
    public function getAdditionalOptions()
    {
        return $this->container['additional_options'];
    }

    /**
     * Sets additional_options
     *
     * @param array<string,mixed>|null $additional_options 追加情報   予備項目であり、通常は使用しないでください。   任意のMap(Key:Value)形式で、KeyとValueはともにString型のみ設定可能です。   20個までの要素を設定可能です。
     *
     * @return self
     */
    public function setAdditionalOptions($additional_options)
    {
        if (is_null($additional_options)) {
            throw new \InvalidArgumentException('non-nullable additional_options cannot be null');
        }
        $this->container['additional_options'] = $additional_options;

        return $this;
    }

    /**
     * Gets onfile_wallet_type
     *
     * @return \OotbTeam\MulPay\Model\OnfileWalletType
     */
    public function getOnfileWalletType()
    {
        return $this->container['onfile_wallet_type'];
    }

    /**
     * Sets onfile_wallet_type
     *
     * @param \OotbTeam\MulPay\Model\OnfileWalletType $onfile_wallet_type 利用承諾のタイプ   削除する利用承諾のタイプです。
     *
     * @return self
     */
    public function setOnfileWalletType($onfile_wallet_type)
    {
        if (is_null($onfile_wallet_type)) {
            throw new \InvalidArgumentException('non-nullable onfile_wallet_type cannot be null');
        }
        $this->container['onfile_wallet_type'] = $onfile_wallet_type;

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


