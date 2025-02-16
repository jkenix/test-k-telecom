<?php
// регистрируем JS
add_action('wp_enqueue_scripts', 'true_scrypt_frontend');
function true_scrypt_frontend()
{

	wp_enqueue_script('swiper', get_template_directory_uri() . '/sources/js/swiper-bundle.min.js', array('jquery'), null, false);
	wp_enqueue_script('scripts', esc_url(get_template_directory_uri()) . '/sources/js/scripts.js', array('jquery'), null, true);
}

// регистрируем CSS
add_action('wp_enqueue_scripts', 'true_style_frontend');
function true_style_frontend()
{
	wp_enqueue_style('styles', esc_url(get_template_directory_uri()) . '/sources/css/styles.css');
	wp_enqueue_style('normalize', esc_url(get_template_directory_uri()) . '/sources/css/normalize.css');
	wp_enqueue_style('swiper', get_template_directory_uri() . '/sources/css/swiper-bundle.min.css');

}

// удаляем лишнее для валидности
add_action(
	'after_setup_theme',
	function () {
		add_theme_support('html5', ['script', 'style']);
	}
);

// миниатюры  
add_theme_support('post-thumbnails');

add_image_size('small-thumbnail', 430, 242, true);
add_image_size('medium-thumbnail', 645, 363, true);
add_image_size('medium-large-thumbnail-single', 636, 426, true);
add_image_size('medium-large-thumbnail', 860, 484, true);

// убираем для заголовка архивов и таксономий слово перед
add_filter('get_the_archive_title', function ($title) {
	return preg_replace('~^[^:]+: ~', '', $title);
});

// enable acf option page
if (current_user_can('administrator')) {
	if (function_exists('acf_add_options_page')) {
		acf_add_options_page();
	}
}

// включаем поддержку меню
// if (function_exists('add_theme_support')) {
// 	add_theme_support('menus');
// 	add_theme_support('title-tag');
// }

add_filter('xmlrpc_enabled', '__return_false'); // Отключение xmlrpc

// Отключение jquery-migrate 
function wpschool_remove_jquery_migrate($scripts)
{
	if (! is_admin() && isset($scripts->registered['jquery'])) {
		$script = $scripts->registered['jquery'];
		if ($script->deps) {
			$script->deps = array_diff($script->deps, array('jquery-migrate'));
		}
	}
}
add_action('wp_default_scripts', 'wpschool_remove_jquery_migrate');

// Добавляет SVG в список разрешенных для загрузки файлов.
add_filter('upload_mimes', 'svg_upload_allow');
function svg_upload_allow($mimes)
{
	$mimes['svg']  = 'image/svg+xml';

	return $mimes;
}

// include custom functions
require get_template_directory() . '/inc/custom_functions.php';
