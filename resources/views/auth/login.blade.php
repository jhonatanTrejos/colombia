@extends('layouts.main', ['class' => 'off-canvas-sidebar', 'activePage' => 'login', 'title' => __('Certificación Laboral')])

@section('content')
<div class="container" style="height: auto;">
  <div class="row align-items-center">
    <div class="col-md-9 ml-auto mr-auto mb-3 text-center">
      
    </div>
    <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">
      <form class="form" method="POST" action="{{ route('login') }}">
        @csrf

        <div class="card card-login card-hidden mb-3">
          <div class="card-header card-header-primary text-center">
            <h4 class="card-title"><strong>{{ __('Ingresar') }}</strong></h4>
            <div class="social-line">
              <a href="https://www.facebook.com/alcaldiaquinchia/" class="btn btn-just-icon btn-link btn-white">
                <i class="fa fa-facebook-square"></i>
              </a>
              <a href="https://twitter.com/alquinchia?lang=es" class="btn btn-just-icon btn-link btn-white">
                <i class="fa fa-twitter"></i>
              </a>
              <a href="http://www.quinchia-risaralda.gov.co/" class="btn btn-just-icon btn-link btn-white">
                <i class="fa fa-google-plus"></i>
              </a>
            </div>
          </div>
          <div class="card-body">
            <p class="card-description text-center">{{ __('Inicie sesión para acceder a sus historias laborales ') }}  </p>
            <div class="bmd-form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">email</i>
                  </span>
                </div>
                <input type="email" name="email" class="form-control" placeholder="{{ __('Email...') }}" value="{{ old('email') }}" required autocomplete="email" autofocus>
              </div>
              @if ($errors->has('email'))
                <div id="email-error" class="error text-danger pl-3" for="email" style="display: block;">
                  <strong>{{ $errors->first('email') }}</strong>
                </div>
              @endif
            </div>
            <div class="bmd-form-group{{ $errors->has('password') ? ' has-danger' : '' }} mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">lock_outline</i>
                  </span>
                </div>
                <input type="password" name="password" id="password" class="form-control" placeholder="{{ __('Contraseña...') }}" required autocomplete="current-password" autofocus>
              </div>
              @if ($errors->has('password'))
                <div id="password-error" class="error text-danger pl-3" for="password" style="display: block;">
                  <strong>{{ $errors->first('password') }}</strong>
                </div>
              @endif
            </div>
            <div class="form-check mr-auto ml-3 mt-3">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" id="policy" name="policy" {{ old('policy', 1) ? 'checked' : '' }} >
                <span class="form-check-sign">
                  <span class="check"></span>
                </span>
                <!--{{ __('Acepto los ') }} <a href="#exampleModalLong" data-toggle="modal" data-target="#exampleModalLong">{{ __('Terminos y condiciones') }}</a>-->
                {{ __('Acepto los ') }} <a href="">{{ __('Terminos y condiciones') }}</a>
              </label>
            </div>
          </div>
          <div class="card-footer justify-content-center">
            <button type="submit" class="btn btn-primary btn-link btn-lg">{{ __('Ingresar') }}</button>
          </div>
        </div>
      </form>
      <div class="row">
        <div class="col-6">
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" class="text-light">
                    <small>{{ __('¿Olvidó su contraseña?') }}</small>
                </a>
            @endif
        </div>
        <div class="col-6 text-right">
            <a href="{{ route('register') }}" class="text-light">
                <small>{{ __('Crear una cuenta ') }}</small>
            </a>
        </div>
      </div>
<!-- Modal -->
<div class="modal fade" id="exampleModalLong" style="animation-fill-mode: unset;"tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Terminos de Uso y politicas de privacidad</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <p class="bg-dark">El Ministerio del Trabajo comprometido con el uso legal, el tratamiento de acuerdo
      con los fines establecidos y la seguridad y privacidad de la información que
      recolecte, almacene, uso, circule o suprima, que contenga datos personales y en
      cumplimiento del mandato legal, establecido en la Constitución Política de Colombia
      (arts. 15 y 20), la Ley 1581 de 2012 por la cual se dictan disposiciones generales
      para la protección de datos personales y el Decreto 1377 de 2013 por el cual se
      reglamenta parcialmente la Ley 1581 de 2012 y al compromiso institucional en
      cuanto al tratamiento de la información, establece medidas generales para
      garantizar los niveles de seguridad y privacidad adecuados para la protección de
      datos personales, con el fin de evitar posibles adulteraciones, pérdidas, consultas,
      usos o accesos no autorizados, aplicable a los datos personales registrados en
      cualquier base de datos que administre el Ministerio del Trabajo y cuyo titular sea
      una persona natural.</p>
      <h1> DEFINICIONES</h1>
          <p> Autorización: <br> Consentimiento previo, expreso e informado del Titular, para llevar a
      cabo el tratamiento de datos personales.
      Aviso de privacidad: <br> Comunicación verbal o escrita generada por el responsable,
      dirigida al titular para el tratamiento de sus datos personales, mediante la cual se le
      informa acerca de la existencia de las políticas de tratamiento de información que le
      serán aplicables, la forma de acceder a las mismas y las finalidades del tratamiento
      que se pretende dar a los datos personales.
      Base de datos: <br> Conjunto organizado de datos personales que sea objeto de
      tratamiento.
      Dato personal: <br> Cualquier información vinculada o que pueda asociarse a una o
      varias personas naturales determinadas o determinables.
      Dato público: <br> Es el dato que no sea semiprivado, privado o sensible. Son
      considerados datos públicos, entre otros, los datos relativos al estado civil de las
      personas, a su profesión u oficio y a su calidad de comerciante o de servidor público.
      Por su naturaleza, los datos públicos pueden estar contenidos, entre otros, en
      registros públicos, documentos públicos, gacetas y boletines oficiales y sentencias
      judiciales debidamente ejecutoriadas que no estén sometidas a reserva.
      Dato semiprivado: <br> Es semiprivado el dato que no tiene naturaleza íntima,
      reservada, ni pública y cuyo conocimiento o divulgación puede interesar no sólo a
      su titular sino a cierto sector o grupo de personas o a la sociedad en general, como
      el dato financiero y crediticio de actividad comercial o de servicios a que se refiere
      el Título IV de la ley 1266 de 2008.
      <br>
      Datos sensibles: <br> Se entiende por datos sensibles aquellos que afectan la intimidad
      del titular o cuyo uso indebido puede generar su discriminación, tales como aquellos
      que revelen el origen racial o étnico, la orientación política, las convicciones
      religiosas o filosóficas, la pertenencia a sindicatos, organizaciones sociales, de
      derechos humanos o que promueva intereses de cualquier partido político o que
      garanticen los derechos y garantías de partidos políticos de oposición, así como los
      datos relativos a la salud, a la vida sexual, y los datos biométricos.
      Datos privados: Dato privado. Es el dato que por su naturaleza íntima o reservada
      sólo es relevante para el titular.
      <br>
      Encargado del tratamiento: Persona natural o jurídica, pública o privada, que por
      sí misma o en asocio con otros, realice el tratamiento de datos personales por
      cuenta del responsable del tratamiento.
      Responsable del tratamiento: Persona natural o jurídica, pública o privada, que
      por sí misma o en asocio con otros, decida sobre la base de datos ylo el tratamiento
      de los datos.
      <br>
      Titular: <br> Persona natural cuyos datos personales sean objeto de tratamiento.
      Transferencia: <br>
       La transferencia de datos tiene lugar cuando el responsable y/o
      encargado del tratamiento de datos personales, ubicado en Colombia, envía la
      información o los datos personales a un receptor, que a su vez es responsable del
      tratamiento y se encuentra dentro o fuera del país.
      Transmisión: <br> Tratamiento de datos personales que implica la comunicación de los
      mismos dentro o fuera del territorio de la República de Colombia cuando tenga por
      objeto la realización de un Tratamiento por el Encargado por cuenta del
      Responsable.
      Tratamiento: Cualquier operación o conjunto de operaciones sobre datos
      personales, tales como la recolección, almacenamiento, uso, circulación o
      supresión.
      OBJETIVO
      Establecer los lineamientos para obtener la autorización de los titulares, efectuar el
      tratamiento de los datos personales, las finalidades de uso, los derechos que le
      asisten a sus titulares, los canales de atención, así como los procedimientos
      internos para el tratamiento</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
    </div>
  </div>
</div>
@endsection