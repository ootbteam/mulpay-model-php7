# # VerificationOptions

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**session_duration_seconds** | **string** | セッション有効期間（秒）   ユーザーが認証操作を行える期間を60~1800秒の間で設定できます。   未指定の場合は600秒(10分)です。 | [optional] [default to '600']
**user_max_retry** | **string** | 認証リトライ最大回数   ユーザーの認証リトライ最大回数を0~5回の間で設定できます。   SMS認証の場合、認証コード入力をリトライできる最大回数を指します。   未指定の場合は3回です。 | [optional] [default to '3']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
