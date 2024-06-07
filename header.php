<?php

/**
 * Header template.
 * 
 * @package ThemeStarter
 */

?>

<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta content="width=device-width, initial-scale=1, viewport-fit=cover, maximum-scale=5, shrink-to-fit=no" name="viewport" />
    <link href="<?php echo get_template_directory_uri(); ?>/assets/images/extras/logo-ph-black.svg" rel="icon" type="image/png" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(''); ?>>
    <?php wp_body_open(); ?>

    <?php get_template_part('template-parts/header/header'); ?>

    <main id="content-container">