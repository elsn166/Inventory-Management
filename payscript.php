<?php

session_start();
   
?>
<?php
$_POST['gtotal']=$_SESSION["gtotal"];
$amt=$_POST['gtotal'];
$_POST['barcode']=$_SESSION["barcode"];
$barcode=$_POST['barcode'];

// echo "<script>alert ('$amt'); </script>";
?>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script>
var totalAmount="<?php echo $_SESSION['gtotal'];?>"
//alert(totalAmount);
var product_id ="<?php echo $_SESSION['barcode'];?>"
var options ={
"key": "rzp_live_foH67t7uAhGtuM",
"amount": totalAmount*100, // 2000 paise = INR 20
"name": "papoosekart Site",
"description": "papoosekart Payment!",
"image":"dist/images/Papoose_Logo3.png",
"handler": function (response){
$.ajax({
url: 'payment_success.php',
type: 'post',
dataType: 'json',
data:{
razorpay_payment_id:response.razorpay_payment_id ,totalAmount:totalAmount,product_id:product_id,
},
success:function (msg){
   window.location.replace("https://inventory.papoosekart.com/success.php");
}
});
},
"theme": {
"color": "#528FF0"
}
};
var rzp1 = new Razorpay(options);
rzp1.open();
e.preventDefault();
</script>

