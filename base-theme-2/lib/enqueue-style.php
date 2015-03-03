<?php
/*********************
Enqueue the proper CSS
if you use Sass.
*********************/
if( ! function_exists( 'reverie_enqueue_style' ) ) {
	function reverie_enqueue_style()
	{
		// foundation stylesheet
		wp_register_style( 'foundation-stylesheet', get_stylesheet_directory_uri() . '/css/foundation.min.css', array(), '' );
		// Register Font Awesome
		wp_register_style( 'font-awesome-stylesheet', get_stylesheet_directory_uri() . '/css/font-awesome.min.css', array(), '', 'all' );
		// Register the main style
		wp_register_style( 'main-stylesheet', get_stylesheet_directory_uri() . '/css/style.css', array(), '', 'all' );

		// Register other
		wp_register_style( 'slick-slider', get_stylesheet_directory_uri() . '/bower_components/slick/slick.css', array(), '', 'all' );

		wp_enqueue_style( 'foundation-stylesheet' );
		wp_enqueue_style( 'font-awesome-stylesheet' );
		wp_enqueue_style( 'main-stylesheet' );

		//Enqueue other
		wp_enqueue_style( 'slick-slider' );

	}
}
add_action( 'wp_enqueue_scripts', 'reverie_enqueue_style' );
?>
