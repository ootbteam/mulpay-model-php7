# # OnfileCardOptions

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**member_id** | **string** | 会員ID |
**member_name** | **string** | 会員名 | [optional]
**card_id** | **string** | カードのID   登録されているカードのID(物理連番)です。 | [optional]
**create_new_member** | **bool** | 会員ID未登録時の新規作成   &#x60;true&#x60;にすると、指定した会員IDが存在しない場合に新規登録します。 | [optional] [default to false]
**set_default** | **bool** | デフォルト設定   &#x60;true&#x60;にすると、このカードがデフォルトカードとして登録されます。   デフォルトカードにした場合、随時支払い時にカードのID(物理連番)&#x60;cardId&#x60;、またインデックス(論理連番)&#x60;index&#x60;の設定が不要です。   また、洗替や一括決済サービス時に「カード登録連番」を設定することなく利用できます。 | [optional] [default to false]
**duplication_check_options** | [**\OotbTeam\MulPay\Model\DuplicationCheckOptions**](DuplicationCheckOptions.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
