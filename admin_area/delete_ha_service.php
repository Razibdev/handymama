<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php 

    if(isset($_GET['delete_ha_service'])){
        
        $delete_ha_service = $_GET['delete_ha_service'];
        
        $delete_cat = "delete from home_appliances where ha_id='$delete_ha_service'";
        
        $run_delete = mysqli_query($con,$delete_cat);
        
        if($run_delete){
            
            echo "<script>alert('One of the Service Has Been Deleted')</script>";
            
            echo "<script>window.open('index.php?view_ha_service','_self')</script>";
            
        }
        
    }

?>




<?php } ?>