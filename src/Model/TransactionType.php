<?php
/**
 * TransactionType
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
use \OotbTeam\MulPay\ObjectSerializer;

/**
 * TransactionType Class Doc Comment
 *
 * @category Class
 * @description 取引タイプ   この取引がお客様操作によって開始されたか、自動チャージのように加盟店様操作で行われたかを示します。   現時点では設定する値によって当サービス内の処理は変わりません。 - &#x60;CIT&#x60;: Customer Initiated Transaction(お客様操作起点)   - &#x60;MIT&#x60;: Merchant Initiated Transaction(加盟店様操作起点)   - &#x60;OTHER&#x60;: 上記以外
 * @package  OotbTeam\MulPay
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TransactionType
{
    /**
     * Possible values of this enum
     */
    public const CIT = 'CIT';

    public const MIT = 'MIT';

    public const OTHER = 'OTHER';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CIT,
            self::MIT,
            self::OTHER
        ];
    }
}


