

<?php
session_start();
?>


<?php


global $barcode;
global $mobiles;
global $color;
global $model;
global $ram;
global $storage;
global $battery;
global $camera;
global $display;
global $expandable;
global $category;
global $processor;
global $price;
global $mrp;
global $Warranty;
global $ime;
global $paid;
global $balance;

$_POST['user']=$_SESSION["user"];


$user=$_POST['user'];




$_POST['billperson']=$_SESSION["cus_email"];


$billperson=$_POST['billperson'];













$_POST['address']=$_SESSION["address"];


$address=$_POST['address'];



$_POST['email']=$_SESSION["email"];


$email=$_POST['email'];


$_POST['mobileno']=$_SESSION["mobileno"];


$mobileno=$_POST['mobileno'];


$_POST['purchase_from']=$_SESSION["purchase_from"];


$purchase_from=$_POST['purchase_from'];



// echo '<pre>'; 
// print_r($_POST); 
// echo "</pre>"; 
 $test = $_GET['var_PHP_data'];
include 'dbconfig.php';
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
foreach($_POST['testname'] as $key => $value) {
$barcode = $value;
$testqty=$_POST['testqty'][$key];
$testprice =$_POST['testprice'][$key];
$testtotal=$_POST['testtotal'][$key];
$product=$_POST['product'][$key];
$category=$_POST['category'][$key];
$model=$_POST['model'][$key];
$color=$_POST['color'][$key];
$testgtotal=$_POST['testgtotal'];
$testsub=$_POST['sub_total'];
$testdis=$_POST['testdis'];
$balance=$_POST['balance'];
$paid=$_POST['paid'];
$date1=date('Y/m/d');
$time1=date('h:i:sa');
$testinvoice=$_POST['invoicenumber1'];



	    // insert invoice items into database
		$sql= "INSERT INTO bill (
				barcode,
				color,
				model,
				Category,
				price,
				date1,
				time1,
				qty,
				total,
				discount,
				gtotal,
				paid,
				balance,
				invoiceno,
				mobiles,
				subtotal,
				customer,
				address,
				mobile,
				purchase_from,
				email
			) VALUES (
				'".$barcode."',
				'".$color."',
				'".$model."',
				'".$category."',
				'".$testprice."',
				'".$date1."',
				'".$time1."',
				'".$testqty."',
				'".$testtotal."',
				'".$testdis."',
				'".$testgtotal."',
				'".$paid."',
				'".$balance."',
				'".$testinvoice."',
				'".$product."',
				'".$testsub."',
				'".$user."',
				'".$address."',
				'".$mobileno."',
				'".$purchase_from."',
				'".$email."'
			);
		";
//echo $barcode;
if ($conn->query($sql) === TRUE) {
//   echo "New record created successfully";
//   echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}
foreach($_POST['testname'] as $key => $value) {
$barcode1 = $value;
echo $barcode1;
$testqty1=$_POST['testqty'][$key];
$sql= "SELECT * FROM stock WHERE barcode='$barcode1'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $stock1=$row["stock"];
        $purchaseprice=$row["purchaseprice"];
        $total=$row["total"]; 
// echo "stock= $stock1 </br>";
// echo "ppprice= $purchaseprice </br>";  
// echo "total= $total </br>"; 
    }
$stock=$stock1 - $testqty1;
$pprice=$purchaseprice * $testqty1;
$total1=$total - $pprice;
$sql1 ="UPDATE stock SET stock='$stock',total='$total1' WHERE barcode='$barcode1' ";
if ($conn->query($sql1) === TRUE) {
//   echo "New record Updated successfully";

} else {
  echo "Error: " . $sql1 . "<br>" . $conn->error;
}
}else {
    
} 
//echo $barcode1;
}

echo $gtotal;

$yut=(int)$gtotal;


if ($yut>=2000){
    
    
    $yts=$yut/2000;
    
    echo round($yts);

$poi=round($yts);

$ami=1000;

$tt=$poi*$ami;



$sql4 = "SELECT customer FROM creditpoint WHERE customer='$user'";
$result4 = $conn->query($sql4);



if ($result4->num_rows != 0) {
    // output data of each row
    while($row4 = $result4->fetch_assoc()) {


    $sql = "UPDATE creditpoint SET point=point+'$poi',total=total+'$tt',date1='$date1' WHERE customer='$user'"; 
if ($conn->query($sql) === TRUE) {
  echo "user already exists!";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


    }
} else {
    
    $sql = "INSERT INTO creditpoint (customer,point,amount,total,date1,mobile) 
VALUES ('$user','$poi','$ami','$tt','$date1','$mobileno')";

if ($conn->query($sql) === TRUE) {
//  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


    
} 






























    
    
}


$sql6 = "INSERT INTO balance_amt (invoice_no,gtotal,balance,date1) 
VALUES ('$testinvoice','$testgtotal','$balance','$date1')";

if ($conn->query($sql6) === TRUE) {
//  echo "New record created successfully";
} else {
  echo "Error: " . $sql6 . "<br>" . $conn->error;
}

include 'dbconfig.php';
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "TRUNCATE TABLE newstock";
if ($conn->query($sql) === TRUE){
    // echo "<script type='text/javascript'>window.location='testimg.php?&success=Account Created Successfully';</script>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
// $conn->close();

  $sql8="UPDATE grd_total SET subtotal=0,grand_total=0";
if ($conn->query($sql8) === TRUE){
    echo"<script type='text/javascript'>window.location='invoice.php?&success=value updated Successfully';</script>";
    // echo "Product added Successfully";
} else {
//   echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
 

// header("Location: https://snowaqua.starkings.in/mt5/software/main.php");
// header("Location: https://inventory.staging-rdegi.com/invoice.php");

// echo "<script>window.locaion.replace('invoice.php');</script>";
?>





