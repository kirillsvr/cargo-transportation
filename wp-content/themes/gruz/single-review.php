
<?php
/**

 */
get_header(); ?>
<main class="index_page">
  <div class="container">
    <div class="breadcrumbs">
      <ul>
        <li><a href="<?php echo home_url(); ?>">Главная</a></li>
        <li><a href="<?php the_permalink(2052) ?>"><?php echo get_the_title(2052); ?></a></li>
        <li><?php the_title(); ?></li>
      </ul>
    </div>
  </div>
  <section class="price_page title_custom news_page">
    <div class="container price_page_wrap">
      <h1><?php the_title(); ?></h1>
      <span class="date"><?php the_time('j.m.Y'); ?></span>
      <div class="row">
        <div class="col-md-9 col-sm-9">
          <div class="news_content">
            <div class="post-thumbnails">
              <?php the_post_thumbnail(); ?>
            </div>
            <?php the_post(); the_content(); ?>
          </div>
        </div>
        <div class="col-md-3 col-sm-3">
          <aside class="other_news">
            <ul>
              <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                 query_posts( array('post_type' => 'review','posts_per_page' => 5, 'paged'=>$paged, ) );
               while(have_posts()) : the_post(); ?>
              <li>
                <a href="<?php the_permalink() ?>">
                  <span class="title_news"><?php the_title(); ?></span>
                  <span class="date_news"><?php the_time('j.m.Y'); ?></span>
                </a>
              </li>
            <?php endwhile; ?>
              <?php   wp_reset_query(); ?>
            </ul>
          </aside>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>
