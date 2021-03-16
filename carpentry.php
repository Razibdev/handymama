<?php require_once('inc/header.php'); ?>


    <!-- carpentry service section -->

    <section class="carpentry-section clearfix">
        <div class="row">
            <div class="col span_1_of_2 carpentry-wrapper">
                <h1>Carpentry Service</h1>
                <p>Household Wiring to Light & Fan Installation, Fan Servicing to Water Motor Servicing, Generator Installation, Generator Repairing, UPS Repairing, IPS Servicing--Get any kinds of electrical works done by the best professions at very affordable costs.</p>
                <div class="rules">
                    <ul>
                        <li><i class="fas fa-hand-point-right"></i> Highly Trained and Professional Engineers.</li>
                        <li><i class="fas fa-hand-point-right"></i> 7 Days After-service Warranty</li>
                        <li><i class="fas fa-hand-point-right"></i> Hassle Free Booking. Simple Service Policy.</li>
                    </ul>
                </div>
            </div>
            <div class="col span_1_of_2 service-wrapper">
                <h5>Products of Carpentry Service</h5>
                <ul>
                    <?php 

                     $query = "SELECT * FROM carpentry_service ";  
                     $result = mysqli_query($con, $query); 

                     while($row = mysqli_fetch_array($result))  
                     {   

                        $ca_id = $row['ca_id'];
                        $service_name = $row['service_name'];
                        
                        echo '

                        <li><a class="buzz" href="cabook.php?ca_id='.$ca_id.'">'.$service_name.'</a></li>

                        ';

                         ?>
                    

                    <?php } ?>
                </ul>
                
            </div>
        </div>
    </section>

    <!-- footer section -->


    <?php require_once('inc/footer.php'); ?>