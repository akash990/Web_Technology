<?php
	
	
	if(isset($_REQUEST['submit'])){
		$name = $_REQUEST['name'];
		$email =  $_REQUEST['email'];
		$dob =  $_REQUEST['dob'];
		$gender =  $_REQUEST['gender'];
		$degree =  $_REQUEST['degree'];
		$photo =  $_REQUEST['photo'];
		
		
		if(empty($name) || empty($email) ||empty($dob)||empty($gender)||empty($degree)||empty($photo)){
			echo "You must fill up all information";
		}else{
               echo $name;
			   echo $email;
			   echo $dob;
			   echo $gender;
			   echo $degree;
			   echo photo;
			   

			
		}

	}else{
		//echo "invalid request! please fill up information first!";
		header("location: regcheck.php");
	}
?>