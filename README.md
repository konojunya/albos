# SD22
## 画面設計

- 11/02の内容
 業務中心(DFD)に必要な画面の名前を出す。
 
 業務別、画面名称一覧表作成　　　　　　　→　11月07日

---

***俺とかずき***

## 共通

| Method     |  URL                           |   Detail                          |
|:-----------|:-------------------------------|:----------------------------------|
| GET        |  /                             |　　ＴＯＰページ　　　　　　　　　　　　　|
| GET        |  /music                        |　　曲一覧　　　　　　　　　　　　　　　　|
| GET        |  /music/:album_id              |　　曲詳細ページ　　　　　　　          |
| GET        |  /:band_id/album_id               |　　バンドごとのアップロード済みの曲一覧　|
<br>
<br>

## ユーザー

| Method     |  URL                           |   Detail                |
|:-----------|:-------------------------------|:------------------------|
| GET        |  /music/:music_id/buy          |　　購入　　　　　　　　　　　|
| GET        |  /user/signup                  |　　ユーザ入会　　　　　　　　|
| GET        |  /user/login                   |　　ユーザログイン　　　　　　|
| POST       |  /user/login                   |　　ユーザログイン　　　　　　|
| POST       |  /user/logout                  |　　ユーザログアウト　　　　　|
| GET        |  /user/:user_id                |　　ユーザマイページ　　　　　|
| GET        |  /user/:user_id/edit           |　　ユーザマイページ編集　　　|
| GET        |  /user/:user_id/buy-history    |　　購入済みの曲一覧　　　　　|
<br>
<br>

---

***がみさん***

## まさる堂

| Method     |  URL                           |   Detail                |
|:-----------|:-------------------------------|:------------------------|
| GET        |  /admin/login                  |　　管理者ページログイン　　　|
| POST       |  /admin/logout                 |　　管理者ページログアウト　　|
| GET        |  /admin                        |　　管理者ページ　　　　　　　|
| GET        |  /admin/examination            |　　審査楽曲一覧　　　　　　　|
| POST       |  /admin/examination/accept     |　　審査承認処理　　　　　　　|
<br>

 制作時は商品販売業務を中心に製作する。
 グループ毎に+αの機能は要相談　　　　　　→　11月28日
 
## 今後提出するもの
 
- 画面一覧(OK)
- 画面設計
- プログラム(html,css,java,php)