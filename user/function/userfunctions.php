<?php

session_start();
include ('config/dbcon.php');

function getAllActive($table)
{
    global $con;
    $query = "SELECT * FROM $table WHERE hidden='0' ";
    return $query_run = mysqli_query($con, $query);
}

function getSlugActive($table, $slug)
{
    global $con;
    $query = "SELECT * FROM $table WHERE slug='$slug' AND hidden='0' LIMIT 1";
    return $query_run = mysqli_query($con, $query);
}

function getProdByCategory($category_id)
{
    global $con;
    $query = "SELECT * FROM products WHERE category_id='$category_id' AND hidden='0' ";
    return $query_run = mysqli_query($con, $query);
}

function getIDActive($table, $id)
{
    global $con;
    $query = "SELECT * FROM $table WHERE id='$id' AND hidden='0'";
    return $query_run = mysqli_query($con, $query);
}

function getCartItems()
{
    global $con;
    $userId = $_SESSION['auth_user']['user_id'];
    $query = "SELECT c.id as cid, c.prod_id, c.prod_qty, p.id as pid, p.name, p.image, p.selling_price FROM cart c, products p WHERE c.prod_id=p.id AND c.user_id='$userId' ORDER BY c.id DESC ";

    return $query_run = mysqli_query($con, $query);
}

function getOrders()
{
    global $con;
    $userId = $_SESSION['auth_user']['user_id'];
    $query = "SELECT * FROM orders WHERE user_id='$userId' ";

    return $query_run = mysqli_query($con, $query);
}

function getOrderDetails()
{
    global $con;
    $userId = $_SESSION['auth_user']['user_id'];
    $query = "SELECT id, order_id, prod_id, prod_name, qty, price, created_at FROM order_items WHERE user_id='$userId' ";

    return $query_run = mysqli_query($con, $query);
}

function redirect($url, $message)
{
    $_SESSION['message'] = $message;
    header('Location: '.$url);
    exit();
}

?>