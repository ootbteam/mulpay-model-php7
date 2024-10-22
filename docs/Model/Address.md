# # Address

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | 住所の宛名   設定できる最大長はUTF-8で60byteです。 |
**line1** | **string** | 住所の町域・丁目番地   設定できる最大長はUTF-8で75byteです。 |
**line2** | **string** | 住所の建物・号室   設定できる最大長はUTF-8で75byteです。 | [optional]
**line3** | **string** | 住所情報に関する予備項目   設定できる最大長はUTF-8で75byteです。 | [optional]
**city** | **string** | 住所の市区町村   「渋谷区」「横浜市」などの市区町村名です。   日本語・漢字でなくても構いません。   設定できる最大長はUTF-8で75byteです。 |
**state** | **string** | 住所の都道府県番号   [都道府県コード表](https://nlftp.mlit.go.jp/ksj/gml/codelist/PrefCd.html)を参照ください。   日本の場合は「001」から「047」からなる先頭ゼロ埋め3桁の形式です。 |
**post_code** | **string** | 住所の郵便番号&lt;br&gt;ハイフンの有無は問いません。   #### 決済手段ごとの制限事項   - クレジットカード ReD Shield: &#x60;&lt;&#x3D; 9 characters&#x60; |
**country** | **string** | 住所の国番号&lt;br&gt;ISO3166-1の数字3桁を設定します。   ITU-E.164ではないのでご注意ください。例えば日本の場合「392」です。 | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
