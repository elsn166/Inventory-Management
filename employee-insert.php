<?php
include 'dbconfig.php';
// Create connection
$cusName = $_POST['cus_name'];
$cusNo = $_POST['cus_no'];
$cusEmail = $_POST['cus_email'];
$cusPassword = $_POST['cus_password'];
$cusAddress= $_POST['cus_address'];
$cusRole= $_POST['role'];

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql1 = "SELECT * from emp_details WHERE cus_email='$cusEmail'";
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
    echo '<script>alert(" User name Already Exist \n Please Enter Another Name ")</script>';
     echo "<script>window.location.assign('view_employee.php')</script>";
  }
 else{
$sql = "INSERT INTO emp_details (cus_name, cus_no, cus_email, cus_password, cus_address, cus_role) VALUES ( '$cusName', '$cusNo', '$cusEmail', '$cusPassword', '$cusAddress', '$cusRole')";
if ($conn->query($sql) === TRUE) {
     echo "<script>window.location.assign('employee.php')</script>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
  
      
  }
  ?>
