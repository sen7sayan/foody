<?php
   if(session_id() == '') {
    
    session_start();

    if(!isset($_SESSION['cart']) && !isset($_SESSION['totalValue']) && !isset($_SESSION['myfood'])){
      $_SESSION['cart'] = 0;
      $_SESSION['totalValue'] = 0;
      $_SESSION['myfood'] = array();
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

    
</head>
  <body>
    
  <?php include 'components/_navbar.php' ?>

  <?php 
    // print_r($_SESSION['myfood']);
  ?>


    <section>
        
        <div class="container justify-content-between">
            <h1>Your Cart </h1>
            <hr>
            <div class="d-flex " >
                <?php
                
                    // print_r($_SESSION['myfood']);
                    if(isset($_SESSION['myfood']) && $_SESSION['cart'] >0){
                        $items = $_SESSION['myfood'];

                        echo '
                        <table class="table">
                        <thead >
                          <tr>
                            <th scope="col">sl no.</th>
                            <th scope="col">Foods</th>
                            <th scope="col">Price</th>
                            <th scope="col">Total</th>
                          </tr>
                        </thead>';
                        $i= 1;
                        foreach($items as $item){
                            echo'<hr>';
                            echo '
                        <tbody>
                          <tr>
                            
                            <th scope="row">'.$i.'</th>
                            <td>'.$item[1].'<strong> X </strong>'.$item[2].'
                            <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#edit-food">edit</button>
                            </td>
                            <td>'.$item[3].'</td>
                            <td>'.$item[4].'</td>
                            
                          </tr>
                          
                        </tbody>';
                            $i++;
                        }
                        echo '</table>';

                       
                        
                    }else{
                        echo '<p>Your cart is empty!! </p>';
                    }


                ?>
                    
                
            </div>
            <?php
            echo '<h5> Total Rs.' .$_SESSION['totalValue'].'/- </h5>';
            ?>
        </div>


        <!-- model start  -->
                      <div class="modal fade" id="edit-food" tabindex="-1" aria-labelledby="edit-food-Label" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1 class="modal-title fs-5" id="edit-food-Label">Modal title</h1>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              ...
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                          </div>
                        </div>
                      </div>
        <!-- modal end  -->
    </section>
 


    <?php include 'components/_footer.php' ?>
    




    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="js/index.js"></script>
    <script src="js/_navbar.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>

  </body>
</html>