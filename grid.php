<?php
/**
 * Template Name: Grid Template 
 * 
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Real Estate
 * @since Real Estate 0.1
 */

get_header(); ?>
<div class="row"></div>
	<!--- <div class="large-8 columns"> -->
		<main id="main" class="site-main" role="main">
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

		</main><!-- .site-main -->
		
		
		
		<?php
	$mypages = get_pages( array( 'child_of' => $post->ID, 'sort_column' => 'post_date', 'sort_order' => 'desc' ) );

	foreach( $mypages as $page ) {		
		$content = $page->post_content;
		if ( ! $content ) // Check for empty page
			continue;

		$content = apply_filters( 'the_content', $content );
	?>
		<h2><a href="<?php echo get_page_link( $page->ID ); ?>"><?php echo $page->post_title; ?></a></h2>
		<div class="entry"><?php echo $content; ?></div>
	<?php
	}	
?>



		<!--- TODO: Figure out what this is -->
		<?php //get_sidebar( 'content-bottom' ); ?>

	<!--- </div> -->

	<!--- TODO: Do I really want a sidebar here? -->
	<!--- <div class="large-4 columns"> -->
	<!---	<?php //get_sidebar(); ?> -->
	<!--- </div> -->
</div>

<?php get_footer(); ?>