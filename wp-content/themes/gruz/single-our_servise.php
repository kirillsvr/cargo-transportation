<?php
/**

 */
get_header(); ?>
<main class="index_page crushed_stone_page">
  <div class="container">
    <div class="breadcrumbs">
      <ul>
        <li><a href="<?php echo home_url(); ?>">Главная</a></li>
        <li><a href="<?php the_permalink(1900); ?>"><?php echo get_the_title(1900); ?></a></li>
        <li><?php the_title(); ?></li>
      </ul>
    </div>
  </div>
  <section class="cranes_page">
    <div class="container cranes_page_wrap title_custom">
      <h1><?php the_title() ?></h1>
      <div class="row cranes_content">
        <div class="col-md-3">
          <aside class="left_block">
            <ul>
              <?php   $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                 query_posts( array('post_type' => 'our_servise','posts_per_page' => -1, 'paged'=>$paged, ) );
               while(have_posts()) : the_post(); ?>
              <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
            <?php endwhile; ?>
              <?php   wp_reset_query(); ?>
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
                <?php echo get_field("title_content",$post->ID); ?>
              </div>
              <p><?php the_excerpt(); ?></p>
              <p><?php echo get_field("description_content",$post->ID); ?></p>
            <?php if (get_field("products",$post->ID)) {?>
              <?php $count = 0;while(have_posts()) : the_post(); ?>
            <div class="crushed_stone_page_content_block">
              <div class="crushed_stone_page_content_block_title">Цены на <span><?php the_title(); ?></span>:</div>
              <div class="table_overflow">
                <table>
                  <thead>
                     <tr>
                       <th></th>
                       <th>Наименование</th>
                       <th>Технические характеристики</th>
                       <th>Город</th>
                       <th>Межгород</th>
                       <th></th>
                     </tr>
                  </thead>
                  <tbody>
                    <?php $products = get_field("products",$post->ID); ?>
                    <?php foreach ($products as $product){ ?>
                    <tr>
                      <td>
                        <img src="<?php echo $product["image"]; ?>" alt="image"/>
                      </td>
                      <td><?php echo $product["fraction"]; ?></td>
                      <td><?php echo $product["tech"]; ?></td>
                      <td><?php echo $product["price_city"]; ?></td>
                      <td><?php echo $product["price_mej"]; ?></td>
                      <td><a href="#calback" class="yelow_btn popup_btn replace_title">Заказать в 1 клик</a></td>
                    </tr>
                  <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          <?php endwhile; ?>
        <?php } ?>
        <?php if (get_field("perevoz",$post->ID)) {?>
              <?php $count = 0;while(have_posts()) : the_post(); ?>
            <div class="crushed_stone_page_content_block">
              <div class="crushed_stone_page_content_block_title">Цены на <span><?php the_title(); ?></span>:</div>
              <div class="table_overflow">
                <table>
                  <thead>
                     <tr>
                       <th></th>
                       <th>Наименование</th>
                       <th>Технические характеристики</th>
                       <th>Город</th>
                       <th>Межгород</th>
                       <th></th>
                     </tr>
                  </thead>
                  <tbody>
                    <?php $perevozs = get_field("perevoz",$post->ID); ?>
                    <?php foreach ($perevozs as $perevoz){ ?>
                    <tr>
                      <td>
                        <img src="<?php echo $perevoz["photo"]; ?>" alt="image"/>
                      </td>
                      <td><?php echo $perevoz["marsh"]; ?></td>
                      <td><?php echo $perevoz["ras"]; ?></td>
                      <td><?php echo $perevoz["10_tonn"]; ?></td>
                      <td><?php echo $perevoz["20_tonn"]; ?></td>
                      <td><a href="#calback" class="yelow_btn popup_btn replace_title">Заказать в 1 клик</a></td>
                    </tr>
                  <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          <?php endwhile; ?>
          <?php } ?>
            <p><?php echo get_field("text_big",$post->ID); ?></p>
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
