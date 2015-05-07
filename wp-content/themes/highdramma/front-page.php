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


		<section id="featured-section" class="grid columns-9">
			<h1><?php the_field( 'featured_title' ); ?></h1>

			<?php 

				$image = get_field( 'featured_image' );

				if( !empty($image) ): ?>

					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

			<?php endif; ?>

			<div class="featured-content"><?php the_field( 'featured_content' ); ?></div>
		</section>

		<section class="social-media-feeds">
			<article class="facebook grid columns-5">
				<h3>High Dramma on <a href="https://www.facebook.com/highdramma"><span class="screen-reader-text">Facebook</span></a></h3>
				
				<div class="feed"><?php fb_feed(); ?></div>
			</article>

			<article class="twitter grid columns-4">
				<h3>High Dramma on <a href="https://twitter.com/highdramma"><span class="screen-reader-text">Twitter</span></a></h3>

				<div class="feed"><?php echo apply_filters('the_content', get_post_meta($post->ID,'twitter_feed',true)); ?></div>
			</article>

			<article class="youtube grid columns-4">
				<h3>High Dramma on <a href="https://www.youtube.com/user/HighDramma"><span class="screen-reader-text">YouTube</span></a></h3>	

				<?php if( have_rows('youtube_feed') ): ?>
					 
				    <?php while( have_rows('youtube_feed') ): the_row(); ?>
				 
				        <?php the_sub_field('youtube_video'); ?>
				        
				    <?php endwhile; ?>

				<?php endif; ?>
			</article>
		
		</section>

		<section id="homepage-introduction" class="grid columns-9">
			<div class="introduction-content"><?php the_field( 'homepage_introduction' ); ?></div>

		</section>
		
<?php endwhile;?>

		</main> <!-- #main -->
	</div>  <!-- div -->


<?php get_footer(); ?>	
