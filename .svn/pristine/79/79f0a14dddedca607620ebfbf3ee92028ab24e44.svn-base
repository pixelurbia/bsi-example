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

                                      // vars
                                        $url = $image['url'];
                                        // thumbnail
                                        $size = 'medium';
                                        $thumb = $image['sizes'][ $size ];


                                    echo '<div class="dogstuff">';
                                    echo '<img src="'.$thumb.'" class="dogs '.$position.'">';
                                    echo '</div>';

                               endwhile;
                            else:
                            // no rows found
                            endif;

                        echo '</div>';
                        echo '<div class="text-contain animated-three fadeInUp">';
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

<a href="/culture" class="whats-up"></a>

<div class="mouse">
    <a id="nextlink" href="#section-1"></a>
    <div class="wheel"></div>
    <div class="wheeltwo"></div>
    <div class="wheelthree"></div>
</div>


    <div class="bofo dog-bowl-cta">
    <div class="the-bowl"></div>
    <div class="text-contain">
        <h2>Want more?</h2>
        <h4>Download our free e-book to dig up some more info on inbound marketing!</h4>
    </div>
    <a class="btn blue" href="http://www.google.com/url?q=http%3A%2F%2Foffers.thinkbigshot.com%2Fintroduction-to-inbound-marketing-bigshot-inbound&sa=D&sntz=1&usg=AFQjCNGp4SaIZC1fvF8CD4SlYmw9RiV6XQ">Download Now!</a>
        
    </div>
<!-- animated-two infinite shake -->


<?php get_template_part('templates/footer'); ?>