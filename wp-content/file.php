<?php if (!empty($_POST['search1'])){ ?>
<?php
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
 query_posts( array('post_type' => 'specialequipment','posts_per_page' => -1,'tax_query' => array( array('taxonomy' => 'category_specialequipment', 'field' => 'id',  'terms' => $cat_vc)), 'meta_query' => array(
		'relation' => 'and',
		array(
				'key' => 'Lifting_capacity',
				'value' => $_POST['search1']
		)
), 'paged'=>$paged, ) );
$count = 0;while(have_posts()) : the_post(); ?>
<div class="filter_content">
<div class="filter_content_item row">
	<div class="col-md-4 col-sm-4 col-xs-6 filter_content_item_image">
		<?php the_post_thumbnail(); ?>
	</div>
	<div class="col-md-4 col-sm-4 col-xs-6 filter_content_item_info">
		<div class="filter_content_item_info-title">
		<a href=""><?php the_title(); ?></a>
		</div>
		<div class="filter_content_item_info_list">
			<ul>
				<li>Грузоподъемность - <?php echo get_field("Lifting_capacity",$post->ID); ?> тонн</li>
				<li>Длина стрелы - <?php echo get_field("Length_arow",$post->ID); ?>  м</li>
			</ul>
		</div>
	</div>
	<div class="col-md-4 col-sm-4 col-xs-12 filter_content_item_order">
		<ul>
			<li>1 час - <span><?php echo get_field("price_1",$post->ID); ?> р.</span></li>
			<li>смена - <span><?php echo get_field("price_24",$post->ID); ?> р.</span></li>
		</ul>
		<a href="<?php the_permalink(); ?>" class="grey_btn">Подробнее</a>
		<a href="#calback" class="yelow_btn popup_btn cranes_page_btn">Заказать в 1 клик</a>
	</div>
</div>
<?php endwhile; ?>
<?php   wp_reset_query(); ?>

</div>
<?php } else { ?>
<?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
query_posts( array('post_type' => 'specialequipment','posts_per_page' => -1,'tax_query' => array( array('taxonomy' => 'category_specialequipment', 'field' => 'id',  'terms' => $cat_vc)),  'paged'=>$paged, ) );
$count = 0;while(have_posts()) : the_post(); ?>
<div class="filter_content">
<div class="filter_content_item row">
<div class="col-md-4 col-sm-4 col-xs-6 filter_content_item_image">
	<?php the_post_thumbnail(); ?>
</div>
<div class="col-md-4 col-sm-4 col-xs-6 filter_content_item_info">
	<div class="filter_content_item_info-title">
	<a href=""><?php the_title(); ?></a>
	</div>
	<div class="filter_content_item_info_list">
		<ul>
			<li>Грузоподъемность - <?php echo get_field("Lifting_capacity",$post->ID); ?> тонн</li>
			<li>Длина стрелы - <?php echo get_field("Length_arow",$post->ID); ?>  м</li>
		</ul>
	</div>
</div>
<div class="col-md-4 col-sm-4 col-xs-12 filter_content_item_order">
	<ul>
		<li>1 час - <span><?php echo get_field("price_1",$post->ID); ?> р.</span></li>
		<li>смена - <span><?php echo get_field("price_24",$post->ID); ?> р.</span></li>
	</ul>
	<a href="<?php the_permalink(); ?>" class="grey_btn">Подробнее</a>
	<a href="#calback" class="yelow_btn popup_btn cranes_page_btn">Заказать в 1 клик</a>
</div>
</div>
<?php endwhile; ?>
<?php   wp_reset_query(); ?>

</div>
<?php } ?>
