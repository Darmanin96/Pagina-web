<?php
function warhammer_setup() {
    register_nav_menus(array(
        'menu-principal' => 'Menú Principal',
        'menu-footer' => 'Menú Footer'
    ));

    add_theme_support('widgets');
}

function video_scroll(){
    ?>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            console.log("Script loaded");
            const video = document.querySelector('#Warhammer-40k');
            if (video) {
                window.addEventListener('scroll', function() {
                    const scrollPosition = window.scrollY;
                    const videoHeight = window.innerHeight;

                    if (scrollPosition > videoHeight * 0.3) {
                        const opacity = 1 - (scrollPosition - videoHeight * 0.3) / (videoHeight * 0.7);
                        video.style.opacity = Math.max(opacity, 0);
                    } else {
                        video.style.opacity = 1;
                    }
                });
            }
        });
    </script>
    <?php
}

function fronts_google(){
     wp_enqueue_style('warhammer-google-fonts', 'https://fonts.googleapis.com/css2?family=UnifrakturMaguntia&family=Cinzel:wght@700&display=swap', array(), null);
}

function estilos_personalizados() {
    wp_enqueue_style('warhammer-estilos', get_stylesheet_uri());
}

add_action('after_setup_theme', 'warhammer_setup');
add_action('wp_footer', 'video_scroll');
add_action('wp_enqueue_scripts', 'fronts_google');
add_action('wp_enqueue_scripts', 'estilos_personalizados');
?>