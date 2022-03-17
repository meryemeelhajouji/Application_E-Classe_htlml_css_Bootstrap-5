<?php

session_start();
require_once 'connection.php';

if (isset($_POST['login'])){
	if(empty($_POST['email_user']) || empty($_POST['password'])){
	
		$_SESSION["message_error"] = "Please fill in this field.";
		header("location: index.php");
		
	}else 
    {
		
		$email = $_POST['email_user'];
		$password = $_POST['password'];
		$req = "SELECT * FROM users WHERE email_user ='$email'";
		

		$ex = mysqli_query($conn,$req);
		if(mysqli_num_rows($ex) != 0){

		
		$res = mysqli_fetch_assoc($ex);	
		
	
			if(password_verify($password,$res['password'])==true){
				$_SESSION['name_user'] = $res['name_user'];
				if(isset($_POST['remember'])){
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
}	
			$name = $_POST["name_user"] ;
			$email =$_POST["email_user"] ;
			$password = $_POST["password1"] ;
			$conpassword = $_POST["password2"];

			if ($password != $conpassword){
			$_SESSION["message_error"] = "confirme password ";	
			}else{
			if(isset($_POST['Signup'])) {
				$hash = password_hash($conpassword, PASSWORD_DEFAULT);

			$user = "INSERT INTO users(name_user , email_user , password ) values ('$name','$email','$hash')";
			mysqli_query($conn,$user);
			header('location: signup.php');

   
		}
		}


    


?>