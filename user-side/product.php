<?php 

include ('function/userfunctions.php');

?>

<head>
   
   <title>Product</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- fot awesome cdn link -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

   


</head>
<body>
   
<!-- header section starts  -->

<section class="header">

<a href="home.php" class="logo">Arsliving.</a>

<nav class="navbar">
    <a href="home.php">Home</a>
    <a href="about.php">About</a>
    <!-- bagian package diganti product -->
    <a href="product.php">Product</a>
    <!-- bagian book diganti contact -->
    <a href="contact.php">Contact Us</a>
    <a href="login_system/register.php"> <i class="fas fa-user"></i></a>
    <a href="#"> <i class="fas fa-shopping-cart"></i></a>
</nav>

<div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

   
   
</div>

<!-- packages section starts  -->

<div class="row">
    <?php
        $category = getAllActive("category");
        
        if(mysqli_num_rows($category) > 0)
        {
            foreach($category as $item)
            {
                ?>  
                <section class="product-user">
                    <div class="col-md-3">
                <div class="box-container">
                    <div class="box">
                        <div class="image">
                            <img src="../admin/uploads/<?= $item['image']; ?>" alt="Category Image" width="100px" height="100px">
                        </div>
                        <div class="content">
                        <h4><?= $item['name']; ?></h4>
                        </div>
                        </div>
                </div>
                </section>

                
                <?php
                }
            }
            else
            {
                echo "No data available";
            }
    ?>
</div>


<!-- packages section ends -->


<!-- footer section starts  -->

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









<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>