@extends('layouts.app')

@section('title')
404 Not Found | albos
@endsection

@section('css')
<link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
<style>
    .content {
        color: #B0BEC5;
        font-weight: 100;
        font-family: 'Lato';
        text-align: center;
        display: table-cell;
    }

    .title {
        font-size: 72px;
        margin-bottom: 40px;
    }
</style>
@endsection

@section('content')
<div class="content">
    <div class="title">404 Not Found</div>
</div>
@endsection
