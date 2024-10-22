# # WalletGetCustomerDataResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**buyer_id** | **string** | 購入者のID | [optional]
**name** | **string** | 購入者の氏名 | [optional]
**email** | **string** | 購入者のメールアドレス | [optional]
**remarks** | **string** | 備考   Amazon Pay V2ではお支払い情報が設定されます。 | [optional]
**shipping_information** | [**\OotbTeam\MulPay\Model\CustomerShippingAddress**](CustomerShippingAddress.md) | 配送先情報 | [optional]
**billing_information** | [**\OotbTeam\MulPay\Model\CustomerBillingAddress**](CustomerBillingAddress.md) | 請求先情報 | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
