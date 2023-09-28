<?php
include '../server/connection.php';
session_start();
//if user has already registered, then take user to account page.
/*if(isset($_SESSION['logged_in'])){
  header('location: account.php');
  exit;
}*/

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
        else if(strlen($password)<6){
            header('location: user_signup.php?error=password must be at least 6 characters');
        }
        //if there is no error
        else{
                //check whether there is a user with this email or not 
            $stmt1=$conn->prepare("SELECT count(*) FROM customers where email=?");
            $stmt1->bind_param('s',$email);
            $stmt1->execute();
            $stmt1->bind_result($num_rows);
            $stmt1->store_result();
            $stmt1->fetch();

            //if there is a user with already registered email error will be displayed
            if($num_rows !=0){
                header('location: user_signup.php?error=user with this email already exists');
            }
            //if no user registered with this email before
            else{
                //create a new user
                $stmt=$conn->prepare("INSERT INTO  customers (user_name,email,user_password)
                                VALUES (?,?,?)");
                
                $stmt->bind_param('sss',$name,$email,md5($password));

                if($stmt->execute()){
                    $_SESSION['email']=$email;
                    $_SESSION['user_name']=$name;
                    $_SESSION['logged_in']=true;
                    header('location: account.php?signup=You registered successfully');
                }
                else{
                    header("location: user_signup.php?error=could not create an account at this moment");
                }
            }

        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Sign Up</title>
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
                  <form role="form" method="POST" action="signup.php">
                    <p style="color: red;"><?php if(isset($_GET['error']))  echo $_GET['error'];?></p>
                      <div class="input-group input-group-outline mb-3">
                        <label class="form-label"></label>
                        <input id="form-name" type="text" name="name"   class="form-control" onfocus="addFocusClass(this)" onblur="removeFocusClass(this)" placeholder="Name">
                      </div>
                      <div class="input-group input-group-outline mb-3">
                        <label class="form-label"></label>
                        <input type="email" class="form-control" onfocus="addFocusClass(this)" onblur="removeFocusClass(this)" name="email" placeholder="Email">
                      </div>
                      <div class="input-group input-group-outline mb-3">
                        <label class="form-label"></label>
                        <input type="password" class="form-control" onfocus="addFocusClass(this)" onblur="removeFocusClass(this)" name="password" placeholder="Password">
                      </div>
                      <div class="input-group input-group-outline mb-3">
                        <label class="form-label"></label>
                        <input type="password" class="form-control" onfocus="addFocusClass(this)" onblur="removeFocusClass(this)" name="confirm_password" placeholder="Confirm Password">
                      </div>
                      <div class="text-center">
                        <input type="submit" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0" name="signup" value="signup">
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