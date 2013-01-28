<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<?php if (isset($title)) { ?>
<title><?php echo $title ?> ~ Coco Bean Bags</title>
<?php }else{ ?>
<title>Coco Bean Bags</title>
<?php } ?>

<meta name="viewport" content="width=device-width">
<meta name="keywords" content="<?php echo $keywords ?>" />
<meta name="author" content="<?php echo $author ?>" />
<meta name="description" content="<?php echo $description ?>" />


<!-- styles -->
<link href="<?php echo base_url('asset/css/css.css');?>" rel='stylesheet' type='text/css' />
<link href="<?php echo base_url('asset/css/bootstrap.css');?>" rel="stylesheet">
<link href="<?php echo base_url('asset/css/bootstrap-responsive-p.css');?>" rel="stylesheet">
<link href="<?php echo base_url('asset/css/docs.css');?>" rel="stylesheet">
<link href="<?php echo base_url('asset/js/google-code-prettify/prettify.css');?>" rel="stylesheet">
<link href="<?php echo base_url('asset/css/style.css');?>" rel="stylesheet">
<link rel="stylesheet" href="<?php echo base_url('asset/css/flexslider.css');?>" type="text/css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('fancybox/jquery.fancybox-1.3.4.css');?>" media="screen" />
<link href="<?php echo base_url('asset/css/opa-icons.css');?>" rel="stylesheet">
<link href="<?php echo base_url('asset/css/bootswatch.css');?>" rel="stylesheet">

<!-- extra CSS-->
<?php foreach($css as $c):?>
<link rel="stylesheet" href="<?php echo base_url('asset/css/'.$c)?>">
<?php endforeach;?>

<!-- extra fonts-->
<?php foreach($fonts as $f):?>
<link href="http://fonts.googleapis.com/css?family=<?php echo $f?>"
	rel="stylesheet" type="text/css">
<?php endforeach;?>

<?php foreach($javatop as $js):?>
	<script defer src="<?php echo base_url('asset/js/'.$js);?>"></script>
<?php endforeach;?>
<script src="<?php echo base_url("asset/js/modernizr-2.5.3.min.js");?>"></script>

<!-- Le fav and touch icons -->
<link rel="shortcut icon" href="<?php echo base_url('asset/ico/favicon.ico');?>">
<link rel="apple-touch-icon" href="<?php echo base_url('asset/ico/apple-touch-icon-precompresse.png');?>">
<link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url('asset/ico/apple-touch-icon-57x57-precompressed.png');?>">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url('asset/ico/apple-touch-icon-72x72-precompressed.png');?>">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url('asset/ico/apple-touch-icon-114x114-precompressed.png');?>">

<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body>
<?php echo $body ?>
	
	<!-- js -->
	<script type="text/javascript" src="<?php echo base_url('asset/js/widgets.js');?>"></script>
	<script src="<?php echo base_url('asset/js/jquery-1.7.2.min.js');?>"></script>
	<script src="<?php echo base_url('asset/js/google-code-prettify/prettify.js');?>"></script>
	<script src="<?php echo base_url('asset/js/bootstrap.js');?>"></script>
	<script defer src="<?php echo base_url('asset/js/flexslider.js');?>"></script>
	<script src="<?php echo base_url('asset/js/jflickrfeed.min.js');?>"></script>
	<script  src="<?php echo base_url('asset/js/cloud-zoom.1.0.2.js');?>"></script>
	<script  src="<?php echo base_url('asset/jscloud-zoom.1.0.2.min.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('asset/fancybox/jquery.fancybox-1.3.4.pack.js');?>"></script>
	<script  type="text/javascript" src="<?php echo base_url('asset/js/jquery.validate.js');?>"></script>
	<script defer src="<?php echo base_url('asset/js/custom.js');?>"></script>
	<!-- extra js-->
	<?php foreach($javascript as $js):?>
	<script defer src="<?php echo base_url('asset/js/'.$js);?>"></script>
	<?php endforeach;?>

	<?php foreach($javatext as $js):?>
	<script defer src="<?php echo base_url('asset/js/'.$js);?>"></script>
	<?php endforeach;?>

</body>
</html>