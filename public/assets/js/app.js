$(function() {
  if ($(window).width() < 480) {
    $('#viewport').attr('content', 'width=480px, initial-scale=1.0');
  }

  $('a.anchorLink').anchorAnimate();
  $('#flash-overlay-modal').modal();
});