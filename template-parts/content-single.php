<?php
/**
 * The template part for displaying single posts
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<div class="row" id="blog">
	<div class="large-8 columns"  itemscope itemtype ="http://schema.org/BlogPost">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php the_title( '<h1 class="entry-title" itemprop="headline">', '</h1>' ); ?>

			<?php foundation_entry_meta(); ?>

			<?php foundation_excerpt(); ?>

			<div itemprop="articleBody">
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


			?>
			</div>

		</article><!-- #post-## -->
	</div>
	<div class="large-4 columns">
		<?php get_sidebar(); ?>
	</div>
</div>