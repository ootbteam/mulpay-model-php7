# # WalletFrontendVerifyChargeResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**next_action** | [**\OotbTeam\MulPay\Model\NextAction**](NextAction.md) | レスポンスを受け取った後の加盟店様側の処理   仮売上成功時は&#x60;CAPTURE&#x60;、即時売上成功時は&#x60;NO_ACTION&#x60;です。 - &#x60;NO_ACTION&#x60;：後続処理なし | [optional]
**order_reference** | [**\OotbTeam\MulPay\Model\OrderReferenceWallet**](OrderReferenceWallet.md) | 支払いリクエストの取引情報     - &#x60;status&#x60;フィールドは以下の値を返します。     - 仮売上成功時: &#x60;AUTH&#x60;     - 即時売上成功時: &#x60;CAPTURE&#x60;   - &#x60;chargeType&#x60;フィールドは必ず&#x60;WALLET&#x60;です。 | [optional]
**wallet_frontend_result** | [**\OotbTeam\MulPay\Model\WalletFrontendResult**](WalletFrontendResult.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
