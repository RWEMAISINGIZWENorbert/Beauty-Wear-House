<?php
    include '../config/db_connect.php';
  if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    if(!$email || !$password){
        header("location: ../Auth/Sign_in.php?fail=please fill credentials");
    }
     
    $sql_command = "SELECT * FROM users WHERE email = '$email' AND Password = '$password'";
    $sql_result = $conn->query($sql_command);
    if($sql_result -> num_rows > 0){
         session_start();
         $_SESSION['email'] = $email;
    //      if($_SESSION['email']){
            header("location: ../Admin/admin_dashboard.php?route=products");
    //      }else{
    //         header("location: ../Auth/Sign_in.php?fail=Login first");
    //      }
    // }else{
    //     header("location: ../Auth/Sign_in.php?fail=User Not found");
    }
    // session_destroy();
  }
?>