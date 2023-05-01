<?php namespace WSUWP\Theme\InsiderWDS;


class Scripts {


	public static function init() {

		add_action( 'wp_enqueue_scripts', array( __CLASS__, 'enqueue_scripts' ), 5 );

	}

	public static function enqueue_scripts() {

		$version = Theme::get( 'version' );


		wp_enqueue_style( 'wsu_design_system_insider', get_stylesheet_directory_uri() . '/assets/dist/css/style.css', array(), $version );


	}


}

Scripts::init();
