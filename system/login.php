<!DOCTYPE html>
<HTML lang="de">
  <HEAD>
	<title>Messenger - Anmelden</title>
  	<link rel="stylesheet" href="css/login_style.css">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script src="js/login_js.js"></script>
  </HEAD>
  <BODY>
	<span id="loginbox">
		<div id="loginboxHeader">Messenger</div>
		<div id="loginboxContent">
			<div id="loginboxContentMargin">
				<input id="username" class="loginTextbox" type="text">
				<img src="img/username_icon.png" id="iconUsername" class="icon_medium"></img>
				</input>
				<br/>
				<br/>
				<input id="password" class="loginTextbox" type="password"></input>
				<img src="img/password_icon.png" id="iconPassword" class="icon_medium"></img>
				<br/>
				<br/>
				<input type="checkbox" class="checkbox" id="loginSavedata" checked/>
				<label for="loginSavedata" class="label">Anmeldedaten speichern</label>
				<br/>
				<br/>
				<a href="#" class="loginLink">Passwort vergessen?</a>
				<a href="#" class="loginLink">Registrieren</a>
				<br/>
				<br/>
				<br/>
				<input id="loginNow" class="loginButton"type="button" value="Einloggen"></input>
			</div>
		</div>
	</span>
  </BODY>
</HTML>

<script>
	/*var vague = $("#wallpaper").Vague({intensity:30});
	vague.blur();*/
</script>