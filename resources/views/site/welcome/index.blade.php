@extends('site.layouts.main')
@section('content')
<section>
  <div class="app-jumbotron col-xs-12 no-side-padding">
    <div class="header">
      <header>
        <h1 class="title">TODO PARA TU<br/><b>OPORTUNIDAD</b></h1>
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
          <img src="{!! asset('public/assets/img/carousel-1.png') !!}" alt="Emprendedor 1">
          <div class="carousel-caption">
          </div>
        </div>
        <div class="item">
          <img src="{!! asset('public/assets/img/carousel-2.png') !!}" alt="Emprendedor 2">
          <div class="carousel-caption">
          </div>
        </div>
        <div class="item">
          <img src="{!! asset('public/assets/img/carousel-3.png') !!}" alt="Emprendedor 3">
          <div class="carousel-caption">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="app-quotes col-xs-12 no-side-padding">
    <div class="header">
      <header>
        <h2 class="title"><img src="{!! asset('public/assets/img/icon-quotation-marks-1.svg') !!}" alt="Comillas 1" title="Quotes" class="icon">TESTIMONIOS</h2>
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
  <div id="kit" class="app-kit col-xs-12">
    <article>
      <div class="col-xs-12 no-side-padding">
        <div class="col-md-4 col-sm-3 no-side-padding text-center">
          <div title="El Kit Emprendedor" class="img-kit"></div>
        </div>
        <div class="col-md-8 col-sm-9 no-side-padding">
          <div class="header">
            <header>
              <h2 class="title"><b>EL KIT</b><br/>EMPRENDEDOR</h2>
            </header>
          </div>
          <div class="content">
            <p><img src="{!! asset('public/assets/img/icon-quotation-marks-1.svg') !!}" alt="Comillas 2" class="icon">Saber a quién pedir consejos<br/> es la decisión más importante<br/> que un emprendedor tiene que<br/> tomar.</p>
          </div>
        </div>
      </div>
    </article>
  </div>
</section>
<section>
  <div class="app-services col-xs-12 no-side-padding">
    <div class="header">
      <header>
        <div class="text-center">
          <img src="{!! asset('public/assets/img/logo-2.svg') !!}" alt="Proyecto PyME - EmprendeYA" title="Proyecto PyME - EmprendeYA" class="img-logo" />
        </div>
        <div class="col-lg-8 col-lg-offset-2 col-xs-10 col-xs-offset-1 text-justify">
          <p class="explanation">El Kit incluye todo esto, estamos respaldados por las mejores empresas en México para que tengas a tu disposición todas las herramientas que necesitas.</p>
          <p class="explanation">Para más información da click en cada uno de los servicios:</p>
        </div>
      </header>
      <div class="col-xs-12 no-side-padding">
        <div class="col-lg-8 col-lg-offset-2 col-sm-10 col-sm-offset-1 list no-side-padding">
          <div class="item item-1 col-md-3 col-sm-4 col-xs-12" data-name="telcel">
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
          <div class="item item-2 col-md-3 col-sm-4 col-xs-12" data-name="proyecto-pyme">
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
          <div class="item item-3 col-md-3 col-sm-4 col-xs-12" data-name="urcorp">
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
          <div class="item item-4 col-md-3 col-sm-4 col-xs-12" data-name="legalario">
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
          <div class="item item-5 col-md-3 col-sm-4 col-xs-12" data-name="contax">
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
          <div class="item item-6 col-md-3 col-sm-4 col-xs-12"  data-name="aem">
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
          <div class="item item-7 col-md-3 col-md-offset-0 col-sm-4 col-sm-offset-2 col-xs-12" data-name="senor-pago">
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
          <div class="item item-8 col-md-3 col-sm-4 col-xs-12" data-name="rocketum">
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
  <div class="app-packages col-xs-12 no-side-padding">
    <article>
      <div class="description-container col-xs-12 no-side-padding">
        <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1 no-side-padding">
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
      </div>
    </article>
    <div class="comparative-container col-xs-12 no-side-padding">
      <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 no-side-padding">
        <table class="table table-striped">
          <thead>
            <tr>
              <th class="explanation">
                <p>Elige los beneficios<br/>de acuerdo a tus<br/>necesidades:</p>
              </th>
              @foreach ($kits as $kit)
              <th>
                <h3 class="name">{!! cstrtoupper($kit->name) !!}</h3>
                <div class="text-center">
                  <span class="price">{!! number_format($kit->price, 0) !!}<sup>00 MXN</sup><small>/mes</small></span>
                </div>
                <div class="btn-container">
                  <a href="{!! route('site.startnow.index', ['kit' => $kit->slug]) !!}" class="btn-chose {!! $kit->slug !!}">ELEGIR</a>
                </div>
              </th>
              @endforeach
            </tr>
          </thead>
          <tbody>
            @foreach ($services as $service)
              <tr>
                <td>{!! $service->description !!}</td>
              @foreach ($kits as $kit)
                <td><?php
                if ($service->kits->where('slug', $kit->slug)->count()) { 
                ?><div class="check-container">
                    <span class="fa fa-check"></span>
                  </div>
                <?php } ?>
                </td>
              @endforeach
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <div class="terms-container col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-xs-12 no-side-padding">
        <p>* Contrata el KIT DIGITAL por $775 pesos mensuales con un pago inicial de $1,500 pesos.</p>
        <p>** Contrata el KIT INTEGRAL por $775 pesos mensuales con un pago inicial de $2,500 pesos.</p>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="app-faq col-xs-12 no-side-padding">
    <div class="col-lg-10 col-lg-offset-1 col-xs-12 no-side-padding">
      <div class="col-sm-5 no-side-padding text-center">
        <img src="{!! asset('public/assets/img/img-steve-jobs.svg') !!}" alt="Steve Jobs" title="Steve Jobs" class="img-steve-jobs" />
      </div>
      <div class="col-sm-6 no-side-padding">
        <div class="content col-sm-12 col-xs-10 col-xs-offset-1 no-side-padding">
          <article>
            <p class="phrase">"La única manera de triunfar es amar lo que haces. Como con todo lo que tiene que ver con el corazón, sabrás cuando lo hayas encontrado"</p>
            <p class="author">STEVE JOBS</p>
          </article>
        </div>
        <div class="col-sm-12 col-xs-10 col-xs-offset-1 no-side-padding">
          <div class="references">
            <h2 class="title">Preguntas Frecuentes</h2>
            <a href="{!! route('site.faq') !!}" class="btn-faq">FAQ'S</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section>
  <div id="comienzaya" class="app-start-now col-xs-12 no-side-padding">
    <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
      <div class="header">
        <header>
          <h2 class="title">COMIENZA YA</h2>
        </header>
      </div>
      <div class="content">
        <p>¡Queremos saber más de tu proyecto!</p>
        <p>Escríbenos y nos pondremos en contacto lo más pronto posible para comenzar a apoyarte.</p>
      </div>
      <div class="start-form-container col-xs-12 no-side-padding">
        {!! Form::open(['route' => 'site.startnow.send', 'method' => 'POST', 'id' => 'startnow-form']) !!}
          {!! Form::hidden('from', 'index') !!}
          <div class="form-group">
            {!! Form::label('startnow[name]', 'NOMBRE*') !!}
            {!! Form::text('startnow[name]', old('startnow[name]'), ['class' => 'form-control', 'data-name' => 'startnow_name', 'required' => 'required', 'maxlength' => 60]) !!}
            
            <div id="startnow_name_validate">
              @if ($errors->has('name'))
                <label class="error">{{ $errors->first('name') }}</label>
              @endif
            </div>
          </div>
          <div class="form-group">
            {!! Form::label('startnow[phone]', 'TELEFONO*') !!}
            {!! Form::text('startnow[phone]', old('startnow[phone]'), ['class' => 'form-control', 'data-name' => 'startnow_phone', 'pattern' => '^\+?\d{1,3}?[- .]?\(?(?:\d{2,3})\)?[- .]?\d\d\d[- .]?\d\d\d\d$', 'required' => 'required']) !!}

            <div id="startnow_phone_validate">
              @if ($errors->has('phone'))
                <label class="error">{{ $errors->first('phone') }}</label>
              @endif
            </div>
          </div>
          <div class="form-group">
            {!! Form::label('startnow[email]', 'EMAIL*') !!}
            {!! Form::email('startnow[email]', old('startnow[email]'), ['class' => 'form-control', 'required' => 'required', 'data-name' => 'startnow_email', 'maxlength' => 255]) !!}
            
            <div id="startnow_email_validate">
              @if ($errors->has('email'))
                <label class="error">{{ $errors->first('email') }}</label>
              @endif
            </div>
          </div>
          <div class="form-group">
            {!! Form::label('startnow[company]', 'NOMBRE DE LA EMPRESA') !!}
            {!! Form::text('startnow[company]', old('startnow[company]'), ['class' => 'form-control', 'data-name' => 'startnow_company', 'maxlength' => 60]) !!}

            <div id="startnow_company_validate">
              @if ($errors->has('company'))
                <label class="error">{{ $errors->first('company') }}</label>
              @endif
            </div>
          </div>
          <div class="form-group">
            {!! Form::label('startnow[city]', 'CIUDAD') !!}
            {!! Form::text('startnow[city]', old('startnow[city]'), ['class' => 'form-control', 'data-name' => 'startnow_city', 'maxlength' => 60]) !!}

            <div id="startnow_city_validate">
              @if ($errors->has('city'))
                <label class="error">{{ $errors->first('city') }}</label>
              @endif
            </div>
          </div>
          <div class="form-group">
            {!! Form::label('startnow[turn]', 'GIRO DE LA EMPRESA*') !!}
            {!! Form::text('startnow[turn]', old('startnow[turn]'), ['class' => 'form-control', 'required' => 'required', 'data-name' => 'startnow_turn', 'maxlength' => 60]) !!}

            <div id="startnow_turn_validate">
              @if ($errors->has('turn'))
                <label class="error">{{ $errors->first('turn') }}</label>
              @endif
            </div>
          </div>
          <div class="form-group">
            {!! Form::label('startnow[subject]', 'CUENTANOS MÁS DE TU PROYECTO') !!}
            {!! Form::textarea('startnow[subject]', old('startnow[subject]'), ['class' => 'form-control', 'rows' => 5, 'data-name' => 'startnow_subject', 'maxlength' => 500]) !!}

            <div id="startnow_subject_validate">
              @if ($errors->has('subject'))
                <label class="error">{{ $errors->first('subject') }}</label>
              @endif
            </div>
          </div>
          <div class="form-group">
            @foreach ($kits as $kit)
              <div class="col-xs-4 no-side-padding">
                <label>
                  {!! Form::radio('startnow[kit]', $kit->slug, false, ['id' => 'kit-'.$kit->slug, 'data-name' => 'startnow_kit']) !!}
                  KIT {{ cstrtoupper($kit->name) }}
                </label>
              </div>
            @endforeach
          </div>
          <div id="startnow_kit_validate" class="help-block" style="margin-top:50px;margin-bottom:-20px;">
            @if ($errors->has('kit_id'))
              <label class="error">{{ $errors->first('kit_id') }}</label>
            @endif
          </div>
          <div class="form-group">
            <button class="btn-send">ENVIAR</button>
          </div>
        {!! Form::close() !!}
      </div>
    </div>
  </div>
</section>
@endsection
@section('scripts')
<script type="text/javascript" src="{!! asset('public/assets/js/app/welcome/index.js') !!}"></script>
@endsection