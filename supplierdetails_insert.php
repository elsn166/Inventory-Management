<?php 
// $test = $_GET['var_PHP_data'];
include 'dbconfig.php';


// Getting values from form inputs
$SupplierName= $_POST['supplier_name'];
$SupplierNo = $_POST['supplier_no'];
$SupplierEmail = $_POST['supplier_email'];
$SupplierAddress= $_POST['supplier_address'];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO supplier_details (supplier_name, supplier_no, supplier_email, supplier_address) VALUES ( '$SupplierName', '$SupplierNo', '$SupplierEmail', '$SupplierAddress')";

if ($conn->query($sql) === TRUE) {
//   echo "New record created successfully";
     echo "<script>window.location.assign('supplierdetails.php')</script>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>