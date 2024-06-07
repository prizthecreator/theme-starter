<?php

/**
 * Admin Styles and Scripts.
 * 
 * @package ThemeStarter
 */

// Enqueue styles and scripts
function themeStarter_admin_enqueue()
{
  $theme_version = filemtime(get_stylesheet_directory() . '/style.css');
  $script_version = filemtime(get_stylesheet_directory() . '/assets/js/index.js');
  $style_version = filemtime(get_stylesheet_directory() . '/assets/css/styles.css');

  /* Register and Enqueue Scripts */

  wp_register_script('themeStarter-admin-scripts', get_parent_theme_file_uri('/assets/js/index-wp-admin.js'), [], $script_version, true);
  wp_enqueue_script('themeStarter-admin-scripts');

  /* Register and Enqueue Styles */

  wp_register_style('themeStarter-admin-styles', get_parent_theme_file_uri('/assets/css/styles-wp-admin.css'), [], $style_version, 'all');
  wp_enqueue_style('themeStarter-admin-styles');
}
