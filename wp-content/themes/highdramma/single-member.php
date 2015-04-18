<?php
/**
* Template Name: Member Bio
*/
?>
<?php get_header(); ?>

	<div id="primary" class="content-area group">
		<main id="main" class="site-main" role="main">
		

		<?php while ( have_posts() ) : the_post(); ?>	

		

		<?php endwhile; // end of the loop. ?>


    
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>