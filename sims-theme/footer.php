<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sims_theme
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<p>© 2020 Brain Traffic</p>
			<?php wp_nav_menu( array( 'theme_location' => 'new-menu', 'container_class' => 'footer-menu-class' ) ); ?>
		</div><!-- .site-info -->

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script src="https://kit.fontawesome.com/280107c2ef.js" crossorigin="anonymous"></script>
</body>
</html>
