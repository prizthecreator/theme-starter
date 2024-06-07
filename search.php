<?php

/**
 * Search results page template.
 * 
 * @package ThemeStarter
 */

?>

<!-- Get Header -->
<?php get_header(); ?>

<?php get_template_part('template-parts/partials/page-header') ?>

<section>


  <div class="flex flex-col">

    <div class="flex flex-col items-center justify-center">

      <?php $numberOfPostsFound = count($posts); ?>
      <div class="w-full bg-gray-800 p-4">
        <p class="text-2xl max-w-7xl mx-auto text-white font-bold">Results for "<?= esc_html(get_search_query(false)) ?>" (<?= $numberOfPostsFound ?>)</p>
      </div>
    </div>

    <div class="py-8 grid grid-cols-1 lg:grid-cols-3 gap-y-8 px-4 max-w-7xl mx-auto">
      <?php if (have_posts()) { ?>
        <ul class="space-y-4 col-span-2 px-4">
          <?php while (have_posts()) {
            the_post(); ?>
            <li class="w-full">
              <div>
                <a class="font-medium underline" href="<?= the_permalink() ?>">
                  <?= the_title() ?>
                </a>
              </div>
            </li>
          <?php } ?>
        </ul> <?php } else { ?>

        <div class="w-full col-span-2 space-y-4">
          <p class="text-2xl">
            No results for "<?= esc_html(get_search_query(false)) ?>".
          </p>
          <p class="text-xl">
            Try another search term
          </p>
          <div><?php get_search_form() ?></div>
        </div>
      <?php } ?>

      <div class="order-3">

        <?php get_template_part('template-parts/partials/card-contact-us') ?>
      </div>


    </div>

  </div>


</section>


<!-- Get Footer -->
<?php get_footer(); ?>