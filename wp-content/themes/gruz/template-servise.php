<?php
/**
 * Template Name: Servise
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
  <section class="sale_page">
    <div class="container sale_page_wrap">
      <h1><?php the_title(); ?></h1>
      <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
         query_posts( array('post_type' => 'servise','posts_per_page' => -1, 'paged'=>$paged, ) );
       while(have_posts()) : the_post(); ?>
      <div class="row sale_item">
        <div class="col-md-6 sale_item_imamge">
          <?php the_post_thumbnail(); ?>
        </div>
        <div class="col-md-6 sale_item_content">
          <div class="sale_item_content_title"><a href="<?php echo get_field("ssil"); ?>"><?php the_title(); ?></a></div>
          <p>
            <?php the_excerpt();?>
          </p>
          <div class="sale_item_content_wrap_btn">
            <a href="<?php echo get_field("ssil"); ?>" class="yelow_btn sale_btn_popup">Подробнее</a>
          </div>
        </div>
      </div>
    <?php endwhile; ?>
      <?php   wp_reset_query(); ?>
    </div>
  </section>
</main>
<?php get_footer(); ?>
