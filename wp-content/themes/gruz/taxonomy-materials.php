<?php
/**

 */
get_header(); ?>
<main class="index_page crushed_stone_page">
  <div class="container">
    <div class="breadcrumbs">
      <ul>
        <li><a href="<?php echo home_url(); ?>">Главная</a></li>
        <li><a href="<?php the_permalink(1908); ?>">Сыпучие материалы</a></li>
        <li><?php single_term_title() ?></li>
        <?php $cat_vc = get_queried_object()->term_id;  global $wp;
$current_url = add_query_arg($wp->query_string, '', home_url($wp->request)); ?>
      </ul>
    </div>
  </div>
  <section class="cranes_page">
    <div class="container cranes_page_wrap title_custom">
      <h1><?php single_term_title() ?></h1>
      <div class="row cranes_content">
        <div class="col-md-3">
          <aside class="left_block">
            <ul>
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
              <li><a href="<?php echo get_category_link($cat_id ); ?>" class="<?php if ($cat_vc==$cat_id){echo 'active';}?>"><?php echo $value->name; ?></a></li>
                <?php } ?>
            </ul>
            <div class="banner_mini">
            	<span><?php echo get_field( "top_text", 2082 );?></span>
            	<strong><?php echo get_field( "time", 2082 );?></strong>
            	<p><?php echo get_field( "text_sale", 2082 );?></p>
            	<a href="<?php echo get_field( "ssil", 2082 );?>">Подробнее<img src="<?php echo get_template_directory_uri(); ?>/img/white_more.png" alt="icon"/></a>
            </div>
          </aside>
        </div>
        <div class="col-md-9">
          <div class="crushed_stone_page_content">
            <div class="crushed_stone_page_content_title">
              <?php echo get_field("title_content","materials_".$cat_vc); ?>
            </div>
            <p><?php echo get_field("description_content","materials_".$cat_vc); ?></p>
            <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
               query_posts( array('post_type' => 'fractions','posts_per_page' => -1,'tax_query' => array( array('taxonomy' => 'materials', 'field' => 'id',  'terms' => $cat_vc)), 'paged'=>$paged, ) );
             $count = 0;while(have_posts()) : the_post(); ?>
            <div class="crushed_stone_page_content_block">
              <div class="crushed_stone_page_content_block_title">Цены на <span><?php the_title(); ?></span>:</div>
              <?php $products = get_field("products",$post->ID); ?>
              <div class="table_overflow">
                <table>
                  <thead>
                     <tr>
                       <th rowspan="2"><?php the_excerpt(); ?></th>
                       <th rowspan="2">Фракция</th>
                       <th colspan="4">Доставка</th>
                       <th rowspan="2"></th>
                     </tr>
                     <tr>
                       <th>5 тонн</th>
                      <th>10 тонн</th>
                      <th>15 тонн</th>
                      <th>20 тонн</th>
                     </tr>
                  </thead>
                  <tbody>
                    
                    <?php foreach ($products as $product){ ?>
                    <tr>
                      <td>
                        <img src="<?php echo $product["image"]; ?>" alt="image"/>
                      </td>
                      <td><?php echo $product["fraction"]; ?></td>
                      <td><?php echo $product["price_5"]; ?></td>
                      <td><?php echo $product["price_10"]; ?></td>
                      <td><?php echo $product["price_15"]; ?></td>
                      <td><?php echo $product["price_20"]; ?></td>
                      <td><a href="#calback" class="yelow_btn popup_btn replace_title">Заказать в 1 клик</a></td>
                    </tr>
              		<?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          <?php endwhile; ?>
        <?php   wp_reset_query(); ?>
            <div class="crushed_stone_page_content_btn">
              <?php if(get_field("price_list")) { ?><a href="<?php echo get_field("price_list","materials_".$cat_vc); ?>" download class="yelow_btn">Скачать прайс-лист</a><?php }; ?>
              <a href="#calback" class="blue_btn popup_btn" class="">Оставить заявку</a>
            </div>
          </div>
          <div class="servise_crushed_stone_page">
            <div class="servise_crushed_stone_page_title">
              Преимущества работы с нами
            </div>
            <div class="row servise_crushed_stone_page_content_wrap">
              <?php $advantages_work = get_field("advantages_work",1908); ?>
              <?php foreach ($advantages_work as $key => $value) { ?>
              <div class="col-md-4 col-sm-6 servise_crushed_stone_page_item_wrap">
                <div class="servise_crushed_stone_page_item">
                  <div class="our_servise_item_imge_wrap">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/ellipse-1.svg" alt="ellipse">
                    <i class="icon-<?php echo $value["class_icons"]; ?>"></i>
                  </div>
                  <p><?php echo $value["title"]; ?></p>
                </div>
              </div>
                  <?php  } ?>
            </div>
          </div>
          <div class="filter_content_description">
            <p><?php echo term_description() ?></p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="our_review">
    <div class="container">
      <h3>Посмотрите что говорят о нас наши клиенты</h3>
      <div class="row our_review_wrap">
        <?php
          $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
           query_posts( array('post_type' => 'review','posts_per_page' => 2, 'paged'=>$paged, ) );
         while(have_posts()) : the_post(); ?>
        <div class="col-md-6 clearfix our_review_item">
          <div class="our_review_wrap_image">
            <!--div class="video">
              <img src="<?php echo get_template_directory_uri(); ?>/img/4-layers.png" alt="image"/>
            </div-->
            <div class="our_review_image">
              <?php the_post_thumbnail(); ?>
            </div>
          </div>
          <div class="our_review_wrap_content">
            <div class="our_review_wrap_content_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
            <div class="our_review_wrap_content_date"><?php the_time('j.m.Y'); ?></div>
            <span><?php the_field('jar'); ?></span>
            <p><?php the_excerpt(); ?></p>
            <a href="<?php the_permalink(); ?>">Смотреть полностью<img src="<?php echo get_template_directory_uri(); ?>/img/more_grey.svg" alt="icon"></a>
          </div>
        </div>
      <?php endwhile; ?>
        <?php   wp_reset_query(); ?>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>
