<!DOCTYPE html>
<HTML lang="de">
  <HEAD>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/chat_style.css">
	<script src="js/chat_js.js"></script>
  </HEAD>
  <BODY>
	<div id="chatInfo">
		<img src="../data/portraits/profile1.jpg" class="img_round" style="margin-right: 10px;"></img>
			<div id="userInfo">
				User
				<div id="userstatus">Online</div>
			</div>
			<div id="options">
				<img src="img/options_icon.png" class="icon_medium" style="margin-right: 10px;"></img>
			</div>
	</div>
	<div id="content">
		<div class="chatLeft">
			<img src="../data/portraits/profile1.jpg" class="img_round" style="margin-right: 10px;"></img>
			<div class="bubble">
					Hallo, wie gehts?
					<span class="time">13:30</span>
					<img src="img/ticks_icon.png" class="icon_minimal"></img>
			</div>
		</div>
		<div class="chatRight">
			<div class="bubble">
					Hey, super dir?
					<span class="time">13:31</span>
					<img src="img/ticks_icon.png" class="icon_minimal"></img>
			</div>
			<img src="../data/portraits/profile2.jpg" class="img_round" style="margin-left: 10px;"></img>
		</div>
		<div class="chatLeft">
			<img src="../data/portraits/profile1.jpg" class="img_round" style="margin-right: 10px;"></img>
			<div class="bubble">
					Danke, super. Ich bin gerade am Arbeiten für einen Chat (ein Projekt für die Schule).
					<span class="time">13:31</span>
					<img src="img/ticks_icon.png" class="icon_minimal"></img>
			</div>
		</div>
		<div class="chatRight">
			<div class="bubble">
					Cool ;)
					<span class="time">13:32</span>
					<img src="img/ticks_icon.png" class="icon_minimal"></img>
			</div>
			<img src="../data/portraits/profile2.jpg" class="img_round" style="margin-left: 10px;"></img>
		</div>
		<div class="chatRight">
			<div class="bubble">
					Ich probier die Umlaute aus AÖÜ aöü ß.
					<span class="time">13:34</span>
					<img src="img/ticks_icon.png" class="icon_minimal"></img>
			</div>
			<img src="../data/portraits/profile2.jpg" class="img_round" style="margin-left: 10px;"></img>
		</div>
		<div class="chatLeft">
			<img src="../data/portraits/profile1.jpg" class="img_round" style="margin-right: 10px;"></img>
			<div class="bubble">
					Gut, die funktionieren :D
					<span class="time">13:34</span>
					<img src="img/ticks_icon.png" class="icon_minimal"></img>
			</div>
		</div>
		<div class="chatRight">
			<div class="bubble">
					Was machst du heute noch so?
					<span class="time">13:36</span>
					<img src="img/ticks_icon.png" class="icon_minimal"></img>
			</div>
			<img src="../data/portraits/profile2.jpg" class="img_round" style="margin-left: 10px;"></img>
		</div>
		<div class="chatLeft">
			<img src="../data/portraits/profile1.jpg" class="img_round" style="margin-right: 10px;"></img>
			<div class="bubble">
					Mal schauen, vielleicht fernsehen!
					<span class="time">13:36</span>
					<img src="img/ticks_icon.png" class="icon_minimal"></img>
			</div>
		</div>
		<div class="chatRight">
			<div class="bubble">
					Okay, cool.
					<span class="time">13:40</span>
					<img src="img/tick_icon.png" class="icon_minimal"></img>
			</div>
			<img src="../data/portraits/profile2.jpg" class="img_round" style="margin-left: 10px;"></img>
		</div>
	</div>
	<div id="chatInput">
		<img src="img/smiley_icon.png" class="icon_medium" style="margin-right: 10px;"></img>
		<input type="text" class="textbox color_grey" placeholder="Schreiben..."></input>
		
		<div id="attach">
			<div id="attachButton">
				<img src="img/attach_icon.png" class="icon_medium"></img>
			</div>
			<div id="attachFile">
				<input type="file" id="attachNow"/>
				<img src="img/add_icon.png" class="icon_medium"></img>
			</div>
		</div>
						
	</div>
  </BODY>
</HTML>