<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * TODO: If a plugin (Amazing Carousel) is used that includes Bootstrap, there will be formatting errors!!!
 *
 * @package WordPress
 * @subpackage Real Estate
 * @since Real Estate
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!--- SITE CONTAINER -->
<div class="container">
	<!--- ABOVE NAVIGATION MENU FOR CONTACT & SOCIAL MEDIA -->
	<!--- TODO: Make these fields in Customizr -->
	<div class="row above-nav">
		<div class="large-8 columns">
			<i class="fa fa-phone"></i> 111-222-3333
			<i class="fa fa-envelope-o"></i> contact@blufftonhomes4rent.com
		</div>
		<div class="large-4 columns text-right">
			<a href=""><i class="fa fa-facebook"></i></a>
			<a href=""><i class="fa fa-google-plus"></i></a>
		</div>
	</div>
	<!--- TOP NAVIGATION BAR -->
	<div class="top-bar">
		<div class="row">
			<div class="top-bar-left">
				<li class="menu-text">
					<?php
						// TODO: Not sure why it's displaying the name and the logo
						// check to see what foundation_the_custom_logo() returns if no logo specified
						// TODO: Make either of these a home link
						if(foundation_the_custom_logo()) {
							?>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php foundation_the_custom_logo(); ?></a>
						<?php } else { ?>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
						<?php }
					?>
				</li>
      			</div>
			<div class="top-bar-right">
				<!---
				TODO: Develop or implement a plugin like https://wptavern.com/how-to-add-font-awesome-icons-to-wordpress-menus to add the Font Awesome icons to the navigation bar
				for now I'm leaving them off
				TODO: See https://wlcdesigns.com/2015/11/foundation-6-menu-walker-class-for-wordpress/ for Walker support
				-->
				<?php foundation_nav_menu(); ?>
			</div>
		</div>
	</div>



	<!--- HEADER FOR FEATURED HOME (MAIN PAGE) -->
	<!--- TODO: This should be customizable in Customizr, check https://github.com/WordPress/twentysixteen/blob/master/header.php for implementation -->
	<!--- SHOW ONLY FOR HOME PAGE -->
	<?php if ( is_front_page() && is_home() ) : ?>
		<header class="front-page">
			<div class="featured-property">
				<div class="row">
				<span class="featured">Featured Property: Westbury Park</span><br/><span class="featured-sub"><i class="fa fa-bed"></i> 3 Bedrooms | <i class="fa fa-fire-extinguisher icon-rotate-90"></i> 2 Bathrooms | <i class="fa fa-car"></i> 1 Car | <a href="">View Listing</a></span>
				</div>
			</div>
		</header>
	<?php endif; ?>

	<div class="row">
	</div>



<div style="display:none;">
			<?php if ( get_header_image() ) : ?>
				<?php
					/**
					 * Filter the default foundation custom header sizes attribute.
					 *
					 * @since Twenty Sixteen 1.0
					 *
					 * @param string $custom_header_sizes sizes attribute
					 * for Custom Header. Default '(max-width: 709px) 85vw,
					 * (max-width: 909px) 81vw, (max-width: 1362px) 88vw, 1200px'.
					 */
					$custom_header_sizes = apply_filters( 'foundation_custom_header_sizes', '(max-width: 709px) 85vw, (max-width: 909px) 81vw, (max-width: 1362px) 88vw, 1200px' );
				?>
				<div class="header-image">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img src="<?php header_image(); ?>" srcset="<?php echo esc_attr( wp_get_attachment_image_srcset( get_custom_header()->attachment_id ) ); ?>" sizes="<?php echo esc_attr( $custom_header_sizes ); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
					</a>
				</div><!-- .header-image -->
			<?php endif; // End header image check. ?>
</div>