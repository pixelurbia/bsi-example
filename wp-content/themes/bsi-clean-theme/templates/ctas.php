    <div class="contentwrap">  
<?php 
// $cta = get_field('cta_selector');
wp_reset_postdata();
if( get_field('add_cta') )
{ ?>

<?php 

$post_object = get_field('cta_selector');

if( $post_object ): 

  // override $post
  $post = $post_object;
  setup_postdata( $post );
  $cta_content = get_field('cta_content'); 
  $cta_img = get_field('image'); 
  $cta_bg = get_field('background_image'); 
  $cta_bg_color = get_field('background_defualt_color'); 
  $cta_position = get_field('content_position'); 


  ?>
    <div class="large-cta <?php echo $cta_position ?>-cta" style="background-image:url('<?php echo $cta_bg; ?>'); background-color:<?php echo $cta_bg_color; ?>;">
      <div class="text-contain">
        <?php echo $cta_content; ?>
      </div>
    </div>
    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
<?php endif; ?>

<?php  }
else
{ 

}
?>

  </div>