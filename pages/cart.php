<?php
include '../server/connection.php';

session_start();

if (isset($_POST['add_to_cart'])) {
    //if user has already added a product to cart
    if (isset($_SESSION['cart'])) {

        $products_array_ids = array_column($_SESSION['cart'], "product_id");
        if (!in_array($_POST['product_id'], $products_array_ids)) {


            $product_array = array(
                'product_id' => $_POST['product_id'],
                'product_name' => $_POST['product_name'],
                'product_price' => $_POST['product_price'],
                'product_image' => $_POST['product_image'],
                'product_quantity' => $_POST['product_quantity']
            );

            $_SESSION['cart'][$_POST['product_id']] = $product_array;
            //product has already beeen added
        } else {
            echo '<script>alert("Product was already added to the cart")</script>';
            //echo '<script>window.location="index.php";</script>';
        }

        //if this is the first product lj;jk;jl;kdja;lksdjf
    } else {

        $product_id = $_POST['product_id'];
        $product_name = $_POST['product_name'];
        $product_price = $_POST['product_price'];
        $product_image = $_POST['product_image'];
        $product_quantity = $_POST['product_quantity'];

        $product_array = array(
            'product_id' => $product_id,
            'product_name' => $product_name,
            'product_price' => $product_price,
            'product_image' => $product_image,
            'product_quantity' => $product_quantity
        );

        $_SESSION['cart'][$product_id] = $product_array;
    }
    //calculate total
    calculateTotalCart();
}
//remove product from cart
else if (isset($_POST['remove_product'])) {
    $product_id = $_POST['product_id'];
    unset($_SESSION['cart'][$product_id]);

    //calculate total
    calculateTotalCart();
} else if (isset($_POST['edit_quantity'])) {

    //get id and quantity from the form
    $product_id = $_POST['product_id'];
    $product_quantity = $_POST['product_quantity'];

    //get the product arrary from the session
    $product_array = $_SESSION['cart'][$product_id];

    //update product quantity
    $product_array['product_quantity'] = $product_quantity;

    //return array back to its place
    $_SESSION['cart'][$product_id] = $product_array;

    //calculate total
    calculateTotalCart();
}


function calculateTotalCart()
{

    $total = 0;
    foreach ($_SESSION['cart'] as $key => $value) {
        $product = $_SESSION['cart'][$key];

        $price = $product['product_price'];
        $quantity = $product['product_quantity'];

        $total = $total + ($price * $quantity);
    }
    $_SESSION['total'] = $total;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <head>
        <title>Sneaker Store</title>
        <?php include 'Component/header.php' ?>

    </head>

<body>
    <!-- Navbar -->
    <?php include 'Component/navigation.php' ?>

    <!--Cart-->
    <section class="cart container my-5 py-5">

        <div class="container">
            <div class="row">
                <div class="table-responsive col-12">
                    <table class="table table-image align-middle caption-top">
                        <thead>
                            <tr>
                                <th scope="col">Image</th>
                                <th scope="col">Detail</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Total</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($_SESSION['cart'] as $key => $value) { ?>
                                <tr>
                                    <td class="w-25">
                                        <img src="<?php echo $value['product_image']; ?>" class="img-fluid img-thumbnail">
                                    </td>
                                    <td>
                                        <div class="container my-0">
                                            <h6><?php echo $value['product_name']; ?></h4>
                                                <h10><small><span>$</span><?php echo $value['product_price']; ?></h10>
                                        </div>
                                    </td>
                                    <td>
                                        <form method="POST" action="cart.php">
                                            <input class="form-control bg-light text-center" style="height: auto" type="number" id="quantity" name="product_quantity" min="1" value="1">
                                        </form>
                                    </td>
                                    <td>
                                        <h6>$ 200</h6>
                                    </td>
                                    <td>
                                        <form class="d-flex" method="POST" action="cart.php">
                                            <button type="submit" class="btn" name="edit_quantity"><i class="fa-solid fa-pen-to-square"></i></button>
                                            <button type="submit" name="remove_product" class="btn btn-primary"><i class="fa-solid fa-trash"></i></button>
                                            <input type="hidden" name="product_id" value="<?php echo $value['product_id']; ?>">
                                            <input type="hidden" class="input" name="product_quantity" value="<?php echo $value['product_quantity']; ?>" />
                                        </form>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- <div class="container mt-5">
            <div class="row">
                <div class="col-12">
                    <table class="table table-image caption-top">
                        <caption>Your Cart</caption>
                        <thread>
                            <tr>
                                <th scope="col">Image</th>
                                <th scope="col">Details</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Total</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thread>

                        <?php foreach ($_SESSION['cart'] as $key => $value) { ?>
                            <tr>
                                <td class="w-25">
                                    <img class="img-fluid img-thumbnail" src="<?php echo $value['product_image']; ?>" />
                                </td>
                                <td>
                                    <div>
                                        <p><?php echo $value['product_name']; ?></p>
                                        <small><span>$</span><?php echo $value['product_price']; ?></small>
                                        <br>
                                    </div>
                                </td>
                                <td>

                                    <form method="POST" action="cart.php">
                                        <input type="hidden" name="product_id" value="<?php echo $value['product_id']; ?>">
                                        <input class="input" name="product_quantity" type="number" value="<?php echo $value['product_quantity']; ?>" />
                                        <input type="submit" class="edit-btn" value="edit" name="edit_quantity">
                                    </form>

                                </td>
                                <td>
                                    <span>$</span>
                                    <span class="product-price"><?php echo $value['product_quantity'] * $value['product_price']; ?></span>
                                </td>
                            </tr>

                        <?php } ?>
                    </table>
                </div>
            </div>


            <div class="cart-total">
                <table>
                    <tr>
                    <td>Subtotal</td>
                    <td>$120</td>
                </tr>
                    <tr>
                        <td>Total</td>
                        <td>$ <?php //echo $_SESSION['total']; 
                                ?></td>
                    </tr>
                </table>
            </div>
            <div class="checkout-container">
                <form method="POST" action="checkout.php">
                    <input type="submit" class="btn checkout-btn" value="checkout" name="checkout">
                </form>
            </div>

        </div> -->
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