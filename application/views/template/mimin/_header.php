    <!-- topbar starts -->
    <div class="navbar">
        <div class="navbar-inner">
            <div class="container-fluid">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="span3">
                    <a class="brand" href="<?php echo base_url('mimin/dashboard');?>">Coco Bean Bags</a>
                </div>
                
                <!-- user dropdown starts -->
                <div class="btn-group pull-right" >
                    <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="icon-user"></i><span class="hidden-phone"> <?php echo $user; ?></span>
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Profile</a></li>
                        <li class="divider"></li>
                        <li><a href="<?echo base_url('mimin/logout');?>">Logout</a></li>
                    </ul>
                </div>
                <!-- user dropdown ends -->
                
                <div class="top-nav nav-collapse">
                    <ul class="nav">
                        <li><a href="<?php echo base_url() ?>" target="_blank">Visit Site</a></li>
                        
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div>
    </div>
    <!-- topbar ends -->
