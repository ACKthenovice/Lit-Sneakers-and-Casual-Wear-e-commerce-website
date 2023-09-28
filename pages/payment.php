<?php

session_start();


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

    <section class="my-5 py-5">
        <div class="container text-center mt-3 pt-5">
            <h2 class="form-weight-bold">Payment</h2>
            <hr class="mx-auto">
        </div>
        <div class="mx-auto container">
            <p><?php echo $_GET['order_status'];?></p>
            <p>Total payment: $<?php echo $_SESSION['total'];?></p>
            <input class="btn" value="Pay Now" type="submit">

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