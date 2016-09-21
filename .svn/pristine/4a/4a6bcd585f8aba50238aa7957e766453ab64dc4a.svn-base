<!DOCTYPE HTML>
<!--[if IEMobile 7 ]><html class="no-js iem7" manifest="default.appcache?v=1"><![endif]--> 
<!--[if lt IE 7 ]><html class="no-js ie6" lang="en"><![endif]--> 
<!--[if IE 7 ]><html class="no-js ie7" lang="en"><![endif]--> 
<!--[if IE 8 ]><html class="no-js ie8" lang="en"><![endif]--> 
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html class="no-js" lang="en"><!--<![endif]-->

<head>
	<title><?php bloginfo( 'name' ); ?><?php wp_title( '|' ); ?></title>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
  	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="google-site-verification" content="_zkFo6lXB944rDuOoknwmwzuDec-5Kh92M329a5P-AY" />
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php 
		$fc = get_field('favicon', 'option'); 
	?>
	<link rel="shortcut icon" href="<?php echo $fc ?>"/>
	<link rel="icon" type="image/x-icon" href="<?php echo $fc ?>" />

	<!-- Add jQuery library and UI -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	
	<?php wp_head(); ?>

	<!-- FullPage JS -->
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/js/fullpage/jquery.fullPage.css" />
	<script src="<?php echo get_template_directory_uri(); ?>/js/fullpage/jquery.easings.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/fullpage/jquery.slimscroll.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/fullpage/jquery.fullPage.js"></script>

	<script src="<?php echo get_template_directory_uri(); ?>/js/libs/modernizr.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/libs/jquery.interactive_bg.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/libs/konami.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/master.js"></script>
	  <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v0.13.1/mapbox-gl.js'></script>
	  <script src='https://api.mapbox.com/mapbox.js/v2.2.4/mapbox.js'></script>
    <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v0.13.1/mapbox-gl.css' rel='stylesheet' />
    <link href='https://api.mapbox.com/mapbox.js/v2.2.4/mapbox.css' rel='stylesheet' />
	
	<!--  TypeKit  -->
	<script src="https://use.typekit.net/rpq7fho.js"></script>
	<script>try{Typekit.load({ async: true });}catch(e){}</script>

</head>

<body <?php body_class(); ?> >


<div class="mobile-nav">
	<div class="mobile-close">X</div>
	
	<?php wp_nav_menu(array('container_class' => 'nav ','sort_column' => 'menu_order','theme_location' => 'main')); ?>
</div>

<div class="pre-loader">
	<i class=" pulse animated" style="visibility: visible; animation-iteration-count: 30; animation-name: tada;"></i>
</div>

<div class="content-contain">

<!-- <div class="bg" data-ibg-bg="<?php echo get_template_directory_uri(); ?>/images/bg.jpg"> -->
	<div class="header">
		<div class="header-container ">
		
			<?php 
				$logo = get_field('logo', 'option'); 
				$home = get_home_url();	
				echo '<a href="'.$home.'"><img src="'.$logo.'" class="logo" ></a>'; 
			?>
			<div class="mobile-open"></div>
			<div class="nav">
				<?php wp_nav_menu(array('container_class' => 'nav ','sort_column' => 'menu_order','theme_location' => 'main')); ?>
			</div>
		</div>
	</div>




