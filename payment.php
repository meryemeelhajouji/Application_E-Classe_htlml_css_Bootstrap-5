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
           
         <?php include 'Sidebar.php'?>

         <div id="page-content-dashboard">
        
                 <?php include 'Header.php'?>

                <div class="container-fluid bg-light  px-4">
                 <div class="row ">
                    <div class=" d-flex justify-content-between my-3">
                        <h1 class="fs-4 ">Payment Details</h1>
                        <i class="fas fa-sort mx-3 text-info "></i>
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
                                <tr>
                                    <td> Karthi</td>
                                    <td>First</td>
                                    <td>00012223</td>
                                    <td>DHS 100,000</td>
                                    <td>DHS 500,000</td>
                                    <td>05-Jan, 2022</td>
                                    <td> <i class="far fa-eye"></i></td>
                                </tr>
                                <tr>
                                    <td> Karthi</td>
                                    <td>First</td>
                                    <td>00012223</td>
                                    <td>DHS 100,000</td>
                                    <td>DHS 500,000</td>
                                    <td>05-Jan, 2022</td>
                                    <td> <i class="far fa-eye"></i></td>
                                </tr>
                                <tr>
                                    <td> Karthi</td>
                                    <td>First</td>
                                    <td>00012223</td>
                                    <td>DHS 100,000</td>
                                    <td>DHS 500,000</td>
                                    <td>05-Jan, 2022</td>
                                    <td> <i class="far fa-eye"></i></td>
                                </tr>
                                <tr>
                                    <td> Karthi</td>
                                    <td>First</td>
                                    <td>00012223</td>
                                    <td>DHS 100,000</td>
                                    <td>DHS 500,000</td>
                                    <td>05-Jan, 2022</td>
                                    <td> <i class="far fa-eye"></i></td>
                                </tr>
                                <tr>
                                    <td> Karthi</td>
                                    <td>First</td>
                                    <td>00012223</td>
                                    <td>DHS 100,000</td>
                                    <td>DHS 500,000</td>
                                    <td>05-Jan, 2022</td>
                                    <td> <i class="far fa-eye"></i></td>
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
    </main>>
    
</body>

</html>