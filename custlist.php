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
    </style>
    <body>
<!-- insert -->
<?php
if(isset($_POST['submit']))
{
$name=$_POST['user_name'];
$number=$_POST['number'];
$email=$_POST['email'];
$gst=$_POST['gst'];
$address=$_POST['address'];
$purchase_from=$_POST['purchase_from'];

include 'dbconfig.php';
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql= "INSERT INTO invoice_form (name,number,email,gst,address,purchase_from)VALUES('$name','$number','$email','$gst','$address','$purchase_from')";
if ($conn->query($sql) === TRUE){
    echo "<script type='text/javascript'>window.location='product_form.php?&success=Saved Successfully';</script>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
} 
$conn->close();

} 

?>

<!-- insert -->
        <!-- Main-Content -->
              <div class="row">
                        <div class="col-12 col-sm-12">
                            <div class="card eagle-border-light">
                               <div class="card-body">
                             <div class="card eagle-border-light eagle-shadow mb-4">
                                <div class="card-header eagle-bg-light eagle-border-light">
                                    <div class="btn-group float-right">
                                      <!--  <a href="" class="drop-btn text-white text-center eagle-rounded-circle-50 eagle-bg-primary" data-toggle="dropdown"><small> <i class="ion ion-arrow-down-b"></i> </small></a>
                                        <div class="dropdown-menu bg-white border-0">
                                            <a class="dropdown-item" href="#"><i class="icofont icofont-ui-edit text-success pr-2"></i> Edit</a>
                                            <a class="dropdown-item" href="#"><i class="icofont icofont-close-circled text-danger pr-2"></i> Deleat</a>
                                            <a class="dropdown-item" href="#"><i class="icofont icofont-shield-alt text-warning pr-2"></i> Cancel</a>
                                        </div>-->
                                    </div>
                                    <h6 class="mb-0"></h6>
                                </div>
                                <div class="card-body">
                                   <form action="customerdetail.php" method="post" name="frmContact">
            <div class="row">
                <div class="col-6">
                    <div class="customer_name">
                      <h6>Customer Name</h6>
                      <div class="form-outline input-group mb-3">
                        <input type="text" class="form-control" name="cus_nam" id="" required/>
                        <!-- <label class="form-label" for="form19"></label> -->
                      </div>
                    </div>
                </div>
                <div class="col-6">
                  <div class="customer_name">
                    <h6>Mobile No</h6>
                    <div class="form-outline input-group mb-3">
                      <input type="text"  class="form-control" name="mobileno" id="" required/>
                      <!-- <label class="form-label" for="form19"></label> -->
                    </div>
                  </div>
              </div>
            </div>
    
            <div class="row">
                <div class="col-6">
                  <h6>E-Mail</h6>

                    <div class="form-outline input-group mb-3">
                      <input type="email" class="form-control" name="email" id="" />
                      <!-- <label class="form-label" for="form19"></label> -->
                    </div>
                </div>
    
                <div class="col-6">
                  <h6>GST No</h6>
    
                  <div class="form-outline input-group mb-3">
                    <input type="text"  class="form-control" name="GST_NO" id="" />
                    <!-- <label class="form-label" for="form19"></label> -->
                  </div>
                </div>
            </div>
    
            <div class="row">
                <div class="col-6">
                    <h6>Address</h6>
    
                  <div class="form-outline">
                      <textarea class="form-control" id="textAreaExample" rows="4" name="address"></textarea>
                      <!-- <label class="form-label" for="textAreaExample">Message</label> -->
                  </div>
                </div>
                
                <div class="col-6">
                  <h6>Purchase From</h6>
    
                  <div class="form-outline input-group mb-3">
                    <!--<input type="text"  class="form-control" name="purchase_From" id="" />-->
                    <!-- <label class="form-label" for="form19"></label> -->
                    <select type="text"  class="form-control" name="purchase_from" id="">
                      <option value=""></option>
                      <option value="Papoosekart Website">Papoosekart Website</option>
                      <option value="Instagram">Instagram</option>
                      <option value="Facebook">Facebook</option>
                      <option value="Inventory website">Inventory website</option>
                    </select>
                  </div>
                </div>
            </div>
                
                <div class="invoice_submit my-2">
                <button type="submit" class="btn btn-primary" name="" id="" style="margin-left: 50px;">Submit</button>
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