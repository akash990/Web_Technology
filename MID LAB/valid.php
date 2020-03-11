<?php
	session_start();
	
	

	if( isset($_REQUEST['submit'])){
		
	$uname=$_REQUEST['name'];
	$uemail=$_REQUEST['email'];
	

	
	if (empty(trim($uname))) {
   
	echo"null name";
  }
  
   else{ if (filter_var($email, FILTER_VALIDATE_EMAIL)==true){
      $uname = "Invalid";
	  echo $uname."<br>";
  } 
    else{
	echo $uname."<br>";
	}
	
   }
  
  
  
	}
	
	if (empty(trim($uemail))) {
   
	echo"null email";
  }
  
   else{ if (!preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/", $uemail)) {
      $uemail = "Invalid";
	  echo $uemail."<br>";
  } 
    else{
	echo $uemail."<br>";
	}
	
   }
  
  
	
	
	
		
	
?>	