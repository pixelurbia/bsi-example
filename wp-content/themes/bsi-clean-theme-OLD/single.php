<?php
/*
Template Name: single 
*/
?>

<?php get_template_part('templates/header'); ?>

<div class="single post wow fadeInLeft">
  <div class="row">             



  <?php while ( have_posts() ) : the_post(); ?>
     <?php 
     $title = get_the_title();
    	echo '<div class="ftimg" style="background:url('. catch_first_image() .') no-repeat;">';
	       	echo '<h2>'. $title .'</h2>';
    	  	echo '<div class="overlay"></div>';
      	echo '</div>';
      	?> 
       
      	<div class="contentwrap">
      
       <div class="author">
              <?php 
                $author = get_the_author();
                $date = get_the_date();
                $aid = get_the_author_meta('ID');
                echo '<a class="gravatar" href="">'. get_avatar($aid) .'</a>Posted on '. $date .' by <a href="#">'. $author .'</a>'; ?>
        </div>		

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
</div>
<?php get_template_part('templates/footer'); ?>