<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ADD Stock|Inventory</title>

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
 
        <!-- Main-Content -->
        <div class="wrapper">
          <?php require 'left-menu.php'?>
            <div id="content">
                <div class="container-fluid px-0">
                  <?php require'header.php'?>
 <div id="new">
 <div id="ffg">
<h2 class="mt-2 mx-2">Product</h2>
                     <div class="row">
                        <div class="col-12 col-sm-12">
                            <div class="card eagle-border-light">
                                <div class="card-header eagle-bg-light eagle-border-light">
                                    <div class="btn-group float-right">

      <div class="invo mx-2">
        <div class="dropdown">
            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-mdb-toggle="dropdown" aria-expanded="false">
              Stock Options
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
              <li><a class="dropdown-item" href="javascript:void(0)" id="custlist11">Due Pending</a></li>
           <!--  <li><a class="dropdown-item" href="javascript:void(0)" id="custlist2">add Stock</a></li>-->
            </ul>
        </div>
        <!-- <a href="javascript:void(0)" class="btn btn-primary shadow-sm" style="vertical-align: middle;"><i class="fas fa-user-tag mx-1"></i> Create New Invoice</a> -->
      </div>
                                        <!--<a href="" class="drop-btn text-white text-center eagle-rounded-circle-50 eagle-bg-primary" data-toggle="dropdown"><small> <i class="ion ion-arrow-down-b"></i> </small></a>
                                        <div class="dropdown-menu bg-white border-0">
                                            <a class="dropdown-item" href="#"><i class="icofont icofont-ui-edit text-success pr-2"></i> Edit</a>
                                            <a class="dropdown-item" href="#"><i class="icofont icofont-close-circled text-danger pr-2"></i> Deleat</a>
                                            <a class="dropdown-item" href="#"><i class="icofont icofont-shield-alt text-warning pr-2"></i> Cancel</a>
                                        </div>-->
                                    </div>
                                    <h6 class="mb-0">Product Data </h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="example" class="table table-bordered w-100">
                                          <thead>
             <tr class="" style="background: azure; color: darkcyan;">
                <th>Product Code</th>
                <th>Product</th></th>
                <th>Model</th>
                <th>Stock</th>
                <th>Stock value</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>

<?php 
//   include 'dbconfig.php';
// $date1=date('Y/m/d');
// $time1=date('h:i:sa');
// $conn = new mysqli($servername, $username, $password, $dbname);
// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }
// $sql1 = "SELECT mobiles FROM stock group by mobiles having count(*) >= 1";
// $result1 = $conn->query($sql1);
// if ($result1->num_rows > 0) {
//     // output data of each row
//     while($row1 = $result1->fetch_assoc()) {
// $stopro=$row1['mobiles'];
// $sql2 = "SELECT * FROM stock WHERE mobiles='$stopro' group by model having count(*) >= 1 ";
// $result2 = $conn->query($sql2);
// if ($result2->num_rows > 0) {
//     // output data of each row
//     while($row2 = $result2->fetch_assoc()) {
// $stomo=$row2['model'];
// $image=$row2['image'];
// $sql = "SELECT COUNT(*) as stockto FROM stock WHERE mobiles='$stopro' and model='$stomo' and status = 'instock';";
// $result = $conn->query($sql);
// if ($result->num_rows > 0) {
//     // output data of each row
//     while($row = $result->fetch_assoc()) {
// // echo $row["stockto"];
// //$sttoit=$row["stockto"];
// $sql3 = "SELECT SUM(total) as stopri FROM stock WHERE mobiles='$stopro' and model='$stomo' and status ='instock';";
// $result3 = $conn->query($sql3);
// if ($result3->num_rows > 0) {
//     // output data of each row
//     while($row3 = $result3->fetch_assoc()) {
// $stoppri=$row3['stopri'];
// $sql4 = "SELECT SUM(stock) as stostk FROM stock WHERE mobiles='$stopro' and model='$stomo' and status = 'instock';";
// $result4 = $conn->query($sql4);
// if ($result4->num_rows > 0) {
//     // output data of each row
//     while($row4 = $result4->fetch_assoc()) {
// $stostk=$row4['stostk'];
// }}
//     }
// } else {
//     echo "0 results";
// } 

//     }
// } else {
//     echo "0 results";
// } 

//     }
// } else {
//     echo "0 results";
// } 
// }
// }
// else {
// }
// ?>
<?php 
include 'dbconfig.php';
$date1=date('Y/m/d');
$time1=date('h:i:sa');
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql1 = "SELECT * FROM stock ";
$result1 = $conn->query($sql1);
if ($result1->num_rows > 0) {
    // output data of each row
    while($row1 = $result1->fetch_assoc()) {
        $product=$row1["mobiles"];
        $barcode=$row1["barcode"];
        $model=$row1["model"];
        $stock=$row1["stock"];
        $total=$row1["total"];
        $image=$row1['image'];
  
        echo '<tr>
                  <td scope="row">' .$barcode. '</td>
                  <td scope="row">' .$product. '</td>
                  <td scope="row">' .$model. '</td>
                  <td>' . $stock .'</td>
                  <td scope="row">' . $total. '</td>
                  <td><img src="data:image/=jpeg;base64,'.base64_encode ($image).'" width="80%" height="50" class=" mx-auto d-block" id="file-ip-4-preview" id="getImage2"/></td>
                  <td>
                  <a href="deletestock.php?action=edit&amp;id='.$row1['id'].'"><span class="btn btn-dark mx-1"><i class="fas fa-trash"></i></span></a>
                  <a href="editstock.php?action=edit&amp;id='.$row1['id'].'"><span class="btn btn-dark"><i class="fas fa-pen"></i></span></a></td>
                </tr>';

    }}
    ?>

                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
  
<!--<h2 class="mt-5 mx-2">Accessories</h2>
 <div class="card eagle-border-light">
                                <div class="card-header eagle-bg-light eagle-border-light">
                                  <!--  <div class="btn-group float-right">
                                        <a href="" class="drop-btn text-white text-center eagle-rounded-circle-50 eagle-bg-primary" data-toggle="dropdown"><small> <i class="ion ion-arrow-down-b"></i> </small></a>
                                        <div class="dropdown-menu bg-white border-0">
                                            <a class="dropdown-item" href="#"><i class="icofont icofont-ui-edit text-success pr-2"></i> Edit</a>
                                            <a class="dropdown-item" href="#"><i class="icofont icofont-close-circled text-danger pr-2"></i> Deleat</a>
                                            <a class="dropdown-item" href="#"><i class="icofont icofont-shield-alt text-warning pr-2"></i> Cancel</a>
                                        </div>
                                    </div>-->
                                  <!--  <h6 class="mb-0">Accessories Data </h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="example" class="table table-bordered w-100">
                                           <thead>
             <tr class="" style="background: azure; color: darkcyan;">
                <th>Category</th></th>
                <th>Model</th>
                <th>Stock</th>
                <th>Stock Value</th>
                    
            </tr>
        </thead>
        <tbody id='tbody'>
            

<?php 
  include 'dbconfig.php';



$date1=date('Y/m/d');
$time1=date('h:i:sa');


$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql1 = "SELECT category FROM stock1 group by category having count(*) >= 1";
$result1 = $conn->query($sql1);
if ($result1->num_rows > 0) {
    // output data of each row
    while($row1 = $result1->fetch_assoc()) {
$stopro=$row1['category'];
$sql2 = "SELECT model FROM stock1 WHERE category='$stopro' group by model having count(*) >= 1 ";
$result2 = $conn->query($sql2);
if ($result2->num_rows > 0) {
    // output data of each row
    while($row2 = $result2->fetch_assoc()) {



$stomo=$row2['model'];




$sql = "SELECT COUNT(*) as stockto FROM stock1 WHERE category='$stopro' and model='$stomo' and status = 'instock';";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {


// echo $row["stockto"];

$sttoit=$row["stockto"];


$sql3 = "SELECT SUM(total) as stopri FROM stock1 WHERE category='$stopro' and model='$stomo' and status = 'instock';";
$result3 = $conn->query($sql3);


if ($result3->num_rows > 0) {
    // output data of each row
    while($row3 = $result3->fetch_assoc()) {



$stoppri=$row3['stopri'];


        echo '<tr>
                  <td scope="row">' . $stopro. '</td>
                  <td scope="row">' . $stomo. '</td>
                  
                  <td>' . $sttoit .'</td>
                  <td scope="row">' . $stoppri. '</td>
                  
                  
                </tr>';




    }
} else {
    echo "0 results";
} 

    }
} else {
    echo "0 results";
} 

    }
} else {
    echo "0 results";
} 



}


}

else {
    
}

?>
            </tbody>
    </table>
                                    </div>
                                </div>
                            </div>
                        
                    </div> -->
    </div>
 </div>

</div>
    </div>    <!-- End Main-Content -->

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