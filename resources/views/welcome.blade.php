<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/estilo.css">
    <title>HISTORIAS LABORALES</title>


</head>

<body class="fondo">
    <header class="header">
        <div class="wrapper">

            <nav>
                @if (Route::has('login'))

                @auth
                @role('user')
                <a href="{{ route('certificados.index') }}" class="text-sm text-gray-700 underline">Inicio</a>
                @endrole
                @role('super-admin|admin')
                <a href="{{ route('home') }}" class="text-sm text-gray-700 underline">Administracion</a>

                @endrole
                @else
                <a href="{{ route('login') }}">Ingresar</a>

                @if (Route::has('register'))
                <a href="{{ route('register') }}">Registrarse</a>
                @endif
                @endauth

                @endif
            </nav>
        </div>
    </header>
    <main>

        <section class="cn-container">
            <div style="border-color: red;">
                <a href="#slide-1" style="font-size: 40px; color:cadetblue;"><strong>¿Como descargar su certicado laboral?</strong></a>
            </div>
            <!-- Slide 1 and sub-slides -->
            <div class="cn-slide ts-slide-sub" id="slide-1">
                <h2>pasos a seguir..</h2>
                <a href="#slide-main" class="cn-back">Regresar</a>
                <nav>
                    <a href="#slide-1-1">Aquí encontrara los pasos necesarios para su solicitud</a>

                </nav>
            </div>

            <div class="cn-slide" id="slide-1-1">
                <h2>Contenido</h2>
                <a href="#slide-main" class="cn-back">Regresar</a>
                <div class="contened">
                    <div class="cn-content">
                        <p><strong>¿Como solicitar y descargar mi certificado laboral en la Alcaldía de Quinchía?</strong></p>
                        <p>Paso 1: Haz clic en el botón Ingresar si aún no tienes una cuenta haz clic en el botón registrarse</p>
                        <img class="d-block w-100" src="{{ asset('imagenes/paso1.png') }}" alt="800" width="730">
                    </div>
                    <div class="cn-content">
                        <p>Paso 2: Pon tus credenciales y haz clic en el botón Ingresar</p>
                        <img class="d-block w-100" src="{{ asset('imagenes/paso2.png') }}" alt="800" width="730">
                    </div>

                    <div class="cn-content">
                        <p>Paso 3: Se ha iniciado tu sesión, verás en la página de inicio los registros asociados a tu nombre,etos
                            corresponden a los cargos que has tenido en la Alcaldía muicipal.
                            Si no hay ninguno puedes solicitaros en la oficina de archivo</p>
                        <img class="d-block w-100" src="{{ asset('imagenes/paso3.png') }}" alt="800" width="730">
                    </div>
                    <div class="cn-content">
                        <p>Paso 4: Haz clic en el botón Solicitar certificado, escribe el motivo de tu solicitud y haz clic en solicitar</p>
                        <img class="d-block w-100" src="{{ asset('imagenes/paso4.png') }}" alt="800" width="730">
                    </div>
                    <div class="cn-content">
                        <p>Ya has hecho tu solicitud</p>
                        <p>Paso 5: Puedes ver el listado de solicitudes dando clic en solicitudes realizadas, allí aparecen tus solicitudes
                            que han sido resueltas y las pendientes, recuerda que solo puedes tener una solicitud pendiente y no puedes hacer una solicitud nueva
                            hasta que esa sea resuelta por el adminitrador </p>
                        <img class="d-block w-100" src="{{ asset('imagenes/paso5.png') }}" alt="800" width="730">
                    </div>
                    <div class="cn-content">
                        <p>Ver mi certificado</p>
                        <p>Paso 6: si tienes solicitides con estado de despachado, puedes descargar tu certificado dando clic
                            en ver certificados, alli encontrarás un listado de todos los certificados que has solicitado y los puedes descargar
                            con un solo clic en el botón ver certificdo </p>
                        <img class="d-block w-100" src="{{ asset('imagenes/paso6.png') }}" alt="800" width="730">
                    </div>
                    <div class="cn-content">
                        <p>IMPORTANTE</p>
                        <p>Recuerda que bajo ninguna circunstancia puedes alterar este documento, puedes ver la politica de privacidad
                            e integridad de este documento haciendo clic en politicas y privacidad </p>
                        <img class="d-block w-100" src="{{ asset('imagenes/paso7.png') }}" alt="800" width="730">
                    </div>
                    <div class="cn-content">
                        <p>Ya estás listo !!</p>
                    </div>



                </div>

            </div>

        </section>

    </main>
</body>

</html>