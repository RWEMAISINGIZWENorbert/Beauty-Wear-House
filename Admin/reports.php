<?php
 
 include '../config/db_connect.php';
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<main class="table" id="customers_table">
        <section class="table__header">
            <h1>Customer's Orders</h1>
            <div class="input-group">
                <input type="search" placeholder="Search Data...">
            </div>
            <div class="daily-report">
                <form action="" method="POST">
                      <select name="report" id="" onchange="this.form.submit()">
                          <option value="Today">Today</option>
                          <option value="week">This Week</option>
                          <option value="month">Month</option>
                      </select>
                      </form>
                </div>
            <div class="export__file">
                <label for="export-file" class="export__file-btn" title="Export File"></label>
                <input type="checkbox" id="export-file">
                <div class="export__file-options">
                    <label>Export As &nbsp; &#10140;</label>
                    <label for="export-file" id="toPDF">PDF <img src="../images/pdf.png" alt=""></label>
                    <label for="export-file" id="toJSON">JSON <img src="../images/json.png" alt=""></label>
                    <label for="export-file" id="toCSV">CSV <img src="../images/csv.png" alt=""></label>
                    <label for="export-file" id="toEXCEL">EXCEL <img src="../images/excel.png" alt=""></label>
                </div>
            </div>
        </section>
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                        <th> Product <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Customer <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Location <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Order Date <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Quantity <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Total Amount <span class="icon-arrow">&UpArrow;</span></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                       $report = isset($_GET['report']) ? $_GET['report']: 'Today';
                       $sql_command = "SELECT * FROM `order`";                         
                     if($report == 'Today') {
                        $sql_command .= " WHERE DATE(STR_TO_DATE(order_date, '%Y-%m-%d %H:%i:%s')) = CURDATE()";
                    }elseif ($report == 'week') {
                        $sql_command .= " WHERE YEARWEEK(STR_TO_DATE(order_date, '%Y-%m-%d %H:%i:%s'), 1) = YEARWEEK(CURDATE(), 1)";
                    }elseif ($report == 'month') {
                        $sql_command .= " WHERE MONTH(STR_TO_DATE(order_date, '%Y-%m-%d %H:%i:%s')) = MONTH(CURDATE()) AND YEAR(STR_TO_DATE(order_date, '%Y-%m-%d %H:%i:%s')) = YEAR(CURDATE())";
                    }
                      
                    $sql_result = $conn->query($sql_command);

                       if($sql_result -> num_rows > 0){
                          while($row = $sql_result->fetch_assoc()){
                            $order_num = $row['order_number'];
                              $sql_data = "SELECT * FROM customer WHERE order_number = '$order_num'";
                              $data_result = $conn->query($sql_data);
                              if($data_result->num_rows > 0){
                                   while($data_row = $data_result->fetch_assoc()){
                                    print_r($data_row);
                    ?>
                    <!-- <tr>
                        <td> 1 </td>
                        <td> <img src="../images/Zinzu Chan Lee.jpg" alt="">Zinzu Chan Lee</td>
                        <td> Seoul </td>
                        <td> 20<?php echo $row['order_date']?></td>
                        <td>
                            45
                        </td>
                        <td> <strong> $128.90 </strong></td>
                    </tr> -->
                    <tr>
                        <td> 3</td>
                        <td><img src="../images/Sonal Gharti.jpg" alt=""> Sonal Gharti </td>
                        <td> Tokyo </td>
                        <td> 14 Mar, 2023 </td>
                        <td>
                            45                     </td>
                        <td> <strong>$210.40</strong> </td>
                    </tr>
                    <tr>
                        <td> 4</td>
                        <td><img src="../images/Alson GC.jpg" alt=""> Alson GC </td>
                        <td> New Delhi </td>
                        <td> 25 May, 2023 </td>
                        <td>
                            45
                        </td>
                        <td> <strong>$149.70</strong> </td>
                    </tr>
                    <tr>
                        <td> 5</td>
                        <td><img src="../images/Sarita Limbu.jpg" alt=""> Sarita Limbu </td>
                        <td> Paris </td>
                        <td> 23 Apr, 2023 </td>
                        <td>
                            45                     </td>
                        <td> <strong>$399.99</strong> </td>
                    </tr>
                    <?php 
                       }
                     }
                    }
                    }
                    ?>
                </tbody>
            </table>
        </section>
    </main>
     <script src="../js/index.js"></script>
</body>
</html>