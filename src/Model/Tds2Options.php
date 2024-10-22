<?php
/**
 * Tds2Options
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
 * Tds2Options Class Doc Comment
 *
 * @category Class
 * @description 3Dセキュアオプション情報
 * @package  OotbTeam\MulPay
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Tds2Options implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Tds2Options';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'skip_not_enrolled_card' => 'bool',
        'allow_attempt' => 'string',
        'requires_challenge' => 'bool',
        'auto_authorization' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'skip_not_enrolled_card' => null,
        'allow_attempt' => null,
        'requires_challenge' => null,
        'auto_authorization' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'skip_not_enrolled_card' => false,
        'allow_attempt' => false,
        'requires_challenge' => false,
        'auto_authorization' => false
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
        'skip_not_enrolled_card' => 'skipNotEnrolledCard',
        'allow_attempt' => 'allowAttempt',
        'requires_challenge' => 'requiresChallenge',
        'auto_authorization' => 'autoAuthorization'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'skip_not_enrolled_card' => 'setSkipNotEnrolledCard',
        'allow_attempt' => 'setAllowAttempt',
        'requires_challenge' => 'setRequiresChallenge',
        'auto_authorization' => 'setAutoAuthorization'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'skip_not_enrolled_card' => 'getSkipNotEnrolledCard',
        'allow_attempt' => 'getAllowAttempt',
        'requires_challenge' => 'getRequiresChallenge',
        'auto_authorization' => 'getAutoAuthorization'
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

    public const ALLOW_ATTEMPT_FOLLOW = 'FOLLOW';
    public const ALLOW_ATTEMPT_ALLOW = 'ALLOW';
    public const ALLOW_ATTEMPT_NOT_ALLOW = 'NOT_ALLOW';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAllowAttemptAllowableValues()
    {
        return [
            self::ALLOW_ATTEMPT_FOLLOW,
            self::ALLOW_ATTEMPT_ALLOW,
            self::ALLOW_ATTEMPT_NOT_ALLOW,
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
        $this->setIfExists('skip_not_enrolled_card', $data ?? [], false);
        $this->setIfExists('allow_attempt', $data ?? [], 'FOLLOW');
        $this->setIfExists('requires_challenge', $data ?? [], false);
        $this->setIfExists('auto_authorization', $data ?? [], true);
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

        $allowedValues = $this->getAllowAttemptAllowableValues();
        if (!is_null($this->container['allow_attempt']) && !in_array($this->container['allow_attempt'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'allow_attempt', must be one of '%s'",
                $this->container['allow_attempt'],
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
     * Gets skip_not_enrolled_card
     *
     * @return bool|null
     */
    public function getSkipNotEnrolledCard()
    {
        return $this->container['skip_not_enrolled_card'];
    }

    /**
     * Sets skip_not_enrolled_card
     *
     * @param bool|null $skip_not_enrolled_card 未対応カードの認証スキップ 当カード発行会社が3Dセキュア2.0に未対応の場合、認証をスキップしてオーソリ(信用照会)するか、エラーにするかを選択します。   `false`、または設定なしの場合、未対応カードでのリクエストはエラーになります。   `true`を設定し、3Dセキュア2.0をスキップしたオーソリ(信用照会)は、不正利用によりチャージバックとなった場合に、加盟店様が支払いの責任を負う可能性があります。
     *
     * @return self
     */
    public function setSkipNotEnrolledCard($skip_not_enrolled_card)
    {
        if (is_null($skip_not_enrolled_card)) {
            throw new \InvalidArgumentException('non-nullable skip_not_enrolled_card cannot be null');
        }
        $this->container['skip_not_enrolled_card'] = $skip_not_enrolled_card;

        return $this;
    }

    /**
     * Gets allow_attempt
     *
     * @return string|null
     */
    public function getAllowAttempt()
    {
        return $this->container['allow_attempt'];
    }

    /**
     * Sets allow_attempt
     *
     * @param string|null $allow_attempt 認証結果Attempt時の挙動 3Dセキュア認証の結果、カード会社からECI 06(Mastercard以外)または01(Mastercard)が返された場合の処理を選択します。   ECI06/01は、カード発行会社が3Dセキュアに対応していない場合やサーバー障害などの時に、認証プロセス自体はできていませんが認証成功と扱うことを意味します。   通常、この取引が不正利用によりチャージバックとなった場合、支払いの責任はカード発行会社となり加盟店様には請求されません。   それでもECI06/01の支払いを受け付けたくない場合は、`NOT_ALLOW`を設定してください。   `FOLLOW`を設定した場合、3Dセキュア必須化の契約に従います。 - `FOLLOW`：ショップ契約の「3Dセキュア必須化」の内容に従う - `ALLOW`：認証成功と扱う - `NOT_ALLOW`：認証失敗と扱う
     *
     * @return self
     */
    public function setAllowAttempt($allow_attempt)
    {
        if (is_null($allow_attempt)) {
            throw new \InvalidArgumentException('non-nullable allow_attempt cannot be null');
        }
        $allowedValues = $this->getAllowAttemptAllowableValues();
        if (!in_array($allow_attempt, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'allow_attempt', must be one of '%s'",
                    $allow_attempt,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['allow_attempt'] = $allow_attempt;

        return $this;
    }

    /**
     * Gets requires_challenge
     *
     * @return bool|null
     */
    public function getRequiresChallenge()
    {
        return $this->container['requires_challenge'];
    }

    /**
     * Sets requires_challenge
     *
     * @param bool|null $requires_challenge 認証チャレンジ必須   リスク判定の結果によらず3Dセキュア認証チャレンジを要求する場合に`true`を設定します。   ただし、カード発行会社が対応していない場合があります。
     *
     * @return self
     */
    public function setRequiresChallenge($requires_challenge)
    {
        if (is_null($requires_challenge)) {
            throw new \InvalidArgumentException('non-nullable requires_challenge cannot be null');
        }
        $this->container['requires_challenge'] = $requires_challenge;

        return $this;
    }

    /**
     * Gets auto_authorization
     *
     * @return bool|null
     */
    public function getAutoAuthorization()
    {
        return $this->container['auto_authorization'];
    }

    /**
     * Sets auto_authorization
     *
     * @param bool|null $auto_authorization 自動オーソリ有無   3Dセキュア認証後に自動でオーソリ(信用照会)をせずに、加盟店様から明示的に3Dセキュア後APIを呼び出してオーソリを実施したい場合には`false`を設定します。   「自動オーソリあり」の場合、オーソリが実行されてもお客様がブラウザを閉じる、通信エラーが発生するなどして処理が中断し、貴社にコールバックがされず状態不整合になる可能性があります。   「自動オーソリなし」は、オーソリのリクエストを加盟店様にて制御できるため上記のリスクを低減できます。
     *
     * @return self
     */
    public function setAutoAuthorization($auto_authorization)
    {
        if (is_null($auto_authorization)) {
            throw new \InvalidArgumentException('non-nullable auto_authorization cannot be null');
        }
        $this->container['auto_authorization'] = $auto_authorization;

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

