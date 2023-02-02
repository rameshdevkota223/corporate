<?php
/**
 * corporate functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage corporate
 * @since corporate
 */


if ( ! function_exists( 'corporate_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Corporate 1.0
	 *
	 * @return void
	 */
	function corporate_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}

endif;

add_action( 'after_setup_theme', 'corporate_support' );

if ( ! function_exists( 'corporate_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Corporate 1.0
	 *
	 * @return void
	 */
	function corporate_styles() {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_register_style(
			'corporate-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$version_string
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'corporate-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'corporate_styles' );

