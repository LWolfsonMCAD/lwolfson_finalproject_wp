<?php
/**
 * Template Name: Sketches
 *
 *
 * @package highdramma
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php 
					if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
					the_post_thumbnail();
				} ?>

			<section class="sketch-videos">
				<h2><?php the_field('sketch_videos_title'); ?></h2>

				<div class="video-gallery"><?php

					// check if the repeater field has rows of data
					if( have_rows('sketch_videos') ):

					 	// loop through the rows of data
					    while ( have_rows('sketch_videos') ) : the_row();

					        // display a sub field value
					        the_sub_field('video_of_sketch');

					    endwhile;

					else :

					    // no rows found

					endif;

				?></div>
			</section>

			<section class="sketch-photos">
			<h2><?php the_field('sketch_photos_title'); ?></h2>

				<?php $images = get_field('gallery'); ?>

				<?php if($images): ?>
				    <div class="popup-gallery">
				            <?php foreach( $images as $image ): ?>
				                <a href="<?php echo $image['url']; ?>" 
				                   class="lightbox-link" 
				                   title="<?php echo $image['caption']; ?>" 
				                   data-description="<?php echo $image['description']; ?>">
				                    <div class="image-wrap">
				                        <img src="<?php echo $image['url']; ?>">
				                    </div>  
				                </a>
				            <?php endforeach; ?>
				    </div>

				<?php endif; ?>
			</section>
				

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
