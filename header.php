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

<style>
  body { background: <?php echo get_option('body_background_color'); ?> ; color:  <?php echo get_option('body_text_color'); ?>; }
  body a { color:  <?php echo get_option('body_link_color'); ?>; }
  body .button { background-color:  <?php echo get_option('body_link_color'); ?>; }
  body a:hover { color:  <?php echo get_option('body_link_hover_color'); ?>; }
  body .button:hover { background-color:  <?php echo get_option('body_link_hover_color'); ?>; }
  .top-bar ul { color:  <?php echo get_option('body_link_color'); ?>; } /* Changes the color of any icons in the top navigation section */
  #mobile-menu ul { color:  <?php echo get_option('body_link_color'); ?>; } /* Changes the color of any icons in the top navigation section */
</style>

</head>

<body <?php body_class(); ?>>

<!--- SITE CONTAINER -->
<div class="container">
	<!--- ABOVE NAVIGATION MENU FOR CONTACT & SOCIAL MEDIA -->
	<div class="row above-nav">
		<!--- CONTACT HEADER -->
		<div class="shrink columns">
			<!--- PHONE NUMBER -->
			<?php
				$phone = get_theme_mod( 'phone_number', '' );
				if ($phone) { ?>
					<i class="fa fa-phone"></i> <?php echo $phone; ?>
			<?php } ?>
		</div>
		<div class="shrink columns">
			<!--- EMAIL ADDRESS -->
			<?php
				$email = get_theme_mod( 'email_address', '' );
				if ($email) { ?>
					<i class="fa fa-envelope-o"></i> <?php echo $email; ?>
			<?php } ?>
		</div>
		<!--- SOCIAL MEDIA OPTIONS -->
		<div class="columns text-right show-for-medium">
			<!--- FACEBOOK -->
			<?php
				$facebook_url = get_theme_mod( 'facebook_url', '' );
				if ($facebook_url) { ?>
					<a href="<?php echo $facebook_url; ?>"><i class="fa fa-facebook"></i></a>
			<?php } ?>
			<!--- TWITTER -->
			<?php
				$twitter_url = get_theme_mod( 'twitter_url', '' );
				if ($twitter_url) { ?>
					<a href="<?php echo $twitter_url; ?>"><i class="fa fa-twitter"></i></a>
			<?php } ?>
			<!--- GOOGLE+ -->
			<?php
				$google_url = get_theme_mod( 'google_url', '' );
				if ($google_url) { ?>
					<a href="<?php echo $google_url; ?>"><i class="fa fa-google-plus"></i></a>
			<?php } ?>
			<!--- LINKEDIN -->
			<?php
				$linkedin_url = get_theme_mod( 'linkedin_url', '' );
				if ($linkedin_url) { ?>
					<a href="<?php echo $linkedin_url; ?>"><i class="fa fa-linkedin"></i></a>
			<?php } ?>
			<!--- INSTAGRAM -->
			<?php
				$instagram_url = get_theme_mod( 'instagram_url', '' );
				if ($instagram_url) { ?>
					<a href="<?php echo $instagram_url; ?>"><i class="fa fa-instagram"></i></a>
			<?php } ?>
			<!--- GITHUB -->
			<?php
				$github_url = get_theme_mod( 'github_url', '' );
				if ($github_url) { ?>
					<a href="<?php echo $github_url; ?>"><i class="fa fa-github"></i></a>
			<?php } ?>
		</div>
	</div>
	<!--- TOP NAVIGATION BAR -->
	
	<div class="title-bar" data-responsive-toggle="mobile-menu" data-hide-for="medium">
  		<button class="menu-icon" type="button" data-toggle></button>
  		<div class="title-bar-title">
  			<?php if (has_custom_logo()) { ?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php foundation_the_custom_logo(); ?></a>
			<?php } else { ?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><h1><?php echo bloginfo( 'name' ); ?></h1></a>
			<?php } ?>
  			
  		</div>
	</div>
	
	<div id="mobile-menu" class="hide-for-medium" data-hide-for="medium">
		<?php wp_nav_menu(array(
			'menu'   => 'topbar-menu',
			'menu_class'     => 'menu vertical',
			'depth'	=> 1,
			)); ?>
	</div>


	<div class="top-bar show-for-medium" id="top-nav-bar" data-topbar>
		<div class="row">
			<div class="top-bar-left">
				<li class="menu-text">
					<?php if (has_custom_logo()) { ?>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php foundation_the_custom_logo(); ?></a>
					<?php } else { ?>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><h1><?php echo bloginfo( 'name' ); ?></h1></a>
					<?php } ?>
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
	<?php if ( is_front_page() ) : ?>
	<?php if ( has_header_image() ) { ?>
		<header class="front-page" style="background-image: url('<?php header_image(); ?>')";>
			<div class="featured-property">
				<div class="row">
				<span class="featured">Featured Property: Westbury Park</span><br/><span class="featured-sub"><i class="fa fa-bed"></i> 3 Bedrooms | <i class="fa fa-fire-extinguisher icon-rotate-90"></i> 2 Bathrooms | <i class="fa fa-car"></i> 1 Car | <a href="">View Listing</a></span>
				</div>
			</div>
		</header>
	<?php } else { ?>
		<header class="front-page">
			<div class="featured-property">
				<div class="row">
				<span class="featured">Featured Property: Westbury Park</span><br/><span class="featured-sub"><i class="fa fa-bed"></i> 3 Bedrooms | <i class="fa fa-fire-extinguisher icon-rotate-90"></i> 2 Bathrooms | <i class="fa fa-car"></i> 1 Car | <a href="">View Listing</a></span>
				</div>
			</div>
		</header>
	<?php } ?>
	<?php endif; ?>

	<div class="row">
	</div>