@extends('layouts.app')

@section('title')
曲一覧 | albos
@endsection

@section('css')
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="/css/material.min.css">
<!-- ↑のcssがfontサイズに影響 -->
<link rel="stylesheet" href="/css/music_list.css">
@endsection

@section('content')
<main class="mdl-layout__content">
	<div class="page-content" id="app">

		@foreach ($album_ids as $key => $album_id)
		<a href=" /music/{{ $album_id }} ">
			<div class="mdl-card mdl-shadow--2dp music-card" v-for="item in music">
			  <div class="mdl-card__title mdl-card--expand image">
			  	<img src="/images/{{ $band_names[$key] }}_{{ $album_titles[$key] }}.jpg" alt="">
			  	<!-- <img src="@{{item.imageUrl}}" alt=""> -->
			  </div>
			  <div class="mdl-card__supporting-text text">
			    {{ $album_titles[$key] }} - {{ $band_names[$key] }}
			  </div>
			</div>
		</a>
		@endforeach

	</div>
</main>
@endsection

@section('javascript')
<script href="/javascript/material.min.js"></script>
<script href="/javascript/jquery.min.js"></script>
<script href="/javascript/vue.min.js"></script>
<script href="/javascript/masonry.pkgd.min.js"></script>
<script href="/javascript/imagesloaded.pkgd.min.js"></script>
<script href="/javascript/music_list.js"></script>
@endsection

