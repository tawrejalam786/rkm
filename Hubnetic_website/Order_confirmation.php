<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon Icon -->
    <link rel="shortcut icon" href="Images/Favicon/online-shop.png" type="image/x-icon">
    <title>Order Confirmation | Hubnetic Store</title>

 <!-- CSS links -->
 <link rel="stylesheet" href="CSS/index.css">
 <link rel="stylesheet" href="JQuery/style.css" />
 <link rel="stylesheet" href="CSS/demo.css">

 

 <!-- CDN LINKS -->
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script>  
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"> </script>  
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"> </script>  
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" > 


<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet" />

</head>
<body>
    <!-- Preloader Start from here-->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- End Preloader Here-->

    <!-- header section starts from here -->
    <section>
        <header id="container">
            <div id="nav-bar">
                <div id="nav-belt">
                    <div class="nav-left">
                        <div id="nav-logo">
                            <a href="index.php" style="text-decoration: none;">
                              <img src="Images/Favicon/online-shop.png" width="40px" alt=""> 
                              <span class="pl-2" style="font-weight: bold;color: #fff;">Hubnetic Store</span></a>
                        </div>
                    </div>
                    <div class="nav-fill">
                        <div id="nav-search">
                            <form id="nav-search-bar-form">
                                <div class="nav-left">
                                    <a href="#" style="text-decoration: none;">ALL</a>
                                </div>
                                <div class="nav-fill">
                                    <input type="text">
                                </div>
                                <div class="nav-right">
                                    <button type="submit">Search</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="nav-right">
                        <div id="nav-tools">
                            <div class="dropdown">
                           <span style="color: #fff;font-weight: 500;padding: 5px 10px;"><i class="fa-solid fa-globe" style="margin-right: 5px;"></i>Language</span>
                           <div class="dropdown-content">
                            <p><a href="#" style="text-decoration: none;color: #fff;">English</a></p>
                           <p><a href="#" style="text-decoration: none;color: #fff;">Hindi</a></p>
                           </div>
                        </div>
        
                        <div class="dropdown">
                            <span style="color: #fff;font-weight: 500;padding: 5px 10px;"><i class="fa-solid fa-user" style="margin-right: 5px;"></i>Username</span>
                            <div class="dropdown-content">
                             <p><a href="/registration.php" target="_blank" style="text-decoration: none;color: #fff;">Register</a></p>
                            <p><a href="/login.php" target="_blank" style="text-decoration: none;color: #fff;">Login</a></p>
                            </div>
                         </div>
                            <a href="shopping_cart.php" class="pt-2" style="text-decoration: none;color: #fff;"><i class="fa-solid fa-cart-shopping" style="margin-right: 5px;"></i>Cart</a>
                        </div>
                    </div>
                </div>
        
            </div>
            </header>
        </section>
        
        <!-- menu bar section -->
        <section>
          <div class="container-side">
          <nav class="nav">
            <div class="hamburgers">
              <img src="/Images/Slider/icons8-hamburger-menu-24.png" width="30px" alt="">
        </div>
            <div class="hamburger">
              <span class="line"></span>
              <span class="line"></span>
              <span class="line"></span>
            </div>
        
            <div class="nav__link hide">
              <a href="index.php" style="text-decoration: none;color: #fff;">home</a>
              <a href="about.php" style="text-decoration: none;color: #fff;">about</a>
              <a href="Contact.php" style="text-decoration: none;color: #fff;">contact</a>
              <a href="Product.php" style="text-decoration: none;color: #fff;">products</a>
              <a href="tracking.php" style="text-decoration: none;color: #fff;">tracking</a>
            </div>
          </nav>
          </div>
        </section>
        
        <section class="nav__links hide">
          <div class="container-side">
            <div class="row">
              <div class="col-lg-6">
                <div class="sidebar">
                  <ul>
                    <li><a href="Product.php" style="text-decoration: none;color: #fff;">Mens</a></li>
                    <li><a href="Product.php" style="text-decoration: none;color: #fff;">Womens</a></li>
                    <li>
    
                        <div class="dropdown2">
                            <span style="color: #fff;font-weight: 500;padding: 5px 10px;">Shoes</span>
                            <div class="dropdown-content2">
                             <p><a href="Product.php" style="text-decoration: none;color: #131921;font-weight: 700;">Men</a></p>
                            <p><a href="Product.php" style="text-decoration: none;color: #131921;font-weight: 700;">Women</a></p>
                            </div>
                         </div>
                    </li>
                    <li><a href="Product.php" style="text-decoration: none;color: #fff;">Headphones</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </section>
  
      
  
  <script>
  
  const hamburgers = document.querySelector('.hamburgers');
  const navLinks = document.querySelector('.nav__links');
  
  const hamburger = document.querySelector('.hamburger');
  const navLink = document.querySelector('.nav__link');
  
  hamburger.addEventListener('click', () => {
    navLink.classList.toggle('hide');
  
    });
  
    hamburgers.addEventListener('click', () => {
    navLinks.classList.toggle('hide');
  
  });
  
  
  </script>  
  
  <!-- menu section end -->

  
  <!-- Banner section -->
<section>
    <div id="banner" style="background: url('Images/category/Headphones/04.jpg') rgba(0,0,0,0.5);background-position: center;background-size: cover;background-blend-mode: multiply;" >
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="banner-text">
              <p>Order Confirmation Hubnetic Store </p>
              <h5 class="text-center" style="color: #fff;">Track your order from here</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<!-- End Banner section -->

<!-- Confirmation Page -->
<section class="confirmation_part section_padding">
    <div class="container">
    <div class="row">
    <div class="col-lg-12">
    <div class="confirmation_tittle">
    <span>Thank you. Your order has been received.</span>
    </div>
    </div>
    <div class="col-lg-6 col-lx-4">
    <div class="single_confirmation_details">
    <h4>order info</h4>
    <ul>
    <li>
    <p>order number</p><span>: 60235</span>
    </li>
    <li>
    <p>data</p><span>: Oct 03, 2017</span>
    </li>
    <li>
    <p>total</p><span>: USD 2210</span>
    </li>
    <li>
    <p>mayment methord</p><span>: Check payments</span>
    </li>
    </ul>
    </div>
    </div>
    <div class="col-lg-6 col-lx-4">
    <div class="single_confirmation_details">
    <h4>Billing Address</h4>
    <ul>
    <li>
    <p>Street</p><span>: 56/8</span>
    </li>
    <li>
    <p>city</p><span>: Los Angeles</span>
    </li>
    <li>
    <p>country</p><span>: United States</span>
    </li>
    <li>
    <p>postcode</p><span>: 36952</span>
    </li>
    </ul>
    </div>
    </div>
    <div class="col-lg-6 col-lx-4">
    <div class="single_confirmation_details">
    <h4>shipping Address</h4>
    <ul>
    <li>
    <p>Street</p><span>: 56/8</span>
    </li>
    <li>
    <p>city</p><span>: Los Angeles</span>
    </li>
    <li>
    <p>country</p><span>: United States</span>
    </li>
    <li>
    <p>postcode</p><span>: 36952</span>
    </li>
    </ul>
    </div>
    </div>
    </div>
    <div class="row">
    <div class="col-lg-12">
    <div class="order_details_iner">
    <h3>Order Details</h3>
    <table class="table table-borderless">
    <thead>
    <tr>
    <th scope="col" colspan="2">Product</th>
    <th scope="col">Quantity</th>
    <th scope="col">Total</th>
    </tr>
    </thead>
    <tbody>
    <tr>
    <th colspan="2"><span>Pixelstore fresh Blackberry</span></th>
    <th>x02</th>
    <th> <span>$720.00</span></th>
    </tr>
    <tr>
    <th colspan="2"><span>Pixelstore fresh Blackberry</span></th>
    <th>x02</th>
    <th> <span>$720.00</span></th>
    </tr>
    <tr>
    <th colspan="2"><span>Pixelstore fresh Blackberry</span></th>
    <th>x02</th>
    <th> <span>$720.00</span></th>
    </tr>
    <tr>
    <th colspan="3">Subtotal</th>
    <th> <span>$2160.00</span></th>
    </tr>
    <tr>
    <th colspan="3">shipping</th>
    <th><span>flat rate: $50.00</span></th>
    </tr>
    </tbody>
    <tfoot>
    <tr>
    <th scope="col" colspan="3">Quantity</th>
    <th scope="col">Total</th>
    </tr>
    </tfoot>
    </table>
    </div>
    </div>
    </div>
    </div>
    </section>
    
<!-- Confirmation page end here -->


   <!-- Footer section -->
  
   <footer class="mainfooter" style="background-color: #131921;margin-top: 15px;" role="contentinfo">  
    <div class="footer-middle">  
    <div class="container">  
      <div class="row pb-5">  
        <div class="col-md-3 col-sm-6 col-lg-3">  
          <div class="footer-pad">  
            <h4 style="color: #fff;font-weight: 600;font-size: 1.3em;">Payment Getway</h4>  
            <ul class="list-unstyled" style="width: 155px;">  
              <li> <a href="#"> </a> </li>  
              <li> <a href="#">Payment Center</a></li>  
              <li> <a href="#"> Contact Directory </a></li>  
              <li> <a href="#">Forms</a></li>  
              <li> <a href="#">News and Updates</a></li>  
              <li> <a href="#">FAQs</a></li>  
            </ul>  
          </div>  
        </div>  
        <div class="col-md-3 col-sm-6 col-lg-3">  
          <div class="footer-pad" style="width: 130px;">  
            <h4 style="color: #fff;font-weight: 600;font-size: 1.3em;">Quick Links</h4>  
            <ul class="list-unstyled">  
              <li><a href="#"> Blog </a> </li>  
              <li><a href="#">Accessibility</a> </li>  
              <li><a href="#">Disclaimer</a></li>  
              <li><a href="#">Privacy Policy</a></li>  
              <li><a href="#">FAQs</a></li>  
              <li><a href="#">Webmaster hero</a></li>  
            </ul>  
          </div>  
        </div>  
        <div class="col-md-3 col-sm-6 col-lg-3">  
          <div class="footer-pad" style="width: 140px;">  
            <h4 style="color: #fff;font-weight: 600;font-size: 1.3em;"> Contact Us </h4>  
            <ul class="list-unstyled">  
              <li> <a href="#"> Parks </a> </li>  
              <li> <a href="#"> Public Works </a> </li>  
              <li> <a href="#"> Department</a> </li>  
              <li> <a href="#"> Hero Fire </a> </li>  
              <li> <a href="#"> City Council </a> </li>  
            </ul>  
          </div>  
        </div>  
          <div class="col-md-3 col-lg-3">  
              <h4 class="pb-2" style="color: #fff;font-weight: 600;font-size: 1.3em;"> Follow Us </h4>  
              <ul class="social-network social-circle">  
               <li> <a href="#" class="icoFacebook" title="Facebook"> <i class="fa fa-facebook"> </i> </a> </li>  
               <li> <a href="#" class="icoLinkedin" title="Linkedin"> <i class="fa fa-linkedin"> </i> </a> </li>  
               <li> <a href="#" class="iconInstagram" title="Instagram"> <i class="fa-brands fa-instagram"> </i> </a> </li> 
              </ul>               
      </div>  
      </div>  
      <div class="row">  
        <div class="credit-cards" style="text-align: center; width: 100%">
          <img height="40" src="https://shoplineimg.com/assets/footer/card_visa.png"/>
          <img height="40" src="https://shoplineimg.com/assets/footer/card_master.png"/>
          <img height="40" src="https://shoplineimg.com/assets/footer/card_paypal.png"/>
          <img height="40" src="https://shoplineimg.com/assets/footer/card_unionpay.png"/>
          <img height="40" src="https://shoplineimg.com/assets/footer/card_linepay.png"/>
          <img height="40" src="https://shoplineimg.com/assets/footer/card_tw_711_pay.png"/>
          <img height="40" src="https://shoplineimg.com/assets/footer/card_tw_fm_pay.png"/>
          <img height="40" src="https://shoplineimg.com/assets/footer/card_taishin.png"/>
          <img height="40" src="https://shoplineimg.com/assets/footer/card_amex.png"/>
          <img height="40" src="https://shoplineimg.com/assets/footer/card_ecpay.png"/>
          <img height="40" src="https://shoplineimg.com/assets/footer/card_jcb.png"/>
        </div>
      <div class="col-md-12 copy">  
      <p class="text-center"> © Copyright 2023 - RKM TECH PVT LTD.  All rights reserved. </p>  
      </div>  
      </div>  
    </div>  
    </div>  
  </footer> 

    <script>
        // Page loading animation
      $(window).on('load', function() {
        if($('.cover').length){
          $('.cover').parallax({
            imageSrc: $('.cover').data('image'),
            zIndex: '1'
          });
        }
      
        $("#preloader").animate({
          'opacity': '0'
        }, 600, function(){
          setTimeout(function(){
            $("#preloader").css("visibility", "hidden").fadeOut();
          }, 300);
        });
      });
      </script>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="https://kit.fontawesome.com/e747e308d6.js" crossorigin="anonymous"></script>
</body>
</html>