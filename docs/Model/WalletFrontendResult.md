# # WalletFrontendResult

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**wallet_type** | [**\OotbTeam\MulPay\Model\WalletFrontendType**](WalletFrontendType.md) |  | [optional]
**settlement_code** | **string** | 決済番号 &lt;br/&gt; [/wallet/front-end/charge](#tag/wallet/operation/walletFrontendCharge)では返却されません。&lt;br/&gt; | [optional]
**capture_expiry_date_time** | **\DateTime** | 仮売上有効日時   [/wallet/front-end/charge](#tag/wallet/operation/walletFrontendCharge)では返却されません。&lt;br/&gt; [RFC 3339, section 5.6](https://tools.ietf.org/html/rfc3339#section-5.6)で定義された表記です。   例) 2023-06-30T12:34:56+09:00 | [optional]
**frontend_payment_id** | **string** | 決済番号（フロントエンド利用）&lt;br/&gt; [/wallet/front-end/verifyCharge](#tag/wallet/operation/walletFrontendVerifyCharge)では返却されません。 | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
