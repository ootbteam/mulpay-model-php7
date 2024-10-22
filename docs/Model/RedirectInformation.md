# # RedirectInformation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**redirect_url** | **string** | リダイレクト先のURL | [optional]
**http_method** | **string** | リダイレクト時のHTTPメソッド   原則 &#x60;GET&#x60; です。詳細は[リダイレクトとコールバック](#tag/callback)を参照ください。 | [optional]
**redirect_type** | **string** | リダイレクト処理のタイプ   - &#x60;TDS2&#x60;：3Dセキュア - &#x60;WALLET_CHARGE&#x60;：Pay払い 都度支払い - &#x60;WALLET_AUTHORIZE&#x60;：Pay払い 利用承諾 - &#x60;VERIFY&#x60;：本人確認 | [optional]
**redirect_parameters** | **array<string,mixed>** | リダイレクト時のパラメーター   リダイレクト時のHTTPメソッドが &#x60;POST&#x60; の場合に、リクエストボディに設定するパラメーター(Map形式)です。   &#x60;GET&#x60; の場合は、クエリパラメーターとしてリダイレクト先URLに含まれるため、この項目は返しません。 | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
