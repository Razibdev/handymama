<?php require_once('inc/header.php'); ?>


    <!-- electrical service section -->

    <section class="electrical-section clearfix">
        <div class="row">
            <div class="col span_1_of_2 electrical-wrapper">
                <h1>Electrical Service</h1>
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
                <h5>SubService of Eletrical Service</h5>
                <ul>

                      <?php 

                 $query = "SELECT * FROM electrical ";  
                 $result = mysqli_query($con, $query); 

                 while($row = mysqli_fetch_array($result))  
                 {   

                    $el_id = $row['el_id'];
                    $service_name = $row['service_name'];
                    
                    echo '

                    <li><a class="buzz" href="elbook.php?el_id='.$el_id.'">'.$service_name.'</a></li>

                    ';

                     ?>
                    

                    <?php } ?>
                </ul>
            </div>
        </div>
    </section>

    <!-- footer section -->
  <?php require_once('inc/footer.php'); ?>