<?php
	session_start();
	
	if(!isset($_SESSION["name"])){
		header("Location: namePage.php");
	}
?>

<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/chatStyle.css">
		<title> CP476 - Project </title>
	</head>

	<body>
		<div class="mainBox">
			<div class="IDBar" id="IDBar">
				<h2 id="roomID">Room ID: </h2>
			</div>

			<div class="chatBox" id="chatBox">

			</div>
			
			<div class="userChat">
				<input type="text" class="textInput" id = "message"  name="message" value="" placeholder="Message">
				<button class="sendButton" id="send">Send</button>
			</div>
		
		</div>
		
		<div class ="userList">
		<h5>User List:</h5>
		</div>
		<script src="js/chatroom.js"></script>
	</body>
	
</html>
