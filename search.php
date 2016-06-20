<?php
/**
 * The template for displaying search results pages
 *
 * @package WordPress
 * @subpackage Palmetto
 * @since Palmetto 0.1
 */

get_header(); ?>

<section class="row" id="blog">
	<div class="large-8 columns">
		<?php if ( have_posts() ) : ?>
			<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'foundation' ), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
			<?php
			// Start the loop.
			while ( have_posts() ) : the_post();
				get_template_part( 'template-parts/content', 'search' );
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
	</div>
	<div class="large-4 columns">
		<?php get_sidebar(); ?>
	</div>
</section><!-- .content-area -->


<?php get_footer(); ?>
