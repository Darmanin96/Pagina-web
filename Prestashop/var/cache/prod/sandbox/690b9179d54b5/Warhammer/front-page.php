<?php get_header(); ?>

<section class="hero">
  <div class="hero-content">
    <h1>Chronicles of Warhammer</h1>
    <p>Donde las leyendas del Imperio cobran vida.</p>
    <a href="/blog" class="btn">Explorar crónicas</a>
  </div>
</section>

<section class="ultimas-cronicas">
  <h2>Últimas Crónicas</h2>
  <div class="posts">
    <?php
    $posts = new WP_Query(['posts_per_page' => 3]);
    while($posts->have_posts()): $posts->the_post(); ?>
      <article class="post">
        <a href="<?php the_permalink(); ?>">
          <h3><?php the_title(); ?></h3>
          <p><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
        </a>
      </article>
    <?php endwhile; wp_reset_postdata(); ?>
  </div>
</section>

<section class="galeria">
  <h2>Galería de Miniaturas</h2>
  <div class="grid">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mini1.jpg" alt="Miniatura 1">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mini2.jpg" alt="Miniatura 2">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mini3.jpg" alt="Miniatura 3">
  </div>
</section>

<?php get_footer(); ?>
