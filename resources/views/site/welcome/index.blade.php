@extends('site.layouts.main')
@section('content')
<section>
  <div class="app-jumbotron col-md-12 no-side-padding">
    <div class="header">
      <header>
        <h1 class="title fc-purple">TODO PARA TU<br/><b>OPORTUNIDAD</b></h1>
      </header>
    </div>
    <div id="main-carousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#main-carousel" data-slide-to="0" class="active"></li>
        <li data-target="#main-carousel" data-slide-to="1"></li>
        <li data-target="#main-carousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="{!! asset('public/assets/img/carousel-1.jpg') !!}" alt="Emprendedor 1">
          <div class="carousel-caption">
          </div>
        </div>
        <div class="item">
          <img src="{!! asset('public/assets/img/carousel-2.jpg') !!}" alt="Emprendedor 2">
          <div class="carousel-caption">
          </div>
        </div>
        <div class="item">
          <img src="{!! asset('public/assets/img/carousel-3.jpg') !!}" alt="Emprendedor 3">
          <div class="carousel-caption">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="app-quotes col-md-12 no-side-padding">
    <div class="header">
      <header>
        <h2 class="title"><img src="{!! asset('public/assets/img/icon-quotation-marks-1.svg') !!}" alt="Comillas 1" title="Quotes" class="icon">QUOTES</h2>
      </header>
    </div>
    <div id="quotes-carousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#quotes-carousel" data-slide-to="0" class="active"></li>
        <li data-target="#quotes-carousel" data-slide-to="1"></li>
        <li data-target="#quotes-carousel" data-slide-to="2"></li>
        <li data-target="#quotes-carousel" data-slide-to="3"></li>
        <li data-target="#quotes-carousel" data-slide-to="4"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <div class="carousel-caption">
            <article>
              <p class="content">"Es tener todo lo que necesito al costo<br/> de mi contador actual"</p>
              <p class="person-name">Emprendedor Incubadora UVM</p>
            </article>
          </div>
        </div>
        <div class="item">
          <div class="carousel-caption">
            <article>
              <p class="content">"No sabía que algo así existía, es ideal<br/> para todo el que quiera emprender"</p>
              <p class="person-name">Directivo Sejuve</p>
            </article>
          </div>
        </div>
        <div class="item">
          <div class="carousel-caption">
            <article>
              <p class="content">"Es lo que necesito para lograr mis<br/> ventas a grandes empresas"</p>
              <p class="person-name">Emprendedor Tec de Mty</p>
            </article>
          </div>
        </div>
        <div class="item">
          <div class="carousel-caption">
            <article>
              <p class="content">"Llevo varios años con mi empresa y<br/> nunca me había preocupado por<br/> estructurarla tan bien"</p>
              <p class="person-name">Micro Empresario</p>
            </article>
          </div>
        </div>
        <div class="item">
          <div class="carousel-caption">
            <article>
              <p class="content">"Todos los jóvenes emprendedores<br/> deben tenerlo para empezar"</p>
              <p class="person-name">Directivo Coparmex</p>
            </article>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section>
  <div id="kit" class="app-kit col-md-12">
    <article>
      <div class="col-md-12 no-side-padding">
        <div class="col-md-4 no-side-padding text-center">
          <div title="El Kit Emprendedor" class="img-kit"></div>
        </div>
        <div class="col-md-8 no-side-padding">
          <div class="header">
            <header>
              <h2 class="title"><b>EL KIT</b><br/>EMPRENDEDOR</h2>
            </header>
          </div>
          <div class="content">
            <p><img src="{!! asset('public/assets/img/icon-quotation-marks-1.png') !!}" alt="Comillas 2" class="icon">Saber a quién pedir consejos<br/> es la decisión más importante<br/> que un emprendedor tiene que<br/> tomar.</p>
          </div>
        </div>
      </div>
    </article>
  </div>
</section>
<section>
  <div class="app-services col-md-12 no-side-padding">
    <div class="header">
      <header>
        <div class="text-center">
          <img src="{!! asset('public/assets/img/logo-2.svg') !!}" alt="Proyecto PyME - EmprendeYA" title="Proyecto PyME - EmprendeYA" class="img-logo" />
        </div>
        <div class="col-md-8 col-md-offset-2 text-center">
          <p class="explanation">El Kit incluye todo esto, estamos respaldados por las mejores empresas en México para que tengas a tu disposición todas las herramientas que necesitas.</p>
        </div>
      </header>
      <div class="col-md-12 no-side-padding">
        <div class="col-md-8 col-md-offset-2 list no-side-padding">
          <div class="item col-md-3">
            <article>
              <div class="text-center">
                <div class="icon icon-cellphone"></div>
              </div>
              <header>
                <h3 class="title">TELÉFONO ILIMITADO<br/> Y PLAN DE DATOS</h3>
              </header>
              <p class="description">Te damos una lìnea TELCEL totalmente ilimitado y con acceso a internet</p>
            </article>
          </div>
          <div class="item col-md-3">
            <article>
              <div class="text-center">
                <div class="icon icon-money"></div>
              </div>
              <header>
                <h3 class="title">FINANCIAMIENTO<br/> SIN TRABAS</h3>
              </header>
              <p class="description">Créditos para licitaciones, órdenes de compra, surtir pedidos y compra de equipo</p>
            </article>
          </div>
          <div class="item col-md-3">
            <article>
              <div class="text-center">
                <div class="icon icon-web-design"></div>
              </div>
              <header>
                <h3 class="title">DISEÑO DE<br/>PÁGINAS WEB</h3>
              </header>
              <p class="description">Todas las empresas necesitan tener presencia en la era digital, URCORP te lleva ahí</p>
            </article>
          </div>
          <div class="item col-md-3">
            <article>
              <div class="text-center">
                <div class="icon icon-legal"></div>
              </div>
              <header>
                <h3 class="title">CONTRATOS Y<br/> ASESORÍA LEGAL</h3>
              </header>
              <p class="description">LEGALARIO te brinda apoyo con contratos, asesoría y servicios legales</p>
            </article>
          </div>
        </div>
      </div>
      <div class="col-md-12 no-side-padding">
        <div class="col-md-8 col-md-offset-2 list no-side-padding">
          <div class="item col-md-3">
            <article>
              <div class="text-center">
                <div class="icon icon-calc"></div>
              </div>
              <header>
                <h3 class="title">MANEJO DE<br/>CONTABILIDAD</h3>
              </header>
              <p class="description">Nos encargamos del área contable, fiscal y financiera</p>
            </article>
          </div>
          <div class="item col-md-3">
            <article>
              <div class="text-center">
                <div class="icon icon-business"></div>
              </div>
              <header>
                <h3 class="title">PLATAFORMA DE<br/> NEGOCIOS</h3>
              </header>
              <p class="description">Para que hagas más negocios con empresas de México y EUA</p>
            </article>
          </div>
          <div class="item col-md-3">
            <article>
              <div class="text-center">
                <div class="icon icon-card-terminal"></div>
              </div>
              <header>
                <h3 class="title">TERMINAL MÓVIL<br/>PARA TARJETAS</h3>
              </header>
              <p class="description">Acepta pagos con tarjeta sin tener que rentar una terminal de banco</p>
            </article>
          </div>
          <div class="item col-md-3">
            <article>
              <div class="text-center">
                <div class="icon icon-management-system"></div>
              </div>
              <header>
                <h3 class="title">SISTEMA 2.0 DE<br/> ADMINISTRACIÓN</h3>
              </header>
              <p class="description">Maneja ventas, CRM clientes, Bodegas, Inventarios, Facturas Electrónicas y más</p>
            </article>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="app-packages col-md-12 no-side-padding">
    <article>
      <div class="description-container col-md-6 col-md-offset-3 no-side-padding">
        <div class="header">
          <header>
            <h2 class="title">Confiable, fácil y práctico</h2>
          </header>
          <div class="content">
            <div class="icon"></div>
            <p>Porque tu éxito es nuestro éxito, te ofrecemos tres opciones de KIT que se ajustan a tus necesidades e incluyen todo lo que necesitas para arrancar o hacer crecer tu negocio.</p>
          </div>
        </div>
      </div>
    </article>
  </div>
</section>
<section>
  <div class="app-faqs col-md-12 no-side-padding">
    <div class="col-md-10 col-md-offset-1 no-side-padding">
      <div class="col-md-5 no-side-padding text-center">
        <img src="{!! asset('public/assets/img/img-steve-jobs.svg') !!}" alt="Steve Jobs" title="Steve Jobs" class="img-steve-jobs" />
      </div>
      <div class="col-md-7 no-side-padding">
        <div class="content col-md-12 no-side-padding">
          <article>
            <p class="phrase">"La única manera de triunfar es amar lo que haces. Como con todo lo que tiene que ver con el corazón, sabrás cuando lo hayas encontrado"</p>
            <p class="author">STEVE JOBS</p>
          </article>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection