function isUsername(inputUsername){
	var regex =/^([a-zA-Z0-9])/;
	return regex.test(inputUsername);
}
function isUserpass(inputPassword){
	return inputPassword.length >4;
}



$(document).ready(function(){
	$('#userName').change(function(){
		var userName = $(this).val().trim();

		if(!isUsername(userName)){
			$(".UsernameError").html("Username cant be empty");
		} else {
			$(".UsernameError").html("");
		}
	});
	$('#userPass').change(function(){
		var userPass = $(this).val().trim();

		if(!isUserpass(userPass)){
			$(".UserpassError").html("Password cant be empty");
		} else {
			$(".UserpassError").html("");
		}
	});
});


