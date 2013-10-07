<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package Gov.WP
 */
?>

<?php
	/* The footer widget area is triggered if any of the areas
	 * have widgets. So let's check that first.
	 *
	 * If none of the sidebars have widgets, then let's bail early.
	 */
	if (   ! is_active_sidebar( 'sidebar-1'  )
		&& ! is_active_sidebar( 'sidebar-2' )
		&& ! is_active_sidebar( 'sidebar-3'  )
	)
		return;
	// If we get this far, we have widgets. Let do this.
?>
<div id="secondary" <?php govdotwp_sidebar_widget_class(); ?> role="complementary">
	<div class="clear">
	<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>

		<div id="first-widget-area" class="widget-area">
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
		</div>

	<?php endif; ?>

	<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>

		<div id="second-widget-area" class="widget-area">
			<?php dynamic_sidebar( 'sidebar-2' ); ?>
		</div><!-- #second .widget-area -->

	<?php endif; ?>

	<?php if ( is_active_sidebar( 'sidebar-3' ) ) : ?>
		<div id="third-widget-area" class="widget-area">
			<?php dynamic_sidebar( 'sidebar-3' ); ?>
		</div><!-- #third .widget-area -->
	<?php endif; ?>
	</div>
</div>