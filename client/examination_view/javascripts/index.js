(function($){

	(function init(){
		var height = $(".mdl-layout__header").outerHeight();
		var tabsHeight = $(".tabs").outerHeight();
		$(".tabs").css("top",height);
		$(".music_accept_list").css("padding-top",tabsHeight)
	})()

	/*
	*		曲一覧
	*/
	new Vue({
		el: "#app",
		data: {
			tabList: [
				{ tabName: "All", isActive: true },
				{ tabName: "Accepted", isActive: false },
				{ tabName: "Not Accepted", isActive: false}
			],
			music: [
				{ id: (~(Math.random()*10000) + Date.now()).toString(36), title: "hoge", isAccepted: false },
				{ id: (~(Math.random()*10000) + Date.now()).toString(36), title: "2", isAccepted: true },
				{ id: (~(Math.random()*10000) + Date.now()).toString(36), title: "3", isAccepted: false },
				{ id: (~(Math.random()*10000) + Date.now()).toString(36), title: "4", isAccepted: true },
				{ id: (~(Math.random()*10000) + Date.now()).toString(36), title: "5", isAccepted: true },
				{ id: (~(Math.random()*10000) + Date.now()).toString(36), title: "6", isAccepted: false },
				{ id: (~(Math.random()*10000) + Date.now()).toString(36), title: "7", isAccepted: false },
				{ id: (~(Math.random()*10000) + Date.now()).toString(36), title: "8", isAccepted: true },
				{ id: (~(Math.random()*10000) + Date.now()).toString(36), title: "9", isAccepted: false },
				{ id: (~(Math.random()*10000) + Date.now()).toString(36), title: "10", isAccepted: true },
				{ id: (~(Math.random()*10000) + Date.now()).toString(36), title: "11", isAccepted: true },
				{ id: (~(Math.random()*10000) + Date.now()).toString(36), title: "12", isAccepted: true },
				{ id: (~(Math.random()*10000) + Date.now()).toString(36), title: "13", isAccepted: true },
				{ id: (~(Math.random()*10000) + Date.now()).toString(36), title: "14", isAccepted: true },
				{ id: (~(Math.random()*10000) + Date.now()).toString(36), title: "15", isAccepted: true },
				{ id: (~(Math.random()*10000) + Date.now()).toString(36), title: "16", isAccepted: true },
				{ id: (~(Math.random()*10000) + Date.now()).toString(36), title: "17", isAccepted: true },
				{ id: (~(Math.random()*10000) + Date.now()).toString(36), title: "18", isAccepted: true },
				{ id: (~(Math.random()*10000) + Date.now()).toString(36), title: "19", isAccepted: true },
			]
		},
		methods: {
			toggleCheck: function(x){
				console.log(x)
			}
		}
	})

})(jQuery);