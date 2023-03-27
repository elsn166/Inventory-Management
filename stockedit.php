<?php
include 'dbconfig.php';

$date1=date('Y/m/d');
$time1=date('h:i:sa');
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$id=$_POST['invoice_no'];
$barcode=$_POST['barcode'];
//echo $id;
$sql = "SELECT * FROM stock WHERE barcode='$barcode' ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row= $result->fetch_assoc()) {
$stock=$row['stock'];
$pp=$row['purchaseprice'];
$total=$row['total'];
//echo $total ;

}}
?>
<?php
include'dbconfig.php';
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$qty=$_POST['qty'];
$total1=$_POST['total'];
$returndate=$_POST['returndate'];
$feedback=$_POST['feedback'];
$ovqty=$stock+$qty;
$tot=$pp * $qty;
$ovtot=$total+$tot;
//echo $ovtot;
//echo $ovqty;
$sql ="UPDATE stock SET stock='$ovqty', total='$ovtot', return_date='$returndate', feedback='$feedback' WHERE barcode='$barcode' ";
if ($conn->query($sql) === TRUE){
  echo "<script type='text/javascript'>window.location='return.php';</script>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
} 
$conn->close();
?>