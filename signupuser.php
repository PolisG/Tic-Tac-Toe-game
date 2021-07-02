<!DOCTYPE HTML>
<html>
<head>
	<title>User Signup</title>
</head>
<body>
	<?php
		include("dbconnect.php");
		extract($_POST);
		
		$conn = mysqli_connect("$host","$user","$pass","$db");
		$rs = mysqli_query($conn,"select * from users where username='$name'");
		
		if (mysqli_num_rows($rs)>0)
		{
			echo "<br><br><br><div class=head1>Login ID Already Exists</div>";
			echo "<br><div class=head1><a href=login.php>Login</a></div>";
			exit;
		}
		
		$query="insert into users(id,username,password) values('','$name','$pass')";
		$rs = mysqli_query($conn,$query) or die ("Could Not Perform the Query");
		echo "<br><br><br><div class=head1>Your Login ID Created Sucessfully!</div>";
		echo "<br><div class=head1><a href=login.php>Login</a></div>";
	?>
</body>
</html>