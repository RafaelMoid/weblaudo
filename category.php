<?php get_header(); ?>

<section class="container-banner-contato">
  <div class="banner-title">
    <h1><?php single_cat_title( $prefix = '', $display = true ); ?></h1>
  </div>
</section>
<section>
    <?php if (have_posts()) : while ( have_posts() ) : the_post(); ?>

      <article>
        <img src="<?php echo get_the_post_thumbnail_url() ?>" />
        <h2><a href="<?php the_permalink(); ?>" ?></a><?php the_title(); ?></h2>
      </article>
    <?php endwhile; ?>

    <div class="nav-blod">
      <?php next_posts_link('Posts Antigos'); ?>
      <?php previous_posts_link('Posts Novos'); ?>
    </div>

    <?php else: endif; ?>

  </section>

<?php get_footer(); ?>