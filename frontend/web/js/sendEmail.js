function sendEmail(){
	$.ajax({
		type: "POST",
		url: "/site/emailajax",
		data: "name="+$('#name').val()+
			"&email="+$('#email').val()+
			"&subject="+$('#subject').val()+
			"&message="+$('#message').val(),
		success: function(response){
			$('#responseEmail').html(response);
		}
	});
};