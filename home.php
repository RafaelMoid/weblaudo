<?php get_header(); ?>

<main class="home">
  <div class="posts-container">
    <section class="container-banner-contato">
      <div class="banner-title">
        <h1>Banco de Casos</h1>
      </div>
    </section>
    <div class="content-blog-container">
      <!-- SESSÃO DE CONTEUDO -->
      <section class="content-blog-section">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <article class="content-blog-article">
              <img class="thumb-post-banco" src="<?php echo get_the_post_thumbnail_url() ?>" />
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
        <div class="nav-pagination-wrapper">
          <nav class="pagination"><?php echo paginate_links(); ?></nav>
        </div>
      </section>
      <!-- SESSÃO LATERAL DE NAVEGAÇÃO -->
      <aside class="aside-container">
        <div>
          <div>
            <h4>CASOS POR PROFISSIONAIS</h4>
            <div class="linha-aside"></div>
            <ul class="categorias-lista">
              <li>
                <?php wp_list_categories(array(
                  'title_li' => ''
                )); ?>
              </li>
            </ul>
          </div>
          <div class="mais-vistas-container">
            <h4 class="h4-aside-config">MAIS VISTAS</h4>
            <ul class="categorias-lista-2">
              <li class="li-lista-2">
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
              </li>
            </ul>
          </div>
        </div>
      </aside>
    </div>
  </div>
</main>


<?php get_footer(); ?>