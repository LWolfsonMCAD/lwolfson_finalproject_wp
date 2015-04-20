<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package highdramma
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<p>&#169; Copyright <span class="high-dramma">High Dramma</span> 2015</p>
		</div><!-- .site-info -->

		<div class="grid columns-3">
  			<?php highdramma_social_menu(); ?>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
