<?php

/**
 * Update wordpress content on admin init. 
 * 
 * @package ThemeStarter
 */


function update_page_content_from_file()
{
  // Get all pages
  $pages = get_pages();

  foreach ($pages as $page) {
    $slug = $page->post_name;
    $file_path = get_template_directory() . '/templates/internal/' . $slug . '.php';

    // Check if the file exists
    if (file_exists($file_path)) {
      // Start output buffering to capture PHP output
      ob_start();

      // Include the file to execute its PHP code
      include($file_path);

      // Get the output and clean the output buffer
      $file_content = ob_get_clean();

      // Update the page content
      wp_update_post(array(
        'ID'           => $page->ID,
        'post_content' => $file_content,
      ));
    }
  }
}
