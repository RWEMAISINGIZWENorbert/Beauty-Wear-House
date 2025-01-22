<?php
include "../config/db_connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* .no-data{
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        img{
            width: 100px;
            height: 100px;
            margin:4rem 20rem;
        } */
         a{
            text-decoration: none;
         }
         a.add{
            transform: translateX(4rem);
         }
         .fail{
        text-align: center;
        color: red;
       }
        .success{
            text-align: center;
            color: green;
            font-weight: bold;
        }
    </style>
</head>
<body>
<main class="table" id="customers_table">
<?php
            if(isset($_GET['fail'])){
                echo "<p class='fail'>*". $_GET['fail']. "*</p>";
            }elseif(isset($_GET['success'])){
                echo "<p class='success'>*". $_GET['success']. "*</p>";
            }
         ?>
        <section class="table__header">
            <h1>Products</h1>
            <div class="input-group">
                <input type="search" placeholder="Search Data...">
                <img src="../images/search.png" alt="">
            </div>
        <a href="admin_dashboard.php?route=add_product" class="add"><button>Add Product</button><a/>
        </section>
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                        <th> Id <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Name <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Quantity <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Unity Price <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Total Price <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Actions <span class="icon-arrow">&UpArrow;</span></th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                     $sql_command = "SELECT * FROM products";
                    $sql_result = $conn->query($sql_command);
                    if($sql_result->num_rows > 0){
                        while($row = $sql_result->fetch_assoc()){
                    ?>
                    <tr>
                        <td><?php echo $row['productCode'] ?></td>
                        <td><?php echo $row['productName']?></td>
                        <td><?php echo $row['product_quantity']?></td>
                        <td><?php echo $row['unit_price'] ?> frw</td>
                        <td><strong><?php echo $row['total_price']?> frw </strong></td>
                        <td class="actions">
                            <a href="admin_dashboard.php?route=edit_product&p_code=<?php echo $row['productCode']?>"><p class="edit">Edit</p></a>
                            <a href="../Controllers/delete_product_controller.php?p_code=<?php echo $row['productCode']?>"><p class="delete">Delete</p></a>
                        </td>
                    </tr>
                    <!-- <tr>
                        <td> 2 </td>
                        <td>Maize</td>
                        <td> 1 </td>
                        <td> $100 </td>
                        <td><strong> $128.90 </strong></td>
                        <td class="actions">
                            <p class="edit">Edit</p>
                            <p class="delete">Delete</p>
                        </td>
                    </tr> -->
                    <?php }} ?>
                </tbody>
            </table>
            </div>
        </section>
    </main>
    <script src="../js/index.js"></script>
</body>
</html>