<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Real Estate
 * @since Real Estate 0.1
 */

get_header(); ?>

<section  id="featured_panels">
<div class="row" data-equalizer>
<!---- Three Pane Feature Functionality ---->
<?php
	$number_of_panes = get_theme_mod( 'number_of_panes', '' );

	$pane_header_1 = get_theme_mod( 'pane_header_1', '' );	
	$pane_header_2 = get_theme_mod( 'pane_header_2', '' );
	$pane_header_3 = get_theme_mod( 'pane_header_3', '' );
	$pane_header_4 = get_theme_mod( 'pane_header_4', '' );


	$pane_icon_1 = get_theme_mod( 'pane_icon_1', '' );	
	$pane_icon_2 = get_theme_mod( 'pane_icon_2', '' );
	$pane_icon_3 = get_theme_mod( 'pane_icon_3', '' );
	$pane_icon_4 = get_theme_mod( 'pane_icon_4', '' );


	$pane_text_1 = get_theme_mod( 'pane_text_1', '' );	
	$pane_text_2 = get_theme_mod( 'pane_text_2', '' );
	$pane_text_3 = get_theme_mod( 'pane_text_3', '' );
	$pane_text_4 = get_theme_mod( 'pane_text_4', '' );

	if ($number_of_panes !== 0) {
		if ($number_of_panes == 1) { ?>
			<div class="large-8 columns large-offset-2">
        			<div class="panel" data-equalizer-watch>
					<h2 class="text-center"><i class="fa <?php echo $pane_icon_1; ?>"></i></h2>
					<h2 class="text-center"><?php echo $pane_header_1; ?></h2>
					<p><?php echo $pane_text_1; ?></p>
				</div>
			</div>
		<?php } elseif ($number_of_panes == 2) { ?>
			<div class="large-6 columns">
        			<div class="panel" data-equalizer-watch>
					<h2 class="text-center"><i class="fa <?php echo $pane_icon_1; ?>"></i></h2>
					<h2 class="text-center"><?php echo $pane_header_1; ?></h2>
					<p><?php echo $pane_text_1; ?></p>
				</div>
			</div>
			<div class="large-6 columns">
        			<div class="panel" data-equalizer-watch>
					<h2 class="text-center"><i class="fa <?php echo $pane_icon_2; ?>"></i></h2>
					<h2 class="text-center"><?php echo $pane_header_2; ?></h2>
					<p><?php echo $pane_text_2; ?></p>
				</div>
			</div>
		<?php } elseif ($number_of_panes == 3) { ?>
			<div class="large-4 columns">
        			<div class="panel" data-equalizer-watch>
					<h2 class="text-center"><i class="fa <?php echo $pane_icon_1; ?>"></i></h2>
					<h2 class="text-center"><?php echo $pane_header_1; ?></h2>
					<p><?php echo $pane_text_1; ?></p>
				</div>
			</div>
			<div class="large-4 columns">
        			<div class="panel" data-equalizer-watch>
					<h2 class="text-center"><i class="fa <?php echo $pane_icon_2; ?>"></i></h2>
					<h2 class="text-center"><?php echo $pane_header_2; ?></h2>
					<p><?php echo $pane_text_2; ?></p>
				</div>
			</div>
			<div class="large-4 columns">
        			<div class="panel" data-equalizer-watch>
					<h2 class="text-center"><i class="fa <?php echo $pane_icon_3; ?>"></i></h2>
					<h2 class="text-center"><?php echo $pane_header_3; ?></h2>
					<p><?php echo $pane_text_3; ?></p>
				</div>
			</div>
		<?php } elseif ($number_of_panes == 4) { ?>
			<div class="large-3 columns">
        			<div class="panel" data-equalizer-watch>
					<h2 class="text-center"><i class="fa <?php echo $pane_icon_1; ?>"></i></h2>
					<h2 class="text-center"><?php echo $pane_header_1; ?></h2>
					<p><?php echo $pane_text_1; ?></p>
				</div>
			</div>
			<div class="large-3 columns">
        			<div class="panel" data-equalizer-watch>
					<h2 class="text-center"><i class="fa <?php echo $pane_icon_2; ?>"></i></h2>
					<h2 class="text-center"><?php echo $pane_header_2; ?></h2>
					<p><?php echo $pane_text_2; ?></p>
				</div>
			</div>
			<div class="large-3 columns">
        			<div class="panel" data-equalizer-watch>
					<h2 class="text-center"><i class="fa <?php echo $pane_icon_3; ?>"></i></h2>
					<h2 class="text-center"><?php echo $pane_header_3; ?></h2>
					<p><?php echo $pane_text_3; ?></p>
				</div>
			</div>
			<div class="large-3 columns">
        			<div class="panel" data-equalizer-watch>
					<h2 class="text-center"><i class="fa <?php echo $pane_icon_4; ?>"></i></h2>
					<h2 class="text-center"><?php echo $pane_header_4; ?></h2>
					<p><?php echo $pane_text_4; ?></p>
				</div>
			</div>
		<?php }
	}

?>
</div>
</section>


  <!--- FRONT PAGE SECTION FOR SAMPLE OF LISTINGS -->
<?php
	$show_featured_listings= get_theme_mod( 'show_featured_listings', '1' );

	$featured_listing_1_title= get_theme_mod( 'featured_listing_1_title', '' );	
	$featured_listing_1_url= get_theme_mod( 'featured_listing_1_url', '' );
	$featured_listing_1_image_url= get_theme_mod( 'featured_listing_1_image_url', '' );
	$featured_listing_1_num_bedrooms= get_theme_mod( 'featured_listing_1_num_bedrooms', '' );
	$featured_listing_1_num_bathrooms= get_theme_mod( 'featured_listing_1_num_bathrooms', '' );	
	$featured_listing_1_num_cars= get_theme_mod( 'featured_listing_1_num_cars', '' );	
	$featured_listing_1_description= get_theme_mod( 'featured_listing_1_description', '' );	

	$featured_listing_2_title= get_theme_mod( 'featured_listing_2_title', '' );	
	$featured_listing_2_url= get_theme_mod( 'featured_listing_2_url', '' );
	$featured_listing_2_image_url= get_theme_mod( 'featured_listing_2_image_url', '' );
	$featured_listing_2_num_bedrooms= get_theme_mod( 'featured_listing_2_num_bedrooms', '' );
	$featured_listing_2_num_bathrooms= get_theme_mod( 'featured_listing_2_num_bathrooms', '' );	
	$featured_listing_2_num_cars= get_theme_mod( 'featured_listing_2_num_cars', '' );	
	$featured_listing_2_description= get_theme_mod( 'featured_listing_2_description', '' );	

	$featured_listing_3_title= get_theme_mod( 'featured_listing_3_title', '' );	
	$featured_listing_3_url= get_theme_mod( 'featured_listing_3_url', '' );
	$featured_listing_3_image_url= get_theme_mod( 'featured_listing_3_image_url', '' );
	$featured_listing_3_num_bedrooms= get_theme_mod( 'featured_listing_3_num_bedrooms', '' );
	$featured_listing_3_num_bathrooms= get_theme_mod( 'featured_listing_3_num_bathrooms', '' );	
	$featured_listing_3_num_cars= get_theme_mod( 'featured_listing_3_num_cars', '' );	
	$featured_listing_3_description= get_theme_mod( 'featured_listing_3_description', '' );	

	if ($show_featured_listings) { ?>
  <section class="white-section">
    <div class="row white">
      <h2>Featured Listings</h2>
      <p>Some of our featured long-term home rentals. <a href="#">View all listings on our Homes For Rent page.</a></p>
    </div>
		<div class="row" data-equalizer>
			<div class="large-4 columns">&nbsp;
				<?php if ($featured_listing_1_title) { ?>
					<div class="listing-box" data-equalizer-watch>
						<div class="listing-image">
            						<img src="<?php echo $featured_listing_1_image_url; ?>" />
          					</div>
						<div class="listing-details">
            						<i class="fa fa-bed"></i> <?php echo $featured_listing_1_num_bedrooms; ?> Bedrooms | 
							<i class="fa fa-fire-extinguisher icon-rotate-90"></i> <?php echo $featured_listing_1_num_bathrooms; ?> Bathrooms | 
							<i class="fa fa-car"></i> <?php echo $featured_listing_1_num_cars; ?> Cars
          					</div>
						<div class="listing-text">
            						<h4><?php echo $featured_listing_1_title; ?></h4>
            						<p><?php echo $featured_listing_1_description; ?></p><p class="text-center">
							<a class="button text-center" src="<?php echo $featured_listing_1_url; ?>">View Listing</a></p>
         					 </div>
					</div>
				<?php } ?>
			</div>
			<div class="large-4 columns">&nbsp;
				<?php if ($featured_listing_2_title) { ?>
					<div class="listing-box" data-equalizer-watch>
						<div class="listing-image">
            						<img src="<?php echo $featured_listing_2_image_url; ?>" />
          					</div>
						<div class="listing-details">
            						<i class="fa fa-bed"></i> <?php echo $featured_listing_2_num_bedrooms; ?> Bedrooms | 
							<i class="fa fa-fire-extinguisher icon-rotate-90"></i> <?php echo $featured_listing_2_num_bathrooms; ?> Bathrooms | 
							<i class="fa fa-car"></i> <?php echo $featured_listing_2_num_cars; ?> Cars
          					</div>
						<div class="listing-text">
            						<h4><?php echo $featured_listing_2_title; ?></h4>
            						<p><?php echo $featured_listing_2_description; ?></p><p class="text-center">
							<a class="button text-center" src="<?php echo $featured_listing_2_url; ?>">View Listing</a></p>
         					 </div>
					</div>
				<?php } ?>
			</div>
			<div class="large-4 columns">&nbsp;
				<?php if ($featured_listing_3_title) { ?>
					<div class="listing-box" data-equalizer-watch>
						<div class="listing-image">
            						<img src="<?php echo $featured_listing_3_image_url; ?>" />
          					</div>
						<div class="listing-details">
            						<i class="fa fa-bed"></i> <?php echo $featured_listing_3_num_bedrooms; ?> Bedrooms | 
							<i class="fa fa-fire-extinguisher icon-rotate-90"></i> <?php echo $featured_listing_3_num_bathrooms; ?> Bathrooms | 
							<i class="fa fa-car"></i> <?php echo $featured_listing_3_num_cars; ?> Cars
          					</div>
						<div class="listing-text">
            						<h4><?php echo $featured_listing_3_title; ?></h4>
            						<p><?php echo $featured_listing_3_description; ?></p><p class="text-center">
							<a class="button text-center" src="<?php echo $featured_listing_3_url; ?>">View Listing</a></p>
         					 </div>
					</div>
				<?php } ?>
			</div>

	<?php }


?>


 </section>

<div class="row">
	<div class="large-8 columns" id="blog">
		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
			<?php endif; ?>

			<?php
			// Start the loop.
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			// End the loop.
			endwhile;

			// Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'foundation' ),
				'next_text'          => __( 'Next page', 'foundation' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'foundation' ) . ' </span>',
			) );

		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</div><!-- .content-area -->

	<div class="large-4 columns sidebar">
		<?php get_sidebar(); ?>
	</div>
</div>
<?php get_footer(); ?>