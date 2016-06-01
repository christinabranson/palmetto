<?php
/**
 * The template for the content bottom widget areas on posts and pages
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

if ( ! is_active_sidebar( 'sidebar-page' )  ) {
	return;
}

// If we get this far, we have widgets. Let's do this.
?>
	<?php if ( is_active_sidebar( 'sidebar-page' ) ) : ?>
			<?php dynamic_sidebar( 'sidebar-page' ); ?>
	<?php endif; ?>
