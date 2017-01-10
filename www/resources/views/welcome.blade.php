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

	// これであってる？？
	var data = {
      	user_id: "kinokoruumu",
        user_name: "西川和希",
        credit_card_number: "1234-5678-9012-3456",
        email: "kinokoruumu416@yahoo.co.jp",
        password: "111111"
    }
	// $.ajax({
	// 	url: "/api/user/home/edit",
	// 	type: "GET",
	// 	data: data
	// })
	// .done(function(data){
	// 	console.log(data)
	// })

	$.ajax({
		url: "/api/music/detail",
		type: "GET",
		data: {
			album_id: "0000000001"
		}
	})
	.done(function(data){
		console.log(data)
	})

	

	// $.ajax({
	// 	url: "/api/user/home",
	// 	type: "GET",
	// })
	// .done(function(data){
	// 	console.log(data)
	// })

})(jQuery)

</script>
@endsection
