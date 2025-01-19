<?php
include '../config/db_connect.php';
  if(isset($_POST['submit'])){
      $product_name = $_POST['product_name'];
      $product_quantity = $_POST['product_quantity'];
      $unity_price = $_POST['unity_price'];

      if(!$product_name || !$product_quantity || !$unity_price){
        header("location: ../Admin/admin_dashboard.php?route=add_product&fail=please fill credentials");
      }
     
      $total_price = $product_quantity * $unity_price;

      $check_sql  = "SELECT * FROM products WHERE productName = '$product_name'";
      $check_result = $conn->query($check_sql);
      
      if($check_result -> num_rows > 0){
         header("location:../Admin/admin_dashboard.php?route=add_product&fail=Product Already exists");
      }else{
        $sql_command = "INSERT INTO products (productName, product_quantity, unit_price, total_price) VALUES ('$product_name','$product_quantity', '$unity_price', '$total_price')";
        $sql_result = $conn -> query($sql_command);
 
 if($sql_command){
              header("location: ../Admin/admin_dashboard.php?route=products&success=Product added succesfully");
 }else{
   header('location: ../Admin/admin_dashboard.php?route=add_product&fail=Error occured in the process');
 }
      }

   }
?>