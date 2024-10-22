# # CardDetailResult

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**card_number** | **string** | カード番号   下4桁(**********9999)固定でマスクされます。 | [optional]
**cardholder_name** | **string** | 利用されたカードの名義人 | [optional]
**expiry_month** | **string** | カードの有効期限(月) | [optional]
**expiry_year** | **string** | カードの有効期限(年) | [optional]
**brand** | **string** | カードのブランド | [optional]
**issuer_location** | **string** | カードの発行会社所在地 - &#x60;JP&#x60;：日本国内 - &#x60;INTERNATIONAL&#x60;：海外 - &#x60;UNKNOWN&#x60;：不明 | [optional]
**issuer_code** | **string** | カードの発行カード会社コード | [optional]
**debit_information** | [**\OotbTeam\MulPay\Model\DebitInformation**](DebitInformation.md) |  | [optional]
**client_card_bin_data** | [**\OotbTeam\MulPay\Model\ClientCardBinData**](ClientCardBinData.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
