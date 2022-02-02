<?php
   
    $index = $_GET['index'];

    $json = file_get_contents('student.json');
    $data = json_decode($json, true);

    $row = $data[$index];
  
   
?>

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
  <main>
     <div class=" bg-info d-flex justify-content-center align-items-center ">
      <div class="bg-light col-lg-5 p-5 rounded-3  ">
       
         
          <div class=" text-center ">
            <h2 class="text-uppercase fs-5">update student </h2>


          </div>
         <form  action="" method = "POST">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Image </label>
            <input type="file" class="form-control" id="exampleInputEmail1"placeholder="Entre your image" name="image"  value="<?php echo $row['img']; ?>">
          
            <label for="exampleInputPassword1" class="form-label">Name</label>
            <input type="tex" class="form-control "id="exampleInputPassword1"  placeholder="Entre your name" name="name"  value="<?php echo $row['Name']; ?>"> 
         
            <label for="exampleInputEmail1" class="form-label">Email </label>
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Entre your email" name="email"  value="<?php echo $row['Email']; ?>" >
          
            <label for="exampleInputEmail1" class="form-label">Phone </label>
            <input type="text" class="form-control" id="exampleInputEmail1"  placeholder="Entre your phone" name="phone"   value="<?php echo $row['Phone']; ?>">
          
            <label for="exampleInputEmail1" class="form-label">Enroll Number </label>
            <input type="text" class="form-control" placeholder="Entre your Enroll" id="exampleInputPassword1"   name="nb"  value="<?php echo $row['Enroll Number']; ?>">
       
         
            <label for="exampleInputEmail1" class="form-label">Date of admission </label>
            <input type="date" class="form-control mb-4"  placeholder="Entre your date" id="exampleInputPassword1"  name="date"  value="<?php echo $row['Date of admission']; ?>">
         
          <button type="submit"class="btn  btn-info w-100 text-white text-uppercase  " name="update"> 
            update
          </button>
        </form>
      </div>
      <?php
      if(isset($_POST['update'])){
        $student = array(
          'img'   =>$_POST["image"] ,
          'Name'  => $_POST["name"] ,
          'Email' =>$_POST["email"] ,
          'Phone' =>$_POST["phone"] ,
          'Enroll Number' =>$_POST["nb"] ,
          'Date of admission' => $_POST["date"],
          'icon1'=>' <i class="fas fa-pen mx-4 "></i>',
          'icon2'=>' <i class="fas fa-trash   mx-4 "></i>'
      
        );
        $data[$index] = $student;
        $json = json_encode($data, JSON_PRETTY_PRINT);
        file_put_contents('student.json', $json);


        header('location: students.php');
      }
    

      ?>
    </div>
  </main>
</body>

</html>