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
              <h2>Sign Up</h2>
                <form action="../Controllers/sign_up_controller.php" method="POST">
                    <label for="">User Name</label><br>
                    <input type="text" name="name"><br><br>
                    <label for="">Email Adress</label><br>
                     <input type="email" name="email"><br><br>
                     <label for="">Password</label><br>
                     <input type="password" name="password"><br><br>
                     <label for="">Retype password</label><br>
                     <input type="password" name="cpassword"><br><br>
                     <input type="submit" name="submit" value="create account">
                </form>
                <div class="bot">
                    <p>Already have account?</p>
                    <p><a href="./Sign_in.php">Sign In</a></p>
                </div>
           </div>
      </main>
</body>
</html>