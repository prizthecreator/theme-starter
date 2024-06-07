<?php

/**
 * Header Navigation template.
 *
 * @package ThemeStarter
 */

?>

<nav id="header-nav">

  <div class="flex items-center justify-between max-w-7xl mx-auto py-2 px-4">

    <div>
      <a href="<?= esc_url(get_home_url()); ?>"><img class="w-24" src="<?= get_template_directory_uri() ?>/assets/images/extras/logo-ph-black.png" alt="<?= get_bloginfo('name') ?> Logo"></a>
    </div>

    <?php $args = [
      'menu' => "Main Menu",
      'menu_class' => "hidden lg:flex flex items-center justify-between px-4 space-x-8 relative",
      'container_class' => "hidden lg:flex justify-between items-center relative",
    ]; ?>

    <?php wp_nav_menu($args); ?>

    <div class="hidden lg:block"><?php get_template_part('template-parts/partials/button-register') ?></div>

    <button aria-label="Mobile Menu Toggle" id="toggle-nav" class="toggle-menu">
      <i></i> <i></i> <i></i>
    </button>

  </div>

  <!-- Modal -->
  <div class="modal-wrapper" id="modal-register">
    <div class="modal-body card">
      <a href="#!" role="button" class="close" aria-label="<?php _e('Close this modal', 'themestarter') ?>">
        <svg viewBox="0 0 24 24">
          <path d="M24 20.188l-8.315-8.209 8.2-8.282-3.697-3.697-8.212 8.318-8.31-8.203-3.666 3.666 8.321 8.24-8.206 8.313 3.666 3.666 8.237-8.318 8.285 8.203z" />
        </svg>
      </a>

      <div class="modal-header">

        <div class="">
          <div class="sm:flex items-center justify-between">
            <h2 class="py-2 text-2xl text-bold"><?php _e('Registration Application', 'themestarter') ?></h2>
          </div>
        </div>

      </div>

      <div class="content-wrapper">

        <div><?php echo do_shortcode('[gravityform id="4" title="false"]') ?></div>

      </div>

    </div>
    <a href="#!" class="outside-trigger"></a>
  </div>

</nav>