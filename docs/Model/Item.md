# # Item

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | 商品の名称   設定できる最大長はUTF-8で192byteです。 |
**description** | **string** | 商品の説明   設定できる最大長はUTF-8で180byteです。 | [optional]
**quantity** | **int** | 商品の購入数 |
**type** | **string** | 商品のタイプ - &#x60;DIGITAL&#x60;：デジコン - &#x60;PHYSICAL&#x60;：物販 - &#x60;SERVICE&#x60;：役務 |
**price** | **string** | 商品の単価   &#x60;order.amount&#x60;以下の値を設定してください。   #### 決済手段ごとの制限事項   - クレジットカード(ReD Shield利用時): &#x60;&lt;&#x3D; 12 characters&#x60; - メルペイ: &#x60;&lt;&#x3D; 7 characters&#x60; |
**category** | **string** | 商品の[Merchant category code(MCC)](https://en.wikipedia.org/wiki/Merchant_category_code)   MCCは[ISO 18245](https://www.iso.org/standard/33365.html)で定められた加盟店様の業種カテゴリです。   一般的には加盟店様の業種カテゴリと商品のカテゴリは同じですが、この商品により適したものがあれば個別に設定できます。   #### 決済手段ごとの制限事項   - メルペイ: &lt;span style&#x3D;\&quot;color: #d41f1c;font-family:Courier,monospace;font-size: 0.9em\&quot;&gt;required&lt;/span&gt; | [optional]
**product_id** | **string** | 商品の識別番号   加盟店様が商品ごとに一意に採番した番号です。   半角のみ設定可能です。   #### 決済手段ごとの制限事項   - クレジットカード(ReD Shield利用時): &#x60;&lt;&#x3D; 18 characters&#x60; | [optional]
**product_code** | **string** | 商品の識別コード   [JANコード](https://www.gs1jp.org/code/jan/about_jan.html)や[UPCコード](https://www.gs1jp.org/code/upc/)を設定します。 半角のみ設定可能です。 | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
