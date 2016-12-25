<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title></title>
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
								アルバム
							</div>
							<div class="release clearfix">
								<div class="release-title">
									リリース：
								</div>
								<div class="release-content">
									2013年12月11日
								</div>
							</div>
						</div>
						
						<h2 class="music-title">Ｘと○と罪と<span class="artist-name"> - RADWIMPS</span></h2>
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
							<tr>
								<td class="mdl-data-table__cell--non-numeric">「いえない」</td>
								<td>RADWIMPS</td>
								<td>6:32</td>
								<td>$2.90</td>
								<td>
									<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
										購入
									</button>
								</td>
							</tr>
							<tr>
								<td class="mdl-data-table__cell--non-numeric">「実況中継」</td>
								<td>RADWIMPS</td>
								<td>5:05</td>
								<td>$1.25</td>
								<td>
									<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
										購入
									</button>
								</td>
							</tr>
							<tr>
								<td class="mdl-data-table__cell--non-numeric">「アイアンバイブル」</td>
								<td>RADWIMPS</td>
								<td>5:35</td>
								<td>$2.35</td>
								<td>
									<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
										購入
									</button>
								</td>
							</tr>
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