$(function() {
  var $navbar = $('#navbar'),
      $btnOpenNavbar = $('#btn-open-navbar'),
      $generalModal = $('#generalModal'),
      $flashOverlayModal = $('#flash-overlay-modal'),
      $privacyNotice = $('#privacyNotice');
  
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

  $generalModal.on('hidden.bs.modal', function (e) {
    $('.modal-body, .modal-footer', $generalModal)
      .removeClass('privacyNoticeModal')
      .empty();
  });

  $privacyNotice.click(function(event) {
    event.preventDefault();

    $('.modal-body', $generalModal).html(
      '<div class="row">'+
      '\t<div class="col-xs-10 col-xs-offset-1">'+
      '\t\t<h3 class="text-center bottom-margin">AVISO DE PRIVACIDAD</h3>'+
      '\t\t<p class="text-justify">Los usuarios de este sitio web, así como toda persona '+
      '\t\ttanto física como moral que proporcione cualquier tipo de '+
      '\t\tinformación y lo aplique para alguno de nuestros apoyos '+
      '\t\t(en lo sucesivo denominado como el “Interesado”) autoriza '+
      '\t\tdesde este momento a PROYECTO PYME, S.A.P.I. DE C.V. '+
      '\t\t(“PYME”) a que comparta su información legal, datos '+
      '\t\tcontenidos en la solicitud de crédito que con esta fecha '+
      '\t\tsuscribió a favor de PYME, en el Contrato de Crédito que en '+
      '\t\tsu caso, celebre con PYME y demás datos personales, a sus '+
      '\t\tsocios comerciales, sus sociedades subsidiarias, afiliadas '+
      '\t\to relacionadas, terceros proveedores de servicios con quienes '+
      '\t\tPYME en su caso, tenga una relación jurídica o comercial, y/o '+
      '\t\tcualquier otra persona física o moral, y a autoridades '+
      '\t\tcompetentes y consiente su tratamiento dentro de los Estados '+
      '\t\tUnidos Mexicanos, con el propósito de (i) proveerle un '+
      '\t\tservicio y/o un bien, (ii) realizar actividades de mercadeo '+
      '\t\ty promoción en general, así como para mantener comunicación '+
      '\t\ten general, (iii) informarle de los productos y servicios '+
      '\t\tque PYME ofrece al público en general, (iv) análisis '+
      '\t\testadísticos y de mercado, (v) mantener actualizados los '+
      '\t\tregistros PYME para poder responder a las consultas del '+
      '\t\tInteresado, así como dar seguimiento a la relación legal que '+
      '\t\ten su caso, exista entre PYME y el “Interesado”, por el '+
      '\t\ttiempo que ésta última dure y (vi) para los demás actos y '+
      '\t\tgestiones que PYME considere pertinente, siempre al amparo '+
      '\t\tde lo determinado por la Ley Federal de Protección de Datos '+
      '\t\tPersonales en Posesión de los Particulares y demás normatividad '+
      '\t\ty leyes aplicables.</p>'+
      '\t\t<p class="text-justify">Este aviso de privacidad podrá ser modificado de tiempo '+
      '\t\ten tiempo por PYME. Dichas modificaciones serán oportunamente '+
      '\t\tinformadas a través de nuestra página en internet y/o cualquier '+
      '\t\totro medio de comunicación oral, impreso o electrónico que PYME '+
      '\t\tdetermine para tal efecto.</p>'+
      '\t</div>'+
      '</div>'
    );

    $('.modal-footer', $generalModal).html(
      '<button type="button" class="btn btn-primary" data-dismiss="modal">Aceptar</button>'
    );

    $('.modal-body', $generalModal).addClass('privacyNoticeModal');

    $generalModal.modal('show');
  });
});