<?php
/**
 * The template for displaying search forms in Gov.WP
 *
 * @package Gov.WP
 */
?>
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text"><?php _ex( 'Search for:', 'label', 'govdotwp' ); ?></span>
		<input type="search" class="search-field" placeholder="Search <?php echo bloginfo( 'name' ); ?><?php // echo esc_attr_x( 'Search &hellip;', 'placeholder', 'govdotwp' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s">
	</label>
	<input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'govdotwp' ); ?>">
</form>
