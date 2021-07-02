<?php

/***
* File: index.php
* Author: Georgiadis Polychronis
* Created: 2.1.2020
* Description: PHP/AJAX/MySQL 2 player tic tac toe game
***/

require_once('dbconnect.php');
require_once('oop/class.game.php');
require_once('oop/class.tic-tac-toe.php');

//this will store their information as they refresh the page
session_start();

if( ! isset($_SESSION['username'])) {
	header('Location: login.php');
	exit;
}
?>

<html>
<head>
	<title>Tic Tac Toe</title>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<script language="Javascript" src="jquery/jquery-3.4.1.js"></script>
	<script language="Javascript" src="js/tic-tac-toe.js"></script>
</head>
<body>
	<?php
		if($_SESSION["username"]) {
	?>
	Welcome <?php echo $_SESSION["username"]; ?>. Click here to <a href="logout.php" tite="Logout">logout.</a>
	<?php
		} else echo "<h2>Please login first!</h2>";
	?>
	<div id="content">
		<h2>Let's Play Tic-Tac-Toe!</h2>
		<center>Loading Tic-Tac-Toe.... please wait!</center>
	</div>
</body>
</html>