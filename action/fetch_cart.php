<?php
    $my_user_id = $_SESSION['user_id'];

    $user_exist_in_cart = "SELECT *  FROM `cart` WHERE c_id = '$my_user_id'";
$user_exist_in_cart_result = mysqli_query($conn, $user_exist_in_cart);

if(mysqli_fetch_assoc($user_exist_in_cart_result) == null){
$_SESSION['cart'] = 0;
}else{
$get_cart_length = "SELECT SUM(quantity) AS cart_length FROM `cart` WHERE c_id = '$my_user_id'";
$get_cart_length_result = mysqli_query($conn, $get_cart_length );

$_SESSION['cart'] = mysqli_fetch_assoc($get_cart_length_result)['cart_length'];
}

?>