<?php 

include ('function/userfunctions.php');

$product_slug = $_GET['product'];
$product_data = getSlugActive("products",$product_slug);
$product = mysqli_fetch_array($product_data);

?>

<?php 
if(isset($_SESSION['message'])) 
    { 
        ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Hey!</strong> <?= $_SESSION['message']; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php
        unset($_SESSION['message']);
    }
?>

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

   <title>Product</title>

  

</head>
<body>
   
<!-- header section starts  -->

<section class="header">

<a href="home.php" class="logo">Arsliving.</a>

<nav class="navbar">
    <a href="home.php">Home</a>
    <a href="about.php">About</a>
    <a href="category.php">Shop</a>
    <a href="contact.php">Contact Us</a>

    <?php
      if(isset($_SESSION['auth']))
      {
         ?>
         <a href="#">My Order</a>
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



</section>

<!-- header section ends -->

   
   
</div>

<!-- packages section starts  -->

<section class="product-view product_data">
        <?php
        
            
            if($product)
            {
                ?>
                    <div class="image">
                        <img src="../admin/uploads/<?= $product['image']; ?>" alt="Product Image">
                    </div>
                    <div class="content">
                        <h4><?= $product['name']; ?></h4>
                        <hr>
                        <h5>Rp <?= $product['selling_price']; ?></h5>
                        <p><?= $product['description']; ?></p>

                        <div class="input-group mb-3" style="width:130px">
                            <button class="input-group-text decrement-btn">-</button>
                            <input type="text" class="form-control text-center input-qty bg-white" value="1" disabled>
                            <button class="input-group-text increment-btn">+</button>
                        </div>

                        <div class="button">
                            <button class="btn btn-primary px4 addToCartBtn" value="<?= $product['id']; ?>"> <i class="fa fa-shopping-chart me-2"></i>Add to cart</button>
                        </div>
                    </div>
                    <?php
            }
                else
                {
                    echo "Product Not Found";
                }
        ?>
</section>

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
<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="js/script.js"></script>

<!-- custom js file link  -->
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
<script src="js/custom.js"></script>

<script>
    alertify.set('notifier','position', 'top-center');
    <?php 
    if(isset($_SESSION['message'])) 
    { 
      ?>
      alertify.success('<?= $_SESSION['message']; ?>');
      <?php 
      unset($_SESSION['message']);
    } 
    ?>
  </script>


</body>
</html>