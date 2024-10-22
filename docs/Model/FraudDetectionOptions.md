# # FraudDetectionOptions

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**screening_type** | **string** | 審査タイプ |
**stop_authorization_threshold** | **string** | オーソリ中断閾値   当パラメーターを設定した場合はオーソリ(信用照会)前に不正審査を実施し、審査結果が設定した閾値以上である場合はオーソリ(信用照会)を中断します。   例) &#x60;CHALLENGE&#x60;を設定した場合、審査結果が&#x60;CHALLENGE&#x60;または&#x60;DENY&#x60;の際はオーソリを中断します。 | [optional]
**async_mode** | **bool** | 非同期モード   &#x60;true&#x60;を設定した場合は不正審査を非同期で実行します。 この際レスポンスに審査結果は含まれませんので、任意のタイミングで[取引照会API(/order/inquiry)](#tag/order/operation/orderInquiry)を実行し取得してください。 | [optional] [default to false]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
