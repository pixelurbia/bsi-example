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
<?php 
//custom GA dimension reporting
 if(is_single()) {
        $tpt = get_the_category();
		$cat_slug = $tpt[0]->slug;
    } ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-4362768-1', 'auto');
  ga('send', 'pageview');
    ga('send', 'pageview', { 'dimension1': '<?=$cat_slug?>' });


</script>
	<!-- Start of Async HubSpot Analytics Code -->
  	<script type="text/javascript">
    	(function(d,s,i,r) {
      	if (d.getElementById(i)){return;}
      	var n=d.createElement(s),e=d.getElementsByTagName(s)[0];
      	n.id=i;n.src='//js.hs-analytics.net/analytics/'+(Math.ceil(new Date()/r)*r)+'/237975.js';
      	e.parentNode.insertBefore(n, e);
    	})(document,"script","hs-analytics",300000);
  	</script>
	<!-- End of Async HubSpot Analytics Code -->

	<!-- Add jQuery library and UI -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	
	
	<?php wp_head(); ?>



	<!-- Loading the JS scripts -->
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/js/fullpage/jquery.fullPage.css" />
	<script src="<?php echo get_template_directory_uri(); ?>/js/fullpage/jquery.easings.min.js"></script>

	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/fullpage/jquery.slimscroll.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/fullpage/jquery.fullPage.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/libs/jquery.circliful.min.js"></script>

	<script src="<?php echo get_template_directory_uri(); ?>/js/libs/modernizr.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/libs/jquery.interactive_bg.js"></script>



	<script src="<?php echo get_template_directory_uri(); ?>/js/min/master-min.js"></script>
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
	
	<?php wp_nav_menu(array('container_class' => 'nav ','sort_column' => 'menu_order','theme_location' => 'mobile')); ?>
</div>

<div class="pre-loader">
	<i class=" pulse animated-two" style="visibility: visible; animation-iteration-count: 30; animation-name: tada;"></i>
</div>

<div class="content-contain">

<!-- <div class="bg" data-ibg-bg="<?php echo get_template_directory_uri(); ?>/images/bg.jpg"> -->
	<div class="header">
		<div class="header-container ">
		
			<?php 
				$logo = get_field('logo', 'option'); 
				$home = get_home_url();	
				echo '<a class="logo-contain" href="'.$home.'"><img src="'.$logo.'" class="logo" ></a>'; 
			?>
			<div class="mobile-open"></div>
			<div class="nav">
				<?php wp_nav_menu(array('container_class' => 'nav ','sort_column' => 'menu_order','theme_location' => 'main')); ?>
			</div>
		
</div>
	</div>



