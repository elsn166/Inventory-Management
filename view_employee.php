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
        <title>View Product|Inventory</title>

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
                               <div class="">
                             <div class="card eagle-border-light eagle-shadow mb-4">

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

 <form action="employee-insert.php" method="post">
                    <div class="row my-3">
                        <div class="col-6">
                            <h6>Employee Name</h6>
                            <div class="form-outline input-group">
                                <input type="text" id="cus_name" name="cus_name" class="form-control" />
                                <!-- <label class="form-label" for="form12">Example label</label> -->
                            </div>
                        </div>
                        <div class="col-6">
                            <h6>Mobile Number</h6>
    
                            <div class="form-outline input-group">
                                <input type="text" id="cus_no" name="cus_no" maxlength="10" pattern = "[0-9]{3}[0-9]{3}[0-9]{4}" class="form-control" />
                                <!-- <label class="form-label" for="form12">Example label</label> -->
                            </div>
                        </div>
                    </div>
                    
                    <div class="row my-3">
                        <div class="col-6">
                            <h6>User Name</h6>
                            <div class="form-outline input-group">
                                <input type="text" id="cus_email" name="cus_email" class="form-control" />
                                <!-- <label class="form-label" for="form12">Example label</label> -->
                            </div>
                        </div>
                        <div class="col-6">
                            <h6>Password</h6>
    
                            <div class="form-outline input-group">
                                <input type="password" id="cus_password" name="cus_password" class="form-control" />
                                <!-- <label class="form-label" for="form12">Example label</label> -->
                            </div>
                        </div>
                    </div>
                    
                    <div class="row my-3">
                        <div class="col-6">
                            <h6>Role</h6>
    
                            <div class="">
                                <select class="form-control" aria-label="Select the Role" name="role" id="role" required>
                                  <option selected disabled>Select the Role</option>
                                  <option value="admin">Admin</option>
                                  <option value="employee">Employee</option>
                                </select>    
                            </div>
                        </div>
                        <div class="col-6">
                            <h6>Address</h6>
    
                            <div class="form-outline">
                                <textarea class="form-control" id="cus_address" name="cus_address" rows="4"></textarea>
                                <!-- <label class="form-label" for="textAreaExample">Message</label> -->
                              </div>
                        </div>
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
    
    window.location.replace("https://smartdeal.staging-rdegi.com/main.php");
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




        <script  src="dist/js/plugins.js"></script>
        <script src="dist/js/common.js"></script>
    </body>
</html>