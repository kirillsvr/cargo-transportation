<?php
remove_action('wp_head', 'wp_shortlink_wp_head', 10);
remove_action('template_redirect', 'wp_shortlink_header', 11 );
remove_action('wp_head', 'rel_canonical');
show_admin_bar(false);
add_theme_support('post-thumbnails');
add_theme_support('menus');
remove_filter( 'the_excerpt', 'wpautop' );
remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
remove_action( 'wp_head', 'rest_output_link_wp_head' );
remove_action( 'template_redirect', 'rest_output_link_header', 11, 0 );
add_filter('rest_enabled', '__return_false');
remove_action( 'xmlrpc_rsd_apis',            'rest_output_rsd' );
remove_action( 'wp_head',                    'rest_output_link_wp_head', 10, 0 );
remove_action( 'template_redirect',          'rest_output_link_header', 11, 0 );
remove_action( 'auth_cookie_malformed',      'rest_cookie_collect_status' );
remove_action( 'auth_cookie_expired',        'rest_cookie_collect_status' );
remove_action( 'auth_cookie_bad_username',   'rest_cookie_collect_status' );
remove_action( 'auth_cookie_bad_hash',       'rest_cookie_collect_status' );
remove_action( 'auth_cookie_valid',          'rest_cookie_collect_status' );
remove_filter( 'rest_authentication_errors', 'rest_cookie_check_errors', 100 );
remove_action( 'init',          'rest_api_init' );
remove_action( 'rest_api_init', 'rest_api_default_filters', 10, 1 );
remove_action( 'parse_request', 'rest_api_loaded' );
remove_action( 'rest_api_init',          'wp_oembed_register_route'              );
remove_filter( 'rest_pre_serve_request', '_oembed_rest_pre_serve_request', 10, 4 );
remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );
remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
add_filter( 'tiny_mce_plugins', 'disable_wp_emojis_in_tinymce' );
add_action('init', 'myStartSession', 1);
add_action('wp_logout', 'myEndSession');
add_action('wp_login', 'myEndSession');

function myStartSession() {
    if(!session_id()) {
        session_start();
    }
}


	
	

function myEndSession() {
    session_destroy ();
}
function disable_wp_emojis_in_tinymce( $plugins ) {
    if ( is_array( $plugins ) ) {
        return array_diff( $plugins, array( 'wpemoji' ) );
    } else {
        return array();
    }
}
add_action('wp_ajax_myaction', 'action_handler');

if ( function_exists( 'add_image_size' ) ) {
	add_image_size( 'tag-thumb', 70,70,true );
}
function get_image_url_id($post_id, $size = 'large')
{
    $image_url = wp_get_attachment_image_src($post_id, $size);
    $image_url = $image_url[0];
    return $image_url;
}

function my_deregister_scripts(){
  wp_deregister_script( 'wp-embed' );
}
add_action( 'wp_footer', 'my_deregister_scripts' );

function page_excerpt() {
    add_post_type_support('page', array('excerpt'));
}
add_action('init', 'page_excerpt');

function theme_register_nav_menu() {
	register_nav_menu( 'primary', 'Primary Menu' );
  register_nav_menu( 'primary2', 'Primary Menu2' );
  register_nav_menu( 'primary3', 'Primary Menu3' );
  register_nav_menu( 'primary4', 'Primary Menu4' );
}
add_action( 'after_setup_theme', 'theme_register_nav_menu' );

add_action( 'init', 'tpl_article_custom' );
function tpl_article_custom() {
  register_post_type( 'article_custom', array(
    'public' => true,
    'labels' => array(
      'name' => 'Статьи',
      'all_items' => 'Все Статьи',
      'add_new' => 'Добавить Статью',
      'add_new_item' => 'Добавление статьи'
      ),
'supports' => array( 'title', 'thumbnail', 'editor','excerpt' ),
    'taxonomies' => array( 'post_tag', 'category ')
    )
  );
};
add_action( 'init', 'tpl_oversized_cargo' );
function tpl_oversized_cargo() {
  register_post_type( 'oversized_cargo', array(
    'public' => true,
    'labels' => array(
      'name' => 'Негабаритные грузы',
      'all_items' => 'Все грузы',
      'add_new' => 'Добавить груз',
      'add_new_item' => 'Добавление груза'
      ),
'supports' => array( 'title', 'thumbnail', 'editor','excerpt' ),
    'taxonomies' => array( 'post_tag', 'category ')
    )
  );
};
add_action( 'init', 'tpl_review' );
function tpl_review() {
  register_post_type( 'review', array(
    'public' => true,
    'labels' => array(
      'name' => 'Отзывы',
      'all_items' => 'Все Отзывы',
      'add_new' => 'Добавить Отзыв',
      'add_new_item' => 'Добавление Отзыва'
      ),
'supports' => array( 'title', 'thumbnail', 'editor','excerpt' ),
    'taxonomies' => array( 'post_tag', 'category ')
    )
  );
};
add_action( 'init', 'tpl_news' );
function tpl_news() {
  register_post_type( 'news', array(
    'public' => true,
    'labels' => array(
      'name' => 'Новости',
      'all_items' => 'Все Новости',
      'add_new' => 'Добавить Новость',
      'add_new_item' => 'Добавление Новости'
      ),
'supports' => array( 'title', 'thumbnail', 'editor','excerpt' ),
    'taxonomies' => array( 'post_tag', 'category ')
    )
  );
};
add_action( 'init', 'tpl_our_servise' );
function tpl_our_servise() {
  register_post_type( 'our_servise', array(
    'public' => true,
    'labels' => array(
      'name' => 'Наши услуги',
      'all_items' => 'Все услуги',
      'add_new' => 'Добавить услугу',
      'add_new_item' => 'Добавление услуги'
      ),
'supports' => array( 'title', 'thumbnail', 'editor','excerpt' ),
    'taxonomies' => array( 'post_tag', 'category ')
    )
  );
};
add_action( 'init', 'tpl_servise' );
function tpl_servise() {
  register_post_type( 'servise', array(
    'public' => true,
    'labels' => array(
      'name' => 'Услуги',
      'all_items' => 'Все услуги',
      'add_new' => 'Добавить услугу',
      'add_new_item' => 'Добавление услуги'
      ),
'supports' => array( 'title', 'thumbnail', 'editor','excerpt' ),
    'taxonomies' => array( 'post_tag', 'category ')
    )
  );
};
add_action( 'init', 'tpl_sale' );
function tpl_sale() {
  register_post_type( 'sale', array(
    'public' => true,
    'labels' => array(
      'name' => 'Акции',
      'all_items' => 'Все Акции',
      'add_new' => 'Добавить Акциию',
      'add_new_item' => 'Добавление Акции'
      ),
      'supports' => array( 'title', 'thumbnail', 'editor','excerpt' ),
    'taxonomies' => array( 'post_tag', 'category ')
    )
  );
};
add_action( 'init', 'tpl_blog' );
function tpl_blog() {
  register_post_type( 'blog', array(
    'public' => true,
    'labels' => array(
      'name' => 'Блог',
      'all_items' => 'Все статьи',
      'add_new' => 'Добавить статью',
      'add_new_item' => 'Добавление статьи'
      ),
      'supports' => array( 'title', 'thumbnail', 'editor','excerpt' ),
    'taxonomies' => array( 'post_tag', 'category ')
    )
  );
};
add_action( 'init', 'tpl_questions' );
function tpl_questions() {
  register_post_type( 'questions', array(
    'public' => true,
    'labels' => array(
      'name' => 'Часто задаваемые вопросы',
      'all_items' => 'Все вопросы',
      'add_new' => 'Добавить вопрос',
      'add_new_item' => 'Добавление вопроса'
      ),
      'supports' => array( 'title', 'thumbnail', 'editor','excerpt' ),
      'taxonomies' => array( 'post_tag', 'category ')
    )
  );
};
add_action( 'init', 'tpl_car_park_people' );
function tpl_car_park_people() {
  register_post_type( 'car_park_people', array(
    'public' => true,
    'labels' => array(
      'name' => 'Автопарк(пасажирские перевозки)',
      'all_items' => 'Все машины',
      'add_new' => 'Добавить машину',
      'add_new_item' => 'Добавление машины'
      ),
      'supports' => array( 'title', 'thumbnail', 'editor','excerpt' ),
      'taxonomies' => array( 'post_tag', 'category ')
    )
  );
};
add_action( 'init', 'tpl_review_private' );
function tpl_review_private() {
  register_post_type( 'review_private', array(
    'public' => true,
    'labels' => array(
      'name' => 'Отзывы Частных клиентов',
      'all_items' => 'Все Отзывы',
      'add_new' => 'Добавить Отзыв',
      'add_new_item' => 'Добавление Отзыва'
      ),
      'supports' => array( 'title', 'thumbnail', 'editor','excerpt' ),
      'taxonomies' => array( 'post_tag', 'category ')
    )
  );
};
add_action( 'init', 'tpl_fractions' );
function tpl_fractions() {
  register_post_type( 'fractions', array(
    'public' => true,
    'labels' => array(
      'name' => 'Материалы',
      'all_items' => 'Все Материалы',
      'add_new' => 'Добавить Материал',
      'add_new_item' => 'Добавление Материала'
      ),
      'supports' => array( 'title', 'thumbnail', 'editor','excerpt' ),
      'taxonomies' => array( 'post_tag', 'category ')
    )
  );
};
add_action( 'init', 'tpl_specialequipment' );
function tpl_specialequipment() {
  register_post_type( 'specialequipment', array(
    'public' => true,
    'labels' => array(
      'name' => 'спецтехника',
      'all_items' => 'Вся спецтехника',
      'add_new' => 'Добавить спецтехнику',
      'add_new_item' => 'Добавление спецтехники'
      ),
      'supports' => array( 'title', 'thumbnail', 'editor','excerpt' ),
      'taxonomies' => array( 'post_tag', 'category ')
    )
  );
};
add_action( 'init', 'create_topics_nonhierarchical_taxonomy4', 0 );
function create_topics_nonhierarchical_taxonomy4() {
// Labels part for the GUI
    $labels = array(
        'name' => _x( 'Категории', 'taxonomy general name' ),
        'singular_name' => _x( 'Категории', 'taxonomy singular name' ),
        'search_items' =>  __( 'Поиск Категории' ),
        'popular_items' => __( 'Популярние Категории' ),
        'all_items' => __( 'Все Категории' ),
        'parent_item' => null,
        'parent_item_colon' => null,
        'edit_item' => __( 'Изменить Категории' ),
        'update_item' => __( 'Обновить Категории' ),
        'add_new_item' => __( 'Добавить новою Категории' ),
        'new_item_name' => __( 'Новое имя Категории' ),
        'separate_items_with_commas' => __( 'Separate topics with commas' ),
        'add_or_remove_items' => __( 'Add or remove topics' ),
        'choose_from_most_used' => __( 'Choose from the most used topics' ),
        'menu_name' => __( 'Категории' ),
    );
// Now register the non-hierarchical taxonomy like tag
    register_taxonomy('questions_parent','questions',array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'update_count_callback' => '_update_post_term_count',
        'query_var' => false,
        'rewrite' => array( 'slug' => 'questions_parent' ),
    ));
    register_taxonomy('category_specialequipment','specialequipment',array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'update_count_callback' => '_update_post_term_count',
        'query_var' => false,
        'rewrite' => array( 'slug' => 'category_specialequipment' ),
    ));
    register_taxonomy('materials','fractions',array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'update_count_callback' => '_update_post_term_count',
        'query_var' => false,
        'rewrite' => array( 'slug' => 'materials' ),
    ));
  }
?>
