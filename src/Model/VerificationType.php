<?php
/**
 * VerificationType
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
 * VerificationType Class Doc Comment
 *
 * @category Class
 * @description 認証方法 - &#x60;sms-pin&#x60;：SMS認証
 * @package  OotbTeam\MulPay
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class VerificationType
{
    /**
     * Possible values of this enum
     */
    public const SMS_PIN = 'sms-pin';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SMS_PIN
        ];
    }
}


