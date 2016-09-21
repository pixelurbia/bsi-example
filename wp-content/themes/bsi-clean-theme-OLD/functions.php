<?php

require_once('functions/theme.php');
require_once('functions/script.php');
require_once('functions/menu.php');
require_once('functions/widget.php');
require_once('functions/taxonomies.php');
require_once('functions/post-types.php');
require_once('functions/calendar.php');
require_once('templates/instagram.php');

add_action( 'wp_login_failed', 'my_front_end_login_fail' );  // hook failed login

function my_front_end_login_fail( $username ) {
   $referrer = $_SERVER['HTTP_REFERER'];  // where did the post submission come from?
   // if there's a valid referrer, and it's not the default log-in screen
   if ( !empty($referrer) && !strstr($referrer,'wp-login') && !strstr($referrer,'wp-admin') ) {
      wp_redirect( $referrer . '?login=failed' );  // let's append some information (login=failed) to the URL for the theme to use
      exit;
   }
}


 show_admin_bar(false);

// [button shortcode][bartag foo="foo-value"]
function button_func( $atts ) {
    $a = shortcode_atts( array(
        'link' => '#',
        'text' => 'Button'
    ), $atts );

    return '<a class="btn" href="'. $a['link'].'">'. $a['text'].'</a>';
}
add_shortcode( 'button', 'button_func' );

function quote_func( $atts ) {
    $a = shortcode_atts( array(
        'img' => '#',
        'text' => 'Button'
    ), $atts );

    return '<span class="quote" style="background:#f37f30 url('. $a['img'].')">" '. $a['text'].' "</span>';
}
add_shortcode( 'quote', 'quote_func' );

function new_excerpt_more( $more ) {
	return '';
}
add_filter('excerpt_more', 'new_excerpt_more');


/*get first image of post--------*/
function catch_first_image(){
global $post, $posts;
$first_img = '';
ob_start();
ob_end_clean();
$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
$first_img = $matches [1] [0];
if(empty($first_img)){ //If no image is found
$first_img = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); //path to default image
}
return $first_img;
}

function pagination_nav() {
    global $wp_query;
 
    if ( $wp_query->max_num_pages > 1 ) { ?>
        <nav class="pagination" role="navigation">
            <div class="nav-previous"><?php next_posts_link( '&larr; Older posts' ); ?></div>
            <div class="nav-next"><?php previous_posts_link( 'Newer posts &rarr;' ); ?></div>
        </nav>
<?php } 
}

