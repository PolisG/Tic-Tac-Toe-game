<?php

/***
* File: login.php
* Author: Georgiadis Polychronis
* Created: 13.1.2020
* Description: Log in
***/

session_start();

include("dbconnect.php");
extract($_POST);

$conn = mysqli_connect("$host","$user","$pass","$db");
if(isset($submit))
{
	$rs = mysqli_query($conn,"select * from users where username='$username' and password='$password'");
	if(mysqli_num_rows($rs)<1)
	{
		$found="N";
	}
	else
	{
		$_SESSION["username"]=$username;
	}
}

if (isset($_SESSION["username"]))
{
	header('Location: index.php');
	exit;
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta name="viewport" content="wusernameth=device-wusernameth, initial-scale=1">
	<link rel="stylesheet" href="style.css">
</head>
<body>
<center>
	<div class="floating-box">
		<h2>Sign in</h2>
		<form name="form1" method="post">
			<label for="uname">Username</label>
			<input type="text" id="loginusername" name="username"><br><br>
			
			<label for="pwd">Password</label>
			<input type="password" id="password" name="password"><br><br>
			<input type="submit" id="submit" name="submit" value="Log In"><br>
			
			<p>New User? <a href="signup.php">Register Here</a></p>
			<?php
				if(isset($found))
				{
					echo '<p class="w3-center w3-text-red">Invalid username or password<br>Please try again</p>';
				}
			?>
		</form>
	</div>
</center>
</body>
</html>