<?php
  session_start();
  if (isset($_SESSION['ID'])) {
      // header("Location:otpform.php");
      exit();
  }
    
  include ('../Includes/connection.php');
  
  if (isset($_POST['submit'])) {
      $errorMsg = "";
      $username = $connection->real_escape_string($_POST['username']);

      $password = $connection->real_escape_string(md5($_POST['password']));
      
  if (!empty($username) || !empty($password)) {
        $query  = "SELECT * FROM admin_hubnetic WHERE Username = '$username'";
        $result = $connection->query($query);
        if($result->num_rows > 0){
            $row = $result->fetch_assoc();
            $email = $row['Email'];
            $_SESSION['ID'] = $row['ID'];
            $_SESSION['ROLE'] = $row['Role'];
             $_SESSION['NAME'] = $row['Name'];
             $_SESSION['EMAIL'] = $row['Email'];
            $_SESSION['USERNAME'] = $row['Username'];
            
            $otpquery  = "SELECT Otp FROM otp_vry WHERE Email = '$email'";
            $otpresult = $connection->query($otpquery);

            if($otpresult->num_rows > 0){
              $otp=rand(100000,999999);
	            mysqli_query($connection,"update otp_vry set Otp='$otp' where Email='$email'");
	            $html="Your otp verification code is ".$otp;
             	echo "yes";

               $to = 'tawreja.786@gmail.com';
               $subject = 'Admin Panel Mail Verification';
               $message = 'Admin Suagatum Now Your Verification Code is  : '. $otp;
               $from = 'darkhacker.6vs5@gmail.com';
               $headers = "From: $from"; 

              if ( mail($to,$subject,$message,$headers)){
                header("Location:otpform.php");
              }
              else {
                $errorMsg = "does not exist";
              }
            }else{
              $otp=rand(100000,999999);
              print_r($otp);
              $insert=("INSERT INTO otp_vry WHERE ('Email','Otp') VALUES ($email,$otp)");
             // print_r($insert);
              $to = 'tawreja.786@gmail.com';
               $subject = 'Admin Panel Mail Verification';
               $message = 'Admin Suagatum Now Your Verification Code is  : '. $otp;
               $from = 'darkhacker.6vs5@gmail.com';
               $headers = "From: $from"; 
              
              // print_r($to);
               if ( mail($to,$subject,$message,$headers)){
                header("Location:otpform.php");
              }
              else {
                $errorMsg = "does not exist";
              } 
            }
          

           /*  header("Location:otpform.php");
            die();                              
        }else{
          $errorMsg = "No user found on this username";
        }  */
    }else{
      $errorMsg = "Username and Password is required";
    }
  }
  }
  ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Tabrez login </title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="./vendors/feather/feather.css">
  <link rel="stylesheet" href="./vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="./vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="./vendors/typicons/typicons.css">
  <link rel="stylesheet" href="./vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="./vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="./css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="./images/online-shop.png" />

</head>

<body>




  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src=".../../images/online-shop.png" alt="logo">
         
      
                <h1 style="font-size: 16px;font-weight: 900;">Hubnetic Store Admin</h1>
              </div>
              <h4>Hello! let's get started</h4>
              <h6 class="fw-light">Sign in to continue.</h6>
              <form class="pt-3" method="POST">
                <div class="form-group">
                  <input type="text" name="username" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Username">
                </div>
                <div class="form-group">
                  <input type="password" name="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="mt-3">
                  <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" name="submit" value="Log In">SIGN IN</button>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      Keep me signed in
                    </label>
                  </div>
                  <a href="#" class="auth-link text-black">Forgot password?</a>
                </div>
               
                <div class="text-center mt-4 fw-light">
                  Don't have an account? <a href="register.php" class="text-primary">Create</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>

  <!-- hide show js -->
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../../vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="../../vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/template.js"></script>
  <script src="../../js/settings.js"></script>
  <script src="../../js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>
