@extends('site.layouts.main')
@section('content')
<section>
  <div class="app-start-now col-md-12 no-side-padding">
    <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2">
      <div class="header">
        <header>
          <h2 class="title">COMIENZA YA</h2>
        </header>
      </div>
      <div class="content">
        <p>¡Queremos saber más de tu proyecto!</p>
        <p>Escríbenos y nos pondremos en contacto lo más pronto posible para comenzar a apoyarte.</p>
      </div>
      <div class="start-form-container col-md-12 no-side-padding">
        {!! Form::open(['route' => 'site.startnow.send', 'method' => 'POST']) !!}
          {!! Form::hidden('from', 'startnow') !!}
          <div class="form-group">
            {!! Form::label('startnow[name]', 'NOMBRE*') !!}
            {!! Form::text('startnow[name]', null, ['class' => 'form-control']) !!}
          </div>
          <div class="form-group">
            {!! Form::label('startnow[phone]', 'TELEFONO*') !!}
            {!! Form::text('startnow[phone]', null, ['class' => 'form-control']) !!}
          </div>
          <div class="form-group">
            {!! Form::label('startnow[email]', 'EMAIL*') !!}
            {!! Form::email('startnow[email]', null, ['class' => 'form-control']) !!}
          </div>
          <div class="form-group">
            {!! Form::label('startnow[company]', 'NOMBRE DE LA EMPRESA') !!}
            {!! Form::text('startnow[company]', null, ['class' => 'form-control']) !!}
          </div>
          <div class="form-group">
            {!! Form::label('startnow[city]', 'CIUDAD') !!}
            {!! Form::text('startnow[city]', null, ['class' => 'form-control']) !!}
          </div>
          <div class="form-group">
            {!! Form::label('startnow[turn]', 'GIRO DE LA EMPRESA*') !!}
            {!! Form::text('startnow[turn]', null, ['class' => 'form-control']) !!}
          </div>
          <div class="form-group">
            {!! Form::label('startnow[subject]', 'CUENTANOS MÁS DE TU PROYECTO') !!}
            {!! Form::textarea('startnow[subject]', null, ['class' => 'form-control', 'rows' => '4']) !!}
          </div>
          <div class="form-group">
            @foreach ($kits as $kit)
              <div class="col-md-4 no-side-padding">
                <label>
                  {!! Form::radio('startnow[kit]', $kit->slug, $kit->slug === $kit_slug, ['id' => 'kit-'.$kit->slug]) !!}
                  KIT {{ cstrtoupper($kit->name) }}
                </label>
              </div>
            @endforeach
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