<?php

session_start();

if(isset($_SESSION['auth']))
{
    $_SESSION['message'] = "You are already logged in";
    header('location:../home.php');
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

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

    

</head>
<body>

<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4>Registration Form</h4>
                    </div>
                    <div class="card-body">
                        <form action="../function/authcode.php" method="POST">
                            <div class="mb-3">
                                <label class = "form-label">Name</label>    
                                <input type="text" name="name" class="form-control" placeholder="Enter your name">
                            </div>

                            <div class="mb-3">
                                <label for="">Phone number</label>
                                <input type="number" name="phone_number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your phone number">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your email">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" name="password" class="form-control" id="exampleInputPassword1"
                                placeholder="Enter your password">
                            </div>

                            <div class="mb-3">
                                <label for="" class="">Confirm Password</label>
                                <input type="password" name="cpassword" class="form-control" placeholder="Confirm your password">
                            </div>

                            <div class="mb-3">
                                <label for="" class="">User Type</label>
                                <select name="user_type">
                                    <option value="user">user</option>
                                    <option value="admin">admin</option>
                                </select>
                            </div>

                            <button type="submit" name="register_btn" class="btn btn-primary">Submit</button>
                                            
                            <p>already have an account? <a href="login.php">login now</a></p>

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