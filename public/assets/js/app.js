$(function() {
  var $navbar = $('#navbar'),
      $btnOpenNavbar = $('#btn-open-navbar'),
      $flashOverlayModal = $('#flash-overlay-modal');
  
  $btnOpenNavbar.collapse();
  $flashOverlayModal.modal();
  $('a.anchorLink').anchorAnimate();

  $('#header .app-navbar ul li a').click(function(event) {
    $navbar.collapse('hide');
  });
});