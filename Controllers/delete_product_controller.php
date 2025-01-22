<?php
 include '../config/db_connect.php';
   if(isset($_GET['p_code'])){
    $p_code = $_GET['p_code'];
     $del_customer = "DELETE FROM customer WHERE product_code = '$p_code'";
     $conn->query($del_customer);
     $sql_command = "DELETE FROM products WHERE productCode = '$p_code'";
     $sql_result = $conn->query($sql_command);
     $conn->close();
     
     if($sql_result){
         header("location: ../Admin/admin_dashboard.php?route=products&success=Product Delete successfully");
     }
   }
?>