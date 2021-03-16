<?php require_once('inc/header.php'); ?>

<?php 

    if(!isset($_SESSION['email'])){ ?>

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


    if(isset($_GET["ps_id"])){
        $ps_id = $_GET["ps_id"];
        $get_product = "SELECT * FROM packshift_service WHERE ps_id = '$ps_id'";
        $run_product = mysqli_query($con, $get_product);
        $row_product = mysqli_fetch_array($run_product);
        $service_name = $row_product['service_name'];
        $estmate_price = $row_product['estmate_price'];
       

      
    }

    if(isset($_POST['login'])){
        
        $email = mysqli_real_escape_string($con,$_POST['email']);
        
        $password = mysqli_real_escape_string($con,$_POST['password']);
        
        $get_login = "select * from signup where email ='$email' AND password='$password'";
        
        $run_login = mysqli_query($con,$get_login);
        
        $count = mysqli_num_rows($run_login);
        
        if($count==1){
            
            $_SESSION['email']=$email;

                $query = "SELECT * FROM packshift_service ";  
                 $result = mysqli_query($con, $query); 

                 while($row = mysqli_fetch_array($result))  
                 {   

                    
                   
                   echo "<script>window.open('psbook.php?ps_id=".$ps_id."','_self')</script>";


            }
            

       

    

            
          
            
        }else{
            
            echo "<script>alert('Email or Password is Wrong !')</script>";
            
        }
        
    }

?>


      <?php
       
    }else{

 ?>



<?php 

 function getRealIpUser(){
            switch(true){
                case(!empty($_SERVER["HTTP_X_REAL_IP"])): return $_SERVER["HTTP_X_REAL_IP"];
                case(!empty($_SERVER["HTTP_CLIENT_IP"])): return $_SERVER["HTTP_CLIENT_IP"];
                case(!empty($_SERVER["HTTP_X_FORWARDED_FOR"])): return $_SERVER["HTTP_X_FORWARDED_FOR"];
                default: return $_SERVER["REMOTE_ADDR"];

            }
        }

 ?>


<?php 

     if(isset($_GET["ps_id"])){
        $ps_id = $_GET["ps_id"];
        $get_product = "SELECT * FROM packshift_service WHERE ps_id = '$ps_id'";
        $run_product = mysqli_query($con, $get_product);
        $row_product = mysqli_fetch_array($run_product);
        $service_name = $row_product['service_name'];
        $estmate_price = $row_product['estmate_price'];
        $user_ip = getRealIpUser();
        $get_user = "SELECT * FROM signup WHERE user_ip = '$user_ip'";
        $run_user = mysqli_query($con, $get_user);
        $row_user = mysqli_fetch_array($run_user);

        $user_name = $row_user['name'];
        $user_phone = $row_user['phone'];
        $user_email = $row_user['email'];

      
    }

 ?>

    <!-- book service section -->

    <section class="book-section clearfix">
        <div class="row">
            <div class="col span_1_of_2 book-wrapper">
                <h1><?php echo $service_name; ?></h1>
            </div>
            <div class="col span_1_of_2 book-confirm-wrapper">
                <h3><?php echo $service_name; ?></h3>

                <form action="" class="book-confirm-form" method="POST">
                    <label for="requirements">Any aditional information/requirements</label>
                    <textarea name="requirements" id="" placeholder="info..." required></textarea>
                    <label for="coupon">Your coupon code</label>
                    <input type="text" name="coupon" id="" placeholder="Write coupon code here" required>
                    <label for="date">Select date for the service</label>
                    <input type="date" name="date" id="" required>
                     <div class="book-confirm">
                     <h5>Eastimated Cost</h4>
                     <p><span>৳</span> <?php echo $estmate_price; ?></p>
                     <div class="clearfix"></div>
                     <button class="btn" type="submit" name="submit">confirm your order</button>
                </div>
                </form>

                
            </div>
        </div>
    </section>

<?php 

if(isset($_POST['submit'])){

  $requirements = $_POST['requirements'];
  $coupon = $_POST['coupon'];
  $date = $_POST['date'];

  if(!empty($requirements) && !empty($coupon) && !empty($date)){
    $query = "
 INSERT INTO book 
 (user_name, user_phone, user_email, service_name, requirements, coupon, dates,  es_cost) VALUES 
 ('$user_name', '$user_phone', '$user_email', '$service_name', '$requirements', '$coupon', '$date', '$estmate_price')";

  $run_book = mysqli_query($con, $query);
  if($run_book){
    echo "<script>alert('Your book successfully done')</script>";
    echo "<script>window.open('index.php','_self')</script>";
  }else{
    echo "<script>alert('Book failed try agian!')</script>";
  }
  }
}




 ?>

<?php } ?>

    <!-- footer section -->

   <?php require_once('inc/footer.php'); ?>