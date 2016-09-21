<?php
/*
Template Name: single 
*/
?>

<?php get_template_part('templates/header'); ?>

<div class="single post port">
  <div class="row">            
  <?php while ( have_posts() ) : the_post(); ?>
      <div class="contentwrap">
        <div class="text-contain">
       <!--    <div class="tweetthis">
            <hr>
              <a href="https://twitter.com/intent/tweet?text=<?php echo $title ?>%20via%20@bigshotinbound%20<?php echo the_permalink(); ?>"></a>
            <hr>
          </div> -->
          <a href="/portfolio">&#8592; Back to Portfolio</a>
          <h2><?php the_title(); ?></h2>
            <?php   $posttags = get_the_tags();
    if ($posttags) {
      foreach($posttags as $tag) {
        echo $tag->name . ' &middot; ';
      }
    }?>
        		<?php the_content(); ?>
      		<?php endwhile; ?>
    	</div>
      <div class="collateral">

        <?php 
        $i = 1;
        if( have_rows('collateral') ):
          while ( have_rows('collateral') ) : the_row();
            
            $images = get_sub_field('images');
            
// var_dump($images);
  // vars
  $url = $images['url'];
  $title = $images['title'];
  $alt = $images['alt'];
  $caption = $images['caption'];
  // thumbnail
  $size = 'large';
  $thumb = $images['sizes'][ $size ];



            echo '<div class="port-item col-w'. $i .'">';
              echo '<a href="'.$url.'" data-featherlight="'.$url.'"><img src="'. $thumb .'" ></a>';
            echo '</div>';

          $i++;
          endwhile;
          else:
        // no rows found
        endif;
       ?>
      </div>
	</div><!--contentwrap-->
		<?php get_template_part('templates/flex'); ?>	
  </div>
</div>

<?php get_template_part('templates/footer'); ?>