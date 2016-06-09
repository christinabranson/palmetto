<?php
/**
 * Template Name: Thin Page Template 
 * 
 * The template for displaying pages with a slightly thinner 
 * width than the standard page and features content with a 
 * white panel in the background.
 *
 * @package WordPress
 * @subpackage Real Estate
 * @since Real Estate 0.1
 */

get_header(); ?>
<div class="row">
	<div class="large-10 large-offset-1 columns">
		<div class="panel pagepanel">
			<?php
			// Start the loop.
				while ( have_posts() ) : the_post();

				// Include the page content template.
				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}

			// End of the loop.
				endwhile;
			?>
		</div> <!-- panel -->
	</div> <!-- column -->
</div> <!-- row -->

<?php get_footer(); ?>