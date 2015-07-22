/**
 * adjustStyle.js
 *
 */

function adjustStyle(width) {
  width = parseInt(width);
  if (width < 570 {
    $("#size-stylesheet").attr("href", "css/mobile.css");
  } else if (width < 900) {
    $("#size-stylesheet").attr("href", "css/tablet.css");
  } else {
     $("#size-stylesheet").attr("href", "style.css"); 
  }
}

 $(function() {
  adjustStyle($(this).width());
  $(window).resize(function() {
    adjustStyle($(this).width());
  });
});