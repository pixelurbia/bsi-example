<?php
/*
Template Name: ebook
*/
?>

<?php get_template_part('templates/header'); ?>

<div class="single resource post ">
  <div class="row">      
       <?php ftimg(); ?>     

        <?php while ( have_posts() ) : the_post(); ?>
          <div class="contentwrap">  
            <?php the_content(); ?>        
          </div><!--contentwrap-->
        <?php endwhile; ?>   
       
     <div class="contentwrap">  
<?php 
global $post;
  $catquery =  new WP_Query(array(
    'post_type' => 'resources',
    'posts_per_page' => 9999,
    'order'=>'ASC'
  ) ); 
  $i = 1;
    while ( $catquery->have_posts() ) : $catquery->the_post();
          $title = get_the_title();
          $content = get_the_content();
          $img = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
          $link = get_field('hubspot_landing_page_link');
          echo '<a href="'.$link.'"><div class="resource-item item-'.$i.'">';
                echo '<img src="'.$img.'">';
                echo '<h4>'. $title . '</h4>';
                echo $content;
          echo '</div></a>';
          $i++;
    endwhile; ?>
</div>
    <?php get_template_part('templates/flex'); ?> 


  </div>

</div>
</div>
<?php get_template_part('templates/footer'); ?>