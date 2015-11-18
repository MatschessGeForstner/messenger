$(document).ready(function(){
	 $('body').keydown(function() {
		getKeyCode();
	 });

	function getKeyCode(event) {
	   event = event || window.event;
	   if (event.keyCode == "13") {
		loginNow();
	   }
	}
	
	$('#loginNow').click(function() {
		loginNow();
	});
	
	function loginNow() {
		$username = $('#username').val();
		$password = $('#password').val();
		$.post("php/login_check.php",
        {
          username: $username,
          password: $password
        },
        function(data){
			if(data == 'access') {
				$('body').load('index.php');
			}
			else {
				wiggle();
			}
		});
	};
	
	function wiggle() {
		setTimeout(function() {
			$('#loginNow').css("margin-left", "-5px");
			setTimeout(function() {
				$('#loginNow').css("margin-left", "5px");
					setTimeout(function() {
						$('#loginNow').css("margin-left", "-5px");
						setTimeout(function() {
							$('#loginNow').css("margin-left", "5px");
								setTimeout(function() {
									$('#loginNow').css("margin-left", "0px");
								}, 50);
							}, 50);
					}, 50);
				}, 50);
		}, 50);
	};
});