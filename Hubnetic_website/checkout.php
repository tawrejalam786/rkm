<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="Images/Favicon/online-shop.png">
    <!-- Boostrap4 cdn links -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/index.css">
    <link rel="stylesheet" href="CSS/Infinity.css">


   <link rel="stylesheet" href="CSS/demo.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script>  
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"> </script>  
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"> </script>  
      <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" > 
   

    <!-- Jquery pluging -->
    <!-- Styles -->
   
   
 <title>Hubnetic Store | Checkout</title>
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
                                  <a href="Product.php" style="text-decoration: none;">ALL</a>
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
                          <p><a href="#" style="text-decoration: none;">English</a></p>
                         <p><a href="#" style="text-decoration: none;">Hindi</a></p>
                         </div>
                      </div>
      
                      <div class="dropdown">
                          <span style="color: #fff;font-weight: 500;padding: 5px 10px;"><i class="fa-solid fa-user" style="margin-right: 5px;"></i>Username</span>
                          <div class="dropdown-content">
                           <p><a href="/registration.php" target="_blank" style="text-decoration: none;">Register</a></p>
                          <p><a href="/login.php" target="_blank" style="text-decoration: none;">Login</a></p>
                          </div>
                       </div>
                          <a href="shopping_cart.php"><i class="fa-solid fa-cart-shopping" style="margin-right: 5px;"></i>Cart</a>
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
            <img src="Images/Slider/icons8-hamburger-menu-24.png" width="30px" alt="">
      </div>
          <div class="hamburger">
            <span class="line"></span>
            <span class="line"></span>
            <span class="line"></span>
          </div>
      
          <div class="nav__link hide">
            <a href="index.php">home</a>
            <a href="about.php">about</a>
            <a href="Contact.php">contact</a>
            <a href="Product.php">products</a>
            <a href="tracking.php">tracking</a>
            
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
                  <li><a href="Product.php">Mens</a></li>
                  <li><a href="Product.php">Womens</a></li>
                  <li>
  
                      <div class="dropdown2">
                          <span style="color: #fff;font-weight: 500;padding: 5px 10px;">Shoes</span>
                          <div class="dropdown-content2">
                           <p><a href="Product.php" style="text-decoration: none;">Men</a></p>
                          <p><a href="Product.php" style="text-decoration: none;">Women</a></p>
                          </div>
                       </div>
                  </li>
                  <li><a href="Product.php">Headphones</a></li>
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
<section style="z-index: -1;">
    <div id="banner" style="background: url('Images/category/Headphones/04.jpg') rgba(0,0,0,0.5);background-position: center;background-size: cover;background-blend-mode: multiply;">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="banner-text">
              <p>Checkout</p>
              <span style="display: flex;justify-content: center;margin-top: 12px;color: #fff;font-size: 17px;font-weight: 500;">Grab your product from here </span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<!-- End Banner section -->
          <!-- checkout page start from here -->
            
          <section class="checkout_area section_padding">
            <div class="container">
            <div class="returning_customer">
            <div class="check_title">
            <h2>
            Returning Customer?
            <a href="login.php">Click here to login</a>
            </h2>
            </div>
            <p>
            If you have shopped with us before, please enter your details in the
            boxes below. If you are a new customer, please proceed to the
            Billing & Shipping section.
            </p>
            <form class="row contact_form" action="#" method="post" novalidate="novalidate">
            <div class="col-md-6 form-group p_star">
            <input type="text" class="form-control" id="name" name="name" value=" " />
            <span class="placeholder" data-placeholder="Username or Email"></span>
            </div>
            <div class="col-md-6 form-group p_star">
            <input type="password" class="form-control" id="password" name="password" value="" />
            <span class="placeholder" data-placeholder="Password"></span>
            </div>
            <div class="col-md-12 form-group">
            <button type="submit" value="submit" class="btn_3">
            log in
            </button>
            <div class="creat_account">
            <input type="checkbox" id="f-option" name="selector" />
            <label for="f-option">Remember me</label>
            </div>
            <a class="lost_pass" href="#">Lost your password?</a>
            </div>
            </form>
            </div>
            <div class="cupon_area">
            <div class="check_title">
            <h2>
            Have a coupon?
            <a href="#">Click here to enter your code</a>
            </h2>
            </div>
            <input type="text" placeholder="Enter coupon code" />
            <a class="tp_btn" href="#" style="text-decoration: none;background-color: brown;">Apply Coupon</a>
            </div>
            <div class="billing_details">
            <div class="row">
            <div class="col-lg-8">
            <h3>Billing Details</h3>
            <form class="row contact_form" action="#" method="post" novalidate="novalidate">
            <div class="col-md-6 form-group p_star">
            <input type="text" class="form-control" id="first" name="name" placeholder="First name" />
            <!-- <span class="placeholder" data-placeholder="First name"></span> -->
            </div>
            <div class="col-md-6 form-group p_star">
            <input type="text" class="form-control" id="last" name="name" placeholder="Last name"/>
            <!-- <span class="placeholder" data-placeholder="Last name"></span> -->
            </div>
            <div class="col-md-12 form-group">
            <input type="text" class="form-control" id="company" name="company" placeholder="Company name" />
            </div>
            <div class="col-md-6 form-group p_star">
            <input type="text" class="form-control" id="number" name="number" />
            <span class="placeholder" data-placeholder="Phone number"></span>
            </div>
            <div class="col-md-6 form-group p_star">
            <input type="text" class="form-control" id="email" name="compemailany" />
            <span class="placeholder" data-placeholder="Email Address"></span>
            </div>
            <div class="col-md-12 form-group p_star p-4">
            <select class="country_select">
            <option value="1">Country</option>
            <option value="2">Country</option>
            <option value="4">Country</option>
            </select>
            </div>
            <div class="col-md-12 form-group p_star">
            <input type="text" class="form-control" id="add1" name="add1" />
            <span class="placeholder" data-placeholder="Address line 01"></span>
            </div>
            <div class="col-md-12 form-group p_star">
            <input type="text" class="form-control" id="add2" name="add2" />
            <span class="placeholder" data-placeholder="Address line 02"></span>
            </div>
            <div class="col-md-12 form-group p_star">
            <input type="text" class="form-control" id="city" name="city" />
            <span class="placeholder" data-placeholder="Town/City"></span>
            </div>
            <div class="col-md-12 form-group p_star">
            <select class="country_select">
            <option value="1">District</option>
            <option value="2">District</option>
            <option value="4">District</option>
            </select>
            </div>
            <div class="col-md-12 form-group">
            <input type="text" class="form-control" id="zip" name="zip" placeholder="Postcode/ZIP" />
            </div>
            <div class="col-md-12 form-group">
            <div class="creat_account">
            <input type="checkbox" id="f-option2" name="selector" />
            <label for="f-option2">Create an account?</label>
            </div>
            </div>
            <div class="col-md-12 form-group">
            <div class="creat_account">
            <h3>Shipping Details</h3>
            <input type="checkbox" id="f-option3" name="selector" />
            <label for="f-option3">Ship to a different address?</label>
            </div>
            <textarea class="form-control" name="message" id="message" rows="1" placeholder="Order Notes"></textarea>
            </div>
            </form>
            </div>
            <div class="col-lg-4">
            <div class="order_box">
            <h2>Your Order</h2>
            <ul class="list">
            <li>
            <a href="#">Product
            <span>Total</span>
            </a>
            </li>
            <li>
            <a href="#">Fresh Blackberry
            <span class="middle">x 02</span>
            <span class="last">$720.00</span>
            </a>
            </li>
            <li>
            <a href="#">Fresh Tomatoes
            <span class="middle">x 02</span>
            <span class="last">$720.00</span>
            </a>
            </li>
            <li>
            <a href="#">Fresh Brocoli
            <span class="middle">x 02</span>
            <span class="last">$720.00</span>
            </a>
            </li>
            </ul>
            <ul class="list list_2">
            <li>
            <a href="#">Subtotal
            <span>$2160.00</span>
            </a>
            </li>
            <li>
            <a href="#">Shipping
            <span>Flat rate: $50.00</span>
            </a>
            </li>
            <li>
            <a href="#">Total
            <span>$2210.00</span>
            </a>
            </li>
            </ul>
            <div class="payment_item">
            <div class="radion_btn">
            <input type="radio" id="f-option5" name="selector" />
            <label for="f-option5">Check payments</label>
            <div class="check"></div>
            </div>
            <p>
             Please send a check to Store Name, Store Street, Store Town,
            Store State / County, Store Postcode.
            </p>
            </div>
            <div class="payment_item active">
            <div class="radion_btn">
            <input type="radio" id="f-option6" name="selector" />
            <label for="f-option6">Paypal </label>
            <img src="img/product/single-product/card.jpg" alt="" />
            <div class="check"></div>
            </div>
            <p>
            Please send a check to Store Name, Store Street, Store Town,
            Store State / County, Store Postcode.
            </p>
            </div>
            <div class="creat_account">
            <input type="checkbox" id="f-option4" name="selector" />
            <label for="f-option4">I’ve read and accept the </label>
            <a href="#">terms & conditions*</a>
            </div>
            <a class="btn_3" href="#">Proceed to Paypal</a>
            </div>
            </div>
            </div>
            </div>
            </div>
            </section>
            
            <!-- checkout section end here -->


<!-- Footer section -->
  
<footer class="mainfooter" style="background-color: #131921;padding-top: 15px;" role="contentinfo">  
    <div class="footer-middle">  
    <div class="container">  
      <div class="row pb-5">  
        <div class="col-md-3 col-sm-6 col-lg-3">  
          <div class="footer-pad" style="width: 180px;">  
            <h4 style="color: #fff;font-weight: 700;">Payment Getway</h4>  
            <ul class="list-unstyled">  
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
          <div class="footer-pad" style="width: 150px;">  
            <h4 style="color: #fff;font-weight: 700;">Quick Links</h4>  
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
          <div class="footer-pad" style="width: 150px;">  
            <h4 style="color: #fff;font-weight: 700;"> Contact Us </h4>  
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
              <h4 class="pb-2" style="color: #fff;font-weight: 700;"> Follow Us </h4>  
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
      <p class="text-center" style="color: #fff;"> © Copyright 2023 - RKM TECH PVT LTD.  All rights reserved. </p>  
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
  

     
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="/JS/index.js">
      <!-- Scripts -->
    <!-- <script src="/JQuery/app.js" charset="utf-8"></script> -->
  
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script src="https://kit.fontawesome.com/e747e308d6.js" crossorigin="anonymous"></script>
  
  </body>
  </html>