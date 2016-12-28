<!DOCTYPE html>
<html lang="ja">
<head>
<<<<<<< HEAD
	<meta charset="UTF-8">
	<title>{{$album_title}} - {{$band_name}}</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://code.getmdl.io/1.2.1/material.indigo-pink.min.css">
	<link rel="stylesheet" href="/css/music_detail.css">
</head>
<body>
	<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
		<header class="mdl-layout__header">
			<div class="mdl-layout__header-row">
				<span class="mdl-layout-title">曲詳細</span>
			</div>
		</header>

		<main class="mdl-layout__content">
			<div class="page-content">
				<div class="music-detail-content clearfix">
					<div class="music-detail-left">
						<div class="card-image mdl-card mdl-shadow--2dp">
							<div class="mdl-card__title mdl-card--expand"></div>
						</div>
					</div>
					
					<div class="music-detail-right">
						<div class="music-detail-right-title clearfix">
							<div class="type">
								{{$property}}
							</div>
							<div class="release clearfix">
								<div class="release-title">
									リリース：
								</div>
								<div class="release-content">
									{{$release}}
								</div>
							</div>
						</div>
						
						<h2 class="music-title">{{$album_title}}<span class="artist-name"> - {{$band_name}}</span></h2>
						<table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp">
							<thead>
								<tr>
									<th class="mdl-data-table__cell--non-numeric">タイトル</th>
									<th>アーティスト</th>
									<th>時間</th>
									<th>価格</th>
								</tr>
							</thead>
							<tbody>
							@foreach ($music_titles as $key => $music_title)
							    <tr>
									<td class="mdl-data-table__cell--non-numeric">{{$music_title}}</td>
									<td>{{$band_name}}</td>
									<td>{{$music_times[$key]}}</td>
									<td>{{$prices[$key]}}</td>
									<td><button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">購入</button></td>
								</tr>
							@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</main>
	</div>

  <script defer src="https://code.getmdl.io/1.2.1/material.min.js"></script>
</body>
</html>
