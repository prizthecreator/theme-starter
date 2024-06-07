<?php

/**
 * Search form template.
 * 
 * @package ThemeStarter
 */

?>

<form method="get" action="<?= esc_url(site_url('/')) ?>" class="flex text-black">
  <input name="s" id="s" type="search" placeholder="Search...">
  <button class="px-4 bg-gray-500"><i class="text-white bi-search"></i></button>
</form>