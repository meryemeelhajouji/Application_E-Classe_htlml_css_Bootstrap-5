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
           
           <?php include 'Sidebar.php'?>
  
           <div id="page-content-dashboard">
          
             <?php include 'Header.php'?>
  
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
                                    <th>Phonne</th>
                                    <th>Enroll Number</th>
                                    <th>Date of admission</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td> <img src="image/user.jpg" alt="user" style="width: 50px;"></td>
                                    <td>username</td>
                                    <td>user@email.com</td>
                                    <td>7305477760</td>
                                    <td>1234567305477760</td>
                                    <td>08-Dec, 2021</td>
                                    <td> <i class="fas fa-pen mx-4 "></i></td>
                                    <td> <i class="fas fa-trash  "></i></td>
                                </tr>
                                <tr>
                                    <td> <img src="image/user.jpg" alt="user" style="width: 50px;"></td>
                                    <td>username</td>
                                    <td>user@email.com</td>
                                    <td>7305477760</td>
                                    <td>1234567305477760</td>
                                    <td>08-Dec, 2021</td>
                                    <td> <i class="fas fa-pen mx-4 "></i></td>
                                    <td> <i class="fas fa-trash  "></i></td>
                                </tr>
                                <tr>
                                    <td> <img src="image/user.jpg" alt="user" style="width: 50px;"></td>
                                    <td>username</td>
                                    <td>user@email.com</td>
                                    <td>7305477760</td>
                                    <td>1234567305477760</td>
                                    <td>08-Dec, 2021</td>
                                    <td> <i class="fas fa-pen mx-4 "></i></td>
                                    <td> <i class="fas fa-trash  "></i></td>
                                </tr>
                                <tr>
                                    <td> <img src="image/user.jpg" alt="user" style="width: 50px;"></td>
                                    <td>username</td>
                                    <td>user@email.com</td>
                                    <td>7305477760</td>
                                    <td>1234567305477760</td>
                                    <td>08-Dec, 2021</td>
                                    <td> <i class="fas fa-pen mx-4 "></i></td>
                                    <td> <i class="fas fa-trash  "></i></td>
                                </tr>
                                <tr>
                                    <td> <img src="image/user.jpg" alt="user" style="width: 50px;"></td>
                                    <td>username</td>
                                    <td>user@email.com</td>
                                    <td>7305477760</td>
                                    <td>1234567305477760</td>
                                    <td>08-Dec, 2021</td>
                                    <td> <i class="fas fa-pen mx-4 "></i></td>
                                    <td> <i class="fas fa-trash  "></i></td>
                                </tr>
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