<?php
/**
 * Template Name: About
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
  <section class="about_page">
    <div class="container about_page_wrap">
      <h1><?php the_title(); ?></h1>
      <p><?php the_excerpt(); ?></p>
      <?php  get_template_part("first_block"); ?>
      <?php the_post(); the_content(); ?>
    </div>
  </section>
  <section class="our_principles">
    <h2><?php echo get_field("text_tite_our_principle",$post->ID); ?></h2>
    <div class="container">
      <div class="row">
        <?php $our_principle = get_field("our_principle(block)",$post->ID); ?>
        <?php foreach ($our_principle as $key => $value) { ?>
        <div class="col-md-4 col-sm-4 col-xs-6 our_principles_item">
          <div class="titile_wrap">
            <span><?php $key++; if (mb_strlen($key)<2){echo "0".$key;} else {echo $key;} ?>.</span>
            <p><?php echo $value["title"]; ?></p>
          </div>
          <div class="image_wrap">
            <img src="<?php echo $value["image"]; ?>" alt="image"/>
          </div>
        </div>
        <?php  }?>
      </div>
    </div>
  </section>
  <!--section class="history_company">
    <h2><?php echo get_field("text_tite_history",$post->ID); ?></h2>
    <div class="container">
      <div class="prev_slider_centr slider_centr_arrow icon-left_arrow">
      </div>
      <div class="next_slider_centr slider_centr_arrow icon-left_arrow">
      </div>
      <div class="row slider_centr">
        <?php $history_company = get_field("history_company",$post->ID); ?>
        <?php foreach ($history_company as $key => $value) { ?>
        <div class="slide col-md-4">
          <div class="year">
            <p><?php echo $value["year"]; ?></p>
          </div>
          <p><?php echo $value["description"]; ?></p>
        </div>
        <?php  }?>
      </div>
    </div>
  </section-->
</main>
<?php get_footer(); ?>
