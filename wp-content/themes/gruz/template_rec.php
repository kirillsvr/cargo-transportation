
<?php
/**
 * Template Name: rec
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
  <section class="price_page title_custom news_page">
    <div class="container price_page_wrap">
      <h1><?php the_title(); ?></h1>
      <div class="row">
        <div class="col-md-12 col-sm-12">
          <div class="news_content">
            <div class="post-thumbnails">
              <?php the_post_thumbnail(); ?>
            </div>
            <?php the_post(); the_content(); ?>
          </div>
        </div>

      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>
