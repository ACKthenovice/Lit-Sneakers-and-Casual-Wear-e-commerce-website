<?php
include '../server/connection.php';
if(isset($_GET['id'])){
    $product_id= $_GET['id'];
    $stmt =$conn->prepare("SELECT * FROM products WHERE id=?");/*stmt=variable statement*/
    $stmt->bind_param("i",$product_id);
    $stmt->execute();
    
    $product  =$stmt->get_result();
}
else{
    header('location: index.php');
}
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
    <!-- Add custom CSS -->
    <link rel="stylesheet" href="../css/style.css">
    <!-- Add fontawesome -->
    
        <script src="https://kit.fontawesome.com/c71495202e.js" crossorigin="anonymous"></script>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-light">
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
                        <a class="nav-link" href="#">Products</a>
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

    <!--singleproduct-->
    <section class="container singleproduct my-5 pt-5"> 
        <div class="row mt-5">

            <?php while($row=$product->fetch_assoc()){?>
            
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <img  id="mainImg"  class="img-fluid w-100 pb-1" src="<?php echo $row['img_url'];?>" alt="">
                    <div class="container small-img-group mt-3">
                        <div class="small-img-col">
                            <img src="../images/web images/Product images/addidas.jpg" class="small-img" width="80%">
                        </div>
                        <div class="small-img-col">
                            <img src="../images/web images/Product images/small_images/campus_small_img_1.webp" class="small-img" width="80%">
                        </div>
                        <div class="small-img-col">
                            <img src="../images/web images/Product images/small_images/campus_small_img_2.webp" class="small-img" width="80%">
                        </div>
                        <div class="small-img-col">
                            <img src="../images/web images/Product images/small_images/campus_small_img_3.webp" class="small-img" width="80%">
                        </div>
                    </div>
                </div>

           
          
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <h6>Men/Shoes</h6>
                    <h3 class="pb-4"><?php echo $row['name'];?></h3>
                    <h2>$<?php echo $row['price'];?></h2>
                    

                    <form method="POST" action="cart.php">
                        <input type="hidden" name="product_id" value="<?php echo $row['id'];?>">
                        <input type="hidden" name="product_image" value="<?php echo $row['img_url'];?>">
                        <input type="hidden" name="product_name" value="<?php echo $row['name'];?>">
                        <input type="hidden" name="product_price" value="<?php echo $row['price'];?>">
                        <input type="number" name="product_quantity" value="1">
                        <button class="buy-btn"  name="add_to_cart" type="submit">Add to Cart</button>
                    </form>
                    
                    <h4 class="mt-5 mb-5">Product Details</h4>
                    <span><?php echo $row['description'];?>
                    </span>
                </div>
           
            <?php } ?>
        </div>
    </section>

    <!--Relatedproduct-->
    <section id="related-products" class="my-5 pb-5">
        <div class="container text-center mt-5 py-5">
            <h3>related-products</h3>
            <hr class="mx-auto">
        </div>
        <div class="row mx-auto container-fluid">
            <div class="product text-center col-lg-3 col-md-4 col-sm-12">
                <img class="img-fluid mb-3" src="../images/web images/Product images/air-force-white-black.jpg"/>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h5 class="p-name">Sports Shoes</h5>
                <h4 class="p-price">200 USD</h4>
                <button class="buy-btn">Buy Now</button>
            </div>
            <div class="product text-center col-lg-3 col-md-4 col-sm-12">
                <img class="img-fluid mb-3" src="../images/web images/Product images/air_force.png "/>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h5 class="p-name">Sports Shoes</h5>
                <h4 class="p-price">200 USD</h4>
                <button class="buy-btn">Buy Now</button>
            </div>
            <div class="product text-center col-lg-3 col-md-4 col-sm-12">
                <img class="img-fluid mb-3" src="../images/web images/Product images/air_force_one-transformed.png"/>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h5 class="p-name">Sports Shoes</h5>
                <h4 class="p-price">200 USD</h4>
                <button class="buy-btn">Buy Now</button>
            </div>
            <div class="product text-center col-lg-3 col-md-4 col-sm-12">
                <img class="img-fluid mb-3" src="../images/web images/Product images/nike_airmax-removebg-preview (1).png"/>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h5 class="p-name">Sports Shoes</h5>
                <h4 class="p-price">200 USD</h4>
                <button class="buy-btn">Buy Now</button>
            </div>
        </div>

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

    <script>
        var mainImg=document.getElementById("mainImg");
        var smallImg= document.getElementsByClassName("small-img");
        
        for(let i=0; i<4; i++){
            smallImg[i].onclick =function(){
            mainImg.src = smallImg[i].src;
            }
        }
    </script>
</body>
</html>