<?php




$category=$_POST['category'];

$model=$_POST['model'];

$ProductCode=$_POST['ProductCode'];


$price=$_POST['price'];

$mrp=$_POST['mrp'];
$Warranty=$_POST['Warranty'];

include 'dbconfig.php';

$date1=date('Y/m/d');
$time1=date('h:i:sa');

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO category (category,model,ProductCode,price,mrp,Warranty) 
VALUES ('$category','$model','$ProductCode','$price','$mrp','$Warranty')";
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
header("Location:https://inventory.staging-rdegi.com/product.php");
  


?>














