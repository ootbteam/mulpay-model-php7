# # OrderCancel201Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**order_reference** | [**\OotbTeam\MulPay\Model\OrderReferenceCash**](OrderReferenceCash.md) | 取引参照情報 | [optional]
**credit_result** | [**\OotbTeam\MulPay\Model\CreditResult**](CreditResult.md) | カード支払い結果情報   キャンセル時は元の取引が3Dセキュア認証済であっても、3Dセキュア認証の利用有無&#x60;useTds2&#x60;は必ず&#x60;false&#x60;です。 | [optional]
**wallet_result** | [**\OotbTeam\MulPay\Model\WalletResult**](WalletResult.md) |  | [optional]
**cash_result** | [**\OotbTeam\MulPay\Model\CashResult**](CashResult.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
