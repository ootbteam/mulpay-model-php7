# # MemberDeleteItemRequestWallet

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**member_id** | **string** | 会員ID | [optional]
**onfile_type** | [**\OotbTeam\MulPay\Model\OnfileType**](OnfileType.md) | 認証情報タイプ   削除する認証情報タイプとしてPay払い利用承諾&#x60;WALLET&#x60;を設定してください。 |
**onfile_wallet_type** | [**\OotbTeam\MulPay\Model\OnfileWalletType**](OnfileWalletType.md) | 利用承諾のタイプ   削除する利用承諾のタイプです。 |
**additional_options** | **array<string,mixed>** | 追加情報   予備項目であり、通常は使用しないでください。   任意のMap(Key:Value)形式で、KeyとValueはともにString型のみ設定可能です。   20個までの要素を設定可能です。 | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
