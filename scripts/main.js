$(document).ready(function(){

	$(document).scrollTop(0);

	$(".menuLink").on("click", function(){
		$(document).scrollTop(0);
	});

	$(document).on("click", "#submitButton", function(){
		$.ajax({ 
 			type:"POST",
			url:"PHP/register.php",
			data: $("#registrationForm").serialize(),
			success: function(response){
				$('#successMessage').css("display", "block");
				$('#registrationForm').css("display", "none");
			}
		});
	}); 
});

$(window).on("resize", function(){
	$("#backgroundIntroduction").css({'height':($("#introduction").height()+200+'px')});
});