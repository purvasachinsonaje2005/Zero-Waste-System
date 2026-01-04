<?php include 'head.php'; 
        
include 'aside.php'; ?>
        
        <div class="page-wrapper">
          
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                       
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="index.php"></a>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="col-5 align-self-center">
                        <div class="customize-input float-right">
                           <h5><?php echo date('Y-m-d'); ?></h5>
                        </div>
                    </div>
                </div>
            </div>
          







                <div class="row">
                    <div class="col-lg-4 col-md-12">
                        <div class="card" style="background: rgb(1, 202, 241);">
                           <a href="reg.php?user=<?php echo $_SESSION['username']; ?>"> <div class="card-body">
                                <h5 class="card-title">Add/View Customer</h5>
                                <div id="campaign-v2" class="mt-2" style="height:25px; width:100%;"></div>
                                
                            </div>
                        </a>
                        </div>
                    </div>
 <div class="col-lg-4 col-md-12">
                        <div class="card" style="background: rgb(1, 202, 241);">
                           <a href="results.php?user=<?php echo $_SESSION['username']; ?>"> <div class="card-body">
                                <h5 class="card-title">View Complaint Portal</h5>
                                <div id="campaign-v2" class="mt-2" style="height:25px; width:100%;"></div>
                                
                            </div>
                        </a>
                        </div>
                    </div>


                    

                    <div class="col-lg-4 col-md-12">
                        <div class="card" style="background: rgb(1, 202, 241);">
                            <a href="orders.php?user=<?php echo $_SESSION['username']; ?>"><div class="card-body">
                                <h5 class="card-title">Track Waste Collection</h5>
                                <div id="campaign-v2" class="mt-2" style="height:25px; width:100%;"></div>
                                
                            </div>
                        </a>
                        </div>
                    </div>


                    <div class="col-lg-4 col-md-12">
                        <div class="card" style="background: rgb(1, 202, 241);">
                            <a href="hometherapy.php?user=<?php echo $_SESSION['username']; ?>"><div class="card-body">
                                <h5 class="card-title">Request Waste Pickup</h5>
                                <div id="campaign-v2" class="mt-2" style="height:25px; width:100%;"></div>
                                
                            </div>
                        </a>
                        </div>
                    </div>
                  
                    

                    <div class="col-lg-4 col-md-12">
                        <div class="card" style="background: rgb(1, 202, 241);">
                           <a href="transport.php?user=<?php echo $_SESSION['username']; ?>"> <div class="card-body">
                                <h5 class="card-title">Request Bulk Waste Transport</h5>
                                <div id="campaign-v2" class="mt-2" style="height:25px; width:100%;"></div>
                                
                            </div>
                        </a>
                        </div>
                    </div>
                    </a>


                    <div class="col-lg-4 col-md-12">
                        <div class="card" style="background: rgb(1, 202, 241);">
                            <a href="ewallet.php?user=<?php echo $_SESSION['username']; ?>"><div class="card-body">
                                <h5 class="card-title">View Reward Points</h5>
                                <div id="campaign-v2" class="mt-2" style="height:25px; width:100%;"></div>
                                
                            </div>
                        </a>
                        </div>
                    </div>
                     <div class="col-lg-4 col-md-12">
                        <div class="card" style="background: rgb(1, 202, 241);">
                           <a href="consult.php?user=<?php echo $_SESSION['username']; ?>"> <div class="card-body">
                                <h5 class="card-title">Report Emergency Cleanup</h5>
                                <div id="campaign-v2" class="mt-2" style="height:25px; width:100%;"></div>
                                
                            </div>
                        </a>
                        </div>
                    </div>
 <div class="col-lg-4 col-md-12">
                        <div class="card" style="background: rgb(1, 202, 241);">
                           <a href="covid.php?user=<?php echo $_SESSION['username']; ?>"> <div class="card-body">
                                <h5 class="card-title">Request Hazardous Waste Disposal</h5>
                                <div id="campaign-v2" class="mt-2" style="height:25px; width:100%;"></div>
                                
                            </div>
                        </a>
                        </div>
                    </div>



                    <div class="col-lg-4 col-md-12">
                        <div class="card" style="background: rgb(1, 202, 241);">
                            <a href="appoint.php?user=<?php echo $_SESSION['username']; ?>"><div class="card-body">
                                <h5 class="card-title">Schedule Consultation</h5>
                                <div id="campaign-v2" class="mt-2" style="height:25px; width:100%;"></div>
                                
                            </div>
                        </a>
                        </div>
                    </div>


                <!--     <div class="col-lg-4 col-md-12">
                        <div class="card" style="background: rgb(1, 202, 241);">
                            <a href=""><div class="card-body">
                                <h5 class="card-title">Register Patient</h5>
                                <div id="campaign-v2" class="mt-2" style="height:123px; width:100%;"></div>
                                
                            </div>
                        </a>
                        </div>
                    </div>
                   -->
                    
<!-- 
                    <div class="col-lg-4 col-md-12">
                        <div class="card" style="background: rgb(1, 202, 241);">
                           <a href=""> <div class="card-body">
                                <h5 class="card-title">Register Patient</h5>
                                <div id="campaign-v2" class="mt-2" style="height:123px; width:100%;"></div>
                                
                            </div>
                        </a>
                        </div>
                    </div> -->
                   


                 <!--    <div class="col-lg-4 col-md-12">
                        <div class="card" style="background: rgb(1, 202, 241);">
                            <a href=""><div class="card-body">
                                <h5 class="card-title">Register Patient</h5>
                                <div id="campaign-v2" class="mt-2" style="height:123px; width:100%;"></div>
                                
                            </div>
                        </a>
                        </div>
                    </div> -->





                </div>

              
               
            <?php //} ?>
               
            
<?php include 'footer.php'; ?>