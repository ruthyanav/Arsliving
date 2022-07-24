<?php

if(!isset($_SESSION['auth']))
{
    redirect("login/login.php","Login to continue");
}

?>