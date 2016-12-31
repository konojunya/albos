/*
*		曲一覧
*/
new Vue({
	el: "#app",
	data: {
		music: [
			{ imageUrl: "http://cdfront.tower.jp/~/media/Images/Article/News/2013/Japanese/R/RADWIMPS/RADWIMPS_201311A.jpg" },
			{ imageUrl: "http://cdfront.tower.jp/~/media/Images/Article/News/2013/Japanese/R/RADWIMPS/RADWIMPS_201311A.jpg" },
			{ imageUrl: "http://cdfront.tower.jp/~/media/Images/Article/News/2013/Japanese/R/RADWIMPS/RADWIMPS_201311A.jpg" },
			{ imageUrl: "http://cdfront.tower.jp/~/media/Images/Article/News/2013/Japanese/R/RADWIMPS/RADWIMPS_201311A.jpg" },
			{ imageUrl: "http://cdfront.tower.jp/~/media/Images/Article/News/2013/Japanese/R/RADWIMPS/RADWIMPS_201311A.jpg" },
			{ imageUrl: "http://cdfront.tower.jp/~/media/Images/Article/News/2013/Japanese/R/RADWIMPS/RADWIMPS_201311A.jpg" },
			{ imageUrl: "http://cdfront.tower.jp/~/media/Images/Article/News/2013/Japanese/R/RADWIMPS/RADWIMPS_201311A.jpg" },
			{ imageUrl: "http://cdfront.tower.jp/~/media/Images/Article/News/2013/Japanese/R/RADWIMPS/RADWIMPS_201311A.jpg" },
			{ imageUrl: "http://cdfront.tower.jp/~/media/Images/Article/News/2013/Japanese/R/RADWIMPS/RADWIMPS_201311A.jpg" },
			{ imageUrl: "http://cdfront.tower.jp/~/media/Images/Article/News/2013/Japanese/R/RADWIMPS/RADWIMPS_201311A.jpg" },
			{ imageUrl: "http://cdfront.tower.jp/~/media/Images/Article/News/2013/Japanese/R/RADWIMPS/RADWIMPS_201311A.jpg" },
		]
	}
})

/*
*		masonry
*/
var $grid = $("#app").masonry({
	itemSelector: ".music-card",
	fitWidth: true
})

$grid.imagesLoaded().progress(function(){
	$grid.masonry("layout")
})

console.log(console)