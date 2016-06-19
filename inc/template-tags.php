<?php
/**
 * Custom Twenty Sixteen template tags
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

function foundation_entry_meta() {
	echo '<div class="meta">';
	foundation_meta_get_author();
	foundation_meta_get_postdate();
	foundation_meta_get_categories();

	foundation_meta_edit();

	echo '</div>';
}

function foundation_meta_get_author() {
	printf(
		'<i class="fa fa-user"></i> <a href="%1s" rel="author"><span itemprop="author">%2s</span></a>',
		esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
		get_the_author()
		);
}

function foundation_meta_get_postdate() {
	printf(
		'<i class="fa fa-calendar"></i> <a href="%1s" rel="date" ><span itemprop="datePublished">%2s</span></a>',
		esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
		get_the_date()
		);
}

function foundation_meta_get_categories() {
	$category_list = get_the_category_list( ', ' );
	if ( $category_list ) {
		echo '<i class="fa fa-folder-o"></i> '. $category_list;
	}
}

function foundation_meta_edit() {
	// post edit link
	if ( is_user_logged_in() ) {
		echo '<i class="fa fa-pencil"></i> ';
		edit_post_link( __( 'Edit', 'unconditional' ), '<span class="meta-edit">', '</span>' );
	}
}


if ( ! function_exists( 'foundation_post_thumbnail' ) ) :
/**
 * Displays an optional post thumbnail.
 *
 * Wraps the post thumbnail in an anchor element on index views, or a div
 * element when on single views.
 *
 * Create your own foundation_post_thumbnail() function to override in a child theme.
 *
 * @since Real Estate 0.1
 */
function foundation_post_thumbnail() {
	if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
		return;
	}

	if ( is_singular() ) :
	?>

	<div class="post-thumbnail">
		<?php the_post_thumbnail(); ?>
	</div><!-- .post-thumbnail -->

	<?php else : ?>

	<a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true">
		<?php the_post_thumbnail( 'post-thumbnail', array( 'alt' => the_title_attribute( 'echo=0' ) ) ); ?>
	</a>

	<?php endif; // End is_singular()
}
endif;

if ( ! function_exists( 'foundation_excerpt' ) ) :
	/**
	 * Displays the optional excerpt.
	 *
	 * Wraps the excerpt in a div element.
	 *
	 * Create your own foundation_excerpt() function to override in a child theme.
	 *
	 * @since Twenty Sixteen 1.0
	 *
	 * @param string $class Optional. Class string of the div element. Defaults to 'entry-summary'.
	 */
	function foundation_excerpt( $class = 'entry-summary' ) {
		$class = esc_attr( $class );

		if ( has_excerpt() || is_search() ) : ?>
			<div class="<?php echo $class; ?>">
				<?php the_excerpt(); ?>
			</div><!-- .<?php echo $class; ?> -->
		<?php endif;
	}
endif;

if ( ! function_exists( 'foundation_excerpt_more' ) && ! is_admin() ) :
/**
 * Replaces "[...]" (appended to automatically generated excerpts) with ... and
 * a 'Continue reading' link.
 *
 * Create your own foundation_excerpt_more() function to override in a child theme.
 *
 * @since Twenty Sixteen 1.0
 *
 * @return string 'Continue reading' link prepended with an ellipsis.
 */
function foundation_excerpt_more() {
	$link = sprintf( '<a href="%1$s" class="more-link">%2$s</a>',
		esc_url( get_permalink( get_the_ID() ) ),
		/* translators: %s: Name of current post */
		sprintf( __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'foundation' ), get_the_title( get_the_ID() ) )
	);
	return ' &hellip; ' . $link;
}
add_filter( 'excerpt_more', 'foundation_excerpt_more' );
endif;

/**
 * Determines whether blog/site has more than one category.
 *
 * Create your own foundation_categorized_blog() function to override in a child theme.
 *
 * @since Twenty Sixteen 1.0
 *
 * @return bool True if there is more than one category, false otherwise.
 */
function foundation_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'foundation_categories' ) ) ) {
		// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories( array(
			'fields'     => 'ids',
			// We only need to know if there is more than one category.
			'number'     => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'foundation_categories', $all_the_cool_cats );
	}

	if ( $all_the_cool_cats > 1 ) {
		// This blog has more than 1 category so foundation_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so foundation_categorized_blog should return false.
		return false;
	}
}

/**
 * Flushes out the transients used in foundation_categorized_blog().
 *
 * @since Twenty Sixteen 1.0
 */
function foundation_category_transient_flusher() {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	// Like, beat it. Dig?
	delete_transient( 'foundation_categories' );
}
add_action( 'edit_category', 'foundation_category_transient_flusher' );
add_action( 'save_post',     'foundation_category_transient_flusher' );

if ( ! function_exists( 'foundation_the_custom_logo' ) ) :
/**
 * Displays the optional custom logo.
 *
 * Does nothing if the custom logo is not available.
 *
 * @since Twenty Sixteen 1.2
 */
function foundation_the_custom_logo() {
	if ( function_exists( 'the_custom_logo' ) ) {
		the_custom_logo();
	}
}
endif;