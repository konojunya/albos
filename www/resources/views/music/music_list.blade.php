@extends('layouts.app')

@section('title')
曲一覧 | albos
@endsection

@section('css')
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="/assets/css/material.min.css">
<!-- ↑のcssがfontサイズに影響 -->
<link rel="stylesheet" href="/assets/css/music_list.css">
@endsection

@section('content')
<main class="mdl-layout__content">
	<div class="page-content" id="app">

		<!-- <a href="/music/@{{item.url}}"> -->
			<a href="/music/@{{item.url}}" class="mdl-card mdl-shadow--2dp music-card" v-for="item in music">
			  	<div class="mdl-card__title mdl-card--expand image">
			  		<img src="@{{item.imageUrl}}" alt="">
			  	</div>
			  	<div class="mdl-card__supporting-text text">
			    	@{{item.content}}
			  	</div>
			</a>
		<!-- </a> -->
	</div>
</main>
@endsection

@section('javascript')
<script src="/assets/js/material.min.js"></script>
<script src="/assets/js/vue.min.js"></script>
<script src="/assets/js/masonry.pkgd.min.js"></script>
<script src="/assets/js/imagesloaded.pkgd.min.js"></script>
<script>
	var vm = new Vue({
		el: "#app",
		data: {
			music: [
				@foreach ($album_ids as $key => $album_id)
				{
					url     : "{{ $album_ids[$key] }}",
					imageUrl: "{{ $artwork_paths[$key] }}" ,
					content : "{{ $album_titles[$key] }} - {{ $band_names[$key] }}"
				},
				@endforeach
			]
		}
	})
</script>
<script src="/assets/js/music_list.js"></script>
@endsection