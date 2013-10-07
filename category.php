<?php
/**
 * The template for displaying Category pages.
 *
 * @package Gov.WP
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">


		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php single_cat_title(); ?></h1>
				<?php
					// Show an optional term description.
					$term_description = term_description();
					if ( ! empty( $term_description ) ) :
						printf( '<div class="taxonomy-description">%s</div>', $term_description );
					endif;
				?>
			</header><!-- .page-header -->

			<?php
			$term = get_queried_object();
			$children = get_terms( $term->taxonomy, array(
				'parent' => $term->term_id,
				'hide_empty' => false
			) );
			// print_r($children); // uncomment to examine for debugging
			if( $children ) :
			    // Yep, the term has children
				$args = array(
					'type'         => 'post',
					'child_of'     => $term->term_id,
					'parent'       => $term->term_id,
					'orderby'      => 'name',
					'order'        => 'ASC',
					'hide_empty'   => 0,
					'hierarchical' => 1,
					'exclude'      => '',
					'include'      => '',
					'number'       => '',
					'taxonomy'     => 'category',
					'pad_counts'   => false
				);
				$categories = get_categories( $args );
				if ( $categories ) :
					foreach( $categories as $category ) :
						echo '<article class="category">';
						echo '<header class="entry-header"><h1 class="entry-title"><a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '">' . $category->name . '</a></h1></header>';
						if ( $category->description ) :
							echo '<div class="entry-summary"><p>'. $category->description . '</p></div>';
						endif;
						echo '</article>';
					endforeach;
				endif; ?>

				<h2 class="section-title">Articles</h2>
<?php
//			else :
			endif; ?>
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php
						/* Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'content', get_post_format() );
					?>

				<?php endwhile; ?>

				<?php govdotwp_content_nav( 'nav-below' ); ?>

			<?php // endif; ?>

		<?php else : ?>

			<?php get_template_part( 'no-results', 'archive' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
