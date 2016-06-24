<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Palmetto
 * @since Palmetto 0.1
 */
?>

<div style="clear:both;"></div>
<footer>
		<div class="row">
				<?php get_sidebar( 'content-bottom' ); ?>
		</div>
		<div class="row text-center">
			<!--- SOCIAL MEDIA OPTIONS -->
			<h3>
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
			</h3>
		</div>
		<div class="row text-center">
			Powered by <a href="https://wordpress.org" target="_new">Wordpress</a>. <a href="http://christinabranson.github.io/palmetto">Palmetto Wordpress Theme</a> by <a href="http://christinabranson.github.io">Christina Branson</a>.
		</div>
</footer><!-- .site-footer -->


<?php wp_footer(); ?>
</body>
</html>