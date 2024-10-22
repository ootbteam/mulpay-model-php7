<?php
/**
 * StatusWallet
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
 * StatusWallet Class Doc Comment
 *
 * @category Class
 * @description Pay払いの取引ステータス   - &#x60;UNPROCESSED&#x60;：未決済 - &#x60;REQSUCCESS&#x60;：要求成功 - &#x60;AUTHPROCESS&#x60;：認証処理中 - &#x60;AUTH&#x60;：仮売上 - &#x60;SALES&#x60;：実売上 - &#x60;CAPTURE&#x60;：即時売上 - &#x60;CANCEL&#x60;：キャンセル - &#x60;RETURN&#x60;：返品 - &#x60;REQRETURN&#x60;：返品受付 - &#x60;PAYFAIL&#x60;：決済失敗 - &#x60;EXPIRED&#x60;：期限切れ - &#x60;REGISTER&#x60;：利用承諾 - &#x60;END&#x60;：利用承諾終了
 * @package  OotbTeam\MulPay
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class StatusWallet
{
    /**
     * Possible values of this enum
     */
    public const UNPROCESSED = 'UNPROCESSED';

    public const REQSUCCESS = 'REQSUCCESS';

    public const AUTHPROCESS = 'AUTHPROCESS';

    public const AUTH = 'AUTH';

    public const SALES = 'SALES';

    public const CAPTURE = 'CAPTURE';

    public const CANCEL = 'CANCEL';

    public const _RETURN = 'RETURN';

    public const REQRETURN = 'REQRETURN';

    public const PAYFAIL = 'PAYFAIL';

    public const EXPIRED = 'EXPIRED';

    public const REGISTER = 'REGISTER';

    public const END = 'END';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UNPROCESSED,
            self::REQSUCCESS,
            self::AUTHPROCESS,
            self::AUTH,
            self::SALES,
            self::CAPTURE,
            self::CANCEL,
            self::_RETURN,
            self::REQRETURN,
            self::PAYFAIL,
            self::EXPIRED,
            self::REGISTER,
            self::END
        ];
    }
}

