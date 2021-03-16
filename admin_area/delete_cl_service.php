<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php 

    if(isset($_GET['delete_cl_service'])){
        
        $delete_cl_service = $_GET['delete_cl_service'];
        
        $delete_cat = "delete from cleaning_service where cl_id='$delete_cl_service'";
        
        $run_delete = mysqli_query($con,$delete_cat);
        
        if($run_delete){
            
            echo "<script>alert('One of the Service Has Been Deleted')</script>";
            
            echo "<script>window.open('index.php?view_cl_service','_self')</script>";
            
        }
        
    }

?>




<?php } ?>