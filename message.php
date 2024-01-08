
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
            if(isset($_POST['name']) && isset($_POST['sub_email']) && isset($_POST['message'])){
               
                    include '../lovely/connection/_dbconnection.php';
                    $sub_email = $_POST['sub_email'];
                    $message = $_POST['message'];
                    $name = $_POST['name'];
                    if (filter_var($sub_email, FILTER_VALIDATE_EMAIL) && preg_match("/^[a-zA-Z-' ]*$/",$name)){
                            $insert_email_sql = "INSERT INTO `messages` (`sno`, `name`, `email`, `message`, `dt`) 
                                VALUES (NULL, '$name', '$sub_email',
                                 '$message', current_timestamp())";
                            $insert_email_sql_result = mysqli_query($conn,$insert_email_sql);
                            if($insert_email_sql_result){
                                echo '
                                
                                <div class="alert alert-success" role="alert">
                                <h4 class="alert-heading">Well done!</h4>
                                <p>Aww yeah, Message sent by  '.$sub_email.' to Lovely thank you</p>
                                <hr>
                                <p class="mb-0">Get exiting offers, news</p>
                            </div>
                                
                                ';
                        }
                    }else{
                        echo '
                                
                        <div class="alert alert-danger" role="alert">
                        <h4 class="alert-heading">Well done!</h4>
                        <p>Aww yeah, Message not sent by  '.$sub_email.' to Lovely thank you</p>
                        <hr>
                        <p class="mb-0">Get exiting offers, news</p>
                    </div>
                        
                        ';
                    }
                    

            }   
        }else{
           echo '

        <section class="">
         <div class="container">
           <h2 class="text-center fw-bold pb-3 ">Contact Us</h2>
           <form method="post" action="message.php">
             <div class="row">
               <div class="col-6 col-lg-6 mb-3 col-md-12">
                 <input name="name" type="text" class="form-control" id="personname" aria-describedby="personname" placeholder="Name" required>
               </div>
     
               <div class="col-6 col-lg-6 mb-3 col-md-12">
                 <input name="sub_email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" required>
               </div>
               <div class="col-12 col-lg-12 mb-3 col-md-12">
                 <textarea  name="message" id="" cols="30" rows="10" placeholder="Enter your message" class="pt-2 form-control" required></textarea>
               </div>
               
   
             </div>
   
             
             
             <div id="emailHelp" class="form-text pb-3">We are happy to know you</div>
             <button type="submit" class="btn btn-danger">Submit</button>
           </form>
           
   
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