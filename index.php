<?php

 $active = 'Home';

 require_once('inc/header.php'); ?>

    <!-- banner section -->

    <section class="banner-section clearfix">
        <div class="row">
            <h1>Dhaka Best Home Maintenance & Handyman Services</h1>
                <select onchange="show(this.value)">
                    <option value="">Services</option>
                    <option value="cleaning.php">Cleaning Service</option>
                    <option value="electrical.php">Electrical Service</option>
                    <option value="computer.php">Computer Service</option>
                    <option value="carpentry.php">Carpentry Service</option>
                    <option value="plumbing.php">Plumbing Service</option>
                    <option value="homeappliances.php">Home Appliances Repair</option>
                    <option value="packshift.php">Pack & Shift</option>
                    <option value="painting.php">Painting</option>
                </select>
        </div>
    </section>


    <!-- service section -->

    <section class="service-section clearfix">
        <div class="row">
            <h2>Our Services</h2>
        </div>
        <div class="row clearfix">
            <div class="col span_1_of_3 card">
                <a href="cleaning.php">
                    <img src="img/cleaning.jpg" alt="cleaning service">
                    <div class="card-content clearfix">
                        <h3>Cleaning Service</h3>
                        <p>book now</p>
                        <span>&#8594;</span>
                    </div>
                </a>
            </div>
            <div class="col span_1_of_3 card">
                <a href="electrical.php">
                    <img src="img/electrical.jpg" alt="handyman services">
                    <div class="card-content clearfix">
                        <h3>Electrical Service</h3>
                        <p>book now</p>
                        <span>&#8594;</span>
                    </div>
                </a>
            </div>
            <div class="col span_1_of_3 card">
                <a href="computer.php">
                    <img src="img/computer.jpg" alt="home appliances">
                    <div class="card-content clearfix">
                        <h3>Computer Service</h3>
                        <p>book now</p>
                        <span>&#8594;</span>
                    </div>
                </a>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col span_1_of_3 card">
                <a href="carpentry.php">
                    <img src="img/carpentry.jpg" alt="home appliances">
                    <div class="card-content clearfix">
                        <h3>Carpentry Service</h3>
                        <p>book now</p>
                        <span>&#8594;</span>
                    </div>
                </a>
            </div>
            <div class="col span_1_of_3 card">
                <a href="plumbing.php">
                    <img src="img/plumbing.jpg" alt="home appliances">
                    <div class="card-content clearfix">
                        <h3>Plumbing Service
                        </h3>
                        <p>book now</p>
                        <span>&#8594;</span>
                    </div>
                </a>
            </div>
            <div class="col span_1_of_3 card">
                <a href="homeappliances.php">
                    <img src="img/home-appliances.jpg" alt="home appliances">
                    <div class="card-content clearfix">
                        <h3>Home Appliances Repair</h3>
                        <p>book now</p>
                        <span>&#8594;</span>
                    </div>
                </a>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col span_1_of_3 card">
                <a href="packshift.php">
                    <img src="img/pack-shift.jpg" alt="pack & shift">
                    <div class="card-content clearfix">
                        <h3>Pack & Shift</h3>
                        <p>book now</p>
                        <span>&#8594;</span>
                    </div>
                </a>
            </div>
            <div class="col span_1_of_3 card">
                <a href="painting.php">
                    <img src="img/painting.jpg" alt="painting">
                    <div class="card-content clearfix">
                        <h3>Painting</h3>
                        <p>book now</p>
                        <span>&#8594;</span>
                    </div>
                </a>
            </div>
            <div class="col span_1_of_3"></div>
        </div>
    </section>


    <!-- tasker section -->

    <section class="tasker-section clearfix">
        <div class="row">
            <h2>Meet Our Star Tasker</h2>
        </div>
        <div class="row">
            <div class="slick">


                 <?php 
  
             $query = "SELECT * FROM employeer ORDER BY emp_id desc LIMIT 12";  
             $result = mysqli_query($con, $query);  
             while($row = mysqli_fetch_array($result))  
                         {


             ?> 



                <div class="col span_1_of_3 card-tasker clearfix">
                    <a href="#">
                        <img src="admin_area/upload/<?php echo $row["emp_image"]; ?>" alt="painting">
                        <div class="card-tasker-content clearfix">
                            <h3><?php echo $row["emp_name"]; ?></h3>
                            <span><?php echo $row["service_name"]; ?></span>
                            <div class="job-year-details clearfix">
                                <p><span><?php echo $row["jb_complate"]; ?></span> job completed <span><?php echo $row["year"]; ?></span> year of experience</p>
                            </div>
                            <p>qualified</p>
                            <span class="arrow">&#8594;</span>
                        </div>
                    </a>
                </div>


            <?php } ?>



            </div>
        </div>
    </section>


    <!-- why us section -->

    <section class="why-us-section clearfix">
        <div class="row">
            <h2>why choose us</h2>
        </div>
        <div class="row">
            <div class="col span_1_of_2 on-time-wrapper">
                <img src="img/on-time.png" alt="on time">
                <div class="on-time">
                    <h3>On-time</h3>
                    <p>We strictly adhere to the timings assigned to us. You set the time and we'll stay committed to it!</p>
                </div>
            </div>
            <div class="col span_1_of_2 pricing-wrapper">
                <img src="img/pricing.png" alt="standard pricing">
                <div class="pricing">
                    <h3>Standard Pricing
                    </h3>
                    <p>You don't have to break the bank to get your problem fixed. Our services are aptly priced without hidden costs!
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col span_1_of_2 efficient-wrapper">
                <img src="img/certified.png" alt="efficient ergonomics">
                <div class="efficient">
                    <h3>Efficient Ergonomics</h3>
                    <p>We have accredited equipment and committed experts to see the work through with ease</p>
                </div>
            </div>
            <div class="col span_1_of_2 professional-wrapper">
                <img src="img/professional.png" alt="certified professionals">
                <div class="professional">
                    <h3>Certified Professionals
                    </h3>
                    <p>All our professionals are certified and excel in their respective fields. They are dedicated and know their jobs well</p>
                </div>
            </div>
        </div>
    </section>


    <!-- footer section -->

  <?php require_once('inc/footer.php'); ?>