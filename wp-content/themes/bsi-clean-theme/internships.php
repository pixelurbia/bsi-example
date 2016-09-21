<?php
/*
Template Name: interships
*/
?>

<?php get_template_part('templates/header'); ?>

<div class="single post ">
  <div class="row">      
      <?php while ( have_posts() ) : the_post(); ?>
        <?php ftimg(); ?>        
     <?php endwhile;?>
      
        <div class="contentwrap">
       
    <?php
        the_content();
        $catquery = new WP_Query(array(
          'post_type' => 'inters',
          'posts_per_page' =>  -1
      ));
        
        while ($catquery->have_posts()) : $catquery->the_post(); 
        $title = get_the_title();
        $content = get_the_content();
        
            echo '<div class="faq-box">';
              echo '<div class="accordian-title">' . $title . '<div class="arrow"><span class="left"></span><span class="right"></span></div>';
              echo '<div class="accordian-content">';
              the_content();
              echo '</div></div>';
            echo '</div>';?>
                                 
                                   
                <?php wp_reset_query();?>
                <?php endwhile;?>
      </div>
    </div>
</div>
<?php get_template_part('templates/footer'); ?>