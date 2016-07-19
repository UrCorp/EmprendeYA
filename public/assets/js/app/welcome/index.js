$(function() {
  var $items = $('.app-services .list .item');
  var $generalModal = $('#generalModal');

  $generalModal.on('hidden.bs.modal', function (e) {
    $('.modal-body, .modal-footer', $generalModal).empty();
  });

  $items.each(function() {
    var $this = $(this);

    $this.click(function(event) {
      event.preventDefault();
      var enteprise_name = $this.data('name');

      $generalModal.modal('show');

      $.getJSON("enterprises/"+enteprise_name+"/description.json", function(data) {
        $('.modal-body', $generalModal).html(
          '<div class="row">'+
          '\t<div class="app-enterprise-description col-md-12">'+
          '\t\t<div class="col-md-5 no-side-padding">'+
          '\t\t\t<div style="background-image:url('+data.logo_source+');" class="logo"></div>'+
          '\t\t</div>'+
          '\t\t<div class="col-md-7">'+
          '\t\t\t<h3 class="name">'+data.name+'</h3>'+
          '\t\t\t<p class="description">'+data.description+'</p>'+
          '\t\t</div>'+
          '\t</div>'+
          '</div>'
        );
        
        if (data.description_source != "") {
          $('.modal-footer', $generalModal).html(
            '<a type="button" class="btn btn-more-info" href="'+data.description_source+'" target="__blank">Más información</a>'
          );
        }
      });
    });
  });
});