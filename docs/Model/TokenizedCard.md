# # TokenizedCard

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | カード情報トークンのタイプ   カード情報トークン&#x60;token&#x60;と合わせて設定してください。   - &#x60;MP_TOKEN&#x60;: MPクレカトークン   - &#x60;APPLE_PAY_TOKEN&#x60;: Apple Payトークン   - &#x60;GOOGLE_PAY_TOKEN&#x60;: Google Payトークン |
**token** | **string** | カード情報トークン   カード情報トークンのタイプ&#x60;type&#x60;と合わせて設定してください。   - MPクレカトークン     カード情報をトークン化した値です。    - Apple Payトークン     Apple Payに対応した端末で取得したApple PayのPayment tokenをbase64エンコードした値です。    - Google Payトークン     Google Pay APIで取得したPayment tokenをbase64エンコードした値です。    *** カード情報トークンとカード情報を両方設定した場合は以下の通りです。 - PCI DSSの認定を得ている加盟店様   カード情報トークンが優先的に利用されます。   - PCI DSSの認定を得ていない加盟店様   契約不備のエラーになります。 |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
