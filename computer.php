<?php require_once('inc/header.php'); ?>


    <!-- computer service section -->

    <section class="computer-section clearfix">
        <div class="row">
            <div class="col span_1_of_2 computer-wrapper">
                <h1>Computer Service</h1>
                <p>HomeService makes your computing life easy and hassle free. Now can get your Desktop, Laptop, Notebook, Printer, Photocopier serviced by the best computer hardware engineers. You can also easily get your IPS/ UPS and Projector Repaired by HandyMama's professional engineers. The biggest surprise is- we pick your cracked device from your home and deliver the serviced one safely at your hand for FREE.</p>
                <div class="rules">
                    <ul>
                        <li><i class="fas fa-hand-point-right"></i> Highly Trained and Professional Engineers.</li>
                        <li><i class="fas fa-hand-point-right"></i> 7 Days After-service Warranty</li>
                        <li><i class="fas fa-hand-point-right"></i> Hassle Free Booking. Simple Service Policy.</li>
                    </ul>
                </div>
            </div>
            <div class="col span_1_of_2 service-wrapper">
                <h5>Products of Computer Service</h5>
                <ul>
                    <?php 

                     $query = "SELECT * FROM computer_service ";  
                     $result = mysqli_query($con, $query); 

                     while($row = mysqli_fetch_array($result))  
                     {   

                        $co_id = $row['co_id'];
                        $service_name = $row['service_name'];
                        
                        echo '

                        <li><a class="buzz" href="cobook.php?co_id='.$co_id.'">'.$service_name.'</a></li>

                        ';

                         ?>
                    

                    <?php } ?>
                    
                </ul>
            </div>
        </div>
    </section>

    <!-- footer section -->



    <?php require_once('inc/footer.php'); ?>