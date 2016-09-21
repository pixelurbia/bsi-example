<a href="#top">	
	<div class="to-top">
		<img class="murray">
		<span></span>
		<a href="#top">TO THE TOP</a>
	</div>
</a>

<div class="footer">

	<div class="copyright">
		<?php echo date("Y"); ?> &copy; BIGSHOT Inbound | <a href="tel:816.471.1877">816.471.1877</a>
	</div>
	<div class="footer-nav">
		<ul class="sm">
			<li class="facebook"><a target="_blank" href="<?php the_field('facebook','option'); ?>"></a></li>
			<li class="twitter"><a target="_blank" href="<?php the_field('twitter','option'); ?>"></a></li>
			<li class="linkedin"><a target="_blank" href="<?php the_field('linkedin','option'); ?>"></a></li>
			<li class="gplus"><a target="_blank" href="<?php the_field('gplus','option'); ?>"></a></li>
			<li class="instagram"><a target="_blank" href="<?php the_field('instagram','option'); ?>"></a></li>
			<li class="pinterest"><a target="_blank" href="<?php the_field('pintrest','option'); ?>"></a></li>
		</ul>
		<?php wp_nav_menu(array('container_class' => 'nav ','sort_column' => 'menu_order','theme_location' => 'footer')); ?>
	</div>

		<?php wp_footer(); ?>
		</div>
	<!-- </div> -->
</div>

</body>

<!-- More scripts -->

	<script src="<?php echo get_template_directory_uri(); ?>/js/libs/lightbox/featherlight.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/libs/lightbox/featherlight.gallery.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/js/libs/lightbox/featherlight.gallery.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/js/libs/lightbox/featherlight.css" />

</html>
