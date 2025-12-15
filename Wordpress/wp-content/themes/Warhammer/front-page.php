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
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/astra2.webp" alt="Astra Militarum" loading="lazy">
        <div class="faccion-overlay">
          <h3>Astra Militarum</h3>
          <p>El Astra Militarum, también conocido por su antiguo nombre Guardia Imperial, es la fuerza militar humana más numerosa 
            del Imperio del Hombre en Warhammer 40k. Representa a los ejércitos convencionales formados por miles de mundos 
            imperiales.</p>
        </div>
      </article>

      <article class="faccion faccion-image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/marine.png" alt="Space Marines" loading="lazy">
        <div class="faccion-overlay">
          <h3>Space Marines</h3>
          <p>Los Space Marines son soldados de élite creados mediante bioingeniería, genética avanzada y un riguroso adoctrinamiento mental. No son humanos normales:
son más grandes, más fuertes, más resistentes y están mejor entrenados que cualquier soldado humano.</p>
        </div>
      </article>

      <article class="faccion faccion-image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/adeptus.webp" alt="Adeptus Mechanicus"   loading="lazy">
        <div class="faccion-overlay">
          <h3>Adeptus Mechanicus</h3>
          <p>El Adeptus Mechanicus es la organización encargada de la tecnología, máquinas y producción industrial del Imperio. 
            Proceden del planeta Marte, su fe gira en torno al Dios Máquina y practican una mezcla extrema de misticismo y ciencia.</p>
        </div>
      </article>

      <article class="faccion faccion-image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/inqui.jpg" alt="Inquisición" loading="lazy">
        <div class="faccion-overlay">
          <h3>La Inquisición</h3>
          <p>La Inquisición es una organización secreta del Imperio del Hombre encargada de buscar y eliminar la herejía, la corrupción y las amenazas al Imperio. Sus agentes, los Inquisidores, poseen autoridad casi absoluta y actúan sin limitaciones para proteger al Imperio de sus enemigos internos.</p>
        </div>
      </article>

      <article class="faccion faccion-image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/monga.png" alt="Adeptus Sororitas" loading="lazy">
        <div class="faccion-overlay">
          <h3>Adeptus Sororitas</h3>
          <p>El Adeptus Sororitas, también conocido como las Hermanas de Batalla, es una orden militar religiosa femenina dedicada a defender la fe del Imperio. Armadas con tecnología avanzada y entrenadas en combate espiritual, estas guerreras implacables luchan contra los enemigos del Emperador con fanática devoción.</p>
        </div>
      </article>

      <article class="faccion faccion-image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/oficio.webp" alt="Officio Assassinorum" loading="lazy">
        <div class="faccion-overlay">
          <h3>Officio Assassinorum</h3>
          <p>El Officio Assassinorum es la rama de asesinos más letal del Imperio. Entrenados en el sigilo, la eliminación y técnicas mortales, estos asesinos operan en las sombras para eliminar amenazas políticas, enemigas y traidoras. Su existencia es denegada oficialmente por el Imperio.</p>
        </div>
      </article>

    </div>
  </section>

  <section class="facciones-caos">
    <h2>Facciones del Caos</h2>

    <div class="caos-wrapper">

      <div class="caos-carrusel">

        <div class="caos-card" onclick="abrirPanel('marines')">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/marines-caos.jpg" alt="Marines del Caos" loading="lazy">
          <div class="caos-card-content">
            <h3>Marines del Caos</h3>
            <button class="caos-card-btn" onclick="abrirPanelCaos(event)"aria-expanded="false" >+</button>
            <p>Los Marines Espaciales del Caos son Astartes traidores que se rebelaron contra el Imperio del Hombre hace 
                más de 10.000 años durante la Herejía de Horus, siguiendo al Primarca Horus en su intento de derrocar al 
                Emperador.</p>
          </div>
          <div class="caos-panel-card">
    </div>
        </div>

        <div class="caos-card" onclick="abrirPanel('demonios')">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/demonios.png" alt="Demonios del Caos" loading="lazy">
        <div class="caos-card-content">
          <h3>Demonios del Caos</h3>
          <button class="caos-card-btn" onclick="abrirPanelCaos(event)"aria-expanded="false">+</button>
          <p>
            Los Demonios del Caos en Warhammer 40,000 son entidades sobrenaturales 
            nacidas del Inmaterium (Warp), la dimensión psíquica que refleja las 
            emociones y pensamientos de los seres vivos. No son criaturas físicas: 
            existen como manifestaciones puras de emociones extremas, moldeadas por 
            los Cuatro Dioses del Caos.
          </p>
        </div>
      </div>


        <div class="caos-card" onclick="abrirPanel('death')">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/death.jpg" alt="Death Guard" loading="lazy">
          <div class="caos-card-content">
            <h3>Death Guard</h3>
            <button class="caos-card-btn" onclick="abrirPanelCaos(event)"aria-expanded="false">+</button>
            <p>
              La Death Guard es una Legión de Marines Espaciales del Caos dedicada al Dios del Caos Nurgle, el Señor de la Plaga. 
              Originalmente conocida como la XIV Legión de Marines Espaciales del Imperio, la Death Guard fue traicionada durante 
              la Herejía de Horus y se convirtió en seguidores devotos de Nurgle.
            </p>
          </div>
        </div>

        <div class="caos-card" onclick="abrirPanel('mil')">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mil-hijos.webp" alt="Mil Hijos" loading="lazy">
          <div class="caos-card-content">
            <h3>Mil Hijos</h3>
            <button class="caos-card-btn" onclick="abrirPanelCaos(event)"aria-expanded="false" >+</button>
            <p>
              Los Mil Hijos son una Legión de Marines Espaciales del Caos dedicada al Dios del Caos Tzeentch, el Señor del Cambio. 
              Originalmente conocida como la XV Legión de Marines Espaciales del Imperio, los Mil Hijos fueron traicionados durante 
              la Herejía de Horus y se convirtieron en seguidores devotos de Tzeentch.
            </p>
          </div>
        </div>

        <div class="caos-card" onclick="abrirPanel('caballeros')">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/caballeros.webp" alt="Caballeros del Caos" loading="lazy">
          <div class="caos-card-content">
            <h3>Caballeros del Caos</h3>
            <button class="caos-card-btn" onclick="abrirPanelCaos(event)"aria-expanded="false" >+</button>
            <p>
              Los Caballeros del Caos son versiones corrompidas de los Caballeros Imperiales, enormes máquinas de guerra pilotadas 
              por nobles guerreros. Estos caballeros han sido seducidos por las fuerzas del Caos y ahora sirven a los Dioses del 
              Caos, luchando contra el Imperio del Hombre y sus aliados.
            </p>
          </div>
        </div>

      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>