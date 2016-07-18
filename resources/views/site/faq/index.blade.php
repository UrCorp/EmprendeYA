@extends('site.layouts.main')
@section('content')
<section>
  <div class="app-faq-1 col-md-12">
    <div class="col-md-10 col-md-offset-1">
      <header>
        <div class="header">
          <h1 class="title">FAQ</h1>
          <p class="explanation">Estas son lagunas de las dudas más frecuentes entre nuestros clientes. Si necesitas más información contáctanos a nuestro correo electrónico: <a href="mailto:comienzaya@emprendeya.org">comienzaya@emprendeya.org</a></p>
        </div>
      </header>
      <div class="col-md-12 no-side-padding">
        <div class="col-md-3 no-side-padding">
          <nav>
            <ul class="nav nav-pills nav-stacked faq-nav">
              <li role="presentation" class="active"><a href="#phone" aria-controls="phone" role="tab" data-toggle="tab">TELÉFONO</a></li>
              <li role="presentation"><a href="#financing" aria-controls="financing" role="tab" data-toggle="tab">FINANCIAMIENTO</a></li>
              <li role="presentation"><a href="#design" aria-controls="design" role="tab" data-toggle="tab">DISEÑO</a></li>
              <li role="presentation"><a href="#legal" aria-controls="legal" role="tab" data-toggle="tab">CONTRATOS Y ASESORÍA LEGAL</a></li>
              <li role="presentation"><a href="#accounting" aria-controls="accounting" role="tab" data-toggle="tab">CONTABILIDAD</a></li>
              <li role="presentation"><a href="#business-platform" aria-controls="business-platform" role="tab" data-toggle="tab">PLATAFORMA DE NEGOCIOS</a></li>
              <li role="presentation"><a href="#card-terminal" aria-controls="card-terminal" role="tab" data-toggle="tab">TERMINAL MÓVIL</a></li>
              <li role="presentation"><a href="#management" aria-controls="management" role="tab" data-toggle="tab">ADMINISTRACIÓN</a></li>
            </ul>
          </nav>
        </div>
        <div class="col-md-9">
          <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="phone">.1.</div>
            <div role="tabpanel" class="tab-pane" id="financing">.2.</div>
            <div role="tabpanel" class="tab-pane" id="design">.3.</div>
            <div role="tabpanel" class="tab-pane" id="legal">.4.</div>
            <div role="tabpanel" class="tab-pane" id="accounting">.5.</div>
            <div role="tabpanel" class="tab-pane" id="business-platform">.6.</div>
            <div role="tabpanel" class="tab-pane" id="card-terminal">.7.</div>
            <div role="tabpanel" class="tab-pane" id="management">.8.</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
@section('scripts')

@endsection