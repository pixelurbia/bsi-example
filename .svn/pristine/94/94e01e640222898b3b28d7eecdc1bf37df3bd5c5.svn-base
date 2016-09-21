<?php
/*
Template Name: Home Page
*/
?>


<?php get_template_part('templates/header'); ?>



    <div id="fullpage" class="content-wrap">
        <?php 
            if( have_rows('home_sections') ):
                // loop through the rows of data
                $i = 0;
                while ( have_rows('home_sections') ) : the_row();
                    // display a sub field value
                    $class = get_sub_field('custom_classes');
                    $title = get_sub_field('section_title');
                    $sub_head = get_sub_field('sub_heading');
                    $content = get_sub_field('content');
                    $featured_image = get_sub_field('featured_image');
                    $cta_button_text = get_sub_field('cta_button_text');
                    $cta_button_link = get_sub_field('cta_button_link');
                    $image_object_class = get_sub_field('image_object_class');

                    echo'<div class="section section-'.$i.' '.$class.'">';
                        
                        echo '<div class="img-obj '. $image_object_class .'">';

                            if( have_rows('img_obj') ):
                                // loop through the rows of data
                                while ( have_rows('img_obj') ) : the_row();
                                    
                                    $image = get_sub_field('image');
                                    $position = get_sub_field('position');
                                    echo '<div class="dogstuff">';
                                    echo '<img src="'.$image.'" class="dogs '.$position.'">';
                                    echo '</div>';

                               endwhile;
                            else:
                            // no rows found
                            endif;

                        echo '</div>';
                        echo '<div class="text-contain animated fadeInUp">';
                        echo '<h1>'.$title.'</h1>';
                        echo '<h4>'.$sub_head.'</h4>';
                        echo $content;
                        echo '<a class="btn" href="'.$cta_button_link.'">'.$cta_button_text.'</a>';
                        echo'</div>';

                    echo'</div>';
                    $i++;
                endwhile;
            else:
            // no rows found
            endif;
        ?>
    </div>

<div class="mouse">
  <div class="wheel"></div>
  <div class="wheeltwo"></div>
  <div class="wheelthree"></div>
</div>

<?php get_template_part('templates/footer'); ?>