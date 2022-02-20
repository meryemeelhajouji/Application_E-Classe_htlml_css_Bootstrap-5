<?php

session_start();
require_once 'connection.php';
$remember = $_POST['remember'] ;
if (isset($_POST['login'])){
	if(empty($_POST['email_user']) || empty($_POST['password'])){
	
		$_SESSION["message_error"] = "Please fill in this field.";
		header("location: index.php");
		
	}else 
    {
		
		$email = $_POST['email_user'];
		$password = $_POST['password'];
		$req = "SELECT * FROM users WHERE email_user ='$email' and  password ='$password'";
		$ex = mysqli_query($conn,$req);
		$res = mysqli_fetch_assoc($ex);	
			if($res){
				$_SESSION['name_user'] = $res['name_user'];
				if($remember == 'on'){
					setcookie("email_user", $_POST['email_user'],time() + 3600);
					setcookie("password", $_POST['password'],time() + 3600);
				}else{
					setcookie("email_user");
					setcookie("password");
				}
				
				header("location: dashboard.php");
                
			}else
			{
				$_SESSION["message_error"] = "email or password incorrecte";
				header("location: index.php");
			}
	}
}

 
    


?>