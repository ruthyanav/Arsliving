<?php

session_start();
include ('../config/dbcon.php');

if(isset($_POST['register_btn']))
{
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $phone_number = mysqli_real_escape_string($con, $_POST['phone_number']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
    $user_type = $_POST['user_type'];

    //check if email already registerd
    $check_email_query = "SELECT email FROM user_form WHERE email='$email'";
    $check_email_query_run = mysqli_query($con, $check_email_query);

    if(mysqli_num_rows($check_email_query_run) > 0)
    {
        $_SESSION['message'] = "Email already registered";
        header('Location: ../login/register.php');
    }
    else
    {
        if($password == $cpassword)
        {
            //insert data
            $insert_query = "INSERT INTO user_form(name, phone_number, email, password, user_type) VALUES('$name','$phone_number','$email','$pass','$user_type')";
            $insert_query_run = mysqli_query($con, $insert_query);

            if($insert_query_run)
            {
                $_SESSION['message'] = "Registered successfully";
                header('Location: ../login/login.php');
            }
            else
            {
                $_SESSION['message'] = "Something went wrong";
                header('Location: ../login/register.php');
            }
        }
        else
        {
            $_SESSION['message'] = "Password do not match";
            header('Location: ../login/register.php');
        }
    }
}
else if(isset($_POST['login_btn']))
{
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    $login_query = "SELECT * FROM user_form WHERE email='$email' AND password='$password'";
    $login_query_run = mysqli_query($con, $login_query);

    if(mysqli_num_rows($login_query_run) > 0)
    {
        $_SESSION['auth'] = true;

        $userdata = mysqli_fetch_array($login_query_run);
        $userid = $userdata['id'];
        $username = $userdata['name'];
        $useremail = $userdata['email'];
        $user_type = $userdata['user_type'];

        $_SESSION['auth_user'] = [
            'user_id' => $userid,
            'name' => $username,
            'email' => $useremail
        ];

        $_SESSION['user_type'] = $user_type;

        if($user_type == 'admin')
        {
            $_SESSION['message'] = "Welcome to dashboard!";
            header("Location: http://localhost/Arsliving/admin/index.php");
        }
        else
        {
            $_SESSION['message'] = "Logged In Successfully";
            header('Location: ../home.php');
        }

    }
    else
    {
        $_SESSION['message'] = "Invalid email or password";
        header('Location: ../login/login.php');

    }
}

?>