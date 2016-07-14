<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>EmprendeYA</title>
  <!-- [START Cascade Style Sheet Files] -->
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800,400italic,300italic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="{!! asset('public/assets/css/bootstrap.min.css') !!}">
  <link rel="stylesheet" type="text/css" href="{!! asset('public/assets/css/style.css') !!}">
  <!-- [END Cascade Style Sheet Files] -->
</head>
<body>
<div class="container-fluid">
  <div class="row">
    <header>
      <div class="col-md-12 app-header no-side-padding">
        <div class="col-md-5 logo-container">
          <img src="{!! asset('public/assets/img/logo.svg') !!}" alt="EmprendeYA Logotipo" title="Logotipo de EmprendeYA" class="app-logo">
        </div>
        <div class="col-md-7">
          <nav>
            <div class="col-md-12 no-side-padding app-navbar">
              <ul>
                <li><a href="#kit" class="anchorLink">EL KIT</a></li>
                <li><a href="#">NUESTROS CLIENTES</a></li>
                <li><a href="#">FAQ'S</a></li>
                <li><a href="#">COMIENZA YA</a></li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </header>
    @yield('content')
  </div>
</div>
<!-- [START JavaScript Files] -->
<script type="text/javascript" src="{!! asset('public/assets/js/jquery.min.js') !!}"></script>
<script type="text/javascript" src="{!! asset('public/assets/js/jquery.anchor.js') !!}"></script>
<script type="text/javascript" src="{!! asset('public/assets/js/bootstrap.min.js') !!}"></script>
<script type="text/javascript" src="{!! asset('public/assets/js/app.js') !!}"></script>
<!-- [END JavaScript Files] -->
</body>
</html>