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
        <title>ADD Stock</title>
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
<?php
include'dbconfig.php';
$id=$_GET['id'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * from smart_deal1 where id='$id'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  $counter = 0;
  while ($row1 = $result->fetch_assoc()) {
  $mobiles=$row1['mobiles'];
  $color1=$row1['color'];
  $model=$row1['model'];
  $price=$row1['price'];
  $mrp=$row1['MRP'];
  $Warranty=$row1['Warranty'];
  $Category=$row1['Category'];
  $image=$row1['image'];
  }}
  ?>

<!-- insert operation -->
        <!-- Main-Content -->
         <div class="wrapper">
          <?php require 'left-menu.php'?>
            <div id="content">
                <div class="container-fluid px-0">
                  <?php require'header.php'?>
      <div class="row">
        <div class="col-12">
          <div class="card p-0 my-4 rounded-sm shadow">
            <div class="card-body" id="bod">
               <form action="count1.php" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-12">
                    <div class="row my-4">
                        <div class="col-4">
                          <h6>Product Code</h6>
                          <input class="form-control" hidden aria-label="Type" name="id" value="<?php echo $id?>"  >
                          <div class="sel">
                              <input id="barcode1" name="barcode" class="form-control" required>
                          </div>
                        </div>
                    <!--    <div class="col-4">
                          <h6>IME No</h6>
                          <div class="sel">
                              <input id="ime" name="ime" class="form-control">
                          </div>
                        </div>-->
                          <div class="col-4">
                          <h6>Category</h6>
                          <div class="sel">
                              <input class="form-control" readonly aria-label="Type" name="category" value="<?php echo $Category?>" >
                           <!--   <select class="form-control" aria-label="Type" name="category" value=<?php echo $Category?> >
                              <?php 
                                    // // $test = $_GET['var_PHP_data'];
                                    // include 'dbconfig.php';
                                    // $date1=date('Y/m/d');
                                    // $time1=date('h:i:sa');
                                    // $conn = new mysqli($servername, $username, $password, $dbname);
                                    // // Check connection
                                    // if ($conn->connect_error) {
                                    // die("Connection failed: " . $conn->connect_error);
                                    // }
                                    // $sql = "SELECT category FROM smart_deal1";
                                    // $result = $conn->query($sql);

                                    // if ($result->num_rows > 0) {
                                    //     // output data of each row
                                    //     while($row = $result->fetch_assoc()) {
                                    //         echo '<option value='.$row["category"].'>'.$row["category"].'</option>';
                                    // $mob=$row["category"];
                                    //     }
                                    // } else {
                                    //     echo "0 results";
                                    // } 
                                ?>
                              </select>-->
                          </div>                    
                          </div>
                        <div class="col-4">
                          <h6>Product Name</h6>
                            <div class="sel">
                            <input class="form-control"  aria-label="Type" name="mobiles" readonly value="<?php echo $mobiles ?>" >
                             <!-- <select class="form-control" aria-label="Type" name="mobiles" value=<?php echo $mobiles ?>>-->
                                <?php 
                                    // // $test = $_GET['var_PHP_data'];
                                    // include 'dbconfig.php';

                                    // $date1=date('Y/m/d');
                                    // $time1=date('h:i:sa');

                                    // $conn = new mysqli($servername, $username, $password, $dbname);
                                    // // Check connection
                                    // if ($conn->connect_error) {
                                    // die("Connection failed: " . $conn->connect_error);
                                    // }

                                    // $sql = "SELECT mobiles FROM smart_deal1";
                                    // $result = $conn->query($sql);

                                    // if ($result->num_rows > 0) {
                                    //     // output data of each row
                                    //     while($row = $result->fetch_assoc()) {
                                    //         echo '<option value='.$row["mobiles"].'>'.$row["mobiles"].'</option>';
                                    // $mob=$row["mobiles"];
                                    //     }
                                    // } else {
                                    //     echo "0 results";
                                    // } 
                                ?>
                                <!-- <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option> -->
                           <!--   </select>-->
                          </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="row my-4">
                        <!--<div class="col-4">
                          <h6>Supplier</h6>
                          <div class="sel">
                              <select class="form-control" aria-label="Type" name="supplier">
                                <!--<option value="mobile" selected disabled>Supplier</option>-->
                                <!--<option value="samsung">Samsung</option>-->
                                <!--<option value="lava">Lava</option>-->
                                <!-- <option value="3">Three</option> -->
                              <?php 
                                    // $test = $_GET['var_PHP_data'];
                                  //  include 'dbconfig.php';
                                //     // $date1=date('Y/m/d');
                                //     $time1=date('h:i:sa');
                                //     $conn = new mysqli($servername, $username, $password, $dbname);
                                //     // Check connection
                                //     if ($conn->connect_error) {
                                //     die("Connection failed: " . $conn->connect_error);
                                //     }
                                //     $sql = "SELECT supplier FROM smart_deal1";
                                //     $result = $conn->query($sql);
                                //     if ($result->num_rows > 0) {
                                //         // output data of each row
                                //         while($row = $result->fetch_assoc()) {
                                //             echo '<option value='.$row["supplier"].'>'.$row["supplier"].'</option>';
                                //     $mob=$row["supplier"];
                                //         }
                                //     } else {
                                //         echo "0 results";
                                //     } 
                                // ?>
                            <!--  </select>
                          </div>
                        </div>-->
                        <div class="col-6">
                          <h6>Color</h6>
                          <div class="sel">
                             <input class="form-control" readonly aria-label="Type" name="color" value="<?php echo $color1 ?>">
                              <!--<select class="form-control" aria-label="Type" name="color">
                                <option value="color" selected disabled>Color</option>
                                <?php 
                                    include 'dbconfig.php';
                                    // $test = $_GET['var_PHP_data'];
                                    // $servername = "localhost";
                                    // $username = "starking_software";
                                    // $password = "billingsoftware";
                                    // $dbname = "starking_software";
                                    // $date1=date('Y/m/d');
                                    // $time1=date('h:i:sa');
                                    // $conn = new mysqli($servername, $username, $password, $dbname);
                                    // // Check connection
                                    // if ($conn->connect_error) {
                                    //   die("Connection failed: " . $conn->connect_error);
                                    // }
                                    // $sql = "SELECT color FROM smart_deal1";
                                    // $result = $conn->query($sql);
                                    // if ($result->num_rows > 0) {
                                    //     // output data of each row
                                    //     while($row = $result->fetch_assoc()) {
                                    //         echo '  <option value='.$row["color"].'>'.$row["color"].'</option>';
                                    //     $col=$row["color"];
                                    //     }
                                    // } else {
                                    //     echo "0 results";
                                    // } 
                                ?>
                                <!-- <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option> -->
                             <!-- </select>-->
                          </div>
                        </div>
                        <div class="col-6">
                             <h6>Model</h6>
                              <div class="sel">
                                <input class="form-control" readonly aria-label="Type" name="model" value="<?php echo $model ?>">
                                <!--  <select class="form-control" aria-label="Type" name="model" >
                                      <option value="model" selected disabled>Model</option>
                                      <?php 
                                            // include 'dbconfig.php';
                                            // // $test = $_GET['var_PHP_data'];
                                            // // $servername = "localhost";
                                            // // $username = "starking_software";
                                            // // $password = "billingsoftware";
                                            // // $dbname = "starking_software";
                                            // // $date1=date('Y/m/d');
                                            // // $time1=date('h:i:sa');
                                            // // $conn = new mysqli($servername, $username, $password, $dbname);
                                            // // // Check connection
                                            // // if ($conn->connect_error) {
                                            // //   die("Connection failed: " . $conn->connect_error);
                                            // // }
                                            // $sql = "SELECT model FROM smart_deal1 ";
                                            // $result = $conn->query($sql);
                                            // if ($result->num_rows > 0) {
                                            //     // output data of each row
                                            //     while($row = $result->fetch_assoc()) {
                                            //         echo '  <option value='.$row["model"].'>'.$row["model"].'</option>';
                                            // $mode=$row["model"];
                                            //     }
                                            // } else {
                                            //     echo "0 results";
                                            // } 
                                        ?>
                                      <!-- <option value="1">One</option>
                                      <option value="2">Two</option>
                                      <option value="3">Three</option> -->
                                 <!-- </select>-->
                              </div>
                          </div>
                      </div>
                      <div class="row my-4">
                        <!--  <div class="col-4">
                              <h6>RAM</h6>
                              <div class="sel">
                                  <select class="form-control" aria-label="Type" name="ram">
                                      <option value="ram" selected disabled>RAM</option>
                                      <?php 
                                        include 'dbconfig.php';
                                        // $test = $_GET['var_PHP_data'];
                                        // $servername = "localhost";
                                        // $username = "starking_software";
                                        // $password = "billingsoftware";
                                        // $dbname = "starking_software";
                                        // $date1=date('Y/m/d');
                                        // $time1=date('h:i:sa');
                                        // $conn = new mysqli($servername, $username, $password, $dbname);
                                        // // Check connection
                                        // if ($conn->connect_error) {
                                        //   die("Connection failed: " . $conn->connect_error);
                                        // }

                                        // $sql = "SELECT ram FROM smart_deal1  ";
                                        // $result = $conn->query($sql);

                                        // if ($result->num_rows > 0) {
                                        //     // output data of each row
                                        //     while($row = $result->fetch_assoc()) {
                                        //         echo '  <option value='.$row["ram"].'>'.$row["ram"].'</option>';
                                        // $Ram =$row["ram"];
                                        //     }
                                        // } else {
                                        //     echo "0 results";
                                        // } 
                                        // ?>
                                      <!-- <option value="1">One</option>
                                      <option value="2">Two</option>
                                      <option value="3">Three</option> -->
                                <!--  </select>
                              </div>
                          </div>-->
  
                      <!--  <div class="col-4">
                              <h6>Storage</h6>
  
                              <div class="sel">
                                  <select class="form-control" aria-label="Type" name="storage">
                                      <option value="storage" selected disabled>Storage</option>

                                      <?php 
                                        // $test = $_GET['var_PHP_data'];
                                        include 'dbconfig.php';
                                        // $servername = "localhost";
                                        // $username = "starking_software";
                                        // $password = "billingsoftware";
                                        // $dbname = "starking_software";

                                        // $date1=date('Y/m/d');
                                        // $time1=date('h:i:sa');

                                        // $conn = new mysqli($servername, $username, $password, $dbname);
                                        // // Check connection
                                        // if ($conn->connect_error) {
                                        // die("Connection failed: " . $conn->connect_error);
                                        // }

                                        // $sql = "SELECT storage FROM smart_deal1     ";
                                        // $result = $conn->query($sql);

                                        // if ($result->num_rows > 0) {
                                        //     // output data of each row
                                        //     while($row = $result->fetch_assoc()) {
                                        //         echo '  <option value='.$row["storage"].'>'.$row["storage"].'</option>';
                                        // $stor=$row["storage"];
                                        //     }
                                        // } else {
                                        //     echo "0 results";
                                        // } 
                                    //?>
							
                                      <!-- <option value="1">One</option>
                                      <option value="2">Two</option>
                                      <option value="3">Three</option> -->
                                <!--  </select>
                              </div>
                          </div>-->
                      </div>
  
                    
  
                     

                <!-- Second section starts-->
                <div class="row">
                    <div class="col-12">
                        <div class="row my-2">
                            <div class="col-6">
                                <h6>Stock</h6>
                                <div class="form-outline input-group">
                                    <input type="number" name="stock" id="stock"  class="form-control" onchange="total1()" required />
                                    <!-- <label class="form-label" for="form12">Example label</label> -->
                                </div>
                            </div>
                            <div class="col-6">
                                <h6>Purchase Price</h6>
                                <div class="form-outline input-group">
                                    <input type="number" name="purchaseprice" id="purchaseprice" readonly class="form-control"  value="<?php echo $price?>" />
                                    <!-- <label class="form-label" for="form12">Example label</label> -->
                                </div>
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col-6">
                                <h6>MRP</h6>
                                <div class="form-outline input-group">
                                    <input type="number" name="mrp" id="mrp" readonly class="form-control"  value=<?php echo $mrp ?> />
                                    <!-- <label class="form-label" for="form12">Example label</label> -->
                                </div>
                            </div>
                            <div class="col-6">
                                <h6>Total</h6>
                                <div class="form-outline input-group">
                                    <input type="number" name="total" id="total"  class="form-control" />
                                    <!-- <label class="form-label" for="form12">Example label</label> -->
                                </div>
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col-6">
                                <h6>Date</h6>
                                <div class="form-outline input-group">
                                    <input type="date" name="date" id="date" class="form-control opacity-100"       />
                                    <!-- <label class="form-label" for="form12">Example label</label> -->
                                </div>
                            </div>
                            <div class="col-6">
                                <h6>Paid Amount</h6>
                                <div class="form-outline input-group">
                                    <input type="number" name="paid" id="paid" class="form-control" onchange="balance()" required/>
                                    <!-- <label class="form-label" for="form12">Example label</label> -->
                                </div>
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col-6">
                                <h6>Balance</h6>
                                <div class="form-outline input-group">
                                    <input type="number" name="bal" id="bal" class="form-control" />
                                    <!-- <label class="form-label" for="form12">Example label</label> -->
                                </div>
                            </div>
                            <div class="col-6">
                                <h6>Sales Price</h6>
                                <div class="form-outline input-group">
                                    <input type="number" name="sp" id="sp" class="form-control" required  value= >
                                    <!-- <label class="form-label" for="form12">Example label</label> -->
                                </div>
                            </div>
                           
  <div class="col-6">
                <div class="small-box sidebar-dark-primary">
               <label type="button" class="float-left my-3 mx-2 py-1 px-2"> Choose Your File
               <input type="file" class="edit" name="img" id="fifth_name"  onchange="showPreview4(event)" required>
                 <img src="dist/images/noimage.jpg" alt="no file chosen" width="80%" height="200" id="file-ip-4-preview" id="getImage2"/>
               </label>
                </div>
                 </div>
                  <div class="price_submit">
                            <button type="submit" class="btn btn-primary" id="submit" style="margin-top: 50px;">Submit</button>
                        </div>
                       </div>
                       
                    </div>
                </div>
                <!-- Second section ends-->
           <!-- <div class="my-3">
                <h6>Enter Credit Points</h6>
                <div class="form-outline input-group">
                    <input type="number"  name="credit" id="credit" class="form-control" />
                    <!-- <label class="form-label" for="form12">Example label</label> 
                </div>
                
                <button type="button" onclick="myFunction3()" class="btn btn-outline-danger my-2">Close</button>
            </div>-->
        </div>
                    </div>
                          </form>
            <script>
    
    
    function myFunction1(){

debugger;

var pr1= document.getElementById("price").value;
var qt1 = document.getElementById("qty").value;

var amou1= pr1*qt1;

document.getElementById("total").value=amou1;
document.getElementById("gtotal").value=amou1;



}


</script>



<script>
    
    
    function myFunction2(){

debugger;

var pr1= document.getElementById("total").value;
var qt1 = document.getElementById("discount").value;

var amou1= pr1-qt1;

// document.getElementById("total").value=amou1;
document.getElementById("gtotal").value=amou1;



}


</script>





<script>
    
    function myFunction3(){
    
    debugger;
    
    window.location.replace("https://inventory.papoosekart.com/main.php");
    // window.location.replace("main.php");
}
</script>
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
$(document).ready(function() {
$('#custo').change(function(event){
// 	var keycode = document.;
// 	if(keycode == '13'){
	debugger;	

        var tus = document.getElementById("custo").value;
        
        if(tus=="Accessories")
{


            
                $.ajax({
                    url: 'billing3.php',
                    type: 'GET',
                    data: { var_PHP_data: tus },
                    success: function(data) {
                        $('#bod').html(data);
                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown) {
                                   }               //case error                    }
            });
}

// 	}
});

});


    
    
    
    

$(document).ready(function() {
$('#credit').keypress(function(event){
	var keycode = (event.keyCode ? event.keyCode : event.which);
	if(keycode == '13'){
		

        var tus = document.getElementById("credit").value;
        
        var tys=document.getElementById("total").value;

     var cun=document.getElementById("cun").innerHTML;
     
     alert(cun);
     
            
                $.ajax({
                    url: 'cre.php',
                    type: 'GET',
                    data: { var_PHP_data: tus, cun:cun },
                    success: function(data) {
                        document.getElementById("discount").value=data;
                        
                        var yt=tys-data;
            document.getElementById("gtotal").value=yt;            
                        
                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown) {
                                   }               //case error                    }
            });


	}
});

});


$(document).ready(function() {
$('#barcode').change(function(event){
	

        var tus = document.getElementById('barcode').value;
         


            
                $.ajax({
                    url: 'test1.php',
                    type: 'GET',
                    data: { renu11: tus },
                    success: function(data) {
                        //$('#mobileno').html(data);
                    //   alert(data);
                      document.getElementById('mobiles').value=data;
                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown) {
                                   }               //case error                    }
            });



});

});


$(document).ready(function() {
$('#barcode').change(function(event){
	

        var tus = document.getElementById('barcode').value;
         


            
                $.ajax({
                    url: 'test2.php',
                    type: 'GET',
                    data: { renu12: tus },
                    success: function(data) {
                        //$('#mobileno').html(data);
                     // alert(data);
                      document.getElementById('color').value=data;
                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown) {
                                   }               //case error                    }
            });



});

});

$(document).ready(function() {
$('#barcode').change(function(event){
	

        var tus = document.getElementById('barcode').value;
         


            
                $.ajax({
                    url: 'test3.php',
                    type: 'GET',
                    data: { renu13: tus },
                    success: function(data) {
                        //$('#mobileno').html(data);
                     // alert(data);
                      document.getElementById('model').value=data;
                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown) {
                                   }               //case error                    }
            });



});

});



$(document).ready(function() {
$('#barcode').change(function(event){
	

        var tus = document.getElementById('barcode').value;
        


            
                $.ajax({
                    url: 'test4.php',
                    type: 'GET',
                    data: { renu14: tus },
                    success: function(data) {
                        //$('#mobileno').html(data);
                     // alert(data);
                      document.getElementById('ram').value=data;
                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown) {
                                   }               //case error                    }
            });



});

});

$(document).ready(function() {
$('#barcode').change(function(event){
	

        var tus = document.getElementById('barcode').value;
         


            
                $.ajax({
                    url: 'test5.php',
                    type: 'GET',
                    data: { renu15: tus },
                    success: function(data) {
                        //$('#mobileno').html(data);
                     // alert(data);
                      document.getElementById('storage').value=data;
                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown) {
                                   }               //case error                    }
            });



});

});

$(document).ready(function() {
$('#barcode').change(function(event){
	

        var tus = document.getElementById('barcode').value;
         


            
                $.ajax({
                    url: 'test6.php',
                    type: 'GET',
                    data: { renu16: tus },
                    success: function(data) {
                        //$('#mobileno').html(data);
                     // alert(data);
                      document.getElementById('battery').value=data;
                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown) {
                                   }               //case error                    }
            });



});

});

$(document).ready(function() {
$('#barcode').change(function(event){
	

        var tus = document.getElementById('barcode').value;
         


            
                $.ajax({
                    url: 'test7.php',
                    type: 'GET',
                    data: { renu17: tus },
                    success: function(data) {
                        //$('#mobileno').html(data);
                     // alert(data);
                      document.getElementById('camera').value=data;
                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown) {
                                   }               //case error                    }
            });



});

});

$(document).ready(function() {
$('#barcode').change(function(event){
	

        var tus = document.getElementById('barcode').value;
         


            
                $.ajax({
                    url: 'test8.php',
                    type: 'GET',
                    data: { renu18: tus },
                    success: function(data) {
                        //$('#mobileno').html(data);
                     // alert(data);
                      document.getElementById('display_size').value=data;
                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown) {
                                   }               //case error                    }
            });



});

});

$(document).ready(function() {
$('#barcode').change(function(event){
	

        var tus = document.getElementById('barcode').value;
         


            
                $.ajax({
                    url: 'test9.php',
                    type: 'GET',
                    data: { renu19: tus },
                    success: function(data) {
                        //$('#mobileno').html(data);
                     // alert(data);
                      document.getElementById('expandable').value=data;
                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown) {
                                   }               //case error                    }
            });



});

});

$(document).ready(function() {
$('#barcode').change(function(event){
	

        var tus = document.getElementById('barcode').value;
         


            
                $.ajax({
                    url: 'test10.php',
                    type: 'GET',
                    data: { renu20: tus },
                    success: function(data) {
                        //$('#mobileno').html(data);
                     // alert(data);
                      document.getElementById('processor').value=data;
                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown) {
                                   }               //case error                    }
            });



});

});

$(document).ready(function() {
$('#barcode').change(function(event){
	

        var tus = document.getElementById('barcode').value;
         


            
                $.ajax({
                    url: 'test11.php',
                    type: 'GET',
                    data: { renu21: tus },
                    success: function(data) {
                        //$('#mobileno').html(data);
                     // alert(data);
                      document.getElementById('warranty').value=data;
                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown) {
                                   }               //case error                    }
            });



});

});

$(document).ready(function() {
$('#barcode').change(function(event){
	

        var tus = document.getElementById('barcode').value;
         


            
                $.ajax({
                    url: 'test12.php',
                    type: 'GET',
                    data: { renu22: tus },
                    success: function(data) {
                        //$('#mobileno').html(data);
                     // alert(data);
                      document.getElementById('price').value=data;
                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown) {
                                   }               //case error                    }
            });



});

});

$(document).ready(function() {
$('#barcode').change(function(event){
	

        var tus = document.getElementById('barcode').value;
         


            
                $.ajax({
                    url: 'test13.php',
                    type: 'GET',
                    data: { renu23: tus },
                    success: function(data) {
                        //$('#mobileno').html(data);
                     // alert(data);
                      document.getElementById('mrp').value=data;
                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown) {
                                   }               //case error                    }
            });



});

});


// $(document).ready(function() {
// $('#barcode').change(function(event){
	

//         var tus = document.getElementById('barcode').value;
         


            
//                 $.ajax({
//                     url: 'test14.php',
//                     type: 'GET',
//                     data: { renu24: tus },
//                     success: function(data) {
//                         //$('#mobileno').html(data);
//                      // alert(data);
//                       document.getElementById('ime').value=data;
//                     },
//                     error: function(XMLHttpRequest, textStatus, errorThrown) {
//                                   }               //case error                    }
//             });



// });

// });


$(document).ready(function() {
$('#barcode').change(function(event){
	

        var tus = document.getElementById('barcode').value;
         


            
                $.ajax({
                    url: 'test15.php',
                    type: 'GET',
                    data: { renu25: tus },
                    success: function(data) {
                        //$('#mobileno').html(data);
                     // alert(data);
                      document.getElementById('category').value=data;
                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown) {
                                   }               //case error                    }
            });



});

});









  function paidamount(){
        var a=document.getElementById("gtotal").value;
        var b=document.getElementById("paid").value;
        var c= a - b;
        document.getElementById("balance").value=c;
        
    }
    
  




    
    
    
</script>
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
$(document).ready(function() {
$('#custlist2').click(function(event){
        var tus = "customer list";
//alert (tus);
debugger;
            
                $.ajax({
                    url: 'custlist1.php',
                    type: 'GET',
                    data: { var_PHP_data: tus },
                    success: function(data) {
                        $('#ffg').html(data);
                        // alert ("yuvi");
                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown) {
                                   }               //case error                    }
            });
});

});
$(document).ready(function() {
$('#custlist11').click(function(event){
	
        var tus = "customer list";
debugger;
            
                $.ajax({
                    url: 'duepending.php',
                    type: 'GET',
                    data: { var_PHP_data: tus },
                    success: function(data) {
                        $('#new').html(data);
                        // alert ("yuvi");
                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown) {
                                   }               //case error                    }
            });
});

});
</script>
<script>
$(document).ready(function() {
$('#custo').change(function(event){
// 	var keycode = document.;
// 	if(keycode == '13'){
        var tus = document.getElementById("custo").value;
        if(tus=="Accessories")
{
                $.ajax({
                    url: 'stock2.php',
                    type: 'GET',
                    data: { var_PHP_data: tus },
                    success: function(data) {
                        $('#bod').html(data);
                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown) {
                                   }               //case error                    }
            });
}

// 	}
});

});
</script>

<script>
    function total1()
    {
        var a=document.getElementById("stock").value;
        var b=document.getElementById("purchaseprice").value;
        var c= a * b;
        document.getElementById("total").value=c;
        
    }
    
    function balance(){
        var a=document.getElementById("total").value;
        var b=document.getElementById("paid").value;
        var c= a - b;
        document.getElementById("bal").value=c;
        
    }
</script>
        <script  src="dist/js/plugins.js"></script>
        <script src="dist/js/common.js"></script>
    </body>
</html>