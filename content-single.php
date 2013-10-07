<?php
/**
 * @package Gov.WP
 */

$published_date = get_the_date();
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
		<div class="entry-meta">
			<?php if ( 'post' == get_post_type() ) : ?>
				<dl class="clear">
					<dt>Published: </dt>
					<dd><?php govdotwp_posted_on(); ?></dd>
					<dt>Author: </dt>
					<dd><?php the_author(); ?></dd>
				</dl>
			<?php endif; ?>
		</div>
	</header><!-- .entry-header -->

	<?php // if ( has_excerpt() ) : ?>
		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div>
	<?php // endif; ?>

	<?php if ( has_post_thumbnail() ) : ?>
		<div class="entry-thumbnail">
			<?php the_post_thumbnail(); ?>
		</div>
	<?php endif; ?>

	<div class="entry-content">
		<?php
		wp_link_pages( array(
			'before'           => '<div class="page-links-number">',
			'after'            => '</div>',
			'link_before'      => '<span class="page-link">',
			'link_after'       => '</span>',
			'next_or_number'   => 'number',
			'pagelink'         => 'Page %',
		) );
		?>

		<?php the_content(); ?>

		<?php
		wp_link_pages( array(
			'before'           => '<div class="page-links-next">',
			'after'            => '</div>',
			'link_before'      => '<span class="page-link">',
			'link_after'       => '</span>',
			'next_or_number'   => 'next',
			'nextpagelink'     => __('Next'),
			'previouspagelink' => __('Previous'),
		) );
		?>

	</div><!-- .entry-content -->

<!-- 	<aside class="entry-meta">
		<section class="entry-tags">
			<?php
				if( get_the_tag_list() ) {
					echo '<h3 class="widget-title">Tags</h3>';
				    echo get_the_tag_list( '<ul class="post-tags"><li>', '</li><li>', '</li></ul>' );
				}
			?>
		</section>
		<section class="entry-categories">
			<?php
				if( get_the_category_list() ) {
					echo '<h3 class="widget-title">Categories</h3>';
				    echo get_the_category_list();
				}
	//			$category_list = get_the_category_list( __( ', ', 'govdotwp' ) );
			?>
		</section>
	</aside><!-/- .entry-meta -/->-->


	<footer class="entry-meta">
		<div class="entry-status">
			<dl>
				<dt>Published: </dt>
				<dd><?php govdotwp_posted_on(); ?></dd>
			</dl>
		</div>
		<div class="entry-terms">
			<dl>
				<?php
					if ( get_the_category_list() ) {
						echo '<dt>Categories:</dt>';
					    echo '<dd>' . get_the_category_list( __( ', ', 'govdotwp' ) ) . '</dd>';
					}
				?>
				<?php
					if ( get_the_tag_list() ) {
						echo '<dt>Tags: </dt>';
					    echo '<dd>' . get_the_tag_list(  '', __( ', ', 'govdotwp' ) ) . '</dd>';
					}
				?>
				<dt>Author: </dt>
				<dd><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author_meta( 'display_name' ); ?></a></dd>
			</dl>
		</div><!-- .entry-terms -->
	</footer>
</article><!-- #post-## -->
