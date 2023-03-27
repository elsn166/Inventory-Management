<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ADD Stock|Inventory</title>

        <!-- Favicon -->
        <link rel="icon" href="dist/images/Papoose_Logo4.png" type="image/x-icon">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!--Plugin CSS-->
        <link href="dist/css/plugins.css" rel="stylesheet">
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <!--main Css-->
        <link href="dist/css/main.css" rel="stylesheet">
    </head>
    <style>
    #content{
        right:0px !important;
    }
    </style>
    <body>
<!-- insert operation -->

<!-- insert operation -->
 
        <!-- Main-Content -->
        <div class="wrapper">
          <?php require 'left-menu.php'?>
            <div id="content">
                <div class="container-fluid px-0">
                  <?php require'header.php'?>
<h2>Credit Customers</h2>
    <div class="card eagle-border-light">
                                <div class="card-header eagle-bg-light eagle-border-light">
                                  <!--  <div class="btn-group float-right">
                                        <a href="" class="drop-btn text-white text-center eagle-rounded-circle-50 eagle-bg-primary" data-toggle="dropdown"><small> <i class="ion ion-arrow-down-b"></i> </small></a>
                                        <div class="dropdown-menu bg-white border-0">
                                            <a class="dropdown-item" href="#"><i class="icofont icofont-ui-edit text-success pr-2"></i> Edit</a>
                                            <a class="dropdown-item" href="#"><i class="icofont icofont-close-circled text-danger pr-2"></i> Deleat</a>
                                            <a class="dropdown-item" href="#"><i class="icofont icofont-shield-alt text-warning pr-2"></i> Cancel</a>
                                        </div>
                                    </div>-->
                                    <h6 class="mb-0">Customer Credit</h6>
                                </div>
                               <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="example" class="table table-bordered w-100">
                                           <thead>
               <tr class="" style="background: azure; color: darkcyan;">
                <th>Name</th></th>
                <th>Mobile Number</th>
                <th>Product</th>
                <th>Pending Amount</th>
                <th>Purchase Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody id='tbody'>
<?php 
  include 'dbconfig.php';
$test=$_GET['var_PHP_data'];
$date13=date('Y/m/d');
$time1=date('h:i:sa');
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM bill WHERE balance >=1 GROUP BY invoiceno ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo '<tr>
                  <td>' . $row["customer"] .'</td>
                  <td>' . $row["mobile"] .'</td>
                  <td>' . $row["model"] .'</td>
                  <td>' . $row["balance"] .'</td>
                  <td>' . $row["date1"] .'</td>
                  <td><a href="editduepending.php?action=edit&amp;id='.$row['invoiceno'].'"><span class="btn btn-info mx-1">Received</span></a></td>
                </tr>';
    }
} else {
    // echo "0 results";
} 

?>
        </tbody>
    </table>
</div>
</div>
</div>
</div>
 </div>
</div>
    </div>    <!-- End Main-Content -->
        <!-- Top To Bottom-->
        <div class="scrollup text-center eagle-bg-primary text-white"><i class="ion-ios-upload"></i></div>        
        <!-- End Top To Bottom-->
        <!-- jQuery -->
        <script  src="dist/js/plugins.js"></script>
        <script src="dist/js/common.js"></script>
    </body>
</html>