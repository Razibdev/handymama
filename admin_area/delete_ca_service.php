<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php 

    if(isset($_GET['delete_ca_service'])){
        
        $delete_ca_service = $_GET['delete_ca_service'];
        
        $delete_cat = "delete from carpentry_service where ca_id='$delete_ca_service'";
        
        $run_delete = mysqli_query($con,$delete_cat);
        
        if($run_delete){
            
            echo "<script>alert('One of the Service Has Been Deleted')</script>";
            
            echo "<script>window.open('index.php?view_ca_service','_self')</script>";
            
        }
        
    }

?>




<?php } ?>