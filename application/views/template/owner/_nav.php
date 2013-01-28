		<ul class="nav pull-left">
            <li class="<?php echo isActive($pageName,"home")?>"><a href="<?php echo base_url();?>">Home</a></li>
            <li class="<?php echo isActive($pageName,"about")?>"><a href="<?php echo base_url('about');?>">About</a></li>
            <li class="dropdown">
                <a href="<?php echo isActive($pageName,"product")?>" class="dropdown-toggle" data-toggle="dropdown"><b class="caret"></b> Products</a>
                <ul class="dropdown-menu logged">
                    <li><a href="<?php echo base_url('product/bean');?>">Bean</a></li>
                    <li><a href="<?php echo base_url('product/karpet');?>">Karpet</a></li>
                    <li class="divider"></li>
                    <li><a href="<?php echo base_url('product');?>">All</a></li>
                </ul>
            </li>
            <li class="<?php echo isActive($pageName,"link")?>"><a href="<?php echo base_url('link');?>">Link</a></li>
        </ul>
        <ul class="nav pull-right">
            <li class="<?php echo isActive($pageName,"link")?>"><a href="<?php echo base_url('link');?>">Link</a></li>
            <li class="<?php echo isActive($pageName,"link")?>"><a href="<?php echo base_url('link');?>">Link</a></li>
            <li class="<?php echo isActive($pageName,"link")?>"><a href="<?php echo base_url('link');?>">Link</a></li>
            <li class="dropdown" id="login">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-user icon-white"></i>  Log In <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <form method="post" action="<?php echo base_url('login');?>">
                <li><label>Username/Email :</label><input type="text" name="identity" autocomplete="on"></li>
                <li><label>Password :</label><input type="password" name="password"></li>
                <li>
                    <label class="checkbox">
                        <input type="checkbox" name="remember" value="1"> Remember me
                    </label>
                </li>
                <li class="inline"><a class="pull-left" id="forgot" href="<?php echo base_url('login/forgot_password');?>">Forgot Password?</a><input type="submit" value="Submit" class="btn btn-primary pull-right"></li>
                </form>
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