
<?php
	session_start();
	

	

	?>
	
<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
</head>
<body>

		Registration <?php if(isset($_SESSION['pass'])){ echo $_SESSION['pass'];} ?>
<form method="POST" action="valid.php">


<table border="1">


<tr>
<td colspan="2">
<center><h1>PERSON PROFILE</h1></center>
</td>
</tr>

	
	
	
	
		<tr>
			<td>Name:</td>
			<td><input type="text" name="name" value="" size="5" /></td>
		</tr>
		<tr>
			<td>Email</td>
			<td> <input type="text" name="email" value=""/></td>
		</tr>
		<tr>
			<td>Gender: </td>
			<td> 
				<input type="radio" name="gender" value="">Male 
				<input type="radio" name="gender" value="">Female
				<input type="radio" name="gender" value="">Other
			</td>
		</tr>
			<td>DOB:</td>
			<td><input type="date" name="" value=""/></td>
		</tr>
		
		
		<tr>
			<td>BG:</td>
			<td>
				<select>
					<option>A+</option>
					<option>B+</option>
					<option>A-</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Degree</td>
			<td>
				<input type="checkbox" name="">SSC
				<input type="checkbox" name="">HSC
				<input type="checkbox" name="">BSC
			</td>
		
		<tr>
			<td>Photo</td>
			<td>
			<input type="button" name="" value="Browse">
				
			</td>
		
		</tr>
		<tr>
		<td colspan="2">
			
			
				
				<center><input type="submit" name="submit" value="Submit">
				<input type="reset" name="" value="Reset">
		</td>	
		</tr>
	</table>
	
	</form>
</body>
</html>