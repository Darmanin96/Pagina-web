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

      <article class="faccion faccion-image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/astra2.webp" alt="Astra Militarum">
        <div class="faccion-overlay">
          <h3>Astra Militarum</h3>
          <p>El corazón del Imperio...</p>
        </div>
      </article>

      <article class="faccion faccion-image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/marine.png" alt="Space Marines">
        <div class="faccion-overlay">
          <h3>Space Marines</h3>
          <p>Los guerreros genéticamente mejorados...</p>
        </div>
      </article>

      <article class="faccion faccion-image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/adeptus.webp" alt="Adeptus Mechanicus">
        <div class="faccion-overlay">
          <h3>Adeptus Mechanicus</h3>
          <p>Los guardianes del conocimiento tecnológico...</p>
        </div>
      </article>

      <article class="faccion faccion-image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/inqui.jpg" alt="Inquisición">
        <div class="faccion-overlay">
          <h3>La Inquisición</h3>
          <p>Una organización secreta...</p>
        </div>
      </article>

      <article class="faccion faccion-image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/monga.png" alt="Adeptus Sororitas">
        <div class="faccion-overlay">
          <h3>Adeptus Sororitas</h3>
          <p>Orden militar religiosa...</p>
        </div>
      </article>

      <article class="faccion faccion-image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/oficio.webp" alt="Officio Assassinorum">
        <div class="faccion-overlay">
          <h3>Officio Assassinorum</h3>
          <p>Asesinos del Imperio...</p>
        </div>
      </article>

    </div>
  </section>

  <section class="facciones-caos">
    <h2>Facciones del Caos</h2>

    <div class="caos-wrapper">

      <div class="caos-carrusel">

        <div class="caos-card" onclick="abrirPanel('marines')">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/marines-caos.jpg" alt="Marines del Caos">
          <br>
          <div class="caos-card-content">
            <h3>Marines del Caos</h3>
            <br>
            <button class="caos-card-btn">+</button>
          </div>
          <div class="caos-panel-card">
            <h4>Marines del Caos</h4>
              <p>Texto</p>
  </div>
        </div>

        <div class="caos-card" onclick="abrirPanel('demonios')">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/demonios.png" alt="Demonios del Caos">
          <br>
          <div class="caos-card-content">
            <h3>Demonios del Caos</h3>
            <br>
            <button class="caos-card-btn">+</button>
          </div>
        </div>

        <div class="caos-card" onclick="abrirPanel('death')">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/death.jpg" alt="Death Guard">
          <br>
          <div class="caos-card-content">
            <h3>Death Guard</h3>
            <br>
            <button class="caos-card-btn">+</button>
          </div>
        </div>

        <div class="caos-card" onclick="abrirPanel('mil')">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mil-hijos.webp" alt="Mil Hijos">
          <br>
          <div class="caos-card-content">
            <h3>Mil Hijos</h3>
            <br>
            <button class="caos-card-btn">+</button>
          </div>
        </div>

        <div class="caos-card" onclick="abrirPanel('caballeros')">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/caballeros.webp" alt="Caballeros del Caos">
          <br>
          <div class="caos-card-content">
            <h3>Caballeros del Caos</h3>
            <br>
            <button class="caos-card-btn">+</button>
          </div>
        </div>

      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>