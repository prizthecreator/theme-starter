<?php

/**
 * About Button template.
 *
 * @package ThemeStarter
 */

?>

<div class="flex">
  <a href="<?= get_permalink('7') ?>" class="flex items-center justify-center bg-gray-500 px-6 py-4 text-sm text-white hover:bg-gray-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-500">
    <i class="bi bi-info-circle-fill text-2xl mr-4"></i> <?php _e('Learn More About Us', 'themestarter'); ?>
  </a>
</div>