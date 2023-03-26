<?php

include('../includes/connection.php');
include('./include/allfunction.php');

session_start();
if(!isset($_SESSION['USERNAME'])) 
{
   header('location:login.php');
}

if (!empty($_GET['delid']))
{
$id=$_GET['delid'];

$result=deletedata('testimonials',$id);

if($result)
{
    echo 'Deleted Successfully';
    //header('location:testimonial.php');
}
else
{
    echo 'error';
}
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
              
  
              <center><h2 style="padding-bottom:20px;font-weight:900;font-size:28px;">Testimonials</h2> </center>

              <div class="table-responsive" style="overflow-y: hidden;padding-top:40px;">      
              <button type="add" name="add" style="float:right;color:white;padding:12px 24px;" class="btn btn-primary"> <a href="testimonial_add.php" style="text-decoration:none;color:white;"> Add Field</a></button>   
  <table class="table table-dark table-hover">
    <thead>
      <tr>
        <th>Image</th>
        <th>Head Content</th>
        <th>Customer Name</th>
        <th>Subheading</th>
        <th>Customer Reviews</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>

<?php

$result=selectalldata('testimonials');

while($data=mysqli_fetch_array($result))
{?>
      <tr>
        <td><img src="uploads/Testimonial/<?php echo $data['image']; ?>" style="height: 80px;"></td>
        <td style="word-wrap: break-word;max-width: 160px;white-space: normal!important;"><?php echo $data['Head_content'];?></td>
        <td><?php echo $data['customer_name'];?></td>
        <td style="word-wrap: break-word;max-width: 160px;white-space: normal!important;"><?php echo $data['subheading'];?></td>
        <td><?php echo $data['Reviews'];?></td>
        <td><a href="testimonial_edit.php?editid=<?php echo $data['id'];?>" style="color: white;padding: 8px 14px;background-color: blue;font-weight: 700;">Edit</a><br><br><br>
        <a href="testimonial.php?delid=<?php echo $data['id'];?>" onclick="return confirm(' DO you want to delete this data ')" style="color: white;padding: 8px 14px;background-color: blue;font-weight: 700;">Delete</a>
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

