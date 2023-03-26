

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="./Images/Favicon/online-shop.png">
    <title>Home | Hubnetic Store</title>
    <!-- Boostrap4 cdn links -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/index.css">
    <link rel="stylesheet" href="CSS/Infinity.css">
    <link rel="stylesheet" href="JQuery/style.css" />
    <link rel="stylesheet" href="CSS/backTop.css">
    <link rel="stylesheet" href="CSS/slick.css" />
    <link rel="stylesheet" href="CSS/slick-theme.css">
    <link rel="stylesheet" href="CSS/stylecarousel.css">
    <link rel="stylesheet" href="CSS/whatsapp.css">
     <script src="JS/main.js"></script> 

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script>  
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"> </script>  
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"> </script>  
      <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" > 

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet" />

 </head>
<body>
<!-- Back to top -->
  <a href="javascript:void(0);" id="backToTop" class="back-to-top">
    <i class="arrow"></i><i class="arrow"></i>
  </a>
  <!-- back to top end -->

  <!-- whatsapp icon support -->

  <a href="whatsapp.com" class="float" style="text-decoration: none;color: #fff;" target="">
    <i class="fa fa-whatsapp my-float"></i>
    </a>

  <!-- end whatsapp support -->

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
                           <p><a href="registration.php" target="_blank" style="text-decoration: none;">Register</a></p>
                          <p><a href="login.php" target="_blank" style="text-decoration: none;">Login</a></p>
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
            <img src="Images/Slider/icons8-hamburger-menu-24.png" width="19px" alt=""> <span style="font-size: 1.1rem;color: #fff;font-weight: 700;margin-bottom: 30px;">Category</span>
     
      </div>
          <div class="hamburger">
            <span class="" style="font-size: 1.1rem;color: #fff;font-weight: 700;"><!-- Menu --></span>
            
              <span style="color: #fff;font-weight: 500;padding: 5px 10px;"><i class="fa-solid fa-user" style="margin-right: 5px;"></i>My Account</span>
              
            
          </div>
      
            <div class="nav__link hide">
            <a href="index.php">home</a>
            <a href="about.php">about</a>
            <a href="Contact.php">contact</a>
            <a href="Product.php">products</a>
            <a href="tracking.php">tracking</a>
          </div>

          <div class="nav__link2 d-lg-none d-md-none hide">
            <a href="login_with_otp.php">Login</a>
            <a href="registration.php">Register</a>
            <a href="login.php">Profile</a>
            <a href="shopping_cart.php">My Cart</a>
            <a href="wishlist.php">My Whishlist</a>
            <a href="tracking.php">Tracking</a>
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
                  <li><a href="Product.php">Watches</a></li>
                  <li><a href="Product.php">Iphones</a></li>
                  <li><a href="Product.php">Android Phones</a></li>
                  <li><a href="about.php">about</a></li>
                  <li><a href="Contact.php">contact</a></li>
                  <li><a href="Product.php">products</a></li>
                  <li> <a href="shopping_cart.php"><i class="fa-solid fa-cart-shopping" style="margin-right: 5px;"></i>Cart</a></li>
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
const navLink = document.querySelector('.nav__link2');

hamburger.addEventListener('click', () => {
  navLink.classList.toggle('hide');

  });

  hamburgers.addEventListener('click', () => {
  navLinks.classList.toggle('hide');

});


</script>  

<!-- menu section end -->