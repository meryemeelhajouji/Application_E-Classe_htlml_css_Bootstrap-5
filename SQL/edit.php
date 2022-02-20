
<!DOCTYPE html>
<html lang="en">

 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>update</title>
  <link rel="stylesheet" href="css/sign_in.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
 </head>
    
<body>
<?php
   
   require_once 'connection.php';
   $id = $_GET['id'];
   $read_student = "SELECT * FROM students WHERE id = $id";
   $res = mysqli_query($conn,$read_student);
  $row = mysqli_fetch_assoc($res);

    $image = $row['image'];
   $name = $row['name'];
   $email = $row['email'];
   $phone = $row['phone'];
   $nb = $row['enroll_number'];
   $datead = $row['date_admission'];
    

   
  
  
?>
  <main>
     <div class=" bg-info d-flex justify-content-center align-items-center ">
      <div class="bg-light col-lg-5 p-5 rounded-3  ">
       
         
          <div class=" text-center ">
            <h2 class="text-uppercase fs-5">update student </h2>


          </div>
         <form  action="" method = "POST">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Image </label>
            <input type="file" class="form-control" id="exampleInputEmail1"placeholder="Entre your image" name="image"  value="<?php echo $image; ?>">
          
            <label for="exampleInputPassword1" class="form-label">Name</label>
            <input type="tex" class="form-control "id="exampleInputPassword1"  placeholder="Entre your name" name="name"  value="<?php echo $name; ?>"> 
         
            <label for="exampleInputEmail1" class="form-label">Email </label>
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Entre your email" name="email"  value="<?php echo $email; ?>" >
          
            <label for="exampleInputEmail1" class="form-label">Phone </label>
            <input type="text" class="form-control" id="exampleInputEmail1"  placeholder="Entre your phone" name="phone"   value="<?php echo $phone; ?>">
          
            <label for="exampleInputEmail1" class="form-label">Enroll Number </label>
            <input type="text" class="form-control" placeholder="Entre your Enroll" id="exampleInputPassword1"   name="nb"  value="<?php echo $nb; ?>">
       
         
            <label for="exampleInputEmail1" class="form-label">Date of admission </label>
            <input type="date" class="form-control mb-4"  placeholder="Entre your date" id="exampleInputPassword1"  name="date"  value="<?php echo $datead; ?>">
         
          <button type="submit"class="btn  btn-info w-100 text-white text-uppercase  " name="update"> 
            update
          </button>
        </form>
      </div>
      <?php
    if (isset($_POST['update'])){

     $image = $_POST["image"] ;
    $name = $_POST["name"] ;
    $email =$_POST["email"] ;
    $phone =$_POST["phone"] ;
    $Enroll_Number = $_POST["nb"] ;
    $Date_admission = $_POST["date"];

    $edite_student ="UPDATE students SET 
    image ='$image',name ='$name',email ='$email',phone ='$phone',enroll_number ='$Enroll_Number',date_admission ='$Date_admission' WHERE id = '$id' ";
    mysqli_query($conn,$edite_student);

        header('location: students.php');
      }
    

      ?>
    </div>
  </main>
</body>

</html>