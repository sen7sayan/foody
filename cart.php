


<?php

  

   if(session_id() == '') {
    
    session_start();

    if(!isset($_SESSION['cart']) && !isset($_SESSION['totalValue']) && !isset($_SESSION['myfood'])){
      $_SESSION['cart'] = 0;
      $_SESSION['totalValue'] = 0;
      $_SESSION['myfood'] = array();
    }
    
    
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





  if(isset($_SESSION['login'])){

    $user_id = $_SESSION['user_id'];
    $cartSql = "SELECT users.name, users.email, cart.f_id, cart.quantity, foods.name, foods.price FROM users INNER JOIN cart on users.sno = cart.c_id INNER JOIN foods ON cart.f_id = foods.f_id WHERE users.sno= '$user_id'";
    include 'connection/_dbconnection.php';
    $cartResult = mysqli_query($conn, $cartSql);

    if(mysqli_fetch_assoc($cartResult) == 0){
      echo "Your cart is empty !!";

    }

    

  }else{
    echo "Please Login In";
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

    
</head>
  <body>
    
  <?php include 'components/_navbar.php' ?>

  

    

    <section>
        
        <div class="container justify-content-between mx-sm-auto">
            <h1>Your Cart </h1>
            <hr>
            <div class="row " >
            <div class="mb-3  mx-md-auto mx-sm-auto col-lg-8">
              <?php
              $foodPriceTotal = 0;
              $totalCart = 0;
              if(isset($_SESSION['login'])){
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

                

              }else{
                echo "Please Log in!!";
                 
              }
              
              ?>
            </div>

            <?php
              if(isset($_SESSION['login']) && $totalCart >0){
                echo'
                <div class="col-lg-4 mx-sm-auto mx-md-auto " style="width: 18rem;">
                <div class="card-body row">
                 <span class="mb-5">Your Total <strong>Rs.'.$foodPriceTotal.'/- </strong><span>
                  <h5 class="mt-3">Your Billing Address</h5>
                  <div class="row" >
                      <div class="col-12  mb-2 ">
                        <input type="text" class="form-control" id="personname" aria-describedby="personname" placeholder="Name">
                      </div>
            
                      <div class="col-12 mb-2">
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                      </div>
                      <div class="col-12  mb-2">
                        <textarea name="" id="" cols="30" rows="10" placeholder="Enter your address" class="pt-2 form-control"></textarea>
                      </div>
                  </div>
                  <div>
                    <form action="checkout.php?checkout=true" method="post" class="col-8 d-flex">
                      <input href="index.php" type="submit" value="Procced to Checkout" class="btn btn-danger ms-2">
                    </form>
                  </div>
                </div>
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