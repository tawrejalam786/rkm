
<!doctype html>
<html lang="zxx">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Hubnetic Store | Single Product</title>
<link rel="icon" href="Images/Favicon/online-shop.png">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/bootstrap.min.css">


<link rel="stylesheet" href="CSS/demo.css">

<link rel="stylesheet" href="CSS/product_page.css">
<link rel="stylesheet" href="JQuery/style.css">

<body class="bg-white">

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
              <a href="Blog.php">blog</a>
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
                    <li><a href="#">Mens</a></li>
                    <li><a href="#">Womens</a></li>
                    <li>
    
                        <div class="dropdown2">
                            <span style="color: #fff;font-weight: 500;padding: 5px 10px;">Shoes</span>
                            <div class="dropdown-content2">
                             <p><a href="#" style="text-decoration: none;">Men</a></p>
                            <p><a href="#" style="text-decoration: none;">Women</a></p>
                            </div>
                         </div>
                    </li>
                    <li><a href="">Headphones</a></li>
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


<section class="breadcrumb breadcrumb_bg">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-12">
<div class="breadcrumb_iner">
<div class="breadcrumb_iner_item">
<p>Home/Shop/Single product</p>
</div>
</div>
</div>
</div>
</div>
</section>


<section class="page panel">
    <div class="gallery">
      <div id="photo-viewer"></div>
      <div id="thumbnails">
        <a href="Images/single_product img/photo-1.jpg" class="thumb active" title="Pierre Cardin"><img src="Images/single_product img/thumb-1.jpg" alt="Mens Polo Shirt" /></a>
        <a href="Images/single_product img/photo-2.jpg" class="thumb" title="Pierre Cardin"><img src="Images/single_product img/thumb-2.jpg" alt="Mens Polo Shirt" /></a>
        <a href="Images/single_product img/photo-3.jpg" class="thumb" title="Pierre Cardin"><img src="Images/single_product img/thumb-3.jpg" alt="Mens Polo Shirt" /></a>
        <a href="Images/single_product img/photo-4.jpg" class="thumb" title="Pierre Cardin"><img src="Images/single_product img/thumb-4.jpg" alt="Mens Polo Shirt" /></a>
        <a href="Images/single_product img/photo-5.jpg" class="thumb" title="Pierre Cardin"><img src="Images/single_product img/thumb-5.jpg" alt="Mens Polo Shirt" /></a>
      </div>
    </div>
    <div class="description">
      <p class="standfirst">
        <strong>Pierre Cardin Cut And Sew Polo Shirt Mens</strong>
      </p>
      <p style="font-size: 17px;">
        Designed with a classic fold down collar that features a three button fastening placket, three cut and sew tri-coloured panels, single coloured back and short sleeves.
      </p>
      <p class="pt-3" style="font-size: 18px;"><strong>$10.75</strong>
    </p>
      <form action="#">
      <p class="pt-3" style="font-size: 18px;"><strong>Size:</strong>
        <select class="choice">
          <option value="Small" selected>Small</option>
          <option value="Medium">Medium</option>
          <option value="Large">Large</option>
          <option value="Extra Large">Extra Large</option>
          <option value="XX Large">XX Large</option>
        </select>
      </p>
      <p class="pt-3" style="font-size: 18px;"><strong>COLORS</strong>
        <div class="colors">
        <div class="c-blue"><span></span></div>
        <div class="c-red"><span></span></div>
        <div class="c-white"><span></span></div>
        <div class="c-green"><span></span></div>
        </div></p><br>
      <p class="quantity pt-3 pb-3"><strong>Quantity:</strong> <input class="choice" id="number" type="number" value="1" />
      </p>
    </form>
      <a href="checkout.php" class="btn btn-primary" id="buy">Buy now</a>
    </div>
  </section>



<section class="product_description_area">
<div class="container">
<ul class="nav nav-tabs" style="background: none;box-shadow: none;" id="myTab" role="tablist">
<li class="nav-item">
<a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Description</a>
</li>
<li class="nav-item">
<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Specification</a>
</li>
<li class="nav-item">
<a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Comments</a>
</li>
<li class="nav-item">
<a class="nav-link active" id="review-tab" data-toggle="tab" href="#review" role="tab" aria-controls="review" aria-selected="false">Reviews</a>
</li>
</ul>
<div class="tab-content" id="myTabContent">
<div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
<p>
Beryl Cook is one of Britain’s most talented and amusing artists
.Beryl’s pictures feature women of all shapes and sizes enjoying
themselves .Born between the two world wars, Beryl Cook eventually
left Kendrick School in Reading at the age of 15, where she went
to secretarial school and then into an insurance office. After
moving to London and then Hampton, she eventually married her next
door neighbour from Reading, John Cook. He was an officer in the
Merchant Navy and after he left the sea in 1956, they bought a pub
for a year before John took a job in Southern Rhodesia with a
motor company. Beryl bought their young son a box of watercolours,
and when showing him how to use it, she decided that she herself
quite enjoyed painting. John subsequently bought her a child’s
painting set for her birthday and it was with this that she
produced her first significant work, a half-length portrait of a
dark-skinned lady with a vacant expression and large drooping
breasts. It was aptly named ‘Hangover’ by Beryl’s husband and
</p>
<p>
It is often frustrating to attempt to plan meals that are designed
for one. Despite this fact, we are seeing more and more recipe
books and Internet websites that are dedicated to the act of
cooking for one. Divorce and the death of spouses or grown
children leaving for college are all reasons that someone
accustomed to cooking for more than one would suddenly need to
learn how to adjust all the cooking practices utilized before into
a streamlined plan of cooking that is more efficient for one
person creating less
</p>
</div>
<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
<div class="table-responsive">
<table class="table">
<tbody>
<tr>
<td>
<h5>Width</h5>
</td>
<td>
<h5>128mm</h5>
</td>
</tr>
<tr>
<td>
<h5>Height</h5>
</td>
<td>
<h5>508mm</h5>
</td>
</tr>
<tr>
<td>
<h5>Depth</h5>
</td>
<td>
<h5>85mm</h5>
</td>
</tr>
<tr>
<td>
<h5>Weight</h5>
</td>
<td>
<h5>52gm</h5>
</td>
</tr>
<tr>
<td>
<h5>Quality checking</h5>
</td>
<td>
<h5>yes</h5>
</td>
</tr>
<tr>
<td>
<h5>Freshness Duration</h5>
</td>
<td>
<h5>03days</h5>
</td>
</tr>
<tr>
<td>
<h5>When packeting</h5>
</td>
<td>
<h5>Without touch of hand</h5>
</td>
</tr>
<tr>
<td>
<h5>Each Box contains</h5>
</td>
<td>
<h5>60pcs</h5>
</td>
</tr>
</tbody>
</table>
</div>
</div>
<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
<div class="row">
<div class="col-lg-6">
<div class="comment_list">
<div class="review_item">
<div class="media">
<div class="d-flex">
<img src="/Images/Profile img/arrival-bg.png" width="60px" alt="" />
</div>
<div class="media-body">
<h4>Blake Ruiz</h4>
<h5>12th Feb, 2017 at 05:56 pm</h5>
<a class="reply_btn" href="#">Reply</a>
</div>
</div>
<p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit,
sed do eiusmod tempor incididunt ut labore et dolore magna
aliqua. Ut enim ad minim veniam, quis nostrud exercitation
ullamco laboris nisi ut aliquip ex ea commodo
</p>
</div>
<div class="review_item reply">
<div class="media">
<div class="d-flex">
<img src="Images/Profile img/blog-header-3.png" width="60px" alt="" />
</div>
<div class="media-body">
<h4>Blake Ruiz</h4>
<h5>12th Feb, 2017 at 05:56 pm</h5>
<a class="reply_btn" href="#">Reply</a>
</div>
</div>
<p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit,
sed do eiusmod tempor incididunt ut labore et dolore magna
aliqua. Ut enim ad minim veniam, quis nostrud exercitation
ullamco laboris nisi ut aliquip ex ea commodo
</p>
</div>
<div class="review_item">
<div class="media">
<div class="d-flex">
<img src="Images/Profile img/fkoh8z8xfai88jpuv8c1ua4ua2ll6zcl.jpg" width="60px" alt="" />
</div>
<div class="media-body">
<h4>Blake Ruiz</h4>
<h5>12th Feb, 2017 at 05:56 pm</h5>
<a class="reply_btn" href="#">Reply</a>
</div>
</div>
<p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit,
sed do eiusmod tempor incididunt ut labore et dolore magna
aliqua. Ut enim ad minim veniam, quis nostrud exercitation
ullamco laboris nisi ut aliquip ex ea commodo
</p>
</div>
</div>
</div>
<div class="col-lg-6">
<div class="review_box">
<h4>Post a comment</h4>
<form class="row contact_form" action="" method="post" id="contactForm" novalidate="novalidate">
<div class="col-md-12">
<div class="form-group">
<input type="text" class="form-control" id="name" name="name" placeholder="Your Full name" />
</div>
</div>
<div class="col-md-12">
<div class="form-group">
<input type="email" class="form-control" id="email" name="email" placeholder="Email Address" />
</div>
</div>
<div class="col-md-12">
<div class="form-group">
<input type="text" class="form-control" id="number" name="number" placeholder="Phone Number" />
</div>
</div>
<div class="col-md-12">
<div class="form-group">
<textarea class="form-control" name="message" id="message" rows="1" placeholder="Message"></textarea>
</div>
</div>
<div class="col-md-12 text-right">
<button type="submit" value="submit" class="btn_3">
Submit Now
</button>
</div>
</form>
</div>
</div>
</div>
</div>
<div class="tab-pane fade show active" id="review" role="tabpanel" aria-labelledby="review-tab">
<div class="row">
<div class="col-lg-6">
<div class="row total_rate">
<div class="col-6">
<div class="box_total">
<h5>Overall</h5>
<h4>4.0</h4>
<h6>(03 Reviews)</h6>
</div>
</div>
<div class="col-6">
<div class="rating_list">
<h3>Based on 3 Reviews</h3>
<ul class="list">
<li>
<a href="#">5 Star
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i> 01</a>
</li>
<li>
<a href="#">4 Star
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i> 01</a>
</li>
<li>
<a href="#">3 Star
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i> 01</a>
</li>
<li>
<a href="#">2 Star
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i> 01</a>
</li>
<li>
<a href="#">1 Star
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i> 01</a>
</li>
</ul>
</div>
</div>
</div>
<div class="review_list">
<div class="review_item">
<div class="media">
<div class="d-flex">
<img src="Images/Profile img/fkoh8z8xfai88jpuv8c1ua4ua2ll6zcl.jpg" width="60px" alt="" />
</div>
<div class="media-body">
<h4>Blake Ruiz</h4>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
</div>
</div>
<p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit,
sed do eiusmod tempor incididunt ut labore et dolore magna
aliqua. Ut enim ad minim veniam, quis nostrud exercitation
ullamco laboris nisi ut aliquip ex ea commodo
</p>
</div>
<div class="review_item">
<div class="media">
<div class="d-flex">
<img src="Images/Profile img/blog-header-3.png" width="60px" alt="" />
</div>
<div class="media-body">
<h4>Blake Ruiz</h4>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
</div>
</div>
<p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit,
sed do eiusmod tempor incididunt ut labore et dolore magna
aliqua. Ut enim ad minim veniam, quis nostrud exercitation
ullamco laboris nisi ut aliquip ex ea commodo
</p>
</div>
<div class="review_item">
<div class="media">
<div class="d-flex">
<img src="Images/Profile img/arrival-bg.png" width="60px" alt="" />
</div>
<div class="media-body">
<h4>Blake Ruiz</h4>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
</div>
</div>
<p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit,
sed do eiusmod tempor incididunt ut labore et dolore magna
aliqua. Ut enim ad minim veniam, quis nostrud exercitation
ullamco laboris nisi ut aliquip ex ea commodo
</p>
</div>
</div>
</div>
<div class="col-lg-6">
<div class="review_box">
<h4>Add a Review</h4>
<p>Your Rating:</p>
<ul class="list">
<li>
<a href="#">
<i class="fa fa-star"></i>
</a>
</li>
<li>
<a href="#">
<i class="fa fa-star"></i>
</a>
</li>
<li>
<a href="#">
<i class="fa fa-star"></i>
</a>
</li>
<li>
<a href="#">
<i class="fa fa-star"></i>
</a>
</li>
<li>
<a href="#">
<i class="fa fa-star"></i>
</a>
</li>
</ul>
<p>Outstanding</p>
<form class="row contact_form" action="" method="post" novalidate="novalidate">
<div class="col-md-12">
<div class="form-group">
<input type="text" class="form-control" name="name" placeholder="Your Full name" />
</div>
</div>
<div class="col-md-12">
<div class="form-group">
<input type="email" class="form-control" name="email" placeholder="Email Address" />
</div>
</div>
<div class="col-md-12">
<div class="form-group">
<input type="text" class="form-control" name="number" placeholder="Phone Number" />
</div>
</div>
<div class="col-md-12">
<div class="form-group">
<textarea class="form-control" name="message" rows="1" placeholder="Review"></textarea>
</div>
</div>
<div class="col-md-12 text-right">
<button type="submit" value="submit" class="btn_3">
Submit Now
</button>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</section>


<section class="product_list best_seller padding_bottom">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-12">
<div class="section_tittle text-center">
<h2>Best Sellers</h2>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-3 col-sm-6">
<div class="single_category_product">
<div class="single_category_img">
<img src="Images/category/Shoes/face5.jpg" alt="">
<div class="category_social_icon">
<ul>
<li><a href="#"><i class="ti-heart"></i></a></li>
<li><a href="#"><i class="ti-bag"></i></a></li>
</ul>
</div>
<div class="category_product_text">
<a href="single_product.php"><h5>Long Sleeve TShirt</h5></a>
<p>$150.00</p>
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-sm-6">
<div class="single_category_product">
<div class="single_category_img">
<img src="Images/category/All Products/03.jpg" alt="">
<div class="category_social_icon">
<ul>
<li><a href="#"><i class="ti-heart"></i></a></li>
<li><a href="#"><i class="ti-bag"></i></a></li>
</ul>
</div>
<div class="category_product_text">
<a href="single_product.php"><h5>Long Sleeve TShirt</h5></a>
<p>$150.00</p>
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-sm-6">
<div class="single_category_product">
<div class="single_category_img">
<img src="Images/category/Headphones/gallery00-1200x800.jpg" alt="">
<div class="category_social_icon">
<ul>
<li><a href="#"><i class="ti-heart"></i></a></li>
<li><a href="#"><i class="ti-bag"></i></a></li>
</ul>
</div>
<div class="category_product_text">
<a href="single_product.php"><h5>Long Sleeve TShirt</h5></a>
<p>$150.00</p>
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-sm-6">
<div class="single_category_product">
<div class="single_category_img">
<img src="Images/category/Headphones/gallery02-1200x800.jpg" alt="">
<div class="category_social_icon">
<ul>
<li><a href="#"><i class="ti-heart"></i></a></li>
<li><a href="#"><i class="ti-bag"></i></a></li>
</ul>
</div>
<div class="category_product_text">
<a href="single_product.php"><h5>Long Sleeve TShirt</h5></a>
<p>$150.00</p>
</div>
</div>
</div>
</div>
</div>
</div>
</section>


<section class="shipping_details section_padding border_top">
<div class="container">
<div class="row">
<div class="col-lg-3 col-sm-6">
<div class="single_shopping_details">
<img src="Images/Our Services/service-01.jpg" alt="">
<h4>Free shipping</h4>
<p>Divided face for bearing the divide unto seed winged divided light Forth.</p>
</div>
</div>
<div class="col-lg-3 col-sm-6">
<div class="single_shopping_details">
<img src="Images/Our Services/service-02.jpg" alt="">
<h4>Free shipping</h4>
<p>Divided face for bearing the divide unto seed winged divided light Forth.</p>
</div>
</div>
<div class="col-lg-3 col-sm-6">
<div class="single_shopping_details">
<img src="Images/Our Services/service-03.jpg" alt="">
<h4>Free shipping</h4>
<p>Divided face for bearing the divide unto seed winged divided light Forth.</p>
</div>
</div>
<div class="col-lg-3 col-sm-6">
<div class="single_shopping_details">
<img src="Images/Our Services/service-01.jpg" alt="">
<h4>Free shipping</h4>
<p>Divided face for bearing the divide unto seed winged divided light Forth.</p>
</div>
</div>
</div>
</div>
</section>


<section class="instagram_photo">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12">
<div class="instagram_photo_iner">
<div class="single_instgram_photo">
<img src="img/instagram/inst_1.png" alt="">
<a href="#"><i class="ti-instagram"></i></a>
</div>
<div class="single_instgram_photo">
<img src="img/instagram/inst_2.png" alt="">
<a href="#"><i class="ti-instagram"></i></a>
</div>
<div class="single_instgram_photo">
<img src="img/instagram/inst_3.png" alt="">
<a href="#"><i class="ti-instagram"></i></a>
</div>
<div class="single_instgram_photo">
<img src="img/instagram/inst_4.png" alt="">
<a href="#"><i class="ti-instagram"></i></a>
</div>
<div class="single_instgram_photo">
<img src="img/instagram/inst_5.png" alt="">
<a href="#"><i class="ti-instagram"></i></a>
</div>
</div>
</div>
</div>
</div>
</section>

<!-- Footer section -->
  
<footer class="mainfooter" style="background-color: #131921;" role="contentinfo">  
    <div class="footer-middle">  
    <div class="container" style="color: #fff;">  
      <div class="row pb-5">  
        <div class="col-md-3 col-sm-6 col-lg-3">  
          <div class="footer-pad" style="width: 190px;">  
            <h4>Payment Getway</h4>  
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
          <div class="footer-pad" style="width: 150px;">  
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
            <div class="footer-pad" style="width: 150px;"> 
              <h4 class="pb-2"> Follow Us </h4>  
              <ul class="social-network social-circle">  
               <li class="pr-2"> <a href="#" class="icoFacebook" title="Facebook"> <i class="fa fa-facebook"> </i> </a> </li>  
               <li class="pr-2"> <a href="#" class="icoLinkedin" title="Linkedin"> <i class="fa fa-linkedin"> </i> </a> </li>  
               <li> <a href="#" class="iconInstagram" title="Instagram"> <i class="fa-brands fa-instagram"> </i> </a> </li> 
              </ul>               
      </div>  
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

  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="https://kit.fontawesome.com/e747e308d6.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="JS/viewer.js"></script>
</body>
</html>