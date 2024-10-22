# # OrderWithoutAmount

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**order_id** | **string** |  |
**client_fields** | [**\OotbTeam\MulPay\Model\ClientFields**](ClientFields.md) |  | [optional]
**items** | [**\OotbTeam\MulPay\Model\Item[]**](Item.md) | 商品情報の一覧   #### 決済手段ごとの制限事項   - 楽天ペイ(オンライン決済)V2 利用承諾: &lt;span style&#x3D;\&quot;color: #d41f1c;font-family:Courier,monospace;font-size: 0.9em\&quot;&gt;required&lt;/span&gt; | [optional]
**transaction_type** | [**\OotbTeam\MulPay\Model\TransactionType**](TransactionType.md) |  |
**shipping_address** | [**\OotbTeam\MulPay\Model\Address**](Address.md) | 配送先住所情報 | [optional]
**address_match** | **bool** | 配送先住所と請求先住所が同じ場合は&#x60;true&#x60;を設定します。   住所はいずれかのみ設定してください。 | [optional] [default to false]
**billing_address** | [**\OotbTeam\MulPay\Model\Address**](Address.md) | 請求先住所情報 | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
