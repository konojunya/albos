<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title></title>
	<!-- <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"> -->
	<link rel="stylesheet" href="/css/material.min.css">
	<link rel="stylesheet" href="/css/music_list.css">
</head>
<body>

	<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
	  <header class="mdl-layout__header">
	    <div class="mdl-layout__header-row">
	      <span class="mdl-layout-title">Music</span>
	    </div>
	  </header>
	  <main class="mdl-layout__content">
	    <div class="page-content" id="app">

				<div class="mdl-card mdl-shadow--2dp music-card" v-for="item in music">
					<div class="mdl-card__title mdl-card--expand image">
						<img src="@{{item.imageUrl}}" alt="">
					</div>
					<div class="mdl-card__supporting-text text">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit.
					</div>
				</div>

	    </div>
	  </main>
	</div>

	<script type="text/javascript" src="{{{asset('/javascript/material.min.js')}}}"></script>
	<script type="text/javascript" src="{{{asset('/javascript/jquery.min.js')}}}"></script>
	<script type="text/javascript" src="{{{asset('/javascript/vue.min.js')}}}"></script>
	<script type="text/javascript" src="{{{asset('/javascript/masonry.pkgd.min.js')}}}"></script>
	<script type="text/javascript" src="{{{asset('/javascript/imagesloaded.pkgd.min.js')}}}"></script>
	<script src="/javascript/music_list.js"></script>
</body>
</html>