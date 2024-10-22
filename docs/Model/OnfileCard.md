# # OnfileCard

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**member_id** | **string** | 会員ID |
**type** | [**\OotbTeam\MulPay\Model\OnfileCardType**](OnfileCardType.md) |  |
**card_id** | **string** | カードのID   登録されているカードのID(物理連番)です。 | [optional]
**index** | **string** | カードのインデックス   登録されているカードの0から4までのインデックス番号(論理連番)です。   有効な(削除されていない)カードのIDを昇順に並べた順番です。   必ず1枚しか登録しない加盟店様がカードIDを保持することなく利用することを想定しています。 | [optional]
**cardholder_name** | **string** | カード名義人   &#x60;type&#x60;が&#x60;APPLE_PAY&#x60;の場合は設定しても無視されます。   - 省略した場合：登録済みのカード情報に保存されているカード名義人を使用します。   - 指定した場合：設定したカード名義人を、既存のカード情報に保存されているカード名義人よりも優先して使用します。随時支払いまたは有効性確認が完了後、既存のカード情報のカード名義人も、この新しく設定したカード名義人で更新します。 | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
