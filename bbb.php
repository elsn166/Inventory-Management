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
        <title>Dashboard</title>

        <!-- Favicon -->
        <link rel="icon" href="dist/images/rdegi.jpg" type="image/x-icon">
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
}.pull-right{
    margin-left:790px;
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
  
//   include 'dbconfig.php';

// $date1=date('Y/m/d');
// $time1=date('h:i:sa');


// $conn = new mysqli($servername, $username, $password, $dbname);
// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }



// $_POST['users']=$_SESSION['user'];

// $iuse=$_POST['users'];

// $_POST['mobbb']=$_SESSION['mobileno'];

// $mobnoo=$_POST['mobbb'];


// $sql4 = "SELECT point,total FROM creditpoint WHERE customer='$iuse' and mobile='$mobnoo' ";
// $result4 = $conn->query($sql4);

// if ($result4->num_rows > 0) {
//     // output data of each row
//     while($row4 = $result4->fetch_assoc()) {

// echo "
// <div class='alert' id='cls'>
//   <span class='closebtn' onclick='cl()'>&times;</span> 
//   <strong>Credit! </strong> Mr/Mrs.".$iuse." has ".$row4['point']." credit Points valid for Rs.".$row4['total']."!
// </div>
// ";

//     }
// } else {
    
// } 






// $conn->close();




?>


<script>
    
    
//     function cl(){
        
        
//         document.getElementById("cls").style.display='none';
//     }
 </script>
<?php
include'dbconfig.php';
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * from bill ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {

  $counter = 0;
  while ($row1 = $result->fetch_assoc()) {
   $id=$row1['invoiceno'];
   $invid=$id+1;
  
  }}
  ?>

<span class="h5">Customer Name : </span><span id="cun" class="h5"><?php echo $_SESSION['user']; ?></span>
      <div class="row">
        <div class="col-12">
          <div class="card p-0 my-4 rounded-sm shadow">
            <div class="card-body" id="bod">
                <form action="ente.php" method="post" name="frmContact">
                <!-- First Section Starts-->
                <div class="row">
                <div class="col-12">

<div class="row my-4">
<div class="container">
 <div class="row clearfix">
    <div class="col-md-12">
        <div class="form-outline col-3 input-group">
          <lable class="mt-4">Invoice Number:</lable>
            <input type="text" name='invoicenumber1'  placeholder='Enter invoice number'value="<?php echo $invid?>" class="form-control mt-4 mb-3" readonly/>
            <!-- <label class="form-label" for="form12">Example label</label> -->
        </div>
        <div class="form-outline col-3 p-3 input-group">
                           <lable class="">Barcode:</lable>
                              <select class="form-control" aria-label="Type" name="product_one" id="bar">
                                  <option value="">Select Product Code</option>
                                <?php 
                                    // $test = $_GET['var_PHP_data'];
                                    include 'dbconfig.php';
                                    $date1=date('Y/m/d');
                                    $time1=date('h:i:sa');
                                    $conn = new mysqli($servername, $username, $password, $dbname);
                                    // Check connection
                                    if ($conn->connect_error) {
                                    die("Connection failed: " . $conn->connect_error);
                                    }
                                    $sql = "SELECT barcode FROM stock";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while($row = $result->fetch_assoc()) {
                                            echo '<option value="'.$row["barcode"].'">"'.$row["barcode"].'"</option>';
                                    $mob=$row["barcode"];
                                        }
                                    } else {
                                        echo "0 results";
                                    } 
                                ?>
                              </select>
            <!-- <label class="form-label" for="form12">Example label</label> -->
        </div>

      <table class="table table-bordered table-hover" id="tab_logic">
        <thead>
          <tr>
            <th class="text-center"> # </th>
            <th class="text-center"> Product Code </th>
            <th class="text-center"> Category </th>
            <th class="text-center"> Product </th>
            <th class="text-center"> Model </th>
            <th class="text-center"> Color </th>
            <th class="text-center"> Price </th>
            <th class="text-center"> Qty </th>
            <th class="text-center"> Total </th>
            <th class="text-center"> Action </th>
          </tr>
        </thead>
<?php

include'dbconfig.php';
// $date1=date('Y/m/d');
// $time1=date('h:i:sa');
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql10 = "SELECT * FROM newstock ";
$result4 = $conn->query($sql10);
if ($result4->num_rows > 0) {
    // output data of each row
    $counter=0;
    while($row4 = $result4->fetch_assoc()) {

$product= $row4['product'];
$color=   $row4['color'];
$model=   $row4['model'];
$category=$row4['Category'];
$barcode1= $row4['barcode'];
$id=      $row4['id'];
$stock=   $row4['stock'];
$pprice=  $row4['purchaseprice'];
$sprice=  $row4['salesprice'];
$qty=  $row4['qty'];
$tot=  $row4['total'];
//echo $product;
echo'
        <tbody>
          <tr id="">
            <td>'.++$counter.'</td>
            <td><input type="text" name="testname[]"  placeholder="Enter Product Name" id="barcode"  class="form-control barcode" value="'.$barcode1.'"  /></td>
            <td><input  name="category[]" placeholder="Enter category" class="form-control" id="category" value="'. $category .'" readonly /></td>
            <td><input type="text" name="product[]" placeholder="Enter product" class="form-control product" id="mobiles" step="0" min="0" value="'. $product .'" readonly /></td>
            <td><input type="text" name="model[]" placeholder="Enter model" class="form-control model"  id="model" step="0" min="0" value="'. $model .'" readonly /></td>
            <td><input type="text" name="color[]" placeholder="Enter color" class="form-control color" id="color" step="0" min="0" value="'. $color .'"  readonly /></td>
            <td><input type="text" name="testprice[]" placeholder="Enter Unit Price" id="price"  class="form-control price" step="0.00" min="0" value="'. $sprice .'"  readonly  /></td>
            <td><input type="text" name="testqty[]" placeholder="Enter Qty" class="form-control qty" id="Qty" step="0" min="0" value="'. $qty .'" /></td>
            <td><input type="text" name="testtotal[]" placeholder="0.00" class="form-control total" value="'. $tot .'"  readonly/></td>
            <td><a href="deletenewstock.php?action=edit&amp; id='.$row4['id'].'"><span class="btn btn-danger"></b><i class="fas fa-trash"></i></span></a></td>
          </tr>
          <tr id=""></tr>
        </tbody>';
    }
} else {
    echo'
        <tbody>
          <tr id="">
            <td>1</td>
            <td><input type="text" name="testname[]"  placeholder="Enter Product Name" id="barcode"  class="form-control barcode" readonly  /></td>
            <td><input  name="category[]" placeholder="Enter category" class="form-control" id="category" readonly   /></td>
            <td><input type="text" name="product[]" placeholder="Enter product" class="form-control product" id="mobiles" step="0" min="0" readonly /></td>
            <td><input type="text" name="model[]" placeholder="Enter model" class="form-control model"  id="model" step="0" min="0" readonly /></td>
            <td><input type="text" name="color[]" placeholder="Enter color" class="form-control color" id="color" step="0" min="0"  readonly  /></td>
            <td><input type="text" name="testqty[]" placeholder="Enter Qty" class="form-control qty" id="Qty" step="0" min="0" readonly /></td>
            <td><input type="text" name="testprice[]" placeholder="Enter Unit Price" id="price"  class="form-control price" step="0.00" min="0" readonly /></td>
            <td><input type="text" name="testtotal[]" placeholder="0.00" class="form-control total"  readonly/></td>
            <td><input type="text" name="testtotal[]" placeholder="0.00" class="form-control total"  readonly/></td>
          </tr>
          <tr id=""></tr>
        </tbody>';;
} 
// echo $name1;
?>
      </table>
    </div>
  </div>
  <!--<div class="row clearfix">-->
  <!--  <div class="col-md-12">-->
       <!--<a id="add_row"><span class="btn btn-success"><b>+ Add</b></i></span></a>-->
  <!--     <a href="deletenewstock.php?action=edit&amp; id=<?php echo $id ?> "><span class="btn btn-danger">- Remove</b></span></a>-->
       <!--<a href="deleteemp.php?action=edit&amp;id='.$row['id'].'"><span class="btn btn-dark mx-1"><i class="fas fa-trash"></i></span></a>-->
  <!--  </div>-->
  <!--</div>-->
  
  <?php

include'dbconfig.php';
// $date1=date('Y/m/d');
// $time1=date('h:i:sa');
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql10 = "SELECT * FROM grd_total ";
$result4 = $conn->query($sql10);
if ($result4->num_rows > 0) {
    // output data of each row
    $counter=0;
    while($row4 = $result4->fetch_assoc()) {

$subtotal = $row4['subtotal'];
$discount = $row4['discount'];
$grand_total = $row4['grand_total'];

}}
?>
  
  
  
  
  
  <div class="row clearfix" style="margin-top:20px">
    <div class="pull-right col-md-4 ">
      <table class="table table-bordered table-hover" id="tab_logic_total">
        <tbody>
          <tr>
            <th class="text-center">Sub Total</th>
            <td class="text-center"><input type="number" name='sub_total' id="total_amount" placeholder='0.00' class="form-control" id="" value=<?php echo $subtotal; ?> readonly/></td>
          </tr>
          <tr>
            <th class="text-center">Discount</th>
          <td class="text-center"><input type="number" name='testdis' id="discount_new" placeholder='0.00' class="form-control"  onchange="myFunction2()" oninput="myFunction2()" value= <?php echo $discount; ?>  /></td>
          </tr>
          <!--<tr>
            <th class="text-center">CGST</th>
            <td class="text-center"><div class="input-group mb-2 mb-sm-0">
                <input type="number" class="form-control" id="tax1" placeholder="0">
                <div class="input-group-addon">%</div>
              </div></td>
          </tr>
          <tr>
            <th class="text-center">CGST Tax Amount</th>
            <td class="text-center"><input type="number" name='tax_amount' id="tax_amount" placeholder='0.00' class="form-control" readonly/></td>
          </tr>-->
          <tr>
            <th class="text-center">Grand Total</th>
            <td class="text-center"><input type="number" name='testgtotal' placeholder='0.00' class="form-control " id="gtotal_new" value=<?php echo $grand_total; ?>  readonly/></td>
          </tr>
          <tr>
            <th class="text-center">Paid</th>
          <td class="text-center"><input type="number" name='paid' id="paid" placeholder='0.00' class="form-control"  onchange="myFunction4()" oninput="myFunction4()" /></td>
          </tr>
          <tr>
            <th class="text-center">Balance</th>
          <td class="text-center"><input type="number" name='balance' id="balance" placeholder='0.00' class="form-control"   /></td>
          </tr>
        </tbody>
      </table>
         <div class="price_submit col-10">
            <button type="submit1" class="btn btn-primary" id="">Submit</button>
           </div>
          
    </div>
  </div>
</div>
 
                      </div>
                  </div>
            </div>
                



            
            
        </form>   
        
        
        
           
        

              
              </div>
          <script>
    $(document).ready(function(){
    var i=1;
    $("#add_row").click(function(){b=i-1;
      	$('#addr'+i).html($('#addr'+b).html()).find('td:first-child').html(i+1);
      	$('#tab_logic').append('<tr id="addr'+(i+1)+'"></tr>');
      	i++; 
  	});
    $("#delete_row").click(function(){
    	if(i>1){
		$("#addr"+(i-1)).html('');
		i--;
		}
		calc();
	});
	
	$('#tab_logic tbody').on('keyup change',function(){
		calc();
	});
	$('#tax').on('keyup change',function(){
		calc_total();
	});
	

});

function calc()
{
	$('#tab_logic tbody tr').each(function(i, element) {
		var html = $(this).html();
		if(html!='')
		{
			var qty = $(this).find('.qty').val();
			var price = $(this).find('.price').val();
			$(this).find('.total').val(qty*price);
			calc_total();
	  	var disc = $(this).find('.dis').val();
    	$(this).find('.gtotal').val(total-disc);
			
		}
    });
}

function calc_total()
{
	total=0;
	$('.total').each(function() {
        total += parseInt($(this).val());
    });
	$('#total_amount').val((total).toFixed());
}
</script>
<!--<script>-->
    
    
<!--    function myFunction4(){-->
<!--        var bar1= document.getElementById("bar").value;-->

<!--alert (bar1)-->
<!--}-->


<!--</script>-->

<script type="text/javascript">

var ajaxResult ;

    $(document).ready(function() {
        
        // alert("Settings page was loaded");
        $('#tab_logic').on('change', 'td:nth-child(2)', function() {
      var tus = $(this).closest("tr").find("[id=barcode]").val();
               
            //   var gv = $(this).closest("tr").find("[id=category]").val();
        var dd ;       
               $.ajax({
                    url: 'test15.php',
                    type: 'GET',
                    data: { renu25: tus },
                    success: function(data) {
                        // ajaxResult = data;                    
$(this).closest('tr').find("[id=category]").val(data);                        
alert (data);

                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown) {
                                   }               //case error                    }
            
    
                   
               });
                //   alert (ajaxResult);        

//  $(this).closest("tr").find("[id=sub]").val(data);
// $(this).closest("tr").find("[id=category]").val(dd);
});
});




$(document).ready(function() {
        // alert("Settings page was loaded");
        $('#tab_logic').on('change', 'td:nth-child(2)', function() {
      var tus = $(this).closest("tr").find("[id=barcode]").val();
               $.ajax({
                    url: 'test1.php',
                    type: 'GET',
                    data: { renu11: tus },
                    success: function(data) {
                        //$('#mobileno').html(data);
                      alert(data);
                    //   var category_e = data;
                    $(this).closest("tr").find("[id=mobiles]").val(data);
                    //   document.getElementById('category').value=data;
                    //   $(this).closest("tr").find("[id=category]").val("es");
                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown) {
                                   }               //case error                    }
            });
          
alert (tus);
//  $(this).closest("tr").find("[id=sub]").val(data);
// $(this).closest("tr").find("[id=category]").val(category_e);
});
});




$(document).ready(function() {
        // alert("Settings page was loaded");
        $('#tab_logic').on('change', 'td:nth-child(2)', function() {
      var tus = $(this).closest("tr").find("[id=barcode]").val();
               $.ajax({
                    url: 'test3.php',
                    type: 'GET',
                    data: { renu13: tus },
                    success: function(data) {
                        //$('#mobileno').html(data);
                      alert(data);
                    //   var category_e = data;
                    $(this).closest("tr").find("[id=model]").val(data);
                    //   document.getElementById('category').value=data;
                    //   $(this).closest("tr").find("[id=category]").val("es");
                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown) {
                                   }               //case error                    }
            });
          
alert (tus);
//  $(this).closest("tr").find("[id=sub]").val(data);
// $(this).closest("tr").find("[id=category]").val(category_e);
});
});

     $(document).ready(function() {
        // alert("Settings page was loaded");
        $('#tab_logic').on('change', 'td:nth-child(8)', function() {
      var barc = $(this).closest("tr").find("[id=barcode]").val();
      var qy = $(this).closest("tr").find("[id=Qty]").val();
               $.ajax({
                    url: 'test2.php',
                    type: 'GET',
                    data: { barcode: barc, qy:qy },
                    success: function(data) {
                        //$('#mobileno').html(data);
                      alert(data);
                      window.location.replace("bbb.php");
                    //   $(this).closest("tr").find("[id=Qty]").val("");
        
                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown) {
                                   }               //case error                    }
            });
          
alert (tus);
//  $(this).closest("tr").find("[id=sub]").val(data);
// $(this).closest("tr").find("[id=category]").val(category_e);
});
});



</script>
<script>
$(document).ready(function() {
$('#bar').change(function(event){
// 	var keycode = (event.keyCode ? event.keyCode : event.which);
// 	if(keycode == '13'){
		
//alert ("cash payment enabled");
         var tus = document.getElementById('bar').value;
//alert (tus);
                $.ajax({
                    url: 'billingvalues.php',
                    type: 'GET',
                    data: { bar1:tus },
                    success: function(data) {
                    // alert (data);
                       // alert ('product added successfully')
                       window.location.replace('bbb.php');
                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown) {
                        
                      }               //case error                    }
            });
});
});
</script>
<script>
function myFunction2(){
debugger;
var pr1= document.getElementById("total_amount").value;
var qt1 = document.getElementById("discount_new").value;
var amou1= pr1-qt1;
// document.getElementById("total").value=amou1;
document.getElementById("gtotal_new").value=amou1;
}
</script>
<script>
function myFunction4(){
debugger;
var pr0= document.getElementById("paid").value;
var qt0 = document.getElementById("gtotal_new").value;
var amou1= qt0-pr0;
// document.getElementById("total").value=amou1;
document.getElementById("balance").value=amou1;
}
</script>

        <script  src="dist/js/plugins.js"></script>
        <script src="dist/js/common.js"></script>
    </body>
</html>