<?php

/**
 * Page header template.
 *
 * @package ThemeStarter
 */

$pageHeaderBG = has_post_thumbnail() ? get_the_post_thumbnail_url(get_the_ID(), 'full') : get_template_directory_uri() . '/assets/images/bgs/diverse_grid_of_people.jpeg';

if (is_home()) {
    $pageTitle = get_the_title(get_option('page_for_posts', true));
    $pageHeaderBG = has_post_thumbnail() ? get_the_post_thumbnail_url(get_option('page_for_posts'), 'full') : get_template_directory_uri() . '/assets/images/bgs/diverse_grid_of_people.jpeg';
} else if (is_search()) { // Adding condition for the search page
    $pageTitle = 'Search Results';
} else if (is_archive()) {
    $pageTitle = get_the_archive_title();
} else {
    $pageTitle = get_the_title();
}

?>


<section class="page-header" style="background-image: url('<?= $pageHeaderBG  ?>'); background-position: top 10% center;">

    <div class="max-w-7xl mx-auto flex-col items-center justify-center py-8 sm:py-24 px-4 xl:px-0">
        <div>
            <h1 class="text-2xl lg:text-4xl font-bold mb-4 text-white"><?= $pageTitle ?></h1>
            <?php if (!is_search() && !is_post_type_archive('events')) { ?>

                <div class="bg-white bg-opacity-60 rounded-md px-4 py-2 text-black"><?php custom_breadcrumbs() ?></div>
            <?php } ?>
        </div>
    </div>

</section>