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

		<div class="truck-wrapper topic">
			<h2>注目トラック</h2>
			<ul class="truck-list">
				<li v-for="item in music" class="truck-item">
					<a href="/music/@{{item.url}}">
				  	<div class="image">
				  		<img src="@{{item.imageUrl}}" alt="">
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

		<div class="truck-wrapper topic">
			<h2>最新リリース</h2>
			<ul class="truck-list">
				<li v-for="item in music" class="truck-item">
					<a href="/music/@{{item.url}}">
				  	<div class="image">
				  		<img src="@{{item.imageUrl}}" alt="">
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

		<div class="truck-wrapper topic">
			<h2>コンピレーション</h2>
			<ul class="truck-list">
				<li v-for="item in music" class="truck-item">
					<a href="/music/@{{item.url}}">
				  	<div class="image">
				  		<img src="@{{item.imageUrl}}" alt="">
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
<script src="/assets/js/material.min.js"></script>
<script src="/assets/js/vue.min.js"></script>
<script>
	var vm = new Vue({
		el: "#app",
		data: {
			music: [
				{
					url     : "1",
					imageUrl: "http://hirox-area.c.blog.so-net.ne.jp/_images/blog/_b1a/Hirox-area/Perfume20SPICE20E9809AE5B8B8E79BA4SPE38080Fix.jpg",
					album_title : "不明なアルバム不明なアルバム不明なアルバム不明なアルバム",
					band_name: "Perfume + JunJun FEVER jr. & oppai"
				},
				{
					url     : "1",
					imageUrl: "http://hirox-area.c.blog.so-net.ne.jp/_images/blog/_b1a/Hirox-area/Perfume20SPICE20E9809AE5B8B8E79BA4SPE38080Fix.jpg",
					album_title : "不明なアルバム",
					band_name: "Perfume"
				},
				{
					url     : "1",
					imageUrl: "http://hirox-area.c.blog.so-net.ne.jp/_images/blog/_b1a/Hirox-area/Perfume20SPICE20E9809AE5B8B8E79BA4SPE38080Fix.jpg",
					album_title : "不明なアルバム",
					band_name: "Perfume"
				},
				{
					url     : "1",
					imageUrl: "http://hirox-area.c.blog.so-net.ne.jp/_images/blog/_b1a/Hirox-area/Perfume20SPICE20E9809AE5B8B8E79BA4SPE38080Fix.jpg",
					album_title : "不明なアルバム",
					band_name: "Perfume"
				},
				{
					url     : "1",
					imageUrl: "http://hirox-area.c.blog.so-net.ne.jp/_images/blog/_b1a/Hirox-area/Perfume20SPICE20E9809AE5B8B8E79BA4SPE38080Fix.jpg",
					album_title : "不明なアルバム",
					band_name: "Perfume"
				},
				{
					url     : "1",
					imageUrl: "http://hirox-area.c.blog.so-net.ne.jp/_images/blog/_b1a/Hirox-area/Perfume20SPICE20E9809AE5B8B8E79BA4SPE38080Fix.jpg",
					album_title : "不明なアルバム",
					band_name: "Perfume"
				},
				{
					url     : "1",
					imageUrl: "http://hirox-area.c.blog.so-net.ne.jp/_images/blog/_b1a/Hirox-area/Perfume20SPICE20E9809AE5B8B8E79BA4SPE38080Fix.jpg",
					album_title : "不明なアルバム",
					band_name: "Perfume"
				},
				{
					url     : "1",
					imageUrl: "http://hirox-area.c.blog.so-net.ne.jp/_images/blog/_b1a/Hirox-area/Perfume20SPICE20E9809AE5B8B8E79BA4SPE38080Fix.jpg",
					album_title : "不明なアルバム",
					band_name: "Perfume"
				},
			]
		}
	})
</script>
<script src="/assets/js/music_list.js"></script>
@endsection