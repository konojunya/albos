(function($){

	$(".top-view").flickity({
		cellAlign: "center",
		wrapAround: true,
		contain: true,
		autoPlay: 3000,
		pageDots: false,
		prevNextButtons: false
	})

	$.ajax({
		url: "/api/music",
		type: "GET"
	})
	.done(function(data){
		updateView(data.albums)
	})

	var vm = new Vue({
		el: "#app",
		data: {
			music_new: [],
			music_topic: [],
			music_release: []
		}
	})

	function updateView(albums){
		var albums = albums.divide(21)
		Vue.nextTick(function(){
			vm.music_new = albums[0]
			vm.music_topic = albums[1]
			vm.music_release = albums[2]
		})
	}

	Array.prototype.divide = function(n){
    var ary = this;
    var idx = 0;
    var results = [];
    var length = ary.length;

    while (idx + n < length){
        var result = ary.slice(idx,idx+n)
        results.push(result);
        idx = idx + n
    }

    var rest = ary.slice(idx,length+1)
    results.push(rest)
    return results;
}


})(jQuery)