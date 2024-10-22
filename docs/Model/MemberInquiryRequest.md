# # MemberInquiryRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**member_id** | **string** | 会員ID |
**onfile_type** | [**\OotbTeam\MulPay\Model\OnfileType**](OnfileType.md) | 照会したい登録認証情報のタイプ   設定なしの場合は全てのタイプを返します。 | [optional]
**additional_options** | **array<string,mixed>** | 追加情報   予備項目であり、通常は使用しないでください。   任意のMap(Key:Value)形式で、KeyとValueはともにString型のみ設定可能です。   20個までの要素を設定可能です。 | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
