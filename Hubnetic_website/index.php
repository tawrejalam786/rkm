<?php

include("../Includes/connection.php");
include("../Admin_Hubnetic/include/allfunction.php");


$nameError=$emailError=" ";

if(isset($_POST['submit']))
{

	if(empty($_POST['name']))
	{
		$nameError="Name Field is required";
	} else{
		$name = test_input($_POST["name"]);
		if(!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
			$nameError = "Only letters and whitespaces are allowed";
		}
	}

	if(empty($_POST['email']))
   {

    $emailError="Email Field is required";

   } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailError = "Invalid email format";
    }
  }



    $data=array(
        "name"=>"'".$_POST['name']."'",
        "email"=>"'".$_POST['email']."'"
    );

    insert($data,'contact');
}

function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="Images/Favicon/online-shop.png">
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

 
  <!-- Slider Wrapper -->
   <section class="sl"> 
  
   <div class="css-slider-wrapper">
   <input type="radio" name="slider" class="slide-radio1" checked id="slider_1"/>
     <input type="radio" name="slider" class="slide-radio2" id="slider_2" />
     <input type="radio" name="slider" class="slide-radio3" id="slider_3" />
     <input type="radio" name="slider" class="slide-radio4" id="slider_4" />  
     <!-- Slider Pagination -->
     <div class="slider-pagination">
       <label for="slider_1" class="page1"></label>
       <label for="slider_2" class="page2"></label>
       <label for="slider_3" class="page3"></label>
       <label for="slider_4" class="page4"></label>
      </div>  
   <?php

$i = 1; 
$result = mysqli_query($connection,"SELECT * FROM slider WHERE image != '' AND status = '1'");
                while($data=mysqli_fetch_array($result))
                {
                    ?>


     <!-- Slider #1 -->
     
       <div class="slider slide-<?php echo $i;?>">
       <img src="../Admin_Hubnetic/uploads/Slider/<?php echo $data['image']; ?>" alt="" title="" />
       
       <div class="slider-content">
         <h4><?php echo $data['subheading']; ?></h4>
         <h2><?php echo $data['heading']; ?></h2>
          <button type="button" class="buy-now-btn" name="button"> <?php echo $data['Amount']; ?></button>
       </div>
       <div class="number-pagination">
         <span>1</span>
       </div>
     </div> 
    
     

     <?php $i++; } ?>
     
   </div>
   
   
</section> 



  <!-- New products -->
<div class="product-section">
  <div class="container-fluid">
    <div class="tab-container">
      <div class="tab-filter-container col-lg-12 col-md-12">
        <li class="filter-btn active" data-tab="web-design">
          <ion-icon name="desktop-outline"></ion-icon>
         Brands
        </li>
        <li class="filter-btn" data-tab="web-development">
          <ion-icon name="logo-nodejs"></ion-icon>
          Men
        </li>
        <li class="filter-btn" data-tab="ux-design">
          <ion-icon name="diamond-outline"></ion-icon>
          Women
        </li>
        <li class="filter-btn" data-tab="app-development">
          <ion-icon name="logo-google-playstore"></ion-icon>
          Baby
        </li>

        <li class="filter-btn" data-tab="Electronics">
          <ion-icon name="logo-google-playstore"></ion-icon>
          Electronics
        </li>

      </div>
      <!-- 1 -->
      <div class="tab-filter-item-container"> 
        <div class="tab-item web-design select_tab">
          <div class="tab-content-left">
            <div class="brands" style="width: 400px;display: flex;">
              <a href="Product.php">
                <img src="Images/Brands/boat-company-logo.jpg" width="300px" height="152px" alt="">
              </a>
              <a href="Product.php">
                <img src="Images/Brands/boat-company-logo.jpg" width="300px" class="pl-2" alt="">
              </a>
            </div>

            <div class="brands" style="width: 400px;display: flex;">
              <a href="Product.php">
                <img src="Images/Brands/boat-company-logo.jpg" width="300px" height="152px" alt="">
              </a>
              <a href="Product.php">
                <img src="Images/Brands/boat-company-logo.jpg" width="300px" class="pl-2" alt="">
              </a>
            </div>

          </div>

          <div class="tab-content-right">
            <div class="brands" style="width: 400px;display: flex;">
              <a href="Product.php">
                <img src="Images/Brands/boat-company-logo.jpg" width="300px" height="152px" alt="">
              </a>
              <a href="Product.php">
                <img src="Images/Brands/boat-company-logo.jpg" width="300px" class="pl-2" alt="">
              </a>
            </div>
            <div class="brands" style="width: 400px;display: flex;">
              <a href="Product.php">
                <img src="Images/Brands/boat-company-logo.jpg" width="300px" alt="">
              </a>
              <a href="Product.php">
                <img src="Images/Brands/boat-company-logo.jpg" width="300px" class="pl-2" alt="">
              </a>
            </div>


          </div>
        </div>
        <!-- 1 -->
        <div class="tab-item web-development">
          <div class="tab-content-left">
           <div class="brands" style="width: 400px;display: flex;">
              <a href="Product.php">
                <img src="Images/Brands/boat-company-logo.jpg" width="300px" height="152px" alt="">
              </a>
              <a href="Product.php">
                <img src="Images/Brands/boat-company-logo.jpg" width="300px" class="pl-2" alt="">
              </a>
            </div>

            <div class="brands" style="width: 400px;display: flex;">
              <a href="Product.php">
                <img src="Images/Brands/boat-company-logo.jpg" width="300px" height="152px" alt="">
              </a>
              <a href="Product.php">
                <img src="Images/Brands/boat-company-logo.jpg" width="300px" class="pl-2" alt="">
              </a>
            </div>

          </div>
          <div class="tab-content-right">
           <div class="brands" style="width: 400px;display: flex;">
              <a href="Product.php">
                <img src="Images/Brands/boat-company-logo.jpg" width="300px" height="152px" alt="">
              </a>
              <a href="Product.php">
                <img src="Images/Brands/boat-company-logo.jpg" width="300px" class="pl-2" alt="">
              </a>
            </div>

            <div class="brands" style="width: 400px;display: flex;">
              <a href="Product.php">
                <img src="Images/Brands/boat-company-logo.jpg" width="300px" height="152px" alt="">
              </a>
              <a href="Product.php">
                <img src="Images/Brands/boat-company-logo.jpg" width="300px" class="pl-2" alt="">
              </a>
            </div>

          </div>
        </div>
        <div class="tab-item ux-design">
          <div class="tab-content-left">
          <div class="brands" style="width: 400px;display: flex;">
              <a href="Product.php">
                <img src="Images/Brands/boat-company-logo.jpg" width="300px" height="152px" alt="">
              </a>
              <a href="Product.php">
                <img src="Images/Brands/boat-company-logo.jpg" width="300px" class="pl-2" alt="">
              </a>
            </div>

            <div class="brands" style="width: 400px;display: flex;">
              <a href="Product.php">
                <img src="Images/Brands/boat-company-logo.jpg" width="300px" height="152px" alt="">
              </a>
              <a href="Product.php">
                <img src="Images/Brands/boat-company-logo.jpg" width="300px" class="pl-2" alt="">
              </a>
            </div>
          </div>
          <div class="tab-content-right">
          <div class="brands" style="width: 400px;display: flex;">
              <a href="Product.php">
                <img src="Images/Brands/boat-company-logo.jpg" width="300px" height="152px" alt="">
              </a>
              <a href="Product.php">
                <img src="Images/Brands/boat-company-logo.jpg" width="300px" class="pl-2" alt="">
              </a>
            </div>

            <div class="brands" style="width: 400px;display: flex;">
              <a href="Product.php">
                <img src="Images/Brands/boat-company-logo.jpg" width="300px" height="152px" alt="">
              </a>
              <a href="Product.php">
                <img src="Images/Brands/boat-company-logo.jpg" width="300px" class="pl-2" alt="">
              </a>
            </div>
          </div>
        </div>
        <div class="tab-item app-development">
          <div class="tab-content-left">
          <div class="brands" style="width: 400px;display: flex;">
              <a href="Product.php">
                <img src="Images/Brands/boat-company-logo.jpg" width="300px" height="152px" alt="">
              </a>
              <a href="Product.php">
                <img src="Images/Brands/boat-company-logo.jpg" width="300px" class="pl-2" alt="">
              </a>
            </div>

            <div class="brands" style="width: 400px;display: flex;">
              <a href="Product.php">
                <img src="Images/Brands/boat-company-logo.jpg" width="300px" height="152px" alt="">
              </a>
              <a href="Product.php">
                <img src="Images/Brands/boat-company-logo.jpg" width="300px" class="pl-2" alt="">
              </a>
            </div>
          </div>
          <div class="tab-content-right">
          <div class="brands" style="width: 400px;display: flex;">
              <a href="Product.php">
                <img src="Images/Brands/boat-company-logo.jpg" width="300px" height="152px" alt="">
              </a>
              <a href="Product.php">
                <img src="Images/Brands/boat-company-logo.jpg" width="300px" class="pl-2" alt="">
              </a>
            </div>

            <div class="brands" style="width: 400px;display: flex;">
              <a href="Product.php">
                <img src="Images/Brands/boat-company-logo.jpg" width="300px" height="152px" alt="">
              </a>
              <a href="Product.php">
                <img src="Images/Brands/boat-company-logo.jpg" width="300px" class="pl-2" alt="">
              </a>
            </div>
          </div>
        </div>
        <div class="tab-item Electronics">
          <div class="tab-content-left">
          <div class="brands" style="width: 400px;display: flex;">
              <a href="Product.php">
                <img src="Images/Brands/boat-company-logo.jpg" width="300px" height="152px" alt="">
              </a>
              <a href="Product.php">
                <img src="Images/Brands/boat-company-logo.jpg" width="300px" class="pl-2" alt="">
              </a>
            </div>

            <div class="brands" style="width: 400px;display: flex;">
              <a href="Product.php">
                <img src="Images/Brands/boat-company-logo.jpg" width="300px" height="152px" alt="">
              </a>
              <a href="Product.php">
                <img src="Images/Brands/boat-company-logo.jpg" width="300px" class="pl-2" alt="">
              </a>
            </div>
          </div>
          <div class="tab-content-right">
          <div class="brands" style="width: 400px;display: flex;">
              <a href="Product.php">
                <img src="Images/Brands/boat-company-logo.jpg" width="300px" height="152px" alt="">
              </a>
              <a href="Product.php">
                <img src="Images/Brands/boat-company-logo.jpg" width="300px" class="pl-2" alt="">
              </a>
            </div>

            <div class="brands" style="width: 400px;display: flex;">
              <a href="Product.php">
                <img src="Images/Brands/boat-company-logo.jpg" width="300px" height="152px" alt="">
              </a>
              <a href="Product.php">
                <img src="Images/Brands/boat-company-logo.jpg" width="300px" class="pl-2" alt="">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
           
<!--Brand category end here -->

<!-- infinity carousel -->
   <section class="carouselt">

  <div class="container-fluid px-0">
    <div class="row">
      <div class="col-12">
        <div class="carousel__wrapper">
          <div class="carousel__slide">           
            <div class="carousel__image">
           <img src="Images/category/All Products/01.jpg" width="400px" alt="">
           
           <div class="title2">
        <p class="content-title2">Round Neck T-shirt</p>
        <p class="content-amount2">Rs.2500</p>
        <div class="bton2">
          <div class="button2 pb-2"><a href="#">Buy Now</a>
          </div>
          <div class="button2"><a href="#">Add Cart</a>
          </div>
        </div>
      </div>
      <div class="image_overlay2"></div>

            </div>
          </div>

          <div class="carousel__slide">
            
            <div class="carousel__image">
              
            <img src="Images/category/All Products/02.jpg" width="400px" alt="">
              <div class="title2">
        <p class="content-title2">Round Neck T-shirt</p>
        <p class="content-amount2">Rs.2500</p>
        <div class="bton2">
          <div class="button2 pb-2"><a href="#">Buy Now</a>
          </div>
          <div class="button2"><a href="#">Add Cart</a>
          </div>
        </div>
      </div>
      <div class="image_overlay2"></div>

            </div>
          </div>

          <div class="carousel__slide">
           
            <div class="carousel__image">
              <img src="Images/category/All Products/03.jpg" width="400px" alt="">
              
            </div>
          </div>

          <div class="carousel__slide">
          
            <div class="carousel__image">
              <img src="Images/category/All Products/04.jpg" width="400px" alt="">
            </div>
          </div>

          <div class="carousel__slide">
           
            <div class="carousel__image">
              <img src="Images/category/All Products/05.jpg" width="400px" alt="">
            </div>
          </div>

          <div class="carousel__slide">
            
            <div class="carousel__image">
              <img src="Images/category/All Products/06.jpg" width="400px" alt="">
            </div>
          </div> -->
 
          <!--#### repeat ####-->
            <div class="carousel__slide">
           
            <div class="carousel__image">
              <img src="Images/category/All Products/07.jpg" width="400px" alt="">
            </div>
          </div>

          <div class="carousel__slide">
           
            <div class="carousel__image">
              <img src="Images/category/All Products/07.jpg" width="400px" alt="">
            </div>
          </div>

          <div class="carousel__slide">
            
            <div class="carousel__image">
              <img src="Images/category/All Products/08.jpg" width="400px" alt="">
            </div>
          </div>

          <div class="carousel__slide">
           
            <div class="carousel__image">
              <img src="Images/category/All Products/09.jpg" width="400px" alt="">
            </div>
          </div>

          <div class="carousel__slide">
           
            <div class="carousel__image">
              <img src="Images/category/All Products/10.jpg" width="400px" alt="">
            </div>
          </div>

          <div class="carousel__slide">
            
            <div class="carousel__image">
              <img src="Images/category/All Products/11.jpg" width="400px" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> 

<!-- infinity slider end here -->

<!-- slick product slider -->
<div class="container-fluid">



  <h1 class="mt-4"><!-- <?php echo $data['Best_deal']; ?> -->Best Selling Product</h1>
  <div class="productslide">
  <?php
				$carousel= whiledata('carousel_product');

				while($data=mysqli_fetch_array($carousel))
				{ ?>
    <div class="product_slider">
      <img src="../Admin_Hubnetic/uploads/carousel_image/<?php echo $data['image']; ?>" alt="" title="" />
      <div class="title">
      
        <p class="content-title"><?php echo $data['product_title']; ?></p>
        <p class="content-amount"><?php echo $data['product_amount']; ?></p>
        <div class="bton">
          <div class="button pb-2"><a href="<?php echo $data['product_url']; ?>">Buy Now</a>
          </div>
          <div class="button"><a href="<?php echo $data['product_url']; ?>">Add Cart</a>
          </div>
        </div>

      </div>
      <div class="image_overlay"></div>
    </div>
    <?php } ?>
    <!-- <div class="product_slider">
      <img src="Images/category/All Products/shop2.jpg" alt="">
      <div class="title">
        <p class="content-title">Round Neck T-shirt</p>
        <p class="content-amount">Rs.2500</p>
        <div class="bton">
          <div class="button pb-2"><a href="#">Buy Now</a>
          </div>
          <div class="button"><a href="#">Add Cart</a>
          </div>
        </div>
      </div>
      <div class="image_overlay"></div>
    </div> -->

    <!-- <div class="product_slider">
      <img src="Images/category/All Products/shop3.jpg" alt="">
      <div class="title">
        <p class="content-title">Round Neck T-shirt</p>
        <p class="content-amount">Rs.2500</p>
        <div class="bton">
          <div class="button pb-2"><a href="#">Buy Now</a>
          </div>
          <div class="button"><a href="#">Add Cart</a>
          </div>
        </div>
      </div>
      <div class="image_overlay"></div>
    </div> -->

    <!-- <div class="product_slider">
      <img src="Images/category/All Products/shop4.jpg" alt="">
      <div class="title">
        <p class="content-title">Round Neck T-shirt</p>
        <p class="content-amount">Rs.2500</p>
        <div class="bton">
          <div class="button pb-2"><a href="#">Buy Now</a>
          </div>
          <div class="button"><a href="#">Add Cart</a>
          </div>
        </div>
      </div>
      <div class="image_overlay"></div>
    </div> -->
  </div>
 
  
  </div>


<!-- slick product slider End here -->
  
  <section>
    <div class="container-fluid">
      <div class="row h-100 g-0">
        <div class="col-lg-6 col-md-6 col-sm-6">
        <?php
				$exclusive= whiledata('new_collection');

				while($data=mysqli_fetch_array($exclusive))
				{ ?>
          <div class="bg-300 p-4 h-100 d-flex flex-column justify-content-center">
            <h4 class="text-800"><?php echo $data['title']; ?></h4>
            <h2 class="fw-semi-bold lh-sm fs-4 fs-lg-5 fs-xl-6 text-left" style="color: #131921;"><?php echo $data['heading']; ?></h2>
            <p class="mb-5 fs-1"><?php echo $data['description']; ?></p>
            <div class="d-grid gap-2 d-md-block"><a class="btn btn-lg btn-dark" href="<?php echo $data['explore_url']; ?>" role="button" style="color: #245632;">Explore</a></div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="card card-span h-100 text-white"><img class="card-img h-100" src="../Admin_Hubnetic/uploads/Exclusive Collection/<?php echo $data['image']; ?>" alt="" title="" />
            <div class="card-img-overlay bg-dark-gradient">
              <div class="d-flex align-items-end justify-content-center h-100">
                <a class="btn btn-lg text-light fs-1" href="<?php echo $data['product_url']; ?>" role="button" style="background-color: #245632;font-weight: 600;">Go For This</a>
                </div>
            </div>
          </div>
        </div>
        <?php } ?>
      </div>

    
      <div class="row h-100 g-2 py-1">
        <div class="col-md-4">
        <?php
				$exclusive= whiledata('exlusive_product');

				while($data=mysqli_fetch_array($exclusive))
				{ ?>
          <div class="card card-span h-100 text-white"><img class="card-img h-100" src="../Admin_Hubnetic/uploads/Exclusive Collection/<?php echo $data['image']; ?>" alt="" title="" />
            <div class="card-img-overlay bg-dark-gradient">
              <div class="d-flex align-items-end justify-content-center h-100"><a class="btn btn-lg text-light fs-1" href="<?php echo $data['product_link']; ?>" role="button" style="background-color: #245632;font-weight: 600;"><?php echo $data['Text']; ?>
                 </a></div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-span h-100 text-white"><img class="card-img h-100" src="../Admin_Hubnetic/uploads/Exclusive Collection/<?php echo $data['image']; ?>" alt="" title="" />
            <div class="card-img-overlay bg-dark-gradient">
              <div class="d-flex align-items-end justify-content-center h-100"><a class="btn btn-lg text-light fs-1" href="<?php echo $data['product_link']; ?>" role="button" style="background-color: #245632;font-weight: 600;"><?php echo $data['Text']; ?>
                 </a></div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-span h-100 text-white"><img class="card-img h-100" src="../Admin_Hubnetic/uploads/Exclusive Collection/<?php echo $data['image']; ?>" alt="" title="" />
            <div class="card-img-overlay bg-dark-gradient">
              <div class="d-flex align-items-end justify-content-center h-100"><a class="btn btn-lg text-light fs-1" href="<?php echo $data['product_link']; ?>" role="button" style="background-color: #245632;font-weight: 600;"><?php echo $data['Text']; ?>
                 </a></div>
            </div>
          </div>
        </div>
        <?php } ?>
      </div>

    
      <!-- <div class="row h-100 g-2 py-1"></div> -->
    </div>
  </section>

  <section class="py-0 pt-4 pb-4">
    <div class="container-fluid">
      <div class="row h-100">
        <div class="col-lg-7 mx-auto text-center mb-6">
          <h1 class="fs-3 fs-lg-5 lh-sm mb-4 mt-3">Checkout New Arrivals</h1>
        </div>
        <div class="productslide">
          <div class="product_slider">
            <img src="Images/category/All Products/shop1.jpg" alt="">
            <div class="title">
              <p class="content-title">Round Neck T-shirt</p>
              <p class="content-amount">Rs.2500</p>
              <div class="bton">
                <div class="button pb-2"><a href="#">Buy Now</a>
                </div>
                <div class="button"><a href="#">Add Cart</a>
                </div>
              </div>
            </div>
            <div class="image_overlay"></div>
          </div>
          
          <div class="product_slider">
            <img src="Images/category/All Products/shop2.jpg" alt="">
            <div class="title">
              <p class="content-title">Round Neck T-shirt</p>
              <p class="content-amount">Rs.2500</p>
              <div class="bton">
                <div class="button pb-2"><a href="#">Buy Now</a>
                </div>
                <div class="button"><a href="#">Add Cart</a>
                </div>
              </div>
            </div>
            <div class="image_overlay"></div>
          </div>

          <div class="product_slider">
            <img src="Images/category/All Products/shop3.jpg" alt="">
            <div class="title">
              <p class="content-title">Round Neck T-shirt</p>
              <p class="content-amount">Rs.2500</p>
              <div class="bton">
                <div class="button pb-2"><a href="#">Buy Now</a>
                </div>
                <div class="button"><a href="#">Add Cart</a>
                </div>
              </div>
            </div>
            <div class="image_overlay"></div>
          </div>
          <div class="product_slider">
            <img src="Images/category/All Products/shop4.jpg" alt="">
            <div class="title">
              <p class="content-title">Round Neck T-shirt</p>
              <p class="content-amount">Rs.2500</p>
              <div class="bton">
                <div class="button pb-2"><a href="#">Buy Now</a>
                </div>
                <div class="button"><a href="#">Add Cart</a>
                </div>
              </div>
            </div>
            <div class="image_overlay"></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>

    <div class="container-fluid pt-3 mb-3">
    <?php
				$accesorries= whiledata('accesorries');

				while($data=mysqli_fetch_array($accesorries))
				{ ?>
      <div class="col-lg-7 mx-auto text-center mb-6">
        <h1 class="fs-3 fs-lg-5 lh-sm mb-4 mt-3"><?php echo $data['heading']; ?></h1>
      </div>
      <div class="row h-100 g-0">
        <div class="col-md-6">
          <div class="bg-300 p-4 h-100 d-flex flex-column justify-content-center">
            <h1 class="fw-semi-bold lh-sm fs-4 fs-lg-5 fs-xl-6"> <?php echo $data['subheading']; ?> </h1>
            <p class="mb-3 fs-1 pt-4"><?php echo $data['description']; ?></p>
            <div class="d-grid gap-2 d-md-block"><a class="btn btn-lg btn-dark" href="<?php echo $data['product_link']; ?>" role="button" style="background-color: chocolate;">Explore Collection</a></div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card card-span h-100 text-white">
            <img class="card-img h-100" src="../Admin_Hubnetic/uploads/Accesorries/<?php echo $data['image']; ?>" alt="" title="" />
            <a class="stretched-link" href="<?php echo $data['product_link']; ?>"></a>
          </div>
        </div>
      </div>
      <?php } ?>
    </div>
    <!-- end of .container-->

  </section>


  <!-- Testimonial Section -->
  <div class="container-fluid px-2 px-md-4 py-5 mx-auto">  
    <div class="row d-flex justify-content-center">  
        <div class="col-md-10 col-lg-9 col-xl-8"> 
          <div class="col-lg-7 mx-auto text-center mb-6">
            <h1 class="fs-3 fs-lg-5 lh-sm mb-4 mt-3">Testimonial</h1>
          </div> 
            <div class="card card-main border-0 text-center">  
                <h5 class="font-weight-bold mb-4"> Our Customer Reviews </h5>  
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">  
                    <ol class="carousel-indicators">  
                        <li data-target="#carouselExampleIndicators" data-slide-to="0"> </li>  
                        <li data-target="#carouselExampleIndicators" data-slide-to="1" class="active"> </li>  
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"> </li>  
                    </ol>  
                    <div class="carousel-inner">  
                        <div class="carousel-item">  
                            <div class="card border-0 card-0">  
                                <div class="card profile py-3 px-4">  
                                    <div class="text-center"> <img src="Images/Profile img/blog-header-3.png" class="img-fluid profile-pic"> </div>  
                                    <h6 class="mb-0 mt-2"> Client1 </h6>   
                                </div> <img class="img-fluid open-quotes" src="Images/Profile img/quote-top.jpg" width="20" height="20">  
                                <p class="content mb-0"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p> 
                                <img class="img-fluid close-quotes ml-auto" src="Images/Profile img/quote-bottom.jpg" width="20" height="20">  
                            </div>  
                        </div>  
                        <div class="carousel-item active">  
                            <div class="card border-0 card-0">  
                                <div class="card profile py-3 px-4">  
                                    <div class="text-center">   
                                 <img src="Images/Profile img/fkoh8z8xfai88jpuv8c1ua4ua2ll6zcl.jpg" class="img-fluid profile-pic"> </div>  
                                    <h6 class="mb-0 mt-2"> Client2 </h6> </div> <img class="img-fluid open-quotes" src="Images/Profile img/quote-top.jpg" width="20" height="20">  
                                <p class="content mb-0"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p> 
                                <img class="img-fluid close-quotes ml-auto" src="Images/Profile img/quote-bottom.jpg" width="20" height="20">  
                            </div>  
                        </div>  
                        <div class="carousel-item">  
                            <div class="card border-0 card-0">  
                                <div class="card profile py-3 px-4">  
                              <div class="text-center"> <img src="Images/Profile img/photo-1535643302794-19c3804b874b.jfif" class="img-fluid profile-pic"> </div>  
                                    <h6 class="mb-0 mt-2"> Client3 </h6> </div>   
                                        <img class="img-fluid open-quotes" src="Images/Profile img/quote-top.jpg" width="20" height="20">  
                                <p class="content mb-0"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>  
                                   <img class="img-fluid close-quotes ml-auto" src="Images/Profile img/quote-bottom.jpg" width="20" height="20">  
                            </div>  
                        </div>  
                    </div>  
                </div>  
            </div>  
        </div>  
    </div>  
</div>  
  <!-- Testimonial End Here -->

  <!-- news letter start here -->
  <div class="subscribe pb-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-heading">
                    <h2>By Subscribing To Our Newsletter You Can Get 30% Off</h2>
                    <span>Details to details is what makes Hexashop different from the other themes.</span>
                </div>
                <form id="subscribe" action="" method="post">
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
                            <li>Store Location:<br><p>Shakurpur Basti, Shree Nagar</p></li>
                            <li>Phone:<br><p>7838195948</p></li>
                            <li>Office Location:<br><p>Shakurpur Basti, Shree Nagar</p></li>
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
      <div class="col-md-3 col-sm-6 col-lg-3 pt-3">  
        <div class="footer-pad">  
          <h4>Payment Getway</h4>  
          <ul class="list-unstyled" style="width: 170px;">  
            <li> <a href="#"> </a> </li>  
            <li> <a href="#">Payment Center</a></li>  
            <li> <a href="#"> Contact Directory </a></li>  
            <li> <a href="#">Forms</a></li>  
            <li> <a href="#">News and Updates</a></li>  
            <li> <a href="#">FAQs</a></li>  
          </ul>  
        </div>  
      </div>  
      <div class="col-md-3 col-sm-6 col-lg-3 pt-3">  
        <div class="footer-pad">  
          <h4>Quick Links</h4>  
          <ul class="list-unstyled" style="width: 130px;">  
            <li><a href="#"> Blog </a> </li>  
            <li><a href="#">Accessibility</a> </li>  
            <li><a href="#">Disclaimer</a></li>  
            <li><a href="#">Privacy Policy</a></li>  
            <li><a href="#">FAQs</a></li>  
            <li><a href="#">Webmaster hero</a></li>  
          </ul>  
        </div>  
      </div>  
      <div class="col-md-3 col-sm-6 col-lg-3 pt-3">  
        <div class="footer-pad">  
          <h4> Contact Us </h4>  
          <ul class="list-unstyled" style="width: 120px;">  
            <li> <a href="#"> Parks </a> </li>  
            <li> <a href="#"> Public Works </a> </li>  
            <li> <a href="#"> Department</a> </li>  
            <li> <a href="#"> Hero Fire </a> </li>  
            <li> <a href="#"> City Council </a> </li>  
          </ul>  
        </div>  
      </div>  
        <div class="col-md-3 col-lg-3 pt-3">  
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


<script>
  $(document).ready(function(){
    $('.productslide').slick({
      infinite: true,
      slidesToShow: 3,
      autoplay: true,
      autoplaySpeed: 3000,
      slidesToScroll: 4
});
  });
</script>


 <!-- Popup for website -->
 <script id='pixel-script-poptin' src='https://cdn.popt.in/pixel.js?id=2f61e6416fcd5' async='true'></script> 
 <!-- Popup end here -->

    <script src="JS/tab-pils.js"></script>
    <!-- jquery back to top button -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="JS/back-to-top.js"></script>
    <!-- jquery back to top end -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="JS/index.js">
    <!-- Scripts -->
  <script src="JQuery/app.js" charset="utf-8"></script>

  <!-- Jquery for carousle slick slider -->
        <script src="JS/jquery-3.6.4.min.js"></script>
        <script src="JS/slick.min.js"></script>
  <!-- Jquery end here for slick slider -->

  <!-- togglelbar -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="https://kit.fontawesome.com/e747e308d6.js" crossorigin="anonymous"></script>

</body>
</html>