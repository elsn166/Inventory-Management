<?php 
// $test = $_GET['var_PHP_data'];
include 'dbconfig.php';


// Getting values from form inputs
$invoice_id= $_POST['invoice_id'];
$date =$_POST['date'];
$balancedue =$_POST['balancedue'];
$item=$_POST['item'];
$Description=$_POST['Description'];
$Rate =$_POST['Rate'];
$Quantity =$_POST['Quantity'];
$Price= $_POST['Price'];
$Total= $_POST['Total'];
$AmountPaid =$_POST['AmountPaid'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO invoice (Invoice_id,Item,date,Description,Rate,Quantity,Price,Total,Amountpaid,Balancedue) VALUES ('$invoice_id','$item',$date','$Description','$Rate',$Quantity,'$Price','$Total,$AmountPaid,'$balancedue')";

if ($conn->query($sql) === TRUE) {
//   echo "New record created successfully";
     echo "<script>window.location.assign('supplierdetails.php')</script>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>