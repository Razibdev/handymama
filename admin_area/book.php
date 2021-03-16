<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<div class="row"><!-- row 1 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <ol class="breadcrumb"><!-- breadcrumb begin -->
            <li>
                
                <i class="fa fa-dashboard"></i> Dashboard / View Book
                
            </li>
        </ol><!-- breadcrumb finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 1 finish -->

<div class="row"><!-- row 2 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <div class="panel panel-default"><!-- panel panel-default begin -->
            <div class="panel-heading"><!-- panel-heading begin -->
                <h3 class="panel-title"><!-- panel-title begin -->
                
                    <i class="fa fa-tags fa-fw"></i> View Book
                
                </h3><!-- panel-title finish -->
            </div><!-- panel-heading finish -->
            
            <div class="panel-body"><!-- panel-body begin -->
                <div class="table-responsive"><!-- table-responsive begin -->
                    <table class="table table-hover table-striped table-bordered"><!-- tabel tabel-hover table-striped table-bordered begin -->
                        
                        <thead><!-- thead begin -->
                            <tr><!-- tr begin -->
                                <th> ID </th>
                                <th> User Name </th>
                                <th> User Phone </th>
                                <th> User Email </th>
                                <th> Service Name </th>
                                <th> Requirements </th>
                                <th> Coupon Code </th>
                                <th> Dates</th>
                                <th> Estamate Cost</th>
                            </tr><!-- tr finish -->
                        </thead><!-- thead finish -->
                        
                        <tbody><!-- tbody begin -->
                            
                            <?php 
                            
                                $i=0;
          
                                $get_cats = "select * from book ORDER BY book_id DESC";
          
                                $run_cats = mysqli_query($con,$get_cats);
          
                                while($row_cats=mysqli_fetch_array($run_cats)){
                                    
                                    $book_id = $row_cats['book_id'];
                                    
                                    $user_name = $row_cats['user_name'];

                                    $user_phone = $row_cats['user_phone'];

                                    $user_email = $row_cats['user_email'];

                                    $service_name = $row_cats['service_name'];

                                    $requirements = $row_cats['requirements'];

                                    $coupon = $row_cats['coupon'];

                                    $dates = $row_cats['dates'];
                                    $es_cost = $row_cats['es_cost'];
                                    
                                    $i++;
                            
                            ?>
                            
                            <tr><!-- tr begin -->
                                <td> <?php echo $i; ?> </td>
                                <td> <?php echo $user_name; ?> </td>
                                <td > <?php echo $user_phone; ?> </td>
                                <td > <?php echo $user_email; ?> </td>
                                <td > <?php echo $service_name; ?> </td>
                                <td > <?php echo $requirements; ?> </td>
                                <td > <?php echo $coupon; ?> </td>
                                <td > <?php echo $dates; ?> </td>
                                <td> 
                                    <?php echo $es_cost; ?>
                                </td>
                                <td> 
                                    <a href="index.php?delete_book= <?php echo $book_id; ?> ">
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