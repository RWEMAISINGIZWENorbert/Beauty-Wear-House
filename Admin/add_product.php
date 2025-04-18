<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/style.css">
    <title>Document</title>
    <style>
        main .container{
            height: 65%;
            width: 40%;
        }
        p.success{
        text-align: center;
        margin-left: 6rem;
         color: #008000;
          transition: all 0.3s ease;
        }
        p.fail{
            margin-right: 2rem;
        }
        h1{
            text-align: center;
            margin: 1rem 0;
        }
        form {
            transform: translateX(-3rem);
        }
    </style>
</head>
<body>
    <main>
        <div class="container">
            <?php
                if(isset($_GET['fail'])){
                    echo "<p class = 'fail'>*". $_GET['fail']. "*</p>";
                }elseif(isset($_GET['success'])){
                    echo "<p class = 'success'>*". $_GET['success']. "*</p>";
                }
              ?>
             <h1>Add Product</h1>
             <form action="../Controllers/add_product_controller.php" method="POST">
                   <label for="">Product Name</label><br>
                   <input type="text" name="product_name"><br><br>
                   <label for="">Product Quantity</label><br>
                   <input type="number" name="product_quantity"><br><br>
                   <label for="">Unity Price</label><br>
                   <input type="number" name="unity_price"><br><br>
                   <input type="submit" name="submit" value="Add">
             </form>
    </div>
    </main>
</body>
</html>