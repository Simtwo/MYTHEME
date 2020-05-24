<?php

 //*  THEME SUPPORT
add_theme_support('menus');
register_nav_menus(
  array(
    'Menu principal'    => __( 'Menu principal', 'THEME SIMON BOUCHARD' ),
  )
);


get_template_part( 'func/comments_killer' );
get_template_part( 'func/customizer_killer' );
get_template_part( 'func/header_plus_simple' );
get_template_part( 'func/cache_barre_wordpress' );
get_template_part( 'func/image_srcset_size_reset' );
get_template_part( 'func/no_updates' );

add_action( 'wp_enqueue_scripts', 'theme_scripts_styles', 'wpb_adding_scripts');
function theme_scripts_styles() {
  wp_enqueue_style( 'reset', get_stylesheet_directory_uri() . '/inc/reset.css', array(), '1.0', 'all' );
  wp_enqueue_script( 'un_js_sup', get_stylesheet_directory_uri() . '/inc/simonilla.js');

}

// Ci-dessous: le diaporama
add_action( 'wp_enqueue_scripts', 'diaporama_scripts_styles', 'wpb_adding_scripts');
function diaporama_scripts_styles() {
  wp_enqueue_style( 'tiny_slider', get_stylesheet_directory_uri() . '/parts/diaporama/tiny-slider.css', array(), '1.0', 'all' );
  wp_enqueue_script( 'tiny_slider', get_stylesheet_directory_uri() . '/parts/diaporama/tiny-slider.js');
}
