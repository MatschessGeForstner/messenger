$(document).ready(function(){
	$('#loginNow').click(function() {
		$username = $('#username').val();
		$password = $('#password').val();
		$.post("php/login_check.php",
        {
          username: $username,
          password: $password
        },
        function(data){
			alert(data);
		});
	});
});