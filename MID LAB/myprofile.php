<?php	
	session_start();
	 if(!isset($_COOKIE['username'])){  
		header("location: loginA.php");
	}
		
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Your information</title>
</head>
<body>
<fieldset>
		<legend><h1>Your information</h1></legend>
		<table border="1">
		<tr>
		
			<td colspan="3"><center>Users</center></td>
		</tr>
		<tr>
			<td>ID</td>
			<td>NAME</td>
			<td>profession</td>
		</tr>
		<tr>
			<td>15-10101-1</td>
			<td>Bob</td>
			<td>student</td>
		
		
		
			
		 <div align="left"><a href="homepageA.php">Back</a></div>

 
		</fieldset>
		</body>
		</html>