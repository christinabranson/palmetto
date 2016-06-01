<?php
/**
 * The template for the content bottom widget areas on posts and pages
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

if ( ! is_active_sidebar( 'sidebar-listing' ) ) {
	return;
}

// If we get this far, we have widgets. Let's do this.
?>
<aside id="content-bottom-widgets" class="content-bottom-widgets" role="complementary">
	<?php if ( is_active_sidebar( 'sidebar-listing' ) ) : ?>
		<div class="widget-area">
			<?php dynamic_sidebar( 'sidebar-listing' ); ?>
		</div><!-- .widget-area -->
	<?php endif; ?>
</aside><!-- .content-bottom-widgets -->
