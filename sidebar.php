<?php
/**
 * The template for the sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Palmetto
 * @since Palmetto 0.1
 */
?>

<?php if ( is_active_sidebar( 'sidebar-1' )  ) : ?>
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
<?php endif; ?>