<?php

/**
 * Theme setup and features.
 * 
 * @package ThemeStarter
 */

function themeStarter_setup()
{
  /*
   * Make theme available for translation.
   * Translations can be filed in the /languages/ directory.
   */

  load_theme_textdomain('themeStarter', get_template_directory() . '/languages');

  // Add default posts and comments RSS feed links to head.
  add_theme_support('automatic-feed-links');

  /*
   * Let WordPress manage the document title.
   */
  add_theme_support('title-tag');

  /*
   * Enable support for Post Thumbnails on posts and pages.
   */
  add_theme_support('post-thumbnails');
  //Support custom logo
  add_theme_support('custom-logo');

  // Add menus.
  register_nav_menus(
    array(
      'primary' => __('Primary Menu', 'themeStarter'),
      'secondary' => __('Secondary Menu', 'themeStarter'),
      'footer-company-menu' => __('Footer Company Menu', 'theme-starter'),
      'footer-contact-menu' => __('Footer Contact Menu', 'theme-starter'),
      'footer-resources-menu' => __('Footer Resources Menu', 'theme-starter'),
      'footer-legal-menu' => __('Footer Legal Menu', 'theme-starter'),
    )
  );

  /*
   * Switch default core markup for search form, comment form, and comments
   * to output valid HTML5.
   */

  add_theme_support(
    'html5',
    array(
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
      'style',
      'script'
    )
  );

  /*
   * Enable support for Post Formats.
   */

  add_theme_support(
    'post-formats',
    array(
      'aside',
      'image',
      'video',
      'quote',
      'link',
      'gallery',
      'status',
      'audio',
      'chat'
    )
  );

  function custom_breadcrumbs()
  {
    // Get the current post
    $post = get_post();

    // Initialize an empty breadcrumbs array
    $breadcrumbs = array();

    // Add Home breadcrumb
    $breadcrumbs[] = '<a href="' . esc_url(home_url('/')) . '">' . __('Home', 'text-domain') . '</a>';

    // Check if the post has a parent
    if ($post->post_parent) {
      // Get the parent post ancestors
      $parent_ids = array_reverse(get_post_ancestors($post->ID));

      // Loop through each ancestor to build breadcrumbs
      foreach ($parent_ids as $parent_id) {
        $breadcrumbs[] = '<a href="' . get_permalink($parent_id) . '">' . get_the_title($parent_id) . '</a>';
      }
    }

    // Add the current post breadcrumb
    $breadcrumbs[] = '<span class="current">' . get_the_title() . '</span>';

    // Output the breadcrumbs
    echo '<div class="breadcrumbs font-bold">' . implode(' <i class="bi bi-chevron-double-right"></i> ', $breadcrumbs) . '</div>';
  }
}
