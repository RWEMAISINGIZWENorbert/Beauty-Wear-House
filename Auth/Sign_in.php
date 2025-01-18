<?php
  include '../config/db_connect.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles/style.css">
</head>
<body>
      <main>
           <div class="container">
           <?php
               if(isset($_GET['fail'])){
                echo "<p  class='fail'>*". $_GET['fail']. "*</p>";
               }
            ?>
            <p class="success"></p>
              <h2>Sign In</h2>
                <form action="../Controllers/sign_in_controller.php" method="POST">
                    <label for="">Email Adress</label><br>
                     <input type="email" name="email"><br><br>
                     <label for="">Password</label><br>
                     <input type="password" name="password"><br><br>
                     <input type="submit" name="submit" value="Log in">
                </form>
                <div class="bot">
                    <p>Is your first time?</p>
                    <p><a href="./Sign_up.php">Sign up</a></p>
                </div>
           </div>
      </main>
</body>
</html>