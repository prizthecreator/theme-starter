<?php

/**
 * Index template.
 * 
 * @package ThemeStarter
 */

?>

<!-- Get Header -->
<?php get_header(); ?>


<!-- Single Post/Page Fallback Template -->
<section>
    <div class="max-w-7xl mx-auto py-8 lg:py-16">
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post(); ?>
                <div>
                    <div class="mb-4 flex ">
                        <img class="mx-auto" src="<?= get_the_post_thumbnail_url(get_the_ID(), 'medium_large') ?>" alt="">
                    </div>
                    <h1 class="text-lg text-center font-bold mb-2"><?php the_title(); ?></h1>
                </div>
                <article>
                    <div class="prose max-w-none">
                        <?php the_content() ?>
                    </div>
                </article>
        <?php endwhile;
        else :
            _e('Sorry, no posts matched your criteria.', 'textdomain');
        endif;
        ?>
    </div>
</section>

<!-- Get Footer -->
<?php get_footer(); ?>