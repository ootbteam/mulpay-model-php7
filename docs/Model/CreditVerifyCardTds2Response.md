# # CreditVerifyCardTds2Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**next_action** | [**\OotbTeam\MulPay\Model\NextAction**](NextAction.md) | レスポンスを受け取った後の加盟店様側の処理   3Dセキュアリダイレクト時は必ず&#x60;REDIRECT&#x60;です。 - &#x60;REDIRECT&#x60;：リダイレクトが必要 | [optional]
**order_reference** | [**\OotbTeam\MulPay\Model\OrderReferenceCredit**](OrderReferenceCredit.md) | 有効性確認リクエストの取引情報     - &#x60;amount&#x60;フィールドは返しません。   - &#x60;status&#x60;フィールドは必ず&#x60;AUTHENTICATED&#x60;です。     - &#x60;chargeType&#x60;フィールドは必ず&#x60;CREDIT&#x60;です。 | [optional]
**redirect_information** | [**\OotbTeam\MulPay\Model\RedirectInformation**](RedirectInformation.md) | リダイレクト情報   3Dセキュアに進むためのリダイレクトの情報です。   &#x60;redirectType&#x60;フィールドは必ず&#x60;TDS2&#x60;です。   お客様のブラウザを&#x60;redirectUrl&#x60;にリダイレクトしてください。 | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
