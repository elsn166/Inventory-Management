<?php
    session_start();
?>


<?php
    $arun = $_POST['postname'];
    $mobile = $_POST['mobile'];
    $arun1 = $_POST['dateva'];
    $barcode= $_POST['barcode'];
    $arun3 = $_POST['mobva'];
    $arun4 = $_POST['maiva'];
    $arun5 = $_POST['amounts'];
    $amt1 = $_POST['amt'];
    $id = $_POST['id'];
    
    $_SESSION["user"] = $arun;
    $_SESSION["mobile"] = $mobile;
    $_SESSION["date11"] = $arun1;
    $_SESSION["barcode"] = $barcode;
    $_SESSION["mobb"]=$arun3;
    $_SESSION["mai"]=$arun4;
    $_SESSION["amounts"]=$arun5;
    $_SESSION["gtotal"]=$amt1;
    $_SESSION["ids"]=$id;

    echo $_SESSION["user"];
    echo $_SESSION["date11"];
    echo $_SESSION["barcode"];
    echo $_SESSION["ids"];
//    $amt2=$_SESSION["user"];

   //echo "<script>alert ('$id1'); </script>";
?>