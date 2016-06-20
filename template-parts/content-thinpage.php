<?php
/**
 * The template used for displaying page content with a sidebar. Page also has a full-width featured image in the header.
 *
 * @package WordPress
 * @subpackage Palmetto
 * @since Palmetto 0.1
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

<section id="post">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="row">
			<div class="large-10 large-offset-1 columns">
				<div class="panel pagepanel">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				<?php foundation_meta_edit(); ?>
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
				<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				} ?>
				</div><!-- .entry-content -->
				</div>
		</div> <!-- row -->
	</article> <!-- article -->
</section> <!-- section -->