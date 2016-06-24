<?php
/**
 * Template Name: Page With Page Sidebar
 * 
 * The template for displaying pages
 *
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
				get_template_part( 'template-parts/content', 'sidebar-page' );

			// End of the loop.
				endwhile;
			?>

<?php get_footer(); ?>