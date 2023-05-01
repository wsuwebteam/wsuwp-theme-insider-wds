<?php namespace WSUWP\Theme\InsiderWDS;


class Theme {


	protected static $version = '3.0.0';


	public static function get( $property ) {

		switch ( $property ) {
			case 'version':
				return self::$version;
			case 'dir':
				return __DIR__;
			default:
				return '';
		}

	}


	public static function init() {

        require_once __DIR__ . '/includes/scripts.php';

	}


}

Theme::init();
