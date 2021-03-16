<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>
   
<nav class="navbar navbar-inverse navbar-fixed-top"><!-- navbar navbar-inverse navbar-fixed-top begin -->
    <div class="navbar-header"><!-- navbar-header begin -->
        
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"><!-- navbar-toggle begin -->
            
            <span class="sr-only">Toggle Navigation</span>
            
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            
        </button><!-- navbar-toggle finish -->
        
        <a href="index.php?dashboard" class="navbar-brand">Admin Area</a>
        
    </div><!-- navbar-header finish -->
    
    <ul class="nav navbar-right top-nav"><!-- nav navbar-right top-nav begin -->
        
        <li class="dropdown"><!-- dropdown begin -->
            
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><!-- dropdown-toggle begin -->
                
                <i class="fa fa-user"></i> <?php echo $admin_name;  ?> <b class="caret"></b>
                
            </a><!-- dropdown-toggle finish -->





            
        </li><!-- dropdown finish -->
        
    </ul><!-- nav navbar-right top-nav finish -->
    
    <div class="collapse navbar-collapse navbar-ex1-collapse"><!-- collapse navbar-collapse navbar-ex1-collapse begin -->
        <ul class="nav navbar-nav side-nav"><!-- nav navbar-nav side-nav begin -->
            <li><!-- li begin -->
                <a href="index.php?book"><!-- a href begin -->
                        
                        <i class="fa fa-fw fa-dashboard"></i> Book
                        
                </a><!-- a href finish -->
                
            </li><!-- li finish -->
            
            <li><!-- li begin -->
                <a href="#" data-toggle="collapse" data-target="#playerlist"><!-- a href begin -->
                        
                        <i class="fa fa-fw fa-tag"></i> Employeer
                        <i class="fa fa-fw fa-caret-down"></i>
                        
                </a><!-- a href finish -->
                
                <ul id="playerlist" class="collapse"><!-- collapse begin -->
                    <li><!-- li begin -->
                        <a href="index.php?insert_employeer"> Insert Employeer </a>
                    </li><!-- li finish -->
                    <li><!-- li begin -->
                        <a href="index.php?view_employeers"> View Employeer </a>
                    </li><!-- li finish -->
                </ul><!-- collapse finish -->
                
            </li><!-- li finish -->
            
            <li><!-- li begin -->
                <a href="#" data-toggle="collapse" data-target="#football"><!-- a href begin -->
                        
                        <i class="fa fa-fw fa-star"></i> Cleaning Service
                        <i class="fa fa-fw fa-caret-down"></i>
                        
                </a><!-- a href finish -->
                
                <ul id="football" class="collapse"><!-- collapse begin -->
                    <li><!-- li begin -->
                        <a href="index.php?insert_cl_service"> Insert Cleaning Service</a>
                    </li><!-- li finish -->
                    <li><!-- li begin -->
                        <a href="index.php?view_cl_service"> View Cleaning Service</a>
                    </li><!-- li finish -->
                </ul><!-- collapse finish -->
                
            </li><!-- li finish -->
            
            <li><!-- li begin -->
                <a href="#" data-toggle="collapse" data-target="#p_cat"><!-- a href begin -->
                        
                        <i class="fa fa-fw fa-edit"></i> Computer Service
                        <i class="fa fa-fw fa-caret-down"></i>
                        
                </a><!-- a href finish -->
                
                <ul id="p_cat" class="collapse"><!-- collapse begin -->
                    <li><!-- li begin -->
                        <a href="index.php?insert_co_service"> Insert Computer Service </a>
                    </li><!-- li finish -->
                    <li><!-- li begin -->
                        <a href="index.php?view_co_service"> View Computer Service</a>
                    </li><!-- li finish -->
                </ul><!-- collapse finish -->
                
            </li><!-- li finish -->
            
            <li><!-- li begin -->
                <a href="#" data-toggle="collapse" data-target="#cat"><!-- a href begin -->
                        
                        <i class="fa fa-fw fa-book"></i> Electrical Service
                        <i class="fa fa-fw fa-caret-down"></i>
                        
                </a><!-- a href finish -->
                
                <ul id="cat" class="collapse"><!-- collapse begin -->
                    <li><!-- li begin -->
                        <a href="index.php?insert_el_service"> Insert Electrical Service</a>
                    </li><!-- li finish -->
                    <li><!-- li begin -->
                        <a href="index.php?view_el_service"> View Electrical Service</a>
                    </li><!-- li finish -->
                </ul><!-- collapse finish -->
                
            </li><!-- li finish -->
            
            <li><!-- li begin -->
                <a href="#" data-toggle="collapse" data-target="#slides"><!-- a href begin -->
                        
                        <i class="fa fa-fw fa-gear"></i> Carpentry Service
                        <i class="fa fa-fw fa-caret-down"></i>
                        
                </a><!-- a href finish -->
                
                <ul id="slides" class="collapse"><!-- collapse begin -->
                    <li><!-- li begin -->
                        <a href="index.php?insert_ca_service"> Insert Carpentry Service </a>
                    </li><!-- li finish -->
                    <li><!-- li begin -->
                        <a href="index.php?view_ca_service"> View Carpentry Service </a>
                    </li><!-- li finish -->
                </ul><!-- collapse finish -->
                
            </li><!-- li finish -->
            
            <li><!-- li begin -->
                <a href="#" data-toggle="collapse" data-target="#boxes"><!-- a href begin -->
                        
                        <i class="fa fa-fw fa-dropbox"></i> Home Appliances Service
                        <i class="fa fa-fw fa-caret-down"></i>
                        
                </a><!-- a href finish -->
                
                <ul id="boxes" class="collapse"><!-- collapse begin -->
                    <li><!-- li begin -->
                        <a href="index.php?insert_ha_service"> Insert Home Appliances</a>
                    </li><!-- li finish -->
                    <li><!-- li begin -->
                        <a href="index.php?view_ha_service"> View Home Appliances</a>
                    </li><!-- li finish -->
                </ul><!-- collapse finish -->
                
            </li><!-- li finish -->
            
            <li><!-- li begin -->
                <a href="#" data-toggle="collapse" data-target="#terms"><!-- a href begin -->
                        
                        <i class="fa fa-fw fa-table"></i> Packshift Service
                        <i class="fa fa-fw fa-caret-down"></i>
                        
                </a><!-- a href finish -->
                
                <ul id="terms" class="collapse"><!-- collapse begin -->
                    <li><!-- li begin -->
                        <a href="index.php?insert_ps_service"> Insert Packshift Service </a>
                    </li><!-- li finish -->
                    <li><!-- li begin -->
                        <a href="index.php?view_ps_service"> View Packshift Service </a>
                    </li><!-- li finish -->
                </ul><!-- collapse finish -->
                
            </li><!-- li finish -->


            <li><!-- li begin -->
                <a href="#" data-toggle="collapse" data-target="#deprtment"><!-- a href begin -->
                        
                        <i class="fa fa-fw fa-gear"></i> Painting Service
                        <i class="fa fa-fw fa-caret-down"></i>
                        
                </a><!-- a href finish -->
                
                <ul id="deprtment" class="collapse"><!-- collapse begin -->
                    <li><!-- li begin -->
                        <a href="index.php?insert_pn_service"> Insert Painting Service </a>
                    </li><!-- li finish -->
                    <li><!-- li begin -->
                        <a href="index.php?view_pn_service"> View Painting Service</a>
                    </li><!-- li finish -->
                </ul><!-- collapse finish -->
                
            </li><!-- li finish -->


             <li><!-- li begin -->
                <a href="#" data-toggle="collapse" data-target="#sports"><!-- a href begin -->
                        
                        <i class="fa fa-fw fa-gear"></i> Plumbing Service
                        <i class="fa fa-fw fa-caret-down"></i>
                        
                </a><!-- a href finish -->
                
                <ul id="sports" class="collapse"><!-- collapse begin -->
                    <li><!-- li begin -->
                        <a href="index.php?insert_pl_service"> Insert Plumbing Service </a>
                    </li><!-- li finish -->
                    <li><!-- li begin -->
                        <a href="index.php?view_pl_service"> View Plumbing Service </a>
                    </li><!-- li finish -->
                </ul><!-- collapse finish -->
                
            </li><!-- li finish -->



            
            <li><!-- li begin -->
                <a href="index.php?view_customers"><!-- a href begin -->
                    <i class="fa fa-fw fa-users"></i> View Customers
                </a><!-- a href finish -->
            </li><!-- li finish -->



             <li><!-- li begin -->
                <a href="#" data-toggle="collapse" data-target="#user"><!-- a href begin -->
                        
                        <i class="fa fa-fw fa-gear"></i> Admin
                        <i class="fa fa-fw fa-caret-down"></i>
                        
                </a><!-- a href finish -->
                
                <ul id="user" class="collapse"><!-- collapse begin -->
                    <li><!-- li begin -->
                        <a href="index.php?insert_admin"> Insert Admin</a>
                    </li><!-- li finish -->
                    <li><!-- li begin -->
                        <a href="index.php?view_admin"> View admin</a>
                    </li><!-- li finish -->
                </ul><!-- collapse finish -->
                
            </li><!-- li finish -->
            
            
            <li><!-- li begin -->
                <a href="logout.php"><!-- a href begin -->
                    <i class="fa fa-fw fa-power-off"></i> Log Out
                </a><!-- a href finish -->
            </li><!-- li finish -->
            
        </ul><!-- nav navbar-nav side-nav finish -->
    </div><!-- collapse navbar-collapse navbar-ex1-collapse finish -->
    
</nav><!-- navbar navbar-inverse navbar-fixed-top finish -->


<?php } ?>