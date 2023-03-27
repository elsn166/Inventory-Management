<?php

$supplier=$_POST['supplier'];


$mobile=$_POST['mobile'];

$color=$_POST['color'];

$model=$_POST['model'];

$ram=$_POST['ram'];


$storage=$_POST['storage'];

$battery="cancelled";

$camera="cancelled";

$display="cancelled";

$expandable="cancelled";

$processor=$_POST['processor'];

$price=$_POST['price'];

$mrp=$_POST['mrp'];
$Warranty=$_POST['Warranty'];
$category=$_POST['category'];

include 'dbconfig.php';
$image= $_FILES['img']['name'];
$date1=date('Y/m/d');
$time1=date('h:i:sa');

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if($image!=""){
$image2=addslashes(file_get_contents($_FILES['img']['tmp_name']));
$sql = "INSERT INTO smart_deal1 (mobiles,color,model,ram,storage,battery,camera,display,expandable,processor,price,mrp,Warranty,category,dummy2,dummy3,supplier,image) 
VALUES ('$mobile','$color','$model','$ram','$storage','$battery','$camera','$display','$expandable','$processor','$price','$mrp','$Warranty','$category','','','$supplier','$image2')";
}else{
   $sql = "INSERT INTO smart_deal1 (mobiles,color,model,ram,storage,battery,camera,display,expandable,processor,price,mrp,Warranty,category,dummy2,dummy3,supplier) 
VALUES ('$mobile','$color','$model','$ram','$storage','$battery','$camera','$display','$expandable','$processor','$price','$mrp','$Warranty','$category','','','$supplier')";
}
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


header("Location: https://inventory.staging-rdegi.com/productnew.php");
  


?>














