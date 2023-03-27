<?php
include'dbconfig.php';

$in=$_GET['in'];
$id=$_GET['id'];
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
// sql to delete a record
$sql = "SELECT * from bill where id='$id' ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  $counter = 0;
  while ($row1 = $result->fetch_assoc()) {
   $oldtot=$row1['total'];
   $oldgtot=$row1['gtotal'];
//   echo $oldtot;
//   echo $oldgtot;
   $newtot=$oldgtot-$oldtot;
//echo $newtot;
  }}
    // echo $newtot;
    //echo $in;
    //echo $newtot;
$sql2 = "UPDATE bill SET paid='$newtot' WHERE invoiceno='$in' ";
if ($conn->query($sql2) === TRUE){
   // echo "<script type='text/javascript'>window.location='image_upload.php?&success=Account Deleted Successfully';</script>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
  
$sql = "DELETE FROM bill where id='$id'";
if (mysqli_query($conn, $sql)) {
  echo "<script type='text/javascript'>window.location='invoice.php?&success=Account Deleted Successfully';</script>";
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>