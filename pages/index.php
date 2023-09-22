<?php
include '../server/connection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sneaker Store</title>
    <!-- Add Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
            integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
            integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
            crossorigin="anonymous"></script>
    <!-- Add custom CSS -->
    <link rel="stylesheet" href="../css/style.css">
    <!-- Add javascript-->
    <script src="../js/script.js"></script>
    <!-- Add fontawesome -->
    <script src="https://kit.fontawesome.com/c71495202e.js" crossorigin="anonymous"></script>

</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white py-3 fixed-top">
        <div class="container">
            <div class="container-fluid d-flex justify-content-between align-items-center">
                <a class="navbar-brand order-md-0" href="#">
                    <img src="../images/Logo/litlogo-removebg-preview.png" alt="litlogo" width="45" height="24">
                </a>
                <button class="navbar-toggler order-md-1" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse nav-buttons" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 custom custom-ul">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../pages/product.html">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../pages/contact.html">Contact</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <i class="fas fa-shopping-bag"></i>
                    </li>
                </ul>
            </div>
        </div>
    </nav>



    <!-- Home -->
    <section id="home">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-8 ">
                    <h5 class="mb-3">New arrival</h5>
                    <h1 class="mt-4"><span>Best Prices</span> for this season.</h1>
                    <p class="mb-4">Eshop offers the best products for the most affordable prices.</p>
                    <button class="btn">Shop Now</button>
                </div>
                <div class="col-md-4 col-md-4">
                    <img src="../images/web images/adidas-Sambarose-White-Gum-Womens-AQ1134_w900.png" class="rotate_image" width="350" height="197">
                </div>
            </div>
        </div>
    </section>

    <!-- Brand
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
        
    </section> -->

    <!-- New -->
    <section id="new" class="w-100">
        <div class="row p-0 m-0">
            <!--one-->
            <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
                <img class="img-fluid" src="../images/Logo/litlogo.jpg"/>
                <div class="details">
                    <h2>Extremely Awesome Shoes</h2>
                    <button class="text-uppercase">Shop Now</button>
                </div>
            </div>
            <!--two-->
            <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
                <img class="img-fluid" src="../images/Logo/litlogo.jpg"/>
                <div class="details">
                    <h2>Very Awesome Sneaker</h2>
                    <button class="text-uppercase">Shop Now</button>
                </div>
            </div>
            <!--three-->
            <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
                <img class="img-fluid" src="../images/Logo/litlogo.jpg"/>
                <div class="details">
                    <h2>Nice and Awesome Shoes</h2>
                    <button class="text-uppercase">Shop Now</button>
                </div>
            </div>
        </div>
    </section>

    <!--Featured Prouduct-->
    <section id="featured" class="my-5 pb-5">
        <div class="container text-center mt-5 py-5">
            <h3>Our featured</h3>
            <hr>
            <p>Here you can check our featured products.</p>
        </div>
        <?php include '../server/get_featured_products.php' ?>
        <?php while($row=$featured_products->fetch_assoc()){ ?>

        
        <div class="row mx-auto container-fluid">
            <div class="product text-center col-lg-3 col-md-4 col-sm-12">
                <img class="img-fluid mb-3" src="<?php echo $row['img_url'];?>"/>
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
            
        </div> 
        <?php } ?>

    </section>

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
                                <i class="fa-brands fa-facebook fa-2xl" style="color: #075ae9;"></i>
                            </div>
                            <div class="col-md-4">
                                <i class="fa-brands fa-instagram fa-2xl" style="color: #f40b87;"></i>
                            </div>
                            <div class="col-md-4">
                                <i class="fa-brands fa-youtube fa-2xl" style="color: #f01800;"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    
</body>
</html>
<!--<script>
        var heartBtn=document.getElementById('heart-btn');
function Toggle(){
    if(heartBtn.style.color=="red"){
        heartBtn.style.color= "grey"
    }
    else{
        heartBtn.style.color="red"
    }
}
    </script>-->
