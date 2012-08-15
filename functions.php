<?php

//Add support for WordPress 3.0's custom menus

add_action( 'init', 'register_my_menu' );



//Register area for custom menu

function register_my_menu() {

    register_nav_menu( 'primary-menu', __( 'Primary Menu' ) );}



//Enable post thumbnails

add_theme_support('post-thumbnails');

set_post_thumbnail_size(520, 250, true);



//Some simple code for our widget-enabled sidebar

if ( function_exists('register_sidebar') )

    register_sidebar();



//Code for custom background support

add_custom_background();



//Enable post and comments RSS feed links to head

add_theme_support( 'automatic-feed-links' );



//Enable multisite feature (WordPress 3.0)

define('WP_ALLOW_MULTISITE', true); 



//Limit excerpt length (word count)

function custom_excerpt_length( $length ) {

	return 45;}

add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );



//Add custom link for excerpts

function new_excerpt_more($more) {

       global $post;

	return '<a href="'. get_permalink($post->ID) . '" class="read-more"> read more...</a>';}

add_filter('excerpt_more', 'new_excerpt_more');



//Exclude category tutorials from first loop

function exclude_category($query) {

if ( $query->is_home() ) {

$query->set('cat', '-5');

}

return $query;

}

add_filter('pre_get_posts', 'exclude_category');

?>