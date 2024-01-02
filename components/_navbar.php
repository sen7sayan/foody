<!-- navbar start  -->

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

      <ul class="navbar-nav ms-lg-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="checkout.php"><i class="fa-solid fa-bowl-food text-danger"></i> mytable</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#login-page"><i class="fa-solid fa-right-to-bracket text-danger"></i> login</a>
        </li>
        
        
      </ul>
      
    </div>
  </div>
    <!-- login modal start -->
    <div class="modal fade" id="login-page" tabindex="-1" aria-labelledby="login-page" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="login-page">Log In / Sign Up</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form class="row" action="">
              <input class="col-12 form-control mb-3" type="email" name="email" id="" placeholder="Enter email">
              <input class="col-12 form-control mb-3" type="password" name="password" placeholder="Enter password">
              <input type="submit" value="Log In" class="btn btn-danger col-2 mb-3 me-3">
              <input type="submit" value="Sign Up" class="btn btn-danger col-2 mb-3 ">
            </form>
            
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <!-- login modal end  -->
</nav>

    <!-- navbar end  -->