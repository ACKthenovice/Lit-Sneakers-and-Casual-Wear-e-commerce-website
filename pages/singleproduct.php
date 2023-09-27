<?php
include '../server/connection.php';
if (isset($_GET['id'])) {
    $product_id = $_GET['id'];
    $stmt = $conn->prepare("SELECT * FROM products WHERE id=?");/*stmt=variable statement*/
    $stmt->bind_param("i", $product_id);
    $stmt->execute();

    $product  = $stmt->get_result();
} else {
    header('location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sneaker Store</title>
    <?php include 'Component/header.php' ?>

</head>

<body>
    <!-- Navbar -->
    <?php include 'Component/navigation.php' ?>

    <!--singleproduct-->
    <section class="container singleproduct my-5 pt-5">
        <div class="row mt-5">

            <?php while ($row = $product->fetch_assoc()) { ?>

                <div class="col-lg-5 col-md-6 col-sm-12">
                    <img id="mainImg" class="img-fluid w-100 pb-1" src="<?php echo $row['img_url']; ?>" alt="">
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
                    <h3 class="pb-4"><?php echo $row['name']; ?></h3>
                    <h2>$<?php echo $row['price']; ?></h2>


                    <form method="POST" action="cart.php">
                        <input type="hidden" name="product_id" value="<?php echo $row['id']; ?>">
                        <input type="hidden" name="product_image" value="<?php echo $row['img_url']; ?>">
                        <input type="hidden" name="product_name" value="<?php echo $row['name']; ?>">
                        <input type="hidden" name="product_price" value="<?php echo $row['price']; ?>">
                        <input type="number" name="product_quantity" value="1">
                        <button class="buy-btn" name="add_to_cart" type="submit">Add to Cart</button>
                    </form>

                    <h4 class="mt-5 mb-5">Product Details</h4>
                    <span><?php echo $row['description']; ?>
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
                <img class="img-fluid mb-3" src="../images/web images/Product images/air-force-white-black.jpg" />
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
                <img class="img-fluid mb-3" src="../images/web images/Product images/air_force.png " />
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
                <img class="img-fluid mb-3" src="../images/web images/Product images/air_force_one-transformed.png" />
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
                <img class="img-fluid mb-3" src="../images/web images/Product images/nike_airmax-removebg-preview (1).png" />
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

    <!--footer-->
    <?php
    include 'component/footer.php';
    ?>
    <!-- JS Links -->
    <?php include 'component/jslink.php' ?>

</body>

</html>