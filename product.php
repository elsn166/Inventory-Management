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
<script>
function cha(){

var jk=document.getElementById('custo').value;

document.getElementById('search').value=jk;
}
</script>
                                <div class="card-body">
      <div class="row">
        <div class="col-12">
          <div class="card p-0 my-4 rounded-sm shadow">
            <div class="card-body" id="bod">
                <form action="customer1.php" method="post" enctype="multipart/form-data">
                    <div class="row my-3">
                        <div class="col-12 col-lg-6">
                          <h6>Category</h6>
                          <div class="form-outline input-group">
                              <input type="text" id="category" name="category" class="form-control" />
                              <!-- <label class="form-label" for="form12">Example label</label> -->
                          </div>
                        </div>
                       <!-- <div class="col-12 col-lg-6">
                          <h6>Supplier</h6>

                          <div class="form-outline input-group">
                              <!-- <label class="form-label" for="form12">Example label</label> 
                              <select id="supplier" name="supplier" class="form-control" />
                                <?php
//include 'dbconfig.php';
// Create connection
//$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
//if ($conn->connect_error) {
  //die("Connection failed: " . $conn->connect_error);
//}
 //$sql = "SELECT supplier_name FROM supplier_details ";
//$result = $conn->query($sql);
//if ($result->num_rows > 0) {

  //$counter = 0;
  //while ($row1 = $result->fetch_assoc()){
   //justification is the blob image
   // $sup_name=$row1['supplier_name'];
//echo'
                            //  <option value="'.$row1['supplier_name'].'">'.$row1['supplier_name'].'</option>';
 // }}?>
                            </select>
                          </div>
                        </div>-->
                        
                       <div class="col-12 col-lg-6">
                          <h6>Product Name</h6>
                          <div class="form-outline input-group">
                              <input type="text" id="mobile" name="mobile" class="form-control" />
                              <!-- <label class="form-label" for="form12">Example label</label> -->
                          </div>
                        </div>
                        <div class="col-12 col-lg-6">
                          <h6>Color</h6>
                          <div class="form-outline input-group">
                              <input type="text" id="color" name="color" class="form-control" />
                              <!-- <label class="form-label" for="form12">Example label</label> -->
                          </div>
                        </div>
                      <div class="col-12 col-lg-6">
                        <h6>Model</h6>
  
                        <div class="form-outline input-group">
                            <input type="text" id="model" name="model" class="form-control" />
                            <!-- <label class="form-label" for="form12">Example label</label> -->
                        </div>
                      </div>
                  
                   <!--  <div class="col-12 col-lg-6">
                        <h6>RAM</h6>
  
                        <div class="form-outline input-group">
                            <input type="text" id="ram" name="ram" class="form-control" />
                            <!-- <label class="form-label" for="form12">Example label</label> 
                        </div>
                      </div>
                      <div class="col-12 col-lg-6">
                        <h6>Storage</h6>
                          <div class="form-outline input-group">
                            <input type="text" id="storage" name="storage" class="form-control" />
                            <!-- <label class="form-label" for="form12">Example label</label> 
                        </div>
                      </div>

  
                  
          
                    <div class="col-12 col-lg-6">
                        <h6>Processor</h6>
  
                        <div class="form-outline input-group">
                            <input type="text" id="processor" name="processor" class="form-control" />
                            <!-- <label class="form-label" for="form12">Example label</label> 
                        </div>
                      </div>-->
                     <div class="col-12 col-lg-6">
                        <h6>Price</h6>
  
                        <div class="form-outline input-group">
                            <input type="text" id="price" name="price" class="form-control" />
                            <!-- <label class="form-label" for="form12">Example label</label> -->
                        </div>
                      </div>

  
                      <div class="col-12 col-lg-6">
                        <h6>MRP</h6>
  
                        <div class="form-outline input-group">
                            <input type="text" id="mrp" name=mrp class="form-control" />
                            <!-- <label class="form-label" for="form12">Example label</label> -->
                        </div>
                      </div>
                      <!--<div class="col-12 col-lg-6">-->
                      <!--  <h6>Warrenty</h6>-->
                      <!--    <div class="form-outline input-group">-->
                      <!--      <input type="text" id="Warranty" name="Warranty" class="form-control" />-->
                            <!-- <label class="form-label" for="form12">Example label</label> -->
                      <!--  </div>-->
                      <!--</div>-->
                   <!--   <div class="col-12 col-lg-6">
                              <h6>Choose Image</h6>
                              <div class="sel">
                                <input type="file" class="form-control" aria-label="Type" name="img">
                              </div>        
                              </div>-->
          
   </div>
                  <div class="product_submit">
                      <button type="submit" class="btn btn-primary" id="">Submit</button>
                  </div>
                </form>
        
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
    
    
    
    
    
    
    
$(document).ready(function() {
$('#custo').change(function(event){
// 	var keycode = document.;
// 	if(keycode == '13'){
		

        var tus = document.getElementById("custo").value;
        
        if(tus=="Accessories")
{


            
                $.ajax({
                    url: 'category_form.php',
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
    
    function myFunction3(){
    
    debugger;
    
    window.location.replace("https://inventory.staging-rdegi.com/main.php");
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
                      document.getElementById('Warranty').value=data;
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
        <script  src="dist/js/plugins.js"></script>
        <script src="dist/js/common.js"></script>
    </body>
</html>