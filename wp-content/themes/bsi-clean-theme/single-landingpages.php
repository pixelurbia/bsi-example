<?php
/*
Template Name: single 
*/
?>

<?php get_template_part('templates/header'); ?>

  <div class="single post landingpage">
    <div class="row">             
      <?php while ( have_posts() ) : the_post(); ?>
        <?php ftimg(); ?>             
          <div class="contentwrap">
            <div class="tweetthis">
              <hr>
                <a href="https://twitter.com/intent/tweet?text=<?php echo $title ?>%20via%20@bigshotinbound%20<?php echo the_permalink(); ?>"></a>
              <hr>
            </div>
        	 <?php the_content(); ?>
      		  <?php endwhile; ?>
    	   </div><!--contentwrap-->
		  <?php get_template_part('templates/flex'); ?>	
    </div>
  </div>

<?php get_template_part('templates/footer'); ?>