<?php
function textbased_enqueue_scripts() {
  $url = get_template_directory_uri();
  
  // Styles
  wp_enqueue_style('style', $url . '/style.css', array(), '1.1', 'screen');
  
  // Javascript
  wp_deregister_script('jquery');
  wp_enqueue_script('jquery', $url . '/js/jquery.js', array(), '1.9.1');
  wp_enqueue_script('script', $url . '/js/script.js', array('jquery'), '1.0');
}
add_action('wp_enqueue_scripts', 'textbased_enqueue_scripts');