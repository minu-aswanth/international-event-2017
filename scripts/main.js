$(document).ready(function(){

	$(document).scrollTop(1);

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
	$("#backgroundIntroductionLeft").css({'height':($(document).height()+'px')});
	$("#backgroundIntroductionRight").css({'height':($(document).height()+'px')});
});