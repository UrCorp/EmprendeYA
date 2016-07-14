@extends('site.layouts.main')
@section('content')
<section>
  <div class="app-jumbotron col-md-12 no-side-padding">
    <div class="title-container">
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
    <div class="title-container">
      <header>
        <h2 class="title"><img src="{!! asset('public/assets/img/icon-quotation-marks-1.png') !!}" alt="Comillas 1" title="Quotes" class="icon">QUOTES</h2>
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
@endsection