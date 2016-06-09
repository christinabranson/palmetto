<?php
/**
 * Template Name: Grid Template 
 * 
 * The template for displaying grid based templates.
 *
 * @package WordPress
 * @subpackage Real Estate
 * @since Real Estate 0.1
 */

get_header(); ?>
<div class="row">
		<?php
		// Start the loop.
			while ( have_posts() ) : the_post();

			// Include the page content template.
			get_template_part( 'template-parts/content', 'page' );
			
			// Get subpages
			$subpages = get_pages( array( 'child_of' => $post->ID, 'sort_column' => 'post_date', 'sort_order' => 'desc' ) );
			
			$counter = 0;

			if ($subpages) { ?>
				<div class="row" data-equalizer>
							

			<?php

			foreach( $subpages as $page ) {
				$thumb_id = get_post_thumbnail_id($page->ID);
				$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
				$thumb_url = $thumb_url_array[0];
				
				
				if ($counter % 3 == 0) { ?>
					</div> <!-- end row -->
					<div class="row" data-equalizer>
				
				<?php }

				?>
					<div class="large-4 columns <?php if ( ($counter + 1) == sizeof($subpages)) { echo "end";} ?>">
						<div class="listing-box" data-equalizer-watch>
							<div class="listing-image">
									<?php if ($thumb_url && strpos($thumb_url,'default') === false) { ?>
            							<img src="<?php echo $thumb_url; ?>" />
            						<?php } elseif (foundation_the_custom_logo()) { ?>
            							<img src="<?php foundation_the_custom_logo(); ?>" />
            						<?php } else { ?>
            						
            						<?php } ?>
          					</div> <!-- listing image -->
          					<div class="listing-text">
          						<h4><a href="<?php echo get_page_link( $page->ID ); ?>"><?php echo $page->post_title; ?></a></h4>
          						<p><?php echo $page->post_excerpt;?></p><p class="text-center">
          						<a class="button text-center" src="<?php echo get_page_link( $page->ID ); ?>">View Listing</a></p>
          					</div> <!-- listing text -->
						</div> <!-- listing box -->
					</div> <!-- subpage column -->
				<?php
				$counter++;
			} // foreach
			} // if
			?>
			</div> <!-- row -->
			<?php
				
				$content = $page->post_content;

				$content = apply_filters( 'the_content', $content );
			?>





	<?php
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}

			// End of the loop.
				endwhile;
			?>
	
	
</div> <!-- row -->
<?php get_footer(); ?>