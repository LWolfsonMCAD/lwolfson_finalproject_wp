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

		<section id="featured-section" class="grid columns-9">
			<h1><?php the_field( 'featured_title' ); ?></h1>

			<?php 

				$image = get_field( 'featured_image' );

				if( !empty($image) ): ?>

					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

			<?php endif; ?>

			<?php the_field( 'featured_content' ); ?>
		</section>

		<section class="social-media-feeds">
			<article class="facebook grid columns-5">
				<h3>High Dramma on Facebook</h3>
				
				<div class="feed"><?php fb_feed(); ?></div>
			</article>

			<article class="youtube grid columns-4">
				<h3>High Dramma's Latest Video</h3>

				<div class="feed"><?php the_field( 'youtube_feed' ); ?></div>
			</article>

			<article class="twitter grid columns-4">
				<h3>Tweets from High Dramma</h3>

				<div class="feed"><?php echo apply_filters('the_content', get_post_meta($post->ID,'twitter_feed',true)); ?></div>
			</article>
		
		</section>
		
<?php endwhile;?>

		</main> <!-- #main -->
	</div>  <!-- div -->


<?php get_footer(); ?>	
