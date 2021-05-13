<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Certificado de trabajo</title>
  </head>
  <body>
    <div>
      <table class="table table-bordered" BORDER CELLPADDING=3 CELLSPACING=0>
        <tr>
          <td rowspan="2"  > <img src="imagenes/logo.png" width="100" alt="" height="100"> </td>
          <td rowspan="2"><center><H5>DEPARTAMENTO DE QUINCHIA MUNICIPIO DE QUINCHIA DESPACHO DEL ALCALDE</H5><H5>Nit. 891.480.032-7</H5></center></td>
          <td> versión: 5</td>
        </tr>
        <tr>
          <td>Código: 110.</td>
        </tr>
        <tr>
          <td colspan="2" rowspan="2"> <center><H5><b>TIEMPOS DE SERVICIO</b></H5></center></td>
          <td>#e3f2fd</td>
        </tr>
        <tr>
          <td style="font-size: 10px">Página 2 de 2</td>
        </tr>
      </table>
      <h5 aling="left" >Oficio {{ $certificado->id }}</h5>
    </div>
    <div>
    </div>
    <center>
    <h5>EL SUSCRITO SECRETARIO DE GOBIERNO Y SERVICIOS ADMINISTRATIVOS DEL MUNICIPIO DE QUINCHIA RISARALDA </h5>
    </center>
    <center>
    <h5>CERTIFICA:</h5>
    </center>
    <center>
    <p class="text-justify">
      Que revisados los libros y archivos que sobre personal retirado se llevan en esta dependencia,
      se pudo constatar que el señor <strong> {{ $certificado->user->name }} {{ $certificado->user->last_name }} </strong>  identificado con la cedula de ciudadania número <strong>{{ $certificado->user->cedula }}</strong> expedida Quinchía Risaralda, laboro
      al servicio de la Administración Municipal en calidad de obrero, un tiempo de servicio y remuneracion así:
      <p>
        </center>
        <center>
        <table class="table table-bordered table-sm">
          <thead>
            <tr>
              <th>PERIODO</th>
              <th>DIAS</th>
              <th>SUELDO</th>
              <th>S. DGDO</th>
              <th>C.P.S.M</th>
              <th>LEY 33/85</th>
            </tr>
          </thead>
          <tbody>
            @foreach ( json_decode($certificado->registros) as $registro)
            <tr>
              <td>{{ Carbon\Carbon::parse($registro->fecha_inicio)->formatLocalized('%d de %B  ') }} al {{ Carbon\Carbon::parse($registro->fecha_retiro)->formatLocalized('%d de %B %Y ') }}</td>
              <td>{{ $registro->dias_laborados }}</td>
              <td>{{ $registro->sueldo }}</td>
              <td>{{ $registro->caja_compensacion }}</td>
              <td>{{ $registro->cpsm }}</td>
              <td>{{ $registro->ley100 }}</td>
            </tr>
            @endforeach
            
          </tbody>
          <tr>
            <td>TOTAL DIAS</td>
            <td>{{ $certificado->total_dias }}</td>
            <td class="border-0"></td>
            <td class="border-0"></td>
            <td class="border-0"></td>
            <td class="border-0"></td>
          </tr>
        </table>
        </center>
        <CEnter>
        La presente certificación se expide a solicitud del interesado para trámites de pensión.
        Para constancia se firma el ( {{ Carbon\Carbon::parse($certificado->fecha_despacho)->formatLocalized('%d ') }}) días de  {{ Carbon\Carbon::parse($certificado->fecha_despacho)->formatLocalized('%B de %Y ') }}
        </CEnter>
    
        <div style="margin-top: 100px">
          <p>
          <img class="figure-img" src="{{ asset('img/firma.jpeg') }}" width="250" alt=""><br>

        <strong>JOSE DANIEL ARAGON BETANCOURT</strong> <br>
        Secretario de Gobierno y Servicios Administrativos <br>
         Proyecto/ Rafael Andres Silva <br>
            Aprobo: Jose Daniel Aragon Betancourt
          </p>
        </div>
        
      </body>
    </html>