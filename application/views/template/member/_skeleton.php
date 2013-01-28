<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title><?php echo $title ?></title>

<meta name="viewport" content="width=device-width">
<meta name="keywords" content="<?php echo $keywords ?>" />
<meta name="author" content="<?php echo $author ?>" />
<meta name="description" content="<?php echo $description ?>" />

<link rel="stylesheet" href="<?php echo base_url("asset/css/member.css");?>">
<link rel="stylesheet" href="<?php echo base_url("asset/css/charisma-app.css");?>">
<link rel="stylesheet" href="<?php echo base_url("asset/css/uniform.default.css");?>">

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
	<script>window.jQuery || document.write('<script src="<?php echo base_url("asset/js/jquery-1.7.2.min.js");?>"><\/script>')</script>
	
	<!-- extra js-->
	<?php foreach($javascript as $js):?>
	<script defer src="<?php echo base_url('asset/js/'.$js);?>"></script>
	<?php endforeach;?>

	
</body>
</html>
