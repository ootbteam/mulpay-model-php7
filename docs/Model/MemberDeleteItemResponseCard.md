# # MemberDeleteItemResponseCard

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**member_id** | **string** | 会員ID | [optional]
**deleted_card** | [**\OotbTeam\MulPay\Model\OnfileCardInformation**](OnfileCardInformation.md) | 削除されたカードの情報   &#x60;index&#x60;や&#x60;isDefault&#x60;は削除する前の情報です。   最新の状態は[取引照会API(/order/inquiry)](#tag/order/operation/orderInquiry)で確認してください。 | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
