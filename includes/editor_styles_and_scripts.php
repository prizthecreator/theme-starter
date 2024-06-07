<?php

/**
 * Editor styles and scripts.
 * 
 * @package ThemeStarter
 */

function themeStarter_editor_enqueue()
{
  add_theme_support('editor-styles');

  add_editor_style([
    'assets/css/styles.css',
    'assets/css/bootstrap-icons.css',
    'assets/css/font-awesome.css'
  ]);
}
