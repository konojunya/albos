(function($){
	$.ajax({
		url: "/api/music",
		type: "GET"
	})
	.done(function(data){
		setTimeout(function(){
			$(".not-load").show()
			$(".loading").hide()
			updateView(data.albums)
		},1000)
	})

	var vm = new Vue({
		el: "#app",
		data: {
			music: []
		}
	})

	function updateView(albums){
		albums.map(function(i){
			i.artwork_path = "http://store.universal-music.co.jp/contents/shop/um/img/goods/G10/UPCH-20423.JPG"
		})
		console.log(albums)
		Vue.nextTick(function(){
			vm.music = albums
		})
	}

})(jQuery)