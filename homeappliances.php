<?php require_once('inc/header.php'); ?>


    <!-- home appliances repair section -->

    <section class="home-appliances-section clearfix">
        <div class="row">
            <div class="col span_1_of_2 home-appliances-wrapper">
                <h1>Home Appliances Repair
                </h1>
                <p>What to service? Be it AC Servicing & Repairing, AC Shifting, Replacement, Installation, and AC GAS Charge, or Fridge Servicing, Oven Repairing, Geyser Installation & Repairing, Washing Machine Servicing, TV Repairing, Wall TV Installation- HandyMama does it all with 100% guaranteed satisfaction. Book in a minute!
                </p>
                <div class="rules">
                    <ul>
                        <li><i class="fas fa-hand-point-right"></i> Verified Technicians with 10+ Years of Experience.</li>
                        <li><i class="fas fa-hand-point-right"></i> Shows Up at Your Place in Just 30 Minutes.</li>
                        <li><i class="fas fa-hand-point-right"></i> Transparent Pricing. No Hidden Charge.</li>
                    </ul>
                </div>
            </div>
            <div class="col span_1_of_2 service-wrapper">
                <h5>SubService of Home Appliances Repair</h5>
                <ul>
                    <?php 

                     $query = "SELECT * FROM home_appliances ";  
                     $result = mysqli_query($con, $query); 

                     while($row = mysqli_fetch_array($result))  
                     {   

                        $ha_id = $row['ha_id'];
                        $service_name = $row['service_name'];
                        
                        echo '

                        <li><a class="buzz" href="habook.php?ha_id='.$ha_id.'">'.$service_name.'</a></li>

                        ';

                         ?>
                    

                    <?php } ?>
                </ul>
                
            </div>
        </div>
    </section>

    <!-- footer section -->
   <?php require_once('inc/footer.php'); ?>