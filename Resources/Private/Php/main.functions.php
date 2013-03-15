<?php


class mock {
	function __call($name, $params) {
		return $this;
	}
	function __toString() {
		return '';
	}
}





function timer_stop() {

}


function have_posts() {
	return FALSE;
}

function current_user_can($right) {
	return FALSE;
}

function add_action($action, $function) {
	global $wordPress;
	$wordPress['actions'][$action][] = $function;
}

/**
 * @param $action
 */
function do_action($action) {
	global $wordPress;

	if(array_key_exists($action, $wordPress['actions'])) {
		foreach($wordPress['actions'][$action] as $action) {
			call_user_func($action);
		}
	}
}
function remove_action($string, $array) {

}

function apply_filters($tag, $value) {
	return $value;
	// @todo implement hooks
}

function body_class() {
	// @todo return correct header class
	echo '';
}

function get_option($name, $default = '') {
	switch($name) {
		case 'home':
			return '---';
			break;
		case 'html_type':
			return 'html5';
			break;
		case 'blog_charset':
			return 'utf-8';
			break;
		case 'blogname':
			return '@todo sitename from template';
			break;
		case 'stylesheet':
			$wpAdapter = t3lib_div::makeInstance('Tx_ThemesAdapterWordpress_Controller_Renderer');
			return $wpAdapter->confEvaluated['themeName'];
			break;
		case 'siteurl':
			return '';
			break;
		case 'blogdescription':
			return '';
			break;
		case 'date_format':
			return 'd.m.Y H:i:s';
			break;
		case 'users_can_register':
			return FALSE;
			break;
		case 'template':
			$wpAdapter = t3lib_div::makeInstance('Tx_ThemesAdapterWordpress_Controller_Renderer');
			return $wpAdapter->confEvaluated['themeName'];
			break;
		default:
			#throw new Exception('call for undefined get_option: ' . $name);
	}
}

function the_post() {
	$wpAdapter = t3lib_div::makeInstance('Tx_ThemesAdapterWordpress_Controller_Renderer');
	return $wpAdapter->confEvaluated['mainColumn'];
}
function get_post_format() {
	return 'page';
}

function get_default_feed() {
	return '';
}
function get_feed_permastruct() {
	return '';
}

function is_multisite() {
	return FALSE;
}

function get_query_var($var) {
	return t3lib_div::_GP($var);
}

function is_single(){
	return true;
}

function get_queried_object() {
	return NULL;
}
function is_category() {
	return FALSE;
}
function is_tag() {
	return FALSE;
}
function is_tax() {
	return FALSE;
}
function is_author() {
	return FALSE;
}
function is_post_type_archive() {
	return FALSE;
}
function is_archive() {
	return FALSE;
}
function is_search() {
	return FALSE;
}
function is_404() {
	return FALSE;
}
function is_singular() {
	return FALSE;
}

function is_day() {
	return FALSE;
}

function is_month() {
	return FALSE;
}
function is_year() {
	return FALSE;
}
function is_paged() {
	return FALSE;
}
function is_home() {
	return FALSE;
}
function is_page() {
	return FALSE;
}
function is_user_logged_in() {
	return FALSE;
}

function wp_list_bookmarks() {
	return '';
}
function wp_list_pages() {
	$wpAdapter = t3lib_div::makeInstance('Tx_ThemesAdapterWordpress_Controller_Renderer');
	echo $wpAdapter->confEvaluated['menu'];
}
function wp_nav_menu() {
	wp_list_pages();
}
function the_ID() {
	return 0;
}
function wp_list_categories() {
	return '';
}

function wp_cache_get($key, $categorie) {
	return array(
		$key => $key . ' / ' . $categorie
	);
}

function wp_cache_set() {
	return FALSE;
}

function wp_kses_normalize_entities() {

}
function wp_kses_bad_protocol() {

}
function add_filter() {

}
function register_nav_menus() {

}
function get_post_format_slugs() {
	$slugs = array_keys( get_post_format_strings() );
	return array_combine( $slugs, $slugs );
}
function get_post_format_strings() {
	$strings = array(
		'standard' => _x( 'Standard', 'Post format' ), // Special case. any value that evals to false will be considered standard
		'aside'    => _x( 'Aside',    'Post format' ),
		'chat'     => _x( 'Chat',     'Post format' ),
		'gallery'  => _x( 'Gallery',  'Post format' ),
		'link'     => _x( 'Link',     'Post format' ),
		'image'    => _x( 'Image',    'Post format' ),
		'quote'    => _x( 'Quote',    'Post format' ),
		'status'   => _x( 'Status',   'Post format' ),
		'video'    => _x( 'Video',    'Post format' ),
		'audio'    => _x( 'Audio',    'Post format' ),
	);
	return $strings;
}
function is_admin() {
	return FALSE;
}
function is_attachment() {
	return FALSE;
}
function set_post_thumbnail_size() {

}
function post_class() {

}
function get_post() {
	return 'POSTCONTENT';
}
function get_post_type_object() {
	return new mock();
}
function the_title() {
	return get_option('blog_name');
}
function the_content() {
	return 'THECONTENT';
}
function wp_link_pages() {

}
function dynamic_sidebar($index = 1) {
	return TRUE;
}
function has_nav_menu() {
	return FALSE;
}
function wp_enqueue_style() {

}
function register_nav_menu() {

}
function is_active_sidebar() {

}