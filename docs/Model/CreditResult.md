# # CreditResult

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**card_type** | **string** | カードのタイプ   - &#x60;CREDIT_CARD&#x60;：クレジットカード - &#x60;APPLE_PAY&#x60;：Apple Pay - &#x60;GOOGLE_PAY&#x60;：Google Pay | [optional]
**card_result** | [**\OotbTeam\MulPay\Model\CardResult**](CardResult.md) |  | [optional]
**forwarded_acquirer_code** | **string** | 仕向先カード会社コード   プロトコルタイプ/モジュールタイプにおける&#x60;Forward&#x60;パラメーターと同じです。   最大7桁の半角英数字・半角スペースで構成されます。 | [optional]
**approval_code** | **string** | カード会社が発行した承認番号   プロトコルタイプ/モジュールタイプにおける&#x60;Approve&#x60;パラメーターと同じです。   最大7桁の半角英数字・半角スペースで構成されます。   有効性確認やキャンセルの場合には、全て半角スペース、または空になる可能性があります。 | [optional]
**nw_transaction_id** | **string** | クレジットカードネットワーク事業者が取引を特定するためのID   プロトコルタイプ/モジュールタイプにおける&#x60;TranID&#x60;パラメーターと同じです。   最大28桁の半角数字で構成されます。 | [optional]
**transaction_date_time** | **\DateTime** | 処理日時   [RFC 3339, section 5.6](https://tools.ietf.org/html/rfc3339#section-5.6)で定義された表記   例) 2023-05-30T12:34:56+09:00 | [optional]
**capture_expiry_date_time** | **\DateTime** | 仮売上有効日時   [RFC 3339, section 5.6](https://tools.ietf.org/html/rfc3339#section-5.6)で定義された表記   例) 2023-06-30T12:34:56+09:00 | [optional]
**use_tds2** | **bool** | 3Dセキュア認証の利用有無   当該取引が3Dセキュア認証済である場合は&#x60;true&#x60;です。 | [optional]
**use_fraud_detection** | **bool** | 不正検知の利用有無 | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
