<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php 

    if(isset($_GET['delete_co_service'])){
        
        $delete_co_service = $_GET['delete_co_service'];
        
        $delete_cat = "delete from computer_service where co_id='$delete_co_service'";
        
        $run_delete = mysqli_query($con,$delete_cat);
        
        if($run_delete){
            
            echo "<script>alert('One of the Service Has Been Deleted')</script>";
            
            echo "<script>window.open('index.php?view_co_service','_self')</script>";
            
        }
        
    }

?>




<?php } ?>