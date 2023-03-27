<?php

$namel=$_GET['renu11'];

include'dbconfig.php';


$date1=date('Y/m/d');
$time1=date('h:i:sa');

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}




$sql10 = "SELECT * FROM stock WHERE barcode ='$namel'";



$result4 = $conn->query($sql10);



if ($result4->num_rows > 0) {
    // output data of each row
    while($row4 = $result4->fetch_assoc()) {


echo $row4['mobiles'];

       


    }
} else {
    // echo "0 results";
} 





?>