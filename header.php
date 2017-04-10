<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<!--
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="css/style.css">
	-->

	<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/build.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/custom.css">

	<script src="<?php bloginfo('template_directory');?>/js/modernizr.js"></script> <!-- Modernizr -->
  	
	<title><?php wp_title();?></title>
	<?php wp_head();?>
</head>

<body <?php body_class(); ?>>
<?php do_action( 'crafted_before' ); ?>
<jw-seach />