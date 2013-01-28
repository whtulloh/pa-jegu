        <ul class="nav pull-left">
            <li class="<?php echo isActive($pageName,"about");?>"><a href="<?php echo base_url('about');?>">About</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Products <b class="caret"></b></a>
                <ul class="dropdown-menu logged">
                    <li><a href="<?php echo base_url('product');?>">All</a></li>
                    <li class="divider"></li>
                    <li><a href="<?php echo base_url('product/bean');?>">Bean Bag</a></li>
                    <li><a href="<?php echo base_url('product/bean');?>">Karpet</a></li>                    
                </ul>
            </li>
            <li class="<?php echo isActive($pageName,"link")?>"><a href="<?php echo base_url('link');?>">Link</a></li>
        </ul>
        <ul class="nav pull-right">
            <li class="<?php echo isActive($pageName,"link")?>"><a href="<?php echo base_url('link');?>">Link</a></li>
            <li class="<?php echo isActive($pageName,"link")?>"><a href="<?php echo base_url('link');?>">Link</a></li>
            <li class="<?php echo isActive($pageName,"link")?>"><a href="<?php echo base_url('link');?>">Link</a></li>
            <li class="dropdown" id="login">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-user icon-white"></i>  <?php echo $user; ?> <b class="caret"></b></a>
                <ul class="dropdown-menu logged">
                    <li><a href="<?php echo base_url('member/dashboard');?>">Dashboard</a></li>
                    <li><a href="#">Profile</a></li>
                    <li><a href="#">Setting</a></li>
                    <li class="divider"></li>
                    <li><a href="<?php echo base_url('logout');?>">Log out</a></li>
                </ul>
            </li>
            <!--<li class="dropdown" id="cart">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-shopping-cart icon-white"></i>  100 item(s)</b></a>
              <ul class="dropdown-menu">
                <li><a href="http://localhost/cocobeanbags.com/link">Link</a></li>
                <li><a href="http://localhost/cocobeanbags.com/link">Link</a></li>
                <li><a href="http://localhost/cocobeanbags.com/link">Link</a></li>
              </ul>
            </li>-->
        </ul>