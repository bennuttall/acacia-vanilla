<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
    <title><?php wp_title('| ', true, 'right'); bloginfo('title'); ?></title>
    <meta name="description" content="<?php meta_description(); ?>" />
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width" />
    <link rel="icon" type="image/jpg" href="<?php bloginfo('template_url'); ?>/images/captain-yesterday-64x64.jpg" />
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
    <!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
    <![endif]-->
    <link href="<?php timestamped_stylesheet(); ?>" rel="stylesheet" />
    <link href="<?php timestamped_stylesheet('mobile.css'); ?>" rel="stylesheet" />
    <link rel="author" href="https://plus.google.com/109819740851612778825?rel=author" />
    <link rel="publisher" href="https://plus.google.com/109819740851612778825?rel=author" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php get_template_part('nav'); ?>
<div id="container">
<section id="main">
