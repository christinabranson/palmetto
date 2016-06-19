<?php
/**
 * The template part for displaying content
 *
 * @package WordPress
 * @subpackage Palmetto
 * @since Palmetto 0.1
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>  itemscope itemtype ="http://schema.org/BlogPost">

		<?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
			<span class="sticky-post"><?php _e( 'Featured', 'foundation' ); ?></span>
		<?php endif; ?>

		<?php the_title( sprintf( '<h2 class="entry-title"  itemprop="headline"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

	<?php foundation_entry_meta(); ?>

	<?php foundation_excerpt(); ?>

	<?php foundation_post_thumbnail(); ?>

	<div class="entry-content" itemprop="articleBody">
		<?php
			/* translators: %s: Name of current post */
			the_content( sprintf(
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'foundation' ),
				get_the_title()
			) );

			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'foundation' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'foundation' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );
		?>
	</div><!-- .entry-content -->

</article><!-- #post-## -->