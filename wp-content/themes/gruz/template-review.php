<?php
/**
 * Template Name: Review
 */
get_header(); ?>
<main class="index_page">
  <div class="container">
    <div class="breadcrumbs">
      <ul>
        <li><a href="<?php echo home_url(); ?>">Главная</a></li>
        <li><a href="<?php the_permalink(2050); ?>"><?php echo get_the_title(2050); ?></a></li>
        <li><?php the_title(); ?></li>
      </ul>
    </div>
  </div>
  <section class="our_review our_review_page">
    <div class="container title_custom">
      <h1><?php the_title(); ?></h1>
      <div class="row our_review_wrap">
        <?php
          $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
           query_posts( array('post_type' => 'review','posts_per_page' => -1, 'paged'=>$paged, ) );
         while(have_posts()) : the_post(); ?>
        <div class="col-md-6 clearfix our_review_item">
          <div class="our_review_wrap_image">
            <div class="video">
              <?php the_post_thumbnail(); ?>
            </div>
          </div>
          <div class="our_review_wrap_content">
            <div class="our_review_wrap_content_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
            <span><?php the_field('jar'); ?></span>
            <p><?php the_excerpt();?></p>
          <a href="<?php the_permalink(); ?>">Смотреть полностью<img src="<?php echo get_template_directory_uri(); ?>/img/more_grey.svg" alt="icon"/></a>
          </div>
        </div>
      <?php endwhile; ?>
        <?php   wp_reset_query(); ?>
        <!--div class="btn_wrap">
          <a href="" class="yelow_btn">Оставить отзыв</a>
        </div-->
      </div>
    </div>
  </section>
  <!--section class="private_customers">
    <div class="container">
      <h3>Частные клиенты</h3>
      <div class="row private_customers_wrap">
        <?php
          $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
           query_posts( array('post_type' => 'review_private','posts_per_page' => -1, 'paged'=>$paged, ) );
         while(have_posts()) : the_post(); ?>
        <div class="col-md-4 private_customers_item_wrap">
          <div class="row private_customers_item">
            <div class="private_customers_item_title">
              <?php the_title(); ?>
            </div>
            <div class="private_customers_item_content">
              <i class="icon-lapk"></i>
              <p><?php the_excerpt(); ?></p>
              <a href="<?php the_permalink(); ?>">Смотреть полностью<img src="<?php echo get_template_directory_uri(); ?>/img/more_down.png" alt="image"/></a>
            </div>
          </div>
        </div>
      <?php endwhile; ?>
        <?php   wp_reset_query(); ?>
        <div class="btn_wrap col-xs-12">
          <a href="" class="yelow_btn">Оставить отзыв</a>
        </div>
      </div>
    </div>
  </section-->
</main>
<?php get_footer(); ?>
