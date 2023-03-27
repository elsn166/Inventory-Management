<?php

$barcode=$_POST['barcode'];
$salesprice=$_POST['sp'];
$supplier=$_POST['supplier'];
$mobile=$_POST['mobiles'];

$color=$_POST['color'];

$model=$_POST['model'];

$stock=$_POST['stock'];

$ram=$_POST['ram'];

$storage=$_POST['storage'];

//$img=$_POST['img'];

$battery="cancelled";

$camera="cancelled";

$display="cancelled";

$processor="cancelled";


$expandable=$_POST['expandable'];



$Warranty=$_POST['Warranty'];

$purchaseprice=$_POST['purchaseprice'];

$mrp=$_POST['mrp'];

$total=$_POST['total'];


$date=$_POST['date'];


$paid=$_POST['paid'];

$bal=$_POST['bal'];


$ime=$_POST['ime'];
$category=$_POST['category'];

//echo $date;

// echo $customer;
// echo $gst;
include 'dbconfig.php';
$image = $_FILES['img']['name'];
$date1=date('Y/m/d');
$time1=date('h:i:sa');
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql1= "SELECT * from stock WHERE barcode='$barcode'";
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
     echo '<script>alert("Product Code Already Exist \n Please Enter Another Code")</script>';
     echo "<script>window.location.assign('add_stock2.php')</script>";
  }
else if($image!=""){
    $image2=addslashes(file_get_contents($_FILES['img']['tmp_name']));
$sql = "INSERT INTO stock (mobiles,color,model,stock,date1,time1,ram,storage,battery,camera,display,expandable,processor,Warranty,purchaseprice,mrp,total,supplier,due_date,paid,bal,barcode,salesprice,status,ime,category,image) 
VALUES ('$mobile','$color','$model','$stock','$date1','$time1','$ram','$storage','$battery','$camera','$display','$expandable','$processor','$Warranty','$purchaseprice','$mrp','$total','$supplier','$date','$paid','$bal','$barcode','$salesprice','instock','$ime','$category','$image2')";
}else{
    //$image2=addslashes(file_get_contents($_FILES['img']['tmp_name']));
$sql = "INSERT INTO stock (mobiles,color,model,stock,date1,time1,ram,storage,battery,camera,display,expandable,processor,Warranty,purchaseprice,mrp,total,supplier,due_date,paid,bal,barcode,salesprice,status,ime,category) 
VALUES ('$mobile','$color','$model','$stock','$date1','$time1','$ram','$storage','$battery','$camera','$display','$expandable','$processor','$Warranty','$purchaseprice','$mrp','$total','$supplier','$date','$paid','$bal','$barcode','$salesprice','instock','$ime','$category')";
}
if ($conn->query($sql) === TRUE) {
  echo "<script>window.location.assign('add_stock.php')</script>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
//echo ("Location: https://papoosekart.staging-rdegi.com/add_stock.php");
?>