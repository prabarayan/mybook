$(document).ready(function(){

	jQuery.validator.addMethod("validEmail", function(value, element) 
	{
		return /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(value);
	}, "Please enter valid email.");
	
	
	$("#signin").validate({
		rules: {
				password: {
					required: true
				},
				email: {
					required: true,
					validEmail: true
				},
			},
		messages: {
				password: {
					required: "Please provide a password",
				},
				email: {
					required: "Please enter email address",
					email: "Please enter a valid email address"
				},
			}
	});
	
});