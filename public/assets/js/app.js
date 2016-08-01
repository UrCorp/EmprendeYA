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

  $.validator.addMethod("regex", function(value, element, regexp) {
        var re = new RegExp(regexp);
        return this.optional(element) || re.test(value);
    },
    "Please check your input."
  );
});