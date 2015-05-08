<?php
/**
* Template Name: Member Bio
*/
?>
<?php get_header(); ?>

	<div id="primary" class="content-area group">
		<main id="main" class="site-main" role="main">
		

		<?php while ( have_posts() ) : the_post(); ?>	

			<div class="member-menu grid">
  				<?php wp_nav_menu( array( 'theme_location' => 'members' ) ); ?>
			</div>

			<section class="member-biography grid columns-9">
			<!-- Each member of the group will have their own bio page,  with a subnav on the side to get from one member's page to the next. -->

				
				<header>
				<!-- Currently this is to the right of the image, 
				might eventually move below the actor's main photo. -->
					<?php 

						$image = get_field('member_photo');

						if( !empty($image) ): ?>

							<img class="member-photo grid" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

					<?php endif; ?>

					<h1 class="member-name grid"><?php the_title(); ?></h1>
					
					<p class="members-title grid">
						<?php the_field('members_title'); ?>
					</p>
				</header>

				<aside class="member-quote grid">
					<blockquote><p><?php the_field('quote_motto'); ?></p></blockquote>
				</aside>

				<div class="member-bio grid">
					<?php the_field('member_bio'); ?>	
				</div>
	
			</section>	

			<section class="member-favorites">
			<!-- This section can eventually be moved down below the biography to possibly make room for the members' social media feeds or a small photo gallery. -->

				<h2>Favorites</h2><!-- This is currently hidden except from screen readers. -->

				<article class="fav-sketches">
				<!-- Custom field for title and repeater of text field to enter sketch names. -->

					<h3>Favorite Sketches&#58;</h3>

					<?php if( have_rows('favorite_sketches') ): ?>
 
					    <ul>
					 
						    <?php while( have_rows('favorite_sketches') ): the_row(); ?>
						 
						        <li><?php the_sub_field('favorite_sketch'); ?></li>
						        
						    <?php endwhile; ?>
					 
					    </ul>
					 
					<?php endif; ?>
				</article>

				<article class="memorable-characters">
				<!-- Custom field for title and repeater of text field to enter character names. -->

					<h3>Memorable Characters&#58;</h3>

					<?php if( have_rows('memorable_characters') ): ?>
 
					    <ul>
					 
						    <?php while( have_rows('memorable_characters') ): the_row(); ?>
						 
						        <li><?php the_sub_field('memorable_character'); ?></li>
						        
						    <?php endwhile; ?>
					 
					    </ul>
					 
					<?php endif; ?>
				</article>

				<article class="comedic-idols">
				<!-- Custom field for title and repeater of text field to enter comedians' names. -->

					<h3>Comedic Idols&#58;</h3>
					
					<?php if( have_rows('comedic_idols') ): ?>
 
					    <ul>
					 
						    <?php while( have_rows('comedic_idols') ): the_row(); ?>
						 
						        <li><?php the_sub_field('comedic_idol'); ?></li>
						        
						    <?php endwhile; ?>
					 
					    </ul>
					 
					<?php endif; ?>
				</article>
			</section>

		<?php endwhile; // end of the loop. ?>
   
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>