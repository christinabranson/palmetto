<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Real Estate
 * @since Twenty Real Estate 0.1
 */

/* Get Custom Fields For Image Slider */
$images = array();
for ($i=1; $i <= 10; $i++) {
	$name = 'gallery_image_'.$i;
	if ( get_field($name) ) {
		$images[] = get_field($name);
	}
}
//var_dump($images);
?>

<section id="listing">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<div class="row">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				<?php foundation_meta_edit(); ?>
		</div>
		<div class="row">
		<div class="large-8 columns">
<?php if ($images) { ?>
<div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit>
  <ul class="orbit-container">
    <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
    <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
	<?php foreach ($images as $image) { ?>
    		<li class="is-active orbit-slide">
      			<img class="orbit-image" src="<?php echo $image['url']; ?>" alt="Space">
			<figcaption class="orbit-caption"><?php echo $image['caption']; ?></figcaption>
    		</li>		
	<?php } ?>
  </ul>
</div>
</>
<?php } ?>
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
			<div class="large-4 columns" style="background: #fff; padding: 20px;">
					<h3>Property Information</h3>
					<?php if ( get_field('monthly_rent') ) { ?>
						<p><i class="fa fa-dollar"></i> <?php echo get_field('monthly_rent'); ?> Per Month</p>
					<?php } ?>

					<?php if ( get_field('availability') ) { ?>
						<p><i class="fa fa-calendar"></i> <?php echo get_field('availability'); ?></p>
					<?php } ?>

					<?php if ( get_field('number_of_bedrooms') ) { ?>
						<p><i class="fa fa-bed"></i> <?php echo get_field('number_of_bedrooms'); ?> Bedrooms</p>
					<?php } ?>

					<?php if ( get_field('number_of_bathrooms') ) { ?>
						<p><i class="fa fa-fire-extinguisher icon-rotate-90"></i> <?php echo get_field('number_of_bedrooms'); ?> Bathrooms</p>
					<?php } ?>

					<?php if ( get_field('number_of_cars') ) { ?>
						<p><i class="fa fa-car"></i> <?php echo get_field('number_of_cars'); ?> Cars</p>
					<?php } ?>

					<a class="button text-center float-center" href="">Contact Us For Info</a>
			</div>
		</div>
	</article><!-- #post-## -->
</section>