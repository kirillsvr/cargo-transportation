<section class="review">
  <h2><?php echo get_the_excerpt(2052); ?></h2>
  <div class="container review_wrap">
    <div class="slider_our_clients_btn prev_btn">
      <i class="icon-arrow"></i>
    </div>
    <div class="slider_our_clients_btn next_btn">
      <i class="icon-arrow"></i>
    </div>
    <div class="row slider_review">
      <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
         query_posts( array('post_type' => 'review','posts_per_page' => -1, 'paged'=>$paged, ) );
       while(have_posts()) : the_post(); ?>
      <div class="col-md-6 slide clearfix">
        <div class="review_item_image_wrap">
          <?php the_post_thumbnail(); ?>
        </div>
        <div class="review_item_content_wrap">
          <div class="review_item_content_wrap_title">
             <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          </div>
          <span><?php the_field('jar'); ?></span>
          <p>
          <?php the_excerpt(); ?>
          </p>
          <a href="<?php the_permalink(); ?>">Смотреть полностью<img src="<?php echo get_template_directory_uri(); ?>/img/more_blue.svg" alt="icon"/></a>
        </div>
      </div>
    <?php endwhile; ?>
      <?php   wp_reset_query(); ?>
    </div>
  </div>
</section>
