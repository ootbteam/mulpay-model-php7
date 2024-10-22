# # Phone

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | 電話のタイプ   携帯、家、職場、その他から選択します。   - &#x60;MOBILE&#x60;：携帯電話 - &#x60;HOME&#x60;：固定電話 - &#x60;WORK&#x60;：勤務先 - &#x60;OTHER&#x60;：その他  #### 決済手段ごとの制限事項   - クレジットカード（3Dセキュア認証利用時のみ）: &lt;span style&#x3D;\&quot;color: #d41f1c;font-family:Courier,monospace;font-size: 0.9em\&quot;&gt;required&lt;/span&gt;、&#x60;OTHER&#x60;以外 | [optional]
**country_code** | **string** | 電話の国コード   ITU-E.164の1～3桁の数字を設定します。   ISO3166-1ではないのでご注意ください。   プラス記号(+)はつけないでください。   例として日本の場合は「81」です。   #### 決済手段ごとの制限事項   - クレジットカード（3Dセキュア認証利用時のみ）: &lt;span style&#x3D;\&quot;color: #d41f1c;font-family:Courier,monospace;font-size: 0.9em\&quot;&gt;required&lt;/span&gt; | [optional]
**number** | **string** | 電話番号   ハイフンの有無は問いません。   #### 決済手段ごとの制限事項   - クレジットカード（3Dセキュア認証利用時のみ）: &lt;span style&#x3D;\&quot;color: #d41f1c;font-family:Courier,monospace;font-size: 0.9em\&quot;&gt;required&lt;/span&gt;   - コンビニ: &lt;span style&#x3D;\&quot;color: #d41f1c;font-family:Courier,monospace;font-size: 0.9em\&quot;&gt;required&lt;/span&gt;   - Pay-easy: &lt;span style&#x3D;\&quot;color: #d41f1c;font-family:Courier,monospace;font-size: 0.9em\&quot;&gt;required&lt;/span&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
