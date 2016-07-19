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
      <img src="https://doc-08-5s-docs.googleusercontent.com/docs/securesc/71vdh2g93eu4vannirl3h1n6takb2eul/3m7aj3k4gqvemc5vk2ma1h4knv5ujika/1468886400000/14058214333761146473/14058214333761146473/0Bw5pmXFuJtBQOUR0SWxWaHFtQ3M?e=view" alt="Logo EmprendeYA y Proyecto PYME" title="EmprendeYA y ProyectoPYME" style="display:inline-block;width:432px;height:70px;margin-bottom:30px;" />
    </div>
    <div style="width:100%;display:inline-block;margin:auto;text-align:center;">
      <h1 style="font-weight:bold;margin-bottom:30px;">DATOS DE COTIZACIÓN</h1>
      <p style="font-size:24px;font-weight:400;">Se solicita <b>KIT {{ cstrtoupper($startnow['kit']->name) }}</b></p>
    </div>
    <div style="width:100%;display:inline-block;margin:auto;font-weight:400;font-size:18px;">
      <table style="width:100%;display:block;margin:auto;">
        <tbody style="width:100%;">
          <tr style="width:100%;">
            <td style="width:480px;text-align:center;padding:15px;font-weight:bold;">NOMBRE: </td>
            <td style="width:480px;text-align:center;padding:15px;">{{ $startnow['name'] }}</td>
          </tr>
          <tr style="width:100%;">
            <td style="width:480px;text-align:center;padding:15px;font-weight:bold;">TELÉFONO: </td>
            <td style="width:480px;text-align:center;padding:15px;">{{ $startnow['phone'] }}</td>
          </tr>
          <tr style="width:100%;">
            <td style="width:480px;text-align:center;padding:15px;font-weight:bold;">E-MAIL: </td>
            <td style="width:480px;text-align:center;padding:15px;"><a href="mailto:{{ $startnow['email'] }}" style="color:#E6184B;">{{ $startnow['email'] }}</a></td>
          </tr>
          <tr style="width:100%;">
            <td style="width:480px;text-align:center;padding:15px;font-weight:bold;">NOMBRE DE LA EMPRESA:</td>
            <td style="width:480px;text-align:center;padding:15px;">{{ $startnow['company'] }}</td>
          </tr>
          <tr style="width:100%;">
            <td style="width:480px;text-align:center;padding:15px;font-weight:bold;">CIUDAD:</td>
            <td style="width:480px;text-align:center;padding:15px;">{{ $startnow['city'] }}</td>
          </tr>
          <tr style="width:100%;">
            <td style="width:480px;text-align:center;padding:15px;font-weight:bold;">GIRO DE LA EMPRESA:</td>
            <td style="width:480px;text-align:center;padding:15px;">{{ $startnow['turn'] }}</td>
          </tr>
          <tr style="width:100%;">
            <td colspan="2" style="width:480px;text-align:center;padding:15px;font-weight:bold;">EL PROYECTO DEL CLIENTE:</td>
          </tr>
          <tr style="width:100%;">
            <td colspan="2" style="width:480px;text-align:center;padding:15px;">{{ $startnow['subject'] }}</td>
          </tr>
        </tbody>
      </table>
    </div>
    <div style="width:100%;display:inline-block;margin:auto;">
      <div style="float:right;display:inline-block;margin:auto;font-weight:400;font-size:24px;">
        <p>Total: <b>${{ number_format($startnow['kit']->price, 2) }}</b></p>
      </div>
    </div>
    <div style="width:100%;display:inline-block;margin:auto;text-align:center;">
      <p style="font-size: 18px;">Por favor, ponerse en contacto con el cliente para resolver dudas.</p>
    </div>
  </div>
  <div style="width:100%;display:inline-block;margin:auto;min-height:110px;background-color:#E6184B;border-top:16px solid #372751;">
  </div>
</div>
</body>
</html>