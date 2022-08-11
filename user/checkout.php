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
    <title>Checkout</title>

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
        <div class="card">
            <div class="card-body">
            <form action="function/placeorder.php" method="POST">
                <div class="row">
                    <div class="col-md-6">
                        <h5>Details</h5>
                        <hr>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="fw-bold ">Name</label>
                                <input type="text" name="name" required placholder="Enter your full name" class="form-control">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="fw-bold ">E-mail</label>
                                <input type="email" name="email" required placholder="Enter your e-mail" class="form-control">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="fw-bold ">Phone</label>
                                <input type="text" name="phone" required placholder="Enter your phone number" class="form-control">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="fw-bold ">Address</label>
                                <input type="text" name="address" required placholder="Enter your address" class="form-control">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="fw-bold ">City</label>
                                <input type="text" name="city" required placholder="Enter your city" class="form-control">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="fw-bold ">Postal Code</label>
                                <input type="text" name="postal_code" required placholder="Enter your postal code" class="form-control">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="fw-bold ">Payment Method</label>
                                <select name="payment_method" required class="form-control" >
                                    <option value="Cash on Delivery" >Cash on Delivery</option>
                                    <option value="Bank Transfer" disabled>Bank Transfer (coming soon)</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <h5>Order Details</h5>
                        <hr>
                            <?php $items = getCartItems();
                            $totalPrice = 0;
                            foreach ($items as $citem)
                            {
                                ?>
                                <div class="mb-1 border">
                                        <div class="row align-items-center">
                                            <div class="col-md-3">
                                                <img src="../admin/uploads/<?= $citem['image']; ?>" alt="Image" width="100px">
                                            </div>

                                            <div class="col-md-3">
                                                <label><?= $citem['name']; ?></label>
                                            </div>

                                            <div class="col-md-3">
                                                <label>Rp <?= number_format($citem['selling_price']); ?></label>
                                            </div>

                                            <div class="col-md-2">
                                                <label>x <?= $citem['prod_qty']; ?></label>
                                            </div>

                                        </div>
                                    </div>
                                <?php
                                $totalPrice += $citem['selling_price'] * $citem['prod_qty'];
                            }
                            ?>
                            <hr>
                        <h5>Total Price : <span class="float-end fw-bold">Rp <?= number_format($totalPrice) ?></span></h5>
                        <div class="">
                            <button type="submit" name="placeOrderBtn" class="btn btn-primary w-100">Confirm and Place Order</button>
                        </div>
                    </div>
                </div>
            </form>  
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