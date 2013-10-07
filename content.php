<?php
/**
 * @package Gov.WP
 */

$published_date = get_the_date();
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
	<div class="entry-meta">
		<?php if ( 'post' == get_post_type() ) : ?>
			<span><?php echo $published_date; ?></span>
			<?php
				if ( get_the_category_list() ) {
				    echo '<span>' . get_the_category_list( __( ', ', 'govdotwp' ) ) . '</span>';
				}
				?>
			<span><?php the_author(); ?></span>
		<?php endif; ?>


	</div>
</article><!-- #post-## -->
