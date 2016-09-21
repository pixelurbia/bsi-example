<?php
/*
Template Name: single 
*/
?>

<?php get_template_part('templates/header'); ?>

<div class="single post ">
  <div class="row">             
  <?php while ( have_posts() ) : the_post(); ?>
     <?php 
     $title = get_the_title();
     $sub_title = get_field('secondary_title');
     $sub_heading = get_field('secondary_heading');
     
      echo '<div class="ftimg" style="background:url('. catch_first_image() .') no-repeat;">';
          echo '<h2>'. $sub_title .'</h2>';
          echo '<h4>'. $sub_heading .'</h4>';
          echo '<div class="overlay"></div>';
        echo '</div>';
        ?> 
       
        <div class="contentwrap">   
            <?php the_content(); ?>
          <?php endwhile; ?>
      </div><!--contentwrap-->
  
    <?php get_template_part('templates/flex'); ?> 


  </div>
</div>
</div>
<?php get_template_part('templates/footer'); ?>