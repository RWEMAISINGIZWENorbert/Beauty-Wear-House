<?php
 include '../config/db_connect.php';
   if(isset($_GET['p_code'])){
    $p_code = $_GET['p_code'];
     $sql_command = "DELETE FROM products WHERE productCode = '$p_code'";
     $sql_result = $conn->query($sql_command);
     
     if($sql_result){
         header("location: ../Admin/admin_dashboard.php?route=products&success = Product Delete successfully");
     }
   }
?>