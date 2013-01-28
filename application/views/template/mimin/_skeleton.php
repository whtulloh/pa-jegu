<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<!--
		Charisma v1.0.0

		Copyright 2012 Muhammad Usman
		Licensed under the Apache License v2.0
		http://www.apache.org/licenses/LICENSE-2.0

		http://usman.it
		http://twitter.com/halalit_usman
	-->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<?php if (isset($title)) { ?>
<title><?php echo $title ?> | Coco Bean Bags</title>
<?php }else{ ?>
<title>Coco Bean Bags</title>
<?php } ?>
<meta name="viewport" content="width=device-width">
<meta name="keywords" content="<?php echo $keywords ?>" />
<meta name="author" content="<?php echo $author ?>" />
<meta name="description" content="<?php echo $description ?>" />

<!-- The styles -->
	<link href="<?php echo base_url("asset/css/bootstrap-cerulean.css");?>" rel="stylesheet">
	<style type="text/css">
	  body {
		padding-bottom: 40px;
	  }
	  .sidebar-nav {
		padding: 9px 0;
	  }
	</style>
	<link href="<?php echo base_url("asset/css/mimin/bootstrap-responsive.min.css");?>" rel="stylesheet">
	<link href="<?php echo base_url("asset/css/charisma-app.css");?>" rel="stylesheet">
	<link href="<?php echo base_url("asset/css/jquery-ui-1.8.21.custom.css");?>" rel="stylesheet">
	<link href='<?php echo base_url("asset/css/fullcalendar.css");?>' rel='stylesheet'>
	<link href='<?php echo base_url("asset/css/fullcalendar.print.css");?>' rel='stylesheet'  media='print'>
	<link href='<?php echo base_url("asset/css/chosen.css");?>' rel='stylesheet'>
	<link href='<?php echo base_url("asset/css/uniform.default.css");?>' rel='stylesheet'>
	<link href='<?php echo base_url("asset/css/colorbox.css");?>' rel='stylesheet'>
	<link href='<?php echo base_url("asset/css/jquery.cleditor.css");?>' rel='stylesheet'>
	<link href='<?php echo base_url("asset/css/jquery.noty.css");?>' rel='stylesheet'>
	<link href='<?php echo base_url("asset/css/noty_theme_default.css");?>' rel='stylesheet'>
	<link href='<?php echo base_url("asset/css/elfinder.min.css");?>' rel='stylesheet'>
	<link href='<?php echo base_url("asset/css/elfinder.theme.css");?>' rel='stylesheet'>
	<link href='<?php echo base_url("asset/css/jquery.iphone.toggle.css");?>' rel='stylesheet'>
	<link href='<?php echo base_url("asset/css/opa-icons.css");?>' rel='stylesheet'>
	<link href='<?php echo base_url("asset/css/uploadify.css");?>' rel='stylesheet'>

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
<!-- extra CSS-->
<?php foreach($css as $c):?>
<link rel="stylesheet" href="<?php echo base_url('asset/css/'.$c)?>">
<?php endforeach;?>

<!-- extra fonts-->
<?php foreach($fonts as $f):?>
<link href="http://fonts.googleapis.com/css?family=<?php echo $f?>"
	rel="stylesheet" type="text/css">
<?php endforeach;?>
<script src="<?php echo base_url("asset/js/modernizr-2.5.3.min.js");?>"></script>
<?php foreach($javatop as $js):?>
	<script src="<?php echo base_url('asset/js/'.$js);?>"></script>
<?php endforeach;?>
<!-- Le fav and touch icons -->
<link rel="shortcut icon" href="<?php echo base_url('asset/ico/favicon.ico');?>">
<link rel="apple-touch-icon" href="<?php echo base_url('asset/ico/apple-touch-icon-precompresse.png');?>">
<link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url('asset/ico/apple-touch-icon-57x57-precompressed.png');?>">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url('asset/ico/apple-touch-icon-72x72-precompressed.png');?>">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url('asset/ico/apple-touch-icon-114x114-precompressed.png');?>">

</head>
<body>
<?php echo $body ?>
	
	<!-- js -->

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="<?php echo base_url("asset/js/mimin/jquery-1.7.2.min.js");?>"><\/script>')</script>
	
		<!-- external javascript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->

	<!-- jQuery UI -->
	<script src="<?php echo base_url('asset/js/mimin/jquery-ui-1.8.21.custom.min.js');?>"></script>
	<!-- transition / effect library -->
	<script src="<?php echo base_url('asset/js/mimin/bootstrap-transition.js');?>"></script>
	<!-- alert enhancer library -->
	<script src="<?php echo base_url('asset/js/mimin/bootstrap-alert.js');?>"></script>
	<!-- modal / dialog library -->
	<script src="<?php echo base_url('asset/js/mimin/bootstrap-modal.js');?>"></script>
	<!-- custom dropdown library -->
	<script src="<?php echo base_url('asset/js/mimin/bootstrap-dropdown.js');?>"></script>
	<!-- scrolspy library -->
	<script src="<?php echo base_url('asset/js/mimin/bootstrap-scrollspy.js');?>"></script>
	<!-- library for creating tabs -->
	<script src="<?php echo base_url('asset/js/mimin/bootstrap-tab.js');?>"></script>
	<!-- library for advanced tooltip -->
	<script src="<?php echo base_url('asset/js/mimin/bootstrap-tooltip.js');?>"></script>
	<!-- popover effect library -->
	<script src="<?php echo base_url('asset/js/mimin/bootstrap-popover.js');?>"></script>
	<!-- button enhancer library -->
	<script src="<?php echo base_url('asset/js/mimin/bootstrap-button.js');?>"></script>
	<!-- accordion library (optional, not used in demo) -->
	<script src="<?php echo base_url('asset/js/mimin/bootstrap-collapse.js');?>"></script>
	<!-- carousel slideshow library (optional, not used in demo) -->
	<script src="<?php echo base_url('asset/js/mimin/bootstrap-carousel.js');?>"></script>
	<!-- autocomplete library -->
	<script src="<?php echo base_url('asset/js/mimin/bootstrap-typeahead.js');?>"></script>
	<!-- tour library -->
	<script src="<?php echo base_url('asset/js/mimin/bootstrap-tour.js');?>"></script>
	<!-- library for cookie management -->
	<script src="<?php echo base_url('asset/js/mimin/jquery.cookie.js');?>"></script>
	<!-- calander plugin -->
	<script src='<?php echo base_url('asset/js/mimin/fullcalendar.min.js');?>'></script>
	<!-- data table plugin -->
	<script src='<?php echo base_url('asset/js/mimin/jquery.dataTables.min.js');?>'></script>

	<!-- chart libraries start -->
	<script src="<?php echo base_url('asset/js/mimin/excanvas.js');?>"></script>
	<script src="<?php echo base_url('asset/js/mimin/jquery.flot.min.js');?>"></script>
	<script src="<?php echo base_url('asset/js/mimin/jquery.flot.pie.min.js');?>"></script>
	<script src="<?php echo base_url('asset/js/mimin/jquery.flot.stack.js');?>"></script>
	<script src="<?php echo base_url('asset/js/mimin/jquery.flot.resize.min.js');?>"></script>
	<!-- chart libraries end -->

	<!-- select or dropdown enhancer -->
	<script src="<?php echo base_url('asset/js/mimin/jquery.chosen.min.js');?>"></script>
	<!-- checkbox, radio, and file input styler -->
	<script src="<?php echo base_url('asset/js/mimin/jquery.uniform.min.js');?>"></script>
	<!-- plugin for gallery image view -->
	<script src="<?php echo base_url('asset/js/mimin/jquery.colorbox.min.js');?>"></script>
	<!-- rich text editor library -->
	<script src="<?php echo base_url('asset/js/mimin/jquery.cleditor.min.js');?>"></script>
	<!-- notification plugin -->
	<script src="<?php echo base_url('asset/js/mimin/jquery.noty.js');?>"></script>
	<!-- file manager library -->
	<script src="<?php echo base_url('asset/js/mimin/jquery.elfinder.min.js');?>"></script>
	<!-- star rating plugin -->
	<script src="<?php echo base_url('asset/js/mimin/jquery.raty.min.js');?>"></script>
	<!-- for iOS style toggle switch -->
	<script src="<?php echo base_url('asset/js/mimin/jquery.iphone.toggle.js');?>"></script>
	<!-- autogrowing textarea plugin -->
	<script src="<?php echo base_url('asset/js/mimin/jquery.autogrow-textarea.js');?>"></script>
	<!-- multiple file upload plugin -->
	<script src="<?php echo base_url('asset/js/mimin/jquery.uploadify-3.1.min.js');?>"></script>
	<!-- history.js for cross-browser state change on ajax -->
	<script src="<?php echo base_url('asset/js/mimin/jquery.history.js');?>"></script>
	<!-- application script for Charisma demo -->
	<script src="<?php echo base_url('asset/js/mimin/charisma.js');?>"></script>

	<!-- extra js-->
	<?php foreach($javascript as $js):?>
	<script defer src="<?php echo base_url('asset/js/'.$js);?>"></script>
	<?php endforeach;?>
	<?php foreach ($javatext as $jt) {
		$this->load->view($jt);
	}?>

	
</body>
</html>
