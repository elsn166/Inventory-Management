    <?php 
include 'dbconfig.php';
$test=$_GET['var_PHP_data'];

$date1=date('Y/m/d');
$time1=date('h:i:sa');

date_default_timezone_set('Asia/Kolkata');
$todate = date('y-m-d');
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM bill WHERE date1='$todate' AND customer='$test' ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo '<tr>
                  <td scope="row">' . $row["customer"]. '</td>
                  <td>' . $row["mobiles"] .'</td>
                  <td>' . $row["mobile"] .'</td>
                  <td>' . $row["email"] .'</td>
                  <td>' . $row["gtotal"] .'</td>
                  <td><button id="btn1" class="btn1" style="background: white;color: black;border-radius: 8px;"><i class="fa fa-print"></i></button>
                  <button id="btn3" class="btn3" style="background: white;color: black;border-radius: 8px;"><i class="fa fa-bars"></i></button>
                  <a href="delete.php?action=edit&amp;id='.$row['id'].'"><span class="btn btn-dark mx-1"><i class="fas fa-trash"></i></span></a>
                  <a href="edit1.php?action=edit&amp;id='.$row['id'].'"><span class="btn btn-dark"><i class="fas fa-pen"></i></span></a></td>
                    </tr>';
    }
} else {
      // echo "No Data Found";
} 
?>
<?php 
include 'dbconfig.php';
$test=$_GET['var_PHP_data'];
$date13=date('Y/m/d');
$time1=date('h:i:sa');
date_default_timezone_set('Asia/Kolkata');
$todate1 = date('y-m-d');
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM bill1 WHERE date1='$todate1' AND customer='$test' ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

        echo '<tr>
                  <td scope="row">' . $row["customer"]. '</td>
                  <td>' . $row["mobiles"] .'</td>
                  <td>' . $row["mobile"] .'</td>
                  <td>' . $row["email"] .'</td>
                  <td>' . $row["gtotal"] .'</td>
                  <td><button id="btn1" class="btn1" style="background: white;color: black;border-radius: 8px;"><i class="fa fa-print"></i></button>
                  <button id="btn3" class="btn3" style="background: white;color: black;border-radius: 8px;"><i class="fa fa-bars"></i></button>
                  <a href="delete.php?action=edit&amp;id='.$row['id'].'"><span class="btn btn-dark mx-1"><i class="fas fa-trash"></i></span></a>
                  <a href="edit1.php?action=edit&amp;id='.$row['id'].'"><span class="btn btn-dark"><i class="fas fa-pen"></i></span></a></td>
                    </tr>';

    }
} else {
      // echo "No Data Found";
} 

?>

