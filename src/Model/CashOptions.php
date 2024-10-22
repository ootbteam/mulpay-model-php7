<?php
/**
 * CashOptions
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
 * CashOptions Class Doc Comment
 *
 * @category Class
 * @description 現金払いオプション情報
 * @package  OotbTeam\MulPay
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CashOptions implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CashOptions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'konbini_code' => '\OotbTeam\MulPay\Model\Mulpay2',
        'payment_period' => 'string',
        'payment_expiry_date_time' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'konbini_code' => null,
        'payment_period' => null,
        'payment_expiry_date_time' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'konbini_code' => false,
        'payment_period' => false,
        'payment_expiry_date_time' => false
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
        'konbini_code' => 'konbiniCode',
        'payment_period' => 'paymentPeriod',
        'payment_expiry_date_time' => 'paymentExpiryDateTime'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'konbini_code' => 'setKonbiniCode',
        'payment_period' => 'setPaymentPeriod',
        'payment_expiry_date_time' => 'setPaymentExpiryDateTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'konbini_code' => 'getKonbiniCode',
        'payment_period' => 'getPaymentPeriod',
        'payment_expiry_date_time' => 'getPaymentExpiryDateTime'
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
        $this->setIfExists('konbini_code', $data ?? [], null);
        $this->setIfExists('payment_period', $data ?? [], null);
        $this->setIfExists('payment_expiry_date_time', $data ?? [], null);
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

        if (!is_null($this->container['payment_period']) && !preg_match("/^[0-9]{1,3}$/", $this->container['payment_period'])) {
            $invalidProperties[] = "invalid value for 'payment_period', must be conform to the pattern /^[0-9]{1,3}$/.";
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
     * Gets konbini_code
     *
     * @return \OotbTeam\MulPay\Model\Mulpay2|null
     */
    public function getKonbiniCode()
    {
        return $this->container['konbini_code'];
    }

    /**
     * Sets konbini_code
     *
     * @param \OotbTeam\MulPay\Model\Mulpay2|null $konbini_code konbini_code
     *
     * @return self
     */
    public function setKonbiniCode($konbini_code)
    {
        if (is_null($konbini_code)) {
            throw new \InvalidArgumentException('non-nullable konbini_code cannot be null');
        }
        $this->container['konbini_code'] = $konbini_code;

        return $this;
    }

    /**
     * Gets payment_period
     *
     * @return string|null
     */
    public function getPaymentPeriod()
    {
        return $this->container['payment_period'];
    }

    /**
     * Sets payment_period
     *
     * @param string|null $payment_period 支払い期間(日)   お客様がお支払いできる期間を日数で設定します。   プロトコルタイプ/モジュールタイプにおける`TradeDays`(取引有効日数)パラメーターと同じであり、設定値は変更せずに移行できます。   期間最終日の23時59分59秒までお支払いが可能です。   例) 2024年1月1日12時に支払い期限日`10`の場合、支払い期限は2024年1月11日23時59分59秒です。   日時形式で設定する場合は、支払い期限日時`paymentExpiryDateTime`パラメーターをご利用ください。   支払い期間(日)`paymentPeriod`と支払い期限日時`paymentExpiryDateTime`の両方を設定すると、支払い期限日時`paymentExpiryDateTime`が優先されます。   <br> 現金払いタイプ `cashType`、支払先コンビニコード `konbiniCode`により設定可能な値が異なります。    <table>   <thead>     <tr>       <th>現金払いタイプ<br><code>cashType</code></th>       <th>支払先<br>コンビニコード<br><code>konbiniCode</code></th>       <th style=\"text-align: center;\">最小</th>       <th style=\"text-align: center;\">最大</th>       <th style=\"text-align: center;\"><code>999</code>設定時</th>       <th>省略時</th>     </tr>   </thead>   <tbody>     <tr>       <td rowspan=\"5\">コンビニ<br><code>KONBINI</code></td>       <td>セブン-イレブン<br><code>SEVEN_ELEVEN</code></td>       <td style=\"text-align: center;\">0<br>(当日)</td>       <td style=\"text-align: center;\">150</td>       <td style=\"text-align: center;\">150</td>       <td><small>デフォルト値<sup>*1</sup></small></td>     </tr>     <tr>       <td>ローソン<br><code>LAWSON</code></td>       <td style=\"text-align: center;\">0<br>(当日)</td>       <td style=\"text-align: center;\">180</td>       <td style=\"text-align: center;\">180</td>       <td><small>デフォルト値<sup>*1</sup></small></td>     </tr>     <tr>       <td>ファミリーマート<br><code>FAMILYMART</code></td>       <td style=\"text-align: center;\">0<br>(当日)</td>       <td style=\"text-align: center;\">60</td>       <td style=\"text-align: center;\">60</td>       <td><small>デフォルト値<sup>*1</sup></small></td>     </tr>     <tr>       <td>ミニストップ<br><code>MINISTOP</code></td>       <td style=\"text-align: center;\">0<br>(当日)</td>       <td style=\"text-align: center;\">180</td>       <td style=\"text-align: center;\">180</td>       <td><small>デフォルト値<sup>*1</sup></small></td>     </tr>     <tr>       <td>セイコーマート<br><code>SEICOMART</code></td>       <td style=\"text-align: center;\">0<br>(当日)</td>       <td style=\"text-align: center;\">180</td>       <td style=\"text-align: center;\">180</td>       <td><small>デフォルト値<sup>*1</sup></small></td>     </tr>     <tr>       <td colspan=\"2\">Pay-easy<br><code>PAYEASY</code></td>       <td style=\"text-align: center;\">0<br>(当日)</td>       <td style=\"text-align: center;\">60</td>       <td style=\"text-align: center;\">エラー</td>       <td><small>デフォルト値<sup>*1</sup></small></td>     </tr>     <tr>       <td colspan=\"2\">銀行振込(バーチャル口座)<br><code>BANK_TRANSFER_SMBC</code></td>       <td style=\"text-align: center;\">0<br>(当日)</td>       <td style=\"text-align: center;\">99</td>       <td style=\"text-align: center;\">エラー</td>       <td>省略不可</td>     </tr>     <tr>       <td colspan=\"2\">銀行振込(バーチャル口座あおぞら)<br><code>BANK_TRANSFER_GMO_AOZORA</code></td>       <td style=\"text-align: center;\">0<br>(当日)</td>       <td style=\"text-align: center;\">999</td>       <td style=\"text-align: center;\">999</td>       <td>支払い期限なし</td>     </tr>   </tbody> </table>  *1：デフォルト値は管理画面から設定します。変更の方法はこちらの[FAQページ](https://mp-faq.gmo-pg.com/s/article/D00103)を参照ください。
     *
     * @return self
     */
    public function setPaymentPeriod($payment_period)
    {
        if (is_null($payment_period)) {
            throw new \InvalidArgumentException('non-nullable payment_period cannot be null');
        }

        if ((!preg_match("/^[0-9]{1,3}$/", ObjectSerializer::toString($payment_period)))) {
            throw new \InvalidArgumentException("invalid value for \$payment_period when calling CashOptions., must conform to the pattern /^[0-9]{1,3}$/.");
        }

        $this->container['payment_period'] = $payment_period;

        return $this;
    }

    /**
     * Gets payment_expiry_date_time
     *
     * @return string|null
     */
    public function getPaymentExpiryDateTime()
    {
        return $this->container['payment_expiry_date_time'];
    }

    /**
     * Sets payment_expiry_date_time
     *
     * @param string|null $payment_expiry_date_time 支払い期限日時   お客様が支払いできる期限を日時(YYYYMMDDHHMM)形式で設定します。   <br> 現金払いタイプ `cashType`、支払先コンビニコード `konbiniCode`により設定可能な値が異なります。    <table>     <thead>         <tr>             <th>現金払いタイプ<br><code>cashType</code></th>             <th>支払先<br>コンビニコード<br><code>konbiniCode</code></th>             <th style=\"text-align: center;\">利用</th>             <th>最大</th>             <th>注意事項</th>         </tr>     </thead>     <tbody>         <tr>             <td rowspan=\"5\">コンビニ<br><code>KONBINI</code></td>             <td>セブン-イレブン<br><code>SEVEN_ELEVEN</code></td>             <td style=\"text-align: center;\">×</td>             <td style=\"text-align: center;\">-</td>             <td>設定するとエラー</td>         </tr>         <tr>             <td>ローソン<br><code>LAWSON</code></td>             <td style=\"text-align: center;\">〇</td>             <td>181日後の0時0分</td>             <td></td>         </tr>         <tr>             <td>ファミリーマート<br><code>FAMILYMART</code></td>             <td style=\"text-align: center;\">〇</td>             <td>61日後の0時0分</td>             <td></td>         </tr>         <tr>             <td>ミニストップ<br><code>MINISTOP</code></td>             <td style=\"text-align: center;\">〇</td>             <td>181日後の0時0分</td>             <td></td>         </tr>         <tr>             <td>セイコーマート<br><code>SEICOMART</code></td>             <td style=\"text-align: center;\">〇</td>             <td>181日後の0時0分</td>             <td>時分に<code>0001</code>は<br>設定不可</td>         </tr>         <tr>             <td colspan=\"2\">Pay-easy<br><code>PAYEASY</code></td>             <td style=\"text-align: center;\">〇</td>             <td>61日後の0時0分</td>             <td></td>         </tr>         <tr>             <td colspan=\"2\">銀行振込(バーチャル口座)<br><code>BANK_TRANSFER_SMBC</code></td>             <td style=\"text-align: center;\">×</td>             <td style=\"text-align: center;\">-</td>             <td>設定するとエラー</td>         </tr>         <tr>             <td colspan=\"2\">銀行振込(バーチャル口座あおぞら)<br><code>BANK_TRANSFER_GMO_AOZORA</code></td>             <td style=\"text-align: center;\">×</td>             <td style=\"text-align: center;\">-</td>             <td>設定するとエラー</td>         </tr>     </tbody> </table>
     *
     * @return self
     */
    public function setPaymentExpiryDateTime($payment_expiry_date_time)
    {
        if (is_null($payment_expiry_date_time)) {
            throw new \InvalidArgumentException('non-nullable payment_expiry_date_time cannot be null');
        }
        $this->container['payment_expiry_date_time'] = $payment_expiry_date_time;

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

