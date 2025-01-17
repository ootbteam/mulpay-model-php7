# # Tds2Data

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ch_acc_change** | **string** | カード会員情報の最終更新日   YYYYMMDD形式 | [optional]
**ch_acc_date** | **string** | カード会員の作成日   YYYYMMDD形式 | [optional]
**ch_acc_pw_change** | **string** | カード会員のパスワード変更日   YYYYMMDD形式 | [optional]
**nb_purchase_account** | **float** | 過去6ヶ月間にこのカード会員が購入した回数 | [optional]
**payment_acc_age** | **string** | カード登録日   カード会員にカード情報が登録された日付を設定します。   YYYYMMDD形式 | [optional]
**provision_attempts_day** | **float** | 過去24時間に行われたカード情報追加の試行回数 | [optional]
**ship_address_usage** | **string** | 配送先住所の初回使用日   取引で使用される配送先住所が加盟店様で最初に使用された日付を設定します。   YYYYMMDD形式 | [optional]
**ship_name_ind** | **string** | カード会員名と配送先名の一致/不一致   カード会員の会員名と取引に使用される配送先名の一致/不一致を設定します。   - &#x60;01&#x60;: カード会員名と配送先名が一致   - &#x60;02&#x60;: カード会員名と配送先名が不一致 | [optional]
**suspicious_acc_activity** | **string** | カード会員の不審行為情報   カード会員で、不審な行動(過去の不正行為を含む)を加盟店様が発見したかどうかを設定します。   - &#x60;01&#x60;: 不審な行動は見られなかった   - &#x60;02&#x60;: 不審な行動が見られた | [optional]
**txn_activity_day** | **float** | 過去24時間の取引回数   過去24時間に行われた、カード会員と加盟店様との取引の回数を設定します。 | [optional]
**txn_activity_year** | **float** | 前年の取引回数   前年に行われた、カード会員と加盟店様との取引の回数を設定します。 | [optional]
**three_ds_req_auth_data** | **string** | ログイン証跡   カード会員が特定の方法でログインしたことを裏付けるデータを設定します。   設定できる最大長はUTF-8で2048byteです。 | [optional]
**three_ds_req_auth_method** | **string** | ログイン方法   カード会員の加盟店様システムへのログイン方法を設定します。   - &#x60;01&#x60;: 認証なし(ゲストとしてログイン)   - &#x60;02&#x60;: 加盟店様自身の認証情報   - &#x60;03&#x60;: SSO(シングルサインオン)   - &#x60;04&#x60;: イシュアーの認証情報   - &#x60;05&#x60;: サードパーティ認証   - &#x60;06&#x60;: FIDO認証 | [optional]
**three_ds_req_auth_timestamp** | **string** | ログイン日時   カード会員のログイン日時を設定します。   YYYYMMDDHHMM形式 | [optional]
**delivery_timeframe** | **string** | 商品納品時間枠   - &#x60;01&#x60;: 電子デリバリー   - &#x60;02&#x60;: 当日出荷   - &#x60;03&#x60;: 翌日出荷   - &#x60;04&#x60;: 2日目以降の出荷 | [optional]
**gift_card_amount** | **float** | プリペイドカードまたはギフトカードを購入の場合、総購入金額の値を設定します。 | [optional]
**gift_card_count** | **float** | プリペイドカードまたはギフトカードを購入の場合、購入された総数を設定します。 | [optional]
**gift_card_curr** | **string** | 購入されたプリペイドカードまたはギフトカードの通貨コード   プリペイドカードまたはギフトカードを購入の場合、カードの通貨を表す、ISO 4217で定義されている通貨コードを設定します。   ※以下のコードは対象外です。   955, 956, 957, 958, 959, 960, 961, 962, 963, 964, 999 | [optional]
**pre_order_date** | **string** | 商品の発売予定日   先行予約購入の場合は、商品の発売予定日を設定します。   YYYYMMDD形式 | [optional]
**pre_order_purchase_ind** | **string** | 商品の販売時期情報   先行予約購入か、発売済み商品の購入かを設定します。   - &#x60;01&#x60;: 発売済み商品   - &#x60;02&#x60;: 先行予約商品 | [optional]
**reorder_items_ind** | **string** | 商品の注文情報   カード会員が以前購入した商品を再び注文しているかどうかを設定します。   - &#x60;01&#x60;: 初回注文   - &#x60;02&#x60;: 再注文 | [optional]
**ship_ind** | **string** | 取引の配送方法   - &#x60;01&#x60;: カード会員の請求先住所に配送する   - &#x60;02&#x60;: 加盟店様が保持している別の、確認済み住所に配送する   - &#x60;03&#x60;: カード会員の請求先住所と異なる住所に配送する   - &#x60;04&#x60;: 店舗へ配送 / 近所の店舗での受け取り(店舗の住所は配送先住所で設定する)   - &#x60;05&#x60;: デジタル商品(オンラインサービス、電子ギフトカードおよび償還コードを含む)   - &#x60;06&#x60;: 配送なし(旅行およびイベントのチケット)   - &#x60;07&#x60;: その他(ゲーム、配送されないデジタルサービス、電子メディアの購読料など) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
