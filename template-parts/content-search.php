<?php
/**
 * The template part for displaying results in search pages
 *
 * @package WordPress
 * @subpackage Palmetto
 * @since Palmetto 0.1
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
	<?php if ( 'post' === get_post_type() ) : ?>
		<?php foundation_entry_meta(); ?>
	<?php else : ?>
		<?php foundation_meta_edit(); ?>
	<?php endif; ?>

	<?php foundation_post_thumbnail(); ?>

	<?php foundation_excerpt(); ?>


</article><!-- #post-## -->
