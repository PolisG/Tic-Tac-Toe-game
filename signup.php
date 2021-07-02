<!DOCTYPE HTML>
<html>
<head>
	<title>New user signup</title>
	
	<script language="javascript">
		function check()
		{
			if(document.form1.name.value=="")
			{
				alert("Plese enter your name");
				document.form1.name.focus();
				return false;
			}
			
			if(document.form1.pass.value=="")
			{
				alert("Plese enter your password");
				document.form1.pass.focus();
				return false;
			}
			
			if(document.form1.cpass.value=="")
			{
				alert("Plese confirm your password");
				document.form1.cpass.focus();
				return false;
			}
			
			if(document.form1.pass.value!=document.form1.cpass.value)
			{
				alert("Password does not match");
				document.form1.cpass.focus();
				return false;
			}
			
			return true;
		}
	</script>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>
<center>
	<div class="floating-box">
		<form name="form1" method="post" action="signupuser.php" onSubmit="return check();">
			<label for="uname">Username</label>
			<input type="text" id="name" name="name"><br><br>
			
			<label for=""pwd">Password</label>
			<input type="password" id="pass" name="pass"><br><br>
			
			<label for=""pwd">Confirm password</label>
			<input type="password" id="cpass" name="cpass"><br><br>

			
			<input type="submit" name="submit" value="Sign Up">
			<p>Already registered?<br> <a href="login.php">Log in here</p>
		</form>
	</div>
</center>
</body>
</html>