
  <?php
include'dbconfig.php';
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * from colors ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {

  $counter = 0;
  while ($row1 = $result->fetch_assoc()) {
   $color=$row1['color'];
  }}
  ?>
  <style>
 @media only screen and (min-width:600px){
   .hide1{
   display:none;
  }
}
  </style>
       <nav id="sidebar" class="bg-white">
                <div class="sidebar-scrollarea">
                    <ul class="metismenu  list-unstyled mb-0" id="menu">
                        <li><a href="dashbord.php" class="navbar-brand site-logo bg-white "><img src="dist/images/rdegi.jpg" alt=""  width="300px" height="10px" class="img-fluid" /></a></li>
                        <li class="active"><a class="active" href="dashbord.php"><i class="fa fa-dashboard    pr-1"></i> Dashboard</a></li>
                        <li class="active"><a class="active" href="invoice.php"><i class="fas fa-user-tag    pr-1"></i> Invoice</a></li>
                        <li class="active"><a class="active" href="report.php"><i class="fas fa-scroll      pr-1"></i> Reports</a></li>
                        <li class="active"><a class="active" href="add_stock.php"><i class="fas fa-plus-circle pr-1"></i> Add Stock</a></li>
                        <li class="active"><a class="active" href="productnew.php"><i class="fas fa-boxes       pr-1"></i> Products</a></li>
                        <li class="active"><a class="active" href=""data-toggle="modal" data-target="#demoModal"><i class="fas fa-boxes pr-1"></i>Return Products</a></li>
                        <li class="active hide1"><a class="active " href="index.php"><i class="fa fa-dashboard    pr-1"></i>Logout</a></li>
                       <!-- <li class="active"><a class="active" href="employee.php"><i class="fas fa-address-card pr-1"></i> Employees</a></li>
                        <li class="active"><a class="active" href="credit_point.php"><i class="fas fa-receipt pr-1"></i> Credit Point</a></li>
                       <!-- <li class="active"><a class="active" href="supplierdetails.php"><i class="fas fa-receipt pr-1"></i> Supplier Details</a></li>-->
                      <!--  <li class="active"><a class="active" href="viewproductdetails.php"><i class="fas fa-receipt pr-1"></i>  Return Product Details</a></li>-->
                    
                      <!--  <li>
                            <a class="has-arrow" href="#" data-toggle="collapse" aria-expanded="false"><i class="fa fa-shopping-cart pr-1"></i> eCommerce</a>
                            <ul class="collapse list-unstyled">
                                <li><a href="product.html">Product List</a></li>
                                <li><a href="order-view.html">Order View</a></li>
                                <li><a href="order.html">Order</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="#" data-toggle="collapse" aria-expanded="false"><i class="fa fa-envelope pr-1"></i> Mailbox</a>
                            <ul class="collapse list-unstyled">
                                <li><a href="inbox.html">Inbox</a></li>
                                <li><a href="mail-details.html">Mail Email</a></li>
                                <li><a href="mail-compass.html">Mail Compose</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="#" data-toggle="collapse" aria-expanded="false"><i class="fa fa-bar-chart pr-1"></i> Chart</a>
                            <ul class="collapse list-unstyled">
                                <li><a href="morris.html">Morris</a></li>
                                <li><a href="c3.html">C3</a></li>
                                <li><a href="chart.html">Chart</a></li>
                            </ul>
                        </li>
                        <li>
                            <a  class="has-arrow" href="#" data-toggle="collapse" aria-expanded="false"><i class="fa fa-pencil pr-1"></i> Form </a>
                            <ul class="collapse list-unstyled">
                                <li><a href="file-dropzone.html">File Dropzone</a></li>
                                <li><a href="form-advance.html">Form Advance</a></li>
                                <li><a href="form-basic.html">Form Basic</a></li>
                                <li><a href="form-text-editor.html">Form Text Editor</a></li>
                                <li><a href="form-validate.html">Form Validate</a></li>
                                <li><a href="form-wizard.html">Form Wizard</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="#" data-toggle="collapse" aria-expanded="false"><i class="fa fa-desktop pr-1"></i> Other Pages</a>
                            <ul class="collapse list-unstyled">
                                <li><a href="lockscreen.html">Lockscreen</a></li>
                                <li><a href="login.html">login</a></li>
                                <li><a href="register.html">Register</a></li>
                                <li><a href="404.html">404 Page</a></li>
                                <li><a href="blank.html">Blank Page</a></li>
                                <li><a href="gallery.html">Gallery</a></li>
                                <li><a href="pricing.html">Pricing</a></li>
                                <li><a href="contact-us.html">Contact us</a></li>
                            </ul>
                        </li>
                        <li><a href="icons.html"><i class="fa fa-database pr-1"></i> Icons</a></li>
                        <li>
                            <a class="has-arrow" href="#" data-toggle="collapse" aria-expanded="false"><i class="fa fa-tag pr-1"></i> UI Elements</a>
                            <ul class="collapse list-unstyled">
                                <li><a href="typography.html">Typography</a></li>
                                <li><a href="buttons.html">Buttons</a></li>
                                <li><a href="chat.html">Chat</a></li>
                                <li><a href="alert.html">Alert</a></li>
                                <li><a href="toastr-alert.html">Toastr Alert</a></li>
                                <li><a href="models.html">Models</a></li>
                                <li><a href="accordian.html">Accordian</a></li>
                                <li><a href="sweet-alerts.html">Sweet Alert</a></li>
                                <li><a href="range-slider.html">Range Slider</a></li>
                                <li><a href="progress-bar.html">Progress Bar</a></li>
                                <li><a href="timeline.html">Timeline</a></li>
                                <li><a href="tree-view.html">Tree View</a></li>
                                <li><a href="tabs.html">Tabs</a></li>
                                <li><a href="video.html">Video</a></li>
                            </ul>
                        </li>
                        <li><a href="grid-options.html"><i class="fa fa-th pr-1"></i> Grid options</a></li>
                        <li>
                            <a class="has-arrow" href="#" data-toggle="collapse" aria-expanded="false"><i class="fa fa-table pr-1"></i> Tables</a>
                            <ul class="collapse list-unstyled">
                                <li><a href="data-table.html">Data Table</a></li>
                                <li><a href="table-basic.html">Basic Table</a></li>
                                <li><a href="table-editable.html">Table Editable</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="#" data-toggle="collapse" aria-expanded="false"><i class="fa fa-user pr-1"></i> User Profile</a>
                            <ul class="collapse list-unstyled">
                                <li><a href="user-list.html">User List</a></li>
                                <li><a href="user-profile.html">User Profile</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="#" data-toggle="collapse" aria-expanded="false"><i class="fa fa-map pr-1"></i> Map</a>
                            <ul class="collapse list-unstyled">
                                <li><a href="google-map.html">Google Map</a></li>
                                <li><a href="vector-map.html">Vector Map</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="#" data-toggle="collapse" aria-expanded="false"><i class="fa fa-magic pr-1"></i> Blog</a>
                            <ul class="collapse list-unstyled">
                                <li><a href="blog-list.html">Blog List</a></li>
                                <li><a href="blog-post.html">Blog Post</a></li>
                            </ul>
                        </li>
                        <li><a href="calendar.html"><i class="fa fa-calendar pr-1"></i> Calendar</a></li>-->    
                                    <?php
if(isset($_POST['color']))
{
include'dbconfig.php';
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$color=$_POST['color'];
$sql = "UPDATE colors SET color='$color' WHERE id=1";
if ($conn->query($sql) === TRUE){
    echo "<script type='text/javascript'>window.location='dashbord.php?';</script>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
} 
$conn->close();
} 
?>
<!--<form method="post" action=""  enctype="multipart/form-data"> 

<li><a href="color.php?color='red'" class="btn btn-primary rounded-circle mx-2"></a></li>
<button type="button" value="blue" class="btn btn-primary rounded-circle mx-2 "></button>
<button type="button" value="red" class="btn btn-danger rounded-circle mx-2"></button>
<button type="button" value="light-blue" class="btn btn-info rounded-circle mx-2"></button>
<button type="button" value="orange" class="btn btn-warning rounded-circle mx-2"></button>

</form>-->
                    </ul>
                </div>
            </nav>
        <div class="modal fade" id="demoModal" tabindex="-1" role="dialog" aria-labelledby="demoModal" aria-hidden="true">
            <div class="modal-dialog" role="document">
           <form action="return.php" method="post" enctype="multipart/form-data">
                <div class="modal-content nexa-border-light">
                    <div class="modal-header nexa-border-light">
                        <h5 class="modal-title pt-2" id="exampleModalLabel">Enter Details</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                             <div class="col-12">
                              <h6>Invoice_No</h6>
                              <div class="sel">
                               <input  class="form-control"  ria-label="Type" name="invoice_no" required>
                              </div>        
                              </div>
                             <div class="col-12">
                              <h6>Product Code</h6>
                              <div class="sel">
                               <input  class="form-control"  ria-label="Type" name="barcode" required>
                              </div>        
                              </div>
                    </div>
                    <div class="modal-footer nexa-border-light">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Enter</button>
                    </div>
                </div>
            </form>
            </div>
        </div>
             <div class="scrollup text-center eagle-bg-primary text-white"><i class="ion-ios-upload"></i></div>   
        <!-- End Top To Bottom-->
        <!-- jQuery -->


                            
       