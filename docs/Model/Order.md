# # Order

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**order_id** | **string** |  |
**amount** | **string** | 税送料込の取引金額   決済手段により設定可能な値が異なります。 |
**currency** | **string** | 通貨コード   ISO 4217のアルファベット3文字を設定します。   例えば日本円の場合&#x60;JPY&#x60;です。   省略時は&#x60;JPY&#x60;です。   &lt;span style&#x3D;\&quot;color: #d41f1c\&quot;&gt; ※現時点では&#x60;JPY&#x60;のみ利用可能です。&lt;/span&gt; | [optional] [default to 'JPY']
**client_fields** | [**\OotbTeam\MulPay\Model\ClientFields**](ClientFields.md) |  | [optional]
**items** | [**\OotbTeam\MulPay\Model\Item[]**](Item.md) | 商品情報の一覧 | [optional]
**transaction_type** | [**\OotbTeam\MulPay\Model\TransactionType**](TransactionType.md) |  |
**shipping_address** | [**\OotbTeam\MulPay\Model\Address**](Address.md) | 配送先住所情報 | [optional]
**address_match** | **bool** | 配送先住所と請求先住所が同じ場合は&#x60;true&#x60;を設定します。   住所はいずれかのみ設定してください。 | [optional] [default to false]
**billing_address** | [**\OotbTeam\MulPay\Model\Address**](Address.md) | 請求先住所情報 | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
