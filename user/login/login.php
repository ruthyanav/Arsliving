<?php

session_start();

if(isset($_SESSION['auth']))
{
    // $_SESSION['message'] = "You are already logged in";
    // header('location:../home.php');
    // exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- swiper css link -->
    <link
    rel="stylesheet"
    href="https://unpkg.com/swiper@8/swiper-bundle.min.css"
    />

    <!-- fot awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    

</head>
<body>

<div class="py-5">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
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

            <div class="card">
                <div class="card-header">
                    <h4>Login</h4>
                </div>
            
                <div class="card-body">
                <form action="../function/authcode.php" method="POST">

                    <div class="mb-3">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your email">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password" class="form-control"  placeholder="Enter your password">
                    </div>

                    <button type="submit" name="login_btn" class="btn btn-primary">Login</button>

                    <p>don't have an account? <a href="register.php">register now</a></p>

                </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>




<!-- swiper js link -->
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<!-- custom js file link -->
<script src="js/script.js"></script>

</body>
</html>