$(function() {
  var $generalModal = $('#generalModal');

  var startnow_validator = $('#startnow-form').validate({
    rules: {
      "startnow[name]": {
        required: true,
        maxlength: 60
      },
      "startnow[phone]": {
        required: true,
        regex: /^[0-9]{10,10}$/
      },
      "startnow[email]": {
        required: true,
        email: true,
        maxlength: 255
      },
      "startnow[company]": {
        maxlength: 60
      },
      "startnow[city]": {
        maxlength: 60
      },
      "startnow[turn]": {
        required: true,
        maxlength: 60
      },
      "startnow[subject]": {
        maxlength: 500
      },
      "startnow[kit]": {
        required: true
      }
    },
    messages: {
      "startnow[name]": {
        required: "Por favor, introduzca su nombre."
      },
      "startnow[phone]": {
        required: "Por favor, introduzca su número de teléfono o celular.",
        regex: "El número telefónico debe estar conformado únicamente por 10 dígitos."
      },
      "startnow[email]": {
        required: "Por favor, introduzca su correo electrónico.",
        email: "Correo electrónico inválido.",
      },
      "startnow[turn]": {
        required: "Por favor, introduzca el giro de su empresa.",
      },
      "startnow[kit]": {
        required: "Seleccione alguno de los paquetes."
      }
    },
    errorPlacement: function (error, element) {
      var name = $(element).data("name");
      error.appendTo($("#"+name+"_validate"));
    },
  });
});