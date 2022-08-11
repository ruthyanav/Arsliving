<?php

include ('function/userfunctions.php');
include ('authenticate.php');

?>

<!DOCTYPE html>
<html lang="en">

<!-- swiper css link  -->
<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

<!-- fot awesome cdn link -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

<!-- custom css file link  -->
<link rel="stylesheet" href="css/style.css">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<!-- alertify js -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Details</title>

</head>
<body>

<!-- header section starts -->

<section class="header" >

<a href="home.php" class="logo" >Arsliving.</a>

<nav class="navbar">
    <a href="home.php">Home</a>
    <a href="about.php">About</a>
    <a href="category.php">Shop</a>
    <a href="contact.php">Contact Us</a>
    
    <?php
      if(isset($_SESSION['auth']))
      {
         ?>
         <a href="my_order.php">My Order</a>
         <a href="cart.php">Cart</a>
         <?php $_SESSION['auth_user']['name']; ?>
         <a href="login/logout.php">Logout</a>
         <?php
      }
      else
      {
        ?>
        <a href="login/login.php"> Login</a>
        <?php
      }
    ?>
</nav>

<div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<!-- cart section starts -->
<div class="py-5">
    <div class="container">
        <div class="">
            <div class="row">
                <div class="col-md-12">
                <?php 
                    $order_details = getOrderDetails();
                        
                    if(mysqli_num_rows($order_details) > 0) {
                        ?>
                        <div class="row align-items-center">
                            <div class="col-md-4">
                                <h6>Name</h6>
                            </div>

                            <div class="col-md-4">
                                <h6>Price</h6>
                            </div>

                            <div class="col-md-4">
                                <h6>Quantity</h6>
                            </div>

                        </div>
                            <div id="myorder_details">
                                <?php
                                    foreach ($order_details as $myitem)
                                    {
                                        ?>
                                        <div class="card product_data mb-3 ">
                                                <div class="row align-items-center">
                                                    <div class="col-md-4">
                                                        <h5><?= $myitem['prod_name']; ?></h5>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <h5>Rp <?php echo number_format($myitem['price']); ?></h5>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <h5><?= $myitem['qty']; ?></h5>
                                                    </div>

                                                </div>
                                            </div>
                                        <?php
                                    }
                                
                                ?>
                            
                            </div>
                           
                    <?php
                    }else{
                        ?>
                            <div class="card card-body shadow text-center">
                                <h4 class="py-3">You haven't place any order</h4>
                            </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- cart section ends -->

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


<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="js/script.js"></script>
<script src="js/custom.js"></script>

</body>
</html>