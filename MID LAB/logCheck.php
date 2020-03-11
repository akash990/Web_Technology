<?php
	session_start();
	
	if( isset($_REQUEST['submit'])){
		$uname = $_REQUEST['uname'];
		$password =  $_REQUEST['password'];
		
		if(empty(trim($uname)) || empty(trim($password))){
			echo "Null submission found!";
		}else{

			$file = fopen('userA.txt', 'r');
			$user = fread($file, filesize('userA.txt'));
			$data = explode('|', $user);

			if( trim($data[0]) == $uname && trim($data[1]) == $password){
				//$_SESSION['uname'] = $uname;
				//$_SESSION['pass'] = $password;
				setcookie('username', $uname, time()+3600, '/');

				header("location: homepageA.php");
			}else{
				echo "invalid uname/password";
			}
		}

	}else{
		//echo "invalid request! please login first!";
		header("location: login.php");
	}
?>