<head>
    <title>Navigation</title>
    <?php include 'header.php';
    /*if(isset($_SESSION['logged_in'])){
        header('location: account.php');
        exit;
      }*/
    ?>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg blur top-0 z-index-3 shadow py-2 start-0 end-0 sticky-top">
        <div class="container-fluid ps-2 pe-0">
            <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 " href="index.php">
                L I T
            </a>
            <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon mt-2">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </span>
            </button>
            <div id="navigation">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center me-2" aria-current="page" href="../pages/index.php">
                            <i class="fa-sharp fa-solid fa-house opacity-6 text-dark me-1"></i>
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="product.php">
                            <i class="fa-sharp fa-solid fa-box opacity-6 text-dark me-1"></i>
                            Products
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="contact.php">
                            <i class="fa-solid fa-envelope opacity-6 text-dark me-1"></i>
                            Contact Us
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="signin.php">
                            <i class="fa fa-user opacity-6 text-dark me-1"></i>
                            Sign In
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</body>