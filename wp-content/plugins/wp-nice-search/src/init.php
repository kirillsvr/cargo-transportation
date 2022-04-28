<?php
use core\Results\Results as Results;
use core\Results\ResultCase\DefaultResult as DefaultResult;
use core\Results\ResultCase\ImageResult as ImageResult;
use core\Results\ResultCase\MetaResult as MetaResult;
use core\Results\ResultCase\FullResult as FullResult;
use core\WpnsAdmin as WpnsAdmin;
use core\WpnsRegisterScript as WpnsRegisterScript;
use shortcode\WpnsFormShortcode as WpnsFormShortcode;

require WPNS_DIR . '/src/loader.php';

$GLOBALS['wp_rewrite'] = new \WP_Rewrite();

new WpnsAdmin;
new WpnsFormShortcode;
new WpnsRegisterScript;

register_activation_hook(WPNS_FILE, 'wpnsCheckActivate');
/**
 * Activate action
 */
function wpnsCheckActivate()
{
	$default_settings = array(
		//where
		'wpns_in_all' => null,
		'wpns_in_post' => 'on',
		'wpns_in_page' => null,
		'wpns_in_cpt' => null,
		//layout
		'wpns_items_featured' => null,
		'wpns_items_meta' => null,
		//orderby & order
		'wpns_orderby_title' => null,
		'wpns_title_pri' => '2',
		'wpns_title_order' => 'DESC',
		'wpns_orderby_date' => 'on',
		'wpns_date_pri' => '1',
		'wpns_date_order' => 'DESC',
		'wpns_orderby_author' => null,
		'wpns_author_pri' => '3',
		'wpns_author_order' => 'DESC',
		//options for form
		'wpns_placeholder' => 'Type your words here...',
	);

	if (version_compare(get_bloginfo('version'), WPNS_REQUIRE_VER, '<')) {
		deactivate_plugins(basename(WPNS_DIR . '/wp-nice-search.php'));
		wp_die(
			'Current version of wordpress is lower require version (' . WPNS_REQUIRE_VER . ')'
		);
	} else {
		// Save default settings and configution
		update_option('wpns_options' , $default_settings);
	}
}
/**
 * Add setting link in plugin page
 */
add_filter(
	'plugin_action_links_' . plugin_basename(WPNS_FILE),
	'settingLink'
);

function settingLink($links) {
	$settings_link = '<a href="';
	$settings_link .= esc_url(get_admin_url(null, 'options-general.php?page=wpns-nice-search-menu'));
	$settings_link .= '">Settings</a>';
	$links[] = $settings_link;
	return $links;
}