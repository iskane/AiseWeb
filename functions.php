<?php 

function wpbootstrap_scripts_with_jquery()
{
	// Register the script like this for a theme:

	wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'style', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_register_script( 'bootstrap-min', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ) );
	// For either a plugin or a theme, you can then enqueue the script:
	wp_enqueue_script( 'custom-script' );
	wp_enqueue_script( 'bootstrap-min' );

}
add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );

/*Funcionalidades que queremos añadir a nuestro tema*/
if ( function_exists( 'add_theme_support' ) )
add_theme_support( 'post-thumbnails' );

?>