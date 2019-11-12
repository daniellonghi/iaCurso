'use strict'

var IndexPage = {
	itemSubmit: () => {
		$("#item-submit").submit((e) => {
			e.preventDefault();
			var formData = new FormData($("#item-submit")[0]);
			$.ajax({
	            type:'POST',
	            url: $(this).attr('action'),
	            data: formData,
	            cache: false,
	            contentType: false,
	            processData: false,
	            success:function(data){
	                console.log("success");
	                console.log(data);
	            },
	            error: function(data){
	                console.log("error");
	                console.log(data);
	            }
	        });
		});
	},
	ready: () => {
		IndexPage.itemSubmit();
	}
}

$(window).load(function(){
	// IndexPage.ready();
})