<?php
  session_start();
  echo $_SESSION['billing_person'];
?>
<!DOCTYPE html>
<html lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Products|inventory</title>

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
      <div class="invo mx-2">
        <a href="invoice.php" class="btn btn-primary shadow-sm" style="vertical-align: middle;"><i class="fas fa-user-tag mx-1"></i> View Invoice</a>
      </div>
      <div class="sear">
        <a href="javascript:void(0)" class="text-dark" id="search_ico"><i class="material-icons-outlined hover-overlay ripple search_btn" data-mdb-ripple-color="#b1b1b1">search</i></a>
      </div>
    </div>
  </div>



<style>
.alert {
  padding: 20px;
  background-color: green;
  color: white;
}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}
</style>

<!-- insert operation -->

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
                                   <!-- <div class="sel">
                                        <select class="form-control" aria-label="Type" id='custo' onchange='cha()' name="custo">
                                          <option value="customer" selected disabled>Type</option>
                                          <option value="Accessories">Accessories</option>
                                        </select>
                                    </div>-->
                                      <div class="invo mx-2">
                                       <!-- <a href="productreport.php" class="btn btn-primary shadow-sm" style="vertical-align: middle;"><i class="fas fa-user-tag mx-1"></i> View Products</a>-->
                                      </div>
                                    </div>
                                   
                                </div>


<?php 
include'dbconfig.php';
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$id=$_GET['id'];
$sql = "SELECT * FROM smart_deal1 WHERE id='$id'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
                while($row = $result->fetch_assoc()) {
                $mobile= $row['mobiles'];
                $supplier=$row["supplier"]; 
                $price=$row["price"];
                $MRP=$row["MRP"];
                $Warranty=$row["Warranty"]; 
                $Category=$row["Category"]; 
                $model=$row["model"]; 
                $color=$row["color"]; 
                $ram=$row["ram"];
                $storage=$row["storage"]; 
                $processor=$row["processor"];
                $image=$row["image"];
                
                     //  echo'<input type="text" id="mobile" name="mobile" class="form-control" value="'.$mobile.'">';
               
                
    }}
    //echo $mobile;
?>
    <div class="card-body">
      <div class="row">
        <div class="col-12">
          <div class="card p-0 my-4 rounded-sm shadow">
            <div class="card-body" id="bod">
                <form action="editpro.php" method="post" enctype="multipart/form-data">
                    <div class="row my-3">
                        <div class="col-12 col-lg-6">
                          <h6>Category</h6>
                          <div class="form-outline input-group">
                              <input type="text" id="category" name="category" class="form-control"  value=<?php echo $Category ?> >
                              <!-- <label class="form-label" for="form12">Example label</label> -->
                          </div>
                        </div>
                       <!-- <div class="col-12 col-lg-6">
                          <h6>Supplier</h6>
                          <div class="form-outline input-group">
                              <!-- <label class="form-label" for="form12">Example label</label> 
                              <select id="supplier" name="supplier" class="form-control" />
//<?php
//include 'dbconfig.php';
// Create connection
//$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
//if ($conn->connect_error) {
//  die("Connection failed: " . $conn->connect_error);
//}
// $sql = "SELECT supplier_name FROM supplier_details  ";
//$result = $conn->query($sql);
//if ($result->num_rows > 0) {
//  $counter = 0;
//  while ($row1 = $result->fetch_assoc()){
//   //justification is the blob image
//    $sup_name=$row1['supplier_name'];
//echo'
 //                             <option value="'.$row1['supplier_name'].'">'.$row1['supplier_name'].'</option>';
 // }}?>
                            </select>
                          </div>
                        </div>-->
                        
                       <div class="col-12 col-lg-6">
                          <h6>Product Name</h6>
                          <div class="form-outline input-group">
                             <?php 
                             echo'<input type="text" id="mobile" name="mobile" class="form-control" value="'.$mobile.'">';
                             ?>
                              <!-- <label class="form-label" for="form12">Example label</label> -->
                          </div>
                          <input type="hidden" id="id" name="id" class="form-control" value=<?php echo $id ?>>
                        </div>
                        <div class="col-12 col-lg-6">
                          <h6>Color</h6>
                          <div class="form-outline input-group">
                              <?php
                             echo'<input type="text" id="color" name="color" class="form-control" value="'.$color.'">';
                              ?>
                              <!-- <label class="form-label" for="form12">Example label</label> -->
                          </div>
                        </div>
                      <div class="col-12 col-lg-6">
                        <h6>Model</h6>
                        <div class="form-outline input-group">
                            <?php 
                            echo'<input type="text" id="model" name="model" class="form-control" value="'.$model.'">';
                            ?>
                            <!-- <label class="form-label" for="form12">Example label</label> -->
                        </div>
                      </div>
                  
                     <!--<div class="col-12 col-lg-6">
                        <h6>RAM</h6>
                        <div class="form-outline input-group">
                            <input type="text" id="ram" name="ram" class="form-control" value=<?php echo $ram ?>>
                            <!-- <label class="form-label" for="form12">Example label</label> 
                        </div>
                      </div>
                      <div class="col-12 col-lg-6">
                        <h6>Storage</h6>
                          <div class="form-outline input-group">
                            <input type="text" id="storage" name="storage" class="form-control" value=<?php "'. $storage.'" ?>>
                            <!-- <label class="form-label" for="form12">Example label</label> 
                        </div>
                      </div>
                    <div class="col-12 col-lg-6">
                        <h6>Processor</h6>
  
                        <div class="form-outline input-group">
                            <input type="text" id="processor" name="processor" class="form-control" value=<?php  "'.$processor.'"?>>
                            <!-- <label class="form-label" for="form12">Example label</label> 
                        </div>
                      </div>-->
                     <div class="col-12 col-lg-6">
                        <h6>Price</h6>
                        <div class="form-outline input-group">
                            <?php
                            echo'<input type="text" id="price" name="price" class="form-control" value="'.$price.'">';
                            ?>
                            <!-- <label class="form-label" for="form12">Example label</label> -->
                        </div>
                      </div>
                      <div class="col-12 col-lg-6">
                        <h6>MRP</h6>
                        <div class="form-outline input-group">
                            <?php
                            echo'<input type="text" id="mrp" name="mrp" class="form-control" value="'.$MRP.'">';
                            ?>
                            <!-- <label class="form-label" for="form12">Example label</label> -->
                        </div>
                      </div>
                                     <div class="col-12 col-lg-6">
                <div class="small-box sidebar-dark-primary">
               <label type="button" class="float-left my-3 mx-2 py-1 px-2"> Choose Your File
               <input type="file" class="edit" name="img" id="fifth_name"  onchange="showPreview4(event)" >
                <?php echo' <img src="data:image/=jpeg;base64,'.base64_encode ($image).'" width="80%" height="200" id="file-ip-4-preview" id="getImage2"/>'; ?>
               </label>
                </div>
                 </div>
                 <div class="product_submit">
                      <button type="submit" class="btn btn-primary"  name="submit1" style="margin-top: 50px;">Submit</button>
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
<!-- End demo content -->

<script src="jquery.min.js"></script>
<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="bootstrap/js/bootstrap.bundle.js"></script>
<script src="./bootstrap_mdb/js/mdb.min.js"></script>
<script src="main.js"></script>
<script src="ajax_js.js"></script>
<script>
function showPreview4(event){
  if(event.target.files.length > 0){
    var src = URL.createObjectURL(event.target.files[0]);
    var preview = document.getElementById("file-ip-4-preview");
    preview.src = src;
    preview.style.display = "block";
  }
}
</script>


          <script  src="dist/js/plugins.js"></script>
        <script src="dist/js/common.js"></script>
    </body>
</html>