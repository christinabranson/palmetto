<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<div style="clear:both;"></div>
<footer>
		<div class="row">
				<?php get_sidebar( 'content-bottom' ); ?>
		</div>
		<div class="row text-center">
			Powered by <a href="Wordpress" target="_new">Wordpress</a>. Theme by <a href="http://christinabranson.github.io">Christina Branson</a>.
		</div>
</footer><!-- .site-footer -->


<?php wp_footer(); ?>
</body>
</html>