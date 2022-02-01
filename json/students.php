<?php  
        $json = file_get_contents('student.json');
        $student = json_decode($json, true);
  
  $student[] = array(
    'img'   =>$_GET["image"] ,
    'Name'  => $_GET["name"] ,
    'Email' =>$_GET["email"] ,
    'Phone' =>$_GET["phone"] ,
    'Enroll Number' =>$_GET["nb"] ,
    'Date of admission' => $_GET["date"],
    'icon1'=>' <i class="fas fa-pen mx-4 "></i>',
    'icon2'=>' <i class="fas fa-trash   mx-4 "></i>'

  );
 
// push('student.json',$student);//

  $en = json_encode($student,JSON_PRETTY_PRINT);
  file_put_contents('student.json',$en);

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

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajouter student</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form  action= "students.php" method="get">
      <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Image </label>
            <input type="file" class="form-control" id="exampleInputEmail1" placeholder="Entre your image" name="image">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name </label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Entre your name" name="name" >
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email </label>
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Entre your name" name="email" >
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">phone </label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Entre your phone" name="phone" >
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Enroll Number</label>
            <input type="text" class="form-control mb-4" placeholder="Entre your Enroll" id="exampleInputPassword1"   name="nb">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Date of admission</label>
            <input type="date" class="form-control mb-4" placeholder="Entre your date" id="exampleInputPassword1"  name="date">
          </div>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">ADD NEW STUDENT</button>
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
                              
                          
                            $fill =file_get_contents("student.json");
                          $st = json_decode($fill,true);

                              ?>
                            <?php   foreach ($st as $key => $val) :    ?>
                           <tr>   
                        
                            <td><img src=" <?php echo "upload".$val['img']; ?>" alt="user" style="width: 50px;"></td>
                            <td> <?php echo $val['Name']; ?></td>
                            <td> <?php echo $val['Email'];?></td>
                            <td> <?php echo $val['Phone']; ?> </td>
                            <td> <?php echo $val['Enroll Number'];?></td>
                            <td> <?php echo $val['Date of admission'];?></td>
                            <td><i class="fas fa-pen mx-4 "></i></td>
                            <td> <i class="fas fa-trash   mx-4 "></i></td>
                         
                            </tr>
                       
            <?php endforeach; ?>
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
  
</body>

</html>