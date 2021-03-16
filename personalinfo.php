<?php require_once('inc/db.php');

session_start();
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HomeService</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slick-theme.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>
<body>

    <!-- header section -->

    <header class="header-section">
        <nav class="full-nav">
            <div class="row clearfix">
                <a class="logo " id="lgaaa" href="index.php">HomeService</a>
                <div class="main-nav">
                    <ul>
                        <li class="<?php if(isset($active)){ if($active == 'Home'){echo "act"; }}?>"><a href="index.php">services</a></li>

                        <li class="<?php if(isset($active)){ if($active == 'works'){echo "act"; }}?>"><a href="howitworks.php">how it works</a></li>
                        <li class="<?php if(isset($active)){ if($active == 'faq'){echo "act"; }}?>"><a href="faq.php">FAQ</a></li>
                        <li class="<?php if(isset($active)){ if($active == 'customer'){echo "act"; }}?>"> <a href="customer.php">customer review</a></li>
                        <li class="<?php if(isset($active)){ if($active == 'about'){echo "act"; }}?>"><a href="about.php">about us</a></li>
                    </ul>
                </div>
                
                    
                     <?php 

                                    if(!isset($_SESSION['email'])){
                                        echo "<a class='btn' href='login.php'>Sign In</a>";

                                    }else{
                                        echo "<a class='btn' href='logout.php'>Log Out</a>";
                                    }

                                 ?>

                
            </div>
        </nav>
    </header>



<?php

$connect = new PDO("mysql:host=localhost;dbname=handymama", "root", "");

 function getRealIpUser(){
            switch(true){
                case(!empty($_SERVER["HTTP_X_REAL_IP"])): return $_SERVER["HTTP_X_REAL_IP"];
                case(!empty($_SERVER["HTTP_CLIENT_IP"])): return $_SERVER["HTTP_CLIENT_IP"];
                case(!empty($_SERVER["HTTP_X_FORWARDED_FOR"])): return $_SERVER["HTTP_X_FORWARDED_FOR"];
                default: return $_SERVER["REMOTE_ADDR"];

            }
        }

$message = '';
if(isset($_POST["email"]))
{
 sleep(5);
 $user_ip = getRealIpUser();
 $query = "
 INSERT INTO signup 
 (name, phone, profession, gender, area, road, flat, house, zip, email, password, user_ip) VALUES 
 (:name, :phone, :profession, :gender, :area, :road, :flat, :house, :zip, :email, :password, :user_ip)
 ";
 
 $user_data = array(
  ':name'  => $_POST["first_name"],
  ':phone'  => $_POST["phone_number"],
  ':profession'   => $_POST["profession"],
  ':gender'   => $_POST["gender"],
  ':area'   => $_POST["area"],
  ':road'   => $_POST["road"],
  ':flat'  => $_POST["flat"],
  ':house'  => $_POST["house"],
  ':zip'  => $_POST["zip-code"],
  ':email'  => $_POST["email"],
  ':password'  => $_POST["password"],
  ':user_ip' => $user_ip
 );
 $statement = $connect->prepare($query);
 if($statement->execute($user_data))
 {
  echo '<script>alert("Your submition successfully done")</script>';
 }
 else
 {
  $message = '
  <div class="alert alert-success">
  There is an error in Registration
  </div>
  ';
 }
}
?>

    <!-- personal info section -->

    <section class="personal-section">
        <div class="row">
            <div class="full-personal-form">
                <h5>Sign up</h5>
                <form method="post" id="register_form" class="personal-form">
   
    <div class="tab-content" style="margin-top:16px;">


      

     <div class="tab-pane active" id="login_details">
      <div class="">
      <h3> Account Info</h3>
       <div class="">
        <div class="form-group">
         <label>Enter Email Address</label>
         <input type="text" name="email" id="email" />
         <span id="error_email" class="text-danger"></span>
        </div>
        <div class="form-group">
         <label>Enter Password</label>
         <input type="password" name="password" id="password"/>
         <span id="error_password" class="text-danger"></span>
        </div>
        <br />
        <div align="center">
         <button type="button" name="btn_login_details" id="btn_login_details" class="mohi">Continue</button>
        </div>
        <br />
       </div>
      </div>
     </div>





     <div class="tab-pane fade" id="personal_details">
      <div class="">
       <h3> Personal info</h3>
       <div class="">

        <div class="form-group">
         <label>Enter Your Name</label>
         <input type="text" name="first_name" id="first_name" />
         <span id="error_first_name" class="text-danger"></span>
        </div>

        <div class="form-group">
         <label>Enter Your Phone</label>
         <input type="tel" name="phone_number" id="phone_number" />
         <span id="error_phone" class="text-danger"></span>
        </div>

        <div class="form-group">
         <label>Enter Your Profession</label>
         <input type="text" name="profession" id="profession" />
         <span id="error_profession" class="text-danger"></span>
        </div>
         <label for="gender">Gender</label>
                    <label for="male" id="prb">
                        <input id="razib" type="radio" checked="checked" name="gender" value="Male"> Male
                    </label>
                    <label for="female" id="prb">
                        <input id="razib" type="radio" name="gender" value="Female"> Female
                    </label>
                    <label for="others" id="prb">
                        <input id="razib" type="radio" name="gender" value="Others"> Others
                    </label>
        <br />
        <div align="center">
         <button type="button" name="previous_btn_personal_details" id="previous_btn_personal_details" class="mohi">Back</button>
         <button type="button" name="btn_personal_details" id="btn_personal_details" class="mohi">Continue</button>
        </div>
        <br />
       </div>
      </div>
     </div>





     <div class="tab-pane fade" id="contact_details">
      <div class="">
       <h3>Fill Contact Details</h3>
       <div class="">
        <div class="form-group">
         <label>Select Area</label>
         <select name="area" id="area">
                        <option value="jatrabari">Jatrabari</option>
                        <option value="jatrabari">Jatrabari</option>
                        <option value="jatrabari">Jatrabari</option>
                        <option value="jatrabari">Jatrabari</option>
                        <option value="jatrabari">Jatrabari</option>
                        <option value="jatrabari">Jatrabari</option>
                        <option value="jatrabari">Jatrabari</option>
                        <option value="jatrabari">Jatrabari</option>
                        <option value="jatrabari">Jatrabari</option>
                        <option value="jatrabari">Jatrabari</option>
                        <option value="jatrabari">Jatrabari</option>
                        <option value="jatrabari">Jatrabari</option>
                        <option value="jatrabari">Jatrabari</option>
                        <option value="jatrabari">Jatrabari</option>
                        <option value="jatrabari">Jatrabari</option>
                        <option value="jatrabari">Jatrabari</option>
                    </select>
         <span id="error_area" class="text-danger"></span>
        </div>


        <div class="form-group">
         <label>Road</label>
         <input type="text" name="road" id="road"/>
         <span id="error_road" class="text-danger"></span>
        </div>


        <div class="form-group">
         <label>Flat/Apartment no</label>
         <input type="text" name="flat" id="flat"/>
         <span id="error_flat" class="text-danger"></span>
        </div>


        <div class="form-group">
         <label>House</label>
         <input type="text" name="house" id="house"/>
         <span id="error_house" class="text-danger"></span>
        </div>


        <div class="form-group">
         <label>Zip code</label>
         <input type="text" name="zip-code" id="zip-code"/>
         <span id="error_zip" class="text-danger"></span>
        </div>


        <br />
        <div align="center">
         <button type="button" name="previous_btn_contact_details" id="previous_btn_contact_details" class="mohi">Back</button>
         <button type="button" name="btn_contact_details" id="btn_contact_details" class="mohi">Confirm</button>
        </div>
        <br />
       </div>
      </div>
     </div>


    </div>
   </form>

            </div>
        </div>
    </section>

    <!-- footer section -->

   <?php require_once('inc/footer.php'); ?>


   <script>
        $(document).ready(function(){
         
         $('#btn_login_details').click(function(){
          
          var error_email = '';
          var error_password = '';
          var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
          
          if($.trim($('#email').val()).length == 0)
          {
           error_email = 'Email is required';
           $('#error_email').text(error_email);
           $('#email').addClass('has-error');
          }
          else
          {
           if (!filter.test($('#email').val()))
           {
            error_email = 'Invalid Email';
            $('#error_email').text(error_email);
            $('#email').addClass('has-error');
           }
           else
           {
            error_email = '';
            $('#error_email').text(error_email);
            $('#email').removeClass('has-error');
           }
          }
          
          if($.trim($('#password').val()).length == 0)
          {
           error_password = 'Password is required';
           $('#error_password').text(error_password);
           $('#password').addClass('has-error');
          }
          else
          {
           error_password = '';
           $('#error_password').text(error_password);
           $('#password').removeClass('has-error');
          }

          if(error_email != '' || error_password != '')
          {
           return false;
          }
          else
          {
           $('#list_login_details').removeClass('active active_tab1');
           $('#list_login_details').removeAttr('href data-toggle');
           $('#login_details').removeClass('active');
           $('#list_login_details').addClass('inactive_tab1');
           $('#list_personal_details').removeClass('inactive_tab1');
           $('#list_personal_details').addClass('active_tab1 active');
           $('#list_personal_details').attr('href', '#personal_details');
           $('#list_personal_details').attr('data-toggle', 'tab');
           $('#personal_details').addClass('active in');
          }
         });

         

         
         $('#previous_btn_personal_details').click(function(){
          $('#list_personal_details').removeClass('active active_tab1');
          $('#list_personal_details').removeAttr('href data-toggle');
          $('#personal_details').removeClass('active in');
          $('#list_personal_details').addClass('inactive_tab1');
          $('#list_login_details').removeClass('inactive_tab1');
          $('#list_login_details').addClass('active_tab1 active');
          $('#list_login_details').attr('href', '#login_details');
          $('#list_login_details').attr('data-toggle', 'tab');
          $('#login_details').addClass('active in');
         });
         
         $('#btn_personal_details').click(function(){
          var error_first_name = '';
          var error_phone = '';
          var error_profession = '';
          var mobile_validation = /^\d{11}$/;
          
          if($.trim($('#first_name').val()).length == 0)
          {
           error_first_name = 'First Name is required';
           $('#error_first_name').text(error_first_name);
           $('#first_name').addClass('has-error');
          }
          else
          {
           error_first_name = '';
           $('#error_first_name').text(error_first_name);
           $('#first_name').removeClass('has-error');
          }

        if($.trim($('#phone_number').val()).length == 0)
          {
           error_phone = 'Mobile Number is required';
           $('#error_phone').text(error_phone);
           $('#phone_number').addClass('has-error');
          }
          else
          {
           if (!mobile_validation.test($('#phone_number').val()))
           {
            error_phone = 'Invalid Mobile Number';
            $('#error_phone').text(error_phone);
            $('#phone_number').addClass('has-error');
           }
           else
           {
            error_phone = '';
            $('#error_phone').text(error_phone);
            $('#phone_number').removeClass('has-error');
           }
          }

          if($.trim($('#profession').val()).length == 0)
          {
           error_profession = 'Last Name is required';
           $('#error_profession').text(error_profession);
           $('#profession').addClass('has-error');
          }
          else
          {
           error_profession = '';
           $('#error_profession').text(error_profession);
           $('#profession').removeClass('has-error');
          }

          if(error_first_name != '' || error_phone != '' || error_profession != '')
          {
           return false;
          }
          else
          {
           $('#list_personal_details').removeClass('active active_tab1');
           $('#list_personal_details').removeAttr('href data-toggle');
           $('#personal_details').removeClass('active');
           $('#list_personal_details').addClass('inactive_tab1');
           $('#list_contact_details').removeClass('inactive_tab1');
           $('#list_contact_details').addClass('active_tab1 active');
           $('#list_contact_details').attr('href', '#contact_details');
           $('#list_contact_details').attr('data-toggle', 'tab');
           $('#contact_details').addClass('active in');
          }
         });

         $('#previous_btn_contact_details').click(function(){
          $('#list_contact_details').removeClass('active active_tab1');
          $('#list_contact_details').removeAttr('href data-toggle');
          $('#contact_details').removeClass('active in');
          $('#list_contact_details').addClass('inactive_tab1');
          $('#list_personal_details').removeClass('inactive_tab1');
          $('#list_personal_details').addClass('active_tab1 active');
          $('#list_personal_details').attr('href', '#personal_details');
          $('#list_personal_details').attr('data-toggle', 'tab');
          $('#personal_details').addClass('active in');
         });





         
         $('#btn_contact_details').click(function(){
          var error_road = '';
          var error_flat = '';
          var error_house = '';
          var error_zip = '';
          
          if($.trim($('#road').val()).length == 0)
          {
           error_road = 'Address is required';
           $('#error_road').text(error_road);
           $('#road').addClass('has-error');
          }
          else
          {
           error_road = '';
           $('#error_address').text(error_road);
           $('#road').removeClass('has-error');
          }



          if($.trim($('#flat').val()).length == 0)
          {
           error_flat = 'Address is required';
           $('#error_flat').text(error_flat);
           $('#flat').addClass('has-error');
          }
          else
          {
           error_flat = '';
           $('#error_flat').text(error_flat);
           $('#flat').removeClass('has-error');
          }


          if($.trim($('#house').val()).length == 0)
          {
           error_house = 'Address is required';
           $('#error_house').text(error_house);
           $('#house').addClass('has-error');
          }
          else
          {
           error_house = '';
           $('#error_house').text(error_house);
           $('#house').removeClass('has-error');
          }


            if($.trim($('#zip-code').val()).length == 0)
          {
           error_zip = 'Address is required';
           $('#error_zip').text(error_zip);
           $('#zip-code').addClass('has-error');
          }
          else
          {
           error_zip = '';
           $('#error_zip').text(error_zip);
           $('#zip-code').removeClass('has-error');
          }


          
          
          if(error_road != '' || error_flat != '' || error_house != '' || error_zip != '' )
          {
           return false;
          }
          else
          {
           $('#btn_contact_details').attr("disabled", "disabled");
           $(document).css('cursor', 'prgress');
           $("#register_form").submit();
          }
          
         });
         
        });
</script>