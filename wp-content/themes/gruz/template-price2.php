<?php
/**
 * Template Name: Price
 */
get_header(); ?>
<main class="index_page">
  <div class="container">
    <div class="breadcrumbs">
      <ul>
        <li><a href="<?php echo home_url(); ?>">Главная</a></li>
        <li><?php the_title(); ?></li>
      </ul>
    </div>
  </div>
  <section class="price_page title_custom">
    <div class="container price_page_wrap">
      <h1><span class="tab1">Цены на аренду грузоперевозки</span><span class="tab2">Цены на пассажирские перевозки</span><span class="tab3">Цены на перевозку негабаритных грузов</span><span class="tab4">Цены на аренду спецтехники</span><span class="tab5">Цены на нерудные материалы</span></h1>
      <ul class="list_tab">
        <li><a href="#tab1" data-title="0"  class="<?php if ($_SESSION['xxx']==1900){ echo "active";}?>">На грузоперевозки</a></li>
        <li><a href="#tab2" data-title="1" class="<?php if ($_SESSION['xxx']==1902){ echo "active";}?>">На пассажирские перевозки</a></li>
        <li><a href="#tab3" data-title="2" class="<?php if ($_SESSION['xxx']==1904){ echo "active";}?>">На перевозку негабаритных грузов</a></li>
        <li><a href="#tab4" data-title="3" class="<?php if ($_SESSION['xxx']==1906){ echo "active";}?>">На спецтехнику</a></li>
        <li><a href="#tab5" data-title="4" class="<?php if ($_SESSION['xxx']==1908){ echo "active";}?>"> На нерудные материалы</a></li>
      </ul>
      <div class="answer_page_tab price_page_list" id="tab1" style="<?php if ($_SESSION['xxx']==1900){ echo "display:block;";} else if ($_SESSION['xxx']==1902 || $_SESSION['xxx']==1904 || $_SESSION['xxx']==1906 || $_SESSION['xxx']==1908) {echo "display:none;"; }?>">
        <div class="price_page_list_item">
          <div class="price_page_list_item_sub" style="display:block;">
            <div class="table_wrap">
              <table>
                <thead>
                  <tr>
                    <th>Наименование</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <?php $car_park = get_field("car_park",1900); ?>
                  <?php foreach ($car_park as $product){ ?>
                    <tr>
                      <td><?php echo $product["title"]; ?></td>
                      <td><a href="#calback" class="popup_btn price_btn">Заказать</a></td>
                    </tr>
                      <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="answer_page_tab price_page_list" id="tab2" style="<?php if ($_SESSION['xxx']==1902){ echo "display:block;";} else{ echo 'display:none;';}?>">
        <div class="price_page_list_item">
          <div class="price_page_list_item_sub" style="display:block;">
            <div class="table_wrap">
              <table>
                <thead>
                  <tr>
                    <th>Наименование</th>
                    <th>Стоимость аренда</th>
                    <th>Количество мест</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                     query_posts( array('post_type' => 'car_park_people','posts_per_page' => 3, 'paged'=>$paged, ) );
                   while(have_posts()) : the_post(); ?>
                  <tr>
                    <td><?php the_title(); ?></td>
                    <td><?php echo get_field("price",$post->ID); ?></td>
                    <td><?php echo get_field("count_place",$post->ID); ?></td>
                    <td><a href="#calback" class="popup_btn price_btn">Заказать</a></td>
                  </tr>
                <?php endwhile; ?>
                  <?php   wp_reset_query(); ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="answer_page_tab price_page_list" id="tab3" style="<?php if ($_SESSION['xxx']==1904){ echo "display:block;";} else{ echo 'display:none;';}?>">
        <div class="price_page_list_item">
          <div class="price_page_list_item_sub" style="display:block;">
            <div class="table_wrap">
              <table>
                <thead>
                  <tr>
                    <th>Наименование</th>
                    <th>Город</th>
                    <th>Межгород</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                     query_posts( array('post_type' => 'oversized_cargo','posts_per_page' => -1, 'paged'=>$paged, ) );
                   while(have_posts()) : the_post(); ?>
                   <?php $characters = get_field("characters",$post->ID); ?>
                   <?php foreach ($characters as $key => $value) { ?>
                  <tr>
                    <?php if ($key==0) {?>
                    <td rowspan="2"><?php the_title(); ?></td>
                    <?php } ?>
                    <td><?php echo $value["city"]; ?></td>
                    <td><?php echo $value["no_city"]; ?></td>
                    <td><a href="#calback" class="popup_btn price_btn">Заказать</a></td>
                  </tr>
                  <?php }?>
                <?php endwhile; ?>
                  <?php   wp_reset_query(); ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="answer_page_tab price_page_list" id="tab4" style="<?php if ($_SESSION['xxx']==1906){ echo "display:block;";} else{ echo 'display:none;';}?>">
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
        <div class="price_page_list_item">
          <a href="javascript:void(0);"><?php echo $value->name; ?><i class="icon-arrow_down"></i></a>
          <div class="price_page_list_item_sub">
            <div class="table_wrap">
              <table>
                <thead>
                  <tr>
                    <th>Наименование</th>
                    <th>Цена, руб.: за час</th>
                    <th>за смену</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                      $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                     query_posts( array('post_type' => 'specialequipment','posts_per_page' => -1,'tax_query' => array( array('taxonomy' => 'category_specialequipment', 'field' => 'id',  'terms' => $cat_id)), 'paged'=>$paged, ) );
                   $count = 0;while(have_posts()) : the_post(); ?>
                  <tr>
                    <td><a href="<?php the_permalink(); ?>" class="no_style"><?php the_title(); ?></a></td>
                    <td><?php echo get_field("price_1",$post->ID); ?></td>
                    <td><?php echo get_field("price_24",$post->ID); ?></td>
                    <td><a href="#calback" class="popup_btn price_btn">Заказать</a></td>
                  </tr>
                <?php endwhile; ?>
              <?php   wp_reset_query(); ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
  <?php } ?>
      </div>
      <div class="answer_page_tab price_page_list" id="tab5" style="<?php if ($_SESSION['xxx']==1908){ echo "display:block;";} else{ echo 'display:none;';}?>">
        <div class="price_page_list_item">
          <div class="price_page_list_item_sub" style="display:block;">
            <div class="table_wrap">
              <table>
                <thead>
                  <tr>
                    <th>Наименование</th>
                    <th>Цена</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
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
                  <tr>
                    <td><a href="<?php echo get_category_link($cat_id); ?>" class="no_style"><?php echo $value->name; ?></a></td>
                    <td><?php echo get_field("price","materials_".$cat_id); ?></td>
                    <td><a href="#calback" class="popup_btn price_btn">Заказать</a></td>
                  </tr>
              <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>
