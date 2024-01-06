<?php
   if(session_id() == '') {
    
    session_start();

    if(!isset($_SESSION['cart']) && !isset($_SESSION['totalValue']) && !isset($_SESSION['myfood'])){
      $_SESSION['cart'] = 0;
      $_SESSION['totalValue'] = 0;
      $_SESSION['myfood'] = array();
    }
    
    
  }

  if(isset($_SESSION['login']) == true){



    include 'connection/_dbconnection.php';

    $user_id = $_SESSION['login'];
    $get_order_id_sql = "SELECT fld_order_id,fld_dt FROM `tbl_history` WHERE `fld_user_id` = $user_id";

    $get_order_id_sql_result = mysqli_query($conn, $get_order_id_sql);

    
    
    
  }else{
    
  }



?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome to Lovely</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    
</head>
  <body>
    
  <?php include 'components/_navbar.php' ?>



    <section>
        <div class="container d-flex ">
            <div class="">
                
                    <?php
                      if(mysqli_num_rows( $get_order_id_sql_result) >0){
                        
                        foreach($get_order_id_sql_result as $uni_order_id){
                          
                          $current_order_id = $uni_order_id['fld_order_id'];

                
                          $get_address_sql = "SELECT * FROM person WHERE order_id = (SELECT fld_person_id FROM `orders` WHERE fld_order_id = '$current_order_id' LIMIT 1)";
                          $get_address_sql_result = mysqli_query($conn, $get_address_sql);
                          
                          $get_cart_total_sql = "SELECT SUM(sub_total) as cartTotal FROM orders WHERE fld_order_id = '$current_order_id'";
                          $get_cart_total_sql_result = mysqli_query($conn, $get_cart_total_sql);

                          foreach($get_cart_total_sql_result as $all_total){
                            
                            echo '
                            <div class="card">
                              <div class=" pt-2">
                                <h4 class="card-title ps-2">#Order id : '.$current_order_id .'</h4>
                                <h6 class="card-title ps-2">Total :Rs. '.$all_total['cartTotal'].'</h6>
                                <span class="card-title ps-2">Date: '. $uni_order_id['fld_dt'].' </span>
                              </div>

                          
                           
                        ';
                       
                          }

                          
                          
                          
                  
                          $order_details_sql = "SELECT * FROM foods INNER JOIN orders ON foods.f_id = 
                          orders.f_id WHERE fld_order_id = '$current_order_id'";
                  
                          $order_details_sql_result = mysqli_query($conn, $order_details_sql);
                          
                          $i=0;
                          foreach($order_details_sql_result as $order_detail){
                              $i++;
                            echo '
                            <div class="">
                            <button class=" btn   btn-danger mt-1"  data-bs-toggle="collapse" href="#collapseExample'.$i.'" role="button" aria-expanded="false" aria-controls="collapseExample1">'.$order_detail['name'].'</button> 
                            <div class="collapse card-body bg-danger-subtle rounded" id="collapseExample'.$i.'">
                                <p>  @ '.$order_detail['price'].' X '.$order_detail['quantity'].' </p>
                                <span>Sub Total : '.$order_detail['sub_total'].' </span>
                            </div>';
                          }


                         
                          foreach($get_address_sql_result as $address){
                            
                          echo '
                          
                          <button class=" btn  btn-danger w-100 mt-2"  data-bs-toggle="collapse" href="#collapseExample10" role="button" aria-expanded="true" aria-controls="collapseExample">Delivery Address</button> 
            <div class="collapse card-body show" id="collapseExample10">
              <p>'.$address['name'].' </p>
              <p>'.$address['phone_no'].' </p>
              <p>'.$address['address'].' </p>
            </div>
         
          
          
          ';
        
        }

        echo '</div>';

                      
                  
                        } echo '</div>';

                      }else{
                        echo "<h2>No orders Yet !! </h2>";
                      }

                    ?>
                       
                           

                            
                        
                
            </div>
        </div>
    </section>
 


    <?php include 'components/_footer.php' ?>
    




    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="js/index.js"></script>
    <script src="js/_navbar.js"></script>
  </body>
</html>