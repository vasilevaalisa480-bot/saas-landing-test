<?php
use CACFBlocks\Factory\BlockFactory;

require_once get_template_directory() . '/autoloader.php';
require_once get_template_directory() . '/inc/seo.php';
require_once get_template_directory() . '/inc/analytics.php';
require_once get_template_directory() . '/inc/acf-options.php';
require_once get_template_directory() . '/inc/ajax.php';
require_once get_template_directory() . '/inc/pictures.php';
require_once get_template_directory() . '/inc/speed.php';
require_once get_template_directory() . '/inc/template-tags.php';
require_once get_template_directory() . '/inc/template-functions.php';
require_once get_template_directory() . '/inc/mail.php';
require_once get_template_directory() . '/inc/post-types.php';

if ( defined( 'WP_CLI' ) && WP_CLI ) {
	require_once get_template_directory() . '/inc/wp-cli.php';
}

add_action(
	'acf/init',
	function () {
		try {
			$block = BlockFactory::create_block( 'spacer-block' );
			$block->register_all();
		} catch ( Exception $e ) {
			error_log( 'Error registering spacer block: ' . $e->getMessage() );
		}
	}
);

/**
 * Sets up theme defaults and registers support for WordPress features.
 */
function webula_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-logo' );
	add_theme_support(
		'html5',
		[
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		]
	);

	register_nav_menus(
		[
			'menu-top'    => __( 'Header Menu', 'webula-starter' ),
			'menu-footer' => __( 'Footer Menu', 'webula-starter' ),
		]
	);
}
add_action( 'after_setup_theme', 'webula_setup' );

/**
 * Set the content width in pixels.
 */
function webula_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'webula_content_width', 1200 );
}
add_action( 'after_setup_theme', 'webula_content_width', 0 );

/**
 * Register theme assets.
 */
function webula_register_assets() {
	wp_register_script( 'webula-script', webula_get_asset( 'main.js' ), [], null, true );
	wp_register_style( 'webula-style', webula_get_asset( 'main.css' ), [], null );
	wp_register_style( 'webula-about-style', webula_get_asset( 'about.css' ), [ 'webula-style' ], null );
	wp_register_style( 'webula-service-style', webula_get_asset( 'service.css' ), [ 'webula-style' ], null );
	wp_register_style( 'webula-faq-style', webula_get_asset( 'faq.css' ), [ 'webula-style' ], null );
	wp_register_style( 'webula-dashboard-style', webula_get_asset( 'dashboard.css' ), [ 'webula-style' ], null );
	wp_register_style( 'webula-request-modal-style', webula_get_asset( 'request-modal.css' ), [ 'webula-style' ], null );
	wp_register_script( 'webula-faq-script', webula_get_asset( 'faq.js' ), [], null, true );
	wp_register_script( 'webula-dashboard-script', webula_get_asset( 'dashboard.js' ), [], null, true );
}
add_action( 'init', 'webula_register_assets', 0 );

/**
 * Enqueue frontend assets.
 */
function webula_main_scripts() {
	wp_enqueue_script( 'webula-script' );
	wp_enqueue_style( 'webula-style' );

	if ( is_page( 'about' ) ) {
		wp_enqueue_style( 'webula-about-style' );
	}

	if ( is_page( 'service' ) ) {
		wp_enqueue_style( 'webula-service-style' );
	}

	if ( is_page( 'faq' ) ) {
		wp_enqueue_style( 'webula-faq-style' );
		wp_enqueue_script( 'webula-faq-script' );
	}

	if ( is_page( 'dashboard' ) ) {
		wp_enqueue_style( 'webula-dashboard-style' );
		wp_enqueue_style( 'webula-request-modal-style' );
		wp_enqueue_script( 'webula-dashboard-script' );
	}
}
add_action( 'wp_enqueue_scripts', 'webula_main_scripts', 11 );

/**
 * Enqueue editor styles.
 */
function webula_enqueue_editor_styles() {
	wp_enqueue_style( 'webula-style' );
}
add_action( 'enqueue_block_editor_assets', 'webula_enqueue_editor_styles' );

add_filter( 'xmlrpc_enabled', '__return_false' );

add_filter( 'block_categories_all', 'webula_add_block_category', 10, 2 );

/**
 * Add a dedicated category for custom starter blocks.
 *
 * @param array $categories Existing block categories.
 * @return array
 */
function webula_add_block_category( $categories ) {
	$custom_category = [
		[
			'slug'  => 'custom-blocks',
			'title' => __( 'Custom Blocks', 'webula-starter' ),
			'icon'  => null,
		],
	];

	return array_merge( $custom_category, $categories );
}
