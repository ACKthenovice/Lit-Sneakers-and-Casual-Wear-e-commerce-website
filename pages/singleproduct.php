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
    <section class="container singleproduct mb-10">
        <div class="row mt-5">
            <?php while ($row = $product->fetch_assoc()) { ?>

                <div class="col px-7 col-lg-6 col-md-12 col-sm-12">

                    <div class="column">
                        <img id="mainImg" class="img-fluid pb-1" src="<?php echo $row['img_url']; ?>" alt="">
                        <div class="small-img-group mt-3">
                            <div class="small-img-col">
                                <img src="../images/web images/Product images/addidas.jpg" class="small-img" width="100%">
                            </div>
                            <div class="small-img-col">
                                <img src="../images/web images/Product images/small_images/campus_small_img_1.webp" class="small-img" width="100%">
                            </div>
                            <div class="small-img-col">
                                <img src="../images/web images/Product images/small_images/campus_small_img_2.webp" class="small-img" width="100%">
                            </div>
                            <div class="small-img-col">
                                <img src="../images/web images/Product images/small_images/campus_small_img_3.webp" class="small-img" width="100%">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col col-lg-6 col-md-12 col-sm-12">
                    <div class="column">

                        <form method="POST" action="cart.php">
                            <input type="hidden" name="product_id" value="<?php echo $row['id']; ?>">
                            <input type="hidden" name="product_image" value="<?php echo $row['img_url']; ?>">
                            <input type="hidden" name="product_name" value="<?php echo $row['name']; ?>">
                            <div class="row product-details mb-3 p-3">
                                <h3><?php echo $row['name']; ?></h3>
                                <label for="product_price" class="col-2 col-form-label my-2">Price: </label>
                                <div class="col-9 my-2">
                                    <input class="form-control bg-transparent w-auto" id="product_price" type="text" name="product_price" value="$ 22<?php echo $row['price']; ?>" disabled readonly>
                                </div>
                                <label for="product_quantity" class="col-2 col-form-label my-2">Quantity: </label>
                                <div class="col-9 quantity-selector my-2">
                                    <input class="form-control bg-light" style="height: auto" type="number" id="quantity" name="product_quantity" min="1" value="1">
                                </div>
                                <label for="size" class="col-2 col-form-label my-2">Size: </label>
                                <div class="col-9 my-2">
                                    <input type="number" class="form-control bg-light my-2" value="12" id="size">
                                </div>
                                <button class="btn btn-primary w-auto mt-3 mx-3" name="add_to_cart" type="submit">Add to Cart</button>
                                <h6 class="mx-1">Product Details</h6>
                                <p class="mx-1">When the "Add to Cart" button is clicked, we retrieve the selected quantity from the input field and trigger the logic to add the product to the cart. In this example, an alert is shown with the selected quantity.<?php echo $row['description']; ?></p>
                            </div>
                        </form>
                    </div>
                </div>
            <?php } ?>
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