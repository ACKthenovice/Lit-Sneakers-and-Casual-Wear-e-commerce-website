<!DOCTYPE html>
<html lang="en">

<head>

    <title>Product</title>
    <?php include 'component/header.php' ?>
</head>

<body>
    <!-- Navbar -->
    <?php include 'component/navigation.php'; ?>
    
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

    <!--Brand-->
    <section id="brand">
        <div class="container col">
            <!-- Heading -->
            <h2 class="text-center mt-5">Our Products</h2>

            <!-- Gallery -->
            <div class="Gallery">

                <!--Products-->
                <?php include '../server/get_featured_products.php' ?>
                <?php while ($row = $featured_products->fetch_assoc()) { ?>
                    <div class="product-card">
                        <div class="pheading">
                            <span class="product-status">In Stock</span>
                            <i class="fas fa-heart fa-xl"></i>
                        </div>
                        <img src="<?php echo $row['img_url'] ?>" class="card-img-top" alt="casualwear">
                        <div class="product-info">
                            <h4 class="product-name"><?php echo $row['name'] ?> <span class="product-model">Campus</span></h4>
                            <span class="product-price">$<?php echo $row['price'] ?></span>
                            <a style="text-decoration: none;" href="<?php echo "singleproduct.php?id=" . $row['id']; ?>">
                                <button class="cart_button_product"><i class="fas fa-shopping-bag fa-xl"></i></button></a>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <!--Pagination-->
    <nav aria-label="Page text-center navigation">
        <div class="container ">
            <ul class="pagination mt-5">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </div>

    </nav>

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

    <!--footer-->
    <?php
    include 'component/footer.php';
    ?>
    <!-- JS Links -->
    <?php include 'component/jslink.php' ?>
</body>

</html>