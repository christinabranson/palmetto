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

		<?php
			$thumb_id = get_post_thumbnail_id();
			$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
			$thumb_url = $thumb_url_array[0];
		?>

		<?php if ( $thumb_url && !strpos($thumb_url, 'wp-includes') ) { ?>
		<header class="entry-header" style="background-image: url('<?php echo $thumb_url; ?>');">
			<?php //the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</header><!-- .entry-header -->
		<?php } ?>

		<div class="row">
			<div class="large-8 columns">
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

			</div>
			<div class="large-4 columns">
				<?php get_sidebar( 'page' ); ?>
			</div>
		</div>
	</article><!-- #post-## -->
</section>