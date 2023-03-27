<?php 
include 'dbconfig.php';
$test=$_GET['var_PHP_data'];
$date13=date('Y/m/d');
$time1=date('h:i:sa');
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM bill GROUP BY invoiceno";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    $customer=$row["customer"];
    $invoicenumber=$row["invoiceno"];
    $mobiles=$row["mobiles"];
    $mobile= $row["mobile"];
    $purchase_from=$row["purchase_from"]; 
    $paid=$row["paid"];
    $date1= $row["date1"];
    $time1=$row["time1"];
    $id=$row["id"];
$array = array("cutomer"=>"$customer","invoicenumber"=>"$invoicenumber","mobiles"=>"$mobiles","mobile"=>"$mobile","purchase_from"=>"$purchase_from","paid"=>"$paid","date1"=>"$date1","time"=>"$time1","id"=>"$id" );
// print_r(array_values($array));
foreach($array as $customer=>$invoicenumber) {
  echo "customer=".$customer.",invoicenumber=".$invoicenumber;
  echo "<br>";
}
    }
} else {
    // echo "0 results";
} 

?>
<?php
// include 'dbconfig.php';

// $mysqli = new mysqli($servername, $username, $password, $dbname);

// if ($mysqli -> connect_errno) {
//   echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
//   exit();
// }

// $sql = "SELECT * FROM bill GROUP BY invoiceno";

// if ($result = $mysqli -> query($sql)) {
//   // Get field information for all fields
//   while ($fieldinfo = $result -> fetch_field()) {
//     printf("Name: %s\n", $fieldinfo -> name)<"br>";
//     printf("Table: %s\n", $fieldinfo -> table)<"br>";
//     printf("Max. Len: %d\n", $fieldinfo -> max_length)<"br>";
//   }
//   $result -> free_result();
// }

// $mysqli -> close();
?>
