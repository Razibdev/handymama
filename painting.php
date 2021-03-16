<?php require_once('inc/header.php'); ?>
    <!-- painting section -->

    <section class="painting-section clearfix">
        <div class="row">
            <div class="col span_1_of_2 painting-wrapper">
                <h1>Painting
                </h1>
                <p>Get your home or office painted by the best painting professionals. HandyMama offers you a wide range of services including- Wall plaster work, Power washing, Drywall repair, Waterproofing, Wall Painting, Custom Design Color, Floor coating, Weather coat, Distemper and more.
                </p>
                <div class="rules">
                    <ul>
                        <li><i class="fas fa-hand-point-right"></i> Verified Painters with 10+ Years of Experience</li>
                        <li><i class="fas fa-hand-point-right"></i> Custom Design at Affordable Pricing.</li>
                        <li><i class="fas fa-hand-point-right"></i> Daily Basis or Project Contract Basis Pricing.</li>
                    </ul>
                </div>
            </div>
            <div class="col span_1_of_2 service-wrapper">
                <h5>SubService of Painting</h5>
                <ul>
                    <?php 

                     $query = "SELECT * FROM painting_service ";  
                     $result = mysqli_query($con, $query); 

                     while($row = mysqli_fetch_array($result))  
                     {   

                        $pt_id = $row['pt_id'];
                        $service_name = $row['service_name'];
                        
                        echo '

                        <li><a class="buzz" href="ptbook.php?pt_id='.$pt_id.'">'.$service_name.'</a></li>

                        ';

                         ?>
                    

                    <?php } ?>
                </ul>
            </div>
        </div>
    </section>

    <!-- footer section -->
  <?php require_once('inc/footer.php'); ?>