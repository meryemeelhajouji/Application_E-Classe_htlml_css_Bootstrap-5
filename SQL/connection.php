<?php
$servername = "localhost";
$username = "root";
$password = "";
$dataname ="e_classe_db";

$conn = new mysqli($servername, $username, $password, $dataname);
//CREATE DATABASE e_classe_db;

   /* $sql = "CREATE TABLE students(
        id int AUTO_INCREMENT  PRIMARY KEY ,
        image varchar(255),
        name varchar(255),
        email  varchar(255),
        phone int,
        enroll_number int,
        date_admission date
       
            )";  */

             /*  $sql = "CREATE TABLE payment_details(
                id_pay int AUTO_INCREMENT  PRIMARY KEY ,
                name varchar(255),
                Payment_Schedule varchar(255),
                Bill_Number  int,
                Amount_Paid int,
                Balance_amount int,
                date_pay date
               
                    )";
                    if ($conn->query($sql) === TRUE) {
                        echo "Table MyGuests created successfully";
                      } else {
                        echo "Error creating table: " . $conn->error;
                      }
                      */
           ?>
