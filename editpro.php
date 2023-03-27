<?php
if(isset($_POST['submit1']))
{
include'dbconfig.php';
                $id=$_POST["id"];
                $mobile=$_POST["mobile"];
                $supplier=$_POST["supplier"]; 
                $price=$_POST["price"];
                $MRP=$_POST["mrp"];
                $Warranty=$_POST["Warranty"]; 
                $Category=$_POST["category"]; 
                $model=$_POST["model"]; 
                $color=$_POST["color"]; 
                $ram=$_POST["ram"]; 
                $storage=$_POST["storage"]; 
                $processor=$_POST["processor"];  
                $image = $_FILES['img']['name'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}if($image!=""){
     $image=addslashes(file_get_contents($_FILES['img']['tmp_name']));
 $sql1="UPDATE smart_deal1 SET mobiles='$mobile',supplier='$supplier',price='$price',mrp='$MRP',Warranty='$Warranty',Category='$Category',model='$model',color='$color',ram='$ram',storage='$storage',processor='$processor' ,image='$image' WHERE id='$id'";
}else{
// $image=addslashes(file_get_contents($_FILES['img']['tmp_name']));
 $sql1="UPDATE smart_deal1 SET mobiles='$mobile',supplier='$supplier',price='$price',mrp='$MRP',Warranty='$Warranty',Category='$Category',model='$model',color='$color',ram='$ram',storage='$storage',processor='$processor'  WHERE id='$id'";
}

  if ($conn->query($sql1) === TRUE){
      echo "<script type='text/javascript'>window.location='productnew.php?&success=Account update Successfully';</script>";
      //echo "<script type='text/javascript'>window.location='employee.php?&success=Account Deleted Successfully';</script>";
  } else {
    echo "Error: " . $sql1 . "<br>" . $conn->error;
  }} 
?>
<?php
if(isset($_POST['submit2']))
{
include 'dbconfig.php';

$id=$_POST['id'];
$in=$_POST['in'];
$barcode=$_POST['barcode'];
$customer=$_POST['customer'];
$address=$_POST['address'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$mobiles=$_POST['mobiles'];
$color=$_POST['color'];
$model=$_POST['model'];
//$ram=$_POST['ram'];
//$storage=$_POST['storage'];
$battery=$_POST['battery'];
$camera=$_POST['camera'];
$display=$_POST['display'];
$expandable=$_POST['expandable'];
$Category=$_POST['category'];
$processor=$_POST['processor'];
$price=$_POST['price'];
$mrp=$_POST['mrp'];
$Warranty=$_POST['Warranty'];
$date1=date('Y/m/d');
date_default_timezone_set('Asia/Kolkata');
$time1 = date( ' h:i A', time () );
$qty=$_POST['qty'];
$total=$_POST['total'];
$discount=$_POST['discount'];
$gtotal=$_POST['gtotal'];
//$ime=$_POST['ime'];
$billing_person=$_POST['billing_person'];
$paid=$_POST['paid'];
$balance=$_POST['balance'];



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$sql11 = "SELECT * from bill WHERE id='$id'";
$result11 = $conn->query($sql11);
if ($result11->num_rows > 0) {
  $counter = 0;
  while ($row1 = $result11->fetch_assoc()) {
  $oldqty=$row1["qty"];
$newqty=$oldqty-$qty;
$newprice=$newqty*$price;
$paidnew=$paid-$newprice;
//echo $paidnew;
}
}
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql2 = "UPDATE bill SET barcode='$barcode',category='$Category',mobiles='$mobiles',color='$color',model='$model',Warranty='$Warranty',price='$price',mrp='$mrp',qty='$qty',total='$total',barcode='$barcode' WHERE id='$id'";
if ($conn->query($sql2) === TRUE){
  //  echo "<script>alert('testing');</script>";
 echo "<script type='text/javascript'>window.location='invoice.php?&success=Account update Successfully';</script>";

} else {
  echo "Error: " . $sql2. "<br>" . $conn->error;
}  //if(move_uploaded_file($_FILES['fifth_name']['tmp_name'], $image_Path4))
$sql3 = "UPDATE bill SET paid='$paidnew',discount='$discount',balance='$balance',gtotal='$gtotal' WHERE invoiceno='$in'";
if ($conn->query($sql3) === TRUE){
  //  echo "<script>alert('testing');</script>";
 echo "<script type='text/javascript'>window.location='invoice.php?&success=Account update Successfully';</script>";
} else {
  echo "Error: " . $sql3. "<br>" . $conn->error;
}

$sql = "SELECT * FROM stock WHERE barcode='$barcode'    ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $stock1=$row["stock"];
        $purchaseprice=$row["purchaseprice"];
        $total=$row["total"];
    }
} else {
    
} 
// $stock=$stock1 - $qty;
// $pprice=$purchaseprice * $qty;
// $total1=$total - $pprice;
// // $minu=$hu1-(int)$qty;

// // echo $minu;
// // echo "<br>";
// // echo $color;
// $sql1 = "UPDATE stock SET stock='$stock',total='$total1' WHERE barcode='$barcode' ";
// if ($conn->query($sql1) === TRUE) {
//   echo "New record Updated successfully";

// } else {
//   echo "Error: " . $sql . "<br>" . $conn->error;
// }
$conn->close();
} 

?>