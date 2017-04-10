<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/build.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/custom.css">

	<script src="<?php bloginfo('template_directory');?>/js/modernizr.js"></script> <!-- Modernizr -->
  	
	<title><?php wp_title();?></title>
	<?php wp_head();?>
</head>

<body <?php body_class(); ?>>
<?php do_action( 'crafted_before' ); ?>
	<div id="mobile-nav-wrap" class="mobile-nav-wrap" :class="{ opened : mobileMenu }" v-show="mobileMenu">
		<nav id="mobile-navigation-top" class="navigation-mobile" role="navigation">
	    <ul>
       	<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'items_wrap' => '%3$s', 'container' => '' ) ); ?>
			</ul>
		</nav><!-- #mobile-navigation -->
	</div> <!-- #mobile-nav-wrap -->
	<div id="page" :class="{ opened : mobileMenu }">
		<header>
			<div class="container">
				<div class="col-xs-3">
					<a href="<?php echo get_bloginfo('url'); ?>">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/community-school-of-the-arts-full-color.png" alt="Well Dressed Wayfarer" class="logo">
					</a>
				</div>
				<div class="col-xs-9">
					<div id="main-nav">
						<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container' => '' ) ); ?>
					</div>
					<div class="navicon-wrap">
	        	<button class="lines-button x" :class="{ close: mobileMenu }"  @click="mobileMenu = !mobileMenu" type="button" role="button" aria-label="Toggle Navigation">
	        		<span class="lines"></span>
	        	</button>
	        </div>
				</div>
			</div>
		</header>

