<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Signup|Inventory</title>

        <!-- Favicon -->
       <link rel="icon" href="dist/images/Papoose_Logo4.png" type="image/x-icon">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!--Plugin CSS-->
        <link href="dist/css/plugins.css" rel="stylesheet">
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <!--main Css-->
        <link href="dist/css/main.css" rel="stylesheet">
        <style>
body {
  background-image:url("dist/images/bck1.jfif");
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>
    </head>
<body>
  <?php
if(isset($_POST['submit']))
{
$Username1=$_POST['email'];
$Password1=$_POST['password']; 
include'dbconfig.php';
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error){
  die("Connection failed: " . $conn->connect_error);
}
$sql= "SELECT * from login where username='$Username1'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
     echo '<script>alert(" User name Already Exist \n Please Enter Another Name ")</script>';
     echo "<script>window.location.assign('signup.php')</script>";
  }
 else{
$sql = "INSERT INTO login(username,password,roll) VALUES ('$Username1','$Password1','null')";
if ($conn->query($sql) === TRUE) {
     echo "<script>window.location.assign('index.php')</script>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}
}
?>

    <div class="container d-flex justify-content-center">
        <div class="card bg-light col-lg-4 col-md-4 col-12 " style="margin-top: 6em;">
            <article class="card-body mx-auto" style="min-width: 5rem;">
                <h4 class="card-title mt-3 text-center">Signup</h4>
                <p class="text-center">Get started with your free account</p>
                <form action="" method="POST" enctype="multipart/form-data">
                    <!-- form-group// -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <!-- <span class="input-group-text"> <i class="fa fa-envelope"></i> </span> -->
                        </div>
                        <input  id="email" name="email"  class="form-control " placeholder="Username" type="text" required autofocus>
                    </div> 
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <!-- <span class="input-group-text"> <i class="fa fa-lock"></i> </span> -->
                        </div>
                        <input class="form-control" name="password" id="password" placeholder="Password" type="password" required>
                    </div>
                     <!-- form-group// -->                                      
                    <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-primary btn-block"> Signup  </button>
                    </div>
                     <!-- form-group// -->      
                    <p class="text-center">Do you have an account?<a href="index.php"> Login Here</a></p>                                                           
                    <!--<p class="text-center"><a href="index.php"><i class="fas fa-long-arrow-alt-left"></i> Back to Home</a></p>  -->
                </form>
            </article>
        </div> <!-- card.// -->
    </div> 
        <!--container end.//-->
    <br><br>
          <script  src="dist/js/plugins.js"></script>
        <script src="dist/js/common.js"></script>
    </body>
</html>