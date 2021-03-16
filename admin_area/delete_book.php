<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php 

    if(isset($_GET['delete_book'])){
        
        $delete_book = $_GET['delete_book'];
        
        $delete_p = "delete from book where book_id='$delete_book'";
        
        $run_delete = mysqli_query($con,$delete_p);
        
        if($run_delete){
            
            echo "<script>alert('If you want to delete the book details.')</script>";
            
            echo "<script>window.open('index.php?book','_self')</script>";
            
        }
        
    }

?>




<?php } ?>