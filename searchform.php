<?php
/**
 * Template for displaying search forms
 *
 * @package WordPress
 * @subpackage Palmetto
 * @since Palmetto 0.1
 */
?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div class="row">
		<div class="small-12 large-8 columns">
			<label>
				<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'foundation' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
			</label>
		</div>
		<div class="small-12 large-4 columns">
			<button type="submit" class="search-submit button"><?php echo _x( 'Search', 'submit button', 'foundation' ); ?></button>
		</div>
	</div>
</form>
