<?php 

    session_start();
    include("includes/db.php");
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{
        
        $admin_session = $_SESSION['admin_email'];
        
        $get_admin = "select * from admins where admin_email='$admin_session'";
        
        $run_admin = mysqli_query($con,$get_admin);
        
        $row_admin = mysqli_fetch_array($run_admin);
        
        $admin_id = $row_admin['admin_id'];
        
        $admin_name = $row_admin['admin_name'];
        
        $admin_email = $row_admin['admin_email'];
        $admin_type = $row_admin['type'];
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>M-Dev Store Admin Area</title>
    <link rel="stylesheet" href="css/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="../css/style1.css">
</head>
<body>

    <div id="wrapper"><!-- #wrapper begin -->
       
       <?php include("includes/sidebar.php"); ?>
       
        <div id="page-wrapper"><!-- #page-wrapper begin -->
            <div class="container-fluid"><!-- container-fluid begin -->
                
                <?php
                
                    if(isset($_GET['book'])){
                        
                        include("book.php");
                        
                }if(isset($_GET['delete_book'])){
                        
                        include("delete_book.php");
                        
                }if(isset($_GET['delete_player'])){
                        
                        include("delete_player.php");
                        
                }if(isset($_GET['insert_cl_service'])){
                        
                        include("insert_cl_service.php");
                        
                }if(isset($_GET['view_cl_service'])){
                        
                        include("view_cl_service.php");
                        
                }if(isset($_GET['delete_cl_service'])){
                        
                        include("delete_cl_service.php");
                        
                }if(isset($_GET['insert_co_service'])){
                        
                        include("insert_co_service.php");
                        
                }if(isset($_GET['view_co_service'])){
                        
                        include("view_co_service.php");
                        
                }if(isset($_GET['delete_co_service'])){
                        
                        include("delete_co_service.php");
                        
                }if(isset($_GET['insert_el_service'])){
                        
                        include("insert_el_service.php");
                        
                }if(isset($_GET['view_el_service'])){
                        
                        include("view_el_service.php");
                        
                }if(isset($_GET['delete_el_service'])){
                        
                        include("delete_el_service.php");
                        
                }if(isset($_GET['insert_ca_service'])){
                        
                        include("insert_ca_service.php");
                        
                }if(isset($_GET['view_ca_service'])){
                        
                        include("view_ca_service.php");
                        
                }if(isset($_GET['delete_ca_service'])){
                        
                        include("delete_ca_service.php");
                        
                }if(isset($_GET['insert_ha_service'])){
                        
                        include("insert_ha_service.php");
                        
                }if(isset($_GET['view_ha_service'])){
                        
                        include("view_ha_service.php");
                        
                }if(isset($_GET['delete_ha_service'])){
                        
                        include("delete_ha_service.php");
                        
                }if(isset($_GET['insert_ps_service'])){
                        
                        include("insert_ps_service.php");
                        
                }if(isset($_GET['view_ps_service'])){
                        
                        include("view_ps_service.php");
                        
                }if(isset($_GET['delete_ps_service'])){
                        
                        include("delete_ps_service.php");
                        
                }if(isset($_GET['insert_pn_service'])){
                        
                        include("insert_pn_service.php");
                        
                }if(isset($_GET['view_pn_service'])){
                        
                        include("view_pn_service.php");
                        
                }if(isset($_GET['delete_pn_service'])){
                        
                        include("delete_pn_service.php");
                        
                }if(isset($_GET['insert_pl_service'])){
                        
                        include("insert_pl_service.php");
                        
                }if(isset($_GET['view_pl_service'])){
                        
                        include("view_pl_service.php");
                        
                }if(isset($_GET['delete_pl_service'])){
                        
                        include("delete_pl_service.php");
                        
                }if(isset($_GET['insert_employeer'])){
                        
                        include("insert_employeer.php");
                        
                }if(isset($_GET['view_employeers'])){
                        
                        include("view_employeers.php");
                        
                }if(isset($_GET['delete_employeer'])){
                        
                        include("delete_employeer.php");
                        
                }if(isset($_GET['view_customers'])){
                        
                        include("view_customers.php");
                        
                }if(isset($_GET['delete_customer'])){
                        
                        include("delete_customer.php");
                        
                }if(isset($_GET['insert_admin'])){
                        
                        include("insert_admin.php");
                        
                }if(isset($_GET['view_admin'])){
                        
                        include("view_admin.php");
                        
                }if(isset($_GET['edit_admin'])){
                        
                        include("edit_admin.php");
                        
                }if(isset($_GET['delete_admin'])){
                        
                        include("delete_admin.php");
                        
                }



                




                  
        
                ?>
                
            </div><!-- container-fluid finish -->
        </div><!-- #page-wrapper finish -->
    </div><!-- wrapper finish -->

<script src="js/jquery-331.min.js"></script>     
<script src="js/bootstrap-337.min.js"></script>       
</body>
</html>


<?php } ?>