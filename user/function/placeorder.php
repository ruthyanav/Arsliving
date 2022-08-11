<?php

session_start();
include ('../config/dbcon.php');

if(isset($_SESSION['auth']))
{
    if(isset($_POST['placeOrderBtn']))
    {
        $name = mysqli_real_escape_string($con, $_POST['name']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $phone = mysqli_real_escape_string($con, $_POST['phone']);
        $address = mysqli_real_escape_string($con, $_POST['address']);
        $city = mysqli_real_escape_string($con, $_POST['city']); 
        $postal_code = mysqli_real_escape_string($con, $_POST['postal_code']);
        $payment_method = mysqli_real_escape_string($con, $_POST['payment_method']);
        $payment_id = mysqli_real_escape_string($con, $_POST['payment_id']);

        if($name == "" || $email == "" || $phone == "" || $address == "" || $city == "" || $postal_code == "" || $payment_method == "")
        {
            $_SESSION['message'] = "All fields are mandatory";
            header('Location: checkout.php');
            exit(0);
        }

        $userId = $_SESSION['auth_user']['user_id'];
        $query = "SELECT c.id as cid, c.prod_id, c.prod_qty, c.prod_name, p.id as pid, p.name, p.image, p.selling_price FROM cart c, products p WHERE c.prod_id=p.id AND c.user_id='$userId' ORDER BY c.id DESC ";

        $query_run = mysqli_query($con, $query);

        $totalPrice = 0;
        foreach ($query_run as $citem)
        {
            $totalPrice += $citem['selling_price'] * $citem['prod_qty'];
        }
        
        $tracking_no = "ars_order".rand(1111,9999).substr($phone,2);
        $insert_query = "INSERT INTO orders (tracking_no, user_id, name, email, phone, address, city, postal_code, total_price, payment_method, payment_id) VALUES ('$tracking_no','$userId', '$name', '$email', '$phone', '$address', '$city', '$postal_code', '$totalPrice', '$payment_method', '$payment_id')";
        $insert_query_run = mysqli_query($con, $insert_query);

        if($insert_query_run)
        {
            $order_id = mysqli_insert_id($con);
            foreach ($query_run as $citem)
            {
                $userId = $_SESSION['auth_user']['user_id'];
                $prod_id = $citem['prod_id'];
                $prod_qty = $citem['prod_qty'];
                $prod_name = $citem['prod_name'];
                $price = $citem['selling_price'];
                
                $insert_items_query = "INSERT INTO order_items (user_id, order_id, prod_id, prod_name, qty, price) VALUES ('$userId', '$order_id', '$prod_id', '$prod_name', '$prod_qty', '$price')";
                $insert_items_query_run = mysqli_query($con, $insert_items_query);

                $product_query = "SELECT * FROM products WHERE id='$prod_id' LIMIT 1";
                $product_query_run = mysqli_query($con, $product_query);

                $productData = mysqli_fetch_array($product_query_run);
                $current_qty = $productData['qty'];

                $new_qty = $current_qty - $prod_qty;

                $updateQty_query = "UPDATE products SET qty='$new_qty' WHERE id='$prod_id' ";
                $updateQty_query_run = mysqli_query($con, $updateQty_query);
            }

            $deleteCartQuery = "DELETE FROM cart WHERE user_id='$userId' ";
            $deleteCartQuery_run = mysqli_query($con, $deleteCartQuery);

            // $_SESSION['message'] = "Order placed successfully";
            header('Location: ../my_order.php');
            die();
        }
    }
}
else{
    header('Location: ../login/login.php');
}
?>