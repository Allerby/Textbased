<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--og meta tags-->
<meta property="og:title" content=""/>
<meta property="og:url" content=""/>
<meta property="og:image" content=""/>
<meta property="og:site_name" content=""/>
<meta property="og:description" content="" />
<meta name="google-site-verification" content="" />
<link href='http://fonts.googleapis.com/css?family=Raleway:400,300,500,600,100,200' rel='stylesheet' type='text/css'>
<title><?php bloginfo('name'); ?></title>
<!--[if lt IE 9]>
<link rel="stylesheet" href="<?php echo site_url('ie.css'); ?>">
<script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js" type="text/javascript"></script>
<![endif]-->
<?php
  /* We add some JavaScript to pages with the comment form
   * to support sites with threaded comments (when in use).
   */
  if (is_singular() && get_option('thread_comments')) {
    wp_enqueue_script( 'comment-reply' );
  }
  wp_head();
?>
</head>
<body <?php body_class(); ?>>
