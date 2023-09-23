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

<?php
include 'navigation.php';
?>

<!-- Banner -->
<section id="Banner">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 col-lg-8">
                <h1 class="hero-title mt-4"><span>Best Prices</span> for this season.</h1>
                <p class="hero-description">Eshop offers the best products at the most affordable prices. Explore
                    our collection today.</p>
                <button class="hero-button">Explore More</button>
            </div>
            <div class="col-md-4 col-lg-4">
                <img src="../images/shoe-banner.png" class="img-fluid" alt="Banner Image">
            </div>
        </div>
    </div>
</section>


<!--==Slider-->
<section class="product-slider">

    <!--==heading-->
    <h4 class="product-slider-heading pb-5">New Arrival</h4>

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
                                    <img alt="" class="product-img-front" src="../images/New_Arrival/item-2.jpg" />
                                    <img alt="" class="product-img-back" src="../images/New_Arrival/item-2.jpg" />
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
                            <a href="http://demo47.askas8.se/sv/front-brake-assy-37-5-12-14" class="product-title">
                                Men Casual Shoes Sports Shoes for Men Breathable
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
                                <span>Brand Name</span>
                            </div>
                            <!--tile-->
                            <a href="#" class="product-title">
                                Men Casual Shoes Sports Shoes for Men Breathable
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
                                    <img alt="" class="product-img-front" src="../images/New_Arrival/item-2.jpg" />
                                    <img alt="" class="product-img-back" src="../images/New_Arrival/item-2.jpg" />
                                </a>
                            </div>
                        </div>

                        <!--text-->
                        <div class="product-box-text">
                            <!--category-->
                            <div class="product-category">
                                <span>Brand Name</span>
                            </div>
                            <!--tile-->
                            <a href="#" class="product-title">
                                Men Casual Shoes Sports Shoes for Men Breathable
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
                                    <img alt="" class="product-img-front" src="../images/New_Arrival/item-2.jpg" />
                                    <img alt="" class="product-img-back" src="../images/New_Arrival/item-2.jpg" />
                                </a>
                            </div>
                        </div>

                        <!--text-->
                        <div class="product-box-text">
                            <!--category-->
                            <div class="product-category">
                                <span>Brand Name</span>
                            </div>
                            <!--tile-->
                            <a href="#" class="product-title">
                                Men Casual Shoes Sports Shoes for Men Breathable
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
                                    <img alt="" class="product-img-front" src="../images/New_Arrival/item-2.jpg" />
                                    <img alt="" class="product-img-back" src="../images/New_Arrival/item-2.jpg" />
                                </a>
                            </div>
                        </div>

                        <!--text-->
                        <div class="product-box-text">
                            <!--category-->
                            <div class="product-category">
                                <span>Brand Name</span>
                            </div>
                            <!--tile-->
                            <a href="#" class="product-title">
                                Men Casual Shoes Sports Shoes for Men Breathable
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
                                    <img alt="" class="product-img-front" src="../images/New_Arrival/item-2.jpg" />
                                    <img alt="" class="product-img-back" src="../images/New_Arrival/item-2.jpg" />
                                </a>
                            </div>
                        </div>

                        <!--text-->
                        <div class="product-box-text">
                            <!--category-->
                            <div class="product-category">
                                <span>Brand Name</span>
                            </div>
                            <!--tile-->
                            <a href="#" class="product-title">
                                Men Casual Shoes Sports Shoes for Men Breathable
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

<!--Featured Prouduct-->
<section id="featured" class="my-5 pb-5">
    <div class="container text-center mt-5 py-5">
        <h3>Our featured</h3>
        <hr>
        <p>Here you can check our featured products.</p>
    </div>
    <?php //include '../server/get_featured_products.php' 
    ?>
    <?php //while ($row = $featured_products->fetch_assoc()) { 
    ?>


    <div class="row mx-auto container-fluid">
        <div class="product text-center col-lg-3 col-md-4 col-sm-12">
            <img class="img-fluid mb-3" src="<?php //echo $row['img_url']; 
                                                ?>" />
            <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <h5 class="p-name">
                <?php //echo $row['name']; 
                ?>
            </h5>
            <h4 class="p-price">$
                <?php //echo $row['price']; 
                ?>
            </h4>
            <a href="<?php //echo "singleproduct.php?id=" . $row['id']; 
                        ?>"><button class="buy-btn">Buy
                    Now</button></a>
        </div>

    </div>
    <?php //} 
    ?>

</section>

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



</body>

</html>