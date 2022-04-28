<?php
/**
 * Template Name: Question
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
  <section class="answer_page">
    <div class="container answer_page_wrap">
      <h1><?php the_title(); ?></h1>
      <ul class="list_tab">
        <?php     $categories = get_categories(array(
              'type'         => 'questions',
              'child_of'     => 0,
              'parent'       => 0,
              'orderby'      => 'id',
              'order'        => 'ASC',
              'hide_empty'   => 0,
              'hierarchical' => 0,
              'exclude'      => '',
              'include'      => '',
              'number'       => 10,
              'taxonomy'     => 'questions_parent',
              'pad_counts'   => false,                            ));
               ?>
              <?php  foreach ($categories as $key=>$value) {
                $cat_id = $value->cat_ID ?>
                  <li><a href="#tab<?php $key++; echo $key; ?>" class="<?php if ($key==1){echo 'active';} ?>"><?php echo $value->name; ?></a></li>
            <?php } ?>
      </ul>
      <?php     $categories = get_categories(array(
            'type'         => 'questions',
            'child_of'     => 0,
            'parent'       => 0,
            'orderby'      => 'id',
            'order'        => 'ASC',
            'hide_empty'   => 0,
            'hierarchical' => 0,
            'exclude'      => '',
            'include'      => '',
            'number'       => 10,
            'taxonomy'     => 'questions_parent',
            'pad_counts'   => false,                            ));
             ?>
            <?php  foreach ($categories as $key=>$value) {
              $cat_id = $value->cat_ID ?>
      <div class="answer_page_tab" id="tab<?php $key++; echo $key; ?>">
        <div class="answer_page_tab_title">
          <?php echo $value->name; ?>
        </div>
        <?php   $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
           query_posts( array('post_type' => 'questions', 'tax_query' => array( array('taxonomy' => 'questions_parent', 'field' => 'id',  'terms' => $cat_id)),'posts_per_page' => -1, 'paged'=>$paged, ) );
         while(have_posts()) : the_post(); ?>
        <div class="answer_page_tab_list">
          <i class="icon-plus"></i>
          <a href="javascript:void(0);"><?php the_title(); ?></a>
          <div class="answer_page_tab_list_sub">
            <?php the_content(); ?>
          </div>
        </div>
      <?php endwhile; ?>
      <?php   wp_reset_query(); ?>
      </div>
      <?php } ?>
    </div>
  </section>
</main>
<?php get_footer(); ?>
