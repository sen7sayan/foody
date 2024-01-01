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
    
    <!-- navbar start  -->

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="brand-logo d-flex" href="/index.html">
        <img src="images/logo.gif" alt="logo">
        <img src="images/name.jpg" alt="name">
        
    </a>
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="log-in collapse navbar-collapse" id="navbarSupportedContent">
        <form class="my-form d-flex ms-auto" role="search">
            <input class="search-box form-control me-2 rounded-5" name="search" type="search" placeholder="today's menu" aria-label="Search">
            <button class="btn btn-danger rounded" type="submit" >Search</button>
        </form>

      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/checkout.html"><i class="fa-solid fa-bowl-food text-danger"></i> mytable</a>
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





    <!-- carasoul start  -->
    <header>
      <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="1500">
            <img src="/images/briyani.jpg" class=" d-block w-100 carousel-img" alt="...">
          </div>
          <div class="carousel-item" data-bs-interval="1000">
            <img src="/images/offers.jpg" class="carousel-img d-block w-100" alt="...">
          </div>
          <div class="carousel-item " data-bs-interval="1000">
            <img src="/images/noodles.jpg" class="carousel-img d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </header>
    
    <!-- carasoul end  -->




    <!-- category start -->

    <section>
        <div class="container text-center my-5 ">
            <h2 class="fw-bold my-5"><i class="fa-solid fa-cart-arrow-down text-danger"></i> Make Your Order</h2>
            <div>
                <div class="d-flex justify-content-around">
                    
                    <div class="food-img">
                        <img src="https://thumbs.dreamstime.com/b/schezwan-paneer-black-bowl-dark-slate-background-indo-chinese-cuisine-dish-deep-fried-cheese-onion-sauce-top-161151362.jpg" alt="">
                        <h5>Panner</h5>
                    </div>


                    <div class="food-img">
                        <img src="/images/foods/noodles.avif" alt="">
                        <h5>Noodles</h5>
                    </div>


                    <div class="food-img">
                        <img src="https://archive.org/download/fish-food-by-midjourney./IMG_20230922_200541.jpg" alt="">
                        <h5>Fish</h5>
                    </div>
                </div>
                <div class="d-flex justify-content-around my-5">

                
                    <a class="food-img text-decoration-none text-dark" href="/food1.html">
                        <img src="https://img.freepik.com/premium-photo/delicious-chicken-biryani-black-dish-wooden-table-close-up-photography_5095-2065.jpg" alt="">
                        <h5>Briyani</h5>
                    </a>

                    <div class="food-img">
                        <img src="https://previews.123rf.com/images/dolphfyn/dolphfyn1311/dolphfyn131100075/23451850-hot-and-crispy-fried-chicken-chili-garlic-and-black-pepper-on-black-background.jpg" alt="">
                        <h5>Fries</h5>
                    </div>

                    <div class="food-img">
                        <img src="https://thumbs.dreamstime.com/b/pepperoni-pizza-black-background-pepperoni-pizza-black-background-picture-perfect-you-to-design-your-117753268.jpg" alt="">
                        <h5>Pizza</h5>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- category end  -->



    <!-- customer review start -->
        <section>
            <div class="container-fluid">
                <h2 class="text-center fw-bold pb-3"> Our Customer Reviews</h2>
                <div class="customer-box d-flex justify-content-around g-5">
                    <div class="card" style="width: 18rem;">
                        <img src="https://images.pexels.com/photos/769730/pexels-photo-769730.jpeg?auto=compress&cs=tinysrgb&w=600" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title fw-bold">Viki Muhry</h5>
                          <p class="card-text">
                            
"Exceptional pizza experience! Perfectly crafted crust, flavorful toppings, and gooey cheese. Lovely cafe and restaurant delivers a slice of pure satisfaction!"
                          </p>
                          <i class="fa-solid fa-star text-danger"></i>
                          <i class="fa-solid fa-star text-danger"></i>
                          <i class="fa-solid fa-star text-danger"></i>
                          <i class="fa-solid fa-star text-danger"></i>
                          <i class="fa-solid fa-star text-danger"></i>
                        </div>
                    </div>


                    <div class="card" style="width: 18rem;">
                        <img src="https://images.pexels.com/photos/1391498/pexels-photo-1391498.jpeg?auto=compress&cs=tinysrgb&w=600" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title fw-bold">Rinki Patel</h5>
                          <p class="card-text">"Biryani perfection! Aromatic symphony, tender meat, and exquisite spices. Lovely cafe and restaurant crafts a culinary masterpiece. Unforgettable flavors, pure delight!"</p>
                          <i class="fa-solid fa-star text-danger"></i>
                          <i class="fa-solid fa-star text-danger"></i>
                          <i class="fa-solid fa-star text-danger"></i>
                          <i class="fa-solid fa-star text-danger"></i>
                          <i class="fa-regular fa-star text-danger"></i>
                        </div>
                    </div>



                    <div class="card" style="width: 18rem;">
                        <img src="https://images.pexels.com/photos/1205033/pexels-photo-1205033.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title fw-bold">Amar Singh</h5>
                          <p class="card-text">
                            
"Outstanding food bulk orders! Impeccable quality, generous portions, timely delivery. Lovely cafe and restaurant exceeds expectations, making large gatherings deliciously stress-free!"</p>
<i class="fa-solid fa-star text-danger"></i>
<i class="fa-solid fa-star text-danger"></i>
<i class="fa-solid fa-star text-danger"></i>
<i class="fa-solid fa-star text-danger"></i>
<i class="fa-solid fa-star text-danger"></i>
                        </div>
                      </div>
                </div>

            </div>
        </section>
    <!-- customer review end -->


    <hr class="mt-5 w-50 m-auto">
    <!-- chef start  -->


    <section class="my-5 p-5">
        <div class="container-fluid">
            <h2 class="text-center fw-bold pb-5">What Our Chefs Think ?</h2>
            <div class="row">
                <div class="col-12 col-md-6 chef-review d-flex justify-content-center align-items-center">
                    <img src="https://img.freepik.com/premium-vector/chef-logo-design-vector-template-restaurant-logo-silhouette-chef-vector-cooking-logo_625890-149.jpg?w=2000" alt="">
                    <div>
                        <h5 class="fw-bold">Chef Amrit Pal</h5>
                        <p>"Chef's mastery shines! Every dish at Lovely Cafe and Restaurant is a symphony of flavors, artfully presented. Culinary excellence at its finest."</p>
                    </div>
                </div>

                <div class="col-12 col-md-6 chef-review d-flex justify-content-center align-items-center">
                    <img src="https://img.freepik.com/premium-vector/chef-logo-design-vector-template-restaurant-logo-silhouette-chef-vector-cooking-logo_625890-149.jpg?w=2000" alt="">
                    <div>
                        <h5 class="fw-bold">Chef Subham Nath</h5>
                        <p>"Chef's biryani is a masterpiece at Lovely Cafe and Restaurant. A symphony of spices, tender meat, and aromatic rice—a culinary triumph."</p>
                    </div>
                </div>
            </div>

           
               
        </div>
    </section>
    <!-- chef end  -->



    <!-- contact us start -->

    <hr class="mb-5 w-50 m-auto">

    <section class="">
      <div class="container">
        <h2 class="text-center fw-bold pb-3 ">Contact Us</h2>
        <form>
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

          
          
          <div id="emailHelp" class="form-text pb-3">We are happy to know you</div>
          <button type="submit" class="btn btn-danger">Submit</button>
        </form>
        

      </div>
    </section>
    



    <!-- contact us end -->





    <footer class="mt-5 py-5 bg-danger-subtle">
      
      <div class="container">
        <h2 class="py-3">Lovely Universe</h2>
        <div class="row">
          <div class="col">
            <h5>About Lovely</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a class="nav-link p-0 text-body-secondary" href="">Home</a></li>
              <li class="nav-item mb-2"><a class="nav-link p-0 text-body-secondary" href="">Features</a></li>
              <li class="nav-item mb-2"><a class="nav-link p-0 text-body-secondary" href="">Pricing</a></li>
              <li class="nav-item mb-2"><a class="nav-link p-0 text-body-secondary" href="">FAQs</a></li>
              <li class="nav-item mb-2"><a class="nav-link p-0 text-body-secondary" href="">About</a></li>
          </div>
    
    
            <div class="col">
              <h5>Offers</h5>
              <ul class="nav flex-column">
                <li class="nav-item mb-2"><a class="nav-link p-0 text-body-secondary" href="">New Year</a></li>
                <li class="nav-item mb-2"><a class="nav-link p-0 text-body-secondary" href="">Summner</a></li>
                <li class="nav-item mb-2"><a class="nav-link p-0 text-body-secondary" href="">Winter</a></li>
                <li class="nav-item mb-2"><a class="nav-link p-0 text-body-secondary" href="">Feastivals</a></li>
                <li class="nav-item mb-2"><a class="nav-link p-0 text-body-secondary" href="">30% off</a></li>
            </div>
    
    
            <div class="col">
              <h5>Learn More</h5>
              <ul class="nav flex-column">
                <li class="nav-item mb-2"><a class="nav-link p-0 text-body-secondary" href="">Privacy</a></li>
                <li class="nav-item mb-2"><a class="nav-link p-0 text-body-secondary" href="">Security</a></li>
                <li class="nav-item mb-2"><a class="nav-link p-0 text-body-secondary" href="">Terms</a></li>
                <li class="nav-item mb-2"><a class="nav-link p-0 text-body-secondary" href="">Sitemap</a></li>
            </div>
            
    
            <div class="newsletter col-lg-6 col-sm-12">
              <h5>Subscribe to our newsletter</h5>
              <p>Monthly digest of what's new and exciting from us.</p>
              <div class="">
                <input id="newsletter1" type="text" class="form-control mb-2" placeholder="Email address">
                <button class="btn btn-danger" type="button">Subscribe</button>
              </div>
            </div>
          </div>
        </div>
        
    </footer>




    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="js/index.js"></script>
  </body>
</html>