<?php
include'dbconfig.php';
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
$id=$_GET['id'];
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "UPDATE bill SET balance='0' WHERE invoiceno='$id'";
if ($conn->query($sql) === TRUE){
    echo "<script type='text/javascript'>window.location='duepending1.php?&success=Account Updated Successfully';</script>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}  
$id=$_GET['id'];
$sql1 = "UPDATE balance_amt SET balance='0' WHERE invoice_no='$id'";
if ($conn->query($sql1) === TRUE){
    echo "<script type='text/javascript'>window.location='duepending1.php?&success=Account Updated Successfully';</script>";
} else {
  echo "Error: " . $sql1 . "<br>" . $conn->error;
}  
$conn->close();
?>