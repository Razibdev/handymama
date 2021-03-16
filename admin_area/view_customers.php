<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<div class="row"><!-- row 1 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <ol class="breadcrumb"><!-- breadcrumb begin -->
            <li>
                
                <i class="fa fa-dashboard"></i> Dashboard / View Customer Details
                
            </li>
        </ol><!-- breadcrumb finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 1 finish -->

<div class="row"><!-- row 2 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <div class="panel panel-default"><!-- panel panel-default begin -->
            <div class="panel-heading"><!-- panel-heading begin -->
                <h3 class="panel-title"><!-- panel-title begin -->
                
                    <i class="fa fa-tags fa-fw"></i> View Customer Details
                
                </h3><!-- panel-title finish -->
            </div><!-- panel-heading finish -->
            
            <div class="panel-body"><!-- panel-body begin -->
                <div class="table-responsive"><!-- table-responsive begin -->
                    <table class="table table-hover table-striped table-bordered"><!-- tabel tabel-hover table-striped table-bordered begin -->
                        
                        <thead><!-- thead begin -->
                            <tr><!-- tr begin -->
                                <th> ID </th>
                                <th> Customer Name </th>
                                <th> Customer Phone </th>
                                <th> Customer Profession </th>
                                <th> Area </th>
                                <th> Road </th>
                                <th> Flat </th>
                                <th> House </th>
                                <th> Zip Code </th>
                                <th> Email </th>
                                <th> Delete Customer </th>
                            </tr><!-- tr finish -->
                        </thead><!-- thead finish -->
                        
                        <tbody><!-- tbody begin -->
                            
                            <?php 
                            
                                $i=0;
          
                                $get_cats = "select * from signup";
          
                                $run_cats = mysqli_query($con,$get_cats);
          
                                while($row_cats=mysqli_fetch_array($run_cats)){
                                    
                                    $id = $row_cats['id'];
                                    
                                    $name = $row_cats['name'];
                                    
                                    $phone = $row_cats['phone'];

                                    $profession = $row_cats['profession'];

                                    $area = $row_cats['area'];

                                    $road = $row_cats['road'];

                                    $flat = $row_cats['flat'];

                                    $house = $row_cats['house'];

                                    $zip = $row_cats['zip'];

                                    $email = $row_cats['email'];


                                    
                                    $i++;
                            
                            ?>
                            
                            <tr><!-- tr begin -->
                                <td> <?php echo $i; ?> </td>
                                <td> <?php echo $name; ?> </td>
                                <td ><?php echo $phone; ?></td>
                                <td > <?php echo $profession; ?> </td>
                                <td > <?php echo $area; ?> </td>
                                <td > <?php echo $road; ?> </td>
                                <td > <?php echo $flat; ?> </td>
                                <td > <?php echo $house; ?> </td>
                                <td > <?php echo $zip; ?> </td>
                                <td > <?php echo $email; ?> </td>
                                <td> 
                                    <a href="index.php?delete_customer= <?php echo $id; ?> ">
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