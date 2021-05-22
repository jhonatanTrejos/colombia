<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/stilo.css') }}" rel="stylesheet">
  <link href="{{ asset('css/estilo.css') }}" rel="stylesheet">

  <title>pagina de inicio</title>
</head>

<body>

  <div class="container-fluid bg-primary">
    <div class="row">
      <div class="col-md-4"><img src="{{ asset('imagenes/descarg.png') }}" width="100" alt="" height="100"></div>
      <div class="col-md-6">
        <h4><strong>Consulta de Certificados laborales</strong></h4>
      </div>

    </div>

  </div>


  <header class="header">
    <nav class="navbar navbar-expand-lg navbar-light" id="nav1">
    <button id="menu_bar" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>  
    <ul class="ul">
       
        <a id="link" href="{{ route('certificados.index') }}">Mis registros</a>
        <a id="link" href="{{ route('certificados.consulta') }}">Mis certificados</a>
        <a id="link" href="{{ route('certificado.solicitud') }}">Solicitar Certificado</a>
        <a id="link" href="{{ route('solicitudes') }}">Solicitudes Realizadas</a>
        <a id="link" href="#">Ayuda y Soporte</a>
        <a id="link" href="#exampleModalLong" data-toggle="modal" data-target="#exampleModalLong" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Politicas y privacidad</a>
        <a id="link" href="http://www.quinchia-risaralda.gov.co/">Quines Somos</a>
        <!--
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Busqueda" aria-label="Search">
            <button type="button" class="btn btn-light">search</button>
          </form>-->
        <a id="link" href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
          <i class="fad fa-sign-in-alt"></i>Cerrar Sesión
        </a>
      </ul>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
      </form>
      {{-- <a class="nav-link" href="#">Cerrar Cesion</a> --}}
    </nav>
  </header>
  <!-- Modal -->
  <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Terminos de Uso y politicas de privacidad</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p class="">El Ministerio del Trabajo comprometido con el uso legal, el tratamiento de acuerdo
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
            internos para el tratamiento
          </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>
  </nav>
  @yield('content')
  <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</body>

<style>
  @media screen and (max-width:800px) {
    #nav1 {
      text-align: left;
      background: blue;
      width: 50%;
      height: 100%;
      margin: 0;

    }

    #link {
      display: block;
      float: none;
      border-bottom: 1px solid rgba(255, 255, 255, .3);
    }
  }
</style>
</html>