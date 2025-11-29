<?php
/*
Template Name: Sobre Nosotros
Template Post Type: page
*/
get_header();
?>

<main id="site-content">
    <section class="sobre-nosotros" aria-labelledby="sobre-titulo">
        <h1 id="sobre-titulo">Sobre Mí</h1>

        <div class="contenido-sobre-nosotros">
            <figure class="foto-perfil">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/foto-perfil.png' ); ?>"
                     alt="<?php echo esc_attr( 'Daniel Darmanin Casariego' ); ?>"
                     width="260" height="260" loading="lazy">
                <figcaption class="visually-hidden">Foto de perfil</figcaption>
            </figure>

            <div class="texto-sobre-mi">
                <p><?php echo esc_html( '¡Hola! Soy Daniel Darmanin Casariego, un apasionado del universo de Warhammer 40k. Desde que era niño, he estado fascinado por las historias épicas, los personajes complejos y el increíble arte que este mundo ofrece. A través de este sitio web, quiero compartir mi amor por Warhammer 40k con otros entusiastas, ofreciendo análisis detallados, noticias actualizadas y recursos útiles para la comunidad.' ); ?></p>

                <p><?php echo esc_html( 'Mi objetivo es crear un espacio donde los fans puedan conectarse, aprender y disfrutar juntos de todo lo que Warhammer 40k tiene para ofrecer. ¡Gracias por visitar y espero que disfrutes del contenido tanto como yo disfruto creándolo!' ); ?></p>
            </div>
        </div>
    </section>

    <section class="mis-redes-sociales" aria-labelledby="redes-titulo">
        <h1 id="redes-titulo">Mis Redes Sociales</h1>

        <nav aria-label="Enlaces a redes sociales">
            <div class="redes-sociales">
                <a href="" target="_blank" rel="noopener noreferrer" aria-label="InfoJobs (abre en nueva pestaña)">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/infojobs.webp' ); ?>"
                         alt="<?php echo esc_attr( 'InfoJobs' ); ?>"
                         width="120" height="120" loading="lazy">
                </a>

                <a href="<?php echo esc_url( 'https://github.com/Darmanin96' ); ?>" target="_blank" rel="noopener noreferrer" aria-label="GitHub (abre en nueva pestaña)">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/github.png' ); ?>"
                         alt="<?php echo esc_attr( 'GitHub' ); ?>"
                         width="120" height="120" loading="lazy">
                </a>

                <a href="<?php echo esc_url( 'https://www.linkedin.com/in/daniel-darmanin-casariego-1716ab371/' ); ?>" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn (abre en nueva pestaña)">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/linkelin.webp' ); ?>"
                         alt="<?php echo esc_attr( 'LinkedIn' ); ?>"
                         width="120" height="120" loading="lazy">
                </a>
            </div>
        </nav>
    </section>
</main>

<?php
get_footer();

