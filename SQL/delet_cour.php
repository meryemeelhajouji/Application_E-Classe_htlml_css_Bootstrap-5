<?php
require_once 'connection.php';

$id = $_GET['id_cour'];
$delete_cour = "DELETE FROM courses WHERE id_cour=$id";
mysqli_query($conn,$delete_cour);
header('location:courses.php');


?>