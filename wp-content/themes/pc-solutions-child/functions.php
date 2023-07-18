<?php
//-------------------------ENQUEUE STYLESHEET AND SCRIPTS-------------------//
function prefix_add_footer_styles() {
    // wp_enqueue_style( 'bootstrap-style', get_stylesheet_directory_uri() . '/css/bootstrap.min.css' );
    // wp_enqueue_style( 'body-style', get_stylesheet_directory_uri() . '/body-style.css' );
};
add_action( 'get_footer', 'prefix_add_footer_styles' );

function wp_schools_enqueue_scripts() {
//wp_enqueue_script('jquery.min', 'http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js', array('jquery'), false, true  );
// wp_enqueue_script('bootstrap-min-js', get_stylesheet_directory_uri() . '/js/bootstrap.min.js', array('jquery'), false, true  );
// wp_enqueue_script('component-js', get_stylesheet_directory_uri() . '/js/component.js', array('jquery'), false, true  );
// wp_enqueue_script('edit-js', get_stylesheet_directory_uri() . '/js/edit-js.js', array('jquery'), false, true  );
}
add_action( 'wp_enqueue_scripts', 'wp_schools_enqueue_scripts', 11);

//----------------------------------------------------------------------//

// Disables the block editor from managing widgets in the Gutenberg plugin.
add_filter( 'gutenberg_use_widgets_block_editor', '__return_false', 100 );

// Disables the block editor from managing widgets. renamed from wp_use_widgets_block_editor
add_filter( 'use_widgets_block_editor', '__return_false' );

// Remove <p> and <br/> from Contact Form 7
add_filter('wpcf7_autop_or_not', '__return_false');

//----------------dynamic menu item active------------------------//
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class($classes, $item){
     if( in_array('current-menu-item', $classes) ){
             $classes[] = 'active ';
     }

     return $classes;
}
//----------------dynamic menu item active------------------------//

//-------------------create new thumb image 198x197/149x148

add_action( 'after_setup_theme', 'baw_theme_setup' );

function baw_theme_setup() {
  //add_image_size( 'blog-thumb', 291, 207, true );
}
?>