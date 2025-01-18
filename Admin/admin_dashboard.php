<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles/admin.css">
     <link rel="stylesheet" href="../styles/table.css">
</head>
<body>
    <nav id="sideBar">
          <ul>
              <li>
                <span id="logo">Admin Dashboard</span>
              </li>
             <li><a href="admin_dashboard.php?route=dashboard">DashBoard </a></li>
             <li> <a href="admin_dashboard.php?route=products">Products  </a></li>
             <li><a href="admin_dashboard.php?route=add_product"> Add product </a></li>
             <li><a href="admin_dashboard.php?route=order"> Order </a></li>
             <li><a href="admin_dashboard.php?route=reports">Reports </a></li>
             <li>
                <span id="logout">Logout</span>
             </li>
          </ul>
    </nav>
    <?php
       if(isset($_GET['route'])){
         $route = $_GET['route']; 
        $array = ['products', 'add_product', 'reports','dashboard', 'order'];
        if(in_array($route, $array)){
            include $route . '.php';
        }else{
            include 'products.php';
        }
       }else{
        include 'products.php';
       }
    ?>
</body>
</html>