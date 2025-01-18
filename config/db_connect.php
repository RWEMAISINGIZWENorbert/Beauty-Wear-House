<?php
 
 $server_name = 'localhost';
 $user_name = 'root';
 $password = '';
 $database = 'customer_info';
 
 $conn = mysqli_connect($server_name, $user_name, $password, $database);
 if(!$conn){
    die("Connection failed");
 }

?>