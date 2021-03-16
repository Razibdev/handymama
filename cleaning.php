<?php require_once('inc/header.php'); ?>




    <!-- cleaning service section -->

    <section class="cleaning-section clearfix">
        <div class="row">
            <div class="col span_1_of_2 cleaning-wrapper">
                <h1>Cleaning Service</h1>
                <p>HomeService Professional Cleaning service comes up with a complete solution that makes your home and office sparkle! Our highly trained cleaning professionals will go to your place with all required cleaning equipment, supplies and chemicals to do what they are best at.</p>
                <div class="rules">
                    <ul>
                        <li><i class="fas fa-hand-point-right"></i> Hourly, Daily, Weekly and Monthly Subscription Model.</li>
                        <li><i class="fas fa-hand-point-right"></i> 4-step Trained, Background Checked, Verified and Trusted Cleaning Professionals.</li>
                        <li><i class="fas fa-hand-point-right"></i> Affordable Price with Custom Packages.</li>
                    </ul>
                </div>
            </div>
            <div class="col span_1_of_2 service-wrapper">
                <h5>SubService of Cleaning Service</h5>
                <ul>
                    <?php 

                     $query = "SELECT * FROM cleaning_service ";  
                     $result = mysqli_query($con, $query); 

                     while($row = mysqli_fetch_array($result))  
                     {   

                        $cl_id = $row['cl_id'];
                        $service_name = $row['service_name'];
                        
                        echo '

                        <li><a class="buzz" href="book.php?cl_id='.$cl_id.'">'.$service_name.'</a></li>

                        ';

                         ?>
                    

                    <?php } ?>
                </ul>
            </div>
        </div>
    </section>


    <!-- footer section -->

   <?php require_once('inc/footer.php'); ?>
