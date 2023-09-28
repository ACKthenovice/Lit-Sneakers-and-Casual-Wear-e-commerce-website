<?php
include '../server/connection.php';
session_start();
if(isset($_POST['signin_btn'])){

    $email=$_POST['email'];
    $password=md5($_POST['password']);

    $stmt=$conn->prepare("SELECT customer_id,user_name,email,user_password FROM customers where email=? AND user_password=? LIMIT 1 ");

    $stmt->bind_param('ss',$email,$password);

    if($stmt->execute()){
        $stmt->bind_result($user_id,$username,$email,$password);
        $stmt->store_result();

        if($stmt->num_rows()==1){
            $stmt->fetch();
            $_SESSION['customer_id']=$user_id;
            $_SESSION['name']=$username;
            $_SESSION['email']=$email;
            $_SESSION['logged_in']=true;

            header('location: account.php?message=logged in successfully');
        }
        else{
            header('location: user_signin.php?message=could not verify your account');
        }
    }
    else{
        header('location: user_sign.php?error=something went wrong');
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signin</title>
</head>
<body>
    <form id="login_form" action="user_signin.php" method="POST" class="text-start">
        <p style="color: red; margin: 0;"><?php if(isset($_GET['error'])) {echo $_GET['error'];} ?></p>
        <div class="input-group input-group-outline my-3">
        
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control">
        </div>
        <div class="input-group input-group-outline mb-3">
            <label class="form-label">Password</label>
            <input type="password" name="password" class="form-control">
        </div>
        <div class="form-check form-switch d-flex align-items-center mb-3">
            <input class="form-check-input" type="checkbox" id="rememberMe" checked>
            <label class="form-check-label mb-0 ms-3" for="rememberMe">Remember me</label>
        </div>
        <div class="text-center">
            <input type="submit" class="buy-btn" id="sigin-btn" name="signin_btn" value="Sign in">
        </div>
        <p class="mt-4 text-sm text-center">
             Don't have an account?
            <a href="../pages/signup.php" class="text-primary text-gradient font-weight-bold">Sign up</a>
        </p>
    </form>
</body>
</html>