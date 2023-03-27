<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Report|Inventory</title>

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
<?php
 if(isset($_POST['from_date']) && $_POST['to_date']!="" )
{
  $from_date = $_POST['from_date'];
  $to_date = $_POST['to_date'];
}

?>
        <!-- Main-Content -->
        <div class="wrapper">
          <?php require 'left-menu.php'?>
            <div id="content">
                <div class="container-fluid px-0">
                  <?php require'header.php'?>
<div id=''>
  <div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
    <!-- Horizontal Form -->
    <div class="card card-outline card-success">
     <div class="card-header eagle-bg-light eagle-border-light">
      <div class="btn-group float-right">
      <div class="invo mx-2">
      <div class="dropdown">
            <button class="btn btn-primary dropdown-toggle  eagle-bg-primary" type="button" id="dropdownMenuButton1" data-mdb-toggle="dropdown" aria-expanded="false">
              Choose Reports
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
             <li><a href="productreport.php" class="btn dropdown-item" id="" >Product Report</a></li>
             <!-- <li><a class="dropdown-item" href="returnproductreport.php" id="outpro">Outstanding Product Reports</a></li>-->
            </ul>
        </div>
      </div>

                                    </div>
                                    <h6 class="mb-0">Data</h6>
                                </div>
  <form method="POST" action="" id="form1" name="form1" autocomplete="off">
        <div class="card-body">
<div class="form-group row">
<label for="from_date" class="col-sm-1 col-form-label">From Date<span style="color:red">*</span></label>
<div class="col-sm-3">
<input type="date" name="from_date" class="form-control"  placeholder="Select From Date" value="<?php echo $from_date; ?>" />
</div>
<label for="to_date" class="col-sm-1 col-form-label">To Date<span style="color:red">*</span></label>
<div class="col-sm-3">
<input type="date" name="to_date" class="form-control"  placeholder="Select To Date" value="<?php echo $to_date; ?>" />
</div>


<div class="col-sm-3">
<button type="submit" class="btn-sm btn-success" id="submit">Submit</button>
</div>
</div>
</div>
</form>
</div>
</div>
<?php 
  if(isset($_POST['from_date']) && isset($_POST['to_date'])) { 
  $from_date = date('Y-m-d', strtotime($_POST['from_date']));
  $to_date = date('Y-m-d', strtotime($_POST['to_date']));
  if(($from_date!='') && ($to_date!='')){
  $renewal_list= "SELECT * FROM bill date1>= '".$from_date."' and date1<= '".$to_date."'" ;
}}?>
</div>
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
<!--<input type="button" class="mx-2 mt-5" value="Print Page" id="but" onclick="javascript:printDiv('printablediv')" /> -->

<h2 class="mt-2 mx-2"></h2>
                     <div class="row">
                        <div class="col-12 col-sm-12">
                            <div class="card eagle-border-light">
                                <div class="card-header eagle-bg-light eagle-border-light">
<div class="btn-group float-right">
      <div class="invo mx-2">
        <button id="btnExport"class="btn btn-primary shadow-sm" style="vertical-align: middle;" onClick="fnExcelReport()">Export</button>
        <input type="button" class="btn btn-primary shadow-sm" style="vertical-align: middle;"value="Print Page" id="but" onclick="javascript:printDiv('printablediv')" /> 
      </div>
  </div>
 <div id="printablediv">
 <?php
include'dbconfig.php';
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if(($_POST['from_date']) && ($_POST['to_date'])!=""){ 
$sql = "SELECT  SUM(total) AS billtotal FROM bill WHERE date1>='".$from_date."'AND date1<='".$to_date."' ";
}else{
    $sql = "SELECT SUM(total) AS billtotal FROM bill ";
}
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) 
  $billamount=$row['billtotal'];
  {
  }}
  ?>
    <!--<span class="mb-0  px-4 py-2 border border-dark h6">Total Amount:<?php echo $billamount?></span>-->
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="example" class="table table-bordered w-100">
                                          <thead>
                    <tr class="" style="background: azure; color: darkcyan;">
                    <th>Name</th>
                    <th>Mobile Number</th>
                    <th>Product</th>
                    <th>Date</th>
                    <th>Price</th>
                    <th>Address</th>
                    </tr>
                  </thead>
                  <tbody>

  <?php
include'dbconfig.php';
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if(($_POST['from_date']) && ($_POST['to_date'])!=""){ 
$sql = "SELECT * from bill Where date1>='".$from_date."'AND date1<='".$to_date."' GROUP BY invoiceno ";
}else{
    $sql = "SELECT * from bill GROUP BY invoiceno ";
}
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) 
  {
   $date=$row['date1'];
   $name=$row['customer'];
   $address=$row['address'];
   $product=$row['mobiles'];
   $mno=$row['mobile'];
   $price=$row['total'];
    echo'
        <tr>
          <td>'.$name.'</td>
          <td>'.$mno.'</td>
          <td>'.$product.'</td>
          <td>'.$date.'</td>
          <td>'.$price.'</td>
          <td>'.$address.'</td>
        </tr>         ';}}?>
 </tbody>
                  
        </table>


         
        </div>
        <!-- /.card-body -->
              
       

                <!-- /.card-footer -->


             
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                     </div>
                    </div> 
  <div id='#pro'></div>
 </div>

</div>
</div>  
</div>  <!-- End Main-Content -->

        <!-- Top To Bottom-->
        <div class="scrollup text-center eagle-bg-primary text-white"><i class="ion-ios-upload"></i></div>        
        <!-- End Top To Bottom-->

        <!-- jQuery -->
            <script>
$(document).ready(function() {
$('#product').click(function(event){
        var tus = "customer list";
alert(tus);
                $.ajax({
                    url: 'productreport.php',
                    type: 'GET',
                    data: { var_PHP_data: tus },
                    success: function(data) {
                        $('#pro').html(data);
                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown) {
                                   }               //case error                    }
            });
});

});
</script>
<script>
function fnExcelReport() {
  var table = document.getElementById('example'); // id of table
  var tableHTML = table.outerHTML;
  var fileName = 'download.xls';
  var msie = window.navigator.userAgent.indexOf("MSIE ");
  // If Internet Explorer
  if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./)) {
    dummyFrame.document.open('txt/html', 'replace');
    dummyFrame.document.write(tableHTML);
    dummyFrame.document.close();
    dummyFrame.focus();
    return dummyFrame.document.execCommand('SaveAs', true, fileName);
  }
  //other browsers
  else {
    var a = document.createElement('a');
    tableHTML = tableHTML.replace(/  /g, '').replace(/ /g, '%20'); // replaces spaces
    a.href = 'data:application/vnd.ms-excel,' + tableHTML;
    a.setAttribute('download', fileName);
    document.body.appendChild(a);
    a.click();
    document.body.removeChild(a);
  }
}
</script>
        <script  src="dist/js/plugins.js"></script>
        <script src="dist/js/common.js"></script>
    </body>
</html>