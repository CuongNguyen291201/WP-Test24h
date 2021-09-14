<?php

/**
 * Astra functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

/**
 * Define Constants
 */
define('ASTRA_THEME_VERSION', '3.6.8');
define('ASTRA_THEME_SETTINGS', 'astra-settings');
define('ASTRA_THEME_DIR', trailingslashit(get_template_directory()));
define('ASTRA_THEME_URI', trailingslashit(esc_url(get_template_directory_uri())));


/**
 * Minimum Version requirement of the Astra Pro addon.
 * This constant will be used to display the notice asking user to update the Astra addon to the version defined below.
 */
define('ASTRA_EXT_MIN_VER', '3.5.8');

/**
 * Setup helper functions of Astra.
 */
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-theme-options.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-theme-strings.php';
require_once ASTRA_THEME_DIR . 'inc/core/common-functions.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-icons.php';

/**
 * Update theme
 */
require_once ASTRA_THEME_DIR . 'inc/theme-update/class-astra-theme-update.php';
require_once ASTRA_THEME_DIR . 'inc/theme-update/astra-update-functions.php';
require_once ASTRA_THEME_DIR . 'inc/theme-update/class-astra-theme-background-updater.php';
require_once ASTRA_THEME_DIR . 'inc/theme-update/class-astra-pb-compatibility.php';


/**
 * Fonts Files
 */
require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-font-families.php';
if (is_admin()) {
	require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-fonts-data.php';
}

require_once ASTRA_THEME_DIR . 'inc/lib/webfont/class-astra-webfont-loader.php';
require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-fonts.php';

require_once ASTRA_THEME_DIR . 'inc/dynamic-css/custom-menu-old-header.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/container-layouts.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/astra-icons.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/block-editor-compatibility.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-walker-page.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-enqueue-scripts.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-gutenberg-editor-css.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/inline-on-mobile.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-dynamic-css.php';

/**
 * Custom template tags for this theme.
 */
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-attr.php';
require_once ASTRA_THEME_DIR . 'inc/template-tags.php';

require_once ASTRA_THEME_DIR . 'inc/widgets.php';
require_once ASTRA_THEME_DIR . 'inc/core/theme-hooks.php';
require_once ASTRA_THEME_DIR . 'inc/admin-functions.php';
require_once ASTRA_THEME_DIR . 'inc/core/sidebar-manager.php';

/**
 * Markup Functions
 */
require_once ASTRA_THEME_DIR . 'inc/markup-extras.php';
require_once ASTRA_THEME_DIR . 'inc/extras.php';
require_once ASTRA_THEME_DIR . 'inc/blog/blog-config.php';
require_once ASTRA_THEME_DIR . 'inc/blog/blog.php';
require_once ASTRA_THEME_DIR . 'inc/blog/single-blog.php';

/**
 * Markup Files
 */
require_once ASTRA_THEME_DIR . 'inc/template-parts.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-loop.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-mobile-header.php';

/**
 * Functions and definitions.
 */
require_once ASTRA_THEME_DIR . 'inc/class-astra-after-setup-theme.php';

// Required files.
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-admin-helper.php';

require_once ASTRA_THEME_DIR . 'inc/schema/class-astra-schema.php';

if (is_admin()) {

	/**
	 * Admin Menu Settings
	 */
	require_once ASTRA_THEME_DIR . 'inc/core/class-astra-admin-settings.php';
	require_once ASTRA_THEME_DIR . 'inc/lib/astra-notices/class-astra-notices.php';

	/**
	 * Metabox additions.
	 */
	require_once ASTRA_THEME_DIR . 'inc/metabox/class-astra-meta-boxes.php';
}

require_once ASTRA_THEME_DIR . 'inc/metabox/class-astra-meta-box-operations.php';

/**
 * Customizer additions.
 */
require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-customizer.php';

/**
 * Astra Modules.
 */
require_once ASTRA_THEME_DIR . 'inc/modules/related-posts/class-astra-related-posts.php';

/**
 * Compatibility
 */
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-jetpack.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/woocommerce/class-astra-woocommerce.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/edd/class-astra-edd.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/lifterlms/class-astra-lifterlms.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/learndash/class-astra-learndash.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-beaver-builder.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-bb-ultimate-addon.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-contact-form-7.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-visual-composer.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-site-origin.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-gravity-forms.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-bne-flyout.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-ubermeu.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-divi-builder.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-amp.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-yoast-seo.php';
require_once ASTRA_THEME_DIR . 'inc/addons/transparent-header/class-astra-ext-transparent-header.php';
require_once ASTRA_THEME_DIR . 'inc/addons/breadcrumbs/class-astra-breadcrumbs.php';
require_once ASTRA_THEME_DIR . 'inc/addons/heading-colors/class-astra-heading-colors.php';
require_once ASTRA_THEME_DIR . 'inc/builder/class-astra-builder-loader.php';

// Elementor Compatibility requires PHP 5.4 for namespaces.
if (version_compare(PHP_VERSION, '5.4', '>=')) {
	require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-elementor.php';
	require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-elementor-pro.php';
	require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-web-stories.php';
}

// Beaver Themer compatibility requires PHP 5.3 for anonymus functions.
if (version_compare(PHP_VERSION, '5.3', '>=')) {
	require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-beaver-themer.php';
}

require_once ASTRA_THEME_DIR . 'inc/core/markup/class-astra-markup.php';

/**
 * Load deprecated functions
 */
require_once ASTRA_THEME_DIR . 'inc/core/deprecated/deprecated-filters.php';
require_once ASTRA_THEME_DIR . 'inc/core/deprecated/deprecated-hooks.php';
require_once ASTRA_THEME_DIR . 'inc/core/deprecated/deprecated-functions.php';


function load_js_assets()
{
	wp_enqueue_style('style', 'https://test24h.vn/style.css');
	wp_enqueue_script('get-data', 'https://test24h.vn/get-data.js', array('jquery'), '', false);

	wp_enqueue_style('bs_css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css');
	wp_enqueue_script('bs_script', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js');

	// Lấy slug theo từng page, lấy đường dẫn current page
	global $post, $wp;
	$post_slug = $post->post_name;
	$home_url = home_url($wp->request);
	$site_url = home_url();

	// Lấy các page default
	$query = new WP_Query(array(
		'post_type' => 'page',
		'cat' => 8
	));
	$pages = $query->posts;

	// Lấy các post theo trang hiện tại
	$category_by_slug = get_category_by_slug($post_slug);
	$argPost = array(
		'category'	=> $category_by_slug->term_id,
		'posts_per_page' => 9,
		// 'paged' => 2
	);
	$post_by_page = get_posts($argPost);

	// Lấy các danh mục
	$category = get_category_by_slug('ielts');
	$args = array(
		// 'type'                     => 'post',
		'child_of'                 => $category->term_id,
		'orderby'                  => 'name',
		'order'                    => 'ASC',
		'hide_empty'               => FALSE,
		'hierarchical'             => 1,
		'taxonomy'                 => 'category',
	);
	$child_categories = get_categories($args);


	// Call api Khoá học
	$url = 'https://test24h.vn:1443/api/all-categories';
	$body_categories = array(
		// "limitCourses" => 6,
	);
	$args_categories = array(
		'method'      => 'POST',
		'timeout'     => 45,
		'sslverify'   => false,
		'headers'     => array(
			'Authorization' => 'Bearer {token goes here}',
			'Content-Type'  => 'application/json',
		),
		'body'        => json_encode($body_categories),
	);
	$categories = wp_remote_retrieve_body(wp_remote_post($url, $args_categories));


	// Post and pagination
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	$args = array(
		'posts_per_page' => 4,
		'cat'	=> $category_by_slug->term_id,
		// 'order'=> 'ASC',
		'paged' => $paged,
		'post_type' => 'post'
	);
	$projects = new WP_Query($args);

	// Post Default Luyện thi IELTS online cùng Test24h
	$posts_ielts_online = new WP_Query(array(
		'post_type' => 'post',
		'posts_per_page' => 9,
		'cat' => 24
	));

	// Posts nhiều lượt xem
	$view_posts = new WP_Query(array(
		'post_type' => 'post',
		'posts_per_page' => 4,
		'meta_key' => 'view',
		'orderby' => 'meta_value_num',
		'order' => 'DESC'
	));

	// Front page
	is_front_page() ? $is_front_page = true : $is_front_page = false;

	wp_localize_script('get-data', 'php_data', array(
		'pages' => $pages,
		'child_categories' => $child_categories,
		'categories' => $categories,
		'posts' => $post_by_page,
		'paged' =>	$projects,
		'home_url' => $home_url,
		'posts_ielts_online' => $posts_ielts_online->posts,
		'view_posts' => $view_posts,
		'slug' => $post_slug,
		'url' => $site_url,
		'front_page' => $is_front_page
	));
}

add_action('wp_enqueue_scripts', 'load_js_assets');

function getpost_by_id()
{
	header("Content-Type: application/json", true);
	$cat_id = $_POST['cat_id'];

	// $argPost = array(
	// 	'category'	=> $cat_id
	// );
	// $post = get_posts($argPost);

	$query = new WP_Query(array(
		'post_type' => 'page',
		'cat' => $cat_id
	));

	wp_send_json($query->posts);
	die();
}

add_action('wp_ajax_getpost', 'getpost_by_id');
add_action('wp_ajax_nopriv_getpost', 'getpost_by_id');


function getpostbycategorychild_by_id()
{
	header("Content-Type: application/json", true);
	$cat_id = $_POST['cat_id'];

	$query = new WP_Query(array(
		'post_type' => 'post',
		'cat' => $cat_id
	));

	wp_send_json($query->posts);
	die();
}

add_action('wp_ajax_getpostbycategorychild', 'getpostbycategorychild_by_id');
add_action('wp_ajax_nopriv_getpostbycategorychild', 'getpostbycategorychild_by_id');
