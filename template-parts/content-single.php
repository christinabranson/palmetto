<?php
/**
 * The template part for displaying single posts
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<div class="row">
<div class="large-10 columns">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

	<div class="meta">
		<?php foundation_entry_meta(); ?>

	</div><!-- .entry-meta-->

	<?php foundation_excerpt(); ?>

	<?php foundation_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
			the_content();

			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'foundation' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'foundation' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );

			if ( '' !== get_the_author_meta( 'description' ) ) {
				get_template_part( 'template-parts/biography' );
			}
		?>
	</div><!-- .entry-content -->



</article><!-- #post-## -->
</div>

<div class="large-2 columns">
<?php get_sidebar(); ?>
</div>
</div>