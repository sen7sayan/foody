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
    <title>Welcome to Lovely</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    
</head>
  <body>
    
  <?php include 'components/_navbar.php' ?>



    <section>
        <div class="container d-flex">
            <div>
                <h5>Your Billing Address</h5>
                <div class="row">
                    <div class="col-6 col-lg-6 mb-3 col-md-12">
                      <input type="text" class="form-control" id="personname" aria-describedby="personname" placeholder="Name">
                    </div>
          
                    <div class="col-6 col-lg-6 mb-3 col-md-12">
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                    </div>
                    <div class="col-12 col-lg-12 mb-3 col-md-12">
                      <textarea name="" id="" cols="30" rows="10" placeholder="Enter your message" class="pt-2 form-control"></textarea>
                    </div>
                    
        
                  </div>
                <div>
                    
                </div>
            </div>
        </div>
    </section>
 


    <?php include 'components/_footer.php' ?>
    




    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="js/index.js"></script>
    <script src="js/_navbar.js"></script>
  </body>
</html>