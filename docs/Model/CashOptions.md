# # CashOptions

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**konbini_code** | [**\OotbTeam\MulPay\Model\Mulpay2**](Mulpay2.md) |  | [optional]
**payment_period** | **string** | 支払い期間(日)   お客様がお支払いできる期間を日数で設定します。   プロトコルタイプ/モジュールタイプにおける&#x60;TradeDays&#x60;(取引有効日数)パラメーターと同じであり、設定値は変更せずに移行できます。   期間最終日の23時59分59秒までお支払いが可能です。   例) 2024年1月1日12時に支払い期限日&#x60;10&#x60;の場合、支払い期限は2024年1月11日23時59分59秒です。   日時形式で設定する場合は、支払い期限日時&#x60;paymentExpiryDateTime&#x60;パラメーターをご利用ください。   支払い期間(日)&#x60;paymentPeriod&#x60;と支払い期限日時&#x60;paymentExpiryDateTime&#x60;の両方を設定すると、支払い期限日時&#x60;paymentExpiryDateTime&#x60;が優先されます。   &lt;br&gt; 現金払いタイプ &#x60;cashType&#x60;、支払先コンビニコード &#x60;konbiniCode&#x60;により設定可能な値が異なります。    &lt;table&gt;   &lt;thead&gt;     &lt;tr&gt;       &lt;th&gt;現金払いタイプ&lt;br&gt;&lt;code&gt;cashType&lt;/code&gt;&lt;/th&gt;       &lt;th&gt;支払先&lt;br&gt;コンビニコード&lt;br&gt;&lt;code&gt;konbiniCode&lt;/code&gt;&lt;/th&gt;       &lt;th style&#x3D;\&quot;text-align: center;\&quot;&gt;最小&lt;/th&gt;       &lt;th style&#x3D;\&quot;text-align: center;\&quot;&gt;最大&lt;/th&gt;       &lt;th style&#x3D;\&quot;text-align: center;\&quot;&gt;&lt;code&gt;999&lt;/code&gt;設定時&lt;/th&gt;       &lt;th&gt;省略時&lt;/th&gt;     &lt;/tr&gt;   &lt;/thead&gt;   &lt;tbody&gt;     &lt;tr&gt;       &lt;td rowspan&#x3D;\&quot;5\&quot;&gt;コンビニ&lt;br&gt;&lt;code&gt;KONBINI&lt;/code&gt;&lt;/td&gt;       &lt;td&gt;セブン-イレブン&lt;br&gt;&lt;code&gt;SEVEN_ELEVEN&lt;/code&gt;&lt;/td&gt;       &lt;td style&#x3D;\&quot;text-align: center;\&quot;&gt;0&lt;br&gt;(当日)&lt;/td&gt;       &lt;td style&#x3D;\&quot;text-align: center;\&quot;&gt;150&lt;/td&gt;       &lt;td style&#x3D;\&quot;text-align: center;\&quot;&gt;150&lt;/td&gt;       &lt;td&gt;&lt;small&gt;デフォルト値&lt;sup&gt;*1&lt;/sup&gt;&lt;/small&gt;&lt;/td&gt;     &lt;/tr&gt;     &lt;tr&gt;       &lt;td&gt;ローソン&lt;br&gt;&lt;code&gt;LAWSON&lt;/code&gt;&lt;/td&gt;       &lt;td style&#x3D;\&quot;text-align: center;\&quot;&gt;0&lt;br&gt;(当日)&lt;/td&gt;       &lt;td style&#x3D;\&quot;text-align: center;\&quot;&gt;180&lt;/td&gt;       &lt;td style&#x3D;\&quot;text-align: center;\&quot;&gt;180&lt;/td&gt;       &lt;td&gt;&lt;small&gt;デフォルト値&lt;sup&gt;*1&lt;/sup&gt;&lt;/small&gt;&lt;/td&gt;     &lt;/tr&gt;     &lt;tr&gt;       &lt;td&gt;ファミリーマート&lt;br&gt;&lt;code&gt;FAMILYMART&lt;/code&gt;&lt;/td&gt;       &lt;td style&#x3D;\&quot;text-align: center;\&quot;&gt;0&lt;br&gt;(当日)&lt;/td&gt;       &lt;td style&#x3D;\&quot;text-align: center;\&quot;&gt;60&lt;/td&gt;       &lt;td style&#x3D;\&quot;text-align: center;\&quot;&gt;60&lt;/td&gt;       &lt;td&gt;&lt;small&gt;デフォルト値&lt;sup&gt;*1&lt;/sup&gt;&lt;/small&gt;&lt;/td&gt;     &lt;/tr&gt;     &lt;tr&gt;       &lt;td&gt;ミニストップ&lt;br&gt;&lt;code&gt;MINISTOP&lt;/code&gt;&lt;/td&gt;       &lt;td style&#x3D;\&quot;text-align: center;\&quot;&gt;0&lt;br&gt;(当日)&lt;/td&gt;       &lt;td style&#x3D;\&quot;text-align: center;\&quot;&gt;180&lt;/td&gt;       &lt;td style&#x3D;\&quot;text-align: center;\&quot;&gt;180&lt;/td&gt;       &lt;td&gt;&lt;small&gt;デフォルト値&lt;sup&gt;*1&lt;/sup&gt;&lt;/small&gt;&lt;/td&gt;     &lt;/tr&gt;     &lt;tr&gt;       &lt;td&gt;セイコーマート&lt;br&gt;&lt;code&gt;SEICOMART&lt;/code&gt;&lt;/td&gt;       &lt;td style&#x3D;\&quot;text-align: center;\&quot;&gt;0&lt;br&gt;(当日)&lt;/td&gt;       &lt;td style&#x3D;\&quot;text-align: center;\&quot;&gt;180&lt;/td&gt;       &lt;td style&#x3D;\&quot;text-align: center;\&quot;&gt;180&lt;/td&gt;       &lt;td&gt;&lt;small&gt;デフォルト値&lt;sup&gt;*1&lt;/sup&gt;&lt;/small&gt;&lt;/td&gt;     &lt;/tr&gt;     &lt;tr&gt;       &lt;td colspan&#x3D;\&quot;2\&quot;&gt;Pay-easy&lt;br&gt;&lt;code&gt;PAYEASY&lt;/code&gt;&lt;/td&gt;       &lt;td style&#x3D;\&quot;text-align: center;\&quot;&gt;0&lt;br&gt;(当日)&lt;/td&gt;       &lt;td style&#x3D;\&quot;text-align: center;\&quot;&gt;60&lt;/td&gt;       &lt;td style&#x3D;\&quot;text-align: center;\&quot;&gt;エラー&lt;/td&gt;       &lt;td&gt;&lt;small&gt;デフォルト値&lt;sup&gt;*1&lt;/sup&gt;&lt;/small&gt;&lt;/td&gt;     &lt;/tr&gt;     &lt;tr&gt;       &lt;td colspan&#x3D;\&quot;2\&quot;&gt;銀行振込(バーチャル口座)&lt;br&gt;&lt;code&gt;BANK_TRANSFER_SMBC&lt;/code&gt;&lt;/td&gt;       &lt;td style&#x3D;\&quot;text-align: center;\&quot;&gt;0&lt;br&gt;(当日)&lt;/td&gt;       &lt;td style&#x3D;\&quot;text-align: center;\&quot;&gt;99&lt;/td&gt;       &lt;td style&#x3D;\&quot;text-align: center;\&quot;&gt;エラー&lt;/td&gt;       &lt;td&gt;省略不可&lt;/td&gt;     &lt;/tr&gt;     &lt;tr&gt;       &lt;td colspan&#x3D;\&quot;2\&quot;&gt;銀行振込(バーチャル口座あおぞら)&lt;br&gt;&lt;code&gt;BANK_TRANSFER_GMO_AOZORA&lt;/code&gt;&lt;/td&gt;       &lt;td style&#x3D;\&quot;text-align: center;\&quot;&gt;0&lt;br&gt;(当日)&lt;/td&gt;       &lt;td style&#x3D;\&quot;text-align: center;\&quot;&gt;999&lt;/td&gt;       &lt;td style&#x3D;\&quot;text-align: center;\&quot;&gt;999&lt;/td&gt;       &lt;td&gt;支払い期限なし&lt;/td&gt;     &lt;/tr&gt;   &lt;/tbody&gt; &lt;/table&gt;  *1：デフォルト値は管理画面から設定します。変更の方法はこちらの[FAQページ](https://mp-faq.gmo-pg.com/s/article/D00103)を参照ください。 | [optional]
**payment_expiry_date_time** | **string** | 支払い期限日時   お客様が支払いできる期限を日時(YYYYMMDDHHMM)形式で設定します。   &lt;br&gt; 現金払いタイプ &#x60;cashType&#x60;、支払先コンビニコード &#x60;konbiniCode&#x60;により設定可能な値が異なります。    &lt;table&gt;     &lt;thead&gt;         &lt;tr&gt;             &lt;th&gt;現金払いタイプ&lt;br&gt;&lt;code&gt;cashType&lt;/code&gt;&lt;/th&gt;             &lt;th&gt;支払先&lt;br&gt;コンビニコード&lt;br&gt;&lt;code&gt;konbiniCode&lt;/code&gt;&lt;/th&gt;             &lt;th style&#x3D;\&quot;text-align: center;\&quot;&gt;利用&lt;/th&gt;             &lt;th&gt;最大&lt;/th&gt;             &lt;th&gt;注意事項&lt;/th&gt;         &lt;/tr&gt;     &lt;/thead&gt;     &lt;tbody&gt;         &lt;tr&gt;             &lt;td rowspan&#x3D;\&quot;5\&quot;&gt;コンビニ&lt;br&gt;&lt;code&gt;KONBINI&lt;/code&gt;&lt;/td&gt;             &lt;td&gt;セブン-イレブン&lt;br&gt;&lt;code&gt;SEVEN_ELEVEN&lt;/code&gt;&lt;/td&gt;             &lt;td style&#x3D;\&quot;text-align: center;\&quot;&gt;×&lt;/td&gt;             &lt;td style&#x3D;\&quot;text-align: center;\&quot;&gt;-&lt;/td&gt;             &lt;td&gt;設定するとエラー&lt;/td&gt;         &lt;/tr&gt;         &lt;tr&gt;             &lt;td&gt;ローソン&lt;br&gt;&lt;code&gt;LAWSON&lt;/code&gt;&lt;/td&gt;             &lt;td style&#x3D;\&quot;text-align: center;\&quot;&gt;〇&lt;/td&gt;             &lt;td&gt;181日後の0時0分&lt;/td&gt;             &lt;td&gt;&lt;/td&gt;         &lt;/tr&gt;         &lt;tr&gt;             &lt;td&gt;ファミリーマート&lt;br&gt;&lt;code&gt;FAMILYMART&lt;/code&gt;&lt;/td&gt;             &lt;td style&#x3D;\&quot;text-align: center;\&quot;&gt;〇&lt;/td&gt;             &lt;td&gt;61日後の0時0分&lt;/td&gt;             &lt;td&gt;&lt;/td&gt;         &lt;/tr&gt;         &lt;tr&gt;             &lt;td&gt;ミニストップ&lt;br&gt;&lt;code&gt;MINISTOP&lt;/code&gt;&lt;/td&gt;             &lt;td style&#x3D;\&quot;text-align: center;\&quot;&gt;〇&lt;/td&gt;             &lt;td&gt;181日後の0時0分&lt;/td&gt;             &lt;td&gt;&lt;/td&gt;         &lt;/tr&gt;         &lt;tr&gt;             &lt;td&gt;セイコーマート&lt;br&gt;&lt;code&gt;SEICOMART&lt;/code&gt;&lt;/td&gt;             &lt;td style&#x3D;\&quot;text-align: center;\&quot;&gt;〇&lt;/td&gt;             &lt;td&gt;181日後の0時0分&lt;/td&gt;             &lt;td&gt;時分に&lt;code&gt;0001&lt;/code&gt;は&lt;br&gt;設定不可&lt;/td&gt;         &lt;/tr&gt;         &lt;tr&gt;             &lt;td colspan&#x3D;\&quot;2\&quot;&gt;Pay-easy&lt;br&gt;&lt;code&gt;PAYEASY&lt;/code&gt;&lt;/td&gt;             &lt;td style&#x3D;\&quot;text-align: center;\&quot;&gt;〇&lt;/td&gt;             &lt;td&gt;61日後の0時0分&lt;/td&gt;             &lt;td&gt;&lt;/td&gt;         &lt;/tr&gt;         &lt;tr&gt;             &lt;td colspan&#x3D;\&quot;2\&quot;&gt;銀行振込(バーチャル口座)&lt;br&gt;&lt;code&gt;BANK_TRANSFER_SMBC&lt;/code&gt;&lt;/td&gt;             &lt;td style&#x3D;\&quot;text-align: center;\&quot;&gt;×&lt;/td&gt;             &lt;td style&#x3D;\&quot;text-align: center;\&quot;&gt;-&lt;/td&gt;             &lt;td&gt;設定するとエラー&lt;/td&gt;         &lt;/tr&gt;         &lt;tr&gt;             &lt;td colspan&#x3D;\&quot;2\&quot;&gt;銀行振込(バーチャル口座あおぞら)&lt;br&gt;&lt;code&gt;BANK_TRANSFER_GMO_AOZORA&lt;/code&gt;&lt;/td&gt;             &lt;td style&#x3D;\&quot;text-align: center;\&quot;&gt;×&lt;/td&gt;             &lt;td style&#x3D;\&quot;text-align: center;\&quot;&gt;-&lt;/td&gt;             &lt;td&gt;設定するとエラー&lt;/td&gt;         &lt;/tr&gt;     &lt;/tbody&gt; &lt;/table&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)