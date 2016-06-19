<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Palmetto
 * @since Palmetto 0.1
 */

get_header(); ?>

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