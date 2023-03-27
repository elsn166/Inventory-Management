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
                        <div class="col-12 col-sm-12">
                            <div class="card eagle-border-light">
                                <div class="card-header eagle-bg-light eagle-border-light">
                                    <div class="btn-group float-right">
      <div class="invo mx-2">
               <a href="product.php" class="btn btn-primary shadow-sm" style="vertical-align: middle;"><i class="fas fa-users mx-1"></i> Add product</a>
      </div>
            </div>
            <h6 class="mb-0">Product Details </h6>
            </div>
<div class="card-body">
    <div class="table-responsive">
        <table id="example" class="table table-bordered w-100">
                   <thead>
            <tr class="" style="background: azure; color: darkcyan;">
              <th>Product</th>
           <!--   <th>supplier</th>      -->      
              <th>price</th>
              <th>MRP</th>
              <!--<th>Warrenty</th>-->
              <th>Category</th>
              <th>Model</th>
              <th>Color</th>
            <!--  <th>Ram</th>
              <th>Storage</th>-->
             <!-- <th>Image</th>-->
              <th>action</th>
                    </tr>
                  </thead>
                  <tbody>
        <?php 
include'dbconfig.php';
$date1=date('Y/m/d');
$time1=date('h:i:sa');
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM smart_deal1";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $image=$row['image'];
        echo '<tr>
                  <td scope="row">' . $row["mobiles"]. '</td>
                  <td>' . $row["price"] .'</td>
                  <td>' . $row["MRP"] .'</td>
        
                  <td>' . $row["Category"] .'</td>
                  <td>' . $row["model"] .'</td>
                  <td>' . $row["color"] .'</td>
                <!-- <td><img src="data:image/=jpeg;base64,'.base64_encode ($image).'" width="80%" height="50" class=" mx-auto d-block" id="file-ip-4-preview" id="getImage2"/></td>-->
                  <td>
                  <a href="deleteproduct.php?action=edit&amp;id='.$row['id'].'"><span class="btn btn-dark mx-1"><i class="fas fa-trash"></i></span></a>
                  <a href="editproduct.php?action=edit&amp;id='.$row['id'].'"><span class="btn btn-dark"><i class="fas fa-pen"></i></span></a>
                  <a href="addstock2.php?action=edit&amp;id='.$row['id'].'"><span class="btn btn-success"><i class="fas fa-plus"></i></span></a></td>
                </tr>';
    }
} else {
    // echo "0 results";
} 
?>
          </tbody>
            <!--    <tfoot>
                <tr>                            
              <th>Product</th>
              <th>supplier</th>            
              <th>price</th>
              <th>MRP</th>
              <th>Warrenty</th>
              <th>Category</th>
              <th>Model</th>
              <th>Color</th>
              <th>Ram</th>
              <th>Storage</th>
              <th>Processor</th>
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
        <script  src="dist/js/plugins.js"></script>
        <script src="dist/js/common.js"></script>
    </body>
</html>