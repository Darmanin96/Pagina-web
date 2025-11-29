<?php
function warhammer_setup() {
    register_nav_menus(array(
        'menu-principal' => 'Menú Principal',
        'menu-footer' => 'Menú Footer'
    ));

    add_theme_support('widgets');
}

function video_scroll(){
    wp_enqueue_script('warhammer-video-scroll', get_template_directory_uri() . '/assets/js/font-page.js', array(), '1.0.0', true);
}

function fronts_google(){
     wp_enqueue_style('warhammer-google-fonts', 'https://fonts.googleapis.com/css2?family=UnifrakturMaguntia&family=Cinzel:wght@700&display=swap', array(), null);
}

function estilos_personalizados() {
    wp_enqueue_style('warhammer-estilos', get_stylesheet_uri());
}

function css_lore() {
    if (is_page_template('poi.php')) {
        wp_enqueue_style('lore', get_template_directory_uri() . '/css/lore.css', array(), '1.0.0');
    }
}

function css_sobre_nosotros() {
    if (is_page_template('sobreNosotros.php')) {
        wp_enqueue_style('sobre-nosotros', get_template_directory_uri() . '/css/sobre-nosotros.css', array(), '1.0.0');
    }
}

add_action('after_setup_theme', 'warhammer_setup');
add_action('wp_footer', 'video_scroll');
add_action('wp_enqueue_scripts', 'fronts_google');
add_action('wp_enqueue_scripts', 'estilos_personalizados');
add_action('wp_enqueue_scripts', 'css_lore');
add_action('wp_enqueue_scripts', 'css_sobre_nosotros');

?>