# # Merchant

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | 表示用の加盟店様名   設定できる最大長はUTF-8で45byteです。 |
**name_kana** | **string** | 表示用の加盟店様名(全角カナのみ)   設定できる最大長はUTF-8で60byteです。 |
**name_alphabet** | **string** | 表示用の加盟店様名(英名) |
**name_short** | **string** | 表示用の加盟店様名(略称)   設定できる最大長はUTF-8で45byteです。 |
**contact_name** | **string** | 加盟店様の問い合わせ先名称   設定できる最大長はUTF-8で63byteです。 |
**contact_email** | **string** | 加盟店様の問い合わせ先メールアドレス   [RFC 5322](https://www.rfc-editor.org/rfc/rfc5322)の仕様に沿った形式のみ許可されます。   #### 決済手段ごとの制限事項   - d払い: &#x60;contactEmail&#x60;,&#x60;contactUrl&#x60;,&#x60;contactPhone&#x60;の合計が96byte以下   ※&#x60;/&#x60;(半角スラッシュ)は4byteとしてカウント |
**contact_url** | **string** | 加盟店様の問い合わせ先ページURL   #### 決済手段ごとの制限事項   - d払い: &#x60;contactEmail&#x60;,&#x60;contactUrl&#x60;,&#x60;contactPhone&#x60;の合計が96byte以下   ※&#x60;/&#x60;(半角スラッシュ)は4byteとしてカウント | [optional]
**contact_phone** | **string** | 加盟店様の問い合わせ先電話番号   #### 決済手段ごとの制限事項   - d払い: &#x60;contactEmail&#x60;,&#x60;contactUrl&#x60;,&#x60;contactPhone&#x60;の合計が96byte以下   ※&#x60;/&#x60;(半角スラッシュ)は4byteとしてカウント |
**contact_opening_hours** | **string** | 加盟店様の問い合わせ窓口の営業時間(HH:MM-HH:MM形式) |
**callback_url** | **string** | コールバックURL   リダイレクトが発生するリクエスト時は必ず設定してください。   リダイレクト後に加盟店様のサーバーに処理の遷移を戻すためのURLです。   詳細は[リダイレクトとコールバック](#tag/callback)を参照ください。 | [optional]
**webhook_url** | **string** | Webhook URL   現金払いの支払いなど、処理が非同期で行われた場合に、その結果を通知するための加盟店様側のURLです。   httpsから始まるURLを設定してください。   ※テスト環境ではhttpの指定が可能です。   詳細は[Webhook](#tag/webhook)を参照ください。 | [optional]
**csrf_token** | **string** | CSRFトークン   コールバックやWebhookの呼び出し時につける任意のパラメーターです。   CSRF対策のために利用してください。   詳細は[リダイレクトとコールバック](#tag/callback)を参照ください。 | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
