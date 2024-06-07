<?php

/**
 * 404 Error template.
 * 
 * @package ThemeStarter
 */
?>

<!-- Get Header -->
<?php get_header(); ?>

<section class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-3 gap-4 items-center justify-between px-4 bg-white pt-16 pb-24">

    <div class="bg-stone-200 p-4 order-2 lg:order-1">

        <p class="text-xl font-bold underline mb-4">Quick Links</p>
        <?php $args = [
            'menu' => "Main Menu",
            'menu_class' => "relative space-y-4 font-medium",
            'container_class' => "",
        ]; ?>

        <?php wp_nav_menu($args); ?>
    </div>

    <div class="flex flex-col flex-1 justify-center order-1 lg:order-2">

        <div class="flex flex-col items-center py-8 justify-center">
            <!-- Logo -->
            <div>
                <a href="<?= esc_url(get_home_url()); ?>"><img width="100px" class="mx-auto mb-4" src="<?= get_template_directory_uri() ?>/assets/images/extras/logo-ph-black.png" alt="<?= get_bloginfo('name') ?> Full Logo"></a>
            </div>

            <a class="flex flex-col items-center space-x-4" href="<?php echo get_site_url(); ?>">
                <p class="px-4 py-2 bg-red-500 text-white shadow-md rounded-md">Error 404</p>
                <div class="flex items-center justify-center">
                    <h1 class="text-2xl p-4">Page not found...</h1>
                </div>

            </a>
        </div>

        <div class="flex items-center justify-center my-4 ">
            <a class="flex flex-col items-center space-x-4" href="<?php echo get_site_url(); ?>">
                <div class="flex items-center justify-center">
                    <h1 class="font-medium text-2xl p-4">Go home</h1>
                    <i class="bi-house-fill inline font-medium text-2xl p-4"></i>
                </div>
            </a>
        </div>
    </div>

    <div class="order-3">

        <?php get_template_part('template-parts/partials/card-contact-us') ?>
    </div>

</section>

<!-- Get Footer -->
<?php get_footer(); ?>