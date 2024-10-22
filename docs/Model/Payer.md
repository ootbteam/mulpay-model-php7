# # Payer

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | 購入者の氏名(フルネーム)   設定できる最大長はUTF-8で60byteです。 |
**name_kana** | **string** | 購入者の氏名(全角カナのみ)   設定できる最大長はUTF-8で60byteです。   #### 決済手段ごとの制限事項   - コンビニ: &lt;span style&#x3D;\&quot;color: #d41f1c;font-family:Courier,monospace;font-size: 0.9em\&quot;&gt;required&lt;/span&gt;   - Pay-easy: &lt;span style&#x3D;\&quot;color: #d41f1c;font-family:Courier,monospace;font-size: 0.9em\&quot;&gt;required&lt;/span&gt; | [optional]
**name_alphabet** | **string** | 購入者の氏名(英名) | [optional]
**gender** | **string** | 購入者の性別 | [optional]
**date_of_birth** | **string** | 購入者の誕生日   YYYYMMDD形式 | [optional]
**email** | **string** | 購入者のメールアドレス   [RFC 5322](https://www.rfc-editor.org/rfc/rfc5322)の仕様に沿った形式のみ許可されます。 | [optional]
**delivery_email** | **string** | 取引内容がWebチケットなどの電子デリバリーの場合、配信先のメールアドレスを設定します。   [RFC 5322](https://www.rfc-editor.org/rfc/rfc5322)の仕様に沿った形式のみ許可されます。 | [optional]
**phones** | [**\OotbTeam\MulPay\Model\Phone[]**](Phone.md) | 購入者の電話情報一覧 | [optional]
**account_id** | **string** | 加盟店様サイト上における購入者のアカウントIDなど、一意に識別するためのID | [optional]
**ip** | **string** | 購入者の発信元IPアドレス | [optional]
**device_type** | **string** | 購入者のデバイス情報をWeb、アプリから選択   - &#x60;PC_WEB&#x60;：PC(Web) - &#x60;PC_APP&#x60;：PC(アプリ) - &#x60;MOBILE_WEB&#x60;：モバイル(Web) | [optional]
**http_user_agent** | **string** | 購入者のブラウザのUserAgent   半角英数字記号が設定可能です。 | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
