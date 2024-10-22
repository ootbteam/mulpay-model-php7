# # OnfileCardInformation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | [**\OotbTeam\MulPay\Model\OnfileCardType**](OnfileCardType.md) |  | [optional]
**card_id** | **string** | カードのID   登録されているカードのID(物理連番)です。 | [optional]
**index** | **string** | カードのインデックス   登録されているカードの0から4までのインデックス番号(論理連番)です。   有効な(削除されていない)カードのIDを昇順に並べた順番です。   必ず1枚しか登録しない加盟店様がカードIDを保持することなく利用することを想定しています。 | [optional]
**card_number** | **string** | カード番号   下4桁(**********9999)固定でマスクされます。 | [optional]
**cardholder_name** | **string** | カードの名義人 | [optional]
**expiry_month** | **string** | カードの有効期限(月) | [optional]
**expiry_year** | **string** | カードの有効期限(年) | [optional]
**issuer_code** | **string** | カードの発行カード会社コード | [optional]
**brand** | **string** | カードのブランド | [optional]
**is_default** | **bool** | デフォルトカード判定   デフォルトカードの場合&#x60;true&#x60;、そうでない場合&#x60;false&#x60;です。 | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
