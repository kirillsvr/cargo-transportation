<?php
   /**
   
    */
   get_header(); ?>
<main class="index_page">
   <div class="container">
      <div class="breadcrumbs">
         <ul>
            <li><a href="<?php echo home_url(); ?>">Главная</a></li>
            <li><a href="<?php the_permalink(1906); ?>">Спецтехника</a></li>
            <li><?php single_term_title() ?></li>
            <?php $cat_vc = get_queried_object()->term_id; global $wp;
               $current_url = add_query_arg($wp->query_string, '', home_url($wp->request)); $Path=$_SERVER['REQUEST_URI'];  ?>
         </ul>
      </div>
   </div>
   <section class="cranes_page" id="pjax-container">
      <div class="container cranes_page_wrap title_custom">
         <h1><?php single_term_title() ?></h1>
         <div class="row top_servise">
            <div class="col-md-4 col-sm-4 top_servise_item clearfix">
               <i class="icon-zapravka"></i>
               <p>В стоимость аренды<br/><span>УЖЕ ВКЛЮЧЕНО ТОПЛИВО</span></p>
            </div>
            <div class="col-md-4 col-sm-4 top_servise_item clearfix">
               <i class="icon-car_clock"></i>
               <p>Смена = 8 ЧАСОВ</p>
            </div>
            <div class="col-md-4 col-sm-4 top_servise_item clearfix">
               <i class="icon-sale_grey"></i>
               <p>При заказе от 2-х единиц техники<br/> ВЫ ПОЛУЧАЕТЕ <span>СКИДКУ 10%</span></p>
            </div>
         </div>
         <div class="row cranes_content">
            <div class="col-md-3">
               <aside class="left_block">
                  <div class="fast_search" id="fast_search">
                     <p>Быстрый поиск по спецтехнике</p>
                     <form action=""  class="fast_search_form" id="fast_search_form" method="post">
                        <input type="text" name="search" placeholder="поиск" id="search"/>
                        <button class="search_btn icon-search" ></button>
                     </form>
                  </div>
                  <ul>
                     <?php     $categories = get_categories(array(
                        'type'         => 'specialequipment',
                        'child_of'     => 0,
                        'parent'       => 0,
                        'orderby'      => 'id',
                        'order'        => 'ASC',
                        'hide_empty'   => 0,
                        'hierarchical' => 0,
                        'exclude'      => '',
                        'include'      => '',
                        'number'       => -1,
                        'taxonomy'     => 'category_specialequipment',
                        'pad_counts'   => false,                            ));
                         ?>
                     <?php  foreach ($categories as $key=>$value) {
                        $cat_id = $value->cat_ID ?>
                     <li><a href="<?php echo get_category_link($cat_id); ?>" class="<?php if ($cat_vc==$cat_id){echo 'active';}?>"><?php echo $value->name; ?></a></li>
                     <?php } ?>
                  </ul>
                  <div class="banner_mini">
            	<span><?php echo get_field( "top_text", 2082 );?></span>
            	<strong><?php echo get_field( "time", 2082 );?></strong>
            	<p><?php echo get_field( "text_sale", 2082 );?></p>
            	<a href="<?php echo get_field( "ssil", 2082 );?>">Подробнее<img src="<?php echo get_template_directory_uri(); ?>/img/white_more.png" alt="icon"/></a>
            </div>
               </aside>
            </div>
            <div class="col-md-9" id="qweq">
               <!-- <div class="cranes_content_wrap">
                  <div class="filter_controls">
                     <span>Грузоподъемность</span>
                     <form action="#" class="filter_controls_form" id="filter_controls_form">
                        <?php
                           $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                           query_posts( array('post_type' => 'specialequipment','posts_per_page' => -1,'tax_query' => array( array('taxonomy' => 'category_specialequipment', 'field' => 'id',  'terms' => $cat_vc)), 'paged'=>$paged, ) );
                           $count = 0;while(have_posts()) : the_post(); ?>
                        <a class="gruz <?php if ($_GET['gruz']==get_field("Lifting_capacity",$post->ID)){echo 'active';} ?>" href="<?php  echo $current_url; ?>&gruz=<?php echo get_field("Lifting_capacity",$post->ID); ?>"><?php echo get_field("Lifting_capacity",$post->ID); ?> тонн</a>
                        <?php endwhile; ?>
                        <?php   wp_reset_query(); ?>
                     </form>
                  </div>
               </div> -->
               <?php if (!empty($_GET['gruz'])){ ?>
               <div class="filter_content">
               <?php
                  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                  query_posts( array('post_type' => 'specialequipment','posts_per_page' => -1,'tax_query' => array( array('taxonomy' => 'category_specialequipment', 'field' => 'id',  'terms' => $cat_vc)), 'meta_query' => array(
                    'relation' => 'and',
                    array(
                        'key' => 'Lifting_capacity',
                        'value' => $_GET['gruz']
                    )
                  ), 'paged'=>$paged, ) );
                  $count = 0;while(have_posts()) : the_post(); ?>
                  <div class="filter_content_item row" id="pjax-container1">
                     <div class="col-md-4 col-sm-4 col-xs-6 filter_content_item_image">
                        <?php the_post_thumbnail(); ?>
                     </div>
                     <div class="col-md-4 col-sm-4 col-xs-6 filter_content_item_info">
                        <div class="filter_content_item_info-title">
                           <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </div>
                        <div class="filter_content_item_info_list">
                           <!--ul>
                              <li>Грузоподъемность - <?php echo get_field("Lifting_capacity",$post->ID); ?> тонн</li>
                              <li>Длина стрелы - <?php echo get_field("Length_arow",$post->ID); ?>  м</li>
                           </ul-->
                          <?php echo get_field("inf",$post->ID); ?>
                        </div>
                     </div>
                     <div class="col-md-4 col-sm-4 col-xs-12 filter_content_item_order">
                        <ul>
                           <li>1 час - <span><?php echo get_field("price_1",$post->ID); ?> р.</span></li>
                           <li>смена - <span><?php echo get_field("price_24",$post->ID); ?> р.</span></li>
			   <?php if (get_field("gidro",$post->ID)){ ?>
			   <li>гидромолот - <span><?php echo get_field("gidro",$post->ID); ?> р.</span></li>
			   <?php } ?>
			   <?php if (get_field("klin",$post->ID)){ ?>
		  	   <li>гидроклин - <span><?php echo get_field("klin",$post->ID); ?> р.</span></li>
	                   <?php } ?>
                        </ul>
                        <a href="<?php the_permalink(); ?>" class="grey_btn">Подробнее</a>
                        <a href="#calback" class="yelow_btn popup_btn cranes_page_btn">Заказать в 1 клик</a>
                     </div>
                  </div>
                  <?php endwhile; ?>
                  <?php   wp_reset_query(); ?>
               </div>
               <?php } else if(!empty($_POST['search'])){  ?>
               <div class="filter_content">
                  <?php
                     $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                     query_posts( array('post_type' => 'specialequipment','posts_per_page' => -1,'tax_query' => array( array('taxonomy' => 'category_specialequipment', 'field' => 'id',  'terms' => $cat_vc)),  'paged'=>$paged, ) );
                     $count = 0;while(have_posts()) : the_post(); ?>
                  <?php if (strpos(get_the_title(), $_POST['search'])!==false){ ?>
                  <div class="filter_content_item row">
                     <div class="col-md-4 col-sm-4 col-xs-6 filter_content_item_image">
                        <?php the_post_thumbnail(); ?>
                     </div>
                     <div class="col-md-4 col-sm-4 col-xs-6 filter_content_item_info">
                        <div class="filter_content_item_info-title">
                           <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </div>
                        <div class="filter_content_item_info_list">
                           <!--ul>
                              <li>Грузоподъемность - <?php echo get_field("Lifting_capacity",$post->ID); ?> тонн</li>
                              <li>Длина стрелы - <?php echo get_field("Length_arow",$post->ID); ?>  м</li>
                           </ul-->
                          <?php echo get_field("inf",$post->ID); ?>
                        </div>
                     </div>
                     <div class="col-md-4 col-sm-4 col-xs-12 filter_content_item_order">
                        <ul>
                           <li>1 час - <span><?php echo get_field("price_1",$post->ID); ?> р.</span></li>
                           <li>смена - <span><?php echo get_field("price_24",$post->ID); ?> р.</span></li>
			   <?php if (get_field("gidro",$post->ID)){ ?>
			   <li>гидромолот - <span><?php echo get_field("gidro",$post->ID); ?> р.</span></li>
			   <?php } ?>
			   <?php if (get_field("klin",$post->ID)){ ?>
		  	   <li>гидроклин - <span><?php echo get_field("klin",$post->ID); ?> р.</span></li>
	                   <?php } ?>
                        </ul>
                        <a href="<?php the_permalink(); ?>" class="grey_btn">Подробнее</a>
                        <a href="#calback" class="yelow_btn popup_btn cranes_page_btn">Заказать в 1 клик</a>
                     </div>
                  </div>
                  <?php } ?>
                  <?php endwhile; ?>
                  <?php   wp_reset_query(); ?>
               </div>
               <?php } else { ?>
               <div class="filter_content">
               <?php
                  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                  query_posts( array('post_type' => 'specialequipment','posts_per_page' => -1,'tax_query' => array( array('taxonomy' => 'category_specialequipment', 'field' => 'id',  'terms' => $cat_vc)),  'paged'=>$paged, ) );
                  $count = 0;while(have_posts()) : the_post(); ?>
                  <div class="filter_content_item row">
                     <div class="col-md-4 col-sm-4 col-xs-6 filter_content_item_image">
                        <?php the_post_thumbnail(); ?>
                     </div>
                     <div class="col-md-4 col-sm-4 col-xs-6 filter_content_item_info">
                        <div class="filter_content_item_info-title">
                           <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </div>
                        <div class="filter_content_item_info_list">
                           <!--ul>
                              <li>Грузоподъемность - <?php echo get_field("Lifting_capacity",$post->ID); ?> тонн</li>
                              <li>Длина стрелы - <?php echo get_field("Length_arow",$post->ID); ?>  м</li>
                           </ul-->
                           <?php echo get_field("inf",$post->ID); ?>
                        </div>
                     </div>
                     <div class="col-md-4 col-sm-4 col-xs-12 filter_content_item_order">
                        <ul>
                           <li>1 час - <span><?php echo get_field("price_1",$post->ID); ?> р.</span> <span class="mintime"><?php if(get_field("price_time",$post->ID)):?>(мин. - <?php echo get_field("price_time",$post->ID); ?> ч.)<?php endif; ?></span></li>
                           <li>смена - <span><?php echo get_field("price_24",$post->ID); ?> р.</span></li>
			   <?php if (get_field("gidro",$post->ID)){ ?>
			   <li>гидромолот - <span><?php echo get_field("gidro",$post->ID); ?> р.</span></li>
			   <?php } ?>
			   <?php if (get_field("klin",$post->ID)){ ?>
		  	   <li>гидроклин - <span><?php echo get_field("klin",$post->ID); ?> р.</span></li>
	                   <?php } ?>
                        </ul>
                        <a href="<?php the_permalink(); ?>" class="grey_btn">Подробнее</a>
                        <a href="#calback" class="yelow_btn popup_btn cranes_page_btn">Заказать в 1 клик</a>
                     </div>
                  </div>
                  <?php endwhile; ?>
                  <?php   wp_reset_query(); ?>
               </div>
               <?php } ?>
               <div class="filter_content_description">
                  <p><?php echo term_description() ?></p>
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