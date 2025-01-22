<?php
  include '../config/db_connect.php';
  if(isset($_POST['submit'])){
      $p_code = $_POST['p_code'];
      $product_name  = $_POST['product_name'];
      $product_quantity = $_POST['product_quantity'];
      $unity_price = $_POST['unity_price'];
      $total_price = $product_quantity * $unity_price;

      $sql_command = "UPDATE products SET productName = '$product_name',
                                                                  product_quantity = '$product_quantity',
                                                                  unit_price = '$unity_price',
                                                                  total_price = '$total_price' WHERE productCode = '$p_code'";

      $sql_result =  $conn->query($sql_command);
      
      if($sql_result){
        header("location: ../Admin/admin_dashboard.php?route=products&success=Product Updated succesfully");
      }else{
        header("location: ../Admin/admin_dashboard.php?route=edit_product&p_code=$p_code");
      }
  }
?>