<?php
get_header(); ?>
	<section class="article_page_single">
		<div class="container">
			<div class="row">
				<div  class="col-md-12">
            <div id="loop" class="row bg_white" style="padding:50px 0;">
                       <?php    if (have_posts()) : ?>
					  <?php  while(have_posts()) : the_post(); ?>
							<div class="post">
							   <div class="rewiev_content">
							   <a href="<?php  the_permalink() ?>"><h3><?php the_title(); ?></h3></a>

								<p><?php the_content(); ?></p>
							</div>
							</div>
					  	<?php endwhile; ?>

					</div>
                    	<div id="pagination" class="more_reviw">

						   <?php next_posts_link(); ?>

						</div>
                            	<?php	else : ?>
			 <div class="not_information" style="text-align:center;" >
				   <div class="wrap_title clearfix">
				<h2 style="text-align:left;" >Поиск не дал результата попробуйте поискать что то другое!</h2>
				</div>
					<img src="<?php echo get_template_directory_uri(); ?>/img/netu.jpg" alt="not"/>
			</div>

		<?php
			endif;
		?>
                          <?php   wp_reset_query();      ?>

				</div>
			</div>
		</div>
	</section>

<?php get_footer(); ?>
