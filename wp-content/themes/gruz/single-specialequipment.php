<?php
/**
 */
get_header(); ?>
<main class="index_page">
<?php
$category = get_the_category(); 
echo $category[0]->cat_ID;
?>
  <?php the_terms( $id, $taxonomy, $before, $sep, $after ); ?>

  <div class="container">
      <div class="breadcrumbs">
        <ul>
          <li><a href="<?php echo home_url(); ?>">Главная</a></li>
          <li><a href="<?php the_permalink(1906); ?>">Аренда спецтехники</a></li>
          <li><?php the_title(); ?></li>
          <?php  $ad = get_the_terms($post->ID,'category_specialequipment'); ?>
        </ul>
      </div>
    </div>
    <section class="cranes_page">
      <div class="container cranes_page_wrap title_custom">
        <h1><?php the_title(); ?></h1>
        <div class="row top_servise">
          <div class="col-md-4 col-sm-4 top_servise_item clearfix">
            <i class="icon-zapravka"></i>
            <p>В стоимость аренды<br/><span>УЖЕ ВКЛЮЧЕНО ТОПЛИВО</span></p>
          </div>
          <div class="col-md-4 col-sm-4 top_servise_item clearfix">
            <i class="icon-car_clock"></i>
            <p>Смена = 8 ЧАСОВ</p>
          </div>
          <div class="col-md-4 col-sm-4 top_servise_item clearfix">
            <i class="icon-sale_grey"></i>
            <p>При заказе от 2-х единиц техники<br/> ВЫ ПОЛУЧАЕТЕ <span>СКИДКУ 10%</span></p>
          </div>
        </div>
        <div class="row cranes_content">
          <div class="col-md-3">
            <aside class="left_block">
              <div class="fast_search">
                <p>Быстрый поиск по спецтехнике</p>
                <form action="#" class="fast_search_form" id="fast_search_form" method="get">
                  <input type="text" name="search" placeholder="поиск" id="search"/>
                  <button class="search_btn icon-search"></button>
                </form>
              </div>
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
                <li><a href="<?php echo get_category_link($cat_id); ?>"><?php echo $value->name; ?></a></li>
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
          <div class="col-md-6 col-sm-8">
            <div class="cranes_content_description">
              <div class="slider_container clearfix">
                <div class="slider_one">
                  <?php $galerry = get_field("galerry",$post->ID); ?>
                  <?php foreach ($galerry as $key => $value) { ?>
                  <div class="slide">
                    <img src="<?php echo get_image_url_id($value["foto"]); ?>" alt="image"/>
                  </div>
                <?php } ?>
                </div>
                <div class="slider_two">
                  <?php $galerry = get_field("galerry",$post->ID); ?>
                  <?php foreach ($galerry as $key => $value) { ?>
                  <div class="slide">
                    <img src="<?php echo get_image_url_id($value["foto"],'tag-thumb'); ?>" alt="image"/>
                  </div>
                <?php } ?>
                </div>
              </div>
              <div class="cranes_content_description_title">Технические характеристики</div>
              <div class="cranes_content_description_characters">
                <!-- <table>
                  <tr>
                    <td><span>Максимальная грузоподъёмность, т</span></td>
                    <td><?php echo get_field("max_Lifting_capacity",$post->ID); ?></td>
                  </tr>
                  <tr>
                    <td><span>Максимальная высота подъема с основной стрелой, м</span></td>
                    <td><?php echo get_field("max_lenght",$post->ID); ?></td>
                  </tr>
                  <tr>
                    <td><span>Максимальная высота подъема с гуськом, м</span></td>
                    <td><?php echo get_field("max_lenght_2",$post->ID); ?></td>
                  </tr>
                  <tr>
                    <td><span>Размер опорного контура при выдвинутых балках выносvных опор, м</span></td>
                    <td><?php echo get_field("size",$post->ID); ?></td>
                  </tr>
                  <tr>
                    <td><span>Максимальная скорость движения крана, км/ч</span></td>
                    <td><?php echo get_field("msx_fast",$post->ID); ?></td>
                  </tr>
                  <tr>
                    <td><span>Габариты крана в трансортном положении, т</span></td>
                    <td><?php echo get_field("gab",$post->ID); ?></td>
                  </tr>
                  <tr>
                    <td><span>Масса крана в трансортном положении, т</span></td>
                    <td><?php echo get_field("mass",$post->ID); ?></td>
                  </tr>
                  <tr>
                    <td><span>Стоимость часа работы, р</span></td>
                    <td><?php echo get_field("price_1",$post->ID); ?></td>
                  </tr>
                </table> -->
                <p><?php echo get_field("inf",$post->ID); ?></p>
              </div>
              <div class="cranes_content_description_info">
                <div class="cranes_content_description_info_item">
                  <i class="icon-ok1"></i>
                  <p>Новый парк автотехники</p>
                </div>
                <div class="cranes_content_description_info_item">
                  <i class="icon-ok1"></i>
                  <p>Опытные водители</p>
                </div>
                <div class="cranes_content_description_info_item">
                  <i class="icon-ok1"></i>
                  <p>Работаем<br/>24ч</p>
                </div>
                <div class="cranes_content_description_info_item">
                  <i class="icon-ok1"></i>
                  <p>Честная цена.<br/>Без доплат и скрытых платежей</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-4">
            <div class="right_block">
              <!-- <div class="number_info">
                <div class="number_info_title">
                  Грузоподъемность
                </div>
                <div class="number_info_content">
                  <?php echo get_field("Lifting_capacity",$post->ID); ?> тонн
                </div>
                <div class="number_info_title">
                  Высота подьема
                </div>
                <div class="number_info_content">
                  <?php echo get_field("lenght_p",$post->ID); ?> тонн
                </div>
              </div> -->
              <div class="price_rent">
                <div class="price_rent_title">Стоимость аренды*</div>
                <ul class="price_rent_list">
                  <li>1 час - <?php echo get_field("price_1",$post->ID); ?> р.</li>
                  <li>смена - <span><?php echo get_field("price_24",$post->ID); ?> р.</span></li>
		  <?php if (get_field("gidro",$post->ID)){ ?>
		  <li>гидромолот - <span><?php echo get_field("gidro",$post->ID); ?> р.</span></li>
	          <?php } ?>
		  <?php if (get_field("klin",$post->ID)){ ?>
		  <li>гидроклин - <span><?php echo get_field("klin",$post->ID); ?> р.</span></li>
	          <?php } ?>
                </ul>
                <a href="#calback" class="yelow_btn popup_btn">Заказать </a>
                <p>*Стоимость указана с учетом НДС <br/>*Минимальный срок аренды техники <?php echo get_field("price_time",$post->ID); ?> час.</p>
              </div>
              <div class="right_block_answer">
                <p>Если у вас возникли вопросы, вы прямо сейчас можете их задать нашему специалисту по телефону:</p>
                <a href="tel:+73422711162" class="phone">+7 (342) 271-11-62 (63)</a>
                <a href="#calback_index" class="yelow_btn popup_btn">Перезвоните мне</a>
              </div>
            </div>
          </div>
        </div>
        <?php
              $term_id = get_the_terms($post->ID,'category_specialequipment');
                  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                 query_posts( array('post_type' => 'specialequipment','posts_per_page' => 3, 'orderby' => 'rand','order'    => 'ASC','tax_query' => array( array('taxonomy' => 'category_specialequipment', 'field' => 'id',  'terms' => $term_id[0]->term_id)), 'paged'=>$paged, ) );
          if(have_posts()) :?>
        <div class="Similar_mobile row">
          <div class="col-md-9 col-md-offset-3" style="margin-top: -100px;">
            <div class="Similar_mobile_title">
              Похожая техника в нашем парке:
            </div>
            <div class="row">
              <?php $count = 0;while(have_posts()) : the_post(); ?>
              <div class="col-md-4 col-sm-4 Similar_mobile_item">
                <div class="Similar_mobile_item_image">
                  <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                </div>
                <div class="Similar_mobile_item_title">
                  <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </div>
                <div class="Similar_mobile_item_list">
                  <!-- <ul>
                    <li>Грузоподъемность: <span><?php echo get_field("Lifting_capacity",$pos->ID); ?> тонн</span></li>
                    <li>Длина стрелы: <span><?php echo get_field("Length_arow",$pos->ID); ?> м</span></li>
                  </ul> -->
                  <ul>
                  <li><?php echo get_field("inf",$pos->ID); ?></li>
                  </ul>
                </div>
                <p><span><?php echo get_field("price_1",$pos->ID); ?></span> руб/час</p>
                <a href="#calback" class="yelow_btn popup_btn cranes_page_btn_2">Заказать</a>
              </div>
            <?php endwhile; ?>
          <?php   wp_reset_query(); ?>
            </div>
          </div>
        </div>
      <?php endif; ?>
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
