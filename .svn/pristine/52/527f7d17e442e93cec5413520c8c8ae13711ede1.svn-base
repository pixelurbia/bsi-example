<?php
/*
Template Name: about 
*/
?>

<?php get_template_part('templates/header'); ?>

<div class="single wow fadeInLeft">
  <div class="row">             
     <?php $img = get_field('featured_image'); ?> 
      <div class="ftimg" style="background:url(<?php echo $img; ?>) no-repeat;">
      	<h2><?php the_field('secondary_heading'); ?></h2>
      	<h4><?php the_field('sub_heading'); ?></h4>
      </div>
      	<div class="contentwrap">
      		<?php while ( have_posts() ) : the_post(); ?>
      			<h2><?php the_title(); ?></h2>
        		<?php the_content(); ?>
      		<?php endwhile; ?>
    	</div>
    	</div>
		
		
		<div class="master-overlay animated fadeIn">
					<div class="overlay-close">Close X</div>
			<div class="staff-member lightbox animated active fadeInUp"></div>
		</div>
		<div class="row">
			<div class="contentwrap staff">
		    <?php 
            if( have_rows('staff_upload') ):
                // loop through the rows of data
                while ( have_rows('staff_upload') ) : the_row();
					$img = get_sub_field('image'); 
					$name = get_sub_field('name'); 
					$title = get_sub_field('title'); 
					$bio = get_sub_field('bio'); 

					echo '<div class="staff-member">';
						echo '<img src="'.$img.'">';
						echo '<h3>'.$name.'</h5>';
						echo '<h5>'.$title.'</h6>';
						echo '<span class="bio">'. $bio .'</span>';
					echo '</div>';


				endwhile;
				else:
				endif;
			?> 
			</div>
		</div>

		<?php get_template_part('templates/flex'); ?>

  </div>

</div>



<?php get_template_part('templates/footer'); ?>