<?php
/**
 * The template for displaying a static homepage.
 *
 * @package highdramma
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

<?php while ( have_posts() ) : the_post(); ?>

		<section id="homepage-introduction" class="grid columns-4">
			<?php the_field( 'homepage_introduction' ); ?>
		</section>

		<section id="featured-section" class="grid columns-7">
			<h1><?php the_field( 'featured_title' ); ?></h1>

			<?php 

				$image = get_field( 'featured_image' );

				if( !empty($image) ): ?>

					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

			<?php endif; ?>

			<?php the_field( 'featured_content' ); ?>
		</section>

		
<?php endwhile;?>

		</main> <!-- #main -->
	</div>  <!-- div -->


<?php get_footer(); ?>	
