<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>
<?php 
    // Context array.
    $context = array();

    // Dynamic message.
    $var = get_stylesheet_directory_uri();;
    $var1 = get_field('page_title');
    $var2= get_field('page_desc');
    // Dynamic data.
    $context['style_dir'] = $var;
    $context['page_title'] = $var1;
    $context['page_desc'] = $var2;
    $context['menu'] = new TimberMenu();   
    Timber::render('menu.twig', $context);
    
?>
<?php
    $context_main         = Timber::get_context();
    $post            = new TimberPost();
    $context_main['post'] = $post;
    Timber::render( 'page.twig', $context_main );
    
   
 ?>


<?php get_footer(); ?>
