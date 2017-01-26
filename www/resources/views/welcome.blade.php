@extends('layouts.app')

@section('title')
albos
@endsection

@section('css')
<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
<link rel="stylesheet" href="/assets/css/top.css">
@endsection

@section('content')

	<ul class="top-view" style="list-style: none;">
		<li class="gallery"><img src="/assets/images/top-1.png" alt=""></li>
		<li class="gallery"><img src="/assets/images/top-2.png" alt=""></li>
		<li class="gallery"><img src="/assets/images/top-3.png" alt=""></li>
		<li class="gallery"><img src="/assets/images/top-4.png" alt=""></li>
		<li class="gallery"><img src="/assets/images/top-5.png" alt=""></li>
		<li class="gallery"><img src="/assets/images/top-6.png" alt=""></li>
		<li class="gallery"><img src="/assets/images/top-7.png" alt=""></li>
		<li class="gallery"><img src="/assets/images/top-8.png" alt=""></li>
		<li class="gallery"><img src="/assets/images/top-9.png" alt=""></li>
		<li class="gallery"><img src="/assets/images/top-10.png" alt=""></li>
		<li class="gallery"><img src="/assets/images/top-11.png" alt=""></li>
		<li class="gallery"><img src="/assets/images/top-12.png" alt=""></li>
	</ul>

	<div class="music-list-wrapper" id="app">

		<h2>あなたへのオススメ</h2>
			<ul class="truck-list">
				<li class="truck-item" v-for="item in music_new">
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

		<h2>注目トラック</h2>
			<ul class="truck-list">
				<li class="truck-item" v-for="item in music_topic">
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

		<h2>最新リリース</h2>
			<ul class="truck-list">
				<li class="truck-item" v-for="item in music_release">
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

@endsection

@section('javascript')
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
<script src="/assets/js/top.js"></script>
@endsection