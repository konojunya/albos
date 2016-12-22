# SD22
## 画面設計

- 11/02の内容
 業務中心(DFD)に必要な画面の名前を出す。
 
 業務別、画面名称一覧表作成　　　　　　　→　11月07日



## バンド

| Method     |  URL                           |   Detail               |
|:-----------|:-------------------------------|:-----------------------|
| GET        |  /band/signup                  |　　バンド入会　　　　　　　|
| GET        |  /band/signin                  |　　バンドログイン　　　　　|
| POST       |  /band/signout                 |　　バンドログアウト　　　　|
| GET        |  /:band_id                     |　　バンドマイページ　　　　|
| GET        |  /:band_id/edit                |　　バンドマイページ編集　　|
| GET        |  /:band_id/upload              |　　曲のアップロード　　　　|
| GET        |  /:band_id/upload/status       |　　曲の審査状態　　　　　　|
| GET        |  /:band_id/music/edit          |　　編集　　　　　　　　　　|
| POST       |  /:band_id/music/delete        |　　曲の削除　　　　　　　　|
<br>
<br>

## 共通

| Method     |  URL                           |   Detail                          |
|:-----------|:-------------------------------|:----------------------------------|
| GET        |  /                             |　　ＴＯＰページ　　　　　　　　　　　　　|
| GET        |  /music                        |　　曲一覧　　　　　　　　　　　　　　　　|
| GET        |  /music/:music_id              |　　曲詳細ページ　　　　　　　          |
| GET        |  /:band_id/music               |　　バンドごとのアップロード済みの曲一覧　|
<br>
<br>

## ユーザー

| Method     |  URL                           |   Detail                |
|:-----------|:-------------------------------|:------------------------|
| GET        |  /music/:music_id/buy          |　　購入　　　　　　　　　　　|
| GET        |  /user/signup                  |　　ユーザ入会　　　　　　　　|
| GET        |  /user/signin                  |　　ユーザログイン　　　　　　|
| POST       |  /user/signout                 |　　ユーザログアウト　　　　　|
| GET        |  /:user_id                     |　　ユーザマイページ　　　　　|
| GET        |  /:user_id/edit                |　　ユーザマイページ編集　　　|
| GET        |  /:user_id/buy-history         |　　購入済みの曲一覧　　　　　|
<br>
<br>

## まさる堂

| Method     |  URL                           |   Detail                |
|:-----------|:-------------------------------|:------------------------|
| GET        |  /admin/login                  |　　管理者ページログイン　　　|
| POST       |  /admin/logout                 |　　管理者ページログアウト　　|
| GET        |  /admin                        |　　管理者ページ　　　　　　　|
| GET        |  /admin/news_edit              |　　ニュース編集　　　　　　　|
| GET        |  /admin/event_edit             |　　イベント編集　　　　　　　|
| GET        |  /admin/magazine_edit          |　　メルマガ編集　　　　　　　|
| GET        |  /admin/examination            |　　審査楽曲一覧　　　　　　　|
| POST       |  /admin/examination/accept     |　　審査承認処理　　　　　　　|
<br>

 制作時は商品販売業務を中心に製作する。
 グループ毎に+αの機能は要相談　　　　　　→　11月28日
 
 ## 今後提出するもの
 
- 画面一覧(OK)
- 画面設計
- プログラム(html,css,java,php)