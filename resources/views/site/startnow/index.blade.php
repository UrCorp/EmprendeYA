@extends('site.layouts.main')
@section('content')
<section>
  <div class="app-start-now col-xs-12 no-side-padding">
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
          {!! Form::hidden('from', 'startnow') !!}
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
<script type="text/javascript" src="{!! asset('public/assets/js/app/startnow/index.js') !!}"></script>
@endsection