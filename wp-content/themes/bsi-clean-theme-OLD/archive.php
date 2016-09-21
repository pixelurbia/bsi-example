<?php get_template_part('templates/header'); ?>

<div class="single blog-roll wow fadeInLeft">
  <div class="row">             
<?php  

$queried_object = get_queried_object(); 
$taxonomy = $queried_object->taxonomy;
$term_id = $queried_object->term_id;  
$cat_ID = $queried_object->cat_ID;  

// var_dump($queried_object);

// load thumbnail for this taxonomy term (term object)
$img = get_field('ft_image', $queried_object);
     if( $img ) {

      echo '<div class="ftimg" style="background:url('. $img .') no-repeat;">';
          echo '<h2>'. $queried_object->name  .'</h2>';
          echo '<h4>'. $queried_object->description .'</h4>';
        echo '</div>';
      
  } ?> 

  <div class="contentwrap">
    <?php 

$paged = get_query_var('paged');
if ($paged < 1) {

    query_posts( array(
        'posts_per_page' => 1, 
        'category__in' => $cat_ID, 
        'orderby' => 'date', 
        'order' => 'DSC'
        ) );
        
          while ( have_posts() ) : the_post(); ?>

    
            <article class="blog-post">
            <div class="img-contain">
              <?php echo('<img src="' . catch_first_image() . '" />'); ?>
            </div>
            <section>

            <h2><?php the_title(); ?></h2>
            <div class="author">
              <?php 
                $author = get_the_author();
                $date = get_the_date();
                $aid = get_the_author_meta('ID');
                echo '<a class="gravatar" href="">'. get_avatar($aid) .'</a>Posted on '. $date .' by <a href="#">'. $author .'</a>'; ?>
            </div>  
 
            <?php the_excerpt() ?>
            <a class="btn" href="<?php the_permalink(); ?>">Read More</a>
            </section>

            </article>

          <?php endwhile; 
          } ?>
      </div>
</div>
<div class="row"> 
      <div class="contentwrap">

      <?php 

    // echo $offset;
    if ($paged == 0) { 
      $page = (get_query_var('paged')) ? get_query_var('paged') : 1;
      $temp = $wp_query;
      $wp_query = null;
      $wp_query = new WP_Query();
      $wp_query -> query( array(
        'posts_per_page' => 5, 
        'category__in' => $cat_ID, 
        'orderby' => 'date', 
        'order' => 'DSC',
        'paged' => $paged,
        'offset' => 1
      ) );

     } else {
      $page = (get_query_var('paged')) ? get_query_var('paged') : 1;
      $temp = $wp_query;
      $wp_query = null;
      $wp_query = new WP_Query();
      $wp_query -> query( array(
        'posts_per_page' => 5, 
        'category__in' => $cat_ID, 
        'orderby' => 'date', 
        'order' => 'DSC',
        'paged' => $paged
      ) );

     }

  while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

          <?php 
            $author = get_the_author();
            $date = get_the_date();
           ?>


            <article class="blog-post left">

            <div class="img-contain">
              <?php echo('<img src="' . catch_first_image() . '" />'); ?>
            </div>
            <section>
            <h2><?php the_title(); ?></h2>
            <div class="author">
              <?php 
                $author = get_the_author();
                $date = get_the_date();
                $aid = get_the_author_meta('ID');
                echo '<a class="gravatar" href="">'. get_avatar($aid) .'</a>Posted on '. $date .' by <a href="#">'. $author .'</a>'; ?>
            </div>  
        <?php the_excerpt() ?>
            <a class="btn" href="<?php the_permalink(); ?>">Read More</a>
            </section>
            </article>

          <?php endwhile; ?>
<div class="pagenav">
<div class="alignleft"><?php previous_posts_link('Previous') ?></div>
<div class="alignright"><?php next_posts_link('Next') ?></div>
</div>


     </div>
</div>
  </div>
</div>
</div>
<?php get_template_part('templates/footer'); ?>