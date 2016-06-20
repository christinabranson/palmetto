<?php
/**
 * The template part for displaying single posts
 *
 * @package WordPress
 * @subpackage Real Estate
 * @since Real Estate 0.1
 */
?>

<?php
	$thumb_id = get_post_thumbnail_id();
	$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
	$thumb_url = $thumb_url_array[0];

	if ($thumb_url && strpos($thumb_url,'default') === false) { ?>
		<header class="front-page" style="background-image: url('<?php echo $thumb_url; ?>')";>
			<div class="featured-property">
				<div class="row">
					
				</div>
			</div>
		</header>

<?php		
	}
 ?>
 
<div class="row">
	<div class="large-8 columns" id="blog" itemscope itemtype ="http://schema.org/BlogPost">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php the_title( '<h1 class="entry-title" itemprop="headline">', '</h1>' ); ?>

			<?php foundation_entry_meta(); ?>

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
				foundation_pagination();
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