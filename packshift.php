<?php require_once('inc/header.php'); ?>
    <!-- pack  & shift section -->


    <section class="pack-shift-section clearfix">
        <div class="row">
            <div class="col span_1_of_2 pack-shift-wrapper">
                <h1>Pack & Shift
                </h1>
                <p>Whatever you want to pack, move or shift, HandyMama offers you the one-stop solution. We have the complete arrangement for you including but limited to- Electrical, Pluming, AC Shifting and All Other Essential Services! We know what you need while you shift, we have all in place. What all you do is just book, we do the rest and you relax!
                </p>
                <div class="rules">
                    <ul>
                        <li><i class="fas fa-hand-point-right"></i> Complete Packing & Moving Solutions for Households, Offices or Industries.</li>
                        <li><i class="fas fa-hand-point-right"></i> Electrical, Pluming, AC Shifting and All Other Essential Services Included.</li>
                        <li><i class="fas fa-hand-point-right"></i> Experienced Moving Professionals with Safety and Damage Compensation.</li>
                    </ul>
                </div>
            </div>
            <div class="col span_1_of_2 service-wrapper">
                <h5>SubService of Pack & Shift</h5>
                <ul>
                    <?php 

                     $query = "SELECT * FROM packshift_service ";  
                     $result = mysqli_query($con, $query); 

                     while($row = mysqli_fetch_array($result))  
                     {   

                        $ps_id = $row['ps_id'];
                        $service_name = $row['service_name'];
                        
                        echo '

                        <li><a class="buzz" href="psbook.php?ps_id='.$ps_id.'">'.$service_name.'</a></li>

                        ';

                         ?>
                    

                    <?php } ?>
                </ul>
            </div>
        </div>
    </section>

    <!-- footer section -->

   <?php require_once('inc/footer.php'); ?>