<?php

/**
 * Menu Accordion template.
 *
 * @package ThemeStarter
 */

?>

<ul role="list" class="space-y-2">
    <?php
    $primary_menu_name = isset(get_nav_menu_locations()['primary']) ? get_nav_menu_locations()['primary'] : '';

    $main_menu_items = $primary_menu_name ? wp_get_nav_menu_items(wp_get_nav_menu_object($primary_menu_name)->name) : [];


    // Initialize an empty array to store the menu structure
    $menu_structure = array();

    // Iterate through each menu item to build the menu structure
    foreach ($main_menu_items as $menu_item) {
        // If the menu item has no parent, add it as a root level item
        if ($menu_item->menu_item_parent == 0) {
            $menu_structure[$menu_item->ID] = array(
                'title' => $menu_item->title,
                'url' => $menu_item->url,
                'children' => array()
            );
        } else {
            // If the menu item has a parent, add it as a child of its parent
            $parent_id = $menu_item->menu_item_parent;
            $menu_structure[$parent_id]['children'][] = array(
                'title' => $menu_item->title,
                'url' => $menu_item->url
            );
        }
    }

    // Loop through menu items with no parents (parents are the "parent" items)
    foreach ($menu_structure as $menu_item_id => $menu_item_data) {
        $menuItemTitle = $menu_item_data['title'];
        $menuItemSlug = $menu_item_data['url'];
    ?>
        <li class="accordion">
            <div class="flex px-2 hover:bg-stone-200 rounded-md justify-between relative">
                <a href="<?php echo $menuItemSlug; ?>" class="gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold flex items-center align-middle">
                    <p><?php echo $menuItemTitle ?></p>
                </a>
                <?php if (!empty($menu_item_data['children'])) { ?>
                    <button aria-label="Accordion Dropdown Toggle" class="accordion-toggle absolute inset-0">
                        <i class="fas fa-chevron-down items-center ml-auto rounded-md px-2.5 py-2" aria-hidden="true"></i>
                        <i class="fas fa-times items-center ml-auto rounded-md px-3 py-2" aria-hidden="true"></i>
                    </button>
                <?php } ?>
            </div>
            <?php
            // Check if there are children for this menu item
            if (!empty($menu_item_data['children'])) {
            ?>
                <ul class="accordion-content space-y-2">
                    <?php
                    // Loop through children
                    foreach ($menu_item_data['children'] as $child) {
                        $childTitle = $child['title'];
                        $childUrl = $child['url'];
                    ?>
                        <li class="hover:bg-yellow-100 rounded-md">
                            <a class="inset-0 flex px-4 py-2" href="<?php echo $childUrl ?>"><?php echo $childTitle ?></a>
                        </li>
                    <?php
                    }
                    ?>
                </ul>
            <?php
            }
            ?>
        </li>
    <?php
    }
    ?>
</ul>