<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Palmetto
 * @since Palmetto 0.1
 */

/* Get Custom Fields For Image Slider */
$images = array();
for ($i=1; $i <= 20; $i++) {
	$name = 'gallery_image_'.$i;
	if ( get_field($name) ) {
		$images[] = get_field($name);
	}
}
?>

<section id="listing" itemscope itemtype ="http://schema.org/Residence">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<div class="row">
				<?php the_title( '<h1 class="entry-title" itemprop="name">', '</h1>' ); ?>
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
      			<img class="orbit-image" src="<?php echo $image['url']; ?>" alt="<?php echo $image['caption']; ?>" itemprop="image">
				<figcaption class="orbit-caption"><?php echo $image['caption']; ?></figcaption>
    		</li>		
	<?php } ?>
  </ul>
</div>
</>
<?php } ?>
				<!-- Don't show featured image -->
				<?php //foundation_post_thumbnail(); ?>
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
				<div class="panel">
					<h3>Property Information</h3>
					<?php if ( get_field('monthly_rent') ) { ?>
						<div itemscope itemtype ="http://schema.org/Offer">
						<p><i class="fa fa-home"></i> <span itemprop="name"><?php echo get_field('monthly_rent'); ?> Per Month</p></span>
						
					<?php } ?>

					<?php if ( get_field('availability') ) { ?>
						<p><i class="fa fa-calendar"></i> <span itemprop="availability"><?php echo get_field('availability'); ?></p></span>
						</div>
					<?php } ?>

					<?php if ( get_field('number_of_bedrooms') ) { ?>
						<p><i class="fa fa-bed"></i> <?php echo get_field('number_of_bedrooms'); ?> Bedrooms</p>
					<?php } ?>

					<?php if ( get_field('number_of_bathrooms') ) { ?>
						<p><i class="fa fa-shower"></i> <?php echo get_field('number_of_bathrooms'); ?> Bathrooms</p>
					<?php } ?>

					<?php if ( get_field('number_of_cars') ) { ?>
						<p><i class="fa fa-car"></i> <?php echo get_field('number_of_cars'); ?> Cars</p>
					<?php } ?>
				</div>
				
				<div class="panel" style="margin-top: 20px;">
					<h3>Contact Us</h3>
					<?php if ( get_field('contact_link') ) { ?>
						<a class="button text-center float-center" href="<?php echo get_field('contact_link'); ?>">Contact Us For Info</a><br/>
					<?php } ?>
					
					<!--- PHONE NUMBER -->
					<?php
						$phone = get_theme_mod( 'phone_number', '' );
						if ($phone) { ?>
							<i class="fa fa-phone"></i> <?php echo $phone; ?> <br/>
						<?php } ?> 
					<!--- EMAIL ADDRESS -->
					<?php
						$email = get_theme_mod( 'email_address', '' );
						if ($email) { ?>
							<i class="fa fa-envelope-o"></i> <?php echo $email; ?> <br/>
					<?php } ?>
				</div>
				
				<div class="panel" style="margin-top: 20px;">
					<h3>Searh More Properties</h3>
					<?php get_search_form(); ?>
				</div>
			</div>
		</div>
	</article><!-- #post-## -->
</section>