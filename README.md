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
| GET        |  /:band_id/album_id            |　　バンドごとのアップロード済みの曲一覧　|
<br>
<br>

## ユーザー

| Method     |  URL                           |   Detail                |
|:-----------|:-------------------------------|:------------------------|
| GET        |  /music/:music_id/buy          |　　購入　　　　　　　　　　　|
| GET        |  /user/:user_id/home           |　　ユーザマイページ　　　　　|
| GET        |  /user/:user_id/edit           |　　ユーザマイページ編集　　　|
| GET        |  /user/:user_id/buy-history    |　　購入済みの曲一覧　　　　　|
<br>
<br>

---

***API***

## 共通

| Method     |  URL                           |   Detail                          |
|:-----------|:-------------------------------|:----------------------------------|
| GET        |  /api/music                    |　　曲一覧　　　　　　　　　　　　　　　|
| GET        |  /api/music/detail             |　　曲詳細ページ　　　　　　　　　　　　|
| GET        |  /api/band/:band_id/music      |　　バンドごとのアップロード済みの曲一覧|

`/api/music`

```
req: no
res: {
  albums: [
    {
    	album_id: "0000000001",
    	artwork_path: "/assets/images/0000000001.jpg",
    	album_title: "Title",
    	band_name: "かずきくらっしゃ〜〜ず"
   	}
   	...
  ]
}
```

`/api/music/detail`

```
req: album_id
res: {
	album: [
    {
      album_title: "Title",
      artwork_path: "music_data/0000000001.mp3",
      property: "アルバム",
      release: "2013-01-01",
      band_name: "かずきくらっしゃ〜〜ず",
      musics: [
        {
          music_id: "0000000001",
          music_title: "Title",
          price: 250,
          music_data_paths: "music_data/0000000001.mp3",
          music_time: "00:05:13"
        }
      ]
      ...
    }
  ]
}
```

↓バンドページ無いからいらないかも
`/api/band/:band_id/music`

```
req: band_id
res: {
	albums: [
    {
      album_id: "0000000001",
      artwork_path: "/assets/images/0000000001.jpg",
      album_title: "Title",
      band_name: "かずきくらっしゃ〜〜ず"
    }
    ...
  ]
}
```

<br>
<br>

## ユーザー

| Method     |  URL                           |   Detail                |
|:-----------|:-------------------------------|:------------------------|
| GET        |  /api/user/home              |　　ユーザマイページ　　　　　|
| POST       |  /api/user/home/edit         |　　ユーザマイページ編集　　　|
| GET        |  /api/user/home/history      |　　購入済みの曲一覧　　　　　|

`/api/user/home`

```
req: no
res: {
	user: [
    {
      user_id: "hogeruumu",
      user_name: "きのーご",
      credit_card_number: "1234-5678-9012-3456",
      email: "hoge@example.com"
    }
  ]
}
```

`/api/user/home/edit`

```
req: updates
res: {
	user: [
    {
      user_id: "hogeruumu",
      user_name: "きのーご",
      password: "*******",
      credit_card_number: "1234-5678-9012-3456",
      email: "hoge@example.com"
    }
  ]
}
```

`/api/user/home/history`

```
req: no
res: {
	history: [
    {
      album_title: "×と◯と罪と",
      band_name: "RADWIMPS",
      music_title: "いえない",
      price: "250",
      purchase_date: "2017-01-02 23:58:32"
    }
    ...
  ]
}
```

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