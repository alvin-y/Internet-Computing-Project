<?php
	session_start();
	
	if(!isset($_SESSION["name"])){
		header("Location: namePage.php");
	}
?>

<html>
	<head>
		<title> Chat Room </title>
		<link rel="stylesheet" href="css/startStyle.css">
		<meta charset="UTF-8">
	</head>
	<body class ="bg">
		<div id = "dabox" name ="box" >
			<label for ="box" class="title" >TempChat</label>
			<form action="#">
				<label for ="name" class="textlabel" >Nickname:</label>
				<input type="text" class ="textinput" id = "name" name="name" value="" placeholder="Enter a Nickname"><br>

				<label for ="roomid" class="textlabel" >Room ID:</label>
				<input type="text" class="textinput" id = "roomid"  name="roomid" value="" placeholder="(Optional)"><br>

				<input type="button" class ="button" id="create" value="Create Room">
				<input type="submit" class ="button" id="join" value="Join Room">
			</form>
		</div>
		<script src="js/startroom.js"></script>
	</body>

</html>