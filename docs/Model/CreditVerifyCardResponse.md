# # CreditVerifyCardResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**next_action** | [**\OotbTeam\MulPay\Model\NextAction**](NextAction.md) | レスポンスを受け取った後の加盟店様側の処理   有効性確認成功時は&#x60;NO_ACTION&#x60;です。 - &#x60;NO_ACTION&#x60;：後続処理なし | [optional]
**order_reference** | [**\OotbTeam\MulPay\Model\OrderReferenceCredit**](OrderReferenceCredit.md) | 有効性確認リクエストの取引情報     - &#x60;amount&#x60;フィールドは返しません。   - &#x60;status&#x60;フィールドは必ず&#x60;CHECK&#x60;です。     - &#x60;chargeType&#x60;フィールドは必ず&#x60;CREDIT&#x60;です。 | [optional]
**credit_result** | [**\OotbTeam\MulPay\Model\CreditResult**](CreditResult.md) |  | [optional]
**onfile_card_result** | [**\OotbTeam\MulPay\Model\OnfileCardResult**](OnfileCardResult.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
