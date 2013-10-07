<?php
/**
 * The Sidebar containing the footer widget areas.
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
		if ( ! is_active_sidebar( 'sidebar-4' ) && ! is_active_sidebar( 'sidebar-5' ) && ! is_active_sidebar( 'sidebar-6' ) )
			return;
		// If we get this far, we have widgets. Let do this.
	?>
	<div <?php govdotwp_footer_widget_class(); ?>>
		<div class="clear site-footer-links">

		<?php if ( is_active_sidebar( 'sidebar-4' ) ) : ?>

			<div id="fourth-widget-area" class="widget-area">
				<?php dynamic_sidebar( 'sidebar-4' ); ?>
			</div>

		<?php endif; ?>

		<?php if ( is_active_sidebar( 'sidebar-5' ) ) : ?>

			<div id="fifth-widget-area" class="widget-area">
				<?php dynamic_sidebar( 'sidebar-5' ); ?>
			</div>

		<?php endif; ?>

		<?php if ( is_active_sidebar( 'sidebar-6' ) ) : ?>

			<div id="sixth-widget-area" class="widget-area">
				<?php dynamic_sidebar( 'sidebar-6' ); ?>
			</div>

		<?php endif; ?>

		</div>
	</div>