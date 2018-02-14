<?php 
include("config/site.php");
include("config/paths.php");
 ?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo SITENAME;?></title>
	<!--Meta-->
	<link rel="icon" href="<?php echo FAVICON_ICO; ?>" type="image/x-icon"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--Syles-->
	<link rel="stylesheet" type="text/css" href="<?php  echo BOOTSTRAP_CSS;?>">
	<link rel="stylesheet" type="text/css" href="<?php  echo NAV_CSS;?>">
	<link rel="stylesheet" type="text/css" href="<?php  echo STYLES_CSS;?>">
	<link rel="stylesheet" type="text/css" href="<?php  echo MOBILE_CSS;?>">
	<!--Scripts-->
	<script type="text/javascript" src="<?php echo JQUERY_JS; ?>"></script>
	<script type="text/javascript" src="<?php echo BOOTSTRAP_JS; ?>"></script>
	<script type="text/javascript" src="<?php echo NOTIFY_JS; ?>"></script>
</head>
<body>