<?php
include '../server/connection.php';

session_start();

if(isset($_POST['add_to_cart'])){
    //if user has already added a product to cart
    if(isset($_SESSION['cart'])){

        $products_array_ids=array_column($_SESSION['cart'],"product_id");
        if(!in_array($_POST['product_id'],$products_array_ids)){
            
           
            $product_array=array(
                            'product_id'=>$_POST['product_id'],
                            'product_name'=>$_POST['product_name'],
                            'product_price'=>$_POST['product_price'],
                            'product_image'=>$_POST['product_image'],
                            'product_quantity'=>$_POST['product_quantity']
            );

            $_SESSION['cart'][$_POST['product_id']]=$product_array;
            //product has already beeen added
        }else{
            echo '<script>alert("Product was already added to the cart")</script>';
            //echo '<script>window.location="index.php";</script>';
        }

        //if this is the first product
    }else{

        $product_id=$_POST['product_id'];
        $product_name=$_POST['product_name'];
        $product_price=$_POST['product_price'];
        $product_image=$_POST['product_image'];
        $product_quantity=$_POST['product_quantity'];

        $product_array=array(
                        'product_id'=>$product_id,
                        'product_name'=>$product_name,
                        'product_price'=>$product_price,
                        'product_image'=>$product_image,
                        'product_quantity'=>$product_quantity
        );

        $_SESSION['cart'][$product_id]=$product_array;
    }
    //calculate total
    calculateTotalCart();

}
//remove product from cart
else if(isset($_POST['remove_product'])){
    $product_id=$_POST['product_id'];
    unset($_SESSION['cart'][$product_id]);

    //calculate total
    calculateTotalCart();
}

else if(isset($_POST['edit_quantity'])){

    //get id and quantity from the form
    $product_id=$_POST['product_id'];
    $product_quantity=$_POST['product_quantity'];

    //get the product arrary from the session
    $product_array=$_SESSION['cart'][$product_id];

    //update product quantity
    $product_array['product_quantity']=$product_quantity;

    //return array back to its place
    $_SESSION['cart'][$product_id]=$product_array;

    //calculate total
    calculateTotalCart();
}


function calculateTotalCart(){

    $total=0;
    foreach($_SESSION['cart']as $key=>$value){
        $product=$_SESSION['cart'][$key];

        $price=$product['product_price'];
        $quantity=$product['product_quantity'];

        $total=$total+($price * $quantity);
    }
    $_SESSION['total']=$total;
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
    <?php include 'navigation.php';?>

    <!--Cart-->
    <section class ="cart container my-5 py-5">
        <div class="container mt-5" >
            <h2 class="font-weight-bolde">Your Cart</h2>
            <hr>
        </div>

        <table class="mt-5 pt-5">
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Subtotal</th>
            </tr>

            <?php foreach($_SESSION['cart']as $key => $value){?>
            <tr>
                <td>
                    <div class="product-info">
                        <img src="<?php echo $value['product_image'];?>"/>
                        <div>
                            <p><?php echo $value['product_name'];?></p>
                            <small><span>$</span><?php echo $value['product_price'];?></small>
                            <br>
                            <form method="POST" action="cart.php">
                                <input type="hidden" name="product_id" value="<?php echo $value['product_id'];?>">
                                <input type="submit" name="remove_product" class="remove-btn" value="Remove">
                            </form>
                            
                        </div>

                    </div>
                </td>
                <td>
                    
                    <form method="POST" action="cart.php">
                        <input type="hidden" name="product_id" value="<?php echo $value['product_id']; ?>">
                        <input  class="input" name="product_quantity"  type="number" value="<?php echo $value['product_quantity'];?>"/>
                        <input type="submit" class="edit-btn" value="edit" name="edit_quantity">
                    </form>
                    
                </td>
                <td>
                    <span>$</span>
                    <span class="product-price"><?php echo $value['product_quantity']*$value['product_price'];?></span>
                </td>
            </tr>
            
            <?php } ?>
        </table>

        <div class="cart-total">
            <table>
                <!--<tr>
                    <td>Subtotal</td>
                    <td>$120</td>
                </tr>-->
                <tr>
                    <td>Total</td>
                    <td>$<?php echo $_SESSION['total'];?></td>
                </tr>
            </table>
        </div>
        <div class="checkout-container">
            <form method="POST" action="checkout.php">
                <input type="submit" class="btn checkout-btn" value="checkout" name="checkout">
            </form>
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
            smallImg(i).onclick =function(){
            mainImg.src = smallImg(i).src;
        }
    }
    </script>
</body>
</html>