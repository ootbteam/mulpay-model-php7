# # DuplicationCheckOptions

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**enable_duplication_check** | **bool** | カード番号重複チェック   同じカード番号の登録を許可しない場合は&#x60;true&#x60;にします。   有効期限が同一かはチェックしません。   チェックの結果、すでに同じカード番号が登録されている場合は&#x60;invalid_request&#x60;エラーを返却します。 | [optional] [default to false]
**include_deleted_cards** | **bool** | 重複チェックに削除カードを含めるか   カード番号重複チェック時の対象に削除済みカードを含める場合は&#x60;true&#x60;にします。 | [optional] [default to false]
**excluded_member_ids** | **string[]** | 重複チェック除外会員ID   設定した会員IDの一覧は、カード番号重複チェックの対象外にします。   最大20個まで設定可能です。 | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
