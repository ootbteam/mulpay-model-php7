# # SmsPinData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sms_phone_number** | **string** | 携帯電話番号   &#x60;verificationInformation.type&#x60;が&#x60;sms-pin&#x60;の場合は必須です。   090、080、070から始まる日本の携帯電話番号を指定してください。   海外電話番号へのSMS配信は行えません。 | [optional]
**pin_type** | **string** | 認証コード桁数 未指定の場合は6桁です。 - &#x60;digits-4&#x60;：4桁 - &#x60;digits-6&#x60;：6桁 | [optional] [default to 'digits-6']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
