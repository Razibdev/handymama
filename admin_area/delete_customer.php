<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php 

    if(isset($_GET['delete_customer'])){
        
        $delete_customer = $_GET['delete_customer'];
        
        $delete_cat = "delete from signup where id='$delete_customer'";
        
        $run_delete = mysqli_query($con,$delete_cat);
        
        if($run_delete){
            
            echo "<script>alert('One of the Service Has Been Deleted')</script>";
            
            echo "<script>window.open('index.php?view_customers','_self')</script>";
            
        }
        
    }

?>




<?php } ?>