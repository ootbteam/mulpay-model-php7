# # WalletChargeResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**next_action** | [**\OotbTeam\MulPay\Model\NextAction**](NextAction.md) | レスポンスを受け取った後の加盟店様側の処理   Pay払いの都度支払い時は必ず&#x60;REDIRECT&#x60;です。 - &#x60;REDIRECT&#x60;：リダイレクトが必要 | [optional]
**order_reference** | [**\OotbTeam\MulPay\Model\OrderReferenceWallet**](OrderReferenceWallet.md) | 支払いリクエストの取引情報     - &#x60;status&#x60;フィールドは必ず&#x60;REQSUCCESS&#x60;です。     - &#x60;chargeType&#x60;フィールドは必ず&#x60;WALLET&#x60;です。 | [optional]
**redirect_information** | [**\OotbTeam\MulPay\Model\RedirectInformation**](RedirectInformation.md) | リダイレクト情報   Pay事業者のWebサイト、モバイルアプリに進むためのリダイレクトの情報です。   &#x60;redirectType&#x60;フィールドは必ず&#x60;WALLET_CHARGE&#x60;です。   お客様のブラウザを&#x60;redirectUrl&#x60;にリダイレクトしてください。   リダイレクトせずに120秒経過すると&#x60;redirectUrl&#x60;は無効となります。 | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
