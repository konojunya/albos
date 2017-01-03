@extends('layouts.app')

@section('title')
{{$album_title}} - {{$band_name}} | albos
@endsection

@section('css')

<link rel="stylesheet" href="/assets/css/music_detail.css">
<style>
	.card-image.mdl-card {
		background: url('{{$artwork_path}}') center / cover;
	}
</style>
@endsection

@section('content')

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
							<!-- <th></th> -->
							<th class="mdl-data-table__cell--non-numeric">タイトル</th>
							<th>アーティスト</th>
							<th>時間</th>
							<th>価格</th>
						</tr>
					</thead>
					<tbody>
					@foreach ($music_titles as $key => $music_title)
					    <tr>
					    	<!-- <td></td> -->
							<td class="mdl-data-table__cell--non-numeric">{{$music_title}}</td>
							<td>{{$band_name}}</td>
							<td>{{$music_times[$key]}}</td>
							<td>{{$prices[$key]}}</td>
							<td><a href=" /music/{{$music_ids[$key]}}/buy "><button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">購入</button></a></td>
						</tr>
					@endforeach
					</tbody>
				</table>
				<!-- <audio controls>
				    <source src="{{ storage_path('music_data/0000000001.mp3') }}" type="audio/mp3">
				</audio> -->
			</div>
		</div>
	</div>
</main>
@endsection
