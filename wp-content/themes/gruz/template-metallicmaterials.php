<?php
/**
 * Template Name: metallicmaterials
 */
get_header(); ?>
<main class="index_page metallicmaterials_page">
  <section class="banner_block" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Продажа сыпучих материалов в Перми</h1>
          <p>Скидка 10% <span>на перевозку грузов до 15.02</span></p>
          <a href="#calback" class="yelow_btn popup_btn">Заказать в 1 клик</a>
        </div>
      </div>
    </div>
  </section>
  <section class="list_building">
    <h2>Список строительных материалов,<br/>которые мы поставляем</h2>
    <?php the_post(); the_content(); ?>
    <div class="container">
      <div class="row">
        <?php     $categories = get_categories(array(
              'type'         => 'fractions',
              'child_of'     => 0,
              'parent'       => 0,
              'orderby'      => 'id',
              'order'        => 'ASC',
              'hide_empty'   => 0,
              'hierarchical' => 0,
              'exclude'      => '',
              'include'      => '',
              'number'       => 10,
              'taxonomy'     => 'materials',
              'pad_counts'   => false,                            ));
               ?>
              <?php  foreach ($categories as $key=>$value) {
                $cat_id = $value->cat_ID ?>
        <div class="col-md-4 col-sm-6 col-xs-6 list_building_item_wrap">
          <div class="list_building_item">
            <div class="list_building_item_wrap_image">
              <a href="<?php echo get_category_link($cat_id ); ?>"><img src="<?php echo get_field("image","materials_".$cat_id); ?>" alt="image"/></a>
            </div>
            <div class="list_building_item_content">
              <p><a href="<?php echo get_category_link($cat_id ); ?>"><span class="name_popup"> <?php echo $value->name; ?></span></a> <span class="price">от <?php echo get_field("price","materials_".$cat_id); ?> руб.</span></p>
              <div class="list_building_item_content_wrap_btn">
                <a href="#calback" class="yelow_btn popup_btn title_popup">Заказать в 1 клик</a>
                <a href="<?php echo get_category_link($cat_id ); ?>" class="more_info_grey">Подробнее<img src="<?php echo get_template_directory_uri(); ?>/img/more_grey.svg" alt="image"></a>
              </div>
            </div>
          </div>
        </div>
    <?php } ?>
      </div>
    </div>
  </section>
  <section class="our_servise">
    <h2>Преимущества работы с нами</h2>
    <div class="container">
      <div class="row our_servise_wrap">
        <?php $advantages_work = get_field("advantages_work",$post->ID); ?>
        <?php foreach ($advantages_work as $key => $value) { ?>
        <div class="col-md-4 col-sm-6 our_servise_item">
          <div class="our_servise_item_imge_wrap">
            <img src="<?php echo get_template_directory_uri(); ?>/img/ellipse-1.svg" alt="ellipse"/>
            <i class="icon-<?php echo $value["class_icons"]; ?>"></i>
          </div>
          <p><?php echo $value["title"]; ?></p>
        </div>
        <?php  } ?>
      </div>
    </div>
  </section>
  <div class="how_order">
    <h2>Как происходит заказ?</h2>
    <div class="container">
      <div class="row">
        <?php $How_to_order = get_field("How_to_order",$post->ID); ?>
        <?php foreach ($How_to_order as $key => $value) { ?>
        <div class="col-md-3 col-sm-6 how_order_item_wrap">
          <div class="how_order_item">
            <span><?php $key++; echo $key; ?></span>
            <div class="how_order_item_title"><?php echo $value["title"];?></div>
            <p><?php echo $value["description"];?></p>
          </div>
        </div>
          <?php  } ?>
      </div>
    </div>
  </div>
  <?php get_template_part( "our_clients" ); ?>
  <?php get_template_part( "review" ); ?>
    <?php get_template_part( "map" ); ?>
</main>
<?php get_footer(); ?>
