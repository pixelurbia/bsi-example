<?php
/*
Template Name: culture 
*/
?>

<?php get_template_part('templates/header'); ?>

<div class="single wow fadeInLeft">
  <div class="row">  
<?php 

 function fetchData($url){
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_TIMEOUT, 30);
  $result = curl_exec($ch);
  curl_close($ch); 
  return $result;
  }

  $result = fetchData("https://api.instagram.com/v1/users/1544832883/media/recent/?access_token=1544832883.1677ed0.638c3455f31d4e8b8a59ad87bf492f01");
  $result = json_decode($result);
  foreach ($result->data as $post) {
    // Do something with this data.
    // var_dump($post);
    echo '<div class="grams" target="blank" href="'.$post->link.'">
        <div class="desc-contain animated fadeInUp"><div class="desc">'.htmlentities($post->caption->text).' | '.htmlentities(date("F j, Y, g:i a", $post->caption->created_time)).'</div></div>
        <img class="gram" src="'.$post->images->standard_resolution->url.'" alt="'.$post->caption->text.'" width="100%" height="auto" /></div>';
        
  }

 ?>

</div>



<?php get_template_part('templates/footer'); ?>