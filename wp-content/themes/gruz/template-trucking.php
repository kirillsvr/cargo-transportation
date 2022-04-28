<?php
/**
 * Template Name: trucking
 */
get_header(); ?>
<main class="index_page">
  <section class="banner_block" style="background-image: url(<?php echo  get_field("background-first_block",$post->ID); ?>);">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1><?php echo  get_field("title_first_block",$post->ID); ?></h1>
          <p>Скидка 10% <span>на перевозку грузов до 15.02</span></p>
          <a href="#calback" class="yelow_btn popup_btn">Заказать в 1 клик</a>
        </div>
      </div>
    </div>
  </section>
  <section class="our_servise">
    <h2><?php echo get_field("title_block_our_servise",$post->ID); ?></h2>
    <p><?php echo get_field("description_block_our_servise",$post->ID); ?></p>
    <div class="container">
      <div class="row our_servise_wrap">
        <?php   $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
           query_posts( array('post_type' => 'our_servise','posts_per_page' => 4, 'paged'=>$paged, ) );
         while(have_posts()) : the_post(); ?>
        <div class="col-md-3 col-sm-6 our_servise_item">
          <a href="<?php the_permalink(); ?>" class="our_servise_item_imge_wrap">
            <img src="<?php echo get_template_directory_uri(); ?>/img/ellipse-1.svg" alt="ellipse"/>
            <i class="icon-<?php echo get_field("class_image",$post->ID); ?>"></i>
          </a>
          <p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
        </div>
      <?php endwhile; ?>
        <div class="col-md-3 col-sm-6 our_servise_item">
          <a href="<?php the_permalink(1904);?>" class="our_servise_item_imge_wrap">
            <img src="<?php echo get_template_directory_uri(); ?>/img/ellipse-1.svg" alt="ellipse"/>
            <i class="icon-shape-31"></i>
          </a>
          <p><a href="<?php the_permalink(1904); ?>">Перевозка негабаритных грузов</a></p>
        </div>
        <?php   wp_reset_query(); ?>
      </div>
      <div class="slider_trucking_wrap">
      <div class="slider_our_clients_btn prev_btn">
        <i class="icon-arrow"></i>
      </div>
      <div class="slider_our_clients_btn next_btn">
        <i class="icon-arrow"></i>
      </div>
      <div class="row slider_trucking">
        <?php   $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
           query_posts( array('post_type' => 'our_servise','posts_per_page' => 4, 'paged'=>$paged, ) );
         while(have_posts()) : the_post(); ?>
        <div class="col-md-12 slide_trucking">
          <div class="row">
            <div class="col-md-6">
              <div class="slide_trucking_image">
                <?php the_post_thumbnail(); ?>
              </div>
            </div>
            <div class="col-md-6 slide_trucking_content">
              <div class="slide_trucking_title">
                <?php the_title(); ?>
              </div>
              <p><?php the_excerpt(); ?></p>
              <div class="slide_trucking_wrap_btn">
                <a href="#calback" class="yelow_btn popup_btn">Заказать в 1 клик</a>
                <a href="<?php the_permalink(); ?>" class="more_info">Подробнее<img src="<?php echo get_template_directory_uri(); ?>/img/more_blue.svg" alt="image"/></a>
              </div>
            </div>
          </div>
        </div>
      <?php endwhile; ?>
        <div class="col-md-12 slide_trucking">
          <div class="row">
            <div class="col-md-6">
              <div class="slide_trucking_image">
                <img src="/wp-content/uploads/2021/05/oog.jpg" alt="">
              </div>
            </div>
            <div class="col-md-6 slide_trucking_content">
              <div class="slide_trucking_title">
                Перевозка негабаритных грузов
              </div>
              <p>Для того чтобы вы могли без труда транспортировать негабаритные грузы, у компании «Альянс» есть необходимая спецтехника. Грузы, которые имеют размеры, превышающие норму, перевезти не так-то легко, и для этого требуется особый транспорт. Если вы хотите, чтобы такой  вопрос не стал для вас проблемой, то доверьте его решение профессионалам...</p>
              <div class="slide_trucking_wrap_btn">
                <a href="#calback" class="yelow_btn popup_btn">Заказать в 1 клик</a>
                <a href="<?php the_permalink(1904); ?>" class="more_info">Подробнее<img src="<?php echo get_template_directory_uri(); ?>/img/more_blue.svg" alt="image"/></a>
              </div>
            </div>
          </div>
        </div>
        <?php   wp_reset_query(); ?>
      </div>
    </div>
    </div>
  </section>
  <section class="order_reasons">
    <h2><?php echo get_field("title_block_9",$post->ID); ?></h2>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
        <?php $block_9 = get_field("9_block",$post->ID);?>
        <?php  foreach ($block_9 as $key => $value) { ?>
          <div class="order_reasons_item">
            <i class="icon-<?php echo $value["clas_icon"]; ?>"></i>
            <p><?php echo $value["name"]; ?></p>
          </div>
          <?php if ($key==2 || $key==5){?>
            </div>
            <div class="col-md-4">
        <?php } }?>
          </div>
      </div>
    </div>
  </section>
  <!--section class="car_park">
    <h2><?php echo get_field("title_block_car_park",$post->ID); ?></h2>
    <div class="container car_park_wrap">
      <div class="slider_our_clients_btn prev_btn">
        <i class="icon-arrow"></i>
      </div>
      <div class="slider_our_clients_btn next_btn">
        <i class="icon-arrow"></i>
      </div>
      <div class="row car_park_slider">
        <?php $car_park = get_field("car_park",$post->ID); ?>
        <?php foreach ($car_park as $product){ ?>
        <div class="col-md-3 car_park_slide">
          <div class="car_park_slide_image_wrap">
            <img src="<?php echo $product["image"]; ?>" alt="car"/>
          </div>
          <p><?php echo $product["title"]; ?></p>
          <span><?php echo $product["parametrs"]; ?></span>
          <a href="#calback" class="yelow_btn popup_btn car_park_popup">Заказать</a>
        </div>
		      <?php } ?>
      </div>
    </div>
  </section-->
  <?php get_template_part( "our_clients" ); ?>
  <?php get_template_part( "review" ); ?>
  <?php get_template_part( "map" ); ?>
</main>
<?php get_footer(); ?>
