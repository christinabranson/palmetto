<?php
/**
 * The template for the content bottom widget areas on posts and pages
 *
 * @package WordPress
 * @subpackage Palmetto
 * @since Palmetto 0.1
 */
if ( ! is_active_sidebar( 'sidebar-2' ) && ! is_active_sidebar( 'sidebar-3' )  && ! is_active_sidebar( 'sidebar-4' ) ) {
	return;
}
// If we get this far, we have widgets. Let's do this.
?>
<div class="row medium-unstack">
	<div class="large-4 columns">
	<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
			<?php dynamic_sidebar( 'sidebar-2' ); ?>
	<?php endif; ?>
	</div>
	<div class="large-4 columns">
	<?php if ( is_active_sidebar( 'sidebar-3' ) ) : ?>
			<?php dynamic_sidebar( 'sidebar-3' ); ?>
	<?php endif; ?>
	</div>
	<div class="large-4 columns">
	<?php if ( is_active_sidebar( 'sidebar-4' ) ) : ?>
			<?php dynamic_sidebar( 'sidebar-4' ); ?>
	<?php endif; ?>	
	</div>
</div>