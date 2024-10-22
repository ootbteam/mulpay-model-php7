# # CreditChargeOptions

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**authorization_mode** | **string** | 支払い要求のタイプ   - &#x60;AUTH&#x60;：仮売上 - &#x60;CAPTURE&#x60;：即時売上 | [default to 'AUTH']
**use_tds2** | **bool** | 3Dセキュア認証の利用有無   &#x60;true&#x60;、または設定なしの場合は、3Dセキュア認証が行われます。   &#x60;false&#x60;を設定し、3Dセキュア認証を利用しないオーソリ(信用照会)は、不正利用によりチャージバックとなった場合に、加盟店様が支払いの責任を負う可能性があります。 Apple Payは利用できません。 | [optional] [default to true]
**use_fraud_detection** | **bool** | 不正検知の利用有無   Apple Payは利用できません。 | [optional] [default to false]
**item_code** | **string** | 商品番号   加盟店様とカード会社との契約で定められた場合のみ設定します。   省略時はデフォルトで「0000990」が設定されます。 | [optional] [default to '0000990']
**payment_method** | **string** | 支払方法   Apple Payは一括払い固定になります。   - &#x60;ONE_TIME&#x60;：一括 - &#x60;INSTALLMENT&#x60;：分割 - &#x60;BONUS_ONE_TIME&#x60;：ボーナス一括 - &#x60;REVOLVING&#x60;：リボ | [optional] [default to 'ONE_TIME']
**installments** | **string** | 分割回数   支払方法が分割の場合に設定します。   設定可能な分割回数は契約により異なります。 | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
