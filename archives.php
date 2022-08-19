<?php
/*
Template Name: Archives
*/
get_header(); ?>

<div id="container">
	<div id="content" role="main">

		<?php the_post(); ?>
		<h1 class="entry-title">Equipe WebLaudo</h1>

		<!-- <?php get_search_form(); ?> -->

		<h2>Testando o retorno</h2>
			<?php
			$args = array(
				'post_type'   => 'equipe',
				'order'       => 'ASC',
				'orderby'     => 'title'
			);
			$equipe = get_posts($args);

			if ($equipe) : ?>
				<ul>
					<?php foreach ($equipe as $colaborador) : setup_postdata($colaborador); ?>
						<li>
							<div>
								
								<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							</div>
						</li>
					<?php endforeach;
					wp_reset_postdata(); ?>
				</ul>
			<?php endif; ?>

	</div><!-- #content -->
</div><!-- #container -->

<!-- <?php get_sidebar(); ?> -->
<?php get_footer(); ?>