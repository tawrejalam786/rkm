<?php

include('../includes/connection.php');
include('./include/allfunction.php');

session_start();
if(!isset($_SESSION['USERNAME'])) 
{
   header('location:carousel_product.php');
}

if(isset($_GET['delid']))
{

$id=$_GET['delid'];

deletedata('carousel_product',$id);

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title> Hubnetic Store Admin </title>
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
  <link rel="shortcut icon" href="images/online-shop.png" />
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
              
  
              <center><h2 style="padding-bottom:20px;font-weight:900;">Carousel Product Section!</h2> </center>      
              <button type="add" name="add" style="float:right;color:white;padding:12px 24px;" class="btn btn-primary"> <a href="carousel_product_add.php" style="text-decoration:none;color:white;"> Add</a></button>   
              <div class="table-responsive" style="overflow-y: hidden;padding-top:40px;">
              <table class="table table-dark table-hover" border="1px solid">
    <thead>
      <tr>
        <th>Best Deal Title</th>
        <th>Image</th>
        <th>Product Title</th>
        <th>Product Amount</th>
        <th>Product Link 1</th>
        <th>Product Link 2</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>

<?php

$select= whiledata("carousel_product");

while($data=mysqli_fetch_array($select))
{?>
      <tr>
        <td><?php echo $data['Best_deal']; ?></td>
        <td><img src="../Admin_Hubnetic/uploads/carousel_image/<?php echo $data['image']; ?>" style="height: 80px;"></td>
        <td><?php echo $data['product_title'];?></td>
        <td style="word-wrap: break-word;max-width: 160px;white-space: normal!important;"><?php echo $data['product_amount'];?></td>
        <td><?php echo $data['product_url'];?></td>
        <td><?php echo $data['product_url2'];?></td>
        <td>
        <a href="carousel_product_edit.php?editid=<?php echo $data['ID']; ?>" onclick="return confirm('Do you want to edit this data')" class="text-light btn btn-primary">Edit</a>
        <a href="carousel_product.php?delid=<?php echo $data['ID']; ?>" onclick="return confirm('Do you want to delete this data')" class="text-light btn btn-danger">Delete</a>
        </td>
      </tr>
<?php } ?>      
    </tbody>
  </table>

              </div>
              
              
                
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

