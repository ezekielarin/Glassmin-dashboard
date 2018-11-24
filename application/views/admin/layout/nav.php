<!-- header-starts -->
        <div class="sticky-header header-section ">
            <div class="header-left">
                <!--toggle button start-->
                <button id="showLeftPush"><i class="fa fa-bars"></i></button>
                <!--toggle button end-->
                <div class="profile_details_left"><!--notifications of menu start -->
                    <ul class="nofitications-dropdown">
                        
                        <li class="dropdown head-dpdn">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell"></i><span class="badge blue">4</span></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="notification_header">
                                        <h3>You have 3 new notification</h3>
                                    </div>
                                </li>
                                <li><a href="#">
                                    <div class="user_img"><img src="<?php echo base_url(); ?>assets/images/4.jpg" alt=""></div>
                                   <div class="notification_desc">
                                    <p>Lorem ipsum dolor amet</p>
                                    <p><span>1 hour ago</span></p>
                                    </div>
                                  <div class="clearfix"></div>  
                                 </a></li>
                                <li><a href="#">
                                   <div class="user_img"><img src="<?php echo base_url(); ?>assets/images/2.jpg" alt=""></div>
                                   <div class="notification_desc">
                                    <p>Lorem ipsum dolor amet </p>
                                    <p><span>1 hour ago</span></p>
                                    </div>
                                   <div class="clearfix"></div> 
                                </a></li>
                                 <li>
                                    <div class="notification_bottom">
                                        <a href="<?php echo base_url()?>dashboard/notifications">See all notifications</a>
                                    </div> 
                                </li>
                            </ul>
                        </li>                 
                    </ul>  

                    <div class="clearfix"> </div>
                </div>


                
                <!--notification menu end -->
                <div class="clearfix"> </div>
            </div>
            <div class="header-right">
                <div class="profile_details">       
                    <ul>

                        <li class="dropdown profile_details_drop">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <div class="profile_img">   
                                    <span class="prfil-img"><img src="<?php echo base_url(); ?>assets/images/2.jpg" alt=""> </span> 
                                    <div class="user-name">
                                        <?php 
                                        $user = $this->ion_auth->user()->row();
                                        // re usable user info
                                        $user_id = $user->id;
                                        $username = $user->username;
                                        $email = $user->email;
                                        ?>
                                        <p><?php echo $user->first_name; ?></p>
                                        <span><?php echo $user->last_name; ?></span>
                                    </div>
                                    <i class="fa fa-angle-down lnr"></i>
                                    <i class="fa fa-angle-up lnr"></i>
                                    <div class="clearfix"></div>    
                                </div>  
                            </a>
                            <ul class="dropdown-menu drp-mnu">
                                <li> <a href="<?php echo base_url()?>dashboard/profile"><i class="fa fa-user"></i> Profile</a> </li>
                                <li> <a href=""><i class="fa fa-cog"></i> Settings</a> </li>  
                                <li> <a href="<?php echo base_url()?>auth/logout"><i class="fa fa-sign-out"></i> Logout</a> </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"> </div>               
            </div>
            <div class="clearfix"> </div>   
        </div>
        <!-- //header-ends -->

