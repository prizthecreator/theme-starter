<?php

/**
 * Mobile Navigation template.
 *
 * @package ThemeStarter
 */

?>

<nav id="slide-out-menu" class="fixed z-50 top-0 bg-gray-200 bg-opacity-80 backdrop-blur-sm w-10/12 sm:w-3/5 lg:w-2/5 xl:w-4/12 2xl:w-3/12 h-full px-2">
  <div class="h-full space-y-8 overflow-x-hidden overflow-y-scroll no-scrollbar pt-12 pb-28">

    <div>
      <a href="<?= esc_url(get_home_url()); ?>"><img width="100px" class="mx-auto" src="<?= get_template_directory_uri() ?>/assets/images/extras/logo-ph-black.png" alt="<?= get_bloginfo('name') ?> Full Logo"></a>
    </div>

    <div class="mx-auto mb-4 w-11/12 h-1 border-t border-stone-400"></div>

    <?php get_template_part('template-parts/header/loop-primary-menu-accordion') ?>

    <div class="flex text-center items-center justify-center mx-auto">
      <?php get_template_part('template-parts/partials/button-register') ?>
    </div>

  </div>
</nav>