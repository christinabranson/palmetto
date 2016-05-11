<?php
/**
 * The template for the sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<p>sidebar.php</p>
<?php if ( is_active_sidebar( 'sidebar-1' )  ) : ?>
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
<?php endif; ?>
<p>/sidebar.php</p>