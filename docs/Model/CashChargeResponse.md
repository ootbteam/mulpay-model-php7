# # CashChargeResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**next_action** | [**\OotbTeam\MulPay\Model\NextAction**](NextAction.md) | レスポンスを受け取った後の加盟店様側の処理   現金払いは必ず&#x60;AWAIT&#x60;です。 - &#x60;AWAIT&#x60;：入金結果待ち | [optional]
**order_reference** | [**\OotbTeam\MulPay\Model\OrderReferenceCash**](OrderReferenceCash.md) | 支払いリクエストの取引情報     - &#x60;status&#x60;フィールドは以下の値を返します。     - &#x60;REQSUCCESS&#x60;：コンビニ、Pay-easy     - &#x60;TRADING&#x60;：銀行振込   - &#x60;chargeType&#x60;フィールドは必ず&#x60;CASH&#x60;です。 | [optional]
**cash_result** | [**\OotbTeam\MulPay\Model\CashResult**](CashResult.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
