# # WalletAuthorizationInformation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**wallet_type** | [**\OotbTeam\MulPay\Model\OnfileWalletType**](OnfileWalletType.md) | 登録するPay払い利用承諾のタイプ   登録するPay払い利用承諾のタイプによってパラメーターの設定要否が異なります。   詳細は[共通パラメーター対応表 - Pay払い](#tag/common-parameters/Pay)を参照ください。 - &#x60;PAYPAY&#x60;：PayPay - &#x60;DOCOMO&#x60;：d払い - &#x60;RAKUTEN&#x60;：楽天ペイ(オンライン決済)V2 - &#x60;AMAZON&#x60;：Amazon Pay V2 - &#x60;AU_APP&#x60;：au PAY(ネット支払い)アプリ方式 - &#x60;MERPAY&#x60;：メルペイ |
**wallet_authorization_options** | [**\OotbTeam\MulPay\Model\WalletAuthorizationOptions**](WalletAuthorizationOptions.md) |  |
**amazon_pay** | [**\OotbTeam\MulPay\Model\AmazonPay**](AmazonPay.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
