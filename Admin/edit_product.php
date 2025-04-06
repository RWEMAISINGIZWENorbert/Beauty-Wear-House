<?php
 include '../config/db_connect.php';
 if(isset($_GET['p_code'])){
    $p_code = $_GET['p_code'];
 }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles/style.css">
    <style>
                main .container{
            height: 65%;
            width: 40%;
        }
         .bot{
            display: flex;
            justify-content: space-between;
            gap: 10rem;
            width: 90%;
            transform: translateX(-5rem);
         }
         .bot button {
            font-size: 1.2em;
            font-weight: 500;
            cursor: pointer;
            width: 90%;
         }
         form {
            transform: translateX(-3rem);
        }
        h1{
            text-align: center;
            margin: 1rem 0;
        }
    </style>
</head>
<body>
   <main>
      <div class="container">
            <?php
            $sql_command = "SELECT * FROM products WHERE productCode = '$p_code'";
            $sql_result = $conn->query($sql_command);
             if($sql_result -> num_rows > 0){
                 while($row = $sql_result -> fetch_assoc()){
            ?>
                   <h1>Edit Product </h1>
               <form action="../Controllers/edit_product_controller.php" method="POST">
                <input type="hidden" name="p_code" value="<?php echo $row['productCode']?>">
                <label for="">product Name</label><br>
                <input type="text" name="product_name" value="<?php echo $row['productName']?>"><br><br>
                 <label for="">Total Quantity</label><br>
                 <input type="number" name="product_quantity" value="<?php echo $row['product_quantity']?>"><br><br>
                 <label for="">Unity Price</label><br>
                 <input type="number" name="unity_price" id="" value="<?php echo $row['unit_price']?>"><br><br>
                 <div class="bot">
                   <button><a href="../Admin/admin_dashboard.php?route=products">cancel</a></button> 
                    <input type="submit" value="Save" name="submit">
                 </div>
                 </form>
                 <?php }} ?>
      </div>
   </main>
</body>
</html>