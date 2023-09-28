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
    <section>
      <div class="page-header min-vh-80">
        <div class="container">
          <div class="row">
            <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 start-0 text-center justify-content-center flex-column">
              <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center" style="background-image: url('../images/signup_page_banner.jpg'); background-size: cover;">
              </div>
            </div>
            <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-5">
              <div class="card card-plain">
                <div class="card-header">
                  <h4 class="font-weight-bolder">Sign Up</h4>
                  <p class="mb-0">Enter your email and password to register</p>
                </div>
                <div class="card-body">
                  <form role="form">
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label"></label>
                      <input id="form-name" type="text" class="form-control" onfocus="addFocusClass(this)" onblur="removeFocusClass(this)" placeholder="Name">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label"></label>
                      <input type="email" class="form-control" onfocus="addFocusClass(this)" onblur="removeFocusClass(this)" placeholder="Email">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label"></label>
                      <input type="password" class="form-control" onfocus="addFocusClass(this)" onblur="removeFocusClass(this)" placeholder="Password">
                    </div>
                    <div class="text-center">
                      <button type="button" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">Sign Up</button>
                    </div>
                  </form>

                </div>
                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                  <p class="mb-2 text-sm mx-auto">
                    Already have an account?
                    <a href="signin.php" class="text-primary text-gradient font-weight-bold">Sign in</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <?php include 'Component/jslink.php' ?>
  <script>
    function addFocusClass(element) {
      element.parentElement.classList.add("focused");
      element.parentElement.classList.add("is-focused");
    }

    function removeFocusClass(element) {
      element.parentElement.classList.remove("focused");
      element.parentElement.classList.remove("is-focused");
    }
  </script>
</body>

</html>