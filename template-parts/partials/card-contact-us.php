<?php

/**
 * Contact Us Card template.
 *
 * @package ThemeStarter
 */

?>

<div class="shadow-md bg-stone-100 sticky top-12">
  <img alt="" src="<?= get_template_directory_uri() ?>/assets/images/bgs/young_business_people.jpeg" />

  <div class="p-4">
    <h2 class="text-2xl font-bold text-gray-900 md:text-3xl">
      <?= THEMESTARTER_CONTACT_CARD_HEADING ?>
    </h2>

    <p class="hidden text-gray-500 md:mt-4 md:block">
      <?= THEMESTARTER_CONTACT_CARD_SUBHEADING ?>
    </p>

    <div class="flex mt-8 items-center w-full text-center">
      <?php get_template_part('template-parts/partials/button-register') ?>
    </div>
  </div>
</div>