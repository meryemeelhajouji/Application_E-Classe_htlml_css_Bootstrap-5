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
  <title>Page Courses</title>
</head>

<body>

  <main>
    <div class="d-flex" id="dashboard">

      <?php include 'includes/Sidebar.php' ?>

      <div id="page-content-dashboard">

        <?php include 'includes/Header.php' ?>

        <div class="container-fluid bg-light  px-4">
          <div class="row ">
            <div class=" d-flex justify-content-between my-3">
              <h1 class="fs-4 ">Courses List</h1>
              <div>
                <i class="fas fa-sort mx-3 text-info "></i>
                <button type="button" class="btn btn-info text-white  " data-bs-toggle="modal" data-bs-target="#exampleModal">ADD NEW COURSES</button>


                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">ADD NEW COURSES</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <form action="" method="POST">
                          <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Title </label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Entre your name" name="title">
                          </div>
                          <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">description </label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Entre your email" name="description">
                          </div>
                          <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Price </label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Entre your phone" name="price">
                          </div>

                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary" name="save">ADD NEW COURSES</button>
                        </form>
                        <?php

                        require_once 'connection.php';

                        if (isset($_POST['save'])) {

                          $title = $_POST["title"];
                          $description = $_POST["description"];
                          $price = $_POST["price"];

                          $ins_courses = "INSERT INTO courses(title , description , price) values ('$title','$description','$price')";

                          mysqli_query($conn, $ins_courses);
                        }

                        ?>
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
                    <th>Title</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th></th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $aff_student = "select * from courses ";
                  $res = mysqli_query($conn, $aff_student);
                  while ($row = mysqli_fetch_assoc($res)) {

                  ?>
                    <tr>
                      <td> <?php echo $row['title']; ?></td>
                      <td> <?php echo $row['description']; ?></td>
                      <td> <?php echo $row['price']; ?> </td>
                      <td> <a href="edit_cour.php ?id_cour=<?php echo  $row['id_cour']; ?>"> <i class="fas fa-pen mx-4 "></i></a></td>
                      <td> <a href="delet_cour.php?id_cour=<?php echo  $row['id_cour']; ?>"> <i class="fas fa-trash   mx-4 "></i> </a></td>

                    </tr>


                  <?php   }   ?>


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
      toggleButton.onclick = function() {
        el.classList.toggle("toggled");
      };
    </script>
  </main>

</body>

</html>