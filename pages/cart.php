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
            <tr>
                <td>
                    <div class="product-info">
                        <img src="../images/web images/Product images/air_force_one-transformed.png"/>
                        <div>
                            <p>White Shoes</p>
                            <small><span>$</span>120</small>
                            <br>
                            <a class="remove-btn" href="#">Remove</a>
                        </div>

                    </div>
                </td>
                <td>
                    <input  class="input" type="number" value="1"/>
                    <a class="edit-btn" href="#">Edit</a>
                </td>
                <td>
                    <span>$</span>
                    <span class="product-price">120</span>
                </td>
            </tr>

            <tr>
                <td>
                    <div class="product-info">
                        <img src="../images/web images/Product images/air_force_one-transformed.png"/>
                        <div>
                            <p>White Shoes</p>
                            <small><span>$</span>120</small>
                            <br>
                            <a class="remove-btn" href="#">Remove</a>
                        </div>

                    </div>
                </td>
                <td>
                    <input  class="input" type="number" value="1"/>
                    <a class="edit-btn" href="#">Edit</a>
                </td>
                <td>
                    <span>$</span>
                    <span class="product-price">120</span>
                </td>
            </tr>

            <tr>
                <td>
                    <div class="product-info">
                        <img src="../images/web images/Product images/air_force_one-transformed.png"/>
                        <div>
                            <p>White Shoes</p>
                            <small><span>$</span>120</small>
                            <br>
                            <a class="remove-btn" href="#">Remove</a>
                        </div>

                    </div>
                </td>
                <td>
                    <input  class="input" type="number" value="1"/>
                    <a class="edit-btn" href="#">Edit</a>
                </td>
                <td>
                    <span>$</span>
                    <span class="product-price">120</span>
                </td>
            </tr>

        </table>

        <div class="cart-total">
            <table>
                <tr>
                    <td>Subtotal</td>
                    <td>$120</td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td>$120</td>
                </tr>
            </table>
        </div>
        <div class="checkout-container">
            <a href="checkout.html"><button class="btn checkout-btn">Check Out</button></a>
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