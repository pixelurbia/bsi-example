<?php
/*
Template Name: Contact 
*/
?>

<?php get_template_part('templates/header'); ?>

<div class="single post wow fadeInLeft">
  <div class="row">             
  <?php while ( have_posts() ) : the_post(); ?>

      <div id='map'></div>       
      	<div class="contentwrap">

<script>
L.mapbox.accessToken = 'pk.eyJ1IjoiYmlnc2hvdGluYm91bmQiLCJhIjoiY2lrNXU2ZjNuMDA5ZHA3a3N4Y3RkbjUwaCJ9.o8-Hhfz6oLQ_dFKwHYYlig';

var map = L.mapbox.map('map', 'bigshotinbound.p262omko')
    .setView([39.09,-94.58], 13);

var myLayer = L.mapbox.featureLayer().addTo(map);

var geoJson = [{
    "type": "Feature",
    "geometry": {
        "type": "Point",
        "coordinates": [-94.58, 39.09]
    },
    "properties": {
        "title": "BIGSHOT INBOUND",
        "icon": {
            "iconUrl": "http://localhost:8888/wp-content/uploads/2016/02/bigshotb.png",
            "iconSize": [40, 40], // size of the icon
            "iconAnchor": [25, 25], // point of the icon which will correspond to marker's location
            "popupAnchor": [0, -25], // point from which the popup should open relative to the iconAnchor
            "className": "dot"
        }
    }

}];

// Set a custom icon on each marker based on feature properties.
myLayer.on('layeradd', function(e) {
    var marker = e.layer,
        feature = marker.feature;
    marker.setIcon(L.icon(feature.properties.icon));
});

// Add features to the map.
myLayer.setGeoJSON(geoJson);
</script>


            <?php the_content(); ?>
          <?php endwhile; ?>
      </div><!--contentwrap-->
  
    <?php get_template_part('templates/flex'); ?> 


  </div>
</div>
</div>
<?php get_template_part('templates/footer'); ?>