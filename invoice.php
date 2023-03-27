<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Productdetails|Inventory</title>
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
        <!-- Main-Content -->
        <div class="wrapper">
           <?php require 'left-menu.php'?>
             <div id="content">
               <div class="container-fluid px-0">
                 <?php require'header.php'?>
               <div id="here">
                     <div class="row">
                        <div class="col-12 col-sm-12">
                            <div class="card eagle-border-light">
                                <div class="card-header eagle-bg-light eagle-border-light">
                                    <div class="btn-group float-right">
    
      <div class="invo mx-2">
        <a href="javascript:void(0)" class="btn btn-primary shadow-sm" id="custlist" style="vertical-align: middle;"><i class="fas fa-users mx-1"></i> Add Invoice</a>
      </div>

</div>
<h6 class="mb-0">Invoice Data </h6>
</div>
 <div class="card-body">
    <div class="table-responsive">
        <table id="example" class="table table-bordered w-100">
          <thead>
            <tr class="" style="background: azure; color: darkcyan;">
                            <th>Customer Name</th>
                            <th >invoicenumber</th>
                            <th hidden>Product Name</th>
                            <th>contact Number</th>
                            <th>Purchase From</th>
                            <th>Payment</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th hidden>id</th>
                            <th><center>Action</center></th>
                       </tr>
                    </thead>
                <tbody>
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
$sql = "SELECT * FROM bill GROUP BY invoiceno";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo '<tr>
                  <td scope="row">'. $row["customer"].'</td>
                  <td  >'.$row["invoiceno"] .'</td>
                  <td hidden>' . $row["mobiles"] .'</td>
                  <td>' . $row["mobile"] .'</td>
                  <td>' . $row["purchase_from"] .'</td>
                  <td>' . $row["paid"] .'</td>
                  <td>' . $row["date1"] .'</td>
                  <td>' . $row["time1"] .'</td>
                  <td  hidden>'.$row["id"] .'</td>
                   <td><button id="btn1" class="btn1" style="background: white;color: black;border-radius: 8px;"><i class="fa fa-print"></i></button>
                  <button id="btn3" class="btn3" style="background: white;color: black;border-radius: 8px;"><i class="fa fa-bars"></i></button>
                  <a href="delete1.php?action=edit&amp;id='.$row['invoiceno'].'"><span class="btn btn-dark mx-1"><i class="fas fa-trash"></i></span></a>
                  <a href="editinvoice.php?action=edit&amp;id='.$row['invoiceno'].'"><span class="btn btn-dark"><i class="fas fa-pen"></i></span></a></td>
                </tr>';
    }
} else {
    // echo "0 results";
} 

?>
                        
        </tbody>
          <!--   <tfoot>
                <tr>
                <th>Customer Name</th>
                <th>Product Name</th>
                <th>contact Number</th>
                <th>Email</th>
                <th>Payment</th>
                <th>Date</th>
                <th>Time</th>
                <th>Billing Person</th>
                <th><center>action</center></th>
                                                </tr>
                                            </tfoot>-->
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
$('#custlist').click(function(event){
        var tus = "customer list";
                $.ajax({
                    url: 'custlist.php',
                    type: 'GET',
                    data: { var_PHP_data: tus },
                    success: function(data) {
                        $('#here').html(data);
                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown) {
                                   }               //case error                    }
            });
});
});
</script>
<script>
$('#example').on('click', '#btn1', function() {
  var tus = $(this).closest('tr').find('td:first').text();
  var id1 = $(this).closest('tr').find('td:eq(1)').text();
  var tus1 = $(this).closest('tr').find('td:eq(7)').text();
  var tus2 = $(this).closest('tr').find('td:eq(8)').text();
  //alert(id1);
  $.post('edit.php',{postname:tus, dateva:tus1, timeva:tus2,id:id1},function(data){
        //alert(tus);
    window.location.replace("https://inventory.staging-rdegi.com/testing.php");
  });
});
$('#example').on('click', '#btn2', function() {
  var tus = $(this).closest('tr').find('td:first').text();
  var tus1 = $(this).closest('tr').find('td:eq(7)').text();
  var tus2 = $(this).closest('tr').find('td:eq(8)').text();

  $.post('edit.php',{postname:tus, dateva:tus1, timeva:tus2},function(data){
//alert(tus);
    window.location.replace("https://inventory.staging-rdegi.com/billingedit.php");
  });
});

$('#example').on('click', '#btn3', function() {
  var tus = $(this).closest('tr').find('td:first').text();
  var id1 = $(this).closest('tr').find('td:eq(1)').text();
  var tus3 = $(this).closest('tr').find('td:eq(5)').text();
  var tus1 = $(this).closest('tr').find('td:eq(8)').text();
  //var tus2 = $(this).closest('tr').find('td:eq(8)').text();
  $.post('edit.php',{postname:tus, barcode:tus1, amt:tus3,id:id1},function(data){
      
//alert(tus);
//alert(tus1);
//alert(tus2);
//alert(tus3);
    window.location.replace("https://inventory.staging-rdegi.com/payscript.php");

  });
});
</script>
        <script  src="dist/js/plugins.js"></script>
        <script src="dist/js/common.js"></script>
    </body>
</html>