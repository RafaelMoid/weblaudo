<?php get_header(); ?>

<section class="container-banner-contato">
  <div class="banner-title">
    <h1><a href="<?php the_permalink(); ?>" ?></a><?php the_title(); ?></h1>
  </div>
</section>
<div class="content-blog-container">
  <section>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <article>
          <img src="<?php echo get_the_post_thumbnail_url() ?>" />
          <h2><a href="<?php the_permalink(); ?>" ?></a><?php the_title(); ?></h2>
        </article>
      <?php endwhile; ?>

      <div class="nav-blod">
        <?php next_posts_link('Posts Antigos'); ?>
        <?php previous_posts_link('Posts Novos'); ?>
      </div>

    <?php else : endif; ?>

  </section>
  <aside>
    <div>
      <h4>Categorias</h4>
      <ul class="categorias-lista">
        <?php wp_list_categories(array(
          'title_li' => ''
        )); ?>
      </ul>
    </div>
    <div>
      <h4>Mais vistas</h4>
      <ul class="categorias-lista">

        <?php $args = array(
          'numberposts' => 2,
          'posts_per_page' => '2',
        );

        $the_query = new WP_Query($args); ?>

        <?php if (have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
          <?php endwhile;
        else : ?>
          <p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>
        <?php endif; ?>
      </ul>
    </div>
  </aside>
</div>

<?php get_footer(); ?>