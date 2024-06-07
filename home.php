<?php

/**
 * Index template.
 * 
 * @package ThemeStarter
 */

?>


<?php get_header(); ?>

<!-- Index/Fall Back Template -->
<?php get_template_part('template-parts/partials/page-header') ?>

<!-- Single Post/Page Fallback Template -->
<section>
  <div>
    <p>Blog</p>
    <div><?php the_content() ?></div>
  </div>
</section>


<?php get_footer(); ?>