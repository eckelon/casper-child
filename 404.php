<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package Casper
 */

get_header();
?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found hentry">
				<header class="page-header">
					<h2 class="entry-title"><?php _e( 'Ups! P&aacute;gina no encontrada :(', 'casper' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<img class="alignright" src="<?php echo get_template_directory_uri(); ?>/img/404-ghost@2x.png" width="96" height="150">
					<p><?php _e( 'No se ha encontrado lo que buscabas, ¡pero aún puedes usar el buscador!', 'casper'); ?></p>

					<p><?php get_search_form(); ?></p>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
