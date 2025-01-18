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
            <p class="fail"></p>
            <p class="success"></p>
             <h1>Add Product</h1>
             <form action="" method="POST">
                   <label for="">Product Name</label><br>
                   <input type="text"><br><br>
                   <label for="">Product Quantity</label><br>
                   <input type="text"><br><br>
                   <label for="">Unity Price</label><br>
                   <input type="text"><br><br>
                   <input type="submit" value="Add">
             </form>
    </div>
    </main>
</body>
</html>