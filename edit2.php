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
        <title>Edit|invoice</title>

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
        <script>
    
    
    
    function cha(){

var jk=document.getElementById('custo').value;

document.getElementById('search').value=jk;


}

</script>
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

<?php
  
  include 'dbconfig.php';

$date1=date('Y/m/d');
$time1=date('h:i:sa');


$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}



$_POST['users']=$_SESSION['user'];

$iuse=$_POST['users'];

$_POST['mobbb']=$_SESSION['mobileno'];

$mobnoo=$_POST['mobbb'];


$sql4 = "SELECT point,total FROM creditpoint WHERE customer='$iuse' and mobile='$mobnoo' ";
$result4 = $conn->query($sql4);

if ($result4->num_rows > 0) {
    // output data of each row
    while($row4 = $result4->fetch_assoc()) {

// echo "
// <div class='alert' id='cls'>
//   <span class='closebtn' onclick='cl()'>&times;</span> 
//   <strong>Credit! </strong> Mr/Mrs.".$iuse." has ".$row4['point']." credit Points valid for Rs.".$row4['total']."!
// </div>
// ";

    }
} else {
    
} 






// $conn->close();




?>


<script>
    function cl(){
        document.getElementById("cls").style.display='none';
    }
</script>
<?php
include 'dbconfig.php';

$date1=date('Y/m/d');
$time1=date('h:i:sa');
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$id=$_GET['id'];
$in=$_GET['in'];
$sql = "SELECT * FROM bill WHERE id='$id' ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row= $result->fetch_assoc()) {
$barcode=$row['barcode'];
$customer=$row['customer'];
$address=$row['address'];
$mobile=$row['mobile'];
$email=$row['email'];
$mobiles=$row['mobiles'];
$color=$row['color'];
$model=$row['model'];
$ram=$row['ram'];
$storage=$row['storage'];
$battery=$row['battery'];
$camera=$row['camera'];
$display=$row['display'];
$expandable=$row['expandable'];
$Category=$row['Category'];
$processor=$row['processor'];
$price=$row['price'];
$mrp=$row['mrp'];
$Warranty=$row['Warranty'];
$date1=$row['date1'];
$time1=$row['time1'];
$qty=$row['qty'];
$total=$row['total'];
$discount=$row['discount'];
$gtotal=$row['gtotal'];
$ime=$row['ime'];
$billing_person=$row['billing_person'];
$paid=$row['paid'];
$balance=$row['balance'];
}}
?>

<span class="h2">Customer Name : </span><span class="h2" id="cun"><?php echo $customer ?></span>
      <div class="row">
        <div class="col-12">
          <div class="card p-0 my-4 rounded-sm shadow">
            <div class="card-body" id="bod">
                <form action="editpro.php" method="post" name=""  enctype="multipart/form-data">
                               <!-- First Section Starts-->
                <div class="row">
                <div class="col-12">
                    <div class="row my-4">
                        <div class="col-4">
                         <h6>Bar Code</h6>
                                <div class="form-outline input-group">
                                    <?php 
                                   echo'<input type="text" name="barcode" id="barcode" class="form-control" value= "'.$barcode.'" />';
                                    ?>
                                    <!-- <label class="form-label" for="form12">Example label</label> -->
                                    <input type="hidden" name="id" id="id" class="form-control" value="<?php echo $id;?>" />
                                    <input type="hidden" name="in" id="in" class="form-control" value="<?php echo $in;?>" />
                                </div>
                        </div>
                          <div class="col-4">
                              <h6>Category</h6>
                               <div class="form-outline input-group">
                                   <?php
                                   echo'
                                    <input  name="category" id="category" class="form-control"  value= "'.$Category.'" />';
                                    ?>
                                    <!-- <label class="form-label" for="form12">Example label</label> -->
                                </div>  
                          </div>
  
                        <div class="col-4">
                         <h6>Product</h6>
                                <div class="form-outline input-group">
                                    <?php
                                    echo'<input type="text" name="mobiles" id="mobiles" class="form-control" value= "'.$mobiles.'" >';
                                    ?>
                                    <!-- <label class="form-label" for="form12">Example label</label> -->
                                </div>                      
                        </div>

                        <div class="col-4">
                          <h6>Color</h6>
                            <div class="form-outline input-group">
                                   <?php
                                    echo'<input type="text" name="color" id="color" class="form-control" value= "'.$color.'" > ';
                                    ?>
                                    <!-- <label class="form-label" for="form12">Example label</label> -->
                                </div>  
                          
                      </div>
                       <div class="col-4">
                              <h6>Model</h6>
                            <div class="form-outline input-group">
                                <?php
                                    echo' <input  name="model" id="model" class="form-control"  value="'.$model.'" > ';
                                    ?>
                                    <!-- <label class="form-label" for="form12">Example label</label> -->
                                </div>  
                            
                          </div>
                        
                      <!--    <div class="col-4">
                              <h6>Product Code</h6>
                            <div class="form-outline input-group">
                                    <input  name="productcode" id="productcode" class="form-control" />
                                    <!-- <label class="form-label" for="form12">Example label</label> 
                                </div>  
                             </div>-->
                        <!--  <div class="col-4">
                              <h6>RAM</h6>
                                <div class="form-outline input-group">
                                    <input  name="ram" id="ram" class="form-control" />
                                    <!-- <label class="form-label" for="form12">Example label</label> 
                                </div>  
                             </div>
                            <div class="col-4">
                              <h6>Storage</h6>
  
                              <div class="form-outline input-group">
                                    <input  name="storage" id="storage" class="form-control" />
                                    <!-- <label class="form-label" for="form12">Example label</label> 
                                </div>  
                          </div>-->
                         
                      </div>
                  </div>
            </div>
                <!-- Section End -->

                <!-- Second section starts-->
                    <div class="col-12">
                        <div class="row my-2">
                          <!--  <div class="col-6">
                                <h6>IMEI No</h6>
            
                                <div class="form-outline input-group">
                                    <input type="text" name="ime" id="ime" class="form-control" />
                                    <!-- <label class="form-label" for="form12">Example label</label> 
                                </div>
                            </div>-->

                        </div>
            
                        <div class="row my-2">
                         <div class="col-6">
                            <h6>Price</h6>
                                <div class="form-outline input-group">
                                <?php 
                                  echo'<input type="number" id="price" name="price" class="form-control" value="'. $price .'">';
                                   ?>
                                </div>
                            </div>
                            <div class="col-6">
                                <h6>MRP</h6>
                                <div class="form-outline input-group">
                                  <?php 
                                  echo'<input type="text" id="mrp" name="mrp" class="form-control"  value="'.$mrp.'">';
                                   ?>
                                    <!-- <label class="form-label" for="form12">Example label</label> -->
                                </div>
                            </div>
                            <div class="col-6">
                                <h6>Quantity</h6>
                                <div class="form-outline input-group">
                                  <?php 
                                  echo'<input type="text" name="qty" id="qty" oninput="myFunction1()" class="form-control"  value="'.$qty.'">';
                                   ?>
                                    <!-- <label class="form-label" for="form12">Example label</label> -->
                                </div>
                            </div>
                            <div class="col-6">
                                <h6>Total</h6>
                                <div class="form-outline input-group">
                                    <?php echo'
                                    <input type="text" name="total" id="total" class="form-control opacity-100" value="'.$total.'">';
                                    ?>
                                    <!-- <label class="form-label" for="form12">Example label</label> -->
                                </div>
                            </div>
                            <div class="col-6">
                                <h6>Discount</h6>
                                <div class="form-outline input-group">
                                    <?php echo'
                                    <input type="text" name="discount" id="discount" class="form-control"  oninput="myFunction2()"  value="'.$discount.'">';
                                    ?>
                                    <!-- <label class="form-label" for="form12">Example label</label> -->
                                </div>
                            </div>
                             <div class="col-6">
                              <h6>Paid</h6>
                                    <div class="form-outline input-group">
                                        <?php echo'
                                    <input type="text" name="paid" id="paid" class="form-control opacity-100" oninput="paidamount()" value="'.$paid.'">';
                                    ?>
                                    <!-- <label class="form-label" for="form12">Example label</label> -->
                                </div>
                            </div>
                        </div>
                        <!--paid and balance-->
                        <div class="row my-2">

                            <div class="col-6">
                                <h6>Balance</h6>
                                <div class="form-outline input-group">
                                    <?php echo'
                                    <input type="text" name="balance" id="balance" class="form-control" onchange="myFunction2()" oninput="myFunction2()" value="'.$balance.'">';
                                    ?>
                                    <!-- <label class="form-label" for="form12">Example label</label> -->
                                </div>
                            </div>
                        </div>
                        
                        
                        
                        
                        
                        
                        
                        <!--paid and balance-->
                        
                        
            
                        <div class="row my-2">
                            <div class="col-12">
                                <h6>Grant Total</h6>
                                <div class="form-outline input-group">
                                     <?php echo'
                                    <input type="text" name="gtotal" id="gtotal" class="form-control"  value="'.$gtotal.'">';
                                    ?>
                                    <!-- <label class="form-label" for="form12">Example label</label> -->
                                </div>
                            </div>
                        </div>
            
                        <div class="price_submit">
                            <button type="submit" class="btn btn-primary" name="submit2" >Submit</button>
                        </div>
                    </div>
              
                
            
                <!-- Second section ends-->


            
            
        </form> 
        
        
         <!--   <div class="my-3">
                <h6>Enter Credit Points</h6>
    
                <div class="form-outline input-group">
                    <input type="number"  name="credit" id="credit" class="form-control" />
                    <!-- <label class="form-label" for="form12">Example label</label> 
                </div>
                
                <button type="button" onclick="myFunction3()" class="btn btn-outline-danger my-2">Close</button>
            </div>-->
        
                    </div>
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
    
    window.location.replace("https://inventory.papoosekart.com/invoice.php");
    // window.location.replace("main.php");
    
    
    
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

 $(document).ready(function() {
 $('#barcode').change(function(event){
	
         var tus = document.getElementById('barcode').value;
         


            
                 $.ajax({
                     url: 'test14.php',
                 type: 'GET',
                     data: { renu24: tus },
                     success: function(data) {
                         //$('#mobileno').html(data);
                  // alert(data);
                       document.getElementById('ime').value=data;
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
        <script  src="dist/js/plugins.js"></script>
        <script src="dist/js/common.js"></script>
    </body>
</html>