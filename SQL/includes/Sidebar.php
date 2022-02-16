
<div class="bg" id="sidebar-dashboard">
            <div class="m-2 dark-text fs-5 fw-bold border-start border-5 border-info px-2">
                E-classe
            </div>
            <div class="list-group ">
                <img src="image/profile.jpg" alt="profile picture"
                    class=" profile img-fluid rounded-circle mx-auto d-block my-2 p-1 ">
                <div class="text-center ">
                    <h6> <?php  echo $_SESSION['name_user'];  ?> </h6>
                    <span class=" fs-6 text-info">Admin</span>
                </div>
                <a href="dashboard.php" class="list-group-item mx-5 border-0   rounded-3 mt-3
                 <?php if( basename($_SERVER['REQUEST_URI'])=="dashboard.php"){ echo "bg-info";}else{echo"bg-transparent";};?> ">
                    <i class="fas fa-home"></i> Home</a>
                <a href="courses.php" class="list-group-item mx-5 border-0 
                <?php if( basename($_SERVER['REQUEST_URI'])=="courses.php"){ echo "bg-info";}else{echo"bg-transparent";};?> ">
                    <i class="far fa-bookmark"></i> Course </a>
                <a href="students.php" class="list-group-item mx-5 border-0
                 <?php if( basename($_SERVER['REQUEST_URI'])=="students.php"){ echo "bg-info";}else{echo"bg-transparent";};?> ">
                    <i class="fas fa-graduation-cap"></i> Students</a>
                <a href="payment.php" class="list-group-item mx-5 border-0
                 <?php if( basename($_SERVER['REQUEST_URI'])=="payment.php"){ echo "bg-info";}else{echo"bg-transparent";};?> ">
                    <i class="fas fa-dollar-sign "></i> Payment </a>
                <a href="#" class="list-group-item mx-5 border-0 bg-transparent ">
                    <i class="far fa-file-alt"></i> Report </a>
                <a href="#" class="list-group-item mx-5 border-0 bg-transparent ">
                    <i class="fas fa-sliders-h"></i> Settings</a>
                <a href="logout.php" class="list-group-item mx-5 border-0   mt-5 mb-2 bg-transparent ">
                    Logout <i class="fas fa-sign-out-alt"></i> </a>
            </div>
        </div>