<?php

/**
 * Theme functions.
 * 
 * @package ThemeStarter
 */

// <----- Variables ----->

// <----- Includes ----->
// include(get_theme_file_path('/'));

// <----- Back End ----->
include(get_theme_file_path('/includes/carbon_fields.php'));
include(get_theme_file_path('/includes/editor_styles_and_scripts.php'));
include(get_theme_file_path('/includes/query_adjustments.php'));
include(get_theme_file_path('/includes/required_plugins.php'));
include(get_theme_file_path('/includes/remove_archive_prefixes.php'));

// <----- Front End ----->
include(get_theme_file_path('/includes/theme_starter_setup.php'));
include(get_theme_file_path('/includes/styles_and_scripts.php'));
include(get_theme_file_path('/includes/admin_styles_and_scripts.php'));
include(get_theme_file_path('/includes/registration_form_message.php'));
include(get_theme_file_path('/includes/custom_login_screen.php'));
include(get_theme_file_path('/includes/gravity_forms_functions.php'));
// include(get_theme_file_path('/includes/template_content_update.php'));

// <----- Hooks ----->


// Theme Starter Features
add_action('after_setup_theme', 'themeStarter_setup');

// Enqueue front-end styles and script
add_action('wp_enqueue_scripts', 'themeStarter_enqueue');

// Enqueue back-end/editor styles and script
add_action('after_setup_theme', 'themeStarter_editor_enqueue');

// Enqueue back-end/editor styles and script
add_action('admin_enqueue_scripts', 'themeStarter_admin_enqueue');

// Hook the function to run when you visit the WordPress admin area
// add_action('admin_init', 'update_page_content_from_file');

// Adjust Queries
add_action('pre_get_posts', 'themeStarter_adjust_queries');

// Change Registration Message
add_action('login_message', 'change_reg_message');

// Customize Login Screen Title
add_filter('login_headertitle', 'ourLoginTitle');

// Change Login Page header url
add_filter('login_headerurl', 'ourHeaderUrl');

// Enqueue out stylesheet for login screen
add_action('login_enqueue_scripts', 'ourLoginCSS');

// Remove Archive Title Prefix
add_filter('get_the_archive_title', 'wpdocs_remove_archive_title_prefixes', 10, 2);

// Gravity Forms Ajax Sumbit
add_filter('gform_form_args', 'setup_form_args');
