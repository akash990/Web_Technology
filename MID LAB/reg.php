<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>REGISTRATION FORM</title>
</head>
<body>
	
	
			
	
	
	<form method="POST" action="regCheck.php">
	<fieldset>
		<legend><h1>REGISTRATION</h1></legend>
			ID<br/><input type="number" name="uid" value=""><br/>
			Password<br/><input type="password" name="password" value=""><br/>
			Confirm Password<br/><input type="password" name="password" value=""><br/>
			Name<br/><input type="text" name="uname" value=""><br/><br/>
			
			
				<input type="submit" name="submit" value="Sign Up"><a href="login.php">Sign In</a>	
			
	</fieldset>
	</form>
</body>
</html>