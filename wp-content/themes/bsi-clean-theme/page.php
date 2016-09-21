<?php
/*
Template Name: single 
*/
?>

<?php get_template_part('templates/header'); ?>

<div class="single post ">
  <div class="row">             
  <?php while ( have_posts() ) : the_post(); ?>
    <?php ftimg(); ?>        
       
        <div class="contentwrap">   
            <?php the_content(); ?>
          <?php endwhile; ?>
      </div><!--contentwrap-->
  
    <?php get_template_part('templates/flex'); ?> 
    <?php get_template_part('templates/ctas'); ?> 

  </div>
</div>
</div>
<?php get_template_part('templates/footer'); ?>