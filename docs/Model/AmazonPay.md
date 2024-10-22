# # AmazonPay

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**checkout_session_id** | **string** | チェックアウトセッションID   APBタイプ&#x60;apbType&#x60;を設定しない場合は必須です。 | [optional]
**note_to_buyer** | **string** | 注文の説明   注文の説明です。   Amazonからお客様へのメールに表示されます。 | [optional]
**apb_type** | **string** | APBタイプ   [APB(AdditionalPaymentButton)機能](https://www.amazonpay-faq.jp/faq/QA-66)を利用する場合のみ設定してください。    - &#x60;PayOnly&#x60;: デジタル商品など住所情報を使用しない場合   - &#x60;PayAndShip&#x60;: 物販など住所情報を使用する場合   &#x60;PayAndShip&#x60;の場合、以下パラメーターは必須です。   住所の宛名&#x60;order.shippingAddress.name&#x60;   住所の町域・丁目番地&#x60;order.shippingAddress.line1&#x60;   住所の市区町村&#x60;order.shippingAddress.city&#x60;   住所の都道府県番号&#x60;order.shippingAddress.state&#x60;   住所の郵便番号&#x60;order.shippingAddress.postCode&#x60;   住所の国番号&#x60;order.shippingAddress.country&#x60;   電話番号&#x60;payer.phones.number&#x60;(1件目が使用されます) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
