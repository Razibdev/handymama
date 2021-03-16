<?php 

    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Insert Employeer Details </title>
</head>
<body>
    
<div class="row"><!-- row Begin -->
    
    <div class="col-lg-12"><!-- col-lg-12 Begin -->
        
        <ol class="breadcrumb"><!-- breadcrumb Begin -->
            
            <li class="active"><!-- active Begin -->
                
                <i class="fa fa-dashboard"></i> Dashboard / Insert Employeer Details
                
            </li><!-- active Finish -->
            
        </ol><!-- breadcrumb Finish -->
        
    </div><!-- col-lg-12 Finish -->
    
</div><!-- row Finish -->
       
<div class="row"><!-- row Begin -->
    
    <div class="col-lg-12"><!-- col-lg-12 Begin -->
        
        <div class="panel panel-default"><!-- panel panel-default Begin -->
            
           <div class="panel-heading"><!-- panel-heading Begin -->
               
               <h3 class="panel-title"><!-- panel-title Begin -->
                   
                   <i class="fa fa-money fa-fw"></i> Insert Employeer Details
                   
               </h3><!-- panel-title Finish -->
               
           </div> <!-- panel-heading Finish -->
           
           <div class="panel-body"><!-- panel-body Begin -->
               
               <form method="post" class="form-horizontal" enctype="multipart/form-data"><!-- form-horizontal Begin -->
                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Employeer Name </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input name="name" type="text" class="form-control" required>
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->


                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Employeer Image </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input name="e_image" type="file" class="form-control" required>
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->


                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Service Name </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input name="service" type="text" class="form-control" required>
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->


                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Job Complete </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input name="job" type="number" class="form-control" required>
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   
                   
                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Exprience</label> 
                      
                      <div class="col-md-6" ><!-- col-md-6 Begin -->
                          
                          <input type="number" name="year" class="form-control" required >
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                

                   <div class="form-group">
                     <div class="col-md-3"></div>
                     <div class="col-md-6">
                       <input type="submit" name="submit" class="btn btn-primary" value="Insert Cleaning Service">
                     </div>
                   </div>
                   
                   
                   
               </form><!-- form-horizontal Finish -->
               
           </div><!-- panel-body Finish -->
            
        </div><!-- canel panel-default Finish -->
        
    </div><!-- col-lg-12 Finish -->
    
</div><!-- row Finish -->
   
</body>
</html>


 <?php 


if(isset($_POST['submit'])){


    $name = $_POST['name'];
    $service = $_POST['service'];
    $job = $_POST['job'];
    $year = $_POST['year'];

    $e_image = $_FILES['e_image']['name'];
    $e_image_tmp = $_FILES['e_image']['tmp_name'];

    move_uploaded_file($e_image_tmp, "upload/$e_image");
       

        $sql = "INSERT INTO employeer(emp_name, emp_image, service_name, jb_complate, year) VAlUES('$name', '$e_image', '$service', '$job', '$year')";

        $run_sql = mysqli_query($con, $sql);

        if($run_sql){

            echo '<script>alert("Your Service Add  Successfully done!")</script>';
             echo "<script>window.open('index.php?view_employeers','_self')</script>";
        }




}


     ?>


<?php } ?>