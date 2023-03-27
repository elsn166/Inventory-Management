<?php

$barcode=$_GET['barcode'];
$qy = $_GET['qy'];

$qy = (int)$qy;

include'dbconfig.php';

$date1=date('Y/m/d');
$time1=date('h:i:sa');

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql10 = "SELECT stock,salesprice FROM stock WHERE barcode='$barcode'";
$result4 = $conn->query($sql10);
if ($result4->num_rows > 0) {
    // output data of each row
    while($row2 = $result4->fetch_assoc()){
$st = $row2['stock'];
$st = (int)$st;


$pr = $row2['salesprice'];
$pr = (int)$pr;

$ov_pr = $qy*$pr;


if ($st<$qy){
    
echo"Produc Out of stock";
}

else{


    $sql="UPDATE newstock SET qty=$qy,total='$ov_pr' WHERE barcode='$barcode'";
if ($conn->query($sql) === TRUE){
    // echo"<script type='text/javascript'>window.location='bbb.php?&success=value updated Successfully';</script>";
    echo "Product added Successfully";
} else {
//   echo "Error: " . $sql . "<br>" . $conn->error;
}


$sql11 = "SELECT SUM(total) AS sdf FROM newstock";
$result41 = $conn->query($sql11);
if ($result41->num_rows > 0) {
    // output data of each row
    while($row41 = $result41->fetch_assoc()) {
        $grd = $row41['sdf'];
        
    }}




    $sql="UPDATE grd_total SET subtotal=$grd,grand_total=$grd";
if ($conn->query($sql) === TRUE){
    // echo"<script type='text/javascript'>window.location='bbb.php?&success=value updated Successfully';</script>";
    echo "Product added Successfully";
} else {
//   echo "Error: " . $sql . "<br>" . $conn->error;
}



}


    }
} else {
    // echo "0 results";
} 
// echo $name1;
?>