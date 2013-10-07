<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package Gov.WP
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php _e( 'This page cannot be found', 'govdotwp' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php _e( 'Please check that you have entered the correct web address, or try using the search box or links below to find the information you need.', 'govdotwp' ); ?></p>

					<h2>What were you trying to find</h2>
					<?php get_search_form(); ?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>