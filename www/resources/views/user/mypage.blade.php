@extends('layouts.app')

@section('title')
マイページ | albos
@endsection

@section('css')
<link rel="stylesheet" href="/assets/css/mypage.css">
@endsection

@section('content')
<main class="mdl-layout__content">
  <div class="page-content" id="app">

    <div class="wrapper clearfix">
        <div class="left-box">
            <h1 class="user-id load"></h1>
            <p class="user-email load"></p>

            <a href="/mypage/edit" class="settings mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored" style="background-color: #FD7B08;">設定変更</a>

        </div>
        <div class="right-box">
            <p class="buy-history">購入履歴</p>

            <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp music-table _hidden">
                <thead>
                  <tr>
                    <th class="mdl-data-table__cell--non-numeric title">曲名</th>
                    <th class="album-name">アルバム名</th>
                    <th class="artist-name">アーティスト名</th>
                  </tr>
                </thead>
                <tbody class="tbody"></tbody>
            </table>

        </div>
    </div>
    
  </div>
</main>
@endsection
@section("javascript")
<script>
    (function($){

        $.ajax({
            url: "/api/user/home",
            type: "GET"
        })
        .done(function(data){
            $(".user-id").removeClass("load").text(data.user_id)
            $(".user-email").removeClass("load").text(data.email)
            initHistoryData(data.history)
        })

        function initHistoryData(data){

            if(data.length > 0){
                $(".music-table").show()
                data.map(function(item){
                    $(".tbody").append("<tr class='buy-item' data-id='"+item.music_id+"'><td class='mdl-data-table__cell--non-numeric'>"+item.music_title+"</td><td>"+item.album_title+"</td><td>"+item.band_name+"</td></tr>")
                })
            }else{
                $(".right-box").append("<p class='no-history'>購入したものはありません。<br/><br/><a href='/music'>音楽を探しに行きましょう！</a></p>")
            }
        }

        $(".music-table").on("click",".buy-item",function(){
            var id = $(this).data("id")
            location.pathname = "/music/"+id
        })

    })(jQuery)
</script>
@endsection
