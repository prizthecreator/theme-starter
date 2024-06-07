<?php

/**
 * Site registration.
 * 
 * @package ThemeStarter
 */

// Change Registration Message
function change_reg_message($message)
{
  // change messages that contain 'Register'
  if (strpos($message, 'Register') !== FALSE) {
    $newMessage = "Register with " . get_bloginfo('name');
    return '<p class="message register">' . $newMessage . '</p>';
  } else {
    return $message;
  }
}