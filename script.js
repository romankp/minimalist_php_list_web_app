$(document).ready(function(){

	$("#add_trigger").click(function(){

		// $("#add_form").slideToggle(200);


		if($(this).hasClass("showing")){
			
			$(this).removeClass("showing")
			
			$("#add_bar").animate({
				"left": "-100%"
			},500,function(){
				$("#add_bar").hide()
			});
		}
		else{
			$("#add_bar").show()
			$(this).addClass("showing")
			$("#add_bar").animate({
				"left": "-.5%"
			},500);

		}
		
		// //slideUp() slideDown() slideToggle()
		// $("#container").slideToggle(1000);

	});



		// //slideUp() slideDown() slideToggle()
		// $("#container").slideToggle(1000);

	// });

	$(".err_button").click(function(){

		$(".error").toggle();

	});

	$(".item").click(function(){

		$(this).next().slideToggle(200);

	});

});