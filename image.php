<?php
/**
 * The template for displaying image attachments
 *
 * @package WordPress
 * @subpackage Palmetto
 * @since Palmetto 0.1
 */

get_header(); ?>

<div class="row">
	<div class="large-8 columns" id="blog" itemscope itemtype ="http://schema.org/BlogPost">
			<?php
				// Start the loop.
				while ( have_posts() ) : the_post();
			?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<nav id="image-navigation" class="navigation image-navigation">
						<div class="nav-links">
							<div class="nav-previous"><?php previous_image_link( false, __( 'Previous Image', 'foundation' ) ); ?></div>
							<div class="nav-next"><?php next_image_link( false, __( 'Next Image', 'foundation' ) ); ?></div>
						</div><!-- .nav-links -->
					</nav><!-- .image-navigation -->

					<?php the_title( '<h1>', '</h1>' ); ?>
					<?php foundation_entry_meta(); ?>

					<div class="entry-content">

						<figure>
							<?php
								$image_size = apply_filters( 'foundation_attachment_size', 'large' );
								echo wp_get_attachment_image( get_the_ID(), $image_size );
							?>
							<?php foundation_excerpt( 'entry-caption' ); ?>
						</figure><!-- .entry-attachment -->

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
				</article><!-- #post-## -->

				<?php
				
					// Parent post navigation.
					the_post_navigation( array(
						'prev_text' => _x( '<span class="meta-nav">Published in: </span><span class="post-title">%title</span>', 'Parent post link', 'foundation' ),
					) );
					
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}

				// End the loop.
				endwhile;
			?>

	</div><!-- .content-area -->
	<div class="large-4 columns">
		<?php get_sidebar(); ?>
	</div>
</div>
	
<?php get_footer(); ?>
