<?php
function textbased_enqueue_scripts() {
  $url = get_template_directory_uri();

  // Styles
  wp_enqueue_style('style', $url . '/style.css');
  // wp_enqueue_style('style', $url . '/login/login-styles.css');

  // Javascript
  wp_deregister_script('jquery');
  wp_enqueue_script('jquery', $url . '/js/jquery.js', array(), '1.9.1');
  wp_enqueue_script('script', $url . '/js/script.js', array('jquery'), '1.0');
}
add_action('wp_enqueue_scripts', 'textbased_enqueue_scripts');

  //Custom login css
function my_login_stylesheet() {
  wp_enqueue_style( 'custom-login', get_template_directory_uri() . '/login/login-styles.css' );
}
add_action( 'login_enqueue_scripts', 'my_login_stylesheet' );
