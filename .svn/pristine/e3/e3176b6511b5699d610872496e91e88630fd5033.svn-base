<?php get_template_part('templates/header'); ?>

<div class="single blog-roll wow fadeInLeft">
  <div class="row">             
<?php  

$queried_object = get_queried_object(); 
$taxonomy = $queried_object->taxonomy;
$term_id = $queried_object->term_id;  
$auth_ID = $queried_object->data->ID;  
      
      // var_dump($queried_object);

?> 

      <div class="contentwrap">

      <?php 

    // echo $offset;

      $page = (get_query_var('paged')) ? get_query_var('paged') : 1;
      $temp = $wp_query;
      $wp_query = null;
      $wp_query = new WP_Query();
      $wp_query -> query( array(
        'posts_per_page' => 5, 
        'author' => $auth_ID,
        'orderby' => 'date', 
        'order' => 'DSC',
        'paged' => $paged
      ) );

  while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

          <?php 
            $author = get_the_author();
            $date = get_the_date();
           ?>


            <article class="blog-post left">

            <div class="img-contain">
              <?php 
                $catch = catch_first_image();
                $title = get_the_title();
                  if ( $catch == false) {
                    echo('<img alt="'. $title .'" src="http://bsi.bigshotdesign.com/wp-content/uploads/2016/03/casstudies.png" />');                 
                  } else {
                    echo('<img alt="'. $title .'" src="' . $catch . '" />'); 
                  }
              ?>
            </div>
            <section>
            <h2><?php the_title(); ?></h2>
            <div class="author">
              <?php 
                $author_link = get_the_author_posts_link();
                $date = get_the_date();
                $aid = get_the_author_meta('ID');
                echo '<a class="gravatar" href="'. $auid .'">'. get_avatar($aid) .'</a>Posted on '. $date .' by '. $author_link ; ?>
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
      <?php get_template_part('templates/ctas'); ?>
</div>
</div>
<?php get_template_part('templates/footer'); ?>