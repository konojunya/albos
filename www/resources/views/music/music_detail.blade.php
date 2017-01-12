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

		<div class="page-container clearfix">
			
			<div class="left-box">
			
				<div class="cd-jaket-img">
					<img src="https://img.barks.jp/image/review/1000130245/book_w660.jpg" alt="">
				</div>

				<p class="release-day">リリース 2017年1月2日</p>

			</div>
			<div class="right-box">
				
				<h1 class="album-title">chouchou - EP</h1>
				<p class="artist-name">上白石萌音</p>

				<table class="mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp music-table">
					<thead>
					  <tr>
					    <th class="mdl-data-table__cell--non-numeric title">タイトル</th>
					    <th class="artist-name">アーティスト</th>
					    <th class="time">時間</th>
					    <th class="price">価格</th>
					  </tr>
					</thead>
					<tbody>
					  <tr>
					    <td class="mdl-data-table__cell--non-numeric">366日</td>
					    <td>上白石萌音</td>
					    <td>5:16</td>
					    <td class="price">
					    	<a href="#">
					    		<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent buy-button">250</button>
					    	</a>
					    </td>
					  </tr>
					  <tr>
					    <td class="mdl-data-table__cell--non-numeric">Woman "Wの悲劇"より</td>
					    <td>上白石萌音</td>
					    <td>4:05</td>
					    <td class="price">
					    	<a href="#">
					    		<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent buy-button">250</button>
					    	</a>
					    </td>
					  </tr>
					  <tr>
					    <td class="mdl-data-table__cell--non-numeric">変わらないもの（Studio Live）</td>
					    <td>上白石萌音</td>
					    <td>5:21</td>
					    <td class="price">
					    	<a href="#">
					    		<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent buy-button">250</button>
					    	</a>
					    </td>
					  </tr>
					  <tr>
					    <td class="mdl-data-table__cell--non-numeric">On My Own（from musical "Les Miserables"）</td>
					    <td>上白石萌音</td>
					    <td>3:36</td>
					    <td class="price">
					    	<a href="#">
					    		<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent buy-button">250</button>
					    	</a>
					    </td>
					  </tr>
					  <tr>
					    <td class="mdl-data-table__cell--non-numeric">なんでもないや（movie ver.）</td>
					    <td>上白石萌音</td>
					    <td>5:49</td>
					    <td class="price">
					    	<a href="#">
					    		<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent buy-button">250</button>
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
