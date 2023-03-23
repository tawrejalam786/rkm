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
  <!--    <script src="/JS/main.js"></script>  -->
     <link rel="stylesheet" href="CSS/demo.css">
     <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script>  
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"> </script>  
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"> </script>  
      <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" > 


      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Jquery pluging -->
    <!-- Styles -->
    <link rel="stylesheet" href="JQuery/style.css" />
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet" />

<!-- end here -->
 <title> Hubnetic Store | Shopping Cart</title>
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

<!-- menu section end here -->


<!-- Banner section -->
<section>
    <div id="banner" style="background: url('Images/category/Headphones/04.jpg') rgba(0,0,0,0.5);background-position: center;background-size: cover;background-blend-mode: multiply;">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="banner-text">
              <p>Shopping Cart</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<!-- End Banner section -->


    <!-- cart area start from here -->
    <section class="cart_area section_padding">
        <div class="container">
        <div class="cart_inner">
        <div class="table-responsive">
        <table class="table">
        <thead>
        <tr>
        <th scope="col">Product</th>
        <th scope="col">Price</th>
        <th scope="col">Quantity</th>
        <th scope="col">Total</th>
        </tr>
        </thead>
        <tbody>
        <tr>
        <td>
        <div class="media">
        <div class="d-flex">
        <img src="/Images/single_product img/photo-1.jpg" alt="" />
        </div>
        <div class="media-body">
        <p>Minimalistic shop for multipurpose use</p>
        </div>
        </div>
        </td>
        <td>
        <h5>$360.00</h5>
        </td>
        <td>
        <div class="product_count">
        
        <span class="input-number-decrement"> <i class="fa fa-minus" aria-hidden="true"></i></span>
        <input class="input-number" type="text" value="1" min="0" max="10">
        <span class="input-number-increment"> <i class="fa fa-plus" aria-hidden="true"></i></span>
        </div>
        </td>
        <td>
        <h5>$720.00</h5>
        </td>
        </tr>
        <tr>
        <td>
        <div class="media">
        <div class="d-flex">
        <img src="/Images/single_product img/photo-2.jpg" alt="" />
        </div>
        <div class="media-body">
        <p>Minimalistic shop for multipurpose use</p>
        </div>
        </div>
        </td>
        <td>
        <h5>$360.00</h5>
        </td>
        <td>
        <div class="product_count">
        <span class="input-number-decrement"> <i class="fa fa-minus" aria-hidden="true"></i></span>
        <input class="input-number" type="text" value="1" min="0" max="10">
        <span class="input-number-increment"> <i class="fa fa-plus" aria-hidden="true"></i></span>
        </div>
        </td>
        <td>
        <h5>$720.00</h5>
        </td>
        </tr>
        <tr class="bottom_button">
        <td>
        <a class="btn_1" href="#">Update Cart</a>
        </td>
        <td></td>
        <td></td>
        <td>
        <div class="cupon_text float-right">
        <a class="btn_1" href="#">Close Coupon</a>
        </div>
        </td>
        </tr>
        <tr>
        <td>Hii checking</td>
        <td>
        <h5>Subtotal</h5>
        </td>
        <td>
        <h5>$2160.00</h5>
        </td>
        </tr>
        <tr class="shipping_area">
        <td>texting</td>
        <td>texting 2</td>
        <td>
        <h5>Shipping</h5>
        </td>
        <td style="display: flex;">
        <div class="shipping_box">
        <ul class="list">
        <li>
        Flat Rate: $5.00
        <input type="radio" aria-label="Radio button for following text input">
        </li>
        <li>
        Free Shipping
        <input type="radio" aria-label="Radio button for following text input">
        </li>
        <li>
        Flat Rate: $10.00
        <input type="radio" aria-label="Radio button for following text input">
        </li>
        <li class="active">
        Local Delivery: $2.00
        <input type="radio" aria-label="Radio button for following text input">
        </li>
        </ul>
        <h6>
        Calculate Shipping
        <i class="fa fa-caret-down" aria-hidden="true"></i>
        </h6>
        <select class="shipping_select">
        <option value="1">Bangladesh</option>
        <option value="2">India</option>
        <option value="4">Pakistan</option>
        </select>
        <select class="shipping_select section_bg">
        <option value="1">Select a State</option>
        <option value="2">Select a State</option>
        <option value="4">Select a State</option>
        </select>
        <input class="post_code" type="text" placeholder="Postcode/Zipcode" />
        <a class="btn_1" href="#">Update Details</a>
        </div>
        </td>
        </tr>
        </tbody>
        </table>
        <div class="checkout_btn_inner float-right">
        <a class="btn_1" href="Product.php">Continue Shopping</a>
        <a class="btn_1 checkout_btn_1" href="checkout.php">Proceed to checkout</a>
        </div>
        </div>
        </div>
        </section>
        
        <script>
            $(document).ready(function() {
    $('.input-number-decrement').click(function () {
        var $input = $(this).parent().find('input');
        var count = parseInt($input.val()) - 1;
        count = count < 1 ? 1 : count;
        $input.val(count);
        $input.change();
        return false;
    });
    $('.input-number-increment').click(function () {
        var $input = $(this).parent().find('input');
        $input.val(parseInt($input.val()) + 1);
        $input.change();
        return false;
    });
});
        </script>

    <!-- cart area end here -->

<!-- news letter start here -->
<div class="subscribe pb-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-heading">
                    <h2>By Subscribing To Our Newsletter You Can Get 30% Off</h2>
                    <span>Details to details is what makes Hexashop different from the other themes.</span>
                </div>
                <form id="subscribe" action="" method="get">
                    <div class="row">
                      <div class="col-lg-5">
                        <fieldset>
                          <input name="name" type="text" id="name" placeholder="Your Name" required="">
                        </fieldset>
                      </div>
                      <div class="col-lg-5">
                        <fieldset>
                          <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email Address" required="">
                        </fieldset>
                      </div>
                      <div class="col-lg-2">
                        <fieldset>
                          <button type="submit" id="form-submit" class="main-dark-button"><i class="fa fa-paper-plane"></i></button>
                        </fieldset>
                      </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-6 pt-5">
                <div class="row">
                    <div class="col-6">
                        <ul>
                            <li>Store Location:<br><p>Sunny Isles Beach, FL 33160, United States</p></li>
                            <li>Phone:<br><p>010-020-0340</p></li>
                            <li>Office Location:<br><p>North Miami Beach</p></li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <ul>
                            <li>Work Hours:<br><p>07:30 AM - 9:30 PM Daily</p></li>
                            <li>Email:<br><p>info@company.com</p></li>
                            <li>Social Media:<br><span><a href="#">Facebook</a>, <a href="#">Instagram</a>, <a href="#">Behance</a>, <a href="#">Linkedin</a></span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </div>
   <!-- news leltter end here -->
 

  <!-- Footer section -->
  
  <footer class="mainfooter" style="background-color: #131921;margin-top: 15px;" role="contentinfo">  
  <div class="footer-middle">  
  <div class="container">  
    <div class="row pb-5">  
      <div class="col-md-3 col-sm-6 col-lg-3">  
        <div class="footer-pad">  
          <h4 style="color: #fff;">Payment Getway</h4>  
          <ul class="list-unstyled" style="width: 180px;">  
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
        <div class="footer-pad">  
          <h4 style="color: #fff;">Quick Links</h4>  
          <ul class="list-unstyled" style="width: 150px;">  
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
        <div class="footer-pad">  
          <h4 style="color: #fff;"> Contact Us </h4>  
          <ul class="list-unstyled" style="width: 150px;">  
            <li> <a href="#"> Parks </a> </li>  
            <li> <a href="#"> Public Works </a> </li>  
            <li> <a href="#"> Department</a> </li>  
            <li> <a href="#"> Hero Fire </a> </li>  
            <li> <a href="#"> City Council </a> </li>  
          </ul>  
        </div>  
      </div>  
        <div class="col-md-3 col-lg-3">  
            <h4 class="pb-2" style="color: #fff;"> Follow Us </h4>  
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

    <script src="JS/tab-pils.js"></script>
   <script src="JS/plus_minus.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="JS/index.js">
    <!-- Scripts -->
  <script src="JQuery/app.js" charset="utf-8"></script>


  <!-- togglelbar -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="https://kit.fontawesome.com/e747e308d6.js" crossorigin="anonymous"></script>

</body>
</html>