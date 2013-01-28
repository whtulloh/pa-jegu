<!DOCTYPE html>
<html>
<head>
<title><?php echo $title; ?></title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/pengunjung.css');?>">
</head>
<body>
<section class="login container">
	<section class="well span9">
		<header class="navbar">
		  <section class="navbar-inner">
		    <a id="login-logo" href="<?php echo base_url();?>"><img src="<?php echo base_url('asset/img/notFix/logo_cocobeanbags_true_blue2.png')?>"></a>
		    <section class="hair-white hair-atas">
    		</section><!--/.hair-white-->
		    <section class="nav-collapse">
		    </section><!--/.nav-collapse-->
		    <section class="hair-white hair-bawah">
		    </section><!--/.hair-white-->
		  </section><!--/.navbar-inner-->
		</header><!-- /.navbar -->
		<section class="span5">
			<p>Please login with your email/username and password below.</p>
			<?php echo $message;?>
			<form method="post" action="<?php echo base_url('mimin/login');?>">
				<label>Username/Email :</label>
				<input type="text" name="identity" autocomplete="on">
        		<label>Password :</label>
        		<input type="password" name="password">
        		<label class="checkbox">
		        	<input type="checkbox" name="remember" value="1"> Remember me
		        </label>
		        <a class="pull-left" id="forgot" href="<?php echo base_url('login/forgot_password');?>">Forgot Password?</a>
		        <input type="submit" value="Submit" class="btn btn-primary pull-right">
		    </form>
        </section><!--/.span6-->
	</section><!--/.span9-->
</section><!--container-->

<script type="text/javascript" src="<?php echo base_url('asset/js/jquery-1.7.2.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('asset/js/bootstrap.js');?>"></script>
<!---->
</body>
</html>