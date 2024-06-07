<?php

/**
 * Styles and Scripts.
 * 
 * @package ThemeStarter
 */

// Enqueue styles and scripts
function themeStarter_enqueue()
{
  $theme_version = filemtime(get_stylesheet_directory() . '/style.css');
  $script_version = filemtime(get_stylesheet_directory() . '/assets/js/index.js');
  $style_version = filemtime(get_stylesheet_directory() . '/assets/css/styles.css');

  /* Register and Enqueue Scripts */

  wp_register_script('themeStarter-scripts', get_parent_theme_file_uri('/assets/js/index.js'), ['wp-element'], $script_version, true);
  wp_enqueue_script('themeStarter-scripts');

  /* Register and Enqueue Styles */

  wp_register_style('themeStarter-styles', get_parent_theme_file_uri('/assets/css/styles.css'), [], $style_version, 'all');
  wp_enqueue_style('themeStarter-styles');

  wp_register_style('bootstrap-icons', get_parent_theme_file_uri('/assets/css/bootstrap-icons.css'), [], '1.11.1', 'all');
  wp_enqueue_style('bootstrap-icons');

  wp_register_style('font-awesome', get_parent_theme_file_uri('/assets/css/font-awesome.css'), [], '6.4.2', 'all');
  wp_enqueue_style('font-awesome');
}
