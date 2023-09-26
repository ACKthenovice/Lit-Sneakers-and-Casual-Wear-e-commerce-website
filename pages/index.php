<?php //include '../server/connection.php'; 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sneaker Store</title>
    <!-- Add Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- Add custom CSS -->
    <link rel="stylesheet" href="../css/style.css">
    <!-- Add fontawesome -->
    <script src="https://kit.fontawesome.com/07c9fa584f.js" crossorigin="anonymous"></script>
    <!--Swiper Bundle for Slider-->
    <!--Swiper CSS-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <!--Swiper JS-->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>


</head>

<body>

    <body>

        <!-- Navbar -->
        <?php include 'navigation.php' ?>

        <!-- Home -->
        <section id="Banner">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-lg-8">
                        <h1 class="hero-title mt-4"><span>Best Prices</span> for this season.</h1>
                        <p class="hero-description">Eshop offers the best products at the most affordable prices. Explore
                            our collection today.</p>
                        <button class="hero-button"><a class="btn" href="../pages/product.php">Explore More</a></button>
                    </div>
                    <div class="col-md-4 col-lg-4">
                        <img src="../images/shoe-banner.png" class="img-fluid" alt="Banner Image">
                    </div>
                </div>
            </div>
        </section>


        <!--Slider-->
        <section class="product-slider">

            <!--==heading-->
            <h4 class="product-slider-heading pb-5">New Arrival</h4>
            <hr>

            <div class="slider-container">
                <!-- Swiper -->
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <!--1-->
                        <div class="swiper-slide">
                            <!--box------>
                            <div class="product-box">
                                <!--==offer==-->
                                <span class="product-box-offer">-20%</span>
                                <!--img-container-->
                                <div class="product-img-container">

                                    <!--img=-->
                                    <div class="product-img">
                                        <a href="http://demo47.askas8.se/sv/front-brake-assy-37-5-12-14">
                                            <img alt="" class="product-img-front" src="../images/New_Arrival/addidas.jpg" />
                                            <img alt="" class="product-img-back" src= "../images/New_Arrival/addidas.jpg"/>
                                        </a>
                                    </div>
                                </div>
                                <!--text-->
                                <div class="product-box-text">
                                    <!--category-->
                                    <div class="product-category">
                                        <span>Addidas</span>
                                    </div>
                                    <!--tile-->
                                    <a href="http://demo47.askas8.se/sv/front-brake-assy-37-5-12-14" class="product-title">
                                        Super Star Shoes
                                    </a>
                                    <!--Price-->
                                    <div class="price-buy">
                                        <span class="p-price">120$</span>
                                        <a href="http://demo47.askas8.se/sv/front-brake-assy-37-5-12-14" class="p-buy-btn">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--2-->
                        <div class="swiper-slide">
                            <!--box-->
                            <div class="product-box">
                                <!--==-->
                                <span class="product-box-offer">-40% off</span>

                                <!--img-container*-->
                                <div class="product-img-container">

                                    <!--img=-->
                                    <div class="product-img">
                                        <a href="#">
                                            <img alt="" class="product-img-front" src="../images/New_Arrival/item-2.jpg" />
                                            <img alt="" class="product-img-back" src="../images/New_Arrival/item-2.jpg" />
                                        </a>
                                    </div>
                                </div>

                                <!--text-->
                                <div class="product-box-text">
                                    <!--category-->
                                    <div class="product-category">
                                        <span>Nike</span>
                                    </div>
                                    <!--tile-->
                                    <a href="#" class="product-title">
                                        Nike Air Max
                                    </a>
                                    <!--Price-->
                                    <div class="price-buy">
                                        <span class="p-price">500$</span>
                                        <a href="#" class="p-buy-btn">Shop Now</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!--3-->
                        <div class="swiper-slide">
                            <!--box------>
                            <div class="product-box">
                                <!--==-->
                                <span class="product-box-offer">-60%</span>

                                <!--img-container*-->
                                <div class="product-img-container">

                                    <!--img=-->
                                    <div class="product-img">
                                        <a href="#">
                                            <img alt="" class="product-img-front" src= "../images/New_Arrival/item-1.png"/>
                                            <img alt="" class="product-img-back" src= "../images/New_Arrival/item-1.png"/>
                                        </a>
                                    </div>
                                </div>

                                <!--text-->
                                <div class="product-box-text">
                                    <!--category-->
                                    <div class="product-category">
                                        <span>Yeezy</span>
                                    </div>
                                    <!--tile-->
                                    <a href="#" class="product-title">
                                        Men Casual Shoes Sports Shoes for Men 
                                    </a>
                                    <!--Price-->
                                    <div class="price-buy">
                                        <span class="p-price">800$</span>
                                        <a href="#" class="p-buy-btn">Shop Now</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!--6-->
                        <div class="swiper-slide">
                            <!--box------>
                            <div class="product-box">
                                <!--==-->
                                <span class="product-box-offer">-70%</span>

                                <!--img-container*-->
                                <div class="product-img-container">

                                    <!--img=-->
                                    <div class="product-img">
                                        <a href="#">
                                            <img alt="" class="product-img-front" src="../images/New_Arrival/item-4.jpg" />
                                            <img alt="" class="product-img-back" src="../images/New_Arrival/item-4.jpg" />
                                        </a>
                                    </div>
                                </div>

                                <!--text-->
                                <div class="product-box-text">
                                    <!--category-->
                                    <div class="product-category">
                                        <span>Addidas</span>
                                    </div>
                                    <!--tile-->
                                    <a href="#" class="product-title">
                                        Blue Sport Wear
                                    </a>
                                    <!--Price-->
                                    <div class="price-buy">
                                        <span class="p-price">1000$</span>
                                        <a href="#" class="p-buy-btn">Shop Now</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!--4-->
                        <div class="swiper-slide">
                            <!--box------>
                            <div class="product-box">
                                <!--==-->
                                <span class="product-box-offer">-20%</span>

                                <!--img-container*-->
                                <div class="product-img-container">

                                    <!--img=-->
                                    <div class="product-img">
                                        <a href="#">
                                            <img alt="" class="product-img-front" src="../images/New_Arrival/item-14.jpg" />
                                            <img alt="" class="product-img-back" src="../images/New_Arrival/item-14.jpg" />
                                        </a>
                                    </div>
                                </div>

                                <!--text-->
                                <div class="product-box-text">
                                    <!--category-->
                                    <div class="product-category">
                                        <span>Nike</span>
                                    </div>
                                    <!--tile-->
                                    <a href="#" class="product-title">
                                        Neon Casual
                                    </a>
                                    <!--Price-->
                                    <div class="price-buy">
                                        <span class="p-price">1300$</span>
                                        <a href="#" class="p-buy-btn">Shop Now</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!--5-->
                        <div class="swiper-slide">
                            <!--box------>
                            <div class="product-box">
                                <!--==-->
                                <span class="product-box-offer">-60%</span>

                                <!--img-container*-->
                                <div class="product-img-container">

                                    <!--img=-->
                                    <div class="product-img">
                                        <a href="#">
                                            <img alt="" class="product-img-front" src="../images/New_Arrival/item-16.jpg" />
                                            <img alt="" class="product-img-back" src="../images/New_Arrival/item-16.jpg" />
                                        </a>
                                    </div>
                                </div>

                                <!--text-->
                                <div class="product-box-text">
                                    <!--category-->
                                    <div class="product-category">
                                        <span>Converse</span>
                                    </div>
                                    <!--tile-->
                                    <a href="#" class="product-title">
                                        Green Day
                                    </a>
                                    <!--Price-->
                                    <div class="price-buy">
                                        <span class="p-price">1200$</span>
                                        <a href="#" class="p-buy-btn">Shop Now</a>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--btns=-->
            <div class="slider-btns">
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </section>

        <!--About us-->
        <section class="about-us">
            <div class="container py-5">
                <div class="row">
                    <div class="col-md-6 about-us-section">
                        <div class="about-content">
                            <h2 class="section-title">About Us</h2>
                            <p class="section-description">We are a team of passionate shoe lovers who want to share our enthusiasm with the world. We offer a wide range of shoes for every occasion, style, and budget. Whether you are looking for sneakers, boots, heels, or flats, we have something for you.</p>
                            <p class="section-description">Our mission is to provide you with the best quality shoes at the best prices. We also care about the environment and social responsibility, so we only work with ethical and eco-friendly brands and suppliers. We believe that shoes can make a difference in your life and in the world.</p>
                        </div>
                    </div>
                    <div class="col-md-6 service-section">
                        <div class="service-content">
                            <h2 class="section-title">Our Services</h2>
                            <div class="service-item">
                                <i class="fas fa-truck icon"></i>
                                <p>Free Shipping: We offer free shipping on all orders over $50 within Myanmar. No hidden fees or charges.</p>
                            </div>
                            <div class="service-item">
                                <i class="fas fa-money-check-alt icon"></i>
                                <p>Suitable Delivery Fees: We charge a reasonable delivery fee for orders below $50 or outside Myanmar. We use reliable and fast delivery services to ensure your satisfaction.</p>
                            </div>
                        </div>
                    </div>
                </div>
        </section>


        <!--Our Product-->
        <section id="brand">
            <div class="container">
                <!-- Heading -->
                <h2 class="text-center mt-3">Our Products</h2>
                <hr>
                <p class="text-center">Explore our stunning Sneakers and Casual wears to fit your days.</p>

                <!-- Gallery -->
                <div class="Gallery">

                    <!--Products-->

                    <div class="product-card">
                        <div class="pheading">
                            <span class="product-status">In Stock</span>
                            <i class="fas fa-heart fa-xl"></i>
                        </div>
                        <img src="../images/web images/Product images/addidas.jpg" class="card-img-top" alt="casualwear">
                        <div class="product-info">
                            <h4 class="product-name">Adidas <span class="product-model">Campus</span></h4>
                            <span class="product-price">$110</span>
                            <i class="fas fa-shopping-bag fa-xl"></i>
                        </div>
                    </div>

                    <div class="product-card">
                        <div class="pheading">
                            <span class="product-status">In Stock</span>
                            <i class="fas fa-heart fa-xl"></i>
                        </div>
                        <img src="../images/web images/Product images/addidas.jpg" class="card-img-top" alt="casualwear">
                        <div class="product-info">
                            <h4 class="product-name">Adidas <span class="product-model">Campus</span></h4>
                            <span class="product-price">$110</span>
                            <i class="fas fa-shopping-bag fa-xl"></i>
                        </div>
                    </div>

                    <div class="product-card">
                        <div class="pheading">
                            <span class="product-status">In Stock</span>
                            <i class="fas fa-heart fa-xl"></i>
                        </div>
                        <img src="../images/web images/Product images/addidas.jpg" class="card-img-top" alt="casualwear">
                        <div class="product-info">
                            <h4 class="product-name">Adidas <span class="product-model">Campus</span></h4>
                            <span class="product-price">$110</span>
                            <i class="fas fa-shopping-bag fa-xl"></i>
                        </div>
                    </div>

                    <div class="product-card">
                        <div class="pheading">
                            <span class="product-status">In Stock</span>
                            <i class="fas fa-heart fa-xl"></i>
                        </div>
                        <img src="../images/web images/Product images/addidas.jpg" class="card-img-top" alt="casualwear">
                        <div class="product-info">
                            <h4 class="product-name">Adidas <span class="product-model">Campus</span></h4>
                            <span class="product-price">$110</span>
                            <i class="fas fa-shopping-bag fa-xl"></i>
                        </div>
                    </div>

                    <div class="text-center mt-4">
                        <a href="../pages/product.php" class="btn btn-primary btn-lg product-btn">Shop Now</a>
                    </div>
                </div>
            </div>
        </section>



        <!--Product-Partner-->
        <section id="product-partener">
            <h3 class="pb-4">Product Partner</h3>
            <div class="logos">
                <img src="../images/Logo/Berluti_logo.png" alt="Berluti logo">
                <img src="../images/Logo/nike.png" alt="Nike logo">
                <img src="../images/Logo/new_balance.png" alt="Converse logo">
                <img src="../images/Logo/converse-logo.png" alt="New Balance logo">
            </div>
        </section>

        <?php
        include 'footer.php';
        ?>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
        <script src="../js/script.js"></script>

        <script>
            var swiper = new Swiper(".mySwiper", {
                slidesPerView: 1,
                spaceBetween: 10,
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                autoplay: {
                    delay: 6000,
                    disableOnInteraction: false,
                },
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
                breakpoints: {
                    360: {
                        slidesPerView: 1.5,
                        spaceBetween: 20,
                    },
                    540: {
                        slidesPerView: 2,
                        spaceBetween: 20,
                    },
                    1200: {
                        slidesPerView: 4,
                        spaceBetween: 40,
                    },
                    1024: {
                        slidesPerView: 3,
                        spaceBetween: 20,
                    },
                },
            })
        </script>

    </body>

</html>