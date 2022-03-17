<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="css/dashboard.css" />
    <title>Page Students</title>
</head>


<body>
<?php 

require_once 'connection.php';


 if(isset($_POST['save'])) {
     

    $image = $_POST["image"] ;
    $name = $_POST["name"] ;
    $email =$_POST["email"] ;
    $phone =$_POST["phone"] ;
    $Enroll_Number = $_POST["nb"] ;
    $Date_admission = $_POST["date"];

      $ins_student = "INSERT INTO students(image , name , email , phone , enroll_number, date_admission  ) values ('$image','$name','$email','$phone','$Enroll_Number','$Date_admission')";
       mysqli_query($conn,$ins_student);
       header('location: students.php');
   

    
 }



  ?>
    <main>
    <div class="d-flex" id="dashboard">

        <?php include 'includes/Sidebar.php'?>

         <div id="page-content-dashboard">

             <?php include 'includes/Header.php'?>
  
             <div class="container-fluid bg-light  px-4">
                <div class="row ">
                    <div class=" d-flex justify-content-between my-3">
                        <h1 class="fs-4 ">Students List</h1>
                    <div>
                            <i class="fas fa-sort mx-3 text-info "></i>
                            <button type="button" class="btn btn-info text-white  " data-bs-toggle="modal" data-bs-target="#exampleModal">ADD NEW STUDENT</button>


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ADD NEW STUDENT</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form  action= "" method="POST" onsubmit="return valideStudent()">
      <div class="mb-3">
            <label >Image </label>
            <input type="file" class="form-control" id="exampleInputEmail1" placeholder="Entre your image" name="image">
          </div>
          <div class="mb-3">
            <label>Name </label>
            <input type="text" class="form-control" id="name"  placeholder="Entre your name" name="name" >
            <span id="nameid"></span> 
          </div>
          <div class="mb-3">
            <label>Email </label>
            <input type="email" class="form-control" id="email"   placeholder="Entre your email" name="email" >
            <span id="emailid"></span>  
          </div>
          <div class="mb-3">
            <label>phone </label>
            <input type="text" class="form-control" id="phone" placeholder="Entre your phone" name="phone" >
            <span id="phoneid"></span> 
          </div>
          <div class="mb-3">
            <label>Enroll Number</label>
            <input type="text" class="form-control mb-4" placeholder="Entre your Enroll"  id="Enrollnb"   name="nb">
            <span id="EnrollnbId"></span> 
          </div>
          <div class="mb-3">
            <label>Date of admission</label>
            <input type="date" class="form-control mb-4" placeholder="Entre your date"  id="date"  name="date">
            <span id="dateId"></span> 
          </div>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="save">ADD NEW STUDENT</button>
       
      </form>

      </div>
     
    </div>
  </div>
</div>
                        </div>
                        
                    </div>
                    <div class=" table-responsive-sm table-responsive-md">
                        <table class="table bg-white rounded shadow-sm align-middle overflow-scroll  table-hover">
                            <thead>
                                <tr>
                                    <th> </th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Enroll Number</th>
                                    <th>Date of admission</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                               <?php
                                    $aff_student="select * from students ";
                                  $res = mysqli_query($conn,$aff_student);
                                 while($row = mysqli_fetch_assoc($res)){
                                   
                                  ?>
                                       <tr>   
                        
                        <td><img src="image/<?php echo $row['image']; ?>" alt="user" style="width: 50px;"></td>
                        <td> <?php echo $row['name']; ?></td>
                        <td> <?php echo $row['email'];?></td>
                        <td> <?php echo $row['phone']; ?> </td>
                        <td> <?php echo $row['enroll_number'];?></td>
                        <td> <?php echo $row['date_admission'];?></td>
                        <td>  <a href="edit.php ?id=<?php echo  $row['id']; ?>" > <i class="fas fa-pen mx-4 "></i></a></td>
                       
                   <td><button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#modelsupp"> <i class="fas fa-trash   mx-4 "></i></button> </td>
                        </tr>
                        <div class="modal fade" id="modelsupp" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Students Suppression</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    YOU REALLY WANT TO DELETE THIS STUDENT ?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">NO !</button>
                    <a href="delet.php?id=<?php echo  $row['id']; ?>"><button type="button" class="btn btn-success">YES, I'M SURE !</button></a>
                </div>
            </div>
        </div>
    </div>                      
                    <?php   } 
  ?>     
                            
           
                            </tbody>
                        </table>   
                    </div>
                      
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var el = document.getElementById("dashboard");
        var toggleButton = document.getElementById("menu-toggle");
        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
        
    </script>
    </main>
  <script src="scriptStudent.js"> </Script>

    

 
</body>

</html>