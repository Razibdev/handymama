<?php require_once('inc/header.php'); ?>

    <!-- login section -->



    <section class="login-section">
        <div class="row">
            <div class="full-login-form">
                <h3>Login to your account</h3>
                <form action="" class="login-form" method="POST">
                    <label for="phone">Phone</label>
                    <input type="email" name="email" placeholder="Email">
                    <label for="password">Password</label>
                    <input type="password" name="password" placeholder="Password">
                    <button class="btn" name="login">sign in</button>
                    <a href="forgotpassword.php" class="forgot">Forgot password?</a>
                    <div class="account">
                        <p>If you don't have an accout</p>
                    <a href="personalinfo.php" class="btn">sign up</a>
                    </div>
                </form>
            </div>
        </div>
    </section>


     <?php 

    if(isset($_POST['login'])){
        
        $email = mysqli_real_escape_string($con,$_POST['email']);
        
        $password = mysqli_real_escape_string($con,$_POST['password']);
        
        $get_login = "select * from signup where email ='$email' AND password='$password'";
        
        $run_login = mysqli_query($con,$get_login);
        
        $count = mysqli_num_rows($run_login);
        
        if($count==1){
            
            $_SESSION['email']=$email;
            
            echo "<script>alert('Logged in. Welcome Back')</script>";
            
            echo "<script>window.open('index.php','_self')</script>";
            
        }else{
            
            echo "<script>alert('Email or Password is Wrong !')</script>";
            
        }
        
    }

?>


    <!-- footer section -->

   <?php require_once('inc/footer.php'); ?>