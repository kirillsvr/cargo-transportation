<?php
/**
 * Infinite Scroll Theme Assets
 *
 * Register support for Twenty Sixteen.
 */

/**
 * Add theme support for infinite scroll
 */
function twentysixteen_infinite_scroll_init() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'twentysixteen_infinite_scroll_render',
		'footer'    => 'content',
	) );
}
add_action( 'after_setup_theme', 'twentysixteen_infinite_scroll_init' );

/**
 * Custom render function for Infinite Scroll.
 */
function twentysixteen_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		if ( is_search() ) {
			get_template_part( 'template-parts/content', 'search' );
		} else {
			get_template_part( 'template-parts/content', get_post_format() );
		}
	}
}

/**
 * Enqueue CSS stylesheet with theme styles for Infinite Scroll.
 */
function twentysixteen_infinite_scroll_enqueue_styles() {
	if ( wp_script_is( 'the-neverending-homepage' ) ) {
		wp_enqueue_style( 'infinity-twentysixteen', plugins_url( 'twentysixteen.css', __FILE__ ), array( 'the-neverending-homepage' ), '20211102' );
		wp_style_add_data( 'infinity-twentysixteen', 'rtl', 'replace' );
	}
}
add_action( 'wp_enqueue_scripts', 'twentysixteen_infinite_scroll_enqueue_styles', 25 );
