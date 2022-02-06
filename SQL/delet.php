<?php
$key= $_GET['index'];
$json = file_get_contents('student.json');
$json = json_decode($json,true);

unset($json[$key]);

$json=json_encode($json,JSON_PRETTY_PRINT);
file_put_contents('student.json',$json);
header('location: students.php');

?>