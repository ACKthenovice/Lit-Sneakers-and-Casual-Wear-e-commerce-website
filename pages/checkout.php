<?php

session_start();

if(!empty($_SESSION['cart']) && isset($_POST['checkout'])){
     //let user in


     //send user to home page
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
    <?php include 'navigation.php';?>

    <section class="my-5 py-5">
        <div class="container text-center mt-3 pt-5">
            <h2 class="form-weight-bold">Checkout</h2>
            <hr class="mx-auto"> 
        </div>
        <div class="mx-auto container">
            <form id="checkout-form" method="POST" action="../server/place_order.php">
                <div class="form-group checkout-small-elements">
                    <label>Name</label>
                    <input type="text" class="form-control" id="checkout-name" name="name" placeholder="Name" required/>
                </div>
                <div class="form-group checkout-small-elements">
                    <label>Email</label>
                    <input type="text" class="form-control" id="checkout-email" name="email" placeholder="Email" required/>
                </div>
                <div class="form-group checkout-small-elements">
                    <label>Phone</label>
                    <input type="tel" class="form-control" id="checkout-phone" name="phone" placeholder="Phone" required/>
                </div>
                <div class="form-group checkout-large-elements">
                    <label>Address</label>
                    <input type="text" class="form-control" id="checkout-address" name="address" placeholder="Address" required/>
                </div>
                <div class="form-group checkout-btn-container">
                    <p>Total amount: $ <?php echo $_SESSION['total'];?></p>
                    <input type="submit" class="btn" id="checkout-btn" name="place_order" value="Place Order"/>
                </div>
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