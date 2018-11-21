( function($) {

  $('.slider_ambassador').bxSlider({
  auto: false,
  autoStart: true,
  speed: 1000,
  autoControls: false,
  stopAutoOnClick: false,
  pager: false,
  controls: false,
  });

  $('.slider_casestudies').bxSlider({
  auto: false,
  autoStart: true,
  speed: 1000,
  autoControls: false,
  stopAutoOnClick: false,
  pager: true,
  controls: false,
  });


  /**
   * Match Height (Including Safari onload fix)
   */
  function startMatchHeight() {
    $('.matchheight').matchHeight();
    $('.partnerheight').matchHeight();
  }
  window.onload = startMatchHeight;

} ) (jQuery);

/* Open when someone clicks on the span element */
function openNav() {
    document.getElementById("myNav").style.height = "100%";
}

/* Close when someone clicks on the "x" symbol inside the overlay */
function closeNav() {
    document.getElementById("myNav").style.height = "0%";
}

// /* Open when someone clicks on the span element */
// function openSearch() {
//     document.getElementById("mySearch").style.height = "100%";
// }
//
// /* Close when someone clicks on the "x" symbol inside the overlay */
// function closeSearch() {
//     document.getElementById("mySearch").style.height = "0%";
// }
