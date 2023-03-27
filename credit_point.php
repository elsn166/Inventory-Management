<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Credit Point|Inventory</title>

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

<div id="here">
                     <div class="row">
                        <div class="col-12 ">
                            <div class="card eagle-border-light">
                                <div class="card-header eagle-bg-light eagle-border-light">
                                    <div class="btn-group float-right">
                                              <div class="sel">
        <select class="form-control" id="custo" name="custo"  aria-label="Select Customers" required>
          <option value="customer" selected disabled>Select Customers</option>

          <?php
            include 'dbconfig.php';
            $date1=date('Y/m/d');
            $time1=date('h:i:sa');
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT customer FROM bill";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                  echo '<option value='.$row["customer"].'>'.$row["customer"].'</option>';
                }
              } else {
            }
            $sql = "SELECT customer FROM bill1";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                  echo '<option value='.$row["customer"].'>'.$row["customer"].'</option>';
                }
              } else {     
            }
          ?>
        </select>
      </div>
      <div class="invo mx-2  ">
               <a href="invoice.php" class="btn btn-primary shadow-sm" style="vertical-align: middle;"><i class="fas fa-users mx-1"></i>Create New Invoice</a>
      </div>

                                    </div>
                                    <h6 class="mb-0">Customer Credit Point </h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="example" class="table table-bordered w-100">
                                         
        <thead>
             <tr class="" style="background: azure; color: darkcyan;">
                
                <th>Customer Name</th>
                <th>Points</th>
                <th>Amount</th>
                <th>Total</th>
                <th>Date</th>
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
$sql = "SELECT customer, point, amount, total, date1 FROM creditpoint";
// $sql = "SELECT customer, mobiles,color,model,address,mobile,email,date1,time1,Warranty,gtotal,ram,storage,battery,camera,display,expandable,processor,ime,total,price,mrp FROM bill WHERE date1='$date13'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo '<tr>
                  <td scope="row">' . $row["customer"]. '</td>
                  <td>' . $row["point"] .'</td>
                  <td>' . $row["amount"] .'</td>
                  <td>' . $row["total"] .'</td>
                  <td>' . $row["date1"] .'</td>
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
 
                </div>
            </div>
        </div>
        <!-- End Main-Content -->

        <!-- Top To Bottom-->
        <div class="scrollup text-center eagle-bg-primary text-white"><i class="ion-ios-upload"></i></div>        
        <!-- End Top To Bottom-->

        <!-- jQuery -->
<script>
    $(document).ready(function() {
$('#custo').change(function(event){
        var tus = document.getElementById("custo").value;
                $.ajax({
                    url: 'index24.php',
                    type: 'GET',
                    data: { var_PHP_data: tus },
                    success: function(data) {
                        $('#tbody').html(data);
                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown) {
                                   }               //case error                    }
            });
});

});
</script>
        <script  src="dist/js/plugins.js"></script>
        <script src="dist/js/common.js"></script>
    </body>
</html>