<?php
   include "../config/db_connect.php";
    $p_code =$_GET['p_code'];
    $sql_command = "DELETE  FROM `order` WHERE order_number = '$p_code'";
    $sql_result = $conn->query($sql_command);

    if($sql_result){
         header("location: ../Admin/admin_dashboard.php?route=reports&report=All&success=Data delete successfully");
    }
?>