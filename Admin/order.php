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
      .table__header{
        justify-content: space-between;
      }
       h1{
          display: flex;
          text-align: left;
       }
       .data{
        display: flex;
        gap: 2rem;
       }
       .data input{
        width: 100%;
        border: none;
        outline: none;
        padding: .5em 0;
        border-radius: .2em;
        padding-left: .2em;
        font-size: 1.05em;
        font-weight: 500;
        transition: all 0.3s ease;
       }

       .data input:focus{
        background-color: var(--secondary-text-clr);
       }

       #credentials{
        margin-left: 4rem;
       }

       #credentials h2{
          margin: 1.7rem 0;
       }
        
       #credentials input[type = "submit"]{
          width: 20%;
          margin-left: 15rem;
          cursor: pointer;
          font-weight: 500;
          font-size: 1.1em;
          border-radius: .3rem;
          border: none;
          outline: none;
          padding: .2rem .4rem;
       }
        
       .table__body{
        max-height: calc(60% - 5rem);
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
<form action="../Controllers/order_product_controller.php" method="POST">
<main class="table" id="customers_table">
         <?php
            if(isset($_GET['fail'])){
                echo "<p class='fail'>*". $_GET['fail']. "*</p>";
            }elseif(isset($_GET['success'])){
                echo "<p class='success'>*". $_GET['success']. "*</p>";
            }
         ?>
        <section class="table__header">
            <h1>Place Order</h1>
            <!-- <div class="input-group">
                <input type="search" placeholder="Search Data...">
                <img src="../images/search.png" alt="">
            </div> -->
        </section>
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                        <th> Id <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Name <span class="icon-arrow">&UpArrow;</span></th>
                        <th>Total Quantity <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Unity Price <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Total Price <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Quantity <span class="icon-arrow">&UpArrow;</span></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                     $sql_command = "SELECT * FROM products";
                     $sql_result = $conn->query($sql_command);
                       if($sql_result -> num_rows > 0){
                          while($row = $sql_result->fetch_assoc()){
                    ?>
                    <tr>
                        <td> <?php echo $row['productCode']?> </td>
                        <td><?php echo $row['productName']?></td>
                        <td><?php echo $row['product_quantity'] ?></td>
                        <td> <?php echo $row['unit_price']?> </td>
                        <td><strong><?php echo $row['total_price']?> </strong></td>
                        <td class="actions"><input type="number" value="0" name="order_quantity[<?php echo $row['productCode']?>]"></td>
                    </tr>
                    <?php
                                 }
                                   }
                    ?>
                </tbody>
            </table>
        </section>
        <main id="credentials">
        <h2>User credentials</h2>
        <div class="data">
          <div class="item">
            <label for="">Customer Name</label><br>
            <input type="text" name="name"><br><br>
            </div>
            <div class="item">
            <label for="">Location</label><br>
            <input type="text" name="location"><br><br>
            </div>
            <div class="item">
            <label for="">Telephone Number</label><br>
            <input type="text" name="tel">
            </div>
        </div>
        <input type="submit" name="submit">
        </main>
        </form>
    </main>
</body>
</html>