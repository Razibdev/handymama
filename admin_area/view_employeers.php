<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<div class="row"><!-- row 1 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <ol class="breadcrumb"><!-- breadcrumb begin -->
            <li>
                
                <i class="fa fa-dashboard"></i> Dashboard / View Employeer Details
                
            </li>
        </ol><!-- breadcrumb finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 1 finish -->

<div class="row"><!-- row 2 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <div class="panel panel-default"><!-- panel panel-default begin -->
            <div class="panel-heading"><!-- panel-heading begin -->
                <h3 class="panel-title"><!-- panel-title begin -->
                
                    <i class="fa fa-tags fa-fw"></i> View Employeer Details
                
                </h3><!-- panel-title finish -->
            </div><!-- panel-heading finish -->
            
            <div class="panel-body"><!-- panel-body begin -->
                <div class="table-responsive"><!-- table-responsive begin -->
                    <table class="table table-hover table-striped table-bordered"><!-- tabel tabel-hover table-striped table-bordered begin -->
                        
                        <thead><!-- thead begin -->
                            <tr><!-- tr begin -->
                                <th> ID </th>
                                <th> Employeer Name </th>
                                <th> employeer Image </th>
                                <th> Service Name </th>
                                <th> Job Complete </th>
                                <th> Exprience </th>
                                <th> Delete Employeer </th>
                            </tr><!-- tr finish -->
                        </thead><!-- thead finish -->
                        
                        <tbody><!-- tbody begin -->
                            
                            <?php 
                            
                                $i=0;
          
                                $get_cats = "select * from employeer";
          
                                $run_cats = mysqli_query($con,$get_cats);
          
                                while($row_cats=mysqli_fetch_array($run_cats)){
                                    
                                    $emp_id = $row_cats['emp_id'];
                                    
                                    $emp_name = $row_cats['emp_name'];
                                    
                                    $emp_image = $row_cats['emp_image'];

                                    $service_name = $row_cats['service_name'];

                                    $jb_complate = $row_cats['jb_complate'];

                                    $year = $row_cats['year'];

                                    
                                    $i++;
                            
                            ?>
                            
                            <tr><!-- tr begin -->
                                <td> <?php echo $i; ?> </td>
                                <td> <?php echo $emp_name; ?> </td>
                                <td ><img src="upload/<?php echo $emp_image; ?>" width="60" height="60"></td>
                                <td > <?php echo $service_name; ?> </td>
                                <td > <?php echo $jb_complate; ?> </td>
                                <td > <?php echo $year; ?> </td>
                                <td> 
                                    <a href="index.php?delete_employeer= <?php echo $emp_id; ?> ">
                                        <i class="fa fa-trash"></i> Delete
                                    </a>
                                </td>
                            </tr><!-- tr finish -->
                            
                            <?php } ?>
                        
                        </tbody><!-- tbody finish -->
                        
                    </table><!-- tabel tabel-hover table-striped table-bordered finish -->
                </div><!-- table-responsive finish -->
            </div><!-- panel-body finish -->
            
        </div><!-- panel panel-default finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 2 finish -->


<?php } ?>