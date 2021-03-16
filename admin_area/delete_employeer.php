<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php 

    if(isset($_GET['delete_employeer'])){
        
        $delete_employeer = $_GET['delete_employeer'];
        
        $delete_cat = "delete from employeer where emp_id='$delete_employeer'";
        
        $run_delete = mysqli_query($con,$delete_cat);
        
        if($run_delete){
            
            echo "<script>alert('One of the Service Has Been Deleted')</script>";
            
            echo "<script>window.open('index.php?view_employeers','_self')</script>";
            
        }
        
    }

?>




<?php } ?>