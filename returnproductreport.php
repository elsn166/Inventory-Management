<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Reterun product|Inventory</title>

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
            <!--  <li><a class="dropdown-item" href="viewproductdetails.php" id="outpro">Outstanding Product Reports</a></li>-->
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
<div class="col-sm-3">
<button type="submit" class="btn-sm btn-success" id="submit">Submit</button>
</div>
</div>
</div>
</div>
</div>
<?php if(isset($_POST['from_date'])) { 
      $from_date = date('Y-m-d', strtotime($_POST['from_date']));
  if(($from_date!='')){
  $renewal_list= "SELECT * FROM return12 WHERE ReturnDate >= '".$from_date."'" ;
}}?>
</div>
<h2 class="mt-2 mx-2"></h2>
                     <div class="row">
                        <div class="col-12 col-sm-12">
                            <div class="card eagle-border-light">
                                <div class="card-header eagle-bg-light eagle-border-light">
                                    <div class="btn-group float-right">

      <div class="invo mx-2">
     <!--   <div class="dropdown">
            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-mdb-toggle="dropdown" aria-expanded="false">
              Stock Options
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
              <li><a class="dropdown-item" href="javascript:void(0)" id="custlist11">Due Pending</a></li>
              <li><a class="dropdown-item" href="javascript:void(0)" id="custlist2">add Stock</a></li>
            </ul>
        </div>-->
        <!-- <a href="javascript:void(0)" class="btn btn-primary shadow-sm" style="vertical-align: middle;"><i class="fas fa-user-tag mx-1"></i> Create New Invoice</a> -->
      </div>
                                   <!--     <a href="" class="drop-btn text-white text-center eagle-rounded-circle-50 eagle-bg-primary" data-toggle="dropdown"><small> <i class="ion ion-arrow-down-b"></i> </small></a>
                                        <div class="dropdown-menu bg-white border-0">
                                            <a class="dropdown-item" href="#"><i class="icofont icofont-ui-edit text-success pr-2"></i> Edit</a>
                                            <a class="dropdown-item" href="#"><i class="icofont icofont-close-circled text-danger pr-2"></i> Deleat</a>
                                            <a class="dropdown-item" href="#"><i class="icofont icofont-shield-alt text-warning pr-2"></i> Cancel</a>
                                        </div>-->
                                    </div>
                                    <h6 class="mb-0">Data</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                       <table id="example" class="table table-bordered w-100">
                                               <thead>
            <tr class="" style="background: azure; color: darkcyan;">
               <th>CustomerName</th>
               <th>Barcode</th>
               <th>Return Date</th>
               <th>MobileNumber</th>
               <th>Email</th>
             
            </tr>
          </thead>

          <tbody>
            
            
        <?php 
include'dbconfig.php';
$date1=date('Y/m/d');
$time1=date('h:i:sa');
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if(($_POST['from_date'])!=""){ 
$sql = "SELECT * from return12 Where ReturnDate='".$from_date."'";
}else{
    $sql = "SELECT * from return12 ";
}
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo '<tr>
                  <td scope="row">' . $row["CustomerName"]. '</td>
                  <td>' . $row["Barcode"] .'</td>
                  <td>' . $row["ReturnDate"] .'</td>
                  <td>' . $row["MobileNumber"] .'</td>
                  <td>' . $row["Email"] .'</td>
                </tr>';
    }
} else {
    // echo "0 results";
} 

?>
          </tbody>
             <tfoot>
                  <tr>
               <th>CustomerName</th>
               <th>Barcode</th>
               <th>Return Date</th>
               <th>MobileNumber</th>
               <th>Email</th>                   </tr>
                                            </tfoot>
                                        </table>

         
        </div>
        <!-- /.card-body -->
              
       

                <!-- /.card-footer -->


              </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
  <div id='#pro'></div>
 </div>

</div>
    </div>    <!-- End Main-Content -->

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
        <script  src="dist/js/plugins.js"></script>
        <script src="dist/js/common.js"></script>
    </body>
</html>