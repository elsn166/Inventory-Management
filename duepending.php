



<!--<h2>Supplier Credit</h2>
 <div class="card eagle-border-light">
                                <div class="card-header eagle-bg-light eagle-border-light">
                                  <!--  <div class="btn-group float-right">
                                        <a href="" class="drop-btn text-white text-center eagle-rounded-circle-50 eagle-bg-primary" data-toggle="dropdown"><small> <i class="ion ion-arrow-down-b"></i> </small></a>
                                        <div class="dropdown-menu bg-white border-0">
                                            <a class="dropdown-item" href="#"><i class="icofont icofont-ui-edit text-success pr-2"></i> Edit</a>
                                            <a class="dropdown-item" href="#"><i class="icofont icofont-close-circled text-danger pr-2"></i> Deleat</a>
                                            <a class="dropdown-item" href="#"><i class="icofont icofont-shield-alt text-warning pr-2"></i> Cancel</a>
                                        </div>
                                    </div>-->
                                  <!--  <h6 class="mb-0">Supplier Credit</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="example" class="table table-bordered w-100">
                                           <thead>
             <tr class="" style="background: azure; color: darkcyan;">
                <!--<th>Supplier</th>-->
              <!--  <th>Product</th>
                <th>Model</th>
                <th>balance</th>
                <th>Total</th>
                <th>Due Date</th>
            </tr>
        </thead>
        <tbody id='tbody'>
<?php 
//   include 'dbconfig.php';

// $date13=date('Y/m/d');
// $time1=date('h:i:sa');


// $conn = new mysqli($servername, $username, $password, $dbname);
// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }


// $sql = "SELECT * FROM stock Where bal!='0'";
// $result = $conn->query($sql);
// if ($result->num_rows > 0) {
//     // output data of each row
//     while($row = $result->fetch_assoc()) {
//         echo '<tr>
//                  <td>' . $row["mobiles"] .'</td>
//                   <td>' . $row["model"] .'</td>
//                   <td>' . $row["purchaseprice"] .'</td>
//                   <td>'.$row["bal"].'</td>
//                   <td>' . $row["due_date"] .'</td>
//                     </tr>';
//     }
// } else {
//     // echo "0 results";
// } 

// ?>


                        
        </tbody>
    </table>
</div>
</div>
</div>

<br>-->

<h2>Credit Customers</h2>
    <div class="card eagle-border-light">
                                <div class="card-header eagle-bg-light eagle-border-light">
                                  <!--  <div class="btn-group float-right">
                                        <a href="" class="drop-btn text-white text-center eagle-rounded-circle-50 eagle-bg-primary" data-toggle="dropdown"><small> <i class="ion ion-arrow-down-b"></i> </small></a>
                                        <div class="dropdown-menu bg-white border-0">
                                            <a class="dropdown-item" href="#"><i class="icofont icofont-ui-edit text-success pr-2"></i> Edit</a>
                                            <a class="dropdown-item" href="#"><i class="icofont icofont-close-circled text-danger pr-2"></i> Deleat</a>
                                            <a class="dropdown-item" href="#"><i class="icofont icofont-shield-alt text-warning pr-2"></i> Cancel</a>
                                        </div>
                                    </div>-->
                                    <h6 class="mb-0">Customer Credit</h6>
                                </div>
                               <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="example" class="table table-bordered w-100">
                                           <thead>
               <tr class="" style="background: azure; color: darkcyan;">
                <th>Name</th></th>
                <th>Mobile Number</th>
                <th>Product</th>
                <th>Pending Amount</th>
                <th>Purchase Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody id='tbody'>
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
$sql = "SELECT * FROM bill WHERE balance >=1 GROUP BY invoiceno ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo '<tr>
                  <td>' . $row["customer"] .'</td>
                  <td>' . $row["mobile"] .'</td>
                  <td>' . $row["model"] .'</td>
                  <td>' . $row["balance"] .'</td>
                  <td>' . $row["date1"] .'</td>
                  <td><a href="editduepending.php?action=edit&amp;id='.$row['invoiceno'].'"><span class="btn btn-info mx-1">Received</span></a></td>
                </tr>';
    }
} else {
    // echo "0 results";
} 

?>
        </tbody>
    </table>
</div>
</div>
</div>
