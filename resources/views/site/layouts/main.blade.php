<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EmprendeYA</title>
  <!-- [START Cascade Style Sheet Files] -->
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800,400italic,300italic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="{!! asset('public/assets/css/bootstrap.min.css') !!}">
  <link rel="stylesheet" type="text/css" href="{!! asset('public/assets/css/font-awesome.min.css') !!}">
  <link rel="stylesheet" type="text/css" href="{!! asset('public/assets/css/style.css') !!}">
  <!-- [END Cascade Style Sheet Files] -->
  <!-- [START Favicon] -->
  <link rel="apple-touch-icon" sizes="180x180" href="{!! asset('public/assets/img/favicon/apple-touch-icon.png') !!}">
  <link rel="icon" type="image/png" href="{!! asset('public/assets/img/favicon/favicon-32x32.png') !!}" sizes="32x32">
  <link rel="icon" type="image/png" href="{!! asset('public/assets/img/favicon/favicon-16x16.png') !!}" sizes="16x16">
  <link rel="manifest" href="{!! asset('public/assets/img/favicon/manifest.json') !!}">
  <link rel="mask-icon" href="{!! asset('public/assets/img/favicon/safari-pinned-tab.svg') !!}" color="#d55b8e">
  <meta name="theme-color" content="#ffffff">
  <!-- [END Favicon] -->
</head>
<body>
<div id="generalModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
      </div>
      <div class="modal-footer">
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
@include('vendor.flash.message')
<div class="container-fluid">
  <div class="row">
    <header>
      <div id="header" class="col-md-12 app-header no-side-padding">
        <div class="col-md-5 col-sm-4 logo-container">
          <a href="{!! route('site.index') !!}">
            <img src="{!! asset('public/assets/img/logo.svg') !!}" alt="EmprendeYA Logotipo" title="Logotipo de EmprendeYA" class="app-logo">
          </a>
        </div>
        <div class="col-md-7 col-sm-8 no-side-padding">
          <nav>
            <div class="col-md-12 no-side-padding app-navbar">
              <ul>
                <li><a href="{!! (Route::is('site.index') ? '#kit' : URL::to('/#kit')) !!}" class="{!! (Route::is('site.index') ? 'anchorLink' : '') !!}">EL KIT</a></li>
                <li><a href="{!! route('site.clients') !!}">NUESTROS CLIENTES</a></li>
                <li><a href="{!! route('site.faq') !!}">FAQ</a></li>
                <li><a href="{!! route('site.startnow.index') !!}">COMIENZA YA</a></li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </header>
    @yield('content')
    <footer>
      <div class="app-footer col-xs-12">
        <div class="main-links col-lg-6 col-md-8 col-sm-10">
          <div class="col-sm-4 no-side-padding text-center">
            <a href="#">ACERCA DE</a>
          </div>
          <div class="col-sm-4 no-side-padding text-center">
            <a href="#">AVISO DE PRIVACIDAD</a>
          </div>
          <div class="col-sm-4 no-side-padding text-center">
            <a href="#">POLITICA DE COOKIES</a>
          </div>
        </div>
        <div class="col-lg-2 col-lg-offset-4 col-md-2 col-md-offset-2 col-sm-2 text-center">
          <img src="{!! asset('public/assets/img/logo-3.svg') !!}" alt="Globo de EmprendeYA" title="EmprendeYA" class="logo-globe">
        </div>
      </div>
    </footer>
  </div>
</div>
<!-- [START JavaScript Files] -->
<script type="text/javascript" src="{!! asset('public/assets/js/jquery.min.js') !!}"></script>
<script type="text/javascript" src="{!! asset('public/assets/js/jquery.anchor.js') !!}"></script>
<script type="text/javascript" src="{!! asset('public/assets/js/jquery.validate.js') !!}"></script>
<script type="text/javascript" src="{!! asset('public/assets/js/bootstrap.min.js') !!}"></script>
<script type="text/javascript" src="{!! asset('public/assets/js/app.js') !!}"></script>
@yield('scripts')
<!-- [END JavaScript Files] -->
</body>
</html>