<?php

$barcode=$_GET['bar1'];

include'dbconfig.php';
// $date1=date('Y/m/d');
// $time1=date('h:i:sa');
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql10 = "SELECT * FROM stock WHERE barcode='$barcode'";
$result4 = $conn->query($sql10);
if ($result4->num_rows > 0) {
    // output data of each row
    while($row4 = $result4->fetch_assoc()) {
$product= $row4['mobiles'];
$color=   $row4['color'];
$model=   $row4['model'];
$category=$row4['Category'];
$barcode1=$row4['barcode'];
$id=      $row4['id'];
$stock=   $row4['stock'];
$pprice=  $row4['purchaseprice'];
$sprice=  $row4['salesprice'];
//echo $product;
$sd = (int)$stock;
$pr = (int)$sprice;


 if ($sd>0){
    //  $r = gettype($stock);
     
$sql = "INSERT INTO newstock (old_id,product,color,model,Category,barcode,stock,purchaseprice,salesprice,qty,total)
VALUES ('$id','$product','$color','$model','$category','$barcode','$stock','$pprice','$sprice',1,'$pr')";

if ($conn->query($sql) === TRUE){
    // echo"<script type='text/javascript'>window.location='bbb.php?&success=value updated Successfully';</script>";

    
$sql11 = "SELECT SUM(total) AS sdf FROM newstock";
$result41 = $conn->query($sql11);
if ($result41->num_rows > 0) {
    // output data of each row
    while($row41 = $result41->fetch_assoc()) {
        $grd = $row41['sdf'];
        
    }}

$sql = "UPDATE grd_total SET subtotal=$grd, grand_total=$grd";

// $sql = "INSERT INTO grd_total (subtotal,discount,grand_total)
// VALUES ($grd,0,$grd)";

if ($conn->query($sql) === TRUE){
    echo"<script type='text/javascript'>window.location='bbb.php?&success=value updated Successfully';</script>";
} else {
//   echo "Error: " . $sql . "<br>" . $conn->error;
}



    
    
    
    
    
} else {
//   echo "Error: " . $sql . "<br>" . $conn->error;
}


 }
else{
    
    echo "Product Out of Stock";
}


    }
} else {
    // echo "0 results";
}

//update grd_total



// echo $name1;
?>

