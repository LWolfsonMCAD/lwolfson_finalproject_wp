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
	<div id="homepage-content">
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

		<section class="social-media-feeds">
			<iframe width="210px" height="180px" src="https://www.youtube.com/embed/Ri0Rk_j6ezk" frameborder="0" allowfullscreen></iframe>


			<div id="fb-root"></div>
			<script>(function(d, s, id) {
				  var js, fjs = d.getElementsByTagName(s)[0];
				  if (d.getElementById(id)) return;
				  js = d.createElement(s); js.id = id;
				  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3";
				  fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));
			</script>

			<div class="fb-page" data-href="https://www.facebook.com/highdramma" data-width="210px" data-height="260px" data-hide-cover="true" data-show-facepile="false" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><!-- <blockquote cite="https://www.facebook.com/highdramma"><a href="https://www.facebook.com/highdramma">High Dramma</a></blockquote> --></div></div>

		</section>
	</div>
		
<?php endwhile;?>

		</main> <!-- #main -->
	</div>  <!-- div -->


<?php get_footer(); ?>	
