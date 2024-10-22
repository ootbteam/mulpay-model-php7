# # VerificationStartResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**next_action** | [**\OotbTeam\MulPay\Model\NextAction**](NextAction.md) | レスポンスを受け取った後の加盟店様側の処理   認証開始時は必ず&#x60;REDIRECT&#x60;です。 - &#x60;REDIRECT&#x60;：リダイレクトが必要 | [optional]
**verification_reference** | [**\OotbTeam\MulPay\Model\VerificationReference**](VerificationReference.md) | 本人確認リクエストの認証情報    - &#x60;status&#x60;フィールドは必ず&#x60;REQSUCCESS&#x60;です。 | [optional]
**redirect_information** | [**\OotbTeam\MulPay\Model\RedirectInformation**](RedirectInformation.md) | リダイレクト情報   認証コード入力画面に進むためのリダイレクトの情報です。   &#x60;redirectType&#x60;フィールドは必ず&#x60;VERIFY&#x60;です。   &#x60;httpMethod&#x60;フィールドは必ず&#x60;GET&#x60;です。 お客様のブラウザを&#x60;redirectUrl&#x60;にリダイレクトしてください。 | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
