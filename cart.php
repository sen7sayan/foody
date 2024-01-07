


<?php

  

   if(session_id() == '') {
    
    session_start();

   
    
    
  }

  if($_SERVER['REQUEST_METHOD'] == "GET"){
    if(isset($_GET['update']) && isset($_GET['quantity'])){
      if(is_numeric($_GET['update']) && is_numeric($_GET['quantity'])){

        include 'connection/_dbconnection.php';

        $foodId= $_GET['update'];
        $updateQuantity = $_GET['quantity'];
        
        $user_id = $_SESSION['user_id'];
        $updateSql = "UPDATE `cart` SET `quantity` = '$updateQuantity' WHERE `cart`.`c_id` = '$user_id' AND `cart`.`f_id`='$foodId'";
        $updateCartResult = mysqli_query($conn,  $updateSql);
        
        print_r($updateCartResult);
        
        if(!$updateCartResult){
          echo "Failed !!";
        }

      }else{
        echo 'Wrong input !!!';
      }
    }else if(isset($_GET['del']) && is_numeric($_GET['del'])){
      include 'connection/_dbconnection.php';

      $user_id = $_SESSION['user_id'];
      $food_Id = $_GET['del'];
      
      $deleteCartSql = "DELETE FROM cart WHERE `cart`.`c_id` = '$user_id'  AND `cart`.`f_id` = '$food_Id'";
      $deleteCartResult = mysqli_query($conn,$deleteCartSql);

      if($deleteCartResult){
        echo "Deleted";
      }else{
        echo "Fail to delete ";
      }
    }
    
    

    
    

  }


  if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    if(isset($_POST['person']) && isset($_POST['phone']) && isset($_POST['address'])){
      include 'connection/_dbconnection.php';
      $user_id = $_SESSION['user_id'];

      $user_name = $_POST['person'];
      $user_ph = $_POST['phone'];
      $user_address = $_POST['address'];
      
      $orderAddressSql = "INSERT INTO `person` ( `name`, `phone_no`, `dt`, `address`, `user_id`) VALUES ( '$user_name', '$user_ph', current_timestamp(), '$user_address ', '$user_id')";
      $orderAddressResult = mysqli_query($conn,$orderAddressSql);

      if($orderAddressResult ){
        echo "Inserted New address";
      }else{
        echo "failed to insert";
      }

    }
  }


  if(isset($_SESSION['login'])){

    $user_id = $_SESSION['user_id'];
    include 'connection/_dbconnection.php';

    $cartSql = "SELECT users.name, users.email, cart.f_id, cart.quantity, foods.name, foods.price FROM users INNER JOIN cart on users.sno = cart.c_id INNER JOIN foods ON cart.f_id = foods.f_id WHERE users.sno= '$user_id'";
    
    $cartResult = mysqli_query($conn, $cartSql);

   

    $getAddressSql = "SELECT * FROM `person` WHERE `user_id` = '$user_id'
    ORDER BY `person`.`order_id` DESC";
    $getAddress = mysqli_query($conn, $getAddressSql);
    if($getAddress){
      
      
    }else{
      echo "not fetch";
    }


  }

  
  
  
  
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Cart</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
    <link rel="stylesheet" href="cart.css">
</head>
  <body>
    
  <?php include 'components/_navbar.php' ?>

  

    

    <section>
        
        <div class="container justify-content-between mx-auto">
            <div class="">
              <h1>Your Cart </h1>
              <button class="btn btn-danger" onclick="history.back()">Back to pervious page</button>  
            </div>

            <hr>
            <div class="row" >
            <div class="col-lg-8  mx-auto mb-3 ">
              
              <?php


              $foodPriceTotal = 0;
              $totalCart = 0;
              if(isset($_SESSION['login'])){
                if(mysqli_fetch_assoc($cartResult) == 0){
                  echo "<h5>Your cart is empty !!</h5>";
                
                }else{
                  foreach($cartResult as $cart){
                    $totalCart += $cart['quantity'];
                    $foodPriceTotal += $cart['quantity'] * $cart['price'];
                  echo '
                    <div class="card my-3 mx-md-auto mx-sm-auto" style="width: 18rem;">
                        <div class="card-body row">
                          <h5 class="card-title col-12">'.$cart['name'].'@ '.$cart['price'].'</h5>
                          <form action="cart.php" method="get" class="col-8 d-flex">
                              <input type="hidden" value="'.$cart['f_id'].'" name="update" class="p-5">
                              <input type="number"  name="quantity" value="'.$cart['quantity'].'" class="form-control w-100 " min="1" >
                              <input href="index.php" type="submit" value="Update" class="btn btn-danger ms-2">
                        
                            </form>
  
                          <form action="cart.php" method="get" class="col-4">
                              <input type="hidden" value="'.$cart['f_id'].'" name="del" class="p-5">
                              <button type="submit" data-bs-target="#exampleModal" class="btn btn-danger " data-bs-toggle="modal" >Delete </button>
                          </form>
                            <span class="pt-2 ms-2"><strong>Rs.'.$cart['quantity'] * $cart['price'].'/- </strong><span>
                        </div>
                      </div>';


                }
                }
                

                

              }else{
                echo "<h5>Please Log in!!</h5>";
                 
              }
              
              ?>
            </div>

            <?php
              if(isset($_SESSION['login']) && $totalCart >0){
                echo'
                <div class="col-lg-4 mx-auto " style="width: 18rem;">
                <div class="card-body row">
                 <span class="mb-3">Your Total <strong>Rs.'.$foodPriceTotal.'/- </strong></span>
                  <h5 class="">Your Billing Address</h5>
                  <button class="btn btn-danger my-2" type="button" data-bs-toggle="collapse" data-bs-target="#addressCollapse" aria-expanded="false" aria-controls="addressCollapse">
                    Add a new address
                  </button>
                  <div class=" my-3 collapse" id="addressCollapse">
                      <form action="cart.php" method="post">
                        <div class="row" >
                            <div class="col-12  mb-2 ">
                              <input name="person" type="text" class="form-control"  placeholder="Name" required>
                            </div>
              
                            <div class="col-12 mb-2">
                              <input type="tel" name="phone" class="form-control"   placeholder="Phone no." required>
                            </div>
                            <div class="col-12  mb-2">
                              <textarea name="address" id="" cols="30" rows="10" placeholder="Enter your address" class="pt-2 form-control" required></textarea>
                            </div>
                    

                            <div class="col-12">
                            
                              <input class="btn btn-danger " href="#" type="submit" value="Save Address" >
                              
                            </div>

                         </div>
                      
                      </form>
                    </div
                  </div>';
                  
                  if(mysqli_num_rows($getAddress) >0){
                    foreach($getAddress as $address){
                
                      echo '
                      <div class="col-12 py-2 my-2 bg-danger-subtle rounded-2">
                        <form action="checkout.php" method="post" >
                          <input name="myaddress" type="hidden" value="'.$address['order_id'].'" >
                          <div class="row py-2" >    
                            <div class="col-12 d-flex align-items-center">
                             
                              <h5 class="ps-2">'.$address['name'].'</h5>
                            </div>
                            <div class="col-12">
                              <h5>'.$address['phone_no'].' </h5>
                            </div>
                            <div class="col-12 ">
                              <p>'.$address['address'].'</p>
                            </div>
                            <div class="col-12">
                              <input class="btn btn-danger " href="#" type="submit" value="Confrim Order" >
                            </div>
                          </div>
                        </form>
                      </div>';
                  }
                  }
              
              echo ' </div>
              </div>
                ';
              }
            
            
            
            ?>
          </div>
    </section>
 


    <?php include 'components/_footer.php' ?>
    




    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="js/index.js"></script>
    <script src="js/_navbar.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>

  </body>
</html>