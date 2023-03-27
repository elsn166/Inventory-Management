<?php
include'dbconfig.php';

$id=$_GET['id'];
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

//



$sql11 = "SELECT total FROM newstock WHERE id='$id' ";
$result41 = $conn->query($sql11);
if ($result41->num_rows > 0) {
    // output data of each row
    while($row41 = $result41->fetch_assoc()) {
        $tt = $row41['total'];
        $tt = (int)$tt;
    }}

   $sql="UPDATE grd_total SET subtotal=subtotal-$tt, grand_total=grand_total-$tt  ";
if ($conn->query($sql) === TRUE){
    // echo"<script type='text/javascript'>window.location='bbb.php?&success=value updated Successfully';</script>";
    // echo "Product added Successfully";
} else {
//   echo "Error: " . $sql . "<br>" . $conn->error;
}




// sql to delete a record
$sql = "DELETE FROM newstock where id='$id'";
if (mysqli_query($conn, $sql)) {
    echo "<script type='text/javascript'>window.location='bbb.php?&success=Row Deleted Successfully';</script>";
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>