<?php
include "../config/db_connect.php";
 if(isset($_POST['submit'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $password = $_POST['password'];
      $c_password = $_POST['cpassword'];

      if(!$name || !$email || !$password || !$c_password){
        header("location: ../Auth/Sign_up.php?fail=Please fill the credentials");
      }

    if($password != $c_password){
         header("location: ../Auth/Sign_up.php?fail=Password not match please try again");
    }
    
    $check_sql = "SELECT * FROM users WHERE email = '$email'";
    $check_result = $conn->query($check_sql);

    if($check_result -> num_rows > 0){
        header("location: ../Auth/Sign_up.php?fail=Email already exists");
    }

    $sql_command = "INSERT INTO users(userName,email, Password) VALUES ('$name','$email','$password')";
    $sql_result = $conn->query($sql_command);
    if($sql_result){
        header("location: ../Auth/Sign_in.php");
    }else{
        header("location: ../Auth/Sign_up.php?fail=Erro occured please try again");
    }
 }
?>