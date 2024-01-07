<?php

  if(session_id() == '') {
    session_start();
  }

 
  
  
  if(isset( $_REQUEST['p_id']) == true){
    include 'connection/_dbconnection.php';

    if(is_numeric($_REQUEST['p_id'])){
      $p_id = $_REQUEST['p_id'];
      $getPageDataSql = "SELECT * FROM `page` WHERE `page_id` = '$p_id'";
      $result = mysqli_query($conn, $getPageDataSql);
      $myfood = mysqli_fetch_assoc($result);

      $getFoodDataSql = "SELECT * FROM `foods` WHERE `page_id` = '$p_id'";
      $priceResult = mysqli_query($conn,  $getFoodDataSql);
      $_SESSION['page_id'] = $p_id;
    }
    
    

  }else if($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['f_id']) && isset($_GET['quantity']) && is_numeric($_GET['f_id']) && is_numeric($_GET['quantity']) ){
    if( isset($_SESSION['login']) && $_SESSION['login'] == true){
      include 'connection/_dbconnection.php';

      $foodId = $_GET['f_id'];
      $foodQuantity = $_GET['quantity'];
      $userId = $_SESSION['user_id'];

      
  
      $existSql = "SELECT * FROM `cart` WHERE `f_id` = $foodId";
      $result = mysqli_query($conn, $existSql);
      
      if(mysqli_num_rows($result) == 0){
        $insertSql = "INSERT INTO `cart` (`c_id`, `f_id`, `quantity`) VALUES ('$userId', '$foodId', '$foodQuantity');";
      
        $insertResult = mysqli_query($conn, $insertSql);
        
  
      }else if(mysqli_num_rows($result) == 1){
        
        $lastQuantity =0;
  
        foreach($result as $x){
          $lastQuantity = $x['quantity'];
        }
  
        $newQuantity = $lastQuantity + $foodQuantity;
  
        $addToCartSql = "UPDATE `cart` SET `quantity` = '$newQuantity' WHERE `cart`.`c_id` = '$userId' AND `cart`.`f_id` = '$foodId'";
  
        $updateResult = mysqli_query($conn, $addToCartSql);
  
        
      }
      
      header("location:food.php?p_id=".$_SESSION['page_id']);


    }
    

    
  }else{
    include 'connection/_dbconnection.php';
    $get_pages = "SELECT * FROM `page`";
    $get_pages_result = mysqli_query($conn, $get_pages);
    
  }


  

  
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome to Lovely <?php
    
    if(isset($myfood['f_title'])){
      echo $myfood['f_title'];
    } 
    
    ?></title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    
</head>
  <body>
    
  <?php include 'components/_navbar.php';
  
  ?>

  <?php

    $showError = "Please Log in !!";
    $isLogin = isset($_SESSION['login']);
    if(! $isLogin ){
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>ohh!</strong> '.$showError.'
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }


  
  
  ?>

   
<?php 
    if(isset($myfood)){
    echo'<section class="mt-3 ">
        <div class="container row mx-auto mx-sm-auto">

            <div class="col mx-auto">';
                  
                
                    
                   if($myfood != 0){
                            echo'
                            <div class="card" style="width: 18rem;">
                            <img src=" '. $myfood['f_img'] .'" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">'. $myfood['f_title'] .'</h5>
                              
                            </div>
        
                            <div class="review d-flex justify-content-around align-items-center">
                             
                                
                                <div class="rating text-center">
                                  <span>'. $myfood['f_rating'] .'/5 <i class="fa-solid fa-star text-danger"></i></span>
                                  <p>Rating</p>
                                </div>
                                <div class="vr h-75 mt-3"></div>
                                <div class="orders text-center">
                                  <span>'. $myfood['f_orders'] .'+</span>
                                  <p>Orders</p>
                                </div>
                                <div class="vr h-100 mt-3"></div>
                                <div class="intop text-center">
                                  <span class="">#Top</span>
                                  <p>'. $myfood['f_top'] .'</p>
                                </div>
                            
                                
                            </div>
                            <div class="p-2">
                              <p class="card-text">
                              '. $myfood['f_desc'] .'
                              </p>
                            </div>
        
                          
                        </div>
                            ';
                    }else{
                       
                       

















                    }
                
                ?>

                
            </div>
            



           
               
               <?php
               if(mysqli_num_rows($priceResult) > 0 && isset($priceResult) ){ foreach($priceResult as $food){echo '
                <div class=" col mt-3">
                <div class="mb-3">
                 <div class="card" style="width: 18rem;">
                   <div class="card-body row">
                     <h5 class="card-title col-12">'.$food['name'].'@'.$food['price'].'</h5>
                     <form action="food.php" method="get">
                       <input value="'.$food['f_id'].'" type="number" name="f_id" style="display: none;">
                       <select  name="quantity" >                            
                                         <option value="1">1</option>
                                         <option value="2">2</option>
                                         <option value="3">3</option>
                                         <option value="4">4</option>
                                         <option value="5">5</option>
                                         <option value="6">6</option>
                                         <option value="7">7</option>
                                         <option value="8">8</option>
                                         <option value="9">9</option>
                                         <option value="10">10</option>
                       </select>
                       <input href="#" type="submit" value="Add to mytable" class="btn btn-danger ms-3">
                     </form>
                             
                   </div>
                 </div>
                      
               </div>';
                   
                   }
                  
                 }else if( $myfood ==0){
 
                   
                 }else if(mysqli_num_rows($priceResult) == 0 ){
                    echo '<h3 class="mx-auto my-5 text-center"> Coming Soon !!! </h3>';
                 }  
               

     echo '          
        </div> 
           
    </section>';

    }else{
        echo '

        <section>
        <div class="container text-center my-5 ">
            <h2 class="fw-bold my-5"><i class="fa-solid fa-cart-arrow-down text-danger"></i> Make Your Order</h2>
            <div>
                <div class="d-flex justify-content-around flex-wrap">';
                
                    
                foreach($get_pages_result as $page){

                  echo'<a href="food.php?p_id='.$page['page_id'].'" class="food-img text-decoration-none text-dark">
                    <img class="food-logo" src="'.$page['f_img'].'" alt="">
                    <h5>'.$page['f_title'].'</h5>
                </a>';
                }


                   
                
                echo'</div>
            </div>
        </div>
    </section>
   ';


    }

    ?>



    

<?php include 'components/_footer.php' ?>




    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="js/index.js"></script>
    <script src="js/_navbar.js"></script>
  </body>
</html>