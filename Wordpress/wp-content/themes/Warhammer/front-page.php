<?php get_header(); ?>

<section class="hero" id="warhammer-40k">
  <video autoplay muted loop playsinline>
    <source src="<?php echo get_template_directory_uri(); ?>/assets/videos/Cabecera.mp4" type="video/mp4">
  </video>
  <div class="hero-content">
    <h1>Chronicles of Warhammer</h1>
    <p>Donde las leyendas del Imperio cobran vida.</p>
  </div>
</section>

<main class="main-content">
  <section class="facciones">
    <h2>Facciones del Imperio</h2>
    <div class="facciones-grid">
      <article class="faccion">
        <h3>Astra Militarum</h3>
        <p>El corazón del Imperio, compuesto por millones de soldados humanos que luchan con valentía contra las amenazas del universo.</p>
      </article>

      <article class="faccion">
        <h3>Space Marines</h3>
        <p>Los guerreros genéticamente mejorados del Imperio, conocidos por su fuerza y habilidades de combate superiores.</p>
      </article>

      <article class="faccion">
        <h3>Adeptus Mechanicus</h3>
        <p>Los guardianes del conocimiento tecnológico, dedicados a preservar y desarrollar la tecnología del Imperio.</p>
      </article>

      <article class="faccion">
        <h3>La Inquisición</h3>
        <p>Una organización secreta que protege al Imperio de amenazas internas y externas, utilizando métodos implacables para asegurar la supervivencia de la humanidad.</p>
      </article>

      <article class="faccion">
        <h3>Adeptus Sororitas</h3>
        <p>También conocidas como las Hermanas de Batalla, son una orden militar religiosa dedicada a la defensa del Imperio y la erradicación de la herejía.</p>
      </article>

      <article class="faccion">
        <h3>Officio Assassinorum</h3>
        <p>Una organización secreta que emplea asesinos altamente entrenados para eliminar amenazas críticas al Imperio.</p>
      </article>
    </div>
  </section>
</main>

<?php get_footer(); ?>
