<?php
/**
 * Template Name: Thin Page Template 
 * 
 * The template for displaying pages with a slightly thinner 
 * width than the standard page and features content with a 
 * white panel in the background.
 *
 * @package WordPress
 * @subpackage Palmetto
 * @since Palmetto 0.1
 */

get_header(); ?>

			<?php
			// Start the loop.
				while ( have_posts() ) : the_post();

				// Include the page content template.
				get_template_part( 'template-parts/content', 'thinpage' );

			// End of the loop.
				endwhile;
			?>


<?php get_footer(); ?>