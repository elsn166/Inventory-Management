<!DOCTYPE html>
<html lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Dashboard</title>

        <!-- Favicon -->
        <link rel="icon" href="dist/images/Papoose_Logo4.png" type="image/x-icon">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!--Plugin CSS-->
        <link href="dist/css/plugins.css" rel="stylesheet">

        <!--main Css-->
        <link href="dist/css/main.css" rel="stylesheet">
    </head>
    <style>
    #content{
        right:0px !important;
    }
    
  .form-group  .form-control{
  width: 100%;
  padding: 12px 20px !important;
  margin: 8px 0 !important;
  box-sizing: border-box !important;
  border: 2px solid #ccc !important;
  -webkit-transition: 0.5s !important;
  transition: 0.5s !important;
  outline: none !important;
  border-radius:8px !important;
}

.form-group .form-control:focus {
  border: 3px solid #555 !important;
}
    </style>
    <body>
<!-- insert -->
<?php
if(isset($_POST['submit']))
{
$Bar_Code=$_POST['Bar_Code'];
$Category=$_POST['Category'];
$Product=$_POST['Product'];
$Color=$_POST['Color'];
$Model=$_POST['Model'];
$Productcode=$_POST['Productcode'];
$RAM=$_POST['RAM'];
$Storage=$_POST['Storage'];
$Warrenty=$_POST['Warrenty'];
$IMEI_No=$_POST['IMEI_No'];
$Price=$_POST['Price'];
$MRP=$_POST['MRP'];
$Quantity=$_POST['Quantity'];
$Total=$_POST['Total'];
$Discount=$_POST['Discount'];
$Paid=$_POST['Paid'];
$Balance=$_POST['Balance'];
$Grant_Total=$_POST['Grant_Total'];

include 'dbconfig.php';
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql= "INSERT INTO product_form (barcode,Category,Product,Color,Model,Product_Code,RAM,Storage,Warrenty,IMEI_No,Price,MRP,Quantity,Total,Discount,Paid,Balance,Grant_Total)VALUES
                                ('$Bar_Code','$Category','$Product','$Color','$Model',$Productcode,$RAM,$Storage,$Warrenty,$IMEI_No,$Price,$MRP,$Quantity,$Total,$Discount,$Paid,$Balance,$Grant_Total)";
if ($conn->query($sql) === TRUE){
    echo "<script type='text/javascript'>window.location='invoice.php?&success=Saved Successfully';</script>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
} 
$conn->close();

} 

?>

<!-- insert -->

        <!-- Main-Content -->
        <div class="wrapper">
          <?php require 'left-menu.php'?>
            <div id="content">
                <div class="container-fluid px-0">
                  <?php require'header.php'?>
              <div class="row">
                        <div class="col-12 col-sm-12">
                            <div class="card eagle-border-light">
                               <div class="card-body">
                             <div class="card eagle-border-light eagle-shadow mb-4">
                                <div class="card-header eagle-bg-light eagle-border-light">
                                    <div class="btn-group float-right">
                                        <a href="" class="drop-btn text-white text-center eagle-rounded-circle-50 eagle-bg-primary" data-toggle="dropdown"><small> <i class="ion ion-arrow-down-b"></i> </small></a>
                                        <div class="dropdown-menu bg-white border-0">
                                            <a class="dropdown-item" href="#"><i class="icofont icofont-ui-edit text-success pr-2"></i> Edit</a>
                                            <a class="dropdown-item" href="#"><i class="icofont icofont-close-circled text-danger pr-2"></i> Deleat</a>
                                            <a class="dropdown-item" href="#"><i class="icofont icofont-shield-alt text-warning pr-2"></i> Cancel</a>
                                        </div>
                                    </div>
                                    <h6 class="mb-0">Customer Name:</h6>
                                </div>
                                <div class="card-body">
                                <form method="post" action=""  enctype="multipart/form-data">
                                  <div class="row">
                                 <div class="form-group col-4">
                                    <label class="eagle-dark">Bar Code</label>
                                    <input type="text" class="form-control" placeholder="Enter Bar Code" name="Bar_Code">
                                     </div>
                                     <div class="form-group col-4">
                                    <label class="eagle-dark">Category</label>
                                    <input type="text" class="form-control" placeholder="Enter Category" name="Category">
                                     </div>
                                    <div class="form-group col-4">
                                    <label class="eagle-dark">Product</label>
                                    <input type="text" class="form-control" placeholder="Enter Product" name="Product">
                                     </div>
                                     <div class="form-group col-4">
                                    <label class="eagle-dark">Color</label>
                                    <input type="text" class="form-control" placeholder="Enter Color" name="Color">
                                     </div>
                                     <div class="form-group col-4">
                                    <label class="eagle-dark">Model</label>
                                    <input type="text" class="form-control" placeholder="Enter Model" name="Model">
                                     </div>
                                    <div class="form-group col-4">
                                    <label class="eagle-dark">Product Code</label>
                                    <input type="text" class="form-control" placeholder="Enter Product Code" name="Productcode">
                                     </div>
                                     <div class="form-group col-4">
                                    <label class="eagle-dark">RAM</label>
                                    <input type="text" class="form-control" placeholder="Enter RAM" name="RAM">
                                     </div>
                                     <div class="form-group col-4">
                                    <label class="eagle-dark">Storage</label>
                                    <input type="text" class="form-control" placeholder="Enter Storage" name="Storage">
                                     </div>
                                    <div class="form-group col-4">
                                    <label class="eagle-dark">Warrenty</label>
                                    <input type="text" class="form-control" placeholder="Enter Warrenty" name="Warrenty">
                                     </div>
                                    <div class="form-group col-6">
                                    <label class="eagle-dark">IMEI No</label>
                                    <input type="text" class="form-control" placeholder="Enter IMEI No" name="IMEI_No">
                                     </div>
                                      <div class="form-group col-6">
                                    <label class="eagle-dark">Price</label>
                                    <input type="text" class="form-control" placeholder="Enter Price" name="Price">
                                     </div>
                                      <div class="form-group col-6">
                                    <label class="eagle-dark">MRP</label>
                                    <input type="text" class="form-control" placeholder="Enter MRP" name="MRP">
                                     </div>
                                      <div class="form-group col-6">
                                    <label class="eagle-dark">Quantity</label>
                                    <input type="text" class="form-control" placeholder="Enter Quantity" name="Quantity">
                                     </div>
                                      <div class="form-group col-6">
                                    <label class="eagle-dark">Total</label>
                                    <input type="text" class="form-control" placeholder="Enter Total" name="Total">
                                     </div>
                                      <div class="form-group col-6">
                                    <label class="eagle-dark">Discount</label>
                                    <input type="text" class="form-control" placeholder="Enter Discount" name="Discount">
                                     </div>
                                      <div class="form-group col-6">
                                    <label class="eagle-dark">Paid</label>
                                    <input type="text" class="form-control" placeholder="Enter Paid" name="Paid">
                                     </div>
                                      <div class="form-group col-6">
                                    <label class="eagle-dark">Balance</label>
                                    <input type="text" class="form-control" placeholder="Enter Balance" name="Balance">
                                     </div>
                                       <div class="form-group col-12">
                                    <label class="eagle-dark">Grant Total</label>
                                    <input type="text" class="form-control" placeholder="Enter Grant Total" name="Grant_Total">
                                     </div>
                                    <div class="card-footer col-12">
                                     <button type="submit" name="submit" class="btn btn-primary">SUBMIT</button>
                                   </div>
                                  </div>
                                </form>
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
        
        <script  src="dist/js/plugins.js"></script>
        <script src="dist/js/common.js"></script>
    </body>
</html>