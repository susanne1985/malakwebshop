<?php
function load_scripts()
{ wp_enqueue_style('style',get_template_directory_uri().'/css/style.css');
 wp_enqueue_style('bootstrap',get_template_directory_uri().'/css/bootstrap.min.css');
 wp_enqueue_style('font-awesome','https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css');



 wp_enqueue_script('script',get_template_directory_uri().'/js/script.js',array(),'1.1',true);
  wp_enqueue_script('jquery',get_template_directory_uri().'/js/jquery.min.js',array(),'3.3.1',true); 
  wp_enqueue_script('anime','https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js');


add_action('wp_enqueue_scripts','load_scripts');







}
?>

  