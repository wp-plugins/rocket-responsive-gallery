<?php

define( 'GALLERY_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );

define( 'GALLERY_PLUGIN_DIR_NAME', dirname( plugin_basename( __FILE__ ) ) );

define( 'GALLERY_PLUGIN_PREFIX', 'wpgp' ); //WP Gallery plugin

define( 'GALLERY_PLUGIN_GALLERY_POST_TYPE', GALLERY_PLUGIN_PREFIX . '_gallery' );

define( 'GALLERY_PLUGIN_INCLUDE_DIRECTORY_NAME', 'includes' );

define( 'GALLERY_PLUGIN_VIEW_DIRECTORY_NAME', 'views' );

define( 'GALLERY_PLUGIN_CSS_DIRECTORY_NAME', 'css' );

define( 'GALLERY_PLUGIN_JS_DIRECTORY_NAME', 'js' );

define( 'GALLERY_PLUGIN_INCLUDE_DIRECTORY', GALLERY_PLUGIN_PATH .
									  	GALLERY_PLUGIN_INCLUDE_DIRECTORY_NAME
							 		  	. DIRECTORY_SEPARATOR );

define( 'GALLERY_PLUGIN_VIEW_DIRECTORY', GALLERY_PLUGIN_PATH .
									  	GALLERY_PLUGIN_VIEW_DIRECTORY_NAME
							 		  	. DIRECTORY_SEPARATOR );

define( 'GALLERY_PLUGIN_CSS_DIRECTORY', GALLERY_PLUGIN_PATH .
									  	GALLERY_PLUGIN_CSS_DIRECTORY_NAME
							 		  	. DIRECTORY_SEPARATOR );

define( 'GALLERY_PLUGIN_JS_DIRECTORY', GALLERY_PLUGIN_PATH .
									  	GALLERY_PLUGIN_JS_DIRECTORY_NAME
							 		  	. DIRECTORY_SEPARATOR );

define( 'GALLERY_PLUGIN_MAIN_FILE', GALLERY_PLUGIN_PATH . 'wp-gallery.php' );

define( 'GALLERY_PLUGIN_GALLERY_SHORTCODE', 'wpgp_gallery' );

define( 'GALLERY_PLUGIN_VERSION', '1.0' );