<?php
/**
 * Footer Navigation.
 *
 * @package ThemeStarter
 */

?>

<footer class="bg-gray-800" aria-labelledby="footer-heading">
    <h2 id="footer-heading" class="sr-only">Footer</h2>
    <div class="mx-auto max-w-7xl px-6 pb-8 pt-20 sm:pt-24 lg:px-8 lg:pt-32">

        <div class="xl:grid xl:grid-cols-3 xl:gap-8">

            <div class="grid grid-cols-2 gap-8 xl:col-span-3">
                <div class="md:grid md:grid-cols-2 md:gap-8">
                    <div>
                        <h3 class="text-xl font-semibold leading-6 text-white"><?= carbon_get_theme_option('themestarter_footer_location_1_title') ?: 'Company'; ?></h3>
                        <?php if (has_nav_menu('footer-company-menu')) : ?>
                            <?php
                            wp_nav_menu(array(
                                'theme_location' => 'footer-company-menu',
                                'container'      => 'ul',
                                'menu_class'     => 'mt-6 space-y-4 text-white',
                            ));
                            ?>
                        <?php endif; ?>
                    </div>
                    <div class="mt-10 md:mt-0">
                        <h3 class="text-xl font-semibold leading-6 text-white"><?= carbon_get_theme_option('themestarter_footer_location_2_title') ?: 'Contact'; ?></h3>
                        <?php if (has_nav_menu('footer-contact-menu')) : ?>
                            <?php
                            wp_nav_menu(array(
                                'theme_location' => 'footer-contact-menu',
                                'container'      => 'ul',
                                'menu_class'     => 'mt-6 space-y-4 text-white',
                            ));
                            ?>
                        <?php endif; ?>
                        <ul>
                            <li>
                                <a class="flex space-x-2 mt-6 text-white" href="<?= THEMESTARTER_EMAIL ?>">
                                    <span><i class="bi-envelope-fill"></i></span>
                                    <p>Email</i></p>
                                </a>
                            </li>
                            <li>
                                <a class="flex space-x-2 mt-6 text-white" href="<?= THEMESTARTER_PHONE ?>">
                                    <span><i class="bi-telephone-fill"></i></span>
                                    <p>Phone</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="md:grid md:grid-cols-2 md:gap-8">
                    <div>
                        <h3 class="text-xl font-semibold leading-6 text-white"><?= carbon_get_theme_option('themestarter_footer_location_3_title') ?: 'Resources'; ?></h3>
                        <?php if (has_nav_menu('footer-resources-menu')) : ?>
                            <?php
                            wp_nav_menu(array(
                                'theme_location' => 'footer-resources-menu',
                                'container'      => 'ul',
                                'menu_class'     => 'mt-6 space-y-4 text-white',
                            ));
                            ?>
                        <?php endif; ?>
                    </div>
                    <div class="mt-10 md:mt-0">
                        <h3 class="text-xl font-semibold leading-6 text-white"><?= carbon_get_theme_option('themestarter_footer_location_4_title') ?: 'Legal'; ?></h3>
                        <?php if (has_nav_menu('footer-legal-menu')) : ?>
                            <?php
                            wp_nav_menu(array(
                                'theme_location' => 'footer-legal-menu',
                                'container'      => 'ul',
                                'menu_class'     => 'mt-6 space-y-4 text-white',
                            ));
                            ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

        </div>
        <div class="mt-16 border-t border-white/10 pt-8 sm:mt-20 md:flex md:items-center md:justify-between lg:mt-24">
            <div class="flex space-x-6 md:order-2 text-white">
                <?php get_template_part('template-parts/partials/loop-social-contact') ?>
            </div>
            <p class="mt-8 text-white md:order-1 md:mt-0">&copy; <?= date("Y") . " " . get_bloginfo('name') . ". All Rights Reserved" ?></p>
        </div>
    </div>
</footer>
