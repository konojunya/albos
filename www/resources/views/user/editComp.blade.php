@extends('layouts.app')

@section('title')
マイページ編集完了 | albos
@endsection

@section('css')
<link rel="stylesheet" href="/assets/css/mypage_edit.css">
@endsection

@section('content')
<main class="mdl-layout__content">
  <div class="page-content" id="app">

    <div class="wrapper clearfix">
        <div class="left-box">
            @include('user.userInfo')
        </div>
        <div class="right-box">
            @include('user.editResult')
        </div>
    </div>
  </div>
</main>
@endsection
