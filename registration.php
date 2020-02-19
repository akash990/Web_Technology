<!DOCTYPE html>
<html>
<head>
	<title>Person profile</title>
</head>
<body>
	
	


	<center>
	<form method="POST" action="regcheck.php">
		
	<table border="1" width="100px" height="100px">
	    <tr height="50px">
			<td colspan="2" height="20px"><center><b>PERSON PROFILE</b><center></td>
			
		</tr>
		<tr>
			<td>Username:</td>
			<td><input type="text" name="uname" value=""/></td>
		</tr>
		<tr>
			<td>Email:</td>
			<td> <input type="text" name="uemail" value=""/></td>
		</tr>
		
		<tr>
			<td>DOB:</td>
			<td><input type="date" name="udob" value=""/></td>
		</tr>
		<tr>
			<td>Gender: </td>
			<td> 
				<input type="radio" name="gender" value="">Male 
				<input type="radio" name="gender" value="">Female
				<input type="radio" name="gender" value="">Other
			</td>
		</tr>
		<tr>
			<td>Blood Group:</td>
			<td>
				<select>
					<option>A+</option>
					<option>B+</option>
					<option>A-</option>
					<option>B-</option>
					<option>AB+</option>
					<option>O+</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Degree:</td>
			<td>
				<input type="checkbox" name="degree">SSC
				<input type="checkbox" name="degree">HSC
				<input type="checkbox" name="degree">BSC
				<input type="checkbox" name="degree">MSC
			</td>
		</tr>
		
		<tr>
			<td>Photo: </td>
			<td>
				<input type="file" name="photo" value="Browse">
			</td>
		</tr>
		<tr height="50px">
			<td colspan="2" </td>
			
		</tr>
		<tr height="50px">
			<td colspan="2" </td>
			<center><input type="submit" name="submit" value="Submit">
			<input type="Reset" name="reset" value="Reset"></center>
			
		</tr>
		
	</table>
	
	</form>
	</center>
</body>
</html>

<?php


?>