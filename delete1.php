<?php
include'dbconfig.php';

$id=$_GET['id'];
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// sql to delete a record
$sql = "DELETE FROM bill where invoiceno='$id'";
if (mysqli_query($conn, $sql)) {
    echo "<script type='text/javascript'>window.location='invoice.php?&success=Account Deleted Successfully';</script>";
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}

$sql1 = "DELETE FROM balance_amt where invoice_no='$id'";
if (mysqli_query($conn, $sql1)) {
    echo "<script type='text/javascript'>window.location='invoice.php?&success=Account Deleted Successfully';</script>";
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>