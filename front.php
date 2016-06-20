<?php
/**
 * Template Name: Home Template 
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Palmetto
 * @since Palmetto 0.1
 */

get_header(); ?>


<!---- Three Pane Feature Functionality ---->
<section  id="featured_panels">
<div class="row" data-equalizer>
<!---- Three Pane Feature Functionality ---->
<?php
	$number_of_panes = get_theme_mod( 'number_of_panes', '' );
	
	$pane_header = array();
	$pane_header[] = get_theme_mod( 'pane_header_1', '' );	
	$pane_header[] = get_theme_mod( 'pane_header_2', '' );
	$pane_header[] = get_theme_mod( 'pane_header_3', '' );
	$pane_header[] = get_theme_mod( 'pane_header_4', '' );
	$pane_icon = array();
	$pane_icon[] = get_theme_mod( 'pane_icon_1', '' );	
	$pane_icon[] = get_theme_mod( 'pane_icon_2', '' );
	$pane_icon[] = get_theme_mod( 'pane_icon_3', '' );
	$pane_icon[] = get_theme_mod( 'pane_icon_4', '' );
	$pane_text = array();
	$pane_text[] = get_theme_mod( 'pane_text_1', '' );	
	$pane_text[] = get_theme_mod( 'pane_text_2', '' );
	$pane_text[] = get_theme_mod( 'pane_text_3', '' );
	$pane_text[] = get_theme_mod( 'pane_text_4', '' );
	if ($number_of_panes !== 0) {
		if ($number_of_panes == 1) { ?>
			<?php for ($i=0; $i < 1; $i++) { ?>
			<div class="large-8 columns large-offset-2">
        			<div class="panel" data-equalizer-watch>
					<h2 class="text-center"><i class="fa <?php echo $pane_icon[$i]; ?>"></i></h2>
					<h2 class="text-center"><?php echo $pane_header[$i]; ?></h2>
					<p><?php echo $pane_text[$i]; ?></p>
				</div>
			</div>
			<?php } ?>
		<?php } elseif ($number_of_panes == 2) { ?>
			<?php for ($i=0; $i < 2; $i++) { ?>
			<div class="large-6 columns">
        			<div class="panel" data-equalizer-watch>
					<h2 class="text-center"><i class="fa <?php echo $pane_icon[$i]; ?>"></i></h2>
					<h2 class="text-center"><?php echo $pane_header[$i]; ?></h2>
					<p><?php echo $pane_text[$i]; ?></p>
				</div>
			</div>
			<?php } ?>
		<?php } elseif ($number_of_panes == 3) { ?>
			<?php for ($i=0; $i < 3; $i++) { ?>
			<div class="large-4 columns">
        			<div class="panel" data-equalizer-watch>
					<h2 class="text-center"><i class="fa <?php echo $pane_icon[$i]; ?>"></i></h2>
					<h2 class="text-center"><?php echo $pane_header[$i]; ?></h2>
					<p><?php echo $pane_text[$i]; ?></p>
				</div>
			</div>
			<?php } ?>
		<?php } elseif ($number_of_panes == 4) { ?>
			<?php for ($i=0; $i < 4; $i++) { ?>
			<div class="large-3 columns">
        			<div class="panel" data-equalizer-watch>
					<h2 class="text-center"><i class="fa <?php echo $pane_icon[$i]; ?>"></i></h2>
					<h2 class="text-center"><?php echo $pane_header[$i]; ?></h2>
					<p><?php echo $pane_text[$i]; ?></p>
				</div>
			</div>
			<?php } ?>
		<?php }
	} ?>
</div>
</section> <!-- panel section -->



<!--- FRONT PAGE SECTION FOR SAMPLE OF LISTINGS -->
<?php
	$show_featured_listings= get_theme_mod( 'show_featured_listings', '1' );
	
	$featured_listing_title = array();
	$featured_listing_title[] = get_theme_mod( 'featured_listing_1_title', '' );	
	$featured_listing_title[] = get_theme_mod( 'featured_listing_2_title', '' );
	$featured_listing_title[] = get_theme_mod( 'featured_listing_3_title', '' );
	
	$featured_listing_url = array();
	$featured_listing_url[] = get_theme_mod( 'featured_listing_1_url', '' );
	$featured_listing_url[] = get_theme_mod( 'featured_listing_2_url', '' );
	$featured_listing_url[] = get_theme_mod( 'featured_listing_3_url', '' );
	
	$featured_listing_image = array();
	$featured_listing_image[] = get_theme_mod( 'featured_listing_1_image_url', '' );	
	$featured_listing_image[] = get_theme_mod( 'featured_listing_2_image_url', '' );
	$featured_listing_image[] = get_theme_mod( 'featured_listing_3_image_url', '' );
	
	$featured_listing_num_bedrooms = array();
	$featured_listing_num_bedrooms[] = get_theme_mod( 'featured_listing_1_num_bedrooms', '' );
	$featured_listing_num_bedrooms[] = get_theme_mod( 'featured_listing_2_num_bedrooms', '' );
	$featured_listing_num_bedrooms[] = get_theme_mod( 'featured_listing_3_num_bedrooms', '' );
	
	$featured_listing_num_bathrooms = array();
	$featured_listing_num_bathrooms[] = get_theme_mod( 'featured_listing_1_num_bathrooms', '' );
	$featured_listing_num_bathrooms[] = get_theme_mod( 'featured_listing_2_num_bathrooms', '' );
	$featured_listing_num_bathrooms[] = get_theme_mod( 'featured_listing_3_num_bathrooms', '' );
	
	$featured_listing_num_cars = array();
	$featured_listing_num_cars[] = get_theme_mod( 'featured_listing_1_num_cars', '' );
	$featured_listing_num_cars[] = get_theme_mod( 'featured_listing_2_num_cars', '' );
	$featured_listing_num_cars[] = get_theme_mod( 'featured_listing_3_num_cars', '' );
	
	$featured_listing_description = array();
	$featured_listing_description[] = get_theme_mod( 'featured_listing_1_description', '' );
	$featured_listing_description[] = get_theme_mod( 'featured_listing_2_description', '' );
	$featured_listing_description[] = get_theme_mod( 'featured_listing_3_description', '' );
	
	$listing_placeholder_image= get_theme_mod( 'listing_placeholder_image', '' );	

  if ($show_featured_listings) { ?>
  <section class="white-section">
    <div class="row white">
      <h2>Featured Listings</h2>
      <p>Some of our featured long-term home rentals. <a href="#">View all listings on our Homes For Rent page.</a></p>
    </div>
		<div class="row" data-equalizer>
			<?php for ($i = 0; $i <= 2; $i++) { ?>
			<div class="large-4 columns">&nbsp;
				<?php if ($featured_listing_title[$i]) { ?>
					<div class="listing-box" data-equalizer-watch>
						<div class="listing-image">
							<?php if ($featured_listing_image[$i]) { ?>
            					<img src="<?php echo $featured_listing_image[$i]; ?>" />
            				<?php } elseif ($listing_placeholder_image) { ?>
            					<img src="<?php echo $listing_placeholder_image; ?>" />
            				<?php } else { ?>
            					<p>Use the Wordpress customizer to upload a listing image or placeholder image.</p>
            				<?php } ?>
          				</div>
						<div class="listing-details">
            				<?php if ($featured_listing_num_bedrooms[$i]) { ?><i class="fa fa-bed"></i> <?php echo $featured_listing_num_bedrooms[$i]; ?> Bedrooms | <?php } ?>
							<?php if ($featured_listing_num_bathrooms[$i]) { ?><i class="fa fa-shower"></i> <?php echo $featured_listing_num_bathrooms[$i]; ?> Bathrooms | <?php } ?>
							<?php if ($featured_listing_num_cars[$i]) { ?><i class="fa fa-car"></i> <?php echo $featured_listing_num_cars[$i]; ?> Cars <?php } ?>
          					</div>
						<div class="listing-text">
            						<h4><a href="<?php echo $featured_listing_url[$i]; ?>"><?php echo $featured_listing_title[$i]; ?></a></h4>
            						<p><?php echo $featured_listing_description[$i]; ?></p><p class="text-center">
							<a class="button text-center" href="<?php echo $featured_listing_url[$i]; ?>">View Listing</a></p>
         				</div>
					</div>
				<?php } ?>
			</div>
			<?php } ?>
		</div>
	<?php } ?>
</section> <!-- listing section -->


<section id="blog">
<div class="row" data-equalizer>
<?php
 global $post;
 $myposts = get_posts('numberposts=3');
 $counter = 0;
 foreach($myposts as $post) :?>
 
 
 
 <?php 
	// Get thumbnail image if exists
	$thumb_id = get_post_thumbnail_id($post->ID);
	$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
	$thumb_url = $thumb_url_array[0];	
	
	$blog_placeholder_image= get_theme_mod( 'blog_placeholder_image', '' );
 ?>
 <div class="large-4 columns <?php if ( ($counter + 1) == sizeof($myposts)) { echo "end";} ?>">&nbsp;
 	<div class="listing-box" data-equalizer-watch>
 	<div class="listing-image">
 		<?php if ($thumb_url && strpos($thumb_url,'default') === false) { ?>
 			<img src="<?php the_post_thumbnail(); ?>" />
 		<?php } elseif ($blog_placeholder_image) { ?>
 			<img src="<?php echo $blog_placeholder_image; ?>" />
 		<?php } else { ?>
 			<p>Upload a featured image to this post or use the Wordpress customizer to add a blog placeholder image.</p>
 		<?php } ?>
 	</div>
 	<div class="listing-text">
 		<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
 		<?php the_content(); ?>
 		<a class="button text-center" href="<?php the_permalink(); ?>">View Post</a></p>
 	</div>
 </div>
 </div>
 <?php $counter++; ?>
 <?php endforeach; ?>


</div>
</section> <!-- blog post section -->
<?php get_footer(); ?>