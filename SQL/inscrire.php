<?php
    session_start();
    if(isset($_SESSION['name_user'])){
      header("location: dashboard.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign in</title>
  <link rel="stylesheet" href="css/sign_in.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
 </head>
    
<body>
  <main>
     <div class="login d-flex justify-content-center align-items-center">
      <div class="bg-white p-3   rounded-3 login_content ">
       
          <div class=" mb-4">
            <h1 class="border-start px-2 m-3 border-info border-5 fw-bold fs-3">
               E-classe
            </h1>
          </div>
          <div class=" text-center ">
            <h2 class="text-uppercase fs-5"> Sign up </h2>
            <p class=" text-muted "> Enter your information  to register a new accont</p>   
          </div>
    
    
     <?php 
            if(isset($_SESSION['message_error'])){

                echo "<div class='alert alert-danger' role='alert'>";
                echo  $_SESSION["message_error"];
              //  A simple danger alert—check it out!
                echo "</div>";
                $_SESSION["message_error"] = null;
            }      
     
     ?>
         <form  action="function.php" method="POST">
          
         <label for="name" class="form-label">Name </label>
            <input type="text" class="form-control  "id="name"  name="name_user" value="" placeholder="Entre your Name" requi>

            <label for="email" class="form-label">Email </label>
            <input type="email" class="form-control  "id="email"  name="email_user" value="" placeholder="Entre your Name">
         
            <label for="password1" class="form-label">Password</label>
            <input type="password" class="form-control mb-4" name = "password1"  value="" id="password" placeholder="Entre your password">
          
            <label for="password2" class="form-label">Confirme Password</label>
            <input type="password" class="form-control mb-4" name = "password2"  value="" id="password" placeholder="Confirme your Password">
          

          <button type="submit" class="btn  btn-info w-100 text-white text-uppercase  " name="Signup"> 
          Sign up
          </button>
          <div class="mt-3 text-center">
            <span class="text-muted">
            have already an account? 
            </span>
             <a class="text-info text-decoration-underline" href="index.php"> <span>Login her </span></a> 
          </div>
        </form>
      </div>
    </div>
  </main>
  <script src="script.js"> </script>
</body>

</html>