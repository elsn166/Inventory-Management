<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=0">

    <!-- BOOTSTRAP ONLINE CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <title>Invoice Bill</title>
    <style type="text/css">
    @import url('https://fonts.googleapis.com/css2?family=Open+Sans&display=swap');
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .page{
            background: white;
            border: 4px solid black;
            margin-top: 1em;
            margin-bottom: 1em;
            height: auto;
            overflow:hidden;
            position: relative;
        }

        .clearfix{
            margin-top: 3em;
        }

        .pe-none{
          color: black;
          position: absolute;
          right: 6.5rem;
        }

        .sec-4 p{
          margin-right: 9rem !important;
        }

        ..sec-4 p a{
          display: flex;
          justify-content: center;
          text-align: center;
        }

        #row-bottom-border{
            border-bottom: 2px solid black;
            /* margin-bottom: .8em; */
        }
        .row-top-border{
            border-top: 2px solid black;
        }
        .row .section-1{
            padding: 1em;
        }
        .row .section-1 h5{
            font-family: 'Open Sans', sans-serif;
        }
        .row .col-sm-6 #image{
            width: 5%;
            height: auto;
        }
        .row .col-sm-6 img{
            max-width: 13em;
            max-height: 8em;
            position: absolute;
            top: 70px;
            right: 40px
        }
        .section-6-border{
            border-right: 2px solid black;
        }
   .list-group-item {
   padding: 0rem 0rem!important;
   }
th{
    border:1px solid black;
    padding:10px;
    
}
td{
    border-left:1px solid black;
    border-right:1px solid black;
    border-bottom:1px solid black;
    border-top:1px solid black;
    padding:10px;
}tbody{
    border-bottom:1px solid black;
    padding-bottom:100px;
   
}.bordern{
    border-top:0px solid black;
     border-bottom:0px solid black;
}.foot{
 /*color:red;*/
}#image{
     border-left:1px solid black;
}
    </style>
     
</head>

<?php 
include'dbconfig.php';

global $pribi1;

global $qtybi;



global $pribi2;

global $qtybi2;

global $pribi4;

global $qtybi4;


global $pribi6;

global $qtybi6;
$_POST['user']=$_SESSION["user"];


$cn=$_POST['user'];


$_POST['date11']=$_SESSION["date11"];


$dn=$_POST['date11'];

$_POST['time11']=$_SESSION["time11"];


$tn=$_POST['time11'];

$_POST['time11']=$_SESSION[""];

$_POST['ids']=$_SESSION["ids"];
$id=$_POST['ids'];

$tn=$_POST['time11'];
$date1=date('Y/m/d');
$time1=date('h:i:sa');


$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql100 = "TRUNCATE TABLE temp_invoice";
if ($conn->query($sql100) === TRUE) {
  // echo "Record deleted successfully";
} else {
  // echo "Error deleting record: " . $conn->error;
}

?>
<body>
      <script type="text/javascript" src="http://jqueryjs.googlecode.com/files/jquery-1.3.1.min.js"> </script>
    <script language="javascript" type="text/javascript">
         
        function printDiv(divID) {
            //Get the HTML of div
            var divElements = document.getElementById(divID).innerHTML;
            //Get the HTML of whole page
            var oldPage = document.body.innerHTML;

            //Reset the page's HTML with div's HTML only
            document.body.innerHTML =
                "<html><head><title></title></head><body>" +
                divElements + "</body>";

            //Print Page
            window.print();

            //Restore orignal HTML
            document.body.innerHTML = oldPage;


        }
    </script>

 <?php
include'dbconfig.php';
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * from bill where id='$id'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  $counter = 0;
  while ($row1 = $result->fetch_assoc()) {
   $brand=$row1['mobiles'];
   $model=$row1['model'];
   $price=$row1['price'];
   $qty=$row1['qty'];
   $gtotal=$row1['gtotal'];
   $total=$row1['total'];
   $discount=$row1['discount'];
   $date=$row1['date1'];
   $time=$row1['time1'];
   $address=$row1['address'];
   $warrenty=$row1['Warranty'];
   $id=$row1['id'];
   $email=$row1['email'];
   $color=$row1['color'];
    $newDate = date("d-m-Y", strtotime($date));
  }}
  ?>
  <input type="button" class="mx-2 mt-5" value="Print Invoice" id="but" onclick="javascript:printDiv('printablediv')" /> 
    <div id="printablediv">
 <h5 class="fs-4 text-center">Papoose Kart</h5>
  <h5 class="fs-6 text-center">E S T I M A T E</h5>
  <div class="card col-8 mx-auto">
  <div class="card-body">
    <div class="container">
      <div class="row d-flex align-items-baseline">
                    <div class="col-8 ">
                    <h5 class="fs-4 fw-"style="color:#5d9fc5">Customer name:<?php echo $_SESSION["user"] ?></h5>
                    <!--<p class="address fw-light">No.55,Sri Devi Karumariyamman Nagar,<br> Kolladi Road, Opp.Post Office,<br> Thiruverkadu,Chennai-600077</p>-->
                    <!--<p class="gst-no fw-bold">GSTIN/UIN : <a href="#" class="text-decoration-none fw-bold" style= "color: black">33DLTPS2755F1ZN</a></p>-->
                    <!--<p class="mobile-no fw-bold">Mobile No: <span>9962452929</span></p>    -->
                </div>
                <div class="col-4 "id="image">
                    <p class="address fw-bold">Date:</p>
                    <p class="gst-no fw-bold">Invoice No:</p>
                    <p class="mobile-no fw-bold">Transport:</p>    
                    <!--<img src="dist/images/Papoose_Logo2.png" class="" alt="Snow Aqua width="200" height="200" ">-->
                </div>    
       
      </div>
      <div class="container">
        <!--<div class="col-md-12">-->
        <!--  <div class="text-center">-->
        <!--    <i class="fab fa-mdb fa-4x ms-0" style="color:#5d9fc5 ;"></i>-->
            <!--<p class="pt-0">MDBootstrap.com</p>-->
        <!--  </div>-->

        <!--</div>-->
        <!--<div class="row">-->
        <!--  <div class="col-8 ">-->
        <!--    <ul class="list-unstyled">-->
        <!--      <li class="text-muted">To: <span style="color:#5d9fc5 ;"><?php echo $_SESSION["user"] ?></span></li>-->
        <!--      <li class="text-muted">Address:<?php echo $address ?></li>-->
        <!--      <li class="text-muted">Mobile:<i class="fas fa-phone"></i><?php echo $_SESSION["mobileno"]?></li>-->
        <!--    </ul>-->
        <!--  </div>-->
        <!--  <div class="col-4 ">-->
        <!--    <p class="text-muted">Invoice</p>-->
        <!--    <ul class="list-unstyled">-->
        <!--      <li class="text-muted"><i class="fas fa-circle" style="color:#84B0CA ;"></i> <span-->
        <!--          class="fw-bold">ID:</span>#<?php echo $id?></li>-->
        <!--      <li class="text-muted"><i class="fas fa-circle" style="color:#84B0CA ;"></i> <span-->
        <!--          class="fw-bold">Creation Date: </span><?php echo $newDate ?></li>-->
             <!--<li class="text-muted"><i class="fas fa-circle" style="color:#84B0CA ;"></i> <span
        <!--          class="me-1 fw-bold">Status:</span><span class="badge bg-warning text-black fw-bold">-->
        <!--          Unpaid</span></li>-->
        <!--    </ul>-->
        <!--  </div>-->
        <!--</div>-->

        <div class="row justify-content-center">
          <table class="">
            <thead style="" class="text-center">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Descripition of Goods</th>
                <th scope="col">Quantity</th>
                <th scope="col">Rate</th>
                <th scope="col">Amount</th>
              </tr>
            </thead>
            <tbody class="text-center">
      <?php
include'dbconfig.php';
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * from invoice_new WHERE invoiceno='001'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  $counter = 0;
  while ($row1 = $result->fetch_assoc()){
   $invoice_no=$row1['invoice_no'];
   $name=$row1['name'];
   $qty=$row1['qty'];
   $price=$row1['price'];
   $total=$row1['total'];
   $gtotal=$row1['gtotal'];
   $subtoal=$row1['subtotal'];
   $discount=$row1['discount'];
   $newDate = date("d-m-Y", strtotime($date));
        echo'
              <tr>
                <th scope="row">1</th>
                <td>'.$name.'</td>
                <td>'.$price.'</td>
                <td>'.$qty.'</td>
                <td>'.$total.'</td>
              </tr>
              ';
               }}
              ?>
            </tbody>
  <tfoot class="foot">
    <tr>
      <td class="bordern"></td>
      <td class="bordern"></td>
      <td class="bordern"></td>
       <td>Total</td>
      <td class="text-center"><?php echo $subtoal?></td>
    </tr>
     <tr>
      <td class="bordern"></td>
      <td class="bordern"></td>
      <td class="bordern"></td>
       <td>Discount</td>
      <td class="text-center"><?php echo $discount?></td>
    </tr>
    <tr>
      <td></td>
      <td class="border-top-1"></td>
      <td class="text-end"><p class="my-auto mx-3">Total Pcs:10</p></td>
      <td>Grand Total</td>
      <td class="text-center"><?php echo $total?></td>
    </tr>
  </tfoot>
          </table>
        </div>
        <!--<div class="row">-->
        <!--  <div class="col-6">-->
        <!--    <ul class="list-unstyled">-->
        <!--      <li class="text-muted">Color: <span style="color:#5d9fc5 ;"><?php echo $color ?></span></li>-->
        <!--      <li class="text-muted">Warrenty:<?php echo $warrenty ?></li>-->
        <!--      <li class="text-muted">Email:<i class="fas fa-phone"></i><?php echo $email?></li>-->
        <!--    </ul>-->
        <!--  </div>-->
        <!--  <div class="col-6 ">-->
        <!--    <div class="float-xl-end">-->
        <!--     <ul class="list-unstyled ">-->
        <!--      <li class="text-muted ms-3"><span class="text-black me-4">Total :</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $subtoal?></li>-->
        <!--      <li class="text-muted ms-3"><span class="text-black me-4">Discount :</span><?php echo $discount?></li>-->
        <!--    </ul>-->
        <!--    <p class="text-black "><span class="text-black me-3">Grand Total :</span><span-->
        <!--        style="font-size: 25px;"><?php echo $total?></span></p>-->
        <!--    </div>-->
        <!--  </div>-->
        <!--</div>-->
        <hr>
        <div class="row">
          <div class="col-9">
          </div>
          <div class="col-3 mt-5">
            <p>Authorised Signatory</p>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>

</div>


    <!-- BOOTSTRAP ONLINE CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>