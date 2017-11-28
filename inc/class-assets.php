<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

/**
 * Setup assets.
 */
class JCK_STOC_Assets {
	/**
	 * Run class.
	 */
	public static function run() {
		add_action( 'wp_enqueue_scripts', array( __CLASS__, 'enqueue_scripts' ) );
	}

	/**
	 * Enqueue scripts.
	 */
	public static function enqueue_scripts() {
		if ( is_admin() ) {
			return;
		}

		$suffix = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';

		// wp_enqueue_script( 'jck-sfr-main', JCK_STOC_Assets_URL . 'frontend/js/main' . $suffix . '.js', array( 'jquery' ), JCK_SFR_VERSION, true );
	}
}