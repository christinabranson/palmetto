<?php
/**
 * 
 * Template Name: Listing Template 
 * 
 * The template for displaying pages designated as listing pages.
 * 
 *
 * @package WordPress
 * @subpackage Real Estate
 * @since Real Estate 0.1
 */

get_header();
?>

<div class="row">
		<?php
			// Start the loop.
				while ( have_posts() ) : the_post();

				// Include the page content template.
				get_template_part( 'template-parts/content', 'listing' );
				


				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}

			// End of the loop.
				endwhile;
		?>
	
</div> <!-- row -->

<?php get_footer(); ?>