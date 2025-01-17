<?php
/**
 * StatusCash
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
 * StatusCash Class Doc Comment
 *
 * @category Class
 * @description 現金払いの取引ステータス   - &#x60;UNPROCESSED&#x60;：未決済 - &#x60;REQSUCCESS&#x60;：要求成功 - &#x60;TRADING&#x60;：取引中 - &#x60;PAYSUCCESS&#x60;：決済完了 - &#x60;EXPIRED&#x60;：期限切れ - &#x60;CANCEL&#x60;：キャンセル - &#x60;STOP&#x60;：取引停止
 * @package  OotbTeam\MulPay
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class StatusCash
{
    /**
     * Possible values of this enum
     */
    public const UNPROCESSED = 'UNPROCESSED';

    public const REQSUCCESS = 'REQSUCCESS';

    public const TRADING = 'TRADING';

    public const PAYSUCCESS = 'PAYSUCCESS';

    public const EXPIRED = 'EXPIRED';

    public const CANCEL = 'CANCEL';

    public const STOP = 'STOP';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UNPROCESSED,
            self::REQSUCCESS,
            self::TRADING,
            self::PAYSUCCESS,
            self::EXPIRED,
            self::CANCEL,
            self::STOP
        ];
    }
}


