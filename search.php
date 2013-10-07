<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package Gov.WP
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<header class="page-header">
				<h1 class="page-title"><?php printf( __( 'Search Results for', 'govdotwp' ), '<span>' . get_search_query() . '</span>' ); ?></h1>

				<?php get_search_form(); ?>

			</header><!-- .page-header -->

		<?php if ( have_posts() ) : ?>


			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'search' ); ?>

			<?php endwhile; ?>

			<?php govdotwp_content_nav( 'nav-below' ); ?>

		<?php else : ?>

			<h1><?php printf( __( 'Nothing found for "%s"', 'govdotwp' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			<p><?php _e( 'Please try: Searching again using different words; Browsing from the home page; Visiting the help pages if you need more assistance.', 'govdotwp' ); ?></p>


			<?php // get_template_part( 'no-results', 'search' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->


<?php get_footer(); ?>