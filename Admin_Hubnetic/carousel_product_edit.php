<?php 

include('../includes/connection.php');
include('./include/allfunction.php');

session_start();
if(!isset($_SESSION['USERNAME'])) 
{
   header('location:login.php');
}

$id=$_GET['editid'];

$data= editdata('carousel_product',$id); 

if(isset($_POST['submit']))
{
    if(!empty($_FILES['image']['name']))
  {
  $filename=$_FILES['image']['name'];
  $tempname=$_FILES['image']['tmp_name'];

  move_uploaded_file($tempname, 'uploads/carousel_image/' .$filename);

  date_default_timezone_set('Asia/Kolkata');

  date('y-m-d h:i:sA');
  }

  else
  {
    $filename=$_POST['oldimage'];
  }

   $data=array(
    "image"=>"'".$filename."'",
    "Best_deal"=>"'".$_POST['Best_deal']."'",
    "product_title"=>"'".$_POST['product_title']."'",
    "product_amount"=>"'".$_POST['product_amount']."'",
    "product_url"=>"'".$_POST['product_url']."'",
    "product_url2"=>"'".$_POST['product_url2']."'",
    "created_at"=>"'".date('y-m-d h:i:sA')."'"
   );

   
  update($data,'carousel_product',$id);
  //print_r($filename);
  header('location:carousel_product.php');

}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title> Tabrez Admin </title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/typicons/typicons.css">
  <link rel="stylesheet" href="vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>
<body>
 
    <!-- partial:partials/_navbar.html -->
    <?php 
    include('partials/_navbar.php');
    ?>

    <!-- partial -->
    <div class="container-fluid page-body-wrapper">

      <!-- partial:partials/_settings-panel.html -->
      <?php 
    include('partials/_settings-panel.php');
    ?>
      <!-- partial -->
      <?php 
              include('partials/_sidebar.php');
               ?>
      <!-- partial:partials/_sidebar.html -->
      
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-11">
              <div class="home-tab">
              
  
              <center><h2 style="padding-bottom:20px;font-weight:900;">Edit</h2> </center>        
  <form method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label for="best_deal">Best Deal Content:</label>
      <input type="text" class="form-control" id="Best Deal Content" placeholder="Enter Your Content" name="Best_deal" value="<?php echo $data['Best_deal'];?>">
    </div>

    <div class="form-group">
      <label for="file">Product Image:</label>
      <input type="file" class="form-control" id="file" placeholder="Re-Upload Product Image" name="image" value="<?php echo $data['image'];?>">
    </div>

    <div class="form-group">
      <label for="Product-Title">Product Title:</label>
      <input type="text" class="form-control" id="product_title" placeholder="Enter Product Title" name="product_title" value="<?php echo $data['product_title'];?>">
    </div>

    <div class="form-group">
      <label for="Product Amount">Product Amount:</label>
      <input type="text" class="form-control" id="product_amount" placeholder="Enter Product Amount" name="product_amount" value="<?php echo $data['product_amount'];?>">
    </div>

    <div class="form-group">
      <label for="Product Url">Product Url:</label>
      <input type="text" class="form-control" id="product_url" placeholder="Enter Product Url" name="product_url" value="<?php echo $data['product_url'];?>">
    </div>

    <div class="form-group">
      <label for="Product Url2">Product Url 2:</label>
      <input type="text" class="form-control" id="product_url2" placeholder="Enter Product Url 2" name="product_url2" value="<?php echo $data['product_url2'];?>">
    </div>
    
    <button type="submit" name="submit" class="btn btn-primary">Update</button>
  </form>


              
              
                
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
    <?php
    
    include('partials/_footer.php');
    
    ?>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <script src="vendors/progressbar.js/progressbar.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/jquery.cookie.js" type="text/javascript"></script>
  <script src="js/dashboard.js"></script>
  <script src="js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->
</body>

</html>

