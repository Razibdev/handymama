<?php require_once('db.php');

session_start();
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HomeService</title>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" /> -->
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
                <a class="logo" href="index.php">HomeService</a>
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
