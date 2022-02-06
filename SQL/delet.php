<?php
require_once 'connection.php';

$id = $_GET['id'];
$delete = "DELETE FROM students WHERE id=$id ";
mysqli_query($conn,$delete);
header('location:students.php');

?>