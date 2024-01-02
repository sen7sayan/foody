<!-- navbar start  -->
<?php
  $showError = false;
  $showAlert = false;

  if($_SERVER["REQUEST_METHOD"] == "POST"){

    include '../lovely/connection/_dbconnection.php';
    if(isset($_POST["cname"]) == true && isset($_POST["email"]) == true && isset($_POST["password"])== true && isset($_POST["cpassword"]) == true){
      
      $email = $_POST["email"];
      $name = $_POST["cname"];
      $password = $_POST["password"];
      $cpassword = $_POST["cpassword"];

      

      if($password == $cpassword){

        $existSql = "SELECT * FROM `users` WHERE `email` = '$email'";
        $result = mysqli_query($conn,$existSql);
        $rows = mysqli_num_rows($result);

        if($rows == 0){

          $hash = password_hash($password,PASSWORD_DEFAULT);
  
          $createUserSql = "INSERT INTO `users` ( `name`, `email`, `password`, `dt`) VALUES ('$name', '$email', '$hash', current_timestamp())";
          
          $result = mysqli_query($conn,$createUserSql);
          // header("location: ../index.php");
          $showAlert = "Account Your Created Successfully !!";
  
        }else{
          $showError = "User exist, Please Log in !!";
        }
      }else{
        $showError = "Password, does not match !!";
      }

      
      
    }else if(isset($_POST["cname"]) == false && isset($_POST["email"]) == true && isset($_POST["password"])== true && isset($_POST["cpassword"]) == false){
      
      $email = $_POST["email"];
      $password = $_POST["password"];

      $existSql = "SELECT * FROM `users` WHERE `email` = '$email'";
      $result = mysqli_query($conn, $existSql);

      if(mysqli_num_rows($result) == 0){
        $showError = "User, does not exist !!";
      }else if (mysqli_num_rows($result) == 1){
        
        while($row = mysqli_fetch_assoc($result)){
          // echo $row['password'];
          if(password_verify($password, $row['password'])){
            if(session_id() == '') {
              session_start();
          
              if(!isset($_SESSION['cart']) && !isset($_SESSION['totalValue']) && !isset($_SESSION['myfood'])){
                $_SESSION['cart'] = 0;
                $_SESSION['totalValue'] = 0;
                $_SESSION['myfood'] = array();
              }
              
            }
            $_SESSION['login'] = true;
            $_SESSION['username'] = $row['name'];
          }else{
            $showError = "Enter, correct password !!";
          }
        }
        
      }else{
        $showError = "Something, went wrong !!";
      }


    }
  }

?>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="brand-logo d-flex" href="index.php">
        <img src="images/logo.gif" alt="logo">
        <img class="name-logo" src="images/name.jpg" alt="name">
        
    </a>
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="log-in collapse navbar-collapse" id="navbarSupportedContent">
        <form class="my-form d-flex ms-lg-auto" role="search">
            <input class="search-box form-control me-2 rounded-5" name="foodsearch" type="text" placeholder="lets eat something" aria-label="Search">
            <button class="btn btn-danger rounded" type="submit" >Search</button>
        </form>
      <?php
        if(isset($_SESSION['login']) && $_SESSION['login'] == true){
          echo '<ul class="navbar-nav ms-lg-auto mb-2 mb-lg-0">

          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle " data-bs-toggle="dropdown" aria-expanded="false" href="#"><i class="fa-solid fa-bowl-food text-danger"></i> mytable ('.$_SESSION['cart'].')</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Cart</a></li>
            <li><a class="dropdown-item" href="#">Orders</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Change My Address</a></li>
          </ul>
        </li>

          <li class="nav-item dropstart ">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" href="#"><i class="fa-solid fa-user text-danger"></i> '.$_SESSION['username'].'</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="action/logout.php">Log Out</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Delete my account</a></li>
            </ul>
          </li>

          
          
         
          
          
        </ul>';
        }

        if(!isset($_SESSION['login'])){
          echo '<ul class="navbar-nav ms-lg-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="checkout.php"><i class="fa-solid fa-bowl-food text-danger"></i> mytable ('.$_SESSION['cart'].')</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#login-page"><i class="fa-solid fa-right-to-bracket text-danger"></i> Login/SignUp</a>
          </li>          
        </ul>';
        }
      ?>
      
      
    </div>
  </div>
  <?php 
  if(!isset($_SESSION['login'])){
    echo '
    <!-- login modal start -->
    <div class="modal fade" id="login-page" tabindex="-1" aria-labelledby="login-page" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="login-page">Log In / Sign Up</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form class="row" action="index.php" id="signIn-form"  method="post">
              <input class="col-12 form-control mb-3" type="email" name="email" id="" placeholder="Enter email">
              <input class="col-12 form-control mb-3" type="password" name="password" placeholder="Enter password">
              <input type="submit" value="Log In" class="btn btn-danger col-4 mb-3 me-3">
              <input type="button" value="Go to Sign Up" class="btn btn-danger col-6 mb-3 " id="signUp-btn">
            </form>

            <form class="row d-none" action="index.php" id="signUp-form" method="post">
              <input class="col-12 form-control mb-3" type="text" name="cname" id="" placeholder="Enter your name">
              <input class="col-12 form-control mb-3" type="email" name="email" id="" placeholder="Enter email">
              <input class="col-12 form-control mb-3" type="password" name="password" placeholder="Enter password">
              <input class="col-12 form-control mb-3" type="password" name="cpassword" placeholder="Enter confirm password">
              
              <input type="button" value="Go to Log In" class="btn btn-danger col-6 mb-3 me-3" id="signIn-btn">
              <input type="submit" value="Sign Up" class="btn btn-danger col-4 mb-3 " >
            </form>
            
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <!-- login modal end  -->
  ';}
    ?>
</nav>

    <!-- navbar end  -->