<?php
include '../server/connection.php';

/*if(isset($_SESSION['logged_in'])){
  header('location: account.php');
  exit;
}*/
session_start();
if (isset($_POST['signin_btn'])) {

  $email = $_POST['email'];
  $password = md5($_POST['password']);

  $stmt = $conn->prepare("SELECT customer_id,user_name,email,user_password FROM customers where email=? AND user_password=? LIMIT 1 ");

  $stmt->bind_param('ss', $email, $password);

  if ($stmt->execute()) {
    $stmt->bind_result($user_id, $username, $email, $password);
    $stmt->store_result();

    if ($stmt->num_rows() == 1) {
      $stmt->fetch();
      $_SESSION['customer_id'] = $user_id;
      $_SESSION['name'] = $username;
      $_SESSION['email'] = $email;
      $_SESSION['logged_in'] = true;

      header('location: account.php?message=logged in successfully');
    } else {
      header('location: signin.php?message=could not verify your account');
    }
  } else {
    header('location: signin.php?error=something went wrong');
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Sneaker Store</title>
  <?php include 'component/header.php' ?>

</head>

<body>
  <!-- Navbar -->
  <?php include 'Component/navigation.php' ?>
  <main class="main-content  mt-0">
    <div class="page-header align-items-start min-vh-100" style="background-image: url('https://images.unsplash.com/photo-1497294815431-9365093b7331?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1950&q=80');">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-4 col-md-8 col-12 mx-auto">
            <div class="card z-index-0 fadeIn3 fadeInBottom">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                  <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Sign in</h4>
                  <div class="row mt-3">
                    <div class="col-2 text-center ms-auto">
                      <a class="btn btn-link px-3" href="javascript:;">
                        <i class="fa fa-facebook text-white text-lg"></i>
                      </a>
                    </div>
                    <div class="col-2 text-center px-1">
                      <a class="btn btn-link px-3" href="javascript:;">
                        <i class="fa fa-github text-white text-lg"></i>
                      </a>
                    </div>
                    <div class="col-2 text-center me-auto">
                      <a class="btn btn-link px-3" href="javascript:;">
                        <i class="fa fa-google text-white text-lg"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <form role="form" method="POST" action="signin.php" class="text-start">
                  <p style="color: red;"><?php if (isset($_GET['error'])) {
                                            echo $_GET['error'];
                                          } ?></p>
                  <div class="input-group input-group-outline my-3">
                    <input type="email" name="email" class="form-control" placeholder="E-mail">
                  </div>
                  <div class="input-group input-group-outline mb-3">
                    <input type="password" name="password" class="form-control" placeholder="Password">
                  </div>
                  <div class="text-center">
                    <button type="submit" name="signin_btn" class="btn bg-gradient-primary w-100 my-4 mb-2">Sign in</button>
                  </div>
                  <p class="mt-4 text-sm text-center">
                    Don't have an account?
                    <a href="../pages/signup.php" class="text-primary text-gradient font-weight-bold">Sign up</a>
                  </p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
    <?php
    include 'component/footer.php';
    ?>
  </main>
  <!--   Core JS Files   -->
  <?php include 'Component/jslink.php' ?>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=3.1.0"></script>
</body>

</html>