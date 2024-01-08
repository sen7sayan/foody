
<?php
   if(session_id() == '') {
    session_start();
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

    <?php
       
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if(isset($_POST['sub_email'])){

                    include '../lovely/connection/_dbconnection.php';
                    $sub_email = $_POST['sub_email'];
                    if (filter_var($sub_email, FILTER_VALIDATE_EMAIL)){
                            $insert_email_sql = "INSERT INTO `tbl_newsletter` ( `fld_email`, `fld_date`)
                            VALUES ( '$sub_email', current_timestamp())";
                            $insert_email_sql_result = mysqli_query($conn,$insert_email_sql);
                            if($insert_email_sql_result){
                                echo '
                                
                                <div class="alert alert-success" role="alert">
                                <h4 class="alert-heading">Well done!</h4>
                                <p>Aww yeah, you successfully Subscribe  '.$sub_email.' to our newsletter</p>
                                <hr>
                                <p class="mb-0">Get exiting offers, news</p>
                            </div>
                                
                                ';
                        }
                    }
                    

            }   
        }else{
           echo '

                <div class="container my-5">
                <div class="newsletter col-lg-12 col-sm-12">
                <h5>Subscribe to our newsletter</h5>
                <p>Monthly digest of what is new and exciting from us.</p>
                <form class="" method="post" action="newsletter.php">
                  <input id="newsletter1" name="sub_email" type="email" class="form-control mb-2" placeholder="Email address">
                  <button class="btn btn-danger" type="submit">Subscribe</button>
                </form>
              </div>
                </div>
           ';


        }
    
    ?>



    
    <?php include 'components/_footer.php' ?>



    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="js/index.js"></script>
    <script src="js/_navbar.js"></script>
  </body>
</html>