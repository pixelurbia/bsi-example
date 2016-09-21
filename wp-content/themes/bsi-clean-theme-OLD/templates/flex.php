<?php 

// check if the flexible content field has rows of data
if( have_rows('content_areas') ):

     // loop through the rows of data
    while ( have_rows('content_areas') ) : the_row();

        if( get_row_layout() == 'wsywg_content' ):

        	$title = get_sub_field('content_title');
        	$sub_title = get_sub_field('sub_title');
        	$content = get_sub_field('wsywg_content');
        	$color = get_sub_field('section_color');
        	// $icons = get_sub_field('icons_section');

        	if( get_sub_field('highlight_area') ) {
				echo '<div class="row highlight">';
			}
			else {
				echo '<div class="row" >';
			}
        		echo '<div class="contentwrap">';
        			echo '<h2>'.$title.'</h2>';
        			echo '<h3>'.$sub_title.'</h3>';
        			echo $content;
        		echo '</div>';
				echo '<div class="icons">';
					if( have_rows('icons_section') ):
						// loop through the rows of data
						while ( have_rows('icons_section') ) : the_row();                                    
							$icon = get_sub_field('icon_');
							$title = get_sub_field('title');

						echo '<div class="icon-area">';
							echo '<div class="img-contain">';
								echo '<img src="'.$icon.'">';
							echo '</div>';
							echo '<h4>'.$title.'</h4>';
						echo '</div>';

 						endwhile;
                     else:
					// no rows found
					endif;
        		echo '</div>';
        	echo '</div>';


        // elseif( get_row_layout() == 'download' ): 

        // 	$file = get_sub_field('file');

        endif;

    endwhile;

else :

    // no layouts found

endif;



 ?>