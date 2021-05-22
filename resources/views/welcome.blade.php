<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel = "stylesheet" href="css/estilo.css">
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
                        <a href="{{ route('login') }}" >Ingresar</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" >Registrarse</a>
                        @endif
                    @endauth

            @endif
        </nav>
    </div>
        </header>
<main>

   <section class="cn-container">



            <div >
                <nav>

                    <a href="#slide-1">¿Como descargar su certicado laboral?</a>


                </nav>
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
                        <p>los primeros pasos para solicitar y descarga su certificado</p>
                        <img src="../imagenes/digital.png" alt="800" width="730">
                    </div>
                    <div class="cn-content">
                        <p>los primeros pasos para solicitar y descarga su certificado</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae veritatis dignissimos quisquam doloremque ratione perferendis delectus debitis sequi distinctio aut! Tempora libero nihil enim dolorum voluptatum odit quod aliquam corrupti.</p>
                    </div>
                    <div class="cn-content">
                        <p>los primeros pasos para solicitar y descarga su certificado</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis esse voluptatum earum dolorem a quidem deleniti minima corporis autem? Ut voluptas qui aliquam quasi aperiam ipsum vel consequuntur illo commodi?</p>
                    </div>

                </div>

</div>

            </section>

</main>
    </body>
</html>