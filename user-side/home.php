<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!-- swiper css link -->
    <link
    rel="stylesheet"
    href="https://unpkg.com/swiper@8/swiper-bundle.min.css"
    />

    <!-- fot awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

<!-- header sction starts -->

<section class="header">

<a href="home.php" class="logo">Arsliving.</a>

<nav class="navbar">
    <a href="home.php">Home</a>
    <a href="about.php">About</a>
    <!-- bagian package diganti product -->
    <a href="product.php">Product</a>
    <!-- bagian book diganti contact -->
    <a href="contact.php">Contact Us</a>
    <a href="login.system/register_form.php"> <i class="fas fa-user"></i></a>
    <a href="#"> <i class="fas fa-shopping-cart"></i></a>
</nav>

<div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<section class="sub-header">

<!-- home section starts  -->

<section class="home">

   <div class="swiper home-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide" style="background:url(images/home-slide-1.jpg) no-repeat">
            <div class="content">
               <span>find your favorite things here!</span>
               <h3>create your dream room here</h3>
               <a href="package.php" class="btn">Shop Now</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/home-slide-2.jpg) no-repeat">
            <div class="content">
               <span>explore, discover, travel</span>
               <h3>discover the new places</h3>
               <a href="package.php" class="btn">Shop Now</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/home-slide-3.jpg) no-repeat">
            <div class="content">
               <span>explore, discover, travel</span>
               <h3>make your tour worthwhile</h3>
               <a href="package.php" class="btn">Shop Now</a>
            </div>
         </div>
         
      </div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>

   </div>

</section>

<!-- home section ends  -->

<!-- services section starts -->

<section class="services">

    <h1 class="heading-title"> Our Services </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/icon-1.png" alt="">
            <h3>Custom Furniture</h3>
        </div>

        <div class="box">
            <img src="images/icon-2.png" alt="">
            <h3>Loose Furniture</h3>
        </div>

        <div class="box">
            <img src="images/icon-3.png" alt="">
            <h3>Decoration Stuff</h3>
        </div>

    </div>

</section>

<!-- services section ends -->

<!-- home about section starts -->

<section class="home-about">

    <div class="image">
        <img src="images/about-img.jpg" alt="">
    </div>

    <div class="content">
        <h3>About Us</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, delectus unde cupiditate officiis ullam molestias maiores laboriosam architecto nihil nobis. Ratione laudantium nemo in? Est accusamus amet sapiente aspernatur eveniet?</p>
        <a href="about.php" class="btn">Read More</a>
    </div>

</section>

<!-- home about section ends -->

<!-- home product section starts -->

<section class="home-product">

   <h1 class="heading-title"> Our product </h1>

   <div class="box-container">

      <div class="box">
         <div class="image">
            <img src="images/img-1.jpg" alt="">
         </div>
         <div class="content">
            <h3>Loose Furniture</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, sint!</p>
            <a href="product.php" class="btn">Buy Now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-2.jpg" alt="">
         </div>
         <div class="content">
            <h3>Loose Furniture</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, sint!</p>
            <a href="product.php" class="btn">Buy Now</a>
         </div>
      </div>
      
      <div class="box">
         <div class="image">
            <img src="images/img-3.jpg" alt="">
         </div>
         <div class="content">
            <h3>Loose Furniture</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, sint!</p>
            <a href="product.php" class="btn">Buy Now</a>
         </div>
      </div>

   </div>

   <div class="load-more"> <a href="product.php" class="btn">Load More</a> </div>

</section>


<!-- home product section ends -->

<section class="home-offer">
   <div class="content">
      <h3>Need to costumize thing?</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil harum mollitia nulla magnam sapiente ipsa temporibus, recusandae aperiam expedita rem.</p>
      <a href="contact.php" class="btn">Contact Us</a>
   </div>
</section>

<!-- home offer section starts -->



<!-- home offer section ends -->







<!-- footer section starts -->

<section class="footer">

    <div class="box-container">

    <div class="box">
         <h3>Quick Links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> Home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> About</a>
         <a href="product.php"> <i class="fas fa-angle-right"></i> Product</a>
         <a href="contact.php"> <i class="fas fa-angle-right"></i> Contact Us</a>
      </div>

    <div class="box">
        <h3>Extra Links</h3>
        <a href="#"> <i class="fas fa-angle-right"></i> Ask Questions</a>
        <a href="#"> <i class="fas fa-angle-right"></i> About Us</a>
        <a href="#"> <i class="fas fa-angle-right"></i> Privacy Policy</a>
        <a href="#"> <i class="fas fa-angle-right"></i> Terms of Use</a>
    </div>

    <div class="box">
        <h3>Contact Info</h3>
        <a href="#"> <i class="fas fa-phone"></i> 0858-2234-3923</a>
        <a href="#"> <i class="fas fa-envelope"></i> contact.arsliving@gmail.com</a>
        <a href="#"> <i class="fas fa-map"></i> Tangerang Selatan - 15221</a>
    </div>

    <div class="box">
        <h3>Follow Us</h3>
        <a href="#"> <i class="fab fa-facebook-f"></i> Facebook </a>
        <a href="#"> <i class="fab fa-instagram"></i> Instagram </a>
    </div>

    </div>

    <div class="credit">created by <span>Ruthyana Vita</span> | all right reserved</div>

</section>

<!-- footer section ends -->

<!-- swiper js link -->
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<!-- custom js file link -->
<script src="js/script.js"></script>

</body>
</html>