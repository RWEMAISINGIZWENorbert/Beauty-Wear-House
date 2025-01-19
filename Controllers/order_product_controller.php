<?php
include "../config/db_connect.php";
 
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $location = $_POST['location'];
    $tel = $_POST['tel'];
   
    if(!$name || !$location || !$tel){
        header("location: ../Admin/admin_dashboard.php?route=order&fail=please provide the credentials");
    }else{

    if(isset($_POST['order_quantity'])){
        $order_qauntities = $_POST['order_quantity'];
        foreach($order_qauntities as $p_code => $quantity){
        //    if(!$quantity){
        //      header("location: ../Admin/admin_dashboard.php?route=order&fail=Please order before conitinue");
        //    }
           $sql_command = "SELECT * FROM products WHERE productCode = '$p_code'";
           $sql_result = $conn->query($sql_command);
           if($sql_result -> num_rows > 0){
            while($row = $sql_result->fetch_assoc()){
                if($quantity > $row['product_quantity']){
                    header('location: ../Admin/admin_dashboard.php?route=order&fail=Quntity is too high');
                }

                $timestamp = time();
                $order_date = date('y-m-d H:i', $timestamp);
                $insert_order = "INSERT INTO `order` (order_date) VALUES ('$order_date')";
                $insert_result = $conn ->query($insert_order);

                if($insert_result){
                    $order_number = mysqli_insert_id($conn);
                  }
                  $new_quantity = $row['product_quantity'] - $quantity;
                  $update = "UPDATE products SET product_quantity = '$new_quantity' WHERE productCode = '$p_code'";
                  $update_result = $conn->query($update); 

                  if($update_result){
                      $sql_customer = "INSERT INTO customer(cust_name, location, telephone, product_code, order_number, quantity_ordered)
                                                 VALUES('$name', '$location', '$tel', '$p_code', '$order_number', '$quantity')";
                      $sql_customer_result = $conn->query($sql_customer);
                      if($sql_customer_result){
                        header("location:  ../Admin/admin_dashboard.php?route=order&success=Order Placed successfully");
                      }else{
                        header("loaction: ../Admin/admin_dashboard.php?route=order&fail=Error occured please try again");
                      }                           
                  }
            }
           }
        }
    }
} 
}

?>