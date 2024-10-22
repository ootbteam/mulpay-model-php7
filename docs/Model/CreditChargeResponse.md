# # CreditChargeResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**next_action** | [**\OotbTeam\MulPay\Model\NextAction**](NextAction.md) | レスポンスを受け取った後の加盟店様側の処理   仮売上成功時は&#x60;CAPTURE&#x60;、即時売上成功時は&#x60;NO_ACTION&#x60;です。 - &#x60;CAPTURE&#x60;：確定処理が必要 - &#x60;NO_ACTION&#x60;：後続処理なし | [optional]
**order_reference** | [**\OotbTeam\MulPay\Model\OrderReferenceCredit**](OrderReferenceCredit.md) | 支払いリクエストの取引情報     - &#x60;status&#x60;フィールドは以下の値を返します。     - 仮売上成功時: &#x60;AUTH&#x60;     - 即時売上成功時: &#x60;CAPTURE&#x60;   - &#x60;chargeType&#x60;フィールドは必ず&#x60;CREDIT&#x60;です。 | [optional]
**credit_result** | [**\OotbTeam\MulPay\Model\CreditResult**](CreditResult.md) | クレカ払いの結果情報 | [optional]
**fraud_detection_result** | [**\OotbTeam\MulPay\Model\FraudDetectionResult**](FraudDetectionResult.md) | 不正検知の結果情報   非同期モードが&#x60;true&#x60;の場合は&#x60;screeningType&#x60;のみ返します。 | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
