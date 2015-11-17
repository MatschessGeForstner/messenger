<!DOCTYPE html>
<HTML lang="de">
  <HEAD>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/index_style.css">
	<link rel="stylesheet" href="css/special/ripple_effect_style.css">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script src="js/index_js.js"></script>
	<title>Messenger</title>
  </HEAD>
  <BODY>
  <div id="overlay"></div>
  <div id="container">
		<div id="containerLeft">
			<table class="tableNavigation">
				<tr>
					<td id="toContacts" class="ripple">Kontakte</td>
					<td id="toGroups" class="ripple">Gruppen</td>
				</tr>	
			</table>
		<div id="containerLeftSearch">
			<input type="text" class="textbox color_green" placeholder="Suchen..."></input>
			<img src="img/search_icon.png" class="icon_medium"></img>
		</div>
		<div id="contacts"></div>
		</div>
		<div id="containerRight">
			<table class="tableNavigation">
				<tr>
					<td id="toChat" class="ripple">Chat</td>
					<td id="toMedia" class="ripple">Medienbox</td>
					<td id="toProfile" class="ripple">Profil</td>
					<td class="test">
						<div id="me">
							<img src="../data/portraits/profile.png" class="img_round ripple"></img>
						</div>
						<div id="logout">
							<img src="img/logout_icon.png" class="icon_medium"></img>
						</div>
						<div id="notifications">
							<img src="img/notification_icon.png" class="icon_medium"></img>
						</div>
						<div id="add">
							<img src="img/add_icon.png" class="icon_medium"></img>
						</div>
					</td>
				</tr>	
			</table>
			<div class="content"></div>
		</div>
	</div>
	
	
	<div id="popup">
		<div id="popupHeader">Kontaktsuche
			<img src="img/close_icon.png" id="popupClose" class="icon_medium"></img>
		</div>
		<div id="popupContent">
			<span class="infoText">Über die Kontaktsuche kannst du neue Kontakte hinzufügen. Gib den Kontaktnamen oder die ID ein:</span>
			<br/>
			<br/>
			<input type="text" id="addContactname" class="textbox short color_white"></input>
			<img src="img/search2_icon.png" class="icon_medium"></img>
		</div>
		<div id="popupFooter">
			<input type="button" class="button_small" value="Abbrechen"/>
			<input type="button" class="button_small" value="Ok"/>
		</div>
	</div>
	
  </BODY>
</HTML>