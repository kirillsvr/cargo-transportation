  <section class="first_block">
    <div class="container">
      <div class="row">
        <?php  $locations = get_nav_menu_locations();
        $menu = wp_get_nav_menu_object($locations['primary2']);
        $menu_items = wp_get_nav_menu_items($menu->term_id);
          foreach ( (array) $menu_items as $key => $menu_item ) {   ?>
        <a href="<?php  _e($menu_item->url) ?>" class="first_block_item">
          <div class="image_wrap">
            <img src="<?php echo get_field("icon",$menu_item->object_id); ?>" alt="image"/>
          </div>
          <p class="first_block_item_title"><?php  _e($menu_item->title) ?></p>
          <span>Подробнее <img src="<?php echo get_template_directory_uri(); ?>/img/more_grey.svg" alt="icon"/></span>
        </a>
          <?php } ?>
      </div>
    </div>
  </section>
