
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <!-- Add Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- Add custom CSS -->
    <link rel="stylesheet" href="../css/style.css">
    <!-- Add fontawesome -->
    <script src="https://kit.fontawesome.com/07c9fa584f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js" integrity="sha512-uKQ39gEGiyUJl4AI6L+ekBdGKpGw4xJ55+xyJG7YFlJokPNYegn9KwQ3P8A7aFQAUtUsAQHep+d/lrGqrbPIDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
    <!-- Navbar -->
    <?php include 'navigation.php';?>
    <!--Banner-->
    <div class="banner_product d-flex ">
        <div class="container-fluid mt-5">
            <div class="overlay ">
                <div class="container ">
                    <div class="d-flex flex-column align-items-center justify-content-center">
                        <h1 class="mt-5">Products </h1>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <!--Prouduct-->
    <!--<section id="featured" class="my-5 pb-5">
        <div class="container text-center mt-5 py-5">
            <h3>Our featured</h3>
            <hr>
            <p>Here you can check our featured products.</p>
        </div>
        
        <div class="row mx-auto container">
            <?php include '../server/get_featured_products.php' ?>
            <?php while($row=$featured_products->fetch_assoc()){ ?>
                <div class="product text-center col-lg-3 col-md-4 col-sm-12">
                <img class="img-fluid mb-3" src="<?php echo $row['img_url'];?>" />
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h5 class="p-name"><?php echo $row['name']; ?></h5>
                <h4 class="p-price">$<?php echo $row['price'];?></h4>
                <a href="<?php echo "singleproduct.php?id=".$row['id'];?>"><button class="buy-btn">Buy Now</button></a>
                </div>
                <?php } ?>
        </div> 
    </section>-->

    <section id="brand">
        <div class="container">
            <h2 class="text-center mb-3">Our Products</h2>
            <div class="row mt-5 mb-2">
                <div class="col-lg-4 col-sm-">
                    <div class="card w-100" >
                        <div class="row">
                            <div class="col-lg-9 col-md-5">
                                <button class="ms-4 mt-3 mb-3 sale-icon">Sale</button>
                            </div>
                            
                            <div class="col-lg-3 col-md-5">
                                <button onclick="Toggle()"  class="heart-btns mt-4" id="heart-btn">
                                    <i class="fa-solid fa-heart fa-2xl"></i>
                                </button>
                            </div>
                        </div>
                        <img src="../images/web images/Product images/air_force_one-transformed.png" class="card-img-top" alt="casualwear"   >
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6 col-md-5"><h3 class="card-title mb-4">NIKE <span class="font-card ms-2">air-force-one</span></h5></div>
                                <div class="col-lg-6 col-md-5">
                                    <p class="price mt-1 " id="price">
                                        $135.00
                                        <button class="btn-cart ms-5" id="cart">
                                            <i class="fas fa-shopping-bag fa-2xl "></i>
                                        </button>
                                    </p>
                                    
                                </div>
                            </div>
                          
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card w-100" >
                        <div class="row">
                            <div class="col-lg-9 col-md-5">
                                <button class="ms-4 mt-3 mb-3 sale-icon">Sale</button>
                            </div>
                            
                            <div class="col-lg-3 col-md-5">
                                <button onclick="Toggle()"  class="heart-btns mt-4" id="heart-btn">
                                    <i class="fa-solid fa-heart fa-2xl"></i>
                                </button>
                            </div>
                        </div>
                        <img src="../images/web images/Product images/air_force_one-transformed.png" class="card-img-top" alt="casualwear"   >
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6 col-md-5"><h3 class="card-title mb-4">NIKE <span class="font-card ms-2">air-force-one</span></h5></div>
                                <div class="col-lg-6 col-md-5">
                                    <p class="price mt-1 " id="price">
                                        $135.00
                                        <button class="btn-cart ms-5" id="cart">
                                            <i class="fas fa-shopping-bag fa-2xl "></i>
                                        </button>
                                    </p>
                                    
                                </div>
                            </div>
                          
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card w-100" >
                        <div class="row">
                            <div class="col-lg-9 col-md-5">
                                <button class="ms-4 mt-3 mb-3 sale-icon">Sale</button>
                            </div>
                            
                            <div class="col-lg-3 col-md-5">
                                <button onclick="Toggle()"  class="heart-btns mt-4" id="heart-btn">
                                    <i class="fa-solid fa-heart fa-2xl"></i>
                                </button>
                            </div>
                        </div>
                        <img src="../images/web images/Product images/air_force_one-transformed.png" class="card-img-top" alt="casualwear">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6 col-md-5"><h3 class="card-title mb-4">NIKE <span class="font-card ms-2">air-force-one</span></h5></div>
                                <div class="col-lg-6 col-md-5">
                                    <p class="price mt-1 " id="price">
                                        $135.00
                                        <button class="btn-cart ms-5" id="cart">
                                            <i class="fas fa-shopping-bag fa-2xl "></i>
                                        </button>
                                    </p>
                                    
                                </div>
                            </div>
                          
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-lg-4">
                    <div class="card w-120">
                        <div class="row">
                            <div class="col-lg-9 col-md-5">
                                <button class="ms-4 mt-3 mb-3 sale-icon">Sale</button>
                            </div>
                            
                            <div class="col-lg-3 col-md-5">
                                <button onclick="Toggle()"  class="heart-btns mt-4" id="heart-btn">
                                    <i class="fa-solid fa-heart fa-2xl"></i>
                                </button>
                            </div>
                        </div>
                        <img src="../images/web images/Product images/air_force_one-transformed.png" class="card-img-top" alt="casualwear"   >
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6 col-md-5"><h3 class="card-title mb-4">NIKE <span class="font-card ms-2">air-force-one</span></h5></div>
                                <div class="col-lg-6 col-md-5">
                                    <p class="price mt-1 " id="price">
                                        $135.00
                                        <button class="btn-cart ms-5" id="cart">
                                            <i class="fas fa-shopping-bag fa-2xl "></i>
                                        </button>
                                    </p>
                                    
                                </div>
                            </div>
                          
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card w-100">
                        <div class="row">
                            <div class="col-lg-9 col-md-5">
                                <button class="ms-4 mt-3 mb-3 sale-icon">Sale</button>
                            </div>
                            
                            <div class="col-lg-3 col-md-5">
                                <button onclick="Toggle()"  class="heart-btns mt-4" id="heart-btn">
                                    <i class="fa-solid fa-heart fa-2xl"></i>
                                </button>
                            </div>
                        </div>
                        <img src="../images/web images/Product images/air_force_one-transformed.png" class="card-img-top" alt="casualwear"   >
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6 col-md-5"><h3 class="card-title mb-4">NIKE <span class="font-card ms-2">air-force-one</span></h5></div>
                                <div class="col-lg-6 col-md-5">
                                    <p class="price mt-1 " id="price">
                                        $135.00
                                        <button class="btn-cart ms-5" id="cart">
                                            <i class="fas fa-shopping-bag fa-2xl "></i>
                                        </button>
                                    </p>
                                    
                                </div>
                            </div>
                          
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card w-100" >
                        <div class="row">
                            <div class="col-lg-9 col-md-5">
                                <button class="ms-4 mt-3 mb-3 sale-icon">Sale</button>
                            </div>
                            
                            <div class="col-lg-3 col-md-5">
                                <button onclick="Toggle()"  class="heart-btns mt-4" id="heart-btn">
                                    <i class="fa-solid fa-heart fa-2xl"></i>
                                </button>
                            </div>
                        </div>
                        <img src="../images/web images/Product images/air_force_one-transformed.png" class="card-img-top" alt="casualwear"   >
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6 col-md-5"><h3 class="card-title mb-4">NIKE <span class="font-card ms-2">air-force-one</span></h5></div>
                                <div class="col-lg-6 col-md-5">
                                    <p class="price mt-1 " id="price">
                                        $135.00
                                        <button class="btn-cart ms-5" id="cart">
                                            <i class="fas fa-shopping-bag fa-2xl "></i>
                                        </button>
                                    </p>
                                    
                                </div>
                            </div>
                          
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-5">
                <button class="btn-view-more">VIEW MORE</button>
            </div>
            
            
        </div>
        
    </section> 

    <!--Pagination-->
    <!--<nav aria-label="Page text-center navigation">
        <div class="container ">
        <ul class="pagination mt-5">
            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">Next</a></li>
        </ul>
        </div>
        
    </nav>-->





    <!--Contact-->
    <section id="contact" class="container my-5 py-5">
        <div class="container text-center mt-5">
            <h3>Contact us</h3>
            <hr class="mx-auto">
            <p class="w-50 mx-auto">
                Phone number: <span>09-11223344</span>
            </p>
            <p class="w-50 mx-auto">
                Email: <span>litsneakers@gmail.com</span>
            </p>
            <p class="w-50 mx-auto">
                We work 24/7 to answer your questions.
            </p>
        </div>
    </section>

    <!--Footer-->
    <footer>
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3">
                        <img src="../images/Logo/litlogo-removebg-preview.png" alt="litlogo" width="45" height="24">
                        <p>Sneaker Store</p>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <h3>Featured</h3>
                        <ul class="mt-4">
                            <li><a href="#">Men</a></li>
                            <li><a href="#">Woman</a></li>
                            <li><a href="#">Boys</a></li>
                            <li><a href="#">Girls</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <h3>Contact Us</h3>
                        <h4 class="mt-4">Address</h4>
                        <address><i class="fa-solid fa-location-dot fa-bounce me-2" style="color: #eff1f5;"></i>
                            Block(5),NY
                        </address>
                        <h4>Phone</h4>
                        <p><i class="fa-solid fa-phone me-2" style="color: #fafafa;"></i>09-11223344</p>
                        <h4>Mail</h4>
                        <p><i class="fa-solid fa-envelope me-2" style="color: #f6f9fd;"></i>litsneakers@gmail.com</p>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <h3>Follow Us on:</h3>
                        <div class="row mt-5">
                            <div class="col-md-4">
                                <i class="fa-brands fa-facebook fa-xl" style="color: #075ae9;"></i>
                            </div>
                            <div class="col-md-4">
                                <i class="fa-brands fa-instagram fa-xl" style="color: #f40b87;"></i>
                            </div>
                            <div class="col-md-4">
                                <i class="fa-brands fa-whatsapp fa-xl" style="color: yellowgreen;"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!-- Add Bootstrap JS and your custom JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
        crossorigin="anonymous"></script>
    <script src="../js/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js" integrity="sha512-uKQ39gEGiyUJl4AI6L+ekBdGKpGw4xJ55+xyJG7YFlJokPNYegn9KwQ3P8A7aFQAUtUsAQHep+d/lrGqrbPIDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>