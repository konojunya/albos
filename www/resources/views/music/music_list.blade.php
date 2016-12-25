<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
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

			<!-- <a href=""> -->
				<div class="mdl-card mdl-shadow--2dp music-card" v-for="item in music">
				  <div class="mdl-card__title mdl-card--expand image">
				  	<img src="/images/radwimps_×と○と罪と.jpg" alt="">
				  </div>
				  <div class="mdl-card__supporting-text text">
				    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
				  </div>
				</div>
			<!-- </a> -->

	    </div>
	  </main>
	</div>

	<script href="/javascript/material.min.js"></script>
	<script href="/javascript/jquery.min.js"></script>
	<script href="/javascript/vue.min.js"></script>
	<script href="/javascript/masonry.pkgd.min.js"></script>
	<script href="/javascript/imagesloaded.pkgd.min.js"></script>
	<script href="/javascript/music_list.js"></script>
</body>
</html>