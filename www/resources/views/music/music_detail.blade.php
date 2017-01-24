@extends('layouts.app')

@section('title')
{{$album_title}} - {{$band_name}} | albos
@endsection

@section('css')
<link rel="stylesheet" href="/assets/css/music_detail.css">
@endsection

@section('content')
<main class="mdl-layout__content">
	<div class="page-content clearfix">

		<div class="page-container clearfix" id="app">

			<div class="loading">
			  <div class="mdl-spinner mdl-js-spinner is-active spinner"></div>
			</div>
			
			<div class="left-box not-load">
			
				<div class="cd-jaket-img">
					<img :src="artwork_path" alt="" class="mdl-shadow--4dp">
				</div>

				<p class="release-day">リリース @{{release}}</p>

			</div>
			<div class="right-box not-load">
				
				<h1 class="album-title">@{{album_title}}</h1>
				<p class="artist-name">@{{band_name}}</p>

				<table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp music-table">
					<thead>
					  <tr>
					    <th class="mdl-data-table__cell--non-numeric title">タイトル</th>
					    <th class="artist-name">アーティスト</th>
					    <th class="time">時間</th>
					    <th class="price">価格</th>
					  </tr>
					</thead>
					<tbody>
					  <tr v-for="music in musics">
					    <td class="mdl-data-table__cell--non-numeric">
					    	<div style="display: flex; align-items: center;">
					    		<i class="material-icons doPlayButton" style="display:block; cursor: pointer; font-size: 2.3em;" data-musicpath="/assets/music/yourname.m4a">play_circle_outline</i>
					    		<p style="margin-bottom: 0; margin-left: 10px;">@{{music.music_title}}</p>
					    	</div>
					    </td>
					    <td>@{{band_name}}</td>
					    <td>@{{music.music_time}}</td>
					    <td class="price">
					    	<a href="/music/@{{music.music_id}}/reDownload" v-if="music.isBuy">
					    		<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent buy-button redownload-button"><i class="material-icons">cloud_download</i></button>
					    	</a>
					    	<a href="/music/@{{music.music_id}}/buy" v-else>
					    		<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent buy-button first-buy">¥ @{{music.price}}</button>
					    	</a>
					    </td>
					  </tr>
					</tbody>
				</table>

			</div>

		</div>

	</div>
</main>
@endsection
@section("javascript")
<script src="/assets/js/audioPlayer.js"></script>

<script>
	(function($){

		(function initView(album_id){
			$.ajax({
				url: "/api/music/detail?album_id="+album_id,
				type: "GET"
			})
			.done(function(data){
				setTimeout(function(){
					$(".not-load").show()
					$(".loading").hide()
					data.artwork_path = "https://img.barks.jp/image/review/1000130245/book_w660.jpg"
					var renderData = {
						release: data.release,
						band_name: data.band_name,
						musics: data.musics,
						album_title: data.album_title,
						artwork_path: data.artwork_path
					}
					reRenderView(renderData)
				},1000)
			})
		})(window.location.pathname.replace(/\/music\//,""))

		var vm = new Vue({
			el: "#app",
			data: {
				release: "",
				band_name: "",
				musics: [],
				album_title: "",
				artwork_path: ""
			}
		})

		function reRenderView(renderData){
			Vue.nextTick(function(){
				vm.release = renderData.release
				vm.band_name = renderData.band_name
				vm.musics = renderData.musics
				vm.album_title = renderData.album_title
				vm.artwork_path = renderData.artwork_path
			})
		}

		$("#app").on("click",".first-buy",function(e){
			e.preventDefault()
			e.target.innerHTML = "<i class='material-icons'>cloud_download</i>"
			$(this).removeClass("first-buy")
			window.location.href = e.target.parentNode.href
		})

		var audioPlayer = new AudioPlayer();

		$("#app").on("click",".doPlayButton",function(e){
			var isPlaying = ($(this).text() == "pause_circle_outline")

			$(".doPlayButton").text("play_circle_outline");
			if(audioPlayer.isSomeMusicPlaying){
				audioPlayer.stop();
			}
			if(!isPlaying){
				$(this).text("pause_circle_outline");
				var musicpath = e.target.dataset.musicpath;
				audioPlayer.play(musicpath);
			}else{
				audioPlayer.stop();
			}
			return false;
		});

	})(jQuery)
</script>

@endsection
