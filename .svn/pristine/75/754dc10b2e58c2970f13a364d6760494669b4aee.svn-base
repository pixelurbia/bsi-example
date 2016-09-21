<?php
/*
Template Name: single 
*/
?>

<?php get_template_part('templates/header'); ?>

<div class="single post">
  <div class="row">             
    <?php while ( have_posts() ) : the_post(); ?>
      
      	<div class="contentwrap">
        <h2 class="heading"><?php the_title(); ?></h2>	
     <div class="author">
            <?php 
              
                $author_link = get_the_author_posts_link();
                $date = get_the_date();
                $aid = get_the_author_meta('ID');
                
        echo '<a class="gravatar" href="'. $auid .'">'. get_avatar($aid) .'</a> <span>Posted on '. $date .' by '. $author_link .'</span>';?>
          </div> 
        <div class="tweetthis">
          <hr>
            <a target="_blank" href="https://twitter.com/intent/tweet?text=<?php echo $title ?>%20via%20@bigshotinbound%20<?php echo the_permalink(); ?>"></a>
          <hr>
        </div>
   
          <br>
        <?php
        $ftimg = catch_first_image();
        echo '<img class="alignleft" src="'. catch_first_image() .'">';     
        the_content(); 
        ?>
    
  
      	<?php endwhile; ?>
        <br>
        <?php echo do_shortcode('[getsocial app="sharing_bar"]'); ?>
    	</div><!--contentwrap-->
		
    <?php get_template_part('templates/flex'); ?>	
    <?php get_template_part('templates/ctas'); ?> 
  </div>
</div>

<?php get_template_part('templates/footer'); ?>

