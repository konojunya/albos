@extends('layouts.app')

@section('title')
TOP | albos
@endsection

@section('content')
<h1>hello</h1>
<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
<script>

(function($){

	$.ajax({
		url: "/api/user/home/history",
		type: "GET",
	})
	.done(function(data){
		console.log(data)
	})

})(jQuery)

</script>
@endsection
