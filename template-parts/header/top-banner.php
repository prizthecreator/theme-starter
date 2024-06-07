<?php

/**
 * Header Top Banner template.
 *
 * @package ThemeStarter
 */

?>

<div class="bg-gray-800 hidden lg:block text-white py-2">

    <div class="max-w-7xl mx-auto flex items-center justify-between px-4">

        <button id="language-switcher">
            <div class="flex space-x-2">
                <span><i class="bi-globe"></i></span>
                <p>English <i class="bi-caret-down-fill"></i></p>
            </div>
        </button>

        <ul class="flex space-x-4">
            <li>
                <a class="flex space-x-2" href="mailto:<?= THEMESTARTER_EMAIL ?>">
                    <span><i class="bi-envelope-fill"></i></span>
                    <p><?= THEMESTARTER_EMAIL ?></i></p>
                </a>
            </li>
            <li>
                <a class="flex space-x-2" href="tel:<?= THEMESTARTER_PHONE ?>">
                    <span><i class="bi-telephone-fill"></i></span>
                    <p><?= THEMESTARTER_PHONE ?></i></p>
                </a>
            </li>
        </ul>


        <?php get_template_part('template-parts/partials/loop-social-contact') ?>


        <div class="rounded-full overflow-hidden"><?php get_search_form() ?></div>

    </div>

</div>