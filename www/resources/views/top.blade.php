@extends('layouts.app')

@section('title')
TOP | albos
@endsection

@section('css')
<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
<link rel="stylesheet" href="/assets/css/top.css">
@endsection

@section('content')


<div class="main-visual">
	<!-- <div class="row-top"></div> -->
	<!-- <div class="row-middle"></div> -->
	<!-- <div class="row-bottom"></div> -->
</div>

<div class="album-container">
	<div class="container-title">アルバム</div>
	<div class="album-content">
		
	</div>
</div>

<div class="single-container">
	<div class="container-title">シングル</div>
	<div class="album-content">
		
	</div>
</div>	

@endsection

@section('javascript')
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
<script src="/assets/js/top.js"></script>
@endsection
