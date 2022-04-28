<?php
/**
 * Template Name: Index
 */
get_header(); ?>
<main class="index_page">
  <?php  get_template_part("first_block"); ?>
  <section class="about">
    <h3><?php echo get_field("title_block_about",617); ?></h3>
    <div class="container about_wrap">
      <div class="row about_wrap_padding">
        <div class="col-md-6 col-sm-7 col-xs-8 about_content">
          <?php echo get_field("descriptions_block_about_us",617); ?>
          <a href="<?php the_permalink(2050); ?>" class="yelow_btn">Подробнее</a>
        </div>
      </div>
    </div>
  </section>
  <section class="we_offer">
    <h2>Мы предлагаем</h2>
    <div class="container">
      <div class="row we_offer_wrap">
        <div class="col-md-4 col-sm-4 col-xs-6 we_offer_item">
          <div class="we_offer_item_title"><a href="<?php the_permalink(1900); ?>"><?php echo get_the_title(1900); ?></a></div>
          <ul>
          <?php $list = get_field("list",1900); ?>
          <?php foreach ($list as $key => $value) { ?>
            <li>
              <p><a href="<?php echo $value["sil"]; ?>"><?php echo $value["title"]; ?></a></p>
              <span><?php echo $value["description"]; ?></span>
            </li>
            <?php } ?>
          </ul>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-6 we_offer_item">
          <div class="we_offer_item_title"><a href="<?php the_permalink(1902); ?>"><?php echo get_the_title(1902); ?></a></div>
          <ul>
            <?php $list = get_field("list",1902); ?>
            <?php foreach ($list as $key => $value) { ?>
              <li>
                <p><a href="<?php echo $value["sil"]; ?>"><?php echo $value["title"]; ?></a></p>
                <span><?php echo $value["description"]; ?></span>
              </li>
              <?php } ?>
          </ul>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-6 we_offer_item">
          <div class="we_offer_item_title"><a href="<?php the_permalink(1904); ?>"><?php echo get_the_title(1904); ?></a></div>
          <ul>
            <?php $list = get_field("list",1904); ?>
            <?php foreach ($list as $key => $value) { ?>
              <li>
                <p><a href="<?php echo $value["sil"]; ?>"><?php echo $value["title"]; ?></a></p>
                <span><?php echo $value["description"]; ?></span>
              </li>
              <?php } ?>
          </ul>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-6 we_offer_item">
          <div class="we_offer_item_title"><a href="<?php the_permalink(1906); ?>"><?php echo get_the_title(1906); ?></a></div>
          <ul>
            <?php $list = get_field("list",1906); ?>
            <?php foreach ($list as $key => $value) { ?>
              <li>
                <p><a href="<?php echo $value["sil"]; ?>"><?php echo $value["title"]; ?></a></p>
                <span><?php echo $value["description"]; ?></span>
              </li>
              <?php } ?>
          </ul>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-6 we_offer_item">
          <div class="we_offer_item_title"><a href="<?php the_permalink(1908); ?>"><?php echo get_the_title(1908); ?></a></div>
          <ul>
            <?php $list = get_field("list",1908); ?>
            <?php foreach ($list as $key => $value) { ?>
              <li>
                <p><a href="<?php echo $value["sil"]; ?>"><?php echo $value["title"]; ?></a></p>
                <span><?php echo $value["description"]; ?></span>
              </li>
              <?php } ?>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <?php get_template_part( "our_clients" ); ?>
  <?php get_template_part( "review" ); ?>
  <section class="news_and_event">
    <h2><?php echo get_the_excerpt(2054); ?></h2>
    <div class="container">
      <div class="row">
        <?php
          $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
           query_posts( array('post_type' => 'news','posts_per_page' => 3, 'paged'=>$paged, ) );
         while(have_posts()) : the_post(); ?>
        <div class="col-md-4 col-sm-4 news_item">
          <div class="image_wrap">
            <?php the_post_thumbnail(); ?>
          </div>
          <p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
          <span><?php the_excerpt(); ?></span>
          <a href="<?php the_permalink(); ?>">Подробнее<img src="<?php echo get_template_directory_uri(); ?>/img/more_blue.svg" alt="icon"/></a>
        </div>
      <?php endwhile; ?>
        <?php   wp_reset_query(); ?>
      </div>
    </div>
  </section>
  <?php get_template_part( "map" ); ?>
</main>
<?php get_footer(); ?>
