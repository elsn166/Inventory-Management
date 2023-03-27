<?php
include'dbconfig.php';
$date1=date('Y/m/d');
$time1=date('h:i:sa');

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}




$test = $_GET['var_PHP_data'];
$test2 = $_GET['cun'];

$test3=(int)$test;

$yth=1000;


$gb=$test*$yth;



$sql1 = "UPDATE creditpoint  SET point=point-'$test3', total=total-'$gb' WHERE customer='$test2' ";

if ($conn->query($sql1) === TRUE) {
//   echo "New record Updated successfully";
} else {
//   echo "Error: " . $sql . "<br>" . $conn->error;
}






// echo $test2;

echo $gb;

?>