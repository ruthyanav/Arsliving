<?php

@include 'config.php';

session_start();

if(isset($_SESSION['auth']))
{
    unset($_SESSION['auth']);
    unset($_SESSION['auth_user']);
    // $_SESSION['message'] = "Logged out successfully";
}

header('location:../home.php');

?>