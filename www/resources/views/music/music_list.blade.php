@extends('layouts.app')

@section('title')
曲一覧 | albos
@endsection

@section('css')
<link rel="stylesheet" href="/assets/css/music_list.css">
@endsection

@section('content')
<main class="mdl-layout__content">
	<div class="page-content" id="app">

		<div class="loading _hidden">
		  <div class="mdl-spinner mdl-js-spinner is-active spinner"></div>
		</div>

		<div class="truck-wrapper topic not-load">
			<h2>注目トラック</h2>
			<ul class="truck-list">
				<li v-for="item in music" class="truck-item">
					<a href="/music/@{{item.album_id}}">
				  	<div class="image">
				  		<img src="@{{item.artwork_path}}" alt="">
				  	</div>
				  	<p class="album-title">
				    	@{{item.album_title}}
				  	</p>
				  	<p class="band-name">
				  		@{{item.band_name}}
				  	</p>
					</a>
				</li>
			</ul>
		</div>

		<div class="truck-wrapper topic not-load">
			<h2>最新リリース</h2>
			<ul class="truck-list">
				<li v-for="item in music" class="truck-item">
					<a href="/music/@{{item.album_id}}">
				  	<div class="image">
				  		<img src="@{{item.artwork_path}}" alt="">
				  	</div>
				  	<p class="album-title">
				    	@{{item.album_title}}
				  	</p>
				  	<p class="band-name">
				  		@{{item.band_name}}
				  	</p>
					</a>
				</li>
			</ul>
		</div>

		<div class="truck-wrapper topic not-load">
			<h2>コンピレーション</h2>
			<ul class="truck-list">
				<li v-for="item in music" class="truck-item">
					<a href="/music/@{{item.album_id}}">
				  	<div class="image">
				  		<img src="@{{item.artwork_path}}" alt="">
				  	</div>
				  	<p class="album-title">
				    	@{{item.album_title}}
				  	</p>
				  	<p class="band-name">
				  		@{{item.band_name}}
				  	</p>
					</a>
				</li>
			</ul>
		</div>

	</div>
</main>
@endsection

@section('javascript')
<script src="/assets/js/vue.min.js"></script>
<script src="/assets/js/music_list.js"></script>
@endsection