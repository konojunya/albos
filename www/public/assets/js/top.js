(function($){

	
	var imagePath = ["0000000001.jpg","0000000002.jpg","0000000002.jpg","0000000002.jpg","0000000002.jpg","0000000002.jpg","0000000002.jpg","0000000002.jpg","0000000002.jpg","0000000002.jpg","0000000002.jpg","0000000002.jpg","0000000002.jpg","0000000002.jpg","0000000002.jpg","0000000002.jpg"];
	var numberOfImages = imagePath.length;
	console.log("hoge");
	for (var i = 0; i < numberOfImages; i++) {
		var image = "<img src='/assets/images/"+imagePath[i]+"'>";
		$(".row-top").append("<div class='image-cell'>"+image+"</div>");
	}

	for (var i = 0; i < numberOfImages; i++) {
		var image = "<img src='/assets/images/"+imagePath[i]+"'>";
		$(".row-middle").append("<div class='image-cell'>"+image+"</div>");
	}

	for (var i = 0; i < numberOfImages; i++) {
		var image = "<img src='/assets/images/"+imagePath[i]+"'>";
		$(".row-bottom").append("<div class='image-cell'>"+image+"</div>");
	}

	$('.row-top').flickity({
	  	// options
	  	cellAlign: 'left',
	  	contain: true,
	  	wrapAround: true,
	  	autoPlay: 2000,
	  	friction: 1,
	  	prevNextButtons: false,
	  	rightToLeft: true
	});
	$('.row-middle').flickity({
	  	// options
	  	cellAlign: 'left',
	  	contain: true,
	  	wrapAround: true,
	  	autoPlay: 2000,
	  	friction: 1,
	  	prevNextButtons: false
	});
	$('.row-bottom').flickity({
	  	// options
	  	cellAlign: 'left',
	  	contain: true,
	  	wrapAround: true,
	  	autoPlay: 2000,
	  	friction: 1,
	  	prevNextButtons: false,
	  	rightToLeft: true
	});

})(jQuery)

