<?php // Template Name: Equipe 
?>

<?php get_header(); ?>
<main class="equipe">
  <div class="posts-container">
    <div class="content-equipe-container">
      <section class="container-banner-equipe">
        <div class="banner-title">
          <h1>Equipe WebLaudo</h1>
        </div>
        <div class="banner-equipe">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bg-equipe.jpg" alt="">
          <h1>Um time exclusivo de alto padrão para lhe atender</h1>
        </div>
      </section>
      <section class="equipe-content">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article class="content-blog-article">
              <img class="thumb-post-banco" src="<?php the_field('foto') ?>" />
              <h2 class="thumb-title-banco">
                <a href="<?php the_permalink(); ?>" ?><?php the_title(); ?></a>
              </h2>
              <h6 class="excerpt-banco"><?php the_excerpt(); ?></h6>
              <h6 class="saiba-mais-banco">
                <a class="saiba-mais-banco-a" href="<?php the_permalink(); ?>" ?>SAIBA MAIS</a>
              </h6>
            </article>
          <?php endwhile; ?>
        <?php else : endif; ?>
      </section>
    </div>
  </div>
</main>
<?php get_footer(); ?>