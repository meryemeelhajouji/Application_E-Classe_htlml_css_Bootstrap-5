

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
   $id = $_GET['id_cour'];
   $read_course = "SELECT * FROM courses WHERE id_cour = $id";
   $res = mysqli_query($conn,$read_course);
    while ($row = mysqli_fetch_assoc($res)){

   $title = $row['title'];
   $description = $row['description'];
   $price = $row['price'];
  
    }

   
  
  
?>
  <main>
     <div class=" d-flex justify-content-center align-items-center  ">
      <div class="bg-light col-lg-5 p-5 rounded-3  ">
       
         
          <div class=" text-center ">
            <h2 class="text-uppercase fs-5">update courses </h2>


          </div>
         <form cction="" method = "POST">
          <div class="mb-3">
          
            <label for="exampleInputPassword1" class="form-label">title</label>
            <input type="text" class="form-control "id="exampleInputPassword1"  placeholder="Entre your title" name="title"  value="<?php echo $title; ?>"> 
         
            <label for="exampleInputEmail1" class="form-label">Description </label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Entre your description" name="description"  value="<?php echo $description; ?>" >
          
            <label for="exampleInputEmail1" class="form-label">price </label>
            <input type="text" class="form-control" id="exampleInputEmail1"  placeholder="Entre your price" name="price"   value="<?php echo $price; ?>">
          
          <button type="submit"class="btn  btn-info w-100 text-white text-uppercase  " name="update"> 
            update
          </button>
        </form>
      </div>
      <?php
    if (isset($_POST['update'])){

    $title = $_POST["title"] ;
    $description =$_POST["description"] ;
    $price  =$_POST["price"] ;

    $edite_cour ="UPDATE courses SET 
    title ='$title',description ='$description',price ='$price'  WHERE id_cour = '$id' ";
    mysqli_query($conn,$edite_cour);

        header('location: courses.php');
      }
    

      ?>
    </div>
  </main>
</body>

</html>