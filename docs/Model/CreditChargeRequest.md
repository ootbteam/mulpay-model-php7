# # CreditChargeRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**merchant** | [**\OotbTeam\MulPay\Model\Merchant**](Merchant.md) |  |
**order** | [**\OotbTeam\MulPay\Model\Order**](Order.md) |  |
**payer** | [**\OotbTeam\MulPay\Model\Payer**](Payer.md) |  |
**credit_information** | [**\OotbTeam\MulPay\Model\CreditInformation**](CreditInformation.md) | クレカ払い情報 |
**tds2_information** | [**\OotbTeam\MulPay\Model\Tds2Information**](Tds2Information.md) |  | [optional]
**fraud_detection_information** | [**\OotbTeam\MulPay\Model\FraudDetectionInformation**](FraudDetectionInformation.md) |  | [optional]
**additional_options** | **array<string,mixed>** | 追加情報   予備項目であり、通常は使用しないでください。   任意のMap(Key:Value)形式で、KeyとValueはともにString型のみ設定可能です。   20個までの要素を設定可能です。 | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
