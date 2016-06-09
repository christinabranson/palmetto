<?php
/**
 * The template part for displaying single posts
 *
 * @package WordPress
 * @subpackage Real Estate
 * @since Real Estate 0.1
 */
?>
<p>content single</p>
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
			
			<?php
			if ( is_singular( 'attachment' ) ) {
				// Parent post navigation.
				the_post_navigation( array(
					'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'foundation' ),
				) );
			} elseif ( is_singular( 'post' ) ) {
				// Previous/next post navigation.
				the_post_navigation( array(
					'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'foundation' ) . '</span> ' .
						'<span class="screen-reader-text">' . __( 'Next post:', 'foundation' ) . '</span> ' .
						'<span class="post-title">%title</span>',
					'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'foundation' ) . '</span> ' .
						'<span class="screen-reader-text">' . __( 'Previous post:', 'foundation' ) . '</span> ' .
						'<span class="post-title">%title</span>',
				) );
			}
			
			// If comments are open or we have at least one comment, load up the comment template.
			
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}
			?>

		</article><!-- #post-## -->
	</div> <!-- main panel -->
	<div class="large-4 columns">
		<?php get_sidebar(); ?>
	</div> <!-- sidebar panel -->
</div> <!-- row -->