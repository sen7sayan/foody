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

    <section class="mt-3">
        <div class="container d-flex food-card">

            <div class="">
                <div class="card" style="width: 20rem;">
                    <img src="https://img.freepik.com/premium-photo/delicious-chicken-biryani-black-dish-wooden-table-close-up-photography_5095-2065.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Briyani</h5>
                        <div class="review d-flex justify-content-around align-items-center">
                            <div class="rating text-center">
                                <span>4/5 <i class="fa-solid fa-star text-danger"></i></span>
                                <p>Rating</p>
                            </div>
                            <div class="vr h-75 mt-3"></div>
                            <div class="orders text-center">
                                <span>5.3k+</span>
                                <p>Orders</p>
                            </div>
                            <div class="vr h-100 mt-3"></div>
                            <div class="intop text-center">
                                <span class="">#Top</span>
                                <p>5</p>
                            </div>
                        </div>
                      <p class="card-text">
                        Originating in South Asia, biryani is a flavorful rice dish with meat, spices, and fragrant basmati rice.</p>
                      
                      
                    </div>
                  </div>
            </div>
            <div class="order-cart mx-auto d-flex flex-wrap">
                
                <div class="mb-3 mx-auto">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body row">
                          <h5 class="card-title col-12">Veg Briyani</h5>
                          <form action="food1.php" method="post">
                            <input value="" type="number" name="price" style="display: none;">
                            <input value="" type="text" name="foodName" style="display: none;">
                                <select class="" name="quantity" id="">
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="">3+</option>
                                </select>
                              <input href="#" type="submit" value="Add to mytable" class="btn btn-danger ms-3">
                          </form>
                            
                        </div>
                      </div>
                </div>


                <div class="mb-3 mx-auto">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body row">
                          <h5 class="card-title col-12">Panner Briyani</h5>
                          <form action="food1.php" method="post">
                            <input value="" type="number" name="price" style="display: none;">
                            <input value="" type="text" name="foodName" style="display: none;">
                                <select class="" name="quantity" id="">
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="">3+</option>
                                </select>
                              <input href="#" type="submit" value="Add to mytable" class="btn btn-danger ms-3">
                          </form>
                            
                        </div>
                      </div>
                </div>

                <div class="mb-3 mx-auto">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body row">
                          <h5 class="card-title col-12">Chicken Briyani</h5>
                            <form action="food1.php" method="post">
                              <input value="" type="number" name="price" style="display: none;">
                              <input value="" type="text" name="foodName" style="display: none;">
                                <select class="" name="quantity" id="">
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="">3+</option>
                                </select>
                              <input href="#" type="submit" value="Add to mytable" class="btn btn-danger ms-3">
                          </form>
                            
                        </div>
                      </div>
                </div>

                <div class="mb-3 mx-auto">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body row">
                          <h5 class="card-title col-12">Mutton Briyani</h5>
                          <form action="food1.php" method="post">
                            <input value="" type="number" name="price" style="display: none;">
                            <input value="" type="text" name="foodName" style="display: none;">
                                <select class="" name="quantity" id="">
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="">3+</option>
                                </select>
                              <input href="#" type="submit" value="Add to mytable" class="btn btn-danger ms-3">
                          </form>
                            
                        </div>
                      </div>
                </div>

                

            </div>
        </div>
    </section>




    


    <?php include 'components/_footer.php' ?>
    



    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="js/index.js"></script>
  </body>
</html>