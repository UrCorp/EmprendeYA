<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <title>Solicitud de KIT | ComienzaYA</title>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800,400italic,300italic' rel='stylesheet' type='text/css'>
</head>
<body style="font-family: 'Open sans',helvetica, arial, sans-serif;margin:0;background-color: #F5F5F5;">
<div style="display:block;margin:auto;width:996px;background-color:#FFFFFF;">
  <div style="width:92%;display:block;margin:auto;padding:60px 25px;">
    <div style="width:100%;display:inline-block;margin:auto;text-align:center;">
      <img src="http://emprendeya.org/public/assets/img/logo-2.svg" alt="Logo EmprendeYA y Proyecto PYME" title="EmprendeYA y ProyectoPYME" style="display:inline-block;width:432px;height:70px;margin-bottom:30px;" />
    </div>
    <div style="width:100%;display:inline-block;margin:auto;text-align:center;">
      <h1 style="font-weight:bold;margin-bottom:30px;">COTIZACIÓN DE KIT</h1>
      <p style="font-size:24px;font-weight:400;">Ha cotizado el <b>KIT {{ cstrtoupper($startnow['kit']->name) }}</b> con los siguientes beneficios:</p>
    </div>
    <div style="width:100%;display:inline-block;margin:auto;font-weight:400;font-size:18px;text-align:center;">
      <ul style="display:inline-block;margin-left:-180px;margin-bottom:0;">
        @foreach ($startnow['kit']->services as $service)
          <li style="text-align:left;margin-bottom:15px;">{!! $service->description !!}</li>
        @endforeach
      </ul>
    </div>
    <div style="width:100%;display:inline-block;">
      <div style="display:inline-block;font-weight:400;font-size:24px;width:100%;">
        <p style="text-align: center;">Total: <b>${{ number_format($startnow['kit']->price, 2) }}</b></p>
      </div>
    </div>
    <div style="width:100%;display:inline-block;text-align:center;">
      <p style="font-size:18px;line-height:26px;display:inline-block;width:72%;">Por favor, redactanos un correo a <a href="mailto:comienzaya@emprendeya.org" style="color:#E6184B;">comienzaya@emprendeya.org</a> con los requerimientos de tu KIT o bien reenviando este mensaje incluyendo tu número de teléfono o celular para poder comunicarnos contigo.</p>
    </div>
  </div>
  <div style="width:100%;display:inline-block;margin:auto;min-height:110px;background-color:#E6184B;border-top:16px solid #372751;">
  </div>
</div>
</body>
</html>