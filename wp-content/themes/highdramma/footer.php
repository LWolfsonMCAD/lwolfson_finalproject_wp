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

	</footer><!-- #colophon -->

	</div> <!-- sidebar-toggle -->
</div><!-- #page -->

<?php wp_footer(); ?>


<script type="text/javascript">

( function( $ ) {
 /*** 
  * Run this code when the #toggle-menu link has been tapped
  * or clicked
  */
 $( '#toggle-menu' ).on( 'touchstart click', function(e) {
  e.preventDefault();

  var $body = $( 'body' ),
      $page = $( '#page' ),
      $menu = $( '#mobile-menu' ),
 
      /* Cross browser support for CSS "transition end" event */
      transitionEnd = 'transitionend webkitTransitionEnd otransitionend MSTransitionEnd';

  /* When the toggle menu link is clicked, animation starts */
  $body.addClass( 'animating' );

  /***
   * Determine the direction of the animation and
   * add the correct direction class depending
   * on whether the menu was already visible.
   */
  if ( $body.hasClass( 'menu-visible' ) ) {
   $body.addClass( 'left' );
  } else {
   $body.addClass( 'right' );
  }
  
  /***
   * When the animation (technically a CSS transition)
   * has finished, remove all animating classes and
   * either add or remove the "menu-visible" class 
   * depending whether it was visible or not previously.
   */
  $page.on( transitionEnd, function() {
   $body
    .removeClass( 'animating right left' )
    .toggleClass( 'menu-visible' );

   $page.off( transitionEnd );
  } );
 } );
} )( jQuery );

jQuery(document).ready(function($) {
	$('.popup-gallery').magnificPopup({
		delegate: 'a',
		type: 'image',
		tLoading: 'Loading image #%curr%...',
		mainClass: 'mfp-img-mobile',
		gallery: {
			enabled: true,
			navigateByImgClick: true,
			preload: [0,1] // Will preload 0 - before current, and 1 after the current image
		},
		image: {
			tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
			titleSrc: function(item) {
				return '<h4 class="lb-title">' + item.el.attr('title') + '</h4>' + '<p class="lb-description">' + item.el.attr('data-description') + '</p>';
			}
		}
	});
});

</script>

</body>
</html>
