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
                            <button type="button" class="btn btn-info text-white  ">ADD NEW STUDENT</button>
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
                             
                                $student =array( 
                                  'img'=>'<img src="image/user.jpg" alt="user" style="width: 50px;">',
                                  'Name'  =>'Uername',
                                  'Email' =>'user@gmail.com',
                                  'Phone' =>'12333445',
                                  'Enroll Number' =>'123456789',
                                  'Date of admission' =>'08-DEC,2021',
                                  'icon1'=>' <i class="fas fa-pen mx-4 "></i>',
                                  'icon2'=>' <i class="fas fa-trash   mx-4 "></i>'
                          
                                );

                                for($i=0;$i<8;$i++){
                                 echo"<tr>   
                               
                                 <td>".$student['img']."</td>
                                 <td>".$student['Name'] ."</td>
                                 <td>".$student['Email']."</td>
                                 <td>".$student['Phone']."</td>
                                 <td>".$student['Enroll Number']."</td>
                                 <td>".$student['Date of admission']."</td>
                                 <td>".$student['icon1']."</td>
                                 <td>".$student['icon2']."</td>
                              
                                 </tr>";
                              }



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
  
</body>

</html>