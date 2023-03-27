<?php
session_start();

// $data = [ 
// 'user_id' => '1',
// 'payment_id' => $_POST['razorpay_payment_id'],
// 'amount' => $_POST['totalAmount'],
// 'product_id' => $_POST['product_id'],
// ];

$user_id=$_POST['id'];
$payment_id=$_POST['razorpay_payment_id'];
$amount=$_POST['totalAmount'];
$product_id=$_POST['product_id'];

// you can write your database insertation code here
// after successfully insert transaction in database, pass the response accordingly

include'dbconfig.php';
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO payment(userid,paymentid,amount,productid)
VALUES ('$user_id','$payment_id','$amount','$product_id')";

if ($conn->query($sql) === TRUE){
   // echo "<script type='text/javascript'>window.location='success.php?&success=Account Created Successfully';</script>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$arr = array('msg' => 'Payment successfully credited', 'status' => true);  
echo json_encode($arr);
?>