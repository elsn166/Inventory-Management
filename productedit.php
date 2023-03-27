<?php
  if(isset($_POST['submit']))
  {
include 'dbconfig.php';
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
                $id=$_GET['id'];
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
  $sql = "UPDATE smart_deal1 SET mobiles='$mobile',supplier='$supplier',price='$price',mrp='$MRP',Warranty='$Warranty',Category='$Category',model='$model',color='$color',ram='$ram',storage='$storage',processor='$processor' WHERE id='' ";
  if ($conn->query($sql) === TRUE){
      echo "<script type='text/javascript'>window.location='productnew.php?&success=Account updated Successfully';</script>";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  } 
}
  ?>