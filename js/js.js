$(document).ready(function() {

	$(".form").submit(function() {
		$('.send-message').delay(300).css({'visibility': 'visible'}).animate({'opacity':'1'}, 1200);  
		$('.send-message').delay(1200).animate({'opacity':'0'}, 1200, function () {   
			$(this).css({'visibility': 'hidden'})  });
		$('#popup').animate({'opacity':'0'}, 600, function () {   
			$(this).css({'visibility': 'hidden'})  });

		$.ajax({
			type: "POST",
			url: "php/mail.php",
			data: $(this).serialize()
		}).done(function() {
			$(this).find("input").val("");
			
			
			$(".form").trigger("reset");
		});
		return false;
	});
	$(".button-popup").on("click", function() {
     $('#popup').animate({'opacity':'1'}, 600).delay(200).css({'visibility': 'visible'})
   	});
	$(".popup-close").on("click", function() {
     $('#popup').animate({'opacity':'0'}, 600, function () {   
			$(this).css({'visibility': 'hidden'}) });  });

});