# # OrderReferenceWallet

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**access_id** | **string** | 取引ID | [optional]
**access_pass** | **string** | 取引パスワード&lt;br&gt;OpenAPIタイプでは利用しません。モジュールタイプ・プロトコルタイプで利用します。 | [optional]
**order_id** | **string** | リクエスト時に設定したオーダーID | [optional]
**created** | **\DateTime** | 開始日時&lt;br&gt; [RFC 3339, section 5.6](https://tools.ietf.org/html/rfc3339#section-5.6)で定義された表記   例) 2023-05-30T12:34:56+09:00 | [optional]
**updated** | **\DateTime** | 最終更新日時   [RFC 3339, section 5.6](https://tools.ietf.org/html/rfc3339#section-5.6)で定義された表記   例) 2023-05-30T12:34:56+09:00 | [optional]
**amount** | **string** | リクエスト時に設定した税送料込の取引金額 | [optional]
**client_fields** | [**\OotbTeam\MulPay\Model\ClientFields**](ClientFields.md) | リクエスト時に設定した加盟店自由項目 | [optional]
**status** | [**\OotbTeam\MulPay\Model\StatusWallet**](StatusWallet.md) |  | [optional]
**charge_type** | **string** | 支払いタイプ   - &#x60;WALLET&#x60;: Pay払い | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
