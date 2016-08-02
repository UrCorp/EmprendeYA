@extends('site.layouts.main')
@section('content')
<section>
  <div class="app-clients col-xs-12">
    <div class="col-lg-10 col-lg-offset-1 col-xs-12">
      <header>
        <div class="header">
          <h1 class="title">EMPRESAS</h1>
        </div>
      </header>
      <div class="col-xs-12 no-side-padding">
        <aside>
          <div class="col-sm-3 col-xs-12 visible-xs aside">
            <nav>
              <h3 class="title">PORTAFOLIO</h3>
              <ul>
                <li>
                  <a href="#">TODAS</a>
                </li>
                <li>
                  <a href="#">CASOS DE ESTUDIO</a>
                </li>
              </ul>
              <h3 class="title">CATEGORÍAS</h3>
              <ul>
                <li>
                  <a href="#">INMOBILIARIAS</a>
                </li>
                <li>
                  <a href="#">FINANZAS</a>
                </li>
                <li>
                  <a href="#">ALIMENTOS</a>
                </li>
                <li>
                  <a href="#">DEPORTES</a>
                </li>
                <li>
                  <a href="#">MARKETING</a>
                </li>
                <li>
                  <a href="#">RESTAURANTES</a>
                </li>
              </ul>
            </nav>
          </div>
        </aside>
        <div class="col-sm-9 clients-container">
          <article>
            <div class="client col-xs-12 no-side-padding">
              <header>
                <div class="header">
                  <h2 class="title">B BETO'S</h2>
                </div>
              </header>
              <div class="col-xs-12 no-side-padding">
                <div class="col-md-3 text-center no-side-padding">
                  <img src="{!! asset('public/assets/img/img-bbetos.jpg') !!}" class="thumbnail inline-block">
                </div>
                <div class="col-md-9">
                  <p>Empresa de Artesanías y artículos de diversión que demuestran la creatividad y la mano de obra mexicana de excelente calidad de exportación. Con un crecimiento sostenido y clientes en la República Mexicana y Estados Unidos, BBetos se está consolidando como un negocio fuerte y prometedor. En Proyecto PyME queremos colaborar con su crecimiento sostenido.</p>
                  <a href="http://www.bbetos.com.mx/Inicio.html" target="__blank" class="pull-right more-info">MÁS INFORMACIÓN</a>
                </div>
              </div>
            </div>
          </article>
          <article>
            <div class="client col-xs-12 no-side-padding">
              <header>
                <div class="header">
                  <h2 class="title">OUTCOM</h2>
                </div>
              </header>
              <div class="col-xs-12 no-side-padding">
                <div class="col-md-3 text-center no-side-padding">
                  <img src="{!! asset('public/assets/img/img-outcom.jpg') !!}" class="thumbnail inline-block">
                </div>
                <div class="col-md-9">
                  <p>Outcom es una agencia que ofrece servicios de comunicación, diseño gráfico, programación web y producción de video, con un enfoque estratégico para maximizar el potencial de su marca. Vendemos solo que necesita, y lo acompañamos en el proceso de implementación.  Ya sea una empresa de 10 o de 100 empleados, en Outcom contamos con la capacidad para resolver problemas internos y externos que se relacionen con su imagen corporativa, publicidad y recurso humano.</p>
                 <!--<a href="#" target="__blank" class="pull-right more-info">MÁS INFORMACIÓN</a>-->
                </div>
              </div>
            </div>
          </article>
          <article>
            <div class="client col-xs-12 no-side-padding">
              <header>
                <div class="header">
                  <h2 class="title">HOT DOGS "LA CONGREGACIÓN"</h2>
                </div>
              </header>
              <div class="col-xs-12 no-side-padding">
                <div class="col-md-3 text-center no-side-padding">
                  <img src="{!! asset('public/assets/img/img-hotdogs-congregacion.jpg') !!}" class="thumbnail inline-block">
                </div>
                <div class="col-md-9">
                  <p>Hot Dogs “La congregación” es un establecimiento de Hot Dogs, que lleva años en el mercado y a adquirido mucha reputación en el ámbito de comida rápida, actualmente se han actualizado y ha abierto su negocio a nuevos mercados, como lo son eventos privados, festivales y servicio a domicilio.</p>
                  <!--<a href="#" target="__blank" class="pull-right more-info">MÁS INFORMACIÓN</a>-->
                </div>
              </div>
            </div>
          </article>
        </div>
        <aside>
          <div class="col-sm-3 col-xs-12 hidden-xs aside">
            <nav>
              <h3 class="title">PORTAFOLIO</h3>
              <ul>
                <li>
                  <a href="#">TODAS</a>
                </li>
                <li>
                  <a href="#">CASOS DE ESTUDIO</a>
                </li>
              </ul>
              <h3 class="title">CATEGORÍAS</h3>
              <ul>
                <li>
                  <a href="#">INMOBILIARIAS</a>
                </li>
                <li>
                  <a href="#">FINANZAS</a>
                </li>
                <li>
                  <a href="#">ALIMENTOS</a>
                </li>
                <li>
                  <a href="#">DEPORTES</a>
                </li>
                <li>
                  <a href="#">MARKETING</a>
                </li>
                <li>
                  <a href="#">RESTAURANTES</a>
                </li>
              </ul>
            </nav>
          </div>
        </aside>
      </div>
    </div>
  </div>
</section>
@endsection
@section('scripts')

@endsection