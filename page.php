<?php

/**
 * Standard Page template.
 * 
 * @package ThemeStarter
 */

?>


<?php get_header(); ?>

<?php get_template_part('template-parts/partials/page-header') ?>

<section>
  <div class="max-w-7xl mx-auto px-4 py-8 lg:py-16">
    <?php the_content() ?>
  </div>
</section>


<?php get_footer(); ?>