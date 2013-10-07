<?php
/**
 * The template for a static front page.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Gov.WP
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					// if ( comments_open() || '0' != get_comments_number() )
						// comments_template();
				?>

			<?php endwhile; // end of the loop. ?>






			<section class="category-list">
				<h1 class="page-title">Services and information</h1>
				<?php
				$args = array(
					'type'         => 'post',
					'child_of'     => 0,
					'parent'       => 0,
					'orderby'      => 'count',
					'order'        => 'DESC',
					'hide_empty'   => 1,
					'hierarchical' => 1,
					'exclude'      => '',
					'include'      => '',
					'number'       => '',
					'taxonomy'     => 'category',
					'pad_counts'   => 1,
					'depth' => 1,
				);
				$categories = get_categories( $args );
				// if ( $categories ) :
				// 	foreach( $categories as $category ) :
				// 		echo '<article class="category">';
				// 		echo '<header class="entry-header"><h1 class="entry-title"><a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '">' . $category->name . '</a></h1></header>';
				// 		if ( $category->description ) :
				// 			echo '<div class="entry-summary"><p>'. $category->description . '</p></div>';
				// 		endif;
				// 		echo '</article>';
				// 	endforeach;
				// endif;
				?>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>