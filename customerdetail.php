<?php

session_start();

$user = $_POST["cus_nam"];

$addre = $_POST["address"];

$mobileno=$_POST["mobileno"];

$mail=$_POST["email"]; 

$gst=$_POST["GST_NO"];

$purchase_from=$_POST["purchase_from"];







$_SESSION['user']=$user;

$_SESSION['address']=$addre;

$_SESSION['mobileno']=$mobileno;

$_SESSION['email']=$mail;

$_SESSION['GST_NO']=$gst;

$_SESSION['purchase_from']=$purchase_from;

echo $_SESSION['user'];

// header("Location: https://smartdeal.starkings.in/billingTest1.php");
// header("Location: https://www.yoursite.com/new_index.php");
header("Location:https://inventory.staging-rdegi.com/bbb.php");

?>