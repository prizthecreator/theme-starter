<?php

/**
 * Index template.
 * 
 * @package ThemeStarter
 */

?>

<!-- Get Header -->
<?php get_header(); ?>

<!-- Index/Fall Back Template -->
<!-- <?php get_template_part('template-parts/partials/page-header') ?> -->

<!-- Single Post/Page Fallback Template -->
<section>
  <div class="max-w-7xl grid md:grid-cols-2 lg:grid-cols-3 gap-4 py-8 lg:py-16">
    <?php
    if (have_posts()) :
      while (have_posts()) : the_post(); ?>
        <div>
          <div class="mb-4">
            <img src="<?= get_the_post_thumbnail_url(get_the_ID(), 'full') ?>" alt="">
          </div>
          <h1 class="text-lg font-bold mb-2"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
        </div>
    <?php endwhile;
    else :
      _e('Sorry, no posts matched your criteria.', 'textdomain');
    endif;
    ?>
  </div>
</section>

<!-- Get Footer -->
<?php get_footer(); ?>