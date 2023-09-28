<?php
include '../server/connection.php';
session_start();

    if(isset($_POST['signup'])){

        $name =$_POST['name'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $confirm_password=$_POST['confirm_password'];

        //if passwords don't match
        if($password != $confirm_password){
            header('location: user_signup.php?error=passwords dont match');
        }

        //if password is less than 6 characters
        if(strlen($password)<6){
            header('location: user_signup.php?error=password must be at least 6 characters');
        }

        $stmt=$conn->prepare("INSERT INTO  customers (user_name,email,phone,user_password)
                        VALUES (?,?,?,?)");
        
        $stmt->bind_param('sss',$name,$email,md5($password));
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DASHMIN - Bootstrap Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../pages/Admin/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../pages/Admin/css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sign Up Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="index.html" class="">
                                <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>DASHMIN</h3>
                            </a>
                            <h3>Sign Up</h3>
                        </div>
                        <form id="register-form" method="POST" action="user_signup.php">
                            <p style="color: red;"><?php echo $_GET['error'];?></p>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingText" name="name" placeholder="jhondoe">
                                <label for="floatingText">Username</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingInput" name="email"   placeholder="name@example.com">
                                <label for="floatingInput">Email address</label>
                            </div>
                            <div class="form-floating mb-4">
                                <input type="password" class="form-control" id="floatingPassword" name="password"  placeholder="Password">
                                <label for="floatingPassword">Password</label>
                            </div>
                            <div class="form-floating mb-4">
                                <input type="password" class="form-control" id="floatingPassword" name="confirm_password"  placeholder="Confirm password">
                                <label for="floatingPassword">Confirm Password</label>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                </div>
                                <a href="">Forgot Password</a>
                            </div>
                            <input type="submit" class="btn btn-primary py-3 w-100 mb-4" id="signup-btn" value="Sign Up">
                            <p class="text-center mb-0">Already have an Account? <a href="">Sign In</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign Up End -->
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../pages/Admin/lib/chart/chart.min.js"></script>
    <script src="../pages/Admin/lib/easing/easing.min.js"></script>
    <script src="../pages/Admin/lib/waypoints/waypoints.min.js"></script>
    <script src="../pages/Admin/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="../pages/Admin/lib/tempusdominus/js/moment.min.js"></script>
    <script src="../pages/Admin/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="../pages/Admin/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="../pages/Admin/js/main.js"></script>
</body>

</html>