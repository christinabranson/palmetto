<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Palmetto
 * @since Palmetto 0.1
 */

get_header(); ?>

<!-- Show featured image -->
<?php
	$featued_pre_text = get_theme_mod( 'featured_property_pre_text', '' );
	$featured_name = get_theme_mod( 'featured_property_property_header', '' );
	$featured_num_bedrooms = get_theme_mod( 'featured_property_number_bedrooms', '' );
	$featured_num_bathrooms = get_theme_mod( 'featured_property_number_bathrooms', '' );
	$featured_num_cars = get_theme_mod( 'featured_property_number_cars', '' );
	$featured_url = get_theme_mod( 'featured_property_listing_url', '' );

?>
<?php if ( has_header_image() ) { ?>
	<header class="front-page" style="background-image: url('<?php header_image(); ?>')";>
		<div class="featured-property">
			<div class="row">
			<span class="featured"><?php if ($featued_pre_text) { echo $featued_pre_text; } ?>
								   <?php if ($featured_name) { echo $featured_name; } ?></span><br/>
			<span class="featured-sub">
				<?php if ($featured_num_bedrooms) { ?><i class="fa fa-bed"></i> <?php echo $featured_num_bedrooms; ?> Bedrooms | <?php } ?>
				<?php if ($featured_num_bathrooms) { ?><i class="fa fa-fire-extinguisher icon-rotate-90"></i> <?php echo $featured_num_bathrooms; ?> Bathrooms | <?php } ?>
				<?php if ($featured_num_cars) { ?><i class="fa fa-car"></i> <?php echo $featured_num_cars; ?> Car | <?php } ?>
				<?php if ($featured_url) { ?><a href="<?php echo $featured_url; ?>">View Listing</a></span> <?php } ?>
			</div>
		</div>
	</header>
<?php } ?>

<div class="row">
	<div class="large-8 columns">
		<h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'foundation' ); ?></h1>
			<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'foundation' ); ?></p>
			<?php get_search_form(); ?>
	</div><!-- .content-area -->
	<div class="large-4 columns">
		<?php get_sidebar( 'page' ); ?>
	</div>
</div> <!-- row -->

<?php get_footer(); ?>