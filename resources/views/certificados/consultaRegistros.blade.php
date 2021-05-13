php<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>pagina de inicio</title>
</head>


<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <div class="container-fluid">
          <img src="imagenes/descarg.png" width="100" alt="" height="100" >
          <a class="navbar-brand" href="#">Certificado laboral</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
          </div>
        </div>
    </nav>

      <nav class="navbar navbar-expand-lg" style="background-color: #e3f2ff;">
        <div class="container-fluid">
           >
          <a class="navbar-brand" href="#" >Consultas de certificados laborales</a>
          <button class="btn btn-link" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="solicitud">Solicitud de certificados</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Ayuda y Soporte</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Politicas y privacidad
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Quines Somos</a>
              </li>

            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Busqueda" aria-label="Search">
              <button type="button" class="btn btn-light">search</button>
            </form>
          </div>
        </div>
      </nav>


      //aquí va toda la busqueda de registros
    <div class="table-responsive">
        <table class="table">
            <thead class="text-primary">
                <th>Numero de cedula</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Cargo</th>
                <th>Fecha de inicio</th>
                <th>Fecha de retiro</th>
                <th>Dias Laborados</th>
                <th>Sueldo</th>
                <th>Devengado</th>
                <th>Ley 100</th>
            </thead>
            <tbody>
            @foreach ($registros as $registro)
                <tr>
                    <td>{{$registro->numero_cedula}}</td>
                    <td>{{$registro->nombre_empleado}}</td>
                    <td>{{$registro->apellidos_empleado}}</td>
                    <td>{{$registro->cargo}}</td>
                    <td>{{$registro->fecha_inicio}}</td>
                    <td>{{$registro->fecha_retiro}}</td>
                    <td>{{$registro->dias_laborados}}</td>
                    <td>{{$registro->sueldo}}</td>
                    <td>{{$registro->devengado}}</td>
                    <td>{{$registro->ley100}}</td>
            @endforeach
            </tbody>
        </table>
    </div>
    <a href="{{route('certificados.nuevo')}}" class="btn btn-primary" value="Ver certificados">
      <i class="material-icons">Ver certificado</i>
    </a>
    <a href="{{route('certificados.index')}}" class="btn btn-submit" value="Ver certificados">
      <i class="material-icons">Volver</i>
    </a>
      
      </div>

    </div>
</body>
</html>
