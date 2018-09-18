<?php
/**
 * Enqueues scripts and styles.
 *
 * @since Twenty Sixteen 1.0
 */
//require_once( __DIR__ . '/vendor/autoload.php' );
//$timber = new Timber\Timber();
function twentysixteen_scripts() {

    // Theme stylesheet.
    wp_enqueue_style( 'twentysixteen-style', get_stylesheet_uri() );
    wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array ( 'jquery' ), 1.1, true);
}
add_action( 'wp_enqueue_scripts', 'twentysixteen_scripts' );


function add_to_context( $data ) {
    $data['foo'] = 'bar';
    $data['stuff'] = 'I am a value set in your functions.php file';
    $data['notes'] = 'These values are available everytime you call Timber::get_context();';
    $data['menu'] = new TimberMenu();
    return $data;
}
add_filter( 'timber_context', 'add_to_context' );

add_action( 'after_setup_theme', 'register_my_menu' );
function register_my_menu() {
  register_nav_menu( 'primary', __( 'Primary Menu', 'theme-slug' ) );
}
