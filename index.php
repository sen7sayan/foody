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
      if($showError){
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Oo ! </strong>' . $showError . ' 
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
      }

      if($showAlert){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Hey! </strong>' . $showAlert . ' 
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
      }
    ?>
    <!-- carasoul start  -->
    <header>
      <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="2000">
            <img src="../lovely/images/briyani.jpg" class=" d-block w-100 carousel-img" alt="...">
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <img src="../lovely/images/offers.jpg" class="carousel-img d-block w-100" alt="...">
          </div>
          <div class="carousel-item " data-bs-interval="2000">
            <img src="../lovely/images/noodles.jpg" class="carousel-img d-block w-100" alt="...">
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
                    
                    <a href="food.php?p_id=3" class="food-img text-decoration-none text-dark">
                        <img class="food-logo" src="https://thumbs.dreamstime.com/b/schezwan-paneer-black-bowl-dark-slate-background-indo-chinese-cuisine-dish-deep-fried-cheese-onion-sauce-top-161151362.jpg" alt="">
                        <h5>Panner</h5>
                    </a>


                    <a href="food.php?p_id=2" class="food-img text-decoration-none text-dark">
                        <img class="food-logo" src="https://img.freepik.com/premium-photo/chinese-noodles-black-background_236836-24468.jpg" alt="">
                        <h5>Noodles</h5>
                    </a>


                    <a href="food.php?p_id=4" class="food-img text-decoration-none text-dark">
                        <img class="food-logo" src="https://archive.org/download/fish-food-by-midjourney./IMG_20230922_200541.jpg" alt="">
                        <h5>Fish</h5>
                    </a>
                </div>
                <div class="d-flex justify-content-around my-5">

                
                    <a class="food-img text-decoration-none text-dark" href="food.php?p_id=1">
                        <img class="food-logo" src="https://img.freepik.com/premium-photo/delicious-chicken-biryani-black-dish-wooden-table-close-up-photography_5095-2065.jpg" alt="">
                        <h5>Briyani</h5>
                    </a>

                    <a href="food.php?p_id=5" class="food-img text-decoration-none text-dark">
                        <img class="food-logo" src="https://previews.123rf.com/images/dolphfyn/dolphfyn1311/dolphfyn131100075/23451850-hot-and-crispy-fried-chicken-chili-garlic-and-black-pepper-on-black-background.jpg" alt="">
                        <h5>Fries</h5>
                    </a>

                    <a href="food.php?p_id=6" class="food-img text-decoration-none text-dark">
                        <img class="food-logo" src="https://thumbs.dreamstime.com/b/pepperoni-pizza-black-background-pepperoni-pizza-black-background-picture-perfect-you-to-design-your-117753268.jpg" alt="">
                        <h5>Pizza</h5>
                    </a>
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
                    <div class="card customer" style="width: 18rem;">
                        <img class="customer-img" src="https://images.pexels.com/photos/769730/pexels-photo-769730.jpeg?auto=compress&cs=tinysrgb&w=600" class="card-img-top" alt="...">
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


                    <div class="card customer" style="width: 18rem;">
                        <img class="customer-img" src="https://images.pexels.com/photos/1391498/pexels-photo-1391498.jpeg?auto=compress&cs=tinysrgb&w=600" class="card-img-top" alt="...">
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



                    <div class="card customer" style="width: 18rem;">
                        <img class="customer-img" src="https://images.pexels.com/photos/1205033/pexels-photo-1205033.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="card-img-top" alt="...">
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
                <div class="chef-moto col-12 col-md-6 chef-review d-flex justify-content-center align-items-center">
                    <img src="https://img.freepik.com/premium-vector/chef-logo-design-vector-template-restaurant-logo-silhouette-chef-vector-cooking-logo_625890-149.jpg?w=2000" alt="">
                    <div>
                        <h5 class="fw-bold">Chef Amrit Pal</h5>
                        <p>"Chef's mastery shines! Every dish at Lovely Cafe and Restaurant is a symphony of flavors, artfully presented. Culinary excellence at its finest."</p>
                    </div>
                </div>

                <div class="chef-moto col-12 col-md-6 chef-review d-flex justify-content-center align-items-center">
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





    
    <?php include 'components/_footer.php' ?>



    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="js/index.js"></script>
    <script src="js/_navbar.js"></script>
  </body>
</html>