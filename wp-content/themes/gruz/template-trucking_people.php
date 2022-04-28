<?php
/**
 * Template Name: trucking_people
 */
get_header(); ?>
<main class="index_page people_transportation">
  <section class="banner_block" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1><?php the_excerpt(); ?></h1>
          <p>Скидка 10% <span>на перевозку грузов до 15.02</span></p>
          <a href="#calback" class="yelow_btn popup_btn">Заказать в 1 клик</a>
        </div>
      </div>
    </div>
  </section>
  <section class="our_car_park">
    <h2>Наш автопарк</h2>
    <?php the_post(); the_content(); ?>
    <div class="container">
      <div class="row our_car_park_wrap">
        <?php
          $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
           query_posts( array('post_type' => 'car_park_people','posts_per_page' => 8, 'paged'=>$paged, ) );
         while(have_posts()) : the_post(); ?>
        <div class="col-md-4 col-sm-6 col-xs-12 our_car_park_item_wrap">
          <div class="our_car_park_item_image">
              <?php the_post_thumbnail(); ?>
            </div>
          <div class="our_car_park_item">
            <p><?php the_title(); ?></p>
            <ul>
              <li>Стоимость аренда: <span><?php echo get_field("price",$post->ID); ?></span></li>
              <li>Количество мест: <span><?php echo get_field("count_place",$post->ID); ?></span></li>
              <li>Минимальное время заказа: <span><?php echo get_field("min_time_order",$post->ID); ?></span></li>
            </ul>
            <div class="btn_wrap">
              <a href="#calback " class="yelow_btn popup_btn car_park_btn">Заказать</a>
              <!--a href="" class="white_btn">Подробнее</a-->
            </div>
          </div>
        </div>
      <?php endwhile; ?>
        <?php   wp_reset_query(); ?>
      </div>
    </div>
  </section>
    <section class="our_servise_people_transporting">
      <h2>Наши услуги</h2>
      <div class="container">
        <div class="row">
          <?php $our_servise = get_field("our_servise",$post->ID); ?>
          <?php foreach ($our_servise as $key => $value) { ?>
          <div class="col-md-<?php if ($key==3 || $key==4){ echo "6";} else{ echo "4";} ?> col-sm-6  our_servise_people_transporting_item">
            <div class="our_servise_people_transporting_item_image">
              <img src="<?php echo get_template_directory_uri(); ?>/img/ellipse-1.svg" alt="ellipse">
              <i class="icon-<?php echo $value["class_icon"]; ?>"></i>
            </div>
            <p><?php echo $value["title"]; ?></p>
            <span><?php echo $value["description"]; ?></span>
          </div>
        <?php  } ?>
        </div>
      </div>
    </section>
  <section class="order_reasons">
    <h2>Причины заказать пассажирские<br/>перевозки в «Альянс»</h2>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <?php $order_people_trucking = get_field("order_people_trucking",$post->ID); ?>
          <?php foreach ($order_people_trucking as $key => $value) { $key++; ?>
          <div class="order_reasons_item">
            <i class="icon-<?php echo $value["class_icon"]; ?>"></i>
            <p><?php echo $value["text"]; ?></p>
          </div>
          <?php if ($key%3==0){ ?>
              </div>
              <div class="col-md-4">
        <?php  } } ?>
        </div>
      </div>
    </div>
  </section>
  <?php get_template_part( "our_clients" ); ?>
  <?php get_template_part( "review" ); ?>
    <?php get_template_part( "map" ); ?>
</main>
<?php get_footer(); ?>
