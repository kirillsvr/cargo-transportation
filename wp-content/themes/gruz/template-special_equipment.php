<?php
/**
 * Template Name: special_equipment
 */
get_header(); ?>
<main class="index_page">
  <section class="banner_block special_equipment_banner_block" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
    <div class="container">
      <div class="row">
        <div class="col-md-5 col-sm-6">
          <form action="#" method="post" class="form_sale">
            <div class="title_form">
              Закажите на сайте<br/>и получите <strong>скидку</strong>
            </div>
            <div class="group_item">
              <label for="texnik" class="title_group">Спецтехника</label>
              <div class="input_select_wrap" onclick="lia($(this))">
                <input type="text" name="select_input" readonly value="Автовышки"  id="select_input"/>
                <ul>
                  <?php     $categories = get_categories(array(
                        'type'         => 'specialequipment',
                        'child_of'     => 0,
                        'parent'       => 0,
                        'orderby'      => 'id',
                        'order'        => 'ASC',
                        'hide_empty'   => 0,
                        'hierarchical' => 0,
                        'exclude'      => '',
                        'include'      => '',
                        'number'       => -1,
                        'taxonomy'     => 'category_specialequipment',
                        'pad_counts'   => false,                            ));
                         ?>
                        <?php  foreach ($categories as $key=>$value) {
                          $cat_id = $value->cat_ID ?>
                  <li><a href="javascript:void(0);" onclick="list_a_click($(this))"><?php echo $value->name; ?></a></li>
                  <?php } ?>
                </ul>
              </div>
            </div>
            <a href="" class="add_elements"><i class="icon-plus"></i><span>добавить автотранспорт</span></a>
            <div class="group_radio">
              <p class="title_group">Время аренды</p>
              <input type="radio" name="clock" checked id="clock_1"/>
              <label for="clock_1"><span></span>30 мин</label>
              <input type="radio" name="clock" id="clock_2"/>
              <label for="clock_2"><span></span>2 час</label>
              <input type="radio" name="clock" id="clock_3"/>
              <label for="clock_3"><span></span>1 час</label>
              <input type="text" name="other_clock" placeholder="Другое" id="other_clock"/>
            </div>
            <div class="btn_wrap">
              <a href="#calback_tenancy" class="blue_btn popup_btn popup_btn_tenancy">Оставить заявку</a>
            </div>
          </form>
        </div>
        <div class="col-md-7 col-sm-6 banner_right_part">
          <div class="title_banner">

            <?php echo $post->post_content; ?>
          </div>
          <a href="#calback" class="blue_btn popup_btn">Заказать в 1 клик</a>
        </div>
      </div>
    </div>
  </section>
  <section class="car_park_special_equipment">
    <h2>Автопарк</h2>
    <p><?php the_excerpt(); ?></p>
    <div class="container">
      <div class="row">
        <?php     $categories = get_categories(array(
              'type'         => 'specialequipment',
              'child_of'     => 0,
              'parent'       => 0,
              'orderby'      => 'id',
              'order'        => 'ASC',
              'hide_empty'   => 0,
              'hierarchical' => 0,
              'exclude'      => '',
              'include'      => '',
              'number'       => -1,
              'taxonomy'     => 'category_specialequipment',
              'pad_counts'   => false,                            ));
               ?>
              <?php  foreach ($categories as $key=>$value) {
                $cat_id = $value->cat_ID ?>
        <div class="col-md-4 col-sm-4 col-xs-12 car_park_special_equipment_item_wrap">
          <div class="car_park_special_equipment_item">
            <div class="car_park_special_equipment_item_image">
              <a href="<?php echo get_category_link($cat_id); ?>"><img src="<?php echo get_field("icon","category_specialequipment_".$cat_id); ?>" alt="image"/></a>
            </div>
            <p><a href="<?php echo get_category_link($cat_id); ?>"><?php echo $value->name; ?></a></p>
            <span>от <?php echo get_field("price","category_specialequipment_".$cat_id); ?> руб/час</span>
            <div class="btn_wrap">
              <a href="#calback" class="blue_btn popup_btn special_popup">Заказать</a>
              <a href="<?php echo get_category_link($cat_id ); ?>" class="white_btn">Подробнее</a>
            </div>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
  </section>
  <section class="our_servise special_equipment_our_servise">
    <h2><?php echo get_field("title_block_why",$post->ID); ?></h2>
    <p><?php the_excerpt(); ?></p>
    <div class="container">
      <div class="row our_servise_wrap">
        <?php $why = get_field("why",$post->ID); ?>
        <?php foreach ($why as $key => $value) { ?>
        <div class="col-md-3 col-sm-6 our_servise_item">
          <div class="our_servise_item_imge_wrap">
            <img src="<?php echo get_template_directory_uri(); ?>/img/ellipse-1.svg" alt="ellipse"/>
            <i class="icon-<?php echo $value["class_icon"]; ?>"></i>
          </div>
          <p><?php echo $value["title"]; ?></p>
        </div>
        <?php  } ?>
      </div>
    </div>
  </section>
  <?php get_template_part( "our_clients" ); ?>
  <?php get_template_part( "review" ); ?>
    <?php get_template_part( "map" ); ?>
</main>
<?php get_footer(); ?>
