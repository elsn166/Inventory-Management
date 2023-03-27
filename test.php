<?php
  session_start();
?>


<!DOCTYPE html>
<html>
<head>
    <title>Dashboard | Smart Deal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="./bootstrap_mdb/css/mdb.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="main.css">
    
    

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
</head>
<body>
 
<!-- Vertical navbar -->
<div class="vertical-nav bg-white" id="sidebar">
  <div class="py-4 px-3 mb-4 bg-light">
    <div class="media d-flex justify-content-evenly align-items-center">
      <img loading="lazy" src="img/logo.png" alt="Smart Deal Logo" width="70" height="70" class="mr-3 rounded-circle img-thumbnail shadow-sm">
      <div class="media-body">
        <h6 class="m-0">Smart Deal</h6>
        <p class="font-weight-normal text-muted mb-0">Mobile Shop</p>
      </div>
    </div>
  </div>

  <!-- <p class="text-gray font-weight-bold text-uppercase px-3 small pb-4 mb-0">Dashboard</p> -->

  <ul class="nav flex-column bg-white mb-0">
    <li class="nav-item">
      <a href="main.php" class="nav-link text-dark actv font-weight-bold text-uppercase hover-overlay ripple">
        <i class="fas fa-th mr-3 text-primary fa-fw"></i>
            Dashboard
        </a>
    </li>
    <li class="nav-item">
      <a href="invoice.php" class="nav-link text-dark font-weight-bold text-uppercase hover-overlay ripple">
        <i class="fas fa-user-tag mr-3 text-primary fa-fw"></i>
            Invoice
        </a>
    </li>
    <li class="nav-item">
      <a href="report.php" class="nav-link text-dark font-weight-bold text-uppercase hover-overlay ripple">
        <i class="fas fa-scroll mr-3 text-primary fa-fw"></i>
            Reports
        </a>
    </li>
    <li class="nav-item">
      <a href="add_stock.php" class="nav-link text-dark font-weight-bold text-uppercase hover-overlay ripple">
        <i class="fas fa-plus-circle mr-3 text-primary fa-fw"></i>
            Add Stock
        </a>
    </li>
    <li class="nav-item">
      <a href="product.php" class="nav-link text-dark font-weight-bold text-uppercase hover-overlay ripple">
        <i class="fas fa-boxes mr-3 text-primary fa-fw"></i>
            Products
        </a>
    </li>
    <li class="nav-item">
      <a href="employee.php" class="nav-link text-dark font-weight-bold text-uppercase hover-overlay ripple">
        <i class="fas fa-address-card mr-3 text-primary fa-fw"></i>
            Employees
        </a>
    </li>
    <li class="nav-item">
      <a href="credit_point.php" class="nav-link text-dark font-weight-bold text-uppercase hover-overlay ripple">
          <i class="fas fa-receipt mr-3 text-primary fa-fw"></i>
            Credit Point
        </a>
    </li>
    <li class="nav-item">
      <a href="supplierdetails.php" class="nav-link text-dark font-weight-bold text-uppercase hover-overlay ripple">
          <i class="fas fa-receipt mr-3 text-primary fa-fw"></i>
            Supplier Details
        </a>
    </li>
     <li class="nav-item">
      <a href="viewproductdetails.php" class="nav-link text-dark font-weight-bold text-uppercase hover-overlay ripple">
          <i class="fas fa-receipt mr-3 text-primary fa-fw"></i>
            Return Product Details
        </a>
    </li>
   
  </ul>
</div>
<!-- End vertical navbar -->


<!-- Page content holder -->
<div class="page-content py-2 px-3" id="content">
  <!-- Search bar -->
  <div class="search search_toggle">
    <!-- <form action="" method="post" autocomplete="on"> -->
        <input type="text" name="myInput" id="myInput" autofocus placeholder="Search docs"/>
    <!-- </form> -->

    <a href="javascript:void(0)" class="text-dark" id="close_btn"><i class="material-icons-outlined hover-overlay ripple close_btn" data-mdb-ripple-color="#b1b1b1">close</i></a>
  </div>

  <div class="d-flex justify-content-between align-items-center shadow-1 p-2">
    <div class="toggle_btn">
      <!-- Toggle button -->
      <button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm" data-mdb-ripple-color="dark"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold">&nbsp; Menu</small></button>

    </div>
    
    <div class="invoice_search search_icon d-flex justify-content-between align-items-center">
      <div class="sel">
        <select class="form-select" id="custo" name="custo"  aria-label="Select Customers" required>
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


            // $sql = "SELECT customer FROM bill1";
            // $result = $conn->query($sql);

            // if ($result->num_rows > 0) {
            //     // output data of each row
            //     while($row = $result->fetch_assoc()) {
            //       echo '<option value='.$row["customer"].'>'.$row["customer"].'</option>';
            //     }
            //   } else {     
            // }
          ?>
          <!-- <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option> -->
        </select>
      </div>

      <div class="invo mx-2">
        <a href="invoice.php" class="btn btn-primary shadow-sm" style="vertical-align: middle;"><i class="fas fa-user-tag mx-1"></i> Create New Invoice</a>
      </div>
      
      <!--<div class="sear">-->
      <!--  <a href="javascript:void(0)" class="text-dark" id="search_ico"><i class="material-icons-outlined hover-overlay ripple search_btn" data-mdb-ripple-color="#b1b1b1">search</i></a>-->
      <!--</div>-->
    </div>
  </div>

  <div class="row mt-4">
    <div class="col-12">
      <!-- Card Block -->
      <div class="d-flex justify-content-between align-content-center">
        <div class="card">
          <div class="card-body">
            <h6 class="card-title">Today Collection</h6>
            <p class="card-text">
              Rs. 
              <span class="fs-3" class="fs-5">
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

                $sql200 = "SELECT SUM(paid) as overall FROM bill WHERE date1='$date13'";
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
                echo  $iis;
              ?>
              </span>
            </p>
          </div>
        </div>

        <div class="card">
          <div class="card-body">
            <h6 class="card-title">Low Stack Items</h6>
            <p class="card-text">
              <span class="fs-3">
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

                $sql200 = "SELECT COUNT(*) as mobiles FROM stock2 WHERE stock<=7 ";
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

                $sql201 = "SELECT COUNT(*) as category FROM stock3 WHERE stock<=7 ";
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
                echo  $iis;
              ?>
              </span>
            </p>
          </div>
        </div>

        <div class="card">
          <div class="card-body">
            <h6 class="card-title">Customer Due Pending</h6>
            <p class="card-text">
              <span class="fs-3">
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

                $sql200 = "SELECT SUM(balance) as overall FROM bill WHERE date1='$date13'";
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
                echo  $iis;
              ?>
              </span>
            </p>
          </div>
        </div>

        <div class="card">
          <div class="card-body">
            <a href="viewproductdetails.php"><h6 class="card-title">Outstanding Products</h6></a>
            <p class="card-text">
              <span class="fs-3">
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
                                <h3><?php echo $row['row_count'] ?></h3>
                                <?php
                            }
                        }
                    ?>

              </span>
            </p>
          </div>
        </div>

        <div class="card">
          <div class="card-body">
            <a href="add_stock.php"><h6 class="card-title">Stock Values</h6></a>
            <p class="card-text">
              <span class="fs-3" id="timer">
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
                        <h3><?php echo $row['sum_total'] ?></h3>
                           <?php
                       }
                   }
            
                ?>
         
              </span>
            </p>
          </div>
        </div>
      </div>
      <!-- Card Block -->

      <div class="row">
        <div class="col-12">
          <div class="card p-0 my-4 rounded-sm shadow">
            <div class="card-body">
              <div class="table table-responsive">
                    <table id="table" class="table table-light">
        <thead>
            <tr>
                
                <th>Customer Name</th>
                <th>Product Name</th>
                <th>contact Number</th>
                <th>Email</th>
                <th>Payment</th>
                        
                <th>Date</th>
                <th>Time</th>
                <th>Billing Person</th>
               
                <th><center>action</center></th>
                
                
            </tr>
        </thead>
        <tbody id='tbody'>
            

<?php 
 $servername = "localhost";
$username = "u309950752_smartdeal";

$password = "Smartdeal@2022";

$dbname = "u309950752_smartdeal";

$test=$_GET['var_PHP_data'];

$date13=date('Y/m/d');
$time1=date('h:i:sa');


$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}




$sql = "SELECT * FROM bill";
$result = $conn->query($sql);



if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {


        echo '<tr>
                  <td scope="row">' . $row["customer"]. '</td>
                  <td>' . $row["mobiles"] .'</td>
                  <td>' . $row["mobile"] .'</td>
                  <td>' . $row["email"] .'</td>
                  <td>' . $row["gtotal"] .'</td>
                  <td>' . $row["date1"] .'</td>
                  <td>' . $row["time1"] .'</td>
                  <td>' . $row["billing_person"] .'</td>
                  <td><button id="btn1" class="btn1" style="background: white;color: black;border-radius: 8px;"><i class="fa fa-print"></i></button><button id="btn2" class="btn2" style="background: white;color: black;border-radius: 8px;"><i class="fa fa-edit"></i></button><button id="btn3" class="btn3" style="background: white;color: black;border-radius: 8px;"><i class="fa fa-bars"></i></button></td>
                  
                 
                
                
                
                </tr>';





    }
} else {
    // echo "0 results";
} 

?>


<?php 
 $servername = "localhost";
$username = "u309950752_smartdeal";

$password = "Smartdeal@2022";

$dbname = "u309950752_smartdeal";

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
    // echo "0 results";
} 

?>
        

                        
        </tbody>
    </table>


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
    
    $(document).ready(function() {
$('#custo').change(function(event){

	
		

        var tus = document.getElementById("custo").value;

// alert (tus);


            
                $.ajax({
                    url: 'index24.php',
                    type: 'GET',
                    data: { var_PHP_data: tus },
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
    
    
    
$('#table').on('click', '#btn1', function() {
  



  var tus = $(this).closest('tr').find('td:first').text();
  var tus1 = $(this).closest('tr').find('td:eq(5)').text();
  var tus2 = $(this).closest('tr').find('td:eq(6)').text();
  
//   alert(tus);

  $.post('edit.php',{postname:tus, dateva:tus1, timeva:tus2},function(data){
        //alert(tus);
    // window.location.replace("http://localhost/praveen/invoice23.php");

    window.location.replace("https://smartdeal.staging-rdegi.com/testing.php");

  });

});




$('#table').on('click', '#btn2', function() {
  


  var tus = $(this).closest('tr').find('td:first').text();
  var tus1 = $(this).closest('tr').find('td:eq(5)').text();
  var tus2 = $(this).closest('tr').find('td:eq(6)').text();
  var tus3 = $(this).closest('tr').find('td:eq(4)').text();
  var mobi = $(this).closest('tr').find('td:eq(2)').text();
  var mai = $(this).closest('tr').find('td:eq(3)').text();

  $.post('edit.php',{postname:tus, dateva:tus1, timeva:tus2, amounts:tus3, mobva:mobi,maiva:mai},function(data){
//alert(tus);
    window.location.replace("https://smartdeal.staging-rdegi.com/return.php");

  });


});





$('#table').on('click', '#btn3', function() {
  



var tus = $(this).closest('tr').find('td:first').text();
  var tus1 = $(this).closest('tr').find('td:eq(5)').text();
  var tus2 = $(this).closest('tr').find('td:eq(6)').text();
  
  
  
  var mobi = $(this).closest('tr').find('td:eq(2)').text();
  var mai = $(this).closest('tr').find('td:eq(3)').text();


  $.post('',{postname:tus, dateva:tus1, timeva:tus2, mobva:mobi,maiva:mai},function(data){

    window.location.replace("https://smartdeal.staging-rdegi.com/payscript1.php");

  });


});





    
    
</script>




</body>
</html>

