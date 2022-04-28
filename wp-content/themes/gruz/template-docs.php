<?php
/**
 * Template Name: Documents
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
  <section class="docs_page title_custom">
	<div class="container sale_page_wrap">
      <h1><?php the_title(); ?></h1>
	<?php if(get_field('docs')): ?>

	<ul class="docsicon">

	<?php while(has_sub_field('docs')): ?>

      <li><a href="<?php the_sub_field('ssil'); ?>"><i><img src="<?php the_sub_field('image'); ?>" /></i><?php the_sub_field('text'); ?></a></li>

	<?php endwhile; ?>

	</ul>

	<?php endif; ?>
    </div>
  </section>
</main>
<?php get_footer(); ?>
