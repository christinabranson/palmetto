<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Real Estate
 * @since Twenty Real Estate 0.1
 */
?>
<section id="post">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="row">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				<?php foundation_meta_edit(); ?>
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
					?>
				</div><!-- .entry-content -->
		</div> <!-- row -->
	</article> <!-- article -->
</section> <!-- section -->