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

  

    

    <section>
        
        <div class="container justify-content-between">
            <h1>Your Cart </h1>
            <hr>
            <div class="d-flex " >
            <div class="mb-3 mx-auto">
                  <div class="card" style="width: 18rem;">
                      <div class="card-body row">
                        <h5 class="card-title col-12">Briyani</h5>
                        <form action="cart.php" method="get" class="col-8 d-flex">
                            <input type="hidden" value="1" name="f_id" class="p-5">
                            <input type="number" class="form-control w-100 " min="1" >
                            <input href="index.php" type="submit" value="Update" class="btn btn-danger ms-2">
                            
                          </form>

                        <form action="cart.php" method="get" class="col-4">
                            <button type="submit" data-bs-target="#exampleModal" class="btn btn-danger " data-bs-toggle="modal" >Delete </button>
                        </form>
                          
                      </div>
                    </div>
            </div>
          </div>
    </section>
 


    <?php include 'components/_footer.php' ?>
    




    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="js/index.js"></script>
    <script src="js/_navbar.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>

  </body>
</html>