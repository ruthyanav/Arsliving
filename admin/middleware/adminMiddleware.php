<?php



if(isset($_SESSION['auth']))
{
    if($_SESSION['user_type'] != 'admin')
    {
        $_SESSION['message'] = "You are not authorized to access this page";
        header("Location: http://localhost/Arsliving/user/home.php");
    }
}
else
{
    $_SESSION['message'] = "Login to continue";
    header("Location: http://localhost/Arsliving/user/login/login.php");
}

?>