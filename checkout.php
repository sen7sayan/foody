<?php
   if(session_id() == '') {
    
    session_start();

    
    
  }

  if(isset($_SESSION['login']) == true){
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){
      
      if(isset($_POST['myaddress'])){
        if(is_numeric(($_POST['myaddress']))){

          // echo $_POST['myaddress'];
          // header("location:cart.php");

          include 'connection/_dbconnection.php';

          $user_id =  $_SESSION['user_id'];

          $address_id = $_POST['myaddress'];
          
          $auth_address_sql = "SELECT * FROM `person` WHERE `order_id` = '$address_id' AND `user_id` = ' $user_id'";
          $auth_address_sql_result = mysqli_query($conn,$auth_address_sql);

          if(mysqli_num_rows($auth_address_sql_result) == 1){

            $fetch_cart_sql = "SELECT cart.f_id, cart.quantity, foods.name, cart.cart_id ,
            foods.price,foods.price *cart.quantity 
            AS sub_total FROM 
            users INNER JOIN cart on users.sno = cart.c_id 
            INNER JOIN foods ON cart.f_id = foods.f_id WHERE users.sno= '$user_id' ";

            $fetch_cart_sql_result = mysqli_query($conn,$fetch_cart_sql);

            foreach($fetch_cart_sql_result as $cart){
              print_r($cart);
            }

            if($fetch_cart_sql_result){

              $uni_order_id = uniqid("Lovely-",false);

              $user_order_sql = "INSERT INTO `tbl_history` ( `fld_order_id`, `fld_user_id`, `fld_dt`) VALUES ( '$uni_order_id', '$user_id', current_timestamp())";
              $user_order_sql_result = mysqli_query($conn, $user_order_sql);

              foreach($fetch_cart_sql_result as $cart){
                $cart_id =  $cart['cart_id'];
                $f_id = $cart['f_id'];
                $f_quantity = $cart['quantity'];
                $f_name = $cart['name'];
                $f_price = $cart['price'];
                $f_subtotal = $cart['sub_total'];

                $insert_order_sql = "INSERT INTO `orders` ( `quantity`, `sub_total`,
                 `f_id`, `user_id`, `fld_person_id`,`fld_date`,`fld_order_id`) VALUES 
                 ( '$f_quantity', '$f_subtotal', '$f_id', '$user_id', '$address_id',current_timestamp(),'$uni_order_id')";

                $insert_order_sql_result = mysqli_query($conn, $insert_order_sql);
                
                $delete_cart_sql = "DELETE FROM `cart` WHERE `cart`.`cart_id` = '$cart_id'";
                $delete_cart_result = mysqli_query($conn, $delete_cart_sql);
              }
              header("location:orders.php");

            }else{
              echo "Error return back";
            }


          }else{

            header("location:cart.php");
          }
        }else{
          header("location:cart.php");
        }

      }else{
        header("location:cart.php");
    }

  }else{
    header("location:cart.php");
  }




    
  }else if(isset($_SESSION['login']) == false){
      header("location:cart.php");
  }



?>

