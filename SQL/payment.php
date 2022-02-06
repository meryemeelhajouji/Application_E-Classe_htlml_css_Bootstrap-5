<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="css/dashboard.css" />
    <title>Page Payment</title>
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
                        <h1 class="fs-4 ">Payment Details</h1>
                    <div>
                            <i class="fas fa-sort mx-3 text-info "></i>
                            <button type="button" class="btn btn-info text-white  " data-bs-toggle="modal" data-bs-target="#exampleModal">ADD NEW Payment</button>


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ADD NEW Payment</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form  action= "" method="POST">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name </label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Entre your name" name="name" >
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Payment Schedule </label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Entre your Payment Schedule" name="Payment_Schedule" >
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Bill Number </label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Entre your Bill Number" name="Bill_Number" >
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Amount Paid</label>
            <input type="text" class="form-control mb-4" placeholder="Entre your Amount Paid" id="exampleInputPassword1"   name="Amount_Paid">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Balance amount</label>
            <input type="text" class="form-control mb-4" placeholder="Entre your Balance amount" id="exampleInputPassword1"   name="Balance amount">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Date </label>
            <input type="date" class="form-control mb-4" placeholder="Entre your date" id="exampleInputPassword1"  name="date">
          </div>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="save">ADD NEW Payment</button>
        </form>
        <?php
require_once 'connection.php';


if(isset($_POST['save'])) {
    

   $name = $_POST["name"] ;
   $Payment_Schedule =$_POST["Payment_Schedule"] ;
   $Bill_Number =$_POST["Bill_Number"] ;
   $Amount_Paid = $_POST["Amount_Paid"] ;
   $Balance_amount = $_POST["Balance_amount"] ;
   $Date = $_POST["date"];

   $ins_payment = "INSERT INTO payment_details values ('','$name','$Payment_Schedule','$Bill_Number','$Amount_Paid','$Balance_amount','$Date')";

      mysqli_query($conn,$ins_payment);

   
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
                                    <th>Name </th>
                                    <th>Payment Schedule</th>
                                    <th>Bill Number</th>
                                    <th>Amount Paid</th>
                                    <th>Balance amount</th>
                                    <th>Date </th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            
                            <?php
                                    $aff_pay="select * from payment_details ";
                                  $res = mysqli_query($conn,$aff_pay);
                                 while($row = mysqli_fetch_assoc($res)){
                                   
                                  ?>
                                       <tr>  

                        <td> <?php echo $row['name']; ?></td>
                        <td> <?php echo $row['Payment_Schedule'];?></td>
                        <td> <?php echo $row['Bill_Number']; ?> </td>
                        <td> <?php echo $row['Amount_Paid'];?></td>
                        <td> <?php echo $row['Balance_amount'];?></td>
                        <td> <?php echo $row['date_pay'];?></td>
                        <td>  <a href=""> <i class="far fa-eye"></i></a></td>
                         
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
        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>
    </main>>
    
</body>

</html>