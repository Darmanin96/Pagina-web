<?php
function mi_tema_setup() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    register_nav_menus(array(
        'menu-principal' => 'Menú Principal'
    ));
}
add_action('after_setup_theme', 'mi_tema_setup');

function mi_tema_scripts() {
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'mi_tema_scripts');
?>