<?php

/**
 * Query Adjustments.
 * 
 * @package ThemeStarter
 */

function themeStarter_adjust_queries($query)
{

  // Search Page Query Adjustment
  if ($query->is_search()) {
    $query->set('posts_per_page', '-1');
    $query->set('order', 'ASC');
  }
}
