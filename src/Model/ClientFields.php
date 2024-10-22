<?php
/**
 * ClientFields
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
 * ClientFields Class Doc Comment
 *
 * @category Class
 * @description 加盟店自由項目
 * @package  OotbTeam\MulPay
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ClientFields implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ClientFields';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'client_field1' => 'string',
        'client_field2' => 'string',
        'client_field3' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'client_field1' => null,
        'client_field2' => null,
        'client_field3' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'client_field1' => false,
        'client_field2' => false,
        'client_field3' => false
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
        'client_field1' => 'clientField1',
        'client_field2' => 'clientField2',
        'client_field3' => 'clientField3'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'client_field1' => 'setClientField1',
        'client_field2' => 'setClientField2',
        'client_field3' => 'setClientField3'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'client_field1' => 'getClientField1',
        'client_field2' => 'getClientField2',
        'client_field3' => 'getClientField3'
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
        $this->setIfExists('client_field1', $data ?? [], null);
        $this->setIfExists('client_field2', $data ?? [], null);
        $this->setIfExists('client_field3', $data ?? [], null);
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

        if (!is_null($this->container['client_field1']) && (mb_strlen($this->container['client_field1']) > 100)) {
            $invalidProperties[] = "invalid value for 'client_field1', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['client_field2']) && (mb_strlen($this->container['client_field2']) > 100)) {
            $invalidProperties[] = "invalid value for 'client_field2', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['client_field3']) && (mb_strlen($this->container['client_field3']) > 100)) {
            $invalidProperties[] = "invalid value for 'client_field3', the character length must be smaller than or equal to 100.";
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
     * Gets client_field1
     *
     * @return string|null
     */
    public function getClientField1()
    {
        return $this->container['client_field1'];
    }

    /**
     * Sets client_field1
     *
     * @param string|null $client_field1 加盟店自由項目1   この取引に関する任意情報を紐づけます。   決済の情報としては利用されません。   またお客様には表示されません。   照会API、管理画面、取引配信ファイルで値を確認できます。   設定できる最大長はEUC-JPで100byteです。
     *
     * @return self
     */
    public function setClientField1($client_field1)
    {
        if (is_null($client_field1)) {
            throw new \InvalidArgumentException('non-nullable client_field1 cannot be null');
        }
        if ((mb_strlen($client_field1) > 100)) {
            throw new \InvalidArgumentException('invalid length for $client_field1 when calling ClientFields., must be smaller than or equal to 100.');
        }

        $this->container['client_field1'] = $client_field1;

        return $this;
    }

    /**
     * Gets client_field2
     *
     * @return string|null
     */
    public function getClientField2()
    {
        return $this->container['client_field2'];
    }

    /**
     * Sets client_field2
     *
     * @param string|null $client_field2 加盟店自由項目2   「加盟店自由項目1」の説明を参照ください。   最大長はEUC-JPで100byteです。
     *
     * @return self
     */
    public function setClientField2($client_field2)
    {
        if (is_null($client_field2)) {
            throw new \InvalidArgumentException('non-nullable client_field2 cannot be null');
        }
        if ((mb_strlen($client_field2) > 100)) {
            throw new \InvalidArgumentException('invalid length for $client_field2 when calling ClientFields., must be smaller than or equal to 100.');
        }

        $this->container['client_field2'] = $client_field2;

        return $this;
    }

    /**
     * Gets client_field3
     *
     * @return string|null
     */
    public function getClientField3()
    {
        return $this->container['client_field3'];
    }

    /**
     * Sets client_field3
     *
     * @param string|null $client_field3 加盟店自由項目3   「加盟店自由項目1」の説明を参照ください。   設定できる最大長はEUC-JPで100byteです。
     *
     * @return self
     */
    public function setClientField3($client_field3)
    {
        if (is_null($client_field3)) {
            throw new \InvalidArgumentException('non-nullable client_field3 cannot be null');
        }
        if ((mb_strlen($client_field3) > 100)) {
            throw new \InvalidArgumentException('invalid length for $client_field3 when calling ClientFields., must be smaller than or equal to 100.');
        }

        $this->container['client_field3'] = $client_field3;

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

