# # AmazonPayCancelWebhookRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**access_id** | **string** | 取引ID |
**event** | **string** | Webhookイベントタイプ   - &#x60;REFUND_SUCCEEDED&#x60;：キャンセル成功 - &#x60;REFUND_FAILED&#x60;：キャンセル失敗 |
**csrf_token** | **string** | Webhook任意パラメーター   chargeリクエスト時に加盟店様が設定した任意の値です。   CSRF対策のために利用してください。 | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
