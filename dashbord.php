<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Dashboard|Inventory</title>

        <!-- Favicon -->
        <link rel="icon" href="dist/images/Papoose_Logo4.png" type="image/x-icon">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!--Plugin CSS-->
        <link href="dist/css/plugins.css" rel="stylesheet">
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
             <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.min.js"></script>
        <!--main Css-->
        <link href="dist/css/main.css" rel="stylesheet">
    </head>
    <style>
        .hr{
            border-bottom:1px solid black;
        }
         #content{
        right:0px !important;
    }
    </style>
    <body>
    <?php
if(isset($_POST['Update']))
{
//$id=$_GET['id'];
   include'dbconfig.php';
   $product_one=$_POST['product_one'];
   $product_two=$_POST['product_two'];
   
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "UPDATE barchart SET product_one='$product_one',product_two='$product_two' WHERE id='1'";
if ($conn->query($sql) === TRUE){
    echo "<script type='text/javascript'>window.location='dashbord.php?&success=Value Update  Successfully';</script>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
} 
$conn->close();
} 
?>
<?php
 //$id=$_GET['id'];
include'dbconfig.php';
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * from barchart";
$result = $conn->query($sql);
if ($result->num_rows > 0) {

  $counter = 0;
  while ($row1 = $result->fetch_assoc()) {
   $product_one=$row1['product_one'];
   $product_two=$row1['product_two'];
   //$supplier_email=$row1['supplier_email'];
   //$supplier_address=$row1['supplier_address'];   
  }}
  ?>
    <!-- Main-Content -->
        <div class="wrapper">
          <?php require 'left-menu.php'?>
          <!-- <?php require 'rightmenu.php'?>-->
            <div id="content">
                <div class="container-fluid px-0">
                  <?php require 'header.php'?>  
                    <div class="row">
                        <div class="col-12 col-xl-6 mb-4">
                            <div class="card border-light">
                                <div class="card-body p-0">
                                    <div class="custom-tabs2">
                                        <ul class="nav nav-tabs flex-row nav-justified Montserrat" id="myTab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link text-dark rounded-0 active" data-toggle="tab" href="#tab1" role="tab" aria-selected="true" aria-expanded="true">Total Bills</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link text-dark rounded-0" data-toggle="tab" href="#tab2" role="tab" aria-selected="false" aria-expanded="false">Total Sales</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content" id="myTabContent">
                                            <div class="tab-pane fade active show" id="tab1" role="tabpanel" aria-expanded="true">
                                                <div class="card-body p-4">
                                                    <p>Number of all Customers who have Visted on <br /> your Shop last week.</p>
   <?php
include 'dbconfig.php';
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
$fromDate=date('Y-m-d');
$date=strtotime($fromDate); //Custom Date
$previous_monday = strtotime("last week monday",$date);
$previous_sunday= strtotime("last week sunday",$date);
$mon1=date('Y-m-d',$previous_monday);
$sun1=date('Y-m-d',$previous_sunday);
                   if($conn -> connect_error){
                            die("Connection failed: ". $conn -> connect_error);
                        }
                        
                        $sql = "SELECT COUNT(*) AS row_count FROM bill WHERE date1>='".$mon1."' AND date1<='".$sun1."' ";
                        $result = $conn -> query($sql);
                        
                        if($result -> num_rows > 0){
                            while($row = $result -> fetch_assoc()){
                                ?>
                                <h1 class="display-4 font-weight-normal counter_number"><?php echo $row['row_count'] ?></h1>
                                <?php
                            }
                        }
                    ?>
 <?php
include 'dbconfig.php';
                $conn = new mysqli($servername, $username, $password, $dbname);
                // Check connection
$fromDate=date('Y-m-d');
$date=strtotime($fromDate); //Custom Date
$previous_monday = strtotime("last week monday",$date);
$previous_sunday= strtotime("last week sunday",$date);
$mon1=date('Y-m-d',$previous_monday);
$sun1=date('Y-m-d',$previous_sunday);
                   if($conn -> connect_error){
                            die("Connection failed: ". $conn -> connect_error);
                        }
                        $sql = "SELECT SUM(total) AS wek_tot FROM bill WHERE date1>='".$mon1."' AND date1<='".$sun1."' ";
                        $result = $conn -> query($sql);
                        if($result -> num_rows > 0){
                            while($row= $result -> fetch_assoc()){
                              $weektotal=$row["wek_tot"];
                            }
                        }else{
                                $weektotal="0";
                            }
                    ?>
                                       <!-- <h5>₹<code class="eagle-success counter_number"><?php  echo $weektotal ?></code>Last week Sales</h5>-->
                                            <h5><code class="eagle-success">₹<a class="eagle-success counter_number"><?php echo $weektotal ?></a></code>Last week Sales</h5>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="tab2" role="tabpanel" aria-expanded="false">
                                                <div class="card-body p-4">
                                                    <p>Number of Product sales On shop</br>last week</p>
 <?php
                include 'dbconfig.php';
                $conn = new mysqli($servername, $username, $password, $dbname);
                // Check connection
                   if($conn -> connect_error){
                            die("Connection failed: ". $conn -> connect_error);
                        }
                        $sql = "SELECT SUM(qty) AS row_qty FROM bill WHERE date1>='".$mon1."' AND date1<='".$sun1."' ";
                        $result = $conn -> query($sql);
                        if($result -> num_rows > 0){
                            while($row = $result -> fetch_assoc()){
                                ?>
                                <h1 class="display-4 font-weight-normal counter_number"><?php echo $row['row_qty'] ?></h1>
                                <?php
                            }
                        }
                    ?>
                                                 <h5><code class="eagle-success">₹<a class="eagle-success counter_number"><?php echo $weektotal ?></a></code>Last week Sales</h5>
                                                </div>
                                            </div>
                                        </div> 
                                    </div>
 <main class="container">
  <div>
    <canvas id="barChart"></canvas>
  </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-xl-6 mb-4">
                            <div class="row">
                                <div class="col-12 col-xl-6 mb-4">
                                    <div class="box Montserrat text-white eagle-bg-secondry">
                                        <div class="card-body">
                                            <small class="text-uppercase">Today Collection</small>
                                            <div class="clearfix py-3">
                                                <div class="float-left">
                <?php
                include 'dbconfig.php';
                $ip=$_POST['yuvi'];
                $st=$_POST['starting-date'];

                $date2=date('Y/m/d',strtotime($st));

                $ed=$_POST['ending-date'];
                $date3=date('Y/m/d',strtotime($ed));

                $date13=date('Y/m/d');
                $date1=date('Y/m/d');
                $time1=date('h:i:sa');

                $conn = new mysqli($servername, $username, $password, $dbname);
                // Check connection
                if ($conn->connect_error) {
                  die("Connection failed: " . $conn->connect_error);
                }

                $sql200 = "SELECT SUM(total) as overall FROM bill WHERE date1='$date13'";
                $result200 = $conn->query($sql200);
                if ($result200->num_rows > 0) {
                  // output data of each row
                  while($row200 = $result200->fetch_assoc()) {
                  $ov1=$row200["overall"];
                    // echo 'Overall Sales : '.$row200["overall"].'  Rs.';
                  }
                } else {
                    $ov1=0;
                  } 

                $sql201 = "SELECT SUM(gtotal) as overall FROM bill1 WHERE date1='$date13'";
                $result201 = $conn->query($sql201);

                if ($result201->num_rows > 0) {
                  // output data of each row
                  while($row201 = $result201->fetch_assoc()) {
                  $ov2=$row201["overall"];
                    // echo 'Overall Sales : '.$row200["overall"].'  Rs.';
                  }
                } else {
                    $ov2=0;
                  } 

                $iis=(int)$ov1+(int)$ov2;
                //echo  $iis;   
              ?>
                                                    <h2 class="text-white">₹ <a class="counter_number text-white mb-0"><?php echo $iis ?></a></h2>
                                                </div>
                                                <div class="float-right">
                                                    <div class="h2 mb-0"><span class="eagle-success"><i class="ion-android-arrow-forward"></i></span></div>
                                                </div>
                                            </div>
                                            <small>Today Report</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-xl-6 mb-4">
                                    <div class="box Montserrat text-white eagle-bg-secondry">
                                        <div class="card-body">
                                            <small class="text-uppercase">Low Stack Items</small>
                                            <div class="clearfix py-3">
                                                <div class="float-left">
                <?php
                include 'dbconfig.php';
                $ip=$_POST['yuvi'];
                $st=$_POST['starting-date'];
                $date2=date('Y/m/d',strtotime($st));
                $ed=$_POST['ending-date'];
                $date3=date('Y/m/d',strtotime($ed));
                $date13=date('Y/m/d');
                $date1=date('Y/m/d');
                $time1=date('h:i:sa');
                $conn = new mysqli($servername, $username, $password, $dbname);
                // Check connection
                if ($conn->connect_error) {
                  die("Connection failed: " . $conn->connect_error);
                }
                $sql200 = "SELECT COUNT(*) as mobiles FROM stock  ";
                $result200 = $conn->query($sql200);

                if ($result200->num_rows > 0) {
                    // output data of each row
                    while($row200 = $result200->fetch_assoc()) {

                    $ov1=$row200["mobiles"];
                        // echo 'Overall Sales : '.$row200["overall"].'  Rs.';
                        // echo $ov1;
                      }
                  } else {
                      $ov1=0;
                    } 
                $sql201 = "SELECT COUNT(*) as category FROM stock3  ";
                $result201 = $conn->query($sql201);
                if ($result201->num_rows > 0) {
                    // output data of each row
                    while($row201 = $result201->fetch_assoc()) {

                      $ov2=$row201["category"];
                        // echo 'Overall Sales : '.$row200["overall"].'  Rs.';
                    }
                  } else {
                      $ov2=0;
                    } 
                $iis=(int)$ov1+(int)$ov2;
                //echo  $iis;
              ?>
                                              
                                              <h2 class="text-white">₹ <a class="counter_number text-white mb-0"><?php echo $ov1 ?></a></h2>
                                                </div>
                                                <div class="float-right">
                                             <a href="add_stock.php"><div class="h2 mb-0"><span class="eagle-success"><i class="ion-android-arrow-forward"></i></span></div></a>
                                                </div>
                                            </div>
                                            <small>Over All Report</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-xl-6 mb-4">
                                    <div class="box Montserrat text-white eagle-bg-secondry">
                                        <div class="card-body">
                                            <small class="text-uppercase">Customer Due Pending</small>
                                            <div class="clearfix py-3">
                                                <div class="float-left">
             <?php
                include 'dbconfig.php';
                $ip=$_POST['yuvi'];
                $st=$_POST['starting-date'];
                $date2=date('Y/m/d',strtotime($st));
                $ed=$_POST['ending-date'];
                $balance=$_post['balance'];
                $date3=date('Y/m/d',strtotime($ed));
                $date13=date('Y/m/d');
                $date1=date('Y/m/d');
                $time1=date('h:i:sa');
                $conn = new mysqli($servername, $username, $password, $dbname);
                // Check connection
                if ($conn->connect_error) {
                  die("Connection failed: " . $conn->connect_error);
                }
                // $sql200 = "SELECT SUM(balance) as overall FROM bill";
                $sql200 = "SELECT SUM(balance) as overall FROM balance_amt";
                $result200 = $conn->query($sql200);
                if ($result200->num_rows > 0) {
                  // output data of each row
                  while($row200 = $result200->fetch_assoc()) {
                  $ov1=$row200["overall"];
                    // echo 'Overall Sales : '.$row200["overall"].'  Rs.';
                  }
                } else {
                    $ov1=0;
                  } 
                $sql201 = "SELECT SUM(gtotal) as overall FROM bill1 ";
                $result201 = $conn->query($sql201);

                if ($result201->num_rows > 0) {
                  // output data of each row
                  while($row201 = $result201->fetch_assoc()) {

                  $ov2=$row201["overall"];
                    // echo 'Overall Sales : '.$row200["overall"].'  Rs.';
                  }
                } else {
                    $ov2=0;
                  } 

                $iis=(int)$ov1+(int)$ov2;
               // echo  $iis;
              ?>
   
                                             <h2 class="text-white">₹ <a class="counter_number text-white mb-0"><?php echo $ov1 ?></a></h2>
                                                </div>
                                                <div class="float-right">
                                                 <a href="duepending1.php"><div class="h2 mb-0"><span class=""><i class="ion-android-arrow-forward eagle-success"></i></span></div></a>   
                                                </div>
                                            </div>
                                            <small>Over All Report</small>
                                        </div>
                                    </div>
                                </div>
                               <!-- <div class="col-12 col-xl-6 mb-4">
                                    <div class="box Montserrat text-white eagle-bg-secondry">
                                        <div class="card-body">
                                            <small class="text-uppercase">Outstanding Products</small>
                                            <div class="clearfix py-3">
                                                <div class="float-left">
                                               <?php
                                            require_once 'dbconfig.php';
                                            
                                            if($conn -> connect_error){
                                                die("Connection failed: ". $conn -> connect_error);
                                            }
                                            
                                            $sql = "SELECT COUNT(*) AS row_count FROM return12";
                                            $result = $conn -> query($sql);
                                            
                                            if($result -> num_rows > 0){
                                                while($row = $result -> fetch_assoc()){
                                                    ?>
                                                    <h2 class="counter_number text-white mb-0"><?php echo $row['row_count'] ?></h2>
                                                    <?php
                                                }
                                            }
                                        ?>
                                                </div>
                                                <div class="float-right">
                                                    <div class="h2 mb-0"><span class="eagle-success"><i class="ion-android-arrow-up"></i></span></div>
                                                </div>
                                            </div>
                                            <small><code class="eagle-success">+43%</code> From Last Month</small>
                                        </div>
                                    </div>
                                </div>-->
                                <div class="col-12 col-xl-6 mb-4">
                                    <div class="box Montserrat text-white eagle-bg-secondry">
                                        <div class="card-body">
                                            <small class="text-uppercase">Stock Values</small>
                                            <div class="clearfix py-3">
                                                <div class="float-left">
                                                                      <?php
                                                                       require_once 'dbconfig.php';
                                                                       
                                                                       if($conn -> connect_error){
                                                                           die("Connection failed:". $conn -> connect_error);
                                                                       }
                                                                       $sql = "SELECT SUM(total) AS sum_total FROM stock ";
                                                                       $result = $conn -> query($sql);
                                                                       if($result -> num_rows > 0){
                                                                           while($row = $result -> fetch_assoc()){
                                                                               ?>
                                                                              <h2 class="text-white">₹ <a class="counter_number text-white mb-0"><?php echo $row['sum_total'] ?></a></h2>
                                                                               <?php
                                                                           }
                                                                       }
                                                                
                                                                    ?>
                                                </div>
                                                <div class="float-right">
                                                   <a href="add_stock.php"><div class="h2 mb-0"><span class=""><i class="ion-android-arrow-forward eagle-success "></i></span></div></a> 
                                                </div>
                                            </div>
                                            <small>Over All Report</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-xl-12 mb-4">
                                    <div class="box Montserrat text-white eagle-bg-secondry">
                                        <div class="card-body">
                                            <small class="text-uppercase">Monthly Total</small>
                                            <div class="clearfix py-3">
                                                <div class="float-left">
                                                     <?php
                include 'dbconfig.php';
$first_day_this_month = date('Y-m-1');
$last_day_this_month  =date('Y-m-t');
                $conn = new mysqli($servername, $username, $password, $dbname);
                // Check connection
                   if($conn -> connect_error){
                            die("Connection failed: ". $conn -> connect_error);
                        }
                        $sql = "SELECT SUM(total) AS row_tot FROM bill WHERE date1>='".$first_day_this_month."'AND date1<='".$last_day_this_month."' ";
                        $result = $conn -> query($sql);
                        
                        if($result -> num_rows > 0){
                            while($row = $result -> fetch_assoc()){
                                ?>
                                  <h2 class="text-white">₹ <a class="counter_number text-white mb-0"><?php echo $row['row_tot'] ?></a></h2>
                                <?php
                            }
                        }
                    ?>
                                                </div>
                                                <div class="float-right">
                                                    <div class="h2 mb-0"><span class="float-right eagle-success"><i class="ion-android-arrow-forward"></i></span></div>
                                                </div>
                                            </div>
                                            <small>Current Month Report</small>
                                        </div>
                                    </div>
                                </div>
                               <!-- <div class="col-12 col-xl-6 mb-4 mb-md-0">
                                    <div class="box Montserrat text-white eagle-bg-secondry">
                                        <div class="card-body pb-0">
                                            <div class="clearfix">
                                                <div class="float-left">
                                                    <small class="text-uppercase">Cpu Usages</small>
                                                    <h2 class="counter_number text-white mb-0">46.3</h2>
                                                </div>
                                                <div class="float-right">
                                                    <img src="dist/images/cpu.png" alt="" class="img-fluid" />
                                                </div>
                                            </div>
                                            <div class="table-responsive py-4">
                                                <table class="table mb-0 table-bordered table-sm">
                                                    <tbody>
                                                        <tr>
                                                            <td> Usages </td>
                                                            <td class="font-weight-bold"> 243 GB </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Space </td>
                                                            <td class="font-weight-bold"> 781 GB </td>
                                                        </tr>
                                                        <tr>
                                                            <td> RAM </td>
                                                            <td class="font-weight-bold"> 5 GB </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <canvas id="area-chart"></canvas>
                                    </div>
                                </div>-->
                              <!--  <div class="col-12 col-xl-6 mb-0">
                                    <div class="box Montserrat text-white eagle-bg-secondry">
                                        <div class="card-body">
                                            <small class="text-uppercase">Monthly Profit</small>
                                            <div class="clearfix py-3">
                                                <div class="float-sm-left">
                                                    <h2 class="counter_number text-white mb-0">32,854</h2>
                                                </div>
                                                <div class="float-sm-right">
                                                    <div class="h2 mb-0"><span class="float-right text-white"><i class="ion-android-chat"></i></span></div>
                                                </div>
                                            </div>
                                            <small><code class="eagle-warning">-25%</code> From Last Month</small>
                                            <div class="pie-chart py-3"></div>
                                        </div>
                                    </div>
                                </div>-->
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-12">
                            <div class="card border-light mb-4">
                                <div class="card-body">
                      <form method="post" action=""  enctype="multipart/form-data">
                                    <div class="row hr">
                     <div class="col-12 col-lg-6">
                     <h5>Sales Statistics</h5>
                     </div>
                    <div class="col-12 col-lg-2 ml-auto " >
                         <div class="">
                          <h6>Product One</h6>
                            <div class="sel">
                              <select class="form-control" aria-label="Type" name="product_one">
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
                                    $sql = "SELECT Category FROM bill";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while($row = $result->fetch_assoc()) {
                                            echo '<option value='.$row["Category"].'>'.$row["Category"].'</option>';
                                    $mob=$row["Category"];
                                        }
                                    } else {
                                        echo "0 results";
                                    } 
                                ?>
                              </select>
                          </div>
                        </div>
                     </div>
                        <div class="col-12 col-lg-2 ml-auto " >
                         <div class="">
                          <h6>Product Two</h6>
                            <div class="sel">
                              <select class="form-control" aria-label="Type" name="product_two">
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

                                    $sql = "SELECT Category FROM bill";
                                    $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while($row = $result->fetch_assoc()) {
                                            echo '<option value='.$row["Category"].'>'.$row["Category"].'</option>';
                                    $mob=$row["Category"];
                                        }
                                    } else {
                                        echo "0 results";
                                    } 
                                ?>
                              </select>
                          </div>
                        </div>
                      </div>  
                      <div class="mt-5">
                      <button type="submit" name="Update" style="background: white;color: black;border-radius: 8px;"><i class="fa fa-search"></i></button>
                      </div>
                                    </div>
                                    
                                </form>
                                 <div class="col-12 col-lg-6 ">
                                   <div id="piechart_3dd" style=""></div>
                                  </div>
                                 <div class="col-12  col-lg-6 ">
                                   <div id="piechart_3dm" style=""></div>
                                  </div>
                                  <div class="col-12 col-lg-6 mb-4">
                                   <div id="piechart_3dy" style=""></div>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card eagle-border-light">
                                <div class="card-header eagle-bg-light eagle-border-light">
                                    <div class="btn-group float-right">
                                            <div class="invoice_search search_icon d-flex justify-content-between align-items-center">
      <div class="sel">
        <select class="form-control" id="cusname" name="cusname"  aria-label="Select Customers" required>
          <option value="customer" selected disabled>Select Customers</option>
          <?php
            include 'dbconfig.php';
            $date1=date('Y/m/d');
            $time1=date('h:i:sa');
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
            }
            $sql = "SELECT customer FROM bill";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                  echo '<option value='.$row["customer"].'>'.$row["customer"].'</option>';
                }
              } else {
            }
?>
        </select>
      </div>
    </div>
                                    <div class="invo mx-2">
                                     <a href="invoice.php" class="btn btn-primary shadow-sm" style="vertical-align: middle;"><i class="fas fa-user-tag mx-1"></i> Create New Invoice</a>
                                    </div>
                                    <!--    <a href="" class="drop-btn text-white text-center eagle-rounded-circle-50 eagle-bg-primary" data-toggle="dropdown"><small> <i class="ion ion-arrow-down-b"></i> </small></a>-->
                                        <!--<div class="dropdown-menu bg-white border-0">
                                            <a class="dropdown-item" href="#"><i class="icofont icofont-ui-edit text-success pr-2"></i> Edit</a>
                                            <a class="dropdown-item" href="#"><i class="icofont icofont-close-circled text-danger pr-2"></i> Deleat</a>
                                            <a class="dropdown-item" href="#"><i class="icofont icofont-shield-alt text-warning pr-2"></i> Cancel</a>
                                        </div>-->
                                    </div>
                                    <h6 class="mb-0"> Data Table </h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="example" class="table table-bordered w-100">
        <thead>
            <tr>
                <th>Customer Name</th>
                <th hidden>Id</th>
                <th>Product Name</th>
                <th>contact Number</th>
                <th>Email</th>
                <th>Payment</th>
                <!--<th><center>action</center></th>-->
                
                
            </tr>
        </thead>
        <tbody id='tbody'>
            

<?php 
include'dbconfig.php';

$test=$_GET['var_PHP_data'];

$date13=date('Y/m/d');
$time1=date('h:i:sa');


$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// Set the new timezone
date_default_timezone_set('Asia/Kolkata');
$todate = date('y-m-d');
$sql = "SELECT * FROM bill WHERE date1='$todate' GROUP BY invoiceno ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {


        echo '<tr>
                  <td scope="row">' . $row["customer"]. '</td>
                  <td hidden>' . $row["id"] .'</td>
                  <td>' . $row["mobiles"] .'</td>
                  <td>' . $row["mobile"] .'</td>
                  <td>' . $row["email"] .'</td>
                  <td>' . $row["paid"] .'</td>
                    </tr>';

    }
} else {
   //  echo "No Data Found";
} 

?>
 <!--<td><button id="btn1" class="btn1" style="background: white;color: black;border-radius: 8px;"><i class="fa fa-print"></i></button>-->
 <!--                 <button id="btn3" class="btn3" style="background: white;color: black;border-radius: 8px;"><i class="fa fa-bars"></i></button>-->
 <!--                 <a href="delete.php?action=edit&amp;id='.$row['id'].'"><span class="btn btn-dark mx-1"><i class="fas fa-trash"></i></span></a>-->
 <!--                 <a href="edit1.php?action=edit&amp;id='.$row['id'].'"><span class="btn btn-dark"><i class="fas fa-pen"></i></span></a></td>-->

<?php 
include'dbconfig.php';

$test=$_GET['var_PHP_data'];
$date13=date('Y/m/d');
$time1=date('h:i:sa');
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT customer, category,model,address,gtotal,total,price,mrp,date1,time1,email,mobile FROM bill1 WHERE date1='$date13'";
$result = $conn->query($sql);



if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo '<tr>
                  <td scope="row">' . $row["customer"]. '</td>
                  <td>' . $row["category"] .'</td>
                  <td>--</td>
                  <td>' . $row["model"] .'</td>
                  <td>' . $row["address"] .'</td>
                  <td>' . $row["mobile"] .'</td>
                  <td>' . $row["email"] .'</td>
                  <td>' . $row["date1"] .'</td>
                  <td>' . $row["time1"] .'</td>
                   <td> '.$row["Warranty"] .'</td>
                  <td>'.$row["discount"] .'</td>
                  <td>' . $row["gtotal"] .'</td>
                  <td><button id="btn1" class="btn1" style="background: white;color: black;border-radius: 8px;"><i class="fa fa-print"></i></button><button id="btn2" class="btn2" style="background: white;color: black;border-radius: 8px;"><i class="fa fa-edit"></i></button><button id="btn3" class="btn3" style="background: white;color: black;border-radius: 8px;"><i class="fa fa-bars"></i></button></td>
                </tr>';
}
} else {
     //echo "0 results";
} 
?>
        </tbody>
    </table>
                                    </div>
                                </div>
                            </div>
            <!--        <div class="row mt-4">
                        <div class="col-12 col-xl-8 mb-4">
                            <div  id="img-carousal" class="owl-carousel">
                                <div class="item">
                                    <section>
                                        <div class="background-image-maker gradient gradient-lr"></div>
                                        <div class="holder-image">
                                            <img src="dist/images/bg1.jpg" alt="" class="img-fluid d-none">
                                        </div>
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-12 col-xl-12">
                                                    <div class="media mb-3 text-white">
                                                        <img src="dist/images/author2.jpg" alt="" class="d-flex mr-3 img-fluid eagle-rounded-circle-50 align-self-center" width="40">
                                                        <div class="media-body align-self-center eagle-line-height-1_5">
                                                            <span class="Montserrat">Luther Chapman</span>
                                                            <small class="d-block">15 min ago</small>
                                                        </div>
                                                    </div>
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item mr-3"><a href="javascript:;" class="text-white"><i class="ion-eye pr-1"></i> 5241</a></li>
                                                        <li class="list-inline-item mr-3"><a href="javascript:;" class="text-white"><i class="ion-heart pr-1"></i> 5241</a></li>
                                                        <li class="list-inline-item mr-3"><a href="javascript:;" class="text-white"><i class="ion-chatbox pr-1"></i> 5241</a></li>
                                                    </ul>
                                                    <h5 class="text-white">Nam quam nunc blandit vel <br /> luctus pulvinar hendrerit id  <br />lorem maecenas.</h5>
                                                   
                                                    <div class="h2 mb-2 text-primary"><i class="ion-arrow-right-c"></i></div>
                                                </div> 
                                            </div>
                                        </div>
                                    </section>
                                </div>
                                <div class="item">
                                    <section>
                                        <div class="background-image-maker gradient gradient-lr"></div>
                                        <div class="holder-image">
                                            <img src="dist/images/bg2.jpg" alt="" class="img-fluid d-none">
                                        </div>
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-12 col-xl-12">
                                                    <div class="media mb-3 text-white">
                                                        <img src="dist/images/author2.jpg" alt="" class="d-flex mr-3 img-fluid eagle-rounded-circle-50 align-self-center" width="40">
                                                        <div class="media-body align-self-center eagle-line-height-1_5">
                                                            <span class="Montserrat">Luther Chapman</span>
                                                            <small class="d-block">15 min ago</small>
                                                        </div>
                                                    </div>
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item mr-3"><a href="javascript:;" class="text-white"><i class="ion-eye pr-1"></i> 5241</a></li>
                                                        <li class="list-inline-item mr-3"><a href="javascript:;" class="text-white"><i class="ion-heart pr-1"></i> 5241</a></li>
                                                        <li class="list-inline-item mr-3"><a href="javascript:;" class="text-white"><i class="ion-chatbox pr-1"></i> 5241</a></li>
                                                    </ul>
                                                    <h5 class="text-white">Nam quam nunc blandit vel <br /> luctus pulvinar hendrerit id  <br />lorem maecenas.</h5>
                                                    <div class="mb-2 h2 text-primary"><i class="ion-arrow-right-c"></i></div>
                                                </div> 
                                            </div>
                                        </div>
                                    </section>
                                </div>
                                <div class="item">
                                    <section>
                                        <div class="background-image-maker gradient gradient-lr"></div>
                                        <div class="holder-image">
                                            <img src="dist/images/bg1.jpg" alt="" class="img-fluid d-none">
                                        </div>
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-12 col-xl-12">
                                                    <div class="media mb-3 text-white">
                                                        <img src="dist/images/author2.jpg" alt="" class="d-flex mr-3 img-fluid eagle-rounded-circle-50 align-self-center" width="40">
                                                        <div class="media-body align-self-center eagle-line-height-1_5">
                                                            <span class="Montserrat">Luther Chapman</span>
                                                            <small class="d-block">15 min ago</small>
                                                        </div>
                                                    </div>
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item mr-3"><a href="javascript:;" class="text-white"><i class="ion-eye pr-1"></i> 5241</a></li>
                                                        <li class="list-inline-item mr-3"><a href="javascript:;" class="text-white"><i class="ion-heart pr-1"></i> 5241</a></li>
                                                        <li class="list-inline-item mr-3"><a href="javascript:;" class="text-white"><i class="ion-chatbox pr-1"></i> 5241</a></li>
                                                    </ul>
                                                    <h5 class="text-white">Nam quam nunc blandit vel <br /> luctus pulvinar hendrerit id  <br />lorem maecenas.</h5>
                                                    <div class="mb-2 h2 text-primary"><i class="ion-arrow-right-c"></i></div>
                                                </div> 
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-xl-4">
                            <div class="card border-light mb-4">
                                <div class="card-body">
                                    <ul class="list-unstyled mb-0 eagle-line-height-4 todo">
                                        <li>
                                            <a href="#" class="eagle-dark"><i class="fa fa-chrome pr-1"></i> Chrome</a>
                                            <span class="float-right eagle-danger">-$15.00</span>
                                        </li>
                                        <li>
                                            <a href="#" class="eagle-dark"><i class="fa fa-firefox pr-1"></i> Firefox</a>
                                            <span class="float-right eagle-success">-$15.00</span>
                                        </li>
                                        <li>
                                            <a href="#" class="eagle-dark"><i class="fa fa-internet-explorer pr-1"></i> Internet Explorer</a>
                                            <span class="float-right eagle-danger">-$15.00</span>
                                        </li>
                                        <li>
                                            <a href="#" class="eagle-dark"><i class="fa fa-safari pr-1"></i> Safari</a>
                                            <span class="float-right eagle-success">-$15.00</span>
                                        </li>
                                        <li>
                                            <a href="#" class="eagle-dark"><i class="fa fa-opera pr-1"></i> Opera</a>
                                            <span class="float-right eagle-success">-$15.00</span>
                                        </li>
                                        <li>
                                            <a href="#" class="eagle-dark"><i class="fa fa-edge pr-1"></i> Edge</a>
                                            <span class="float-right eagle-danger">-$15.00</span>
                                        </li>
                                        <li>
                                            <a href="#" class="eagle-dark"><i class="fa fa-firefox pr-1"></i> Others</a>
                                            <span class="float-right eagle-danger">-$15.00</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-xl-12 mb-4">
                            <div class="card border-light mb-4">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12 col-xl-6">
                                            <h5>Top Products</h5>
                                        </div>
                                        <div class="col-12 col-xl-3 ml-auto">
                                            <div class="form-group table position-relative">
                                                <input type="text" class="form-control eagle-rounded-circle-50" placeholder="search Product">
                                                <div class="btn-search position-absolute">
                                                    <a href="#" class="eagle-light"><i class="fa fa-search"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-xl-2">

                                        </div>
                                    </div>
                      <div  id="img-product" class="owl-carousel">
                                        <div class="item">
                                            <div class="product">
                                                <img src="dist/images/img1.jpg" alt="" class="img-fluid" />
                                                <div class="product-content pt-3 text-dark Montserrat">
                                                    <a href="#" class="text-dark d-block eagle-light">Printed Blazer Style Dress</a>
                                                    <span class="price-off eagle-light"><del></del>$350</span>
                                                    <span class="price-on">$280</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product">
                                                <img src="dist/images/img2.jpg" alt="" class="img-fluid" />
                                                <div class="product-content pt-3 text-dark Montserrat">
                                                    <a href="#" class="text-dark d-block eagle-light">Printed Blazer Style Dress</a>
                                                    <span class="price-off eagle-light"><del></del>$350</span>
                                                    <span class="price-on">$280</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product">
                                                <img src="dist/images/img3.jpg" alt="" class="img-fluid" />
                                                <div class="product-content pt-3 text-dark Montserrat">
                                                    <a href="#" class="text-dark d-block eagle-light">Printed Blazer Style Dress</a>
                                                    <span class="price-off eagle-light"><del></del>$350</span>
                                                    <span class="price-on">$280</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product">
                                                <img src="dist/images/img4.jpg" alt="" class="img-fluid" />
                                                <div class="product-content pt-3 text-dark Montserrat">
                                                    <a href="#" class="text-dark d-block eagle-light">Printed Blazer Style Dress</a>
                                                    <span class="price-off eagle-light"><del></del>$350</span>
                                                    <span class="price-on">$280</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product">
                                                <img src="dist/images/img1.jpg" alt="" class="img-fluid" />
                                                <div class="product-content pt-3 text-dark Montserrat">
                                                    <a href="#" class="text-dark d-block eagle-light">Printed Blazer Style Dress</a>
                                                    <span class="price-off eagle-light"><del></del>$350</span>
                                                    <span class="price-on">$280</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product">
                                                <img src="dist/images/img2.jpg" alt="" class="img-fluid" />
                                                <div class="product-content pt-3 text-dark Montserrat">
                                                    <a href="#" class="text-dark d-block eagle-light">Printed Blazer Style Dress</a>
                                                    <span class="price-off eagle-light"><del></del>$350</span>
                                                    <span class="price-on">$280</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product">
                                                <img src="dist/images/img3.jpg" alt="" class="img-fluid" />
                                                <div class="product-content pt-3 text-dark Montserrat">
                                                    <a href="#" class="text-dark d-block eagle-light">Printed Blazer Style Dress</a>
                                                    <span class="price-off eagle-light"><del></del>$350</span>
                                                    <span class="price-on">$280</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product">
                                                <img src="dist/images/img4.jpg" alt="" class="img-fluid" />
                                                <div class="product-content pt-3 text-dark Montserrat">
                                                    <a href="#" class="text-dark d-block eagle-light">Printed Blazer Style Dress</a>
                                                    <span class="price-off eagle-light"><del></del>$350</span>
                                                    <span class="price-on">$280</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>-->
                </div>
            </div>
        </div>
                     </div>
                    </div> 
        <!-- End Main-Content -->

        <!-- Top To Bottom-->
        <div class="scrollup text-center eagle-bg-primary text-white"><i class="ion-ios-upload"></i></div>        
        <!-- End Top To Bottom-->
 <?php
include'dbconfig.php';
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$fromDate=date('Y-m-d');
$sql = "SELECT * FROM bill ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while ($row1 = $result->fetch_assoc()) {
  $product=$row1['Category'];
  $weeakday=$row1['date1'];
// echo $weeakday;
  $timestamp = strtotime($weeakday);
  $day = date('l', $timestamp);
 //echo $fromDate;
 $date = strtotime($fromDate); //Custom Date
$previous_monday = strtotime("last week monday",$date);
$previous_tuesday = strtotime("last week tuesday",$date);
$previous_wednesday = strtotime("last week wednesday",$date);
$previous_thursday = strtotime("last week thursday",$date);
$previous_friday = strtotime("last week friday",$date);
$previous_saturday= strtotime("last week saturday",$date);
$previous_sunday= strtotime("last week sunday",$date);
$mon=date('Y-m-d',$previous_monday);
$tue=date('Y-m-d',$previous_tuesday);
$wed=date('Y-m-d',$previous_wednesday);
$thur=date('Y-m-d',$previous_thursday);
$fri=date('Y-m-d',$previous_friday);
$sat=date('Y-m-d',$previous_saturday);
$sun=date('Y-m-d',$previous_sunday);

  }}
$sql1 ="SELECT COUNT(*) AS row_mobile FROM bill WHERE Category='$product_one' AND date1='$mon'";
$result1 = $conn->query($sql1);
if ($result1->num_rows > 0) {
  while ($row1 = $result1->fetch_assoc()) {
   $mobmon=$row1['row_mobile'];
   // echo $mobfri;
  }}
$sql2 = "SELECT COUNT(*) AS row_acc FROM bill  WHERE Category='$product_two' AND date1='$mon'";
$result2 = $conn->query($sql2);
if ($result2->num_rows > 0) {
  while ($row2 = $result2->fetch_assoc()) {
  $accmon=$row2['row_acc'];
 // echo $accfri;
  }}
$sql3 ="SELECT COUNT(*) AS row_mobile FROM bill WHERE Category='$product_one' AND date1='$tue'";
$result3 = $conn->query($sql3);
if ($result3->num_rows > 0) {
  while ($row3 = $result3->fetch_assoc()) {
   $mobtue=$row3['row_mobile'];
   // echo $mobmon;
  }}
$sql4 = "SELECT COUNT(*) AS row_acc FROM bill  WHERE Category='$product_two' AND date1='$tue'";
$result4 = $conn->query($sql4);
if ($result4->num_rows > 0) {
  while ($row4 = $result4->fetch_assoc()) {
  $acctue=$row4['row_acc'];
 // echo $accmon;
  }}
$sql5="SELECT COUNT(*) AS row_mobile FROM bill WHERE Category='$product_one' AND date1='$wed'";
$result5 = $conn->query($sql5);
if ($result5->num_rows > 0) {
  while ($row5 = $result5->fetch_assoc()) {
   $mobwed=$row5['row_mobile'];
   // echo $mobmon;
  }}
$sql6= "SELECT COUNT(*) AS row_acc FROM bill  WHERE Category='$product_two' AND date1='$wed'";
$result6 = $conn->query($sql6);
if ($result6->num_rows > 0) {
  while ($row6 = $result6->fetch_assoc()) {
  $accwed=$row6['row_acc'];
 // echo $accmon;
  }}
$sql7="SELECT COUNT(*) AS row_mobile FROM bill WHERE Category='$product_one' AND date1='$thur'";
$result7 = $conn->query($sql7);
if ($result7->num_rows > 0) {
  while ($row7 = $result7->fetch_assoc()) {
   $mobthur=$row7['row_mobile'];
   // echo $mobmon;
  }}
$sql8= "SELECT COUNT(*) AS row_acc FROM bill  WHERE Category='$product_two' AND date1='$thur'";
$result8 = $conn->query($sql8);
if ($result8->num_rows > 0) {
  while ($row8 = $result8->fetch_assoc()) {
  $accthur=$row8['row_acc'];
 // echo $accmon;
  }}
$sql9="SELECT COUNT(*) AS row_mobile FROM bill WHERE Category='$product_one' AND date1='$fri'";
$result9 = $conn->query($sql9);
if ($result9->num_rows > 0) {
  while ($row9 = $result9->fetch_assoc()) {
   $mobfri=$row9['row_mobile'];
   // echo $mobmon;
  }}
$sql10= "SELECT COUNT(*) AS row_acc FROM bill  WHERE Category='$product_two' AND date1='$fri'";
$result10 = $conn->query($sql10);
if ($result10->num_rows > 0) {
  while ($row10 = $result10->fetch_assoc()) {
  $accfri=$row10['row_acc'];
 // echo $accmon;
  }}
$sql11="SELECT COUNT(*) AS row_mobile FROM bill WHERE Category='$product_one' AND date1='$sat'";
$result11 = $conn->query($sql11);
if ($result11->num_rows > 0) {
  while ($row11 = $result11->fetch_assoc()) {
   $mobsat=$row11['row_mobile'];
   // echo $mobmon;
  }}
$sql12= "SELECT COUNT(*) AS row_acc FROM bill  WHERE Category='$product_two' AND date1='$sat'";
$result12 = $conn->query($sql12);
if ($result12->num_rows > 0) {
  while ($row12 = $result12->fetch_assoc()) {
  $accsat=$row12['row_acc'];
 // echo $accmon;
  }}
$sql13="SELECT COUNT(*) AS row_mobile FROM bill WHERE Category='$product_one' AND date1='$sun'";
$result13 = $conn->query($sql13);
if ($result13->num_rows > 0) {
  while ($row13 = $result13->fetch_assoc()) {
   $mobsun=$row13['row_mobile'];
   // echo $mobmon;
  }}
$sql14= "SELECT COUNT(*) AS row_acc FROM bill  WHERE Category='$product_two' AND date1='$sun'";
$result14 = $conn->query($sql14);
if ($result12->num_rows > 0) {
  while ($row14 = $result14->fetch_assoc()) {
  $accsun=$row14['row_acc'];
 // echo $accmon;
  }}
  ?>
<?php
include'dbconfig.php';
  $conn = new mysqli($servername, $username, $password, $dbname);
                // Check connection
 $datetoday=date('Y/m/d');
 $premonthstart=date("Y-n-j", strtotime("first day of previous month"));
 $premonthend=date("Y-n-j", strtotime("last day of previous month"));

                   if($conn -> connect_error){
                            die("Connection failed: ". $conn -> connect_error);
                        }
                        $sql = "SELECT SUM(qty) AS row_cat FROM bill WHERE  Category='$product_one' ";
                        $result = $conn -> query($sql);
                        
                        if($result -> num_rows > 0){
                            while($row = $result -> fetch_assoc()){
                             $row_moma=$row['row_cat'];
                             echo $row_moma;
                            }
                        }else{
                            echo '0';
                        }
                        $sql1 = "SELECT SUM(qty) AS row_acc FROM bill WHERE  Category='$product_two' ";
                        $result1= $conn -> query($sql1);
                        if($result1-> num_rows > 0){
                            while($row1 = $result1 -> fetch_assoc()){
                             $row_acca=$row1['row_acc'];
                             echo $row_acca;
                            }
                        }else{
                            echo '0';
                        }
                        $sql2 = "SELECT SUM(qty) AS row_acct FROM bill WHERE  Category='$product_one' AND date1='$datetoday' ";
                        $result2= $conn -> query($sql2);
                        if($result2-> num_rows > 0){
                            while($row2 = $result2 -> fetch_assoc()){
                             $row_acct=$row2['row_acct'];
                             echo $row_acct;
                             //echo $datetoday;
                            }
                        }else{
                            $row_acct="0" ;
                        }
                        $sql3 = "SELECT SUM(qty) AS row_mobt FROM bill WHERE  Category='$product_two' AND date1='$datetoday' ";
                        $result3= $conn -> query($sql3);
                        if($result3-> num_rows > 0){
                            while($row3 = $result3 -> fetch_assoc()){
                             $row_mobt=$row3['row_mobt'];
                           echo $row_mobt;
                            // echo $datetoday;
                            }
                        }else{
                             $row_mobt='0';
                        }
                       $sql4 = "SELECT SUM(qty) AS row_mobm FROM bill WHERE  Category='$product_one' AND date1>='$premonthstart' AND date1<='$premonthend' ";
                        $result4= $conn -> query($sql4);
                        if($result4-> num_rows > 0){
                            while($row4 = $result4 -> fetch_assoc()){
                             $row_mobm=$row4['row_mobm'];
                             echo $row_mobm;
                             //echo $datetoday;
                            }
                        }else{
                            echo "0" ;
                        }
                       $sql5 = "SELECT SUM(qty) AS row_accm FROM bill WHERE  Category='$product_two' AND date1>='$premonthstart' AND date1<='$premonthend' ";
                        $result5= $conn -> query($sql5);
                        if($result5-> num_rows > 0){
                            while($row5 = $result5 -> fetch_assoc()){
                             $row_accm=$row5['row_accm'];
                            // echo $row_accm;
                             //echo $datetoday;
                            }
                        }else{
                             $row_accm="0" ;
                        }
    ?>
<script>
    $(document).ready(function() {
$('#cusname').change(function(event){
        var tus = document.getElementById("cusname").value;
//alert(tus);
                    $.ajax({
                    url: 'index24.php',
                    type: 'GET',
                    data: { var_PHP_data:tus },
                    success: function(data) {
                        $('#tbody').html(data);
                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown) {
                    }               //case error                    }
            });
});
});
</script>
<script>
$('#example').on('click', '#btn1', function() {
  var tus = $(this).closest('tr').find('td:first').text();
  var id1 = $(this).closest('tr').find('td:eq(1)').text();
  var tus1 = $(this).closest('tr').find('td:eq(7)').text();
  var tus2 = $(this).closest('tr').find('td:eq(8)').text();
  //alert(id1);
  $.post('edit.php',{postname:tus, dateva:tus1, timeva:tus2,id:id1},function(data){
        //alert(tus);
    window.location.replace("https://inventory.staging-rdegi.com/testing.php");
  });
});
$('#example').on('click', '#btn2', function() {
  var tus = $(this).closest('tr').find('td:first').text();
  var tus1 = $(this).closest('tr').find('td:eq(7)').text();
  var tus2 = $(this).closest('tr').find('td:eq(8)').text();

  $.post('edit.php',{postname:tus, dateva:tus1, timeva:tus2},function(data){
//alert(tus);
    window.location.replace("https://inventory.staging-rdegi.com/billingedit.php");
  });
});

$('#example').on('click', '#btn3', function() {
  var tus = $(this).closest('tr').find('td:first').text();
  var id1 = $(this).closest('tr').find('td:eq(1)').text();
  var tus3 = $(this).closest('tr').find('td:eq(5)').text();
  var tus1 = $(this).closest('tr').find('td:eq(8)').text();
  //var tus2 = $(this).closest('tr').find('td:eq(8)').text();
  $.post('edit.php',{postname:tus, barcode:tus1, amt:tus3,id:id1},function(data){
      
//alert(tus);
//alert(tus1);
//alert(tus2);
//alert(tus3);
    window.location.replace("https://inventory.staging-rdegi.com/payscript.php");

  });
});
</script>
<script>
    var ctx = document.getElementById("barChart").getContext('2d');
var barChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"],
    datasets: [{
      label: '<?php echo $product_one?>',
      data: [<?php echo $mobmon?>,<?php echo $mobtue?>,<?php echo $mobwed?>,<?php echo $mobthur?>, <?php echo $mobfri ?>,<?php echo $mobsat?>,<?php echo $mobsun?>],
      backgroundColor: "rgba(0, 27, 34, 0.54)"
    }, {
      label: '<?php echo $product_two?>',
      data: [<?php echo $accmon?>,<?php echo $acctue?>,<?php echo $accwed?>,<?php echo $accthur?>,  <?php echo $accfri ?>, <?php echo $accsat?>, <?php echo $accsun?>],
      backgroundColor: "rgba(0, 27, 183, 0.54)"
    },]
  }
});
</script>
<?php
if ($row_mobt !=''){
    $rowmobt=$row_mobt;
}else{
     $rowmobt='0';
}
if ($row_acct !=''){
    $rowacct=$row_acct;
}else{
     $rowacct='0';
}
if ($row_accm !=''){
    $rowaccm=$row_accm;
}else{
     $rowaccm='0';
}
if ($row_mobm !=''){
    $rowmobm=$row_mobm;
}else{
     $rowmobm='0';
}
if ($row_moma !=''){
    $rowmoba=$row_moma;
}else{
     $rowmoba='0';
}
if ($row_acca !=''){
    $rowacca=$row_acca;
}else{
     $rowacca='0';
}
?>

 <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['<?php echo $product_one?>',<?php echo $rowacct ?>],
          ['<?php echo $product_two?>',<?php echo $rowmobt ?>],
        ]);

        var options = {
          title: 'Daily Sales Report',
          is3D: true,
        };
        var chart = new google.visualization.PieChart(document.getElementById('piechart_3dd'));
        chart.draw(data, options);
      }
    </script>
 <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['<?php echo $product_one?>',<?php echo $rowmobm?>],
          ['<?php echo $product_two?>',<?php echo $rowaccm?>],
        ]);
        var options = {
          title:'Privouse Monthly Sales Report',
          is3D: true,
        };
        var chart = new google.visualization.PieChart(document.getElementById('piechart_3dm'));
        chart.draw(data, options);
      }
    </script>
      <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['<?php echo $product_one?>',<?php echo $rowmoba ?>],
          ['<?php echo $product_two?>',<?php echo $rowacca?>],
        ]);
        var options = {
          title: 'Overall Sales Report',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3dy'));
        chart.draw(data, options);
      }
    </script>
        <!-- jQuery -->
        <script  src="dist/js/plugins.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="ajax_js.js"></script>
        <script src="dist/js/common.js"></script>
    </body>
</html>