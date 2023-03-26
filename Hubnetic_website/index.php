
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

<?php 
include("../Includes/header.php");
 ?>
 
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
        <?php
        $tabbar="select * from tabbar where showhome='1'";
        $catresult=mysqli_query($connection,$tabbar);
        $c=0;
        while ($catdata=mysqli_fetch_array($catresult))
        {

        if ($c==0)
        {?>
        <li class="filter-btn active" data-tab="web-design">
        <img src="../Admin_Hubnetic/uploads/Tabbar/<?php echo $catdata['icon'] ?>" width="20px" alt="no internet">
        <?php echo $catdata['text'];?>
        </li>
        <?php } else {?>
        <li class="filter-btn <?php echo $catdata['id'] ?>" data-tab="web-development">
        <img src="../Admin_Hubnetic/uploads/Tabbar/<?php echo $catdata['icon'] ?>" width="20px" alt="no internet">
          <?php echo $catdata['text'];?>
        </li>
       <?php } $c++;}?>

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
   <section class="carouselt pb-5 mb-5">

  <div class="container-fluid px-0">
    <div class="row">
      <div class="col-12">
        <div class="carousel__wrapper">
        <?php

$i = 1; 
$result = mysqli_query($connection,"SELECT * FROM infinity_slider WHERE image != '' AND status = '1'");
                while($data=mysqli_fetch_array($result))

				{ ?> 
          <div class="carousel__slide"> 
        
            <div class="carousel__image">
           <img src="../Admin_Hubnetic/uploads/Infinity/<?php echo $data['image']; ?>" width="400px" alt="">
           
           <div class="title2">
        <p class="content-title2 text-center"><?php echo $data['heading']; ?></p>
        <p class="content-amount2 text-center"><?php echo $data['Amount']; ?></p>
        <div class="bton2">
          
          <div class="button2" style="margin-left: 40%;margin-top:50%;"><a href="<?php echo $data['url']; ?>">Add Cart</a>
          </div>
        </div>
      </div>
      <div class="image_overlay2"></div>

            </div>
           
          </div>
          <?php $i++; } ?>
 
          <!--#### repeat ####-->
       
             
             <?php

$i = 1; 
$result = mysqli_query($connection,"SELECT * FROM infinity_slider WHERE image != '' AND status = '1'");
                while($data=mysqli_fetch_array($result))

				{ ?>
        <div class="carousel__slide">
             <div class="carousel__image">
           <img src="../Admin_Hubnetic/uploads/Infinity/<?php echo $data['image']; ?>" width="400px" alt="">
           
           <div class="title2">
        <p class="content-title2 text-center"><?php echo $data['heading']; ?></p>
        <p class="content-amount2 text-center"><?php echo $data['Amount']; ?></p>
        <div class="bton2">
          
          <div class="button2" style="margin-left: 40%;margin-top:50%;"><a href="<?php echo $data['url']; ?>">Add Cart</a>
          </div>
        </div>
      </div>
      <div class="image_overlay2"></div>

            </div>
            </div>
            <?php $i++; } ?>
         
         

            <?php

$i = 1; 
$result = mysqli_query($connection,"SELECT * FROM infinity_slider WHERE image != '' AND status = '1'");
                while($data=mysqli_fetch_array($result))

				{ ?>
        <div class="carousel__slide">
             <div class="carousel__image">
           <img src="../Admin_Hubnetic/uploads/Infinity/<?php echo $data['image']; ?>" width="400px" alt="">
           
           <div class="title2">
        <p class="content-title2 text-center"><?php echo $data['heading']; ?></p>
        <p class="content-amount2 text-center"><?php echo $data['Amount']; ?></p>
        <div class="bton2">
          
          <div class="button2" style="margin-left: 40%;margin-top:50%;"><a href="<?php echo $data['url']; ?>">Add Cart</a>
          </div>
        </div>
      </div>
      <div class="image_overlay2"></div>

            </div>
            </div>
            <?php $i++; } ?>
         
        </div>
      </div>
    </div>
  </div>
</section> 

<!-- infinity slider end here -->

<!-- slick product slider -->
<div class="container-fluid pt-5">
<?php
				$carousel= whiledata('carousel_product');

				$data=mysqli_fetch_array($carousel);
				{ ?>
  <h1 class="mt-4 text-center "> <?php echo $data['Best_deal']; ?></h1>
  <?php } ?>
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
    </div>
  </section>

  <section class="py-0 pt-4 pb-4">
    <div class="container-fluid">
      <div class="row h-100">
        <div class="col-lg-7 mx-auto text-center mb-6">
        <?php
				$carousel= whiledata('new_arrivals');

				$data=mysqli_fetch_array($carousel);
				{ ?>
          <h1 class="fs-3 fs-lg-5 lh-sm mb-4 mt-3"><?php echo $data['Head_content']; ?></h1>
          <?php } ?>
        </div>
       
        <div class="productslide">
        <?php
				$carousel= whiledata('new_arrivals');

				while($data=mysqli_fetch_array($carousel))
				{ ?>
          <div class="product_slider">
          <img src="../Admin_Hubnetic/uploads/New Arrivals/<?php echo $data['image']; ?>" alt="" title="" />
            <div class="title">
              <p class="content-title"><?php echo $data['product_title']; ?></p>
              <p class="content-amount"><?php echo $data['product_amount']; ?></p>
              <div class="bton">
                <div class="button pb-2"><a href="<?php echo $data['product_url']; ?>">Buy Now</a>
                </div>
                <div class="button"><a href="<?php echo $data['product_url2']; ?>">Add Cart</a>
                </div>
              </div>
            </div>
            <div class="image_overlay"></div>
          </div>
          <?php } ?>
        
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
          <?php
				$carousel= whiledata('testimonials');

				$data=mysqli_fetch_array($carousel);
				{ ?>
            <h1 class="fs-3 fs-lg-5 lh-sm mb-4 mt-3"><?php echo $data['Head_content'] ?></h1>
            <?php } ?>
          </div> 
            <div class="card card-main border-0 text-center"> 
            <?php
				$carousel= whiledata('testimonials');

				$data=mysqli_fetch_array($carousel);
				{ ?> 
                <h5 class="font-weight-bold mb-4"><?php echo $data['subheading'] ?></h5> 
                <?php } ?>


                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">  
                    <ol class="carousel-indicators">  
                        <li data-target="#carouselExampleIndicators" data-slide-to="0"> </li>  
                        <li data-target="#carouselExampleIndicators" data-slide-to="1" class="active"> </li>  
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"> </li>  
                    </ol>  
                    <div class="carousel-inner">  
                    <?php

$i = 1; 
$result = mysqli_query($connection,"SELECT * FROM testimonials WHERE image != '' AND status = '1'");
                while($data=mysqli_fetch_array($result))
                {
                    ?>
                        <div class="carousel-item">  
                            <div class="card border-0 card-0">  
                                <div class="card profile py-3 px-4">  

                                    <div class="text-center"> 
                                    <img src="../Admin_Hubnetic/uploads/Testimonial/<?php echo $data['image']; ?>" alt="" class="img-fluid profile-pic" title="" />  
                                 
                                    </div>  
                                    <h6 class="mb-0 mt-2"> <?php echo $data['customer_name']; ?> </h6>   
                                </div> <img class="img-fluid open-quotes" src="Images/Profile img/quote-top.jpg" width="20" height="20">  
                                <p class="content mb-0"> <?php echo $data['Reviews']; ?>. </p> 
                                <img class="img-fluid close-quotes ml-auto" src="Images/Profile img/quote-bottom.jpg" width="20" height="20">  
                            </div>  
                        </div> 
                        <?php $i++; } ?>

                        <!-- <div class="carousel-item active">  
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
                        </div>  --> 
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
 

  <?php 
include("../Includes/footer.php");
  ?>