# # OnfileCardWithoutCardholderName

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**member_id** | **string** | 会員ID |
**type** | [**\OotbTeam\MulPay\Model\OnfileCardType**](OnfileCardType.md) | 登録されているカードのタイプ   - &#x60;CREDIT_CARD&#x60;：クレジットカード - &#x60;APPLE_PAY&#x60;：Apple Pay |
**card_id** | **string** | カードのID   登録されているカードのID(物理連番)です。 | [optional]
**index** | **string** | カードのインデックス   登録されているカードの0から4までのインデックス番号(論理連番)です。   有効な(削除されていない)カードのIDを昇順に並べた順番です。   必ず1枚しか登録しない加盟店様がカードIDを保持することなく利用することを想定しています。 | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
