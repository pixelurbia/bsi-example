<?php
/*
Template Name: Portfolio
*/
?>

<?php get_template_part('templates/header'); ?>

<div class="single port post ">
  <div class="row">      
       <?php ftimg(); ?>        
  
          <?php while ( have_posts() ) : the_post(); ?>
          <div class="contentwrap">  
            <?php the_content(); ?>        
          </div><!--contentwrap-->
        <?php endwhile; ?>   
           
<div class="contentwrap">  

<?php 
  $catquery =  new WP_Query(array(
    'post_type' => 'portfolio',
    'posts_per_page' => 9999,
    'order'=>'ASC'
  ) ); 
  $i = 1;
    while ( $catquery->have_posts() ) : $catquery->the_post();
          $title = get_the_title();
          $img = get_the_post_thumbnail($post_id, array(200,250));
          $link = get_the_permalink();

          echo '<a href="'.$link.'"><div class="portfolio-item item-'.$i.'">';
              echo '<div class="desc">';
                echo '<h3>'. $title . '</h3>';
              echo'</div>';
            // echo '<div class="img-contain">'.$img.'</div>';
            echo $img;
          echo '</div></a>';
          $i++;
    endwhile; ?>
      </div>
    <?php get_template_part('templates/flex'); ?> 

    <?php get_template_part('templates/ctas'); ?> 

  </div>
</div>
</div>
<?php get_template_part('templates/footer'); ?>