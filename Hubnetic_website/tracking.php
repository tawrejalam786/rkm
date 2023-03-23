<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon Icon -->
    <link rel="shortcut icon" href="Images/Favicon/online-shop.png" type="image/x-icon">
    <title>Track Order | Hubnetic Store</title>

 <!-- CSS links -->
 <link rel="stylesheet" href="CSS/index.css">
 <link rel="stylesheet" href="JQuery/style.css" />

 

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
                              <img src="/Images/Favicon/online-shop.png" width="40px" alt=""> 
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
    <div id="banner" style="background: url('Images/category/Headphones/04.jpg') rgba(0,0,0,0.5);background-position: center;background-size: cover;background-blend-mode: multiply;">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="banner-text">
              <p>Electronics Hubnetic Store </p>
              <h5 class="text-center" style="color: #fff;">Track your order from here</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<!-- End Banner section -->

<!-- Tracking Page -->
<section class="tracking" style="background-color: #fff;">
    <div class="container"> 
        <div class="row">
            <div class="col-lg-12">
               <div class="tracking_text">
                <p>To track your order please enter your Order ID in the box below and press the "Track" button. This was given to you on your receipt and in the confirmation email you should have received.</p>
               </div>
            </div>
            <div class="uner">
            <h1 class="treck" style="padding: 0;background-color: white;color: #131921;">Tracking</h1>
          </div>
            <div class="col-lg-12 pt-4">
                <form action="">
                    <label for="order-id">Order Number:</label>
                    <input type="text" placeholder="Enter your order id here..." />

                    <label for="order-id">AWB Number:</label>
                    <input type="text" placeholder="Enter your AWB no here..." />
                    <button type="text" class="btn btn-primary" style="display: block;margin-left: 45%;padding: 12px 30px;font-weight: 600;">Track</button>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Tracking page end here -->


<!-- best product -->
<section class="py-0 pt-4 pb-4">
  <div class="container-fluid">
    <div class="row h-100 pb-4">
      <div class="col-lg-7 mx-auto text-center mb-6">
        <h1 class="fs-3 fs-lg-5 lh-sm mb-4 mt-3" style="padding: 10px;">Checkout New Arrivals</h1>
      </div>
      <div class="col-12">
        <div class="carousel slide" id="carouselNewArrivals" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
              <div class="row h-100 align-items-center g-2">
                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                  <div class="card card-span h-100 text-white"><img class="card-img h-100" src="Images/category/All Products/shop1.jpg" alt="...">
                    <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse">
                      <h6 class="text-primary">$175</h6>
                      <p class="text-400 fs-1">Jumper set for Women</p>
                      <h4 class="text-light">Flat Hill Slingback</h4>
                    </div><a class="stretched-link" href="#"></a>
                  </div>
                </div>
                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                  <div class="card card-span h-100 text-white"><img class="card-img h-100" src="Images/category/All Products/shop2.jpg" alt="...">
                    <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse">
                      <h6 class="text-primary">$175</h6>
                      <p class="text-400 fs-1">Jumper set for Women</p>
                      <h4 class="text-light">Ocean Blue Ring</h4>
                    </div><a class="stretched-link" href="#"></a>
                  </div>
                </div>
                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                  <div class="card card-span h-100 text-white"><img class="card-img h-100" src="Images/category/All Products/shop3.jpg" alt="...">
                    <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse">
                      <h6 class="text-primary">$175</h6>
                      <p class="text-400 fs-1">Jumper set for Women</p>
                      <h4 class="text-light">Brown Leathered Wallet</h4>
                    </div><a class="stretched-link" href="#"></a>
                  </div>
                </div>
                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                  <div class="card card-span h-100 text-white"><img class="card-img h-100" src="Images/category/All Products/shop4.jpg" alt="...">
                    <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse">
                      <h6 class="text-primary">$175</h6>
                      <p class="text-400 fs-1">Jumper set for Women</p>
                      <h4 class="text-light">Silverside Wristwatch</h4>
                    </div><a class="stretched-link" href="#"></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item" data-bs-interval="5000">
              <div class="row h-100 align-items-center g-2">
                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                  <div class="card card-span h-100 text-white"><img class="card-img h-100" src="Images/category/All Products/shop5.jpg" alt="...">
                    <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse">
                      <h6 class="text-primary">$175</h6>
                      <p class="text-400 fs-1">Jumper set for Women</p>
                      <h4 class="text-light">Flat Hill Slingback</h4>
                    </div><a class="stretched-link" href="#"></a>
                  </div>
                </div>
                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                  <div class="card card-span h-100 text-white"><img class="card-img h-100" src="Images/category/All Products/shop6.jpg" alt="...">
                    <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse">
                      <h6 class="text-primary">$175</h6>
                      <p class="text-400 fs-1">Jumper set for Women</p>
                      <h4 class="text-light">Ocean Blue Ring</h4>
                    </div><a class="stretched-link" href="#"></a>
                  </div>
                </div>
                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                  <div class="card card-span h-100 text-white"><img class="card-img h-100" src="Images/category/All Products/shop7.jpg" alt="...">
                    <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse">
                      <h6 class="text-primary">$175</h6>
                      <p class="text-400 fs-1">Jumper set for Women</p>
                      <h4 class="text-light">Brown Leathered Wallet</h4>
                    </div><a class="stretched-link" href="#"></a>
                  </div>
                </div>
                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                  <div class="card card-span h-100 text-white"><img class="card-img h-100" src="Images/category/All Products/shop8.jpg" alt="...">
                    <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse">
                      <h6 class="text-primary">$175</h6>
                      <p class="text-400 fs-1">Jumper set for Women</p>
                      <h4 class="text-light">Silverside Wristwatch</h4>
                    </div><a class="stretched-link" href="#"></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item" data-bs-interval="3000">
              <div class="row h-100 align-items-center g-2">
                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                  <div class="card card-span h-100 text-white"><img class="card-img h-100" src="Images/category/All Products/shop9.jpg" alt="...">
                    <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse">
                      <h6 class="text-primary">$175</h6>
                      <p class="text-400 fs-1">Jumper set for Women</p>
                      <h4 class="text-light">Flat Hill Slingback</h4>
                    </div><a class="stretched-link" href="#"></a>
                  </div>
                </div>
                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                  <div class="card card-span h-100 text-white"><img class="card-img h-100" src="Images/category/All Products/shop10.jpg" alt="...">
                    <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse">
                      <h6 class="text-primary">$175</h6>
                      <p class="text-400 fs-1">Jumper set for Women</p>
                      <h4 class="text-light">Ocean Blue Ring</h4>
                    </div><a class="stretched-link" href="#"></a>
                  </div>
                </div>
                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                  <div class="card card-span h-100 text-white"><img class="card-img h-100" src="Images/category/All Products/shop11.jpg" alt="...">
                    <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse">
                      <h6 class="text-primary">$175</h6>
                      <p class="text-400 fs-1">Jumper set for Women</p>
                      <h4 class="text-light">Brown Leathered Wallet</h4>
                    </div><a class="stretched-link" href="#"></a>
                  </div>
                </div>
                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                  <div class="card card-span h-100 text-white"><img class="card-img h-100" src="Images/category/All Products/shop12.jpg" alt="...">
                    <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse">
                      <h6 class="text-primary">$175</h6>
                      <p class="text-400 fs-1">Jumper set for Women</p>
                      <h4 class="text-light">Silverside Wristwatch</h4>
                    </div><a class="stretched-link" href="#"></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row h-100 align-items-center g-2">
                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                  <div class="card card-span h-100 text-white"><img class="card-img h-100" src="Images/category/All Products/shop13.jpg" alt="...">
                    <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse">
                      <h6 class="text-primary">$175</h6>
                      <p class="text-400 fs-1">Jumper set for Women</p>
                      <h4 class="text-light">Flat Hill Slingback</h4>
                    </div><a class="stretched-link" href="#"></a>
                  </div>
                </div>
                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                  <div class="card card-span h-100 text-white"><img class="card-img h-100" src="Images/category/All Products/shop14.jpg" alt="...">
                    <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse">
                      <h6 class="text-primary">$175</h6>
                      <p class="text-400 fs-1">Jumper set for Women</p>
                      <h4 class="text-light">Ocean Blue Ring</h4>
                    </div><a class="stretched-link" href="#"></a>
                  </div>
                </div>
                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                  <div class="card card-span h-100 text-white"><img class="card-img h-100" src="Images/category/All Products/shop15.jpg" alt="...">
                    <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse">
                      <h6 class="text-primary">$175</h6>
                      <p class="text-400 fs-1">Jumper set for Women</p>
                      <h4 class="text-light">Brown Leathered Wallet</h4>
                    </div><a class="stretched-link" href="#"></a>
                  </div>
                </div>
                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                  <div class="card card-span h-100 text-white"><img class="card-img h-100" src="Images/category/All Products/shop16.jpg" alt="...">
                    <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse">
                      <h6 class="text-primary">$175</h6>
                      <p class="text-400 fs-1">Jumper set for Women</p>
                      <h4 class="text-light">Silverside Wristwatch</h4>
                    </div><a class="stretched-link" href="#"></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselNewArrivals" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselNewArrivals" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next </span></button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <button type="text" class="btn btn-primary" style="display: block;margin: auto;padding: 14px 32px;font-weight: 600;">View All</button>
  </div>
</section>
<!-- best product end here -->



   <!-- Footer section -->
  
   <footer class="mainfooter" style="background-color: #131921;margin-top: 15px;" role="contentinfo">  
    <div class="footer-middle">  
    <div class="container">  
      <div class="row pb-5">  
        <div class="col-md-3 col-sm-6 col-lg-3">  
          <div class="footer-pad">  
            <h4>Payment Getway</h4>  
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
            <h4>Quick Links</h4>  
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
            <h4> Contact Us </h4>  
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
              <h4 class="pb-2"> Follow Us </h4>  
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