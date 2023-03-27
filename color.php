 <?php

include'dbconfig.php';
$color=$_GET["color"];
//echo $color;
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql= "UPDATE colors SET color=$color WHERE id=1";
if ($conn->query($sql) === TRUE){
    echo "<script type='text/javascript'>window.location='dashbord.php';</script>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
} 
$conn->close();
?>
