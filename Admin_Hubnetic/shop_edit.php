<?php

include('../includes/connection.php');
include('./include/allfunction.php');

session_start();
if(!isset($_SESSION['USERNAME']))
{
   header('location:login.php');
}


$id=$_GET['editid'];

$data= editdata('shop',$id);

if(isset($_POST['submit']))
{
  if(!empty($_FILES['image']['name']))
  {
  $filename=$_FILES['image']['name'];
  $tempname=$_FILES['image']['tmp_name'];

  move_uploaded_file($tempname, 'uploads/' .$filename);

  date_default_timezone_set('Asia/Kolkata');

  date('y-m-d h:i:sA');
  }

  else
  {
    $filename=$_POST['oldimage'];
  }

  $data=array(
    "heading"=>"'".$_POST['heading']."'",
    "image"=>"'".$filename."'",  
    "amount"=>"'".$_POST['amount']."'",
    "updated_at"=>"'".date('y-m-d h:i:sA')."'"
  );

  update($data,'shop',$id);
  header("location:shop.php");
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
            <div class="col-sm-10">
              <div class="home-tab">
                

              <center><h2 style="padding-bottom:30px;font-weight:900;">Edit!</h2> </center>      
              <button type="add" name="add" style="float:right;margin-right:0px;color:white;padding:14px 28px;font-weight:700;font-size:14px;" class="btn btn-primary"> <a href="blog_add.php" style="text-decoration:none;color:white;"> Add</a></button>
              
              <div class="container my-5">
            <form method="POST" enctype="multipart/form-data">


            
                <label>Heading</label>
                <input type="text" class="form-control" placeholder="Enter Your Heading" name="heading" value="<?php echo $data['heading']; ?>">
                <br>
              
              <div class="form-group">
                <label>Image</label>
                <input type="file" class="form-control" name="image">
                <br>

                <img src="uploads/<?php echo $data['image']; ?>" style="height: 80px;"><br>

                <input type="hidden" name="oldimage"  value="<?php echo $data['image']; ?>">
                <br>
               </div>


              <div class="form-group">
                <label>Amount</label>
                <input type="text" class="form-control" placeholder="Enter Your Amount" name="amount" value="<?php echo $data['amount']; ?>">
              </div>
              <br>


              <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </form>
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

